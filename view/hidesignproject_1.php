<?php
include __DIR__ . '/../view/partial/hidp_head.php';
include __DIR__ . '/../view/partial/header.php';
$semester = 'Winter';
$year = '2018';
$homeview = [];
$homeView[1] = ["classid"=>"CS371", "weeklyassignments"=>5,];

?>
<!-- First Container -->
<body>        
    <div data-role="main" class="ui-content">
    <h2>I-Learn Home View</h2>
    <div data-role="collapsible">
    <h4>Upcoming Events</h4>
    <ul data-role="listview">
        <?php
        foreach ($homeView as $listviewitem)
        {
            //add a row to the table for each flying_object
                echo '<li><a class="dropdown-item" href="#">
                      <div class="classdata">' . $listviewitem[classid] . ' (Online): '. $semester . ' '. $year. '</div>
                        <div class="progress">
                          <span class="progress-bar" style="width:50%">
                          </span>
                        </div>
                      <div class="txtprogess">75% 3 of 4 topics complete</div>
                        </a>  <!-- Dropdown Menu Ends -->
                      </li>';
        }
        //make the table header
        echo '<div>
            <table>
            <tr>
            <th>Scripture ID</th>
            <th>Book Chapter:Verse</th> 
            <th>Content</th>
          </tr>';

        foreach ($db->query('SELECT * FROM scriptures;') as $row)
        {
            //add a row to the table for each flying_object
                echo '<tr><td>' . $row['id'] . '</td>'. 
                        '<td>' 
                        . $row['book'] . ' ' . $row['chapter'] 
                        . ':' . $row['verse'] . 
                        '</td>'.
                        '<td>' . $row['content'] . '</td></tr>';
        }
        ?>
      <li><a class="dropdown-item" href="#">
                      <div class="classdata">Class ## (Online): Semester Year</div>
                        <div class="progress">
                          <span class="progress-bar" style="width:50%">
                          </span>
                        </div>
                      <div class="txtprogess">75% 3 of 4 topics complete</div>
                  </a>  <!-- Dropdown Menu Ends -->
      </li>
    </ul>
    <ul data-role="listview">
      <li><a class="dropdown-item" href="#">
                      <div class="classdata">Class ## (Online): Semester Year</div>
                        <div class="progress">
                          <span class="progress-bar" style="width:50%">
                          </span>
                        </div>
                      <div class="txtprogess">75% 3 of 4 topics complete</div>
                  </a>  <!-- Dropdown Menu Ends -->
      </li>
    </ul>    
    </div>
    </div>
    <div data-role="main" class="ui-content">
    <h2>I-Learn Class Home View</h2>
    <div data-role="collapsible">
    <h4>Upcoming Events</h4>
    <ul data-role="listview">
      <li>                  <!-- Dropdown Item -->
                  <a class="dropdown-item" href="#">
                    <div class="floating-box">
                        <div class="date "><div class="weekday">Mon</div><div class="day">30</div></div>
                        <div class="completionstatusicon"><input type="checkbox"></div>
                    </div>
                    <div class="row">
                        <span class="duetime ">5PM<span class="duealert ">-due</span></span>
                        <span class="grade ">Grade 0/20</span>
                    </div> 
                    <div class="row">
                          <span class="assignmentinfo">Assignment Type: Assignment Title</span>
                    </div>
                    <div class="row">
                          <span class="assignmentdescandtimeest">Brief assignment description & Est. Time requirements</span>
                    </div>  
                  </a> <!-- Dropdown Item Ends --></li>
      <li>                  <!-- Dropdown Item -->
                  <a class="dropdown-item" href="#">
                    <div class="floating-box">
                        <div class="date "><div class="weekday">Mon</div><div class="day">30</div></div>
                        <div class="completionstatusicon"><input type="checkbox"></div>
                    </div>
                    <div class="row">
                        <span class="duetime ">5PM<span class="duealert ">-due</span></span>
                        <span class="grade ">Grade 0/20</span>
                    </div> 
                    <div class="row">
                          <span class="assignmentinfo">Assignment Type: Assignment Title</span>
                    </div>
                    <div class="row">
                          <span class="assignmentdescandtimeest">Brief assignment description & Est. Time requirements</span>
                    </div>  
                  </a> <!-- Dropdown Item Ends --></li>
      <li>                  <!-- Dropdown Item -->
                  <a class="dropdown-item" href="#">
                    <div class="floating-box">
                        <div class="date "><div class="weekday">Mon</div><div class="day">30</div></div>
                        <div class="completionstatusicon"><input type="checkbox"></div>
                    </div>
                    <div class="row">
                        <span class="duetime ">5PM<span class="duealert ">-due</span></span>
                        <span class="grade ">Grade 0/20</span>
                    </div> 
                    <div class="row">
                          <span class="assignmentinfo">Assignment Type: Assignment Title</span>
                    </div>
                    <div class="row">
                          <span class="assignmentdescandtimeest">Brief assignment description & Est. Time requirements</span>
                    </div>  
                  </a> <!-- Dropdown Item Ends --></li>
    </ul>
    </div>
    </div> 
    </body>
</div>
<?php 
