@extends ('Layouts/layout')
@section ('calendar')

<div class="calendar">
<p>Today is {{ date('M d, Y') }}</p>
<h1>Upcoming Events</h1>

  <table>
    <thead>
      <tr>
        <td class="calendar-title" colspan="7">October 2015</td>
        <?php 

      </tr>
      <tr>
        <!-- <td class="button">«</td>
        <td class="button">‹</td> -->
        <td class="button" colspan="3">
        {{-- <p>Today is {{ date('M d, Y') }}</p> --}}
        </td>
        <!-- <td class="button">›</td>
        <td class="button">»</td> I WANT TO DO AN ON.CLICK HERE TO SCROLL THROUGH THE MONTHS-->
      </tr>
      <tr>
        <th class="weekend">S</th>
        <th>M</th>
        <th>T</th>
        <th>W</th>
        <th>T</th>
        <th>F</th>
        <th class="weekend">S</th>
      </tr>
    </thead>
    <tbody>
      <tr class="days">
      <?php
      $month = '04';

      $sql = "SELECT * from events where month = :x";
      $row = DB::selectOne($sql, ["x"=>$month]);

      $year = date ("Y");
      $day = date("d");
      $endDate = date("t", mktime(0,0,0, $month, $day, $year));

      $s = date ("w", mktime, (0,0,0, $month, 1, $year));

      for ($ds = 1; $ds<=$s; $ds++) {
        echo "<td style= \"font-family:arial;color:#B3D9FF\" align=center valign = middle bgcolor = \"#FFFFFF\"> </td>";}
      
        for (d=1; $d<=$endDate; $d++) {
          if (date("w", mktime, (0,0,0, $month, $d, $year)) == 0) { echo "<tr>"; }

            echo "<td style=\"font-family:arial; color:#333333\" align=centervalign=middle> <span style=\"color:#000\">f$d</span></td>";
          if(date("w", mktime, (0,0,0, $month, $d, $year)) == 6) { echo "</tr>"; }
          echo '</table>';
      }
      ?>
@stop

     
