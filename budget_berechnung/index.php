<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    ;
    <link rel="stylesheet" href="css/style.css">
    <style>
        .dropdown-menu.show {
            width: 100% !important;
        }

        .drop-down-search:focus {
            box-shadow: none !important;
            border-color: #fff !important;
        }

        select,
        input {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" class="mt-5" width="157" height="42" viewBox="0 0 157 42">
                <g fill="none">
                    <path fill="#C84182" d="M91.523 34C83.708 34 79 28.808 79 21.5S83.708 9 91.523 9C99.293 9 104 14.192 104 21.5S99.292 34 91.523 34zm0-5.512c3.201 0 5.165-2.434 5.165-6.984s-1.964-6.984-5.165-6.984c-3.247 0-5.211 2.435-5.211 6.984 0 4.55 1.964 6.984 5.211 6.984zM132 21.347C132 29.162 127.92 34 121.54 34c-3.471 0-6.004-1.861-6.942-3.115h-.096v2.374H107V0h7.502v11.813h.096c.938-1.254 3.47-3.115 6.942-3.115 6.38 0 10.46 4.838 10.46 12.649zm-7.502 0c0-4.653-1.877-7.07-4.926-7.07-3.05 0-4.926 2.417-4.926 7.07 0 4.653 1.876 7.07 4.926 7.07 3.05 0 4.926-2.417 4.926-7.07z" />
                    <path fill="#E6AF14" d="M157 26.325c0 4.963-3.911 7.675-10.687 7.675-8.733 0-12.074-3.767-12.313-8.548h7.16c.239 2.346 1.86 3.495 4.866 3.495 2.148 0 3.341-.69 3.341-2.022 0-2.022-2.29-2.298-6.156-3.124-4.15-.873-8.734-2.346-8.734-7.262 0-4.274 3.819-7.539 10.687-7.539 7.827 0 10.881 3.814 11.12 7.952h-7.155c-.24-1.886-1.291-2.895-3.77-2.895-2.148 0-3.244.736-3.244 1.886 0 1.656 1.524 1.698 5.294 2.481 4.818 1.01 9.591 2.572 9.591 7.901zM47.094 26.14h7.53C53.3 30.874 49.51 34 42.928 34 34.878 34 30 28.855 30 21.5 30 14.332 34.781 9 42.5 9 50.787 9 55 14.883 55 23.43H37.574c0 3.308 2.509 5.056 5.21 5.056 2.605-.004 3.838-1.196 4.31-2.346zm-9.52-7.172h9.852c0-3.262-2.037-4.916-4.926-4.916-2.889 0-4.926 1.654-4.926 4.916z" />
                    <path fill="#C84182" d="M71 3.5C71 1.233 72.749 0 75 0s4 1.233 4 3.5C79 5.817 77.251 7 75 7c-2.247.005-4-1.179-4-3.5z" />
                    <path fill="#E6AF14" d="M65 21.457L61.435 10H54l7.688 20s1.78-4.118 3.312-8.543z" />
                    <path fill="#C84182" d="M71.4 10.004l-3.045 10.297c-.737 2.95-3.285 12.225-6.89 14.973-.877.952-2.46 1.115-4.369.69H57v5.573c1.566.326 2.947.463 4.228.463 5.132 0 7.412-1.672 9.504-7.755L79 10h-7.6v.004z" />
                    <path fill="#E6AF14" d="M7.396 0v12.923h11.208V0H26v33h-7.396V19.71H7.396V33H0V0z" />
                </g>
            </svg>
            <br>
            <h5>
                Budgetrenchner
            </h5>
        </div>
        <div class="col-8 offset-2">
            <div class="jobtype row" id="first">
                <div class="row">
                    <div class="col-4 offset-4">

                        <img src="images/slide1nav.png" width="100%" alt="">
                    </div>
                </div>

                <div class="col-lg-4">
                    <img src="images/d1.PNG" alt="">
                </div>
                <div class="col-lg-8">
                    <h2>
                        Welche Stelle möchten Sie besetzen?
                    </h2>
                    <select name="jobtyp" id="jobtyp" class="form-control" onchange="calculation();"></select>

                </div>


                <button class="mt-2 purplebtn" onclick='firstslide()'>WEITTER</button>
            </div>


            <!-- second slide  -->

            <div class="Standort row" id="second" style="display: none;">
                <div class="row">
                    <div class="col-4 offset-4">

                        <img src="images/slide2nav.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="images/d2.PNG" alt="">
                </div>
                <div class="col-lg-8">
                    <h2>
                        An welchem Standort suchen Sie Bauhelfer/-in?
                    </h2>
                    <select name="standort" id="standort" class="form-control" onchange="calculation();">
                        <!-- <option value=""></option> -->
                    </select>
                </div>

                <button class="mt-2 redbtn" style="margin-left: auto;" onclick='secondslideprev()'>ZURÜCK</button>
                <button class="mt-2 purplebtn" style="margin-left: 10px !important;" onclick='secondslide()'>WEITTER</button>
            </div>



            <!-- third slide  -->


            <div class="Anstellungsart row" id="third" style="display: none;">
                <div class="row">
                    <div class="col-4 offset-4">

                        <img src="images/slide3nav.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="images/d3.PNG" alt="">
                </div>
                <div class="col-lg-8">
                    <h2>
                        Um welche Anstellungsart handelt es sich?
                    </h2>

                    <div id="employementDiv"></div>
                    <!-- <select name="anstellungsart" id="anstellungsart" class="form-control" onchange="calculation();" multiple>
                         <option value=""></option> 
                    </select> -->

                </div>

                <button class="mt-2 redbtn" style="margin-left: auto;" onclick='thirdslideprev()'>ZURÜCK</button>
                <button class="mt-2 purplebtn" style="margin-left: 10px !important;" onclick='thirdslide()'>WEITTER</button>
            </div>



            <!-- fourth  slide  -->



            <div class="Arbeitszeitmodell row" id="fourth" style="display: none;">
                <div class="row">
                    <div class="col-4 offset-4">

                        <img src="images/slide4nav.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="images/d4.PNG" alt="">
                </div>
                <div class="col-lg-8">
                    <h2>
                        Welches Arbeitszeitmodell hat die Stelle?
                    </h2>
                    <select name="arbeitszeitmodell" id="arbeitszeitmodell" class="form-control" onchange="calculation();" multiple>
                        <option value="Vollzeit" selected>Vollzeit</option>
                        <option value="Teilzeit">Teilzeit</option>
                    </select>

                </div>

                <button class="mt-2 redbtn" style="margin-left: auto;" onclick='fourthslideprev()'>ZURÜCK</button>
                <button class="mt-2 purplebtn" style="margin-left: 10px !important;" onclick='fourthslide()'>WEITTER</button>
            </div>



            <!-- fifth  slide  -->



            <div class="Geplante Einstellungen row" id="fifth" style="display: none;">
                <div class="row">
                    <div class="col-4 offset-4">

                        <img src="images/slide5nav.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="images/d5.PNG" alt="">
                </div>
                <div class="col-lg-8">
                    <h2>
                        Wie viele Einstellungen planen Sie für die Position Bauhelfer/-in?
                    </h2>
                    <input type="number" class="form-control" onchange="calculation();" id="geplante_einstellungen" min="1" value="1">

                </div>

                <button class="mt-2 redbtn" style="margin-left: auto;" onclick='fifthslideprev()'>ZURÜCK</button>
                <button class="mt-2 purplebtn" style="margin-left: 10px !important;" onclick='fifthslide()'>WEITTER</button>
            </div>






            <!-- sixth  slide  -->



            <div class="Geplante Einstellungen row" id="sixth" style="display: none;">
                <div class="row">
                    <div class="col-4 offset-4">

                        <img src="images/slide6nav.png" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <h2>
                        Bitte wählen Sie das passende Marketingprodukt aus!
                    </h2>

                </div>
                <div class="col-lg-8">

                    <!-- <select name="boost" id="boost" class="form-control" onchange="calculation();"> -->
                    <!-- <option value=""></option> -->

                    <!-- </select> -->

                    <div class="row" id="boostDiv">
                        <!--  
  <label class="card">
    <input name="boost" onchange="calculation();" class="radio" type="radio" value="2">
    <span class="hidden-visually">Pro - $50 per month, 5 team members, 500 GB per month, 5 concurrent builds</span>
    <span class="plan-details" aria-hidden="true">
      <span class="plan-type">Pro</span>
      <span class="plan-cost">$50<span class="slash">/</span><span class="plan-cycle">mo</span></span>
      <span>5 team members</span>
      <span>500 GB/mo</span>
      <span>5 concurrent builds</span>
    </span>
  </label>
  <label class="card">
    <input name="boost" onchange="calculation();" class="radio" type="radio" value="3">
    <span class="hidden-visually">Business - $200 per month, 5+ team members, 1000 GB per month, Unlimited builds</span>
    <span class="plan-details" aria-hidden="true">
      <span class="plan-type">Business</span>
      <span class="plan-cost">$200<span class="slash">/</span><span class="plan-cycle">mo</span></span>
      <span>5+ team members</span>
      <span>1000 GB/mo</span>
      <span>Unlimited builds</span>
    </span>
  </label> -->
                    </div>
                </div>

                <button class="mt-2 redbtn" style="margin-left: auto;" onclick='sixthslideprev()'>ZURÜCK</button>
                <button class="mt-2 purplebtn" style="margin-left: 10px !important;" onclick='sixthslide()'>WEITTER</button>
            </div>


        </div>

    </div>








    <p>







    <div class="container mt-3" id="result" style="display: none;">

        <div class="row rowresult">

            <div class="col-lg-5 bg-white text-center py-5" style="border-radius: 10px;">
                <img src="images/slide6nav.png" width="40%" alt="" srcset="">
                <br>

                <div class="text-left" style="text-align: left; width:100%;">
                    <h1>
                        Ihre Heyjobs Budget Empehlung
                    </h1>

                    <div style='display:flex;'>

                        Monatliche Budgetempfehlung <input type="text" class="customfield form-control" id="monatliche_budgetempfehlung" readonly>

                    </div>

                    <div style='display:flex;'>

                        Gesamtbudget <input type="text" class="customfield form-control" id="gesamtbudget" readonly>

                    </div>

                    <div style='display:flex;'>

                        Laufzeitempfehlung <input type="text" class="customfield form-control" id="laufzeitempfehlung" readonly>

                    </div>

                    <div style='display:flex;'>

                        Bewerbungen/Monat <input type="text" class="customfield form-control" id="bewerbungen_monat" readonly>

                    </div>

                </div>
                <button class="mt-2 ml-auto purplebtn" style="margin-left: 10px !important;" onclick='sixthslide()'>WEITTER</button>
            </div>

            <div class="col-lg-7 py-5">
                <div style='display:flex; justify-content:space-between;' href="#collapseBerufsgruppe" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseBerufsgruppe">

                    <h5>Berufsgruppe </h5>


                    <h6 id="Berufsgruppeselectedfield">Berufsgruppe </h6>



                </div>
                <div class="collapse" id="collapseBerufsgruppe">
                    <h4>
                        Welche Stelle möchten Sie besetzen?
                    </h4>
                    <select name="jobtyp" id="jobtyp" class="form-control" onchange="calculation();"></select>
                </div>

                <hr>

                <div style='display:flex; justify-content:space-between;' href="#collapseStandort" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseStandort">

                    <h5>Standort </h5>
                    <h6 id="Standortselectedfield">Berufsgruppe </h6>

                </div>

                <div class="collapse" id="collapseStandort">
                    <h4>
                        An welchem Standort suchen Sie Bauhelfer/-in?
                    </h4>
                    <select name="standort" id="standort" class="form-control" onchange="calculation();">
                        <!-- <option value=""></option> -->
                    </select>
                </div>
                <hr>


                <div style='display:flex; justify-content:space-between;' href="#collapseAnstellungsart" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseAnstellungsart">

                    <h5>Anstellungsart </h5>
                    <h6 id="Anstellungsartselectedfield">Berufsgruppe </h6>

                </div>

                <div class="collapse" id="collapseAnstellungsart">
                    <h4>
                        Um welche Anstellungsart handelt es sich?
                    </h4>
                    <select name="anstellungsart" id="anstellungsart" class="form-control" onchange="calculation();">
                        <!-- <option value=""></option> -->
                    </select>
                </div>
                <hr>

                <div style='display:flex; justify-content:space-between;' href="#collapseArbeitszeitmodell" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseArbeitszeitmodell">

                    <h5>Arbeitszeitmodell </h5>
                    <h6 id="Arbeitszeitmodellselectedfield">Berufsgruppe </h6>
                </div>
                <div class="collapse" id="collapseArbeitszeitmodell">
                    <h4>
                        Welches Arbeitszeitmodell hat die Stelle?
                    </h4>
                    <select name="arbeitszeitmodell" id="arbeitszeitmodell" class="form-control" onchange="calculation();" multiple>
                        <option value="Vollzeit" selected>Vollzeit</option>
                        <option value="Teilzeit">Teilzeit</option>
                    </select>
                </div>
                <hr>

                <div style='display:flex; justify-content:space-between;' href="#collapseEinstellungen" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseEinstellungen">

                    <h5>Anzahl der Einstellungen
                    </h5>
                    <h6 id="Einstellungenselectedfield">Berufsgruppe </h6>

                </div>
                <div class="collapse" id="collapseEinstellungen">
                    <h4>
                        Wie viele Einstellungen planen Sie für die Position Bauhelfer/-in?
                    </h4>
                    <input type="number" class="form-control" onchange="calculation();" id="geplante_einstellungen" min="1" value="1">
                </div>
                <hr>

                <div style='display:flex; justify-content:space-between;' href="#collapseboost" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseboost">

                    <h5>Boost
                    </h5>

                    <h6 id="boostselectedvalue">Berufsgruppe </h6>
                </div>
                <div class="collapse" id="collapseboost">
                    <h4>

                        Bitte wählen Sie das passende Marketingprodukt aus!


                    </h4>
                    <select name="" id="">
                        <option value="Normal">Normal</option>
                        <option value="standard">Standard</option>

                    </select>
                </div>
                <hr>

            </div>
        </div>




        <script src="js/prev-next.js"></script>

        <script src="js/dselect.js"></script>
        <!-- <script src="php/loadCSV.php"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>


        <script>
            var select1 = document.querySelector('#jobtyp');
            var select2 = document.querySelector('#standort');
            var select3;
            var select4;
            var select5 = document.querySelector('#arbeitszeitmodell');
            var Boost = [];
            var Employment = [];
            var Location = [];
            var Loc = new Object();
            var Dif = new Object();
            var JobType = [];
            var BudgetLevels = [];
            var SalesData = [];
            var deferreds = [];
            var table_values = [];
            //CPA Multipliers
            var Default_adjustment_multiplier = 1.2;
            var CPA_unteres_Limit = 0.7;
            var CPA_oberes_Limit = 1.3;

            $(document).ready(function() {
                var deferred1 = $.Deferred();
                var deferred2 = $.Deferred();
                var deferred3 = $.Deferred();
                var deferred5 = $.Deferred();
                var deferred4 = $.Deferred();
                deferreds.push(deferred1.promise());
                deferreds.push(deferred2.promise());
                deferreds.push(deferred3.promise());
                deferreds.push(deferred4.promise());

                getLocationData(deferred1);
                getJobTypeData(deferred2);
                getBoostAndEmploymentTypeData(deferred3, deferred5);
                getSalesData(deferred4);

                $.when.apply($, deferreds).then(function() {
                    calculation();
                });
            });

            function getJobTypeData(deferred) {
                $.ajax({
                    url: "php/loadCSV.php",
                    type: "POST",
                    data: {

                    },

                    success: function(data) {
                        data = JSON.parse(data);
                        JobType = data[0];
                        BudgetLevels = data[1];
                        setJobTypeData(JobType, deferred);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        deferred.resolve();
                        console.log(XMLHttpRequest);
                        console.log("Status: " + textStatus);
                        console.log("Error: " + errorThrown);
                        console.log("ERROR");
                    },
                });
            }

            function getLocationData(deferred) {
                $.ajax({
                    url: "php/loadCSV2.php",
                    type: "POST",
                    data: {

                    },

                    success: function(data) {
                        data = JSON.parse(data);
                        // Location = data;
                        Location = data.filter(function(a) {
                            if (!this[a[0]]) {
                                return this[a[0]] = true;
                            }
                        }, Object.create(null));
                        // console.log(data);
                        setLocationData(data, deferred);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        deferred.resolve();
                        console.log(XMLHttpRequest);
                        console.log("Status: " + textStatus);
                        console.log("Error: " + errorThrown);
                        console.log("ERROR");
                    },
                });
            }

            function getSalesData(deferred) {
                $.ajax({
                    url: "php/loadCSV4.php",
                    type: "POST",
                    data: {

                    },

                    success: function(data) {
                        data = JSON.parse(data);
                        SalesData = data;
                        deferred.resolve();
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        deferred.resolve();
                        console.log(XMLHttpRequest);
                        console.log("Status: " + textStatus);
                        console.log("Error: " + errorThrown);
                        console.log("ERROR");
                    },
                });
            }

            var allData;

            function getBoostAndEmploymentTypeData(deferred, deferred2) {
                $.ajax({
                    url: "php/loadCSV3.php",
                    type: "POST",
                    data: {

                    },

                    success: function(data) {
                        data = JSON.parse(data);
                        allData = data;
                        Boost = data.filter(e => e[data[0].indexOf("Helper Cells")]).map(e => e[data[0].indexOf("Helper Cells")]).filter(e => e != 'Helper Cells');
                        Employment = data.filter((e, index) => e[1] && index < data.findIndex(e => e[0] == "INPUT: Runtime Adjustment"));
                        var temp = data.filter((e, index) => e[0] && index > data.findIndex(e => e[0] == "INPUT: Runtime Adjustment"));
                        for (let x = 0; x < temp[0].length; x++) {
                            if (temp[0][x] != "") {
                                // var obj = new Object();
                                Loc['' + temp[0][x]] = temp[1][x];
                                // Loc = obj;
                            } else {
                                break;
                            }
                        }
                        for (let x = 0; x < temp[2].length; x++) {
                            if (temp[2][x] != "") {
                                // var obj = new Object();
                                Dif['' + temp[2][x]] = temp[3][x];
                                // Dif = obj;
                            } else {
                                break;
                            }
                        }
                        // console.log(Boost);
                        // console.log(Employment);
                        setBoostData(Boost, deferred2);
                        setEmploymentData(Employment, deferred);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        deferred.resolve();
                        console.log(XMLHttpRequest);
                        console.log("Status: " + textStatus);
                        console.log("Error: " + errorThrown);
                        console.log("ERROR");
                    },
                });
            }

            function setBoostData(data, deferred) {
                var boosthtml;
                boosthtml = ''
                for (let i = 0; i < data.length; i++) {

                    if (i == 0) {
                        boosthtml += '<div class="col-xl-4"><label class="card"><input name="boost" onchange="calculation();" class="radio" type="radio" value="' + data[i] + '" checked ><span class="hidden-visually" style="font-size:2px !important;">' + data[i] + ' 5 team members, 500 GB per month, 5 concurrent builds</span><span class="plan-details" aria-hidden="true"><span class="plan-type">' + data[i] + '</span><span class="plan-cost">$50<span class="slash">/</span><span class="plan-cycle">mo</span></span><span>5 team members</span><span>500 GB/mo</span><span>5 concurrent builds</span></span></label></div> '
                    } else {
                        boosthtml += '<div class="col-xl-4"><label class="card"><input name="boost" onchange="calculation();" class="radio" type="radio" value="' + data[i] + '"><span class="hidden-visually" style="font-size:2px !important;">' + data[i] + ' 5 team members, 500 GB per month, 5 concurrent builds</span><span class="plan-details" aria-hidden="true"><span class="plan-type">' + data[i] + '</span><span class="plan-cost">$50<span class="slash">/</span><span class="plan-cycle">mo</span></span><span>5 team members</span><span>500 GB/mo</span><span>5 concurrent builds</span></span></label> </div>'
                    }



                    // var opt = document.createElement('OPTION');
                    // var txt = document.createTextNode(data[i]);
                    // opt.appendChild(txt);
                    // opt.setAttribute("value", data[i]);
                    // select3.add(opt);

                }
                document.getElementById('boostDiv').innerHTML = boosthtml;
                select3 = document.querySelector('input[name="boost"]:checked');
                deferred.resolve();

            }

            function setEmploymentData(data, deferred) {
                var employementhtml;
                employementhtml = ''
                for (let i = 0; i < data.length; i++) {
                    if (i == 0) {
                    employementhtml += '<div class="buttonradio"><input type="radio" id="a25"  onchange="calculation()" name="employement" value="'+data[i][0]+'" checked /><label class="btn btn-default" for="a25" >'+data[i][0]+'</label></div>'
                    }
                    else{
                        employementhtml += '<div class="buttonradio"><input type="radio" id="a25" name="employement" value="'+data[i][0]+'" onchange="calculation()" /><label class="btn btn-default"   for="a25">'+data[i][0]+'</label></div>'
                    }

                    // var opt = document.createElement('OPTION');
                    // var txt = document.createTextNode(data[i][0]);
                    // opt.appendChild(txt);
                    // opt.setAttribute("value", data[i][0]);
                    // select4.add(opt);

                }

                document.getElementById('employementDiv').innerHTML = employementhtml;
                select4 = document.querySelector('input[name="employement"]:checked');
                deferred.resolve();

                deferred.resolve();
                // dselect(select4, {
                //     search: true
                // });
            }

            function setJobTypeData(data, deferred) {

                for (let i = 0; i < data.length; i++) {

                    var opt = document.createElement('OPTION');
                    var txt = document.createTextNode(data[i]);
                    opt.appendChild(txt);
                    opt.setAttribute("value", data[i]);
                    select1.add(opt);

                }
                dselect(select1, {
                    search: true
                });

                deferred.resolve();
            }

            function setLocationData(data, deferred) {

                for (let i = 0; i < data.length; i++) {
                    if (i == 1) {
                        console.log(data[i][0]);
                    }
                    var opt = document.createElement('OPTION');
                    var txt = document.createTextNode(data[i][0]);
                    opt.appendChild(txt);
                    opt.setAttribute("value", data[i][0]);
                    select2.add(opt);

                }
                $(select2).selectize({
                    sortField: 'text'
                });
                deferred.resolve();
            }

            function calculation() {
                table_values = [];
                if (select2.value == "Kein fester Standort") {
                    // select3.value = "Marketing (+300€)";
                    $("input[name=boost][value='Marketing (+300€)']").attr('checked', 'checked');
                    document.querySelector('input[name="boost"][value="Nationwide (+500€)"]').setAttribute('disabled', true)
                    document.querySelector('input[name="boost"][value="Keine"]').setAttribute('disabled', true)
                    // select3.setAttribute('disabled', true);
                } else {
                    // select3.removeAttribute('disabled');
                    document.querySelector('input[name="boost"][value="Nationwide (+500€)"]').removeAttribute('disabled');
                    document.querySelector('input[name="boost"][value="Keine"]').removeAttribute('disabled');
                }
                var temp_Location = Location.filter(e => e[0] == select2.value).map(e => e[2])[0];
                if (select2.value.includes(',')) {
                    var temp_Location2 = select2.value.split(',')[0];
                } else {
                    var temp_Location2 = temp_Location;
                }
                var job_type = BudgetLevels.filter(e => e[0] == select1.value)[0][1];
                specificPlace1(job_type, temp_Location2);
                specificPlace2(job_type, temp_Location2);
                townSize1(job_type, temp_Location);
                townSize2(job_type, temp_Location);
                JobType1(job_type);
                JobType2(job_type);

                if (parseFloat(document.getElementById('geplante_einstellungen').value) == 1) {
                    var No_of_Einstellungen = "1";
                } else if (parseFloat(document.getElementById('geplante_einstellungen').value) >= 2 && parseFloat(document.getElementById('geplante_einstellungen').value) < 10) {
                    var No_of_Einstellungen = "2-10";
                } else if (parseFloat(document.getElementById('geplante_einstellungen').value) >= 10) {
                    var No_of_Einstellungen = "10+";
                } else {
                    var No_of_Einstellungen = "N/A";
                }

                if (select2.value == "Kein fester Standort") {
                    var Boost_Adjustment = "Nationwide";
                } else if (select3.value == "Nationwide (+500€)") {
                    var Boost_Adjustment = "Nationwide";
                } else if (select3.value == "Marketing (+300€)") {
                    var Boost_Adjustment = "Marketing";
                } else {
                    var Boost_Adjustment = "NA";
                }

                // Budget Calculation Helpers
                var Arbeitsmodell = select5.value;
                var Ortstyp = Boost_Adjustment == "Nationwide" ? "Urban" : Location.filter(e => e[0] == select2.value).map(e => e[2])[0];
                var jobTypeRowIndex = BudgetLevels.findIndex(e => e[0] == select1.value);
                var Trainee_Normal = Employment.filter(e => e[0] == select4.value).map(e => e[1])[0];

                // Helper Cells
                if (select5.value == "Vollzeit") {
                    if (table_values[0][0] > 3) {
                        var place_or_size_of_place = "Spezifischer Ort";
                    } else if (table_values[0][1] > 3) {
                        var place_or_size_of_place = "Ortsgröße";
                    } else if (table_values[0][2] > 3) {
                        var place_or_size_of_place = "Job type";
                    }
                } else if (select5.value == "Teilzeit") {
                    if (table_values[4][0] > 3) {
                        var place_or_size_of_place = "Spezifischer Ort";
                    } else if (table_values[4][1] > 3) {
                        var place_or_size_of_place = "Ortsgröße";
                    } else if (table_values[4][2] > 3) {
                        var place_or_size_of_place = "Job type";
                    }
                }
                var Einstellungsquote = 0.1;
                var Hard_VeryHard = BudgetLevels[jobTypeRowIndex][3];
                // Helper Cells

                // (control panels) Kontrollfelder
                if (select5.value == "Vollzeit") {
                    if (place_or_size_of_place == "Spezifischer Ort") {
                        var Cost_per_Application = table_values[3][0];
                    } else if (place_or_size_of_place == "Ortsgröße") {
                        var Cost_per_Application = table_values[3][1];
                    } else if (place_or_size_of_place == "Job type") {
                        var Cost_per_Application = table_values[3][2];
                    }
                } else if (select5.value == "Teilzeit") {
                    if (place_or_size_of_place == "Spezifischer Ort") {
                        var Cost_per_Application = table_values[7][0];
                    } else if (place_or_size_of_place == "Ortsgröße") {
                        var Cost_per_Application = table_values[7][1];
                    } else if (place_or_size_of_place == "Job type") {
                        var Cost_per_Application = table_values[7][2];
                    }
                }
                var CPA1 = Cost_per_Application * CPA_oberes_Limit;
                var CPA2 = Cost_per_Application * CPA_unteres_Limit;
                // (control panels) Kontrollfelder

                var matchingColumnIndexes1 = BudgetLevels[0].map((val, i) => val === select5.value ? i : -1).filter(index => index !== -1);
                var matchingColumnIndexes2 = BudgetLevels[3].map((val, i) => val === Trainee_Normal ? i : -1).filter(index => index !== -1 && matchingColumnIndexes1.includes(index));
                var matchingColumnIndexes3 = BudgetLevels[2].map((val, i) => val === Ortstyp ? i : -1).filter(index => index !== -1 && matchingColumnIndexes2.includes(index));
                var matchingColumnIndexes4 = BudgetLevels[1].map((val, i) => val === No_of_Einstellungen ? i : -1).filter(index => index !== -1 && matchingColumnIndexes3.includes(index));
                var Budget_Recommendation_Pro_Monat_Vor_Boost = BudgetLevels[jobTypeRowIndex][matchingColumnIndexes4[0]];
                var Budget_Recommendation_Pro_Monat = numeral(Budget_Recommendation_Pro_Monat_Vor_Boost).value() + (Boost_Adjustment == "Nationwide" ? 500 : Boost_Adjustment == "Marketing" ? 300 : 0);
                // Budget Calculation Helpers

                // Runtime Recommendation
                var Runtime_Adjustment = parseFloat(BudgetLevels[jobTypeRowIndex][3] == "" ? 0 : Dif[BudgetLevels[jobTypeRowIndex][3]]) + parseFloat(Loc[Ortstyp]);
                var Runtime_Recommendation = (((parseFloat(document.getElementById('geplante_einstellungen').value) / Einstellungsquote) * Cost_per_Application) / Budget_Recommendation_Pro_Monat) + Runtime_Adjustment;
                var Total_Runtime_Recommendation = Math.round(Runtime_Recommendation) > 6 ? 6 : Math.ceil(Runtime_Recommendation);
                // Runtime Recommendation

                document.getElementById('monatliche_budgetempfehlung').value = "€" + numeral(Budget_Recommendation_Pro_Monat).format('(0,0)');

                if (isNaN(Total_Runtime_Recommendation) == true || isNaN(Budget_Recommendation_Pro_Monat) == true) {
                    document.getElementById('gesamtbudget').value = "Keine Daten";
                } else {
                    document.getElementById('gesamtbudget').value = "€" + numeral((Budget_Recommendation_Pro_Monat * Total_Runtime_Recommendation)).format('(0,0)');
                }

                if (isNaN(Total_Runtime_Recommendation) == true) {
                    document.getElementById('laufzeitempfehlung').value = "Keine Daten";
                } else {
                    document.getElementById('laufzeitempfehlung').value = Total_Runtime_Recommendation + (Total_Runtime_Recommendation == 1 ? " Monat" : " Monate");
                }

                if (isNaN(CPA1) == true || isNaN(CPA2) == true) {
                    document.getElementById('bewerbungen_monat').value = "Keine Daten";
                } else {
                    if ((Budget_Recommendation_Pro_Monat / CPA1) == (Budget_Recommendation_Pro_Monat / CPA2)) {
                        document.getElementById('bewerbungen_monat').value = Math.round(Budget_Recommendation_Pro_Monat / Cost_per_Application);
                    } else {
                        document.getElementById('bewerbungen_monat').value = Math.round(Budget_Recommendation_Pro_Monat / CPA1) + " - " + Math.round(Budget_Recommendation_Pro_Monat / CPA2);
                    }
                }
                console.log((Budget_Recommendation_Pro_Monat / CPA1) + " - " + (Budget_Recommendation_Pro_Monat / CPA2))


                // inside prev-next.js
                showingresultvalues()

            }

            function specificPlace1(job_type, temp_Location) { //Spezifischer Ort // Vollzeit
                var Anzahl_Gelaufener_Jobslots = SalesData.filter(e => e[3] == job_type && e[6] == temp_Location && e[5] == "Fulltime" && parseFloat(e[9]) >= 0).length;
                var Durchschnittspreis_pro_Jobslot = Math.round((SalesData.filter(e => e[3] == job_type && e[6] == temp_Location && e[5] == "Fulltime").map(e => parseFloat(e[9].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots);
                var Durchschnittliche_abgesendete_Bewerbungen = Math.round((SalesData.filter(e => e[3] == job_type && e[6] == temp_Location && e[5] == "Fulltime").map(e => parseFloat(e[14].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots)
                var Cost_per_Application = (Durchschnittspreis_pro_Jobslot * Default_adjustment_multiplier) / Durchschnittliche_abgesendete_Bewerbungen;
                table_values.push([Anzahl_Gelaufener_Jobslots, 0, 0]);
                table_values.push([Durchschnittspreis_pro_Jobslot, 0, 0]);
                table_values.push([Durchschnittliche_abgesendete_Bewerbungen, 0, 0]);
                table_values.push([Cost_per_Application, 0, 0]);
            }

            function specificPlace2(job_type, temp_Location) { //Spezifischer Ort // Teilzeit
                var Anzahl_Gelaufener_Jobslots = SalesData.filter(e => e[3] == job_type && e[6] == temp_Location && e[5] == "Parttime" && parseFloat(e[9]) >= 0).length;
                var Durchschnittspreis_pro_Jobslot = Math.round((SalesData.filter(e => e[3] == job_type && e[6] == temp_Location && e[5] == "Parttime").map(e => parseFloat(e[9].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots);
                var Durchschnittliche_abgesendete_Bewerbungen = Math.round((SalesData.filter(e => e[3] == job_type && e[6] == temp_Location && e[5] == "Parttime").map(e => parseFloat(e[14].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots)
                var Cost_per_Application = (Durchschnittspreis_pro_Jobslot * Default_adjustment_multiplier) / Durchschnittliche_abgesendete_Bewerbungen;
                table_values.push([Anzahl_Gelaufener_Jobslots, 0, 0]);
                table_values.push([Durchschnittspreis_pro_Jobslot, 0, 0]);
                table_values.push([Durchschnittliche_abgesendete_Bewerbungen, 0, 0]);
                table_values.push([Cost_per_Application, 0, 0]);
            }

            function townSize1(job_type, temp_Location) { //Ortsgröße //Vollzeit
                var Anzahl_Gelaufener_Jobslots = SalesData.filter(e => e[3] == job_type && e[7] == temp_Location && e[5] == "Fulltime" && parseFloat(e[9]) >= 0).length;
                var Durchschnittspreis_pro_Jobslot = Math.round((SalesData.filter(e => e[3] == job_type && e[7] == temp_Location && e[5] == "Fulltime").map(e => parseFloat(e[9].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots);
                var Durchschnittliche_abgesendete_Bewerbungen = Math.round((SalesData.filter(e => e[3] == job_type && e[7] == temp_Location && e[5] == "Fulltime").map(e => parseFloat(e[14].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots)
                var Cost_per_Application = (Durchschnittspreis_pro_Jobslot * Default_adjustment_multiplier) / Durchschnittliche_abgesendete_Bewerbungen;
                table_values[0][1] = Anzahl_Gelaufener_Jobslots;
                table_values[1][1] = Durchschnittspreis_pro_Jobslot;
                table_values[2][1] = Durchschnittliche_abgesendete_Bewerbungen;
                table_values[3][1] = Cost_per_Application;
            }

            function townSize2(job_type, temp_Location) { //Ortsgröße //Teilzeit
                var Anzahl_Gelaufener_Jobslots = SalesData.filter(e => e[3] == job_type && e[7] == temp_Location && e[5] == "Parttime" && parseFloat(e[9]) >= 0).length;
                var Durchschnittspreis_pro_Jobslot = Math.round((SalesData.filter(e => e[3] == job_type && e[7] == temp_Location && e[5] == "Parttime").map(e => parseFloat(e[9].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots);
                var Durchschnittliche_abgesendete_Bewerbungen = Math.round((SalesData.filter(e => e[3] == job_type && e[7] == temp_Location && e[5] == "Parttime").map(e => parseFloat(e[14].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots)
                var Cost_per_Application = (Durchschnittspreis_pro_Jobslot * Default_adjustment_multiplier) / Durchschnittliche_abgesendete_Bewerbungen;
                table_values[4][1] = Anzahl_Gelaufener_Jobslots;
                table_values[5][1] = Durchschnittspreis_pro_Jobslot;
                table_values[6][1] = Durchschnittliche_abgesendete_Bewerbungen;
                table_values[7][1] = Cost_per_Application;
            }

            function JobType1(job_type) { //Vollzeit
                var Anzahl_Gelaufener_Jobslots = SalesData.filter(e => e[3] == job_type && e[5] == "Fulltime" && parseFloat(e[9]) >= 0).length;
                var Durchschnittspreis_pro_Jobslot = Math.round((SalesData.filter(e => e[3] == job_type && e[5] == "Fulltime").map(e => parseFloat(e[9].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots);
                var Durchschnittliche_abgesendete_Bewerbungen = Math.round((SalesData.filter(e => e[3] == job_type && e[5] == "Fulltime").map(e => parseFloat(e[14].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots)
                var Cost_per_Application = (Durchschnittspreis_pro_Jobslot * Default_adjustment_multiplier) / Durchschnittliche_abgesendete_Bewerbungen;
                table_values[0][2] = Anzahl_Gelaufener_Jobslots;
                table_values[1][2] = Durchschnittspreis_pro_Jobslot;
                table_values[2][2] = Durchschnittliche_abgesendete_Bewerbungen;
                table_values[3][2] = Cost_per_Application;
            }

            function JobType2(job_type) { //Teilzeit
                var Anzahl_Gelaufener_Jobslots = SalesData.filter(e => e[3] == job_type && e[5] == "Parttime" && parseFloat(e[9]) >= 0).length;
                var Durchschnittspreis_pro_Jobslot = Math.round((SalesData.filter(e => e[3] == job_type && e[5] == "Parttime").map(e => parseFloat(e[9].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots);
                var Durchschnittliche_abgesendete_Bewerbungen = Math.round((SalesData.filter(e => e[3] == job_type && e[5] == "Parttime").map(e => parseFloat(e[14].replace(",", ""))).reduce((a, b) => a + b, 0)) / Anzahl_Gelaufener_Jobslots)
                var Cost_per_Application = (Durchschnittspreis_pro_Jobslot * Default_adjustment_multiplier) / Durchschnittliche_abgesendete_Bewerbungen;
                table_values[4][2] = Anzahl_Gelaufener_Jobslots;
                table_values[5][2] = Durchschnittspreis_pro_Jobslot;
                table_values[6][2] = Durchschnittliche_abgesendete_Bewerbungen;
                table_values[7][2] = Cost_per_Application;
            }
        </script>
</body>

</html>