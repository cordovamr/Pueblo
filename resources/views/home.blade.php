@extends ('Layouts.layout')

@section ('calendar')
<div class="calendar">
<p>Today is {{ date('M d, Y') }}</p>
<h1>Upcoming Events</h1>

  <table>
    <thead>
      <tr>
        <td class="calendar-title" colspan="7">{{ date('F  Y') }}</td>
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
      $month = date ("m");
      $year = date ("Y");
      $today = date("d");
      $endDate = date("t", mktime(0,0,0, $month, $today, $year));

      $s = date ("w", mktime(0,0,0, $month, 1, $year));

      for ($ds = 1; $ds<=$s; $ds++) {

       echo "<td style='font-family:arial;color:#B3D9FF' align=center valign=middle> </td>";}
      
        for ($day=1; $day<=$endDate; $day++) {
          if (date("w", mktime(0,0,0, $month, $day, $year)) == 0) { 
            echo "<tr>";
          }

            
            $sql = "SELECT * from events where month = " . $month;
            $rows = DB::select($sql);

            foreach($rows as $row) {
              var_dump($row);
              // $theStamp = $row['eventStart'];
              // $event_day = date('d', $theStamp);

              //   if($event_day == $day) {
              //     echo "lalala";
                
              //   } else {
              //     echo "<td style=\"font-family:arial; color:#333333\" align=centervalign=middle> <span style=\"color:#000\">$day</span></td>";
              //   }


            }          
                        
          if(date("w", mktime(0,0,0, $month, $day, $year)) == 6) { echo "</tr>"; }
          
      }
      echo "</table>";?>


@endsection
@section ('middle-top')

@endsection
@section('title')
<span class="why">Welcome! Bienvenidos!</span>
@endsection

@section ('content')

<p>Arizona is ranked 50th for education funding at less than $7,800 a year per student. The national average is over $10,000 per student.
</p>
<p>No other school offers Spanish immersion like Pueblo! It is the only Spanish immersion program in the Scottsdale Unified School District. Students learn half of their subjects daily in English, and the other half in Spanish. They are introduced to Spanish grammar & syntax. They are exposed to cultural traditions and celebrations from across the world in Spanish-speaking countries.

<p>Studies show that bilingual students are better multi-taskers, and problem-solvers.

<p>The Pueblo PTO supplements our childrens' education by providing additional enrichment activities such as the Art Masterpiece program, and Spanish resources that are only at our school, Pueblo.
</p>
Pueblo PTO is a 501(c)3 non-profit organization – your donation is 100% tax deductible. Please drop off cash or check payable to: Pueblo PTO at Pueblo Front Office.

Schedules are busy for everyone…but being involved in our children’s education is important. Don’t be afraid to sign up to be a volunteer, there are lots of fundraisers and school events throughout the year. The more people we have, the better our community will be which will only benefit OUR children.

Who Can Join the PTO?

Parents – padres
Teachers- maestros
Grandparents – abuelos
Aunts – tia’s
Uncles – tio’s
Neighbors – vecinos

PTO meetings are typically the first Tuesday of every month at 6:00pm at the library – please check our calendar for specific dates.
@endsection

				
