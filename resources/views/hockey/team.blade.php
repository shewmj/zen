
@extends('layouts.hockey_base')


@section('title')
{{ $teamName }}
@endsection

@section('content')        
    
<div class="flex-center position-ref">
    <div class="content">
        <div class="title m-b-md">
            {{ $teamName }}
        </div>
   
      

        
          <table class="table is-fullwidth">
              <thead>
              <tr>
                <th>Player</th>
                <th>Position</th>
                <th>Number</th>          
              </tr>
              </thead>
            
              <tbody>
                @foreach($players as $player)
                  <tr>
                    <th>
                      <a href="/NHL/team/{{ $teamName }}/{{ $player['person']['id'] }}">
                        <span>{{ $player['person']['fullName'] }}</span>
                      </a>
                    </th>
                    <td>{{ $player['jerseyNumber'] }}</td>
                    <td>{{ $player['position']['name'] }}</td>           
                  </tr>
                @endforeach

             
              
              
              </tbody>
          </table>

        
    </div>
</div>



@endsection
