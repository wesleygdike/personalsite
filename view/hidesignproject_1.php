<?php
include __DIR__ . '/../view/partial/hidp_head.php';
include __DIR__ . '/../view/partial/header.php';
?>
<!-- First Container -->
<body>        
    <div data-role="main" class="ui-content">
    <h2>I-Learn Class Home View</h2>
    <div data-role="collapsible">
    <h4>Upcoming Events</h4>
    <ul data-role="listview">
      <li>                  <!-- Dropdown Item -->
          <a class="dropdown-item" href="hidesignproject_2.php">
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
          <a class="dropdown-item" href="hidesignproject_2.php">
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
          <a class="dropdown-item" href="hidesignproject_2.php">
                    <div class="floating-box">
                        <div class="date "><div class="weekday">Complete</div>
                            <div class="completionstatusicon"><img src="/image/check.png" class="img-center-block" alt="Complete Image"></div>
                        </div>
                    </div>  
                    <div class="row">
                        <span class="grade ">Grade 0/20</span>
                    </div> 
                    <div class="row">
                          <span class="assignmentinfo">Assignment Type: Assignment Title</span>
                    </div>
                    <div class="row">
                        <span class="assignmentdescandtimeest">feedback</span>
                    </div>  
          </a> <!-- Dropdown Item Ends --></li>
    </ul>
    </div>
    </div> 
    </body>
</div>
<?php 

