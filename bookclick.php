<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from stepform.cidcode.net/timon-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 08:47:37 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta name="description" lang="en" content="Timon Step Form Wizard - With Timon - Step Form Wizard you will have power combo of 21 different styles, 8 different transition effects, validation in your step form, titles and subtitles with multiple step, also Timon - Step Form Wizard has predefined set of form sizes from tiny to large. You can easily create and customize any form to fit your needs">
    <meta name="keywords" lang="en" content="timon,checkout, configuration, form, jquery plugin, multi step, multistep, navigation, registration, responsive, slider form, step, step by step, steps, tabs, wizard">
    <meta name="robots" content="index, follow">
    <title>Vehicle Hub</title>

    <!--Import Google Icon Font-->
    <link href='http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!--Import Multi Step Indicator css-->
    <link href="assets/css/gsi-step-indicator.min.css" rel="stylesheet" />

    <!--Import  Step Form Wizard css-->
    <link href="assets/css/tsf-step-form-wizard.min.css" rel="stylesheet" />
    <!--Import  demo css-->
    <link href="assets/css/demo.min.css" rel="stylesheet" />

    <link href="assets/plugin/parsley/css/parsley.min.css" rel="stylesheet" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--Plugin for validation-->
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  
  
      <link rel="stylesheet" href="css/style.css">
 

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js'></script>

  

    <script  src="js/index.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

    <div class="demo-settings" data-open="true">
        <!-- <div class="settings-icon">
            <a href="#" class="btn-setting"><i class="fa fa-2x fa-cogs"></i></a>
            <a href="#" class="btn-remove"><i class="fa fa-2x fa-times"></i></a>
        </div> -->
        <div class="settings-main">
            <label>Step effect</label>
            <select class="form-control" id="stepEffect">
                <option value="basic" selected="selected">basic</option>
                <option value="bounce">bounce</option>
                <option value="slideRightLeft">slideRightLeft</option>
                <option value="slideLeftRight">slideLeftRight</option>

                <option value="flip">flip</option>
                <option value="transformation">transformation</option>
                <option value="slideDownUp">slideDownUp</option>
                <option value="slideUpDown">slideUpDown</option>
            </select>
            <br />
            <label for="stepTransition">
                Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked />
            </label>
            <br />
            <label for="showButtons">
                Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked />
            </label>
            <br />
            <label for="showStepNum">
                Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked />
            </label>


        </div>
    </div>

    <div class="container">
        <!-- <div class="row"> <h1>Validation examples</h1></div> -->
        <div class="row"><div id="result" class="code-example"></div></div>
        <div class="row">
            
            <!-- BEGIN STEP FORM WIZARD -->
            <div class="tsf-wizard tsf-wizard-1">
                <!-- BEGIN NAV STEP-->
                <div class="tsf-nav-step">
                    <!-- BEGIN STEP INDICATOR-->
                    <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                        <li class="current" data-target="step-1">
                            <a href="#0">
                                <span class="number">1</span>
                                <span class="desc">
                                    <label>Starting Point</label>
                                    <span>Starting Point</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="#0">
                                <span class="number">2</span>
                                <span class="desc">
                                    <label>PickUp Time & Dropoff Time</label>
                                    <span>PickUp Time</span>
                                </span>
                            </a>
                        </li>
                      
                    </ul>
                    <!-- END STEP INDICATOR--->
                </div>
                <!-- END NAV STEP-->
                <!-- BEGIN STEP CONTAINER -->

                <div class="tsf-container">
                    <!-- BEGIN CONTENT-->
                <form class="tsf-content" action="fleet-second.php" method="POST">

                        <!--<form class="tsf-form">-->
                        <!-- BEGIN STEP 1-->
                        <div class="tsf-step step-1 active">
                            <fieldset>
                                <!-- <legend>Tell us your Starting Point</legend> -->
                                <h1>Tell us your Starting Point</h1>
                                <hr>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <br> <br>
                                                <label >Starting Point :-</label>
                                                <br> <br>
                                                <input type="text" name="location" class="form-control required" value="Front gate Bharti Vidhyapeeth Pune" >
                                                <br> <br>
                                            </div>
                                           
                                        </div>
                                       
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>

                            </fieldset>
                        </div>
                        <!-- END STEP 1-->
                        <!-- BEGIN STEP 2-->
                       <div class="tsf-step step-2" class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl" ng-cloak>
                            <fieldset>
                                <h1>PickUp Date and Time</h1>
                                <hr>
                                
                               <!--   <div class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl" ng-cloak> -->

                                            <div date-picker
                                                 datepicker-title="Select Date"
                                                 picktime="true"
                                                 pickdate="true"
                                                 pickpast="false"
                                                 mondayfirst="false"
                                                 custom-message="You have selected"
                                                 selecteddate="ctrl.selected_date"
                                                 updatefn="ctrl.updateDate(newdate)">
                                            
                                                <div class="datepicker"
                                                     ng-class="{
                                                        'am': timeframe == 'am',
                                                        'pm': timeframe == 'pm',
                                                        'compact': compact
                                                    }">
                                                    <div class="datepicker-header">
                                                        <div class="datepicker-title" ng-if="datepicker_title">{{ datepickerTitle }}</div>
                                                        <div id="p_date" class="datepicker-subheader"> {{ localdate.getDate() }}-{{ monthNames[localdate.getMonth()] }}-{{ localdate.getFullYear() }}</div>
                                                    </div>
                                                    <div class="datepicker-calendar">
                                                        <div class="calendar-header">
                                                            <div class="goback" ng-click="moveBack()" ng-if="pickdate">
                                                                <svg width="30" height="30">
                                                                    <path fill="none" stroke="#0DAD83" stroke-width="3" d="M19,6 l-9,9 l9,9"/>
                                                                </svg>
                                                            </div>
                                                            <div class="current-month-container">{{ currentViewDate.getFullYear() }} {{ currentMonthName() }}</div>
                                                            <div class="goforward" ng-click="moveForward()" ng-if="pickdate">
                                                                <svg width="30" height="30">
                                                                    <path fill="none" stroke="#0DAD83" stroke-width="3" d="M11,6 l9,9 l-9,9" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="calendar-day-header">
                                                            <span ng-repeat="day in days" class="day-label">{{ day.short }}</span>
                                                        </div>
                                                        <div class="calendar-grid" ng-class="{false: 'no-hover'}[pickdate]">
                                                            <div
                                                                ng-class="{'no-hover': !day.showday}"
                                                                ng-repeat="day in month"
                                                                class="datecontainer"
                                                                ng-style="{'margin-left': calcOffset(day, $index)}"
                                                                track by $index>
                                                                <div class="datenumber" ng-class="{'day-selected': day.selected }" ng-click="selectDate(day)">
                                                                    {{ day.daydate }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timepicker" ng-if="picktime == 'true'">
                                                        <div ng-class="{'am': timeframe == 'am', 'pm': timeframe == 'pm' }">
                                                            <div class="timepicker-container-outer" selectedtime="time" timetravel>
                                                                <div class="timepicker-container-inner">
                                                                    <div class="timeline-container" ng-mousedown="timeSelectStart($event)" sm-touchstart="timeSelectStart($event)">
                                                                        <div class="current-time">
                                                                            <div class="actual-time">{{ time }}</div>
                                                                        </div>
                                                                        <div class="timeline">
                                                                        </div>
                                                                        <div class="hours-container">
                                                                            <div class="hour-mark" ng-repeat="hour in getHours() track by $index"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="display-time">
                                                                        <div class="decrement-time" ng-click="adjustTime('decrease')">
                                                                            <svg width="24" height="24">
                                                                                <path stroke="white" stroke-width="2" d="M8,12 h8"/>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="time" ng-class="{'time-active': edittime.active}">
                                                                            <input type="text" class="time-input" ng-model="edittime.input" ng-keydown="changeInputTime($event)" ng-focus="edittime.active = true; edittime.digits = [];" ng-blur="edittime.active = false"/>
                                                                            <div id="p_time" class="formatted-time">{{ edittime.formatted }}</div>

                                                                        </div>
                                                                        <div class="increment-time" ng-click="adjustTime('increase')">
                                                                            <svg width="24" height="24">
                                                                                <path stroke="white" stroke-width="2" d="M12,7 v10 M7,12 h10"/>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="am-pm-container">
                                                                        <div class="am-pm-button" ng-click="changetime('am');">am</div>
                                                                        <div class="am-pm-button" ng-click="changetime('pm');">pm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- <div class="buttons-container">
                                                        <div class="cancel-button">CANCEL</div>
                                                        <div class="save-button">SAVE</div>
                                                    </div> -->
                                                
                                    
                                                     <input type="hidden" name="P_time_input" id="P_time_input">
                                                     <input type="hidden" name="P_date_input" id="P_date_input">
                                                     <script type="text/javascript">
                                                        setInterval(function () {
                                                            document.getElementById("P_date_input").value = document.getElementById("p_date").innerHTML;
                                                          document.getElementById("P_time_input").value = document.getElementById("p_time").innerHTML;
                                                        }, 5);
                                                        </script>
                                                </div>
                                            </div>
                                       <!--  </div> -->

                                      <!--  DROP OFF  -->


                                       <h1>DropOff Date and Time</h1>
                                <hr>
                                
                               <!--   <div class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl" ng-cloak> -->

                                            <div date-picker
                                                 datepicker-title="Select Date"
                                                 picktime="true"
                                                 pickdate="true"
                                                 pickpast="false"
                                                 mondayfirst="false"
                                                 custom-message="You have selected"
                                                 selecteddate="ctrl.selected_date"
                                                 updatefn="ctrl.updateDate(newdate)">
                                            
                                                <div class="datepicker"
                                                     ng-class="{
                                                        'am': timeframe == 'am',
                                                        'pm': timeframe == 'pm',
                                                        'compact': compact
                                                    }">
                                                    <div class="datepicker-header">
                                                        <div class="datepicker-title" ng-if="datepicker_title">{{ datepickerTitle }}</div>
                                                        <div id="d_date" class="datepicker-subheader"> {{ localdate.getDate() }}-{{ monthNames[localdate.getMonth()] }}-{{ localdate.getFullYear() }}</div>

                                                    </div>
                                                    <div class="datepicker-calendar">
                                                        <div class="calendar-header">
                                                            <div class="goback" ng-click="moveBack()" ng-if="pickdate">
                                                                <svg width="30" height="30">
                                                                    <path fill="none" stroke="#0DAD83" stroke-width="3" d="M19,6 l-9,9 l9,9"/>
                                                                </svg>
                                                            </div>
                                                            <div class="current-month-container">{{ currentViewDate.getFullYear() }} {{ currentMonthName() }}</div>
                                                            <div class="goforward" ng-click="moveForward()" ng-if="pickdate">
                                                                <svg width="30" height="30">
                                                                    <path fill="none" stroke="#0DAD83" stroke-width="3" d="M11,6 l9,9 l-9,9" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="calendar-day-header">
                                                            <span ng-repeat="day in days" class="day-label">{{ day.short }}</span>
                                                        </div>
                                                        <div class="calendar-grid" ng-class="{false: 'no-hover'}[pickdate]">
                                                            <div
                                                                ng-class="{'no-hover': !day.showday}"
                                                                ng-repeat="day in month"
                                                                class="datecontainer"
                                                                ng-style="{'margin-left': calcOffset(day, $index)}"
                                                                track by $index>
                                                                <div class="datenumber" ng-class="{'day-selected': day.selected }" ng-click="selectDate(day)">
                                                                    {{ day.daydate }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timepicker" ng-if="picktime == 'true'">
                                                        <div ng-class="{'am': timeframe == 'am', 'pm': timeframe == 'pm' }">
                                                            <div class="timepicker-container-outer" selectedtime="time" timetravel>
                                                                <div class="timepicker-container-inner">
                                                                    <div class="timeline-container" ng-mousedown="timeSelectStart($event)" sm-touchstart="timeSelectStart($event)">
                                                                        <div class="current-time">
                                                                            <div class="actual-time">{{ time }}</div>
                                                                        </div>
                                                                        <div class="timeline">
                                                                        </div>
                                                                        <div class="hours-container">
                                                                            <div class="hour-mark" ng-repeat="hour in getHours() track by $index"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="display-time">
                                                                        <div class="decrement-time" ng-click="adjustTime('decrease')">
                                                                            <svg width="24" height="24">
                                                                                <path stroke="white" stroke-width="2" d="M8,12 h8"/>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="time" ng-class="{'time-active': edittime.active}">
                                                                            <input type="text" class="time-input" ng-model="edittime.input" ng-keydown="changeInputTime($event)" ng-focus="edittime.active = true; edittime.digits = [];" ng-blur="edittime.active = false"/>
                                                                            <div id="d_time" class="formatted-time">{{ edittime.formatted }}</div>
                                                                        </div>
                                                                        <div class="increment-time" ng-click="adjustTime('increase')">
                                                                            <svg width="24" height="24">
                                                                                <path stroke="white" stroke-width="2" d="M12,7 v10 M7,12 h10"/>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="am-pm-container">
                                                                        <div class="am-pm-button" ng-click="changetime('am');">am</div>
                                                                        <div class="am-pm-button" ng-click="changetime('pm');">pm</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- <div class="buttons-container">
                                                        <div class="cancel-button">CANCEL</div>
                                                        <div class="save-button">SAVE</div>
                                                    </div> -->
                                                    
                                                </div>
                                            </div>

                                                     <input type="hidden" name="d_time_input" id="d_time_input">
                                                     <input type="hidden" name="d_date_input" id="d_date_input">
                                                     <script type="text/javascript">
                                                        setInterval(function () {
                                                            document.getElementById("d_date_input").value = document.getElementById("d_date").innerHTML;
                                                          document.getElementById("d_time_input").value = document.getElementById("d_time").innerHTML;
                                                        }, 5);
                                                        </script>
                                       <!--  </div> -->
                            </fieldset>
                        </div> 
                        <!-- END STEP 2-->
                     
                    </form>

                   
                    <!-- END CONTENT-->
                    <!-- BEGIN CONTROLS-->
                    <div class="tsf-controls ">
                        <!-- BEGIN PREV BUTTTON-->
                        <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                            <i class="fa fa-chevron-left"></i> PREV
                        </button>
                        <!-- END PREV BUTTTON-->
                        <!-- BEGIN NEXT BUTTTON-->
                        <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn">
                            NEXT <i class="fa fa-chevron-right"></i>
                        </button>
                        <!-- END NEXT BUTTTON-->
                        <!-- BEGIN FINISH BUTTTON-->
                        <button type="submit" data-type="finish" class="btn btn-right tsf-wizard-btn" >
                            FINISH
                        </button>
                        <!-- END FINISH BUTTTON-->
                    </div>
                    <!-- END CONTROLS-->
                </div>
                <!-- END STEP CONTAINER -->


            </div>
            <!-- END STEP FORM WIZARD -->
            <div class="clearfix"></div>
           
        </div>
        <br /><br />
        <footer>
           
        </footer>
    </div>

    <script src="assets/js/jquery-3.1.0.min.js"></script>
    <script src="assets/js/demo.js"></script>
    <!--Plugin for validation-->
    <!--<script src="assets/plugin/validate/jquery.validate.js"></script>-->
    <script src="assets/plugin/parsley/js/parsley.js"></script>

    <script src="assets/js/tsf-wizard-plugin.js"></script>

    <script>
        $(function () {
            pageLoadScript();
        });
    

        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style1';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


          tsf1=  $('.tsf-wizard-1').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'top',
                validation: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: 'auto',
                // onNextClick: function (e, from, to, validation) {
                //     $('#result').append('<br/>onNextClick from ' + from +
                //         ' - to ' + to + ' validation ' + validation)
                // },
                // onPrevClick: function (e, from, to) {
                //     $('#result').append('<br/>onPrevClick from ' + from + ' - to ' + to)
                // },
                // onFinishClick: function (e, validation) {
                //     $('#result').append('<br/>onFinishClick validation ' + validation)
                // }
            });         


        }
    </script>

    <!-- <!-- GoogleAnalytics 
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-57236793-8', 'auto');
        ga('send', 'pageview');

    </script> -->


</body>



<!-- Mirrored from stepform.cidcode.net/timon-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 08:47:38 GMT -->
</html>
