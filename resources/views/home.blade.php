@extends ('Layouts.layout')

@section ('calendar')
<div class="calendar">
<h1>Today is {{ date('M d, Y') }}</h1>
<h1>Upcoming Events</h1>

  <table>
    <thead>
      <tr>
        <td class="title" colspan="7">October 2015</td>
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
        <td class="otherDay weekend"></td>
        <td class="otherDay"></td>
        <td class="otherDay"></td>
        <td class="otherDay"></td>
        <td>1</td>
        <td>2</td>
        <td class=" weekend">3</td>
      </tr>
      <tr class="days">
        <td class="weekend">4</td>
        <td>5</td>
        <td class="selected">6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td class="weekend">10</td>
      </tr>
      <tr class="days">
        <td class="weekend">11</td>
        <td class="today">12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td class="weekend">17</td>
      </tr>
      <tr class="days">
        <td class="weekend">18</td>
        <td>19</td>
        <td>20</td>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td class="weekend">24</td>
      </tr>
      <tr class="days">
        <td class="weekend">25</td>
        <td>26</td>
        <td>27</td>
        <td>28</td>
        <td>29</td>
        <td>30</td>
        <td class="weekend">31</td>
      </tr>
    </tbody>
  </table>
</div>
@stop


@stop
@section ('middle-top')

@stop
@section('title')
<span class="why">Why Join Pueblo’s PTO?</span>
@stop

@section ('content')

<p>Arizona is ranked 50th for education funding at less than $7,800 a year per student. The national average is over $10,000 per student.
</p>
<p>The PTO supplements our childrens' education by providing additional enrichment activities such as the Art Masterpiece program, Spanish resources that are only at our school, Pueblo.
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
@stop

				
