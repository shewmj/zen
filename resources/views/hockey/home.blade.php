
@extends('layouts.hockey_base')


@section('title', 'NHL')

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
                <th><abbr title="Points">Pts</abbr></th>
                <th><abbr title="Goals Per Game">GPG</abbr></th>
                <th><abbr title="Goals Against Per Game">GAPG</abbr></th>
                <th><abbr title="Power Play Percentage">PP%</abbr></th>
                <th><abbr title="Penalty Kill Percentage">PK%</abbr></th>
                
              </tr>
              </thead>
              
              <tbody>

              @foreach($teams as $team)
                  
                  

                  <tr>
                      
                      <th>

                        
                        <a href="/NHL/team/{{ $team['name'] }}/{{ $team['id'] }}">
                          <span>{{ $team['name'] }}</span>
                        </a>
                        
                        
                      </th>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['gamesPlayed'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['wins'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['losses'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['ot'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['pts'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['goalsPerGame'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['goalsAgainstPerGame'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['powerPlayPercentage'] }}</td>
                      <td>{{ $team['teamStats'][0]['splits'][0]['stat']['penaltyKillPercentage'] }}</td>
                      
                  </tr>


              @endforeach   
              
              
              </tbody>
          </table>

        
    </div>
</div>



@endsection
