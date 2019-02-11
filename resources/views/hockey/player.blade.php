
@extends('layouts.hockey_base')


@section('title')


@endsection 

@section('content')        
    
<div class="flex-center position-ref">
    <div class="content">
        
          <table class="table is-fullwidth">
              <thead>
              <tr>
                <th>Team</th>
                <th><abbr title="Games Played">GP</abbr></th>
                <th><abbr title="Won">W</abbr></th>
                <th><abbr title="Lost">L</abbr></th>
                <th><abbr title="OT Lost">OTL</abbr></th>
                <th><abbr title="Goals for">GF</abbr></th>
                <th><abbr title="Goals against">GA</abbr></th>
                <th><abbr title="Goal difference">GD</abbr></th>
                <th><abbr title="Points">Pts</abbr></th>
                
              </tr>
              </thead>
              
              <tbody>

              @foreach($teams as $team)
                  
                  

                <tr>
                  <th>1</th>
                  <th>

                    
                    <a href="/NHL/team/{{ $team['name'] }}/{{ $team['id'] }}">
                      <span>{{ $team['name'] }}</span>
                    </a>
                    
                    
                  </th>
                  <td>{{ $team['name'] }}</td>
                  <td>23</td>
                  <td>12</td>
                  <td>3</td>
                  <td>68</td>
                  <td>36</td>
                  <td>+32</td>
                  <td>81</td>
                      
                </tr>


              @endforeach   
              
              
              </tbody>
          </table>

        
    </div>
</div>



@endsection
