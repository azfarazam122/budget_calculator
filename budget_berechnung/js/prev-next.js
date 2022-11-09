function firstslide() {
  document.getElementById("first").style.display = "none";
  document.getElementById("second").style.display = "";
}

function secondslide() {
  document.getElementById("second").style.display = "none";
  document.getElementById("third").style.display = "";
}

function secondslideprev() {
  document.getElementById("first").style.display = "";
  document.getElementById("second").style.display = "none";
}
function thirdslide() {
  document.getElementById("second").style.display = "none";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "none";
  document.getElementById("fourth").style.display = "";
}

function thirdslideprev() {
  document.getElementById("second").style.display = "";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "none";
  document.getElementById("fourth").style.display = "none";
}

function fourthslide() {
  document.getElementById("second").style.display = "none";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "none";
  document.getElementById("fourth").style.display = "none";
  document.getElementById("fifth").style.display = "";
}

function fourthslideprev() {
  document.getElementById("second").style.display = "none";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "";
  document.getElementById("fourth").style.display = "none";
  document.getElementById("fifth").style.display = "none";
}

function fifthslide() {
  document.getElementById("second").style.display = "none";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "none";
  document.getElementById("fourth").style.display = "none";
  document.getElementById("fifth").style.display = "none";
  document.getElementById("sixth").style.display = "";
}

function fifthslideprev() {
  document.getElementById("second").style.display = "none";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "none";
  document.getElementById("fourth").style.display = "";
  document.getElementById("fifth").style.display = "none";
  document.getElementById("sixth").style.display = "none";
}

function sixthslide() {
  document.getElementById("result").style.display = "";
}

function sixthslideprev() {
  document.getElementById("second").style.display = "none";
  document.getElementById("first").style.display = "none";
  document.getElementById("third").style.display = "none";
  document.getElementById("fourth").style.display = "none";
  document.getElementById("fifth").style.display = "";
  document.getElementById("sixth").style.display = "none";
  document.getElementById('result').style.display= ''}



  function showingresultvalues (){
    
    jobtyp = document.getElementById('jobtyp').value
    Standortinner = document.getElementById('standort').value
    Anstellungsartselected =  document.querySelector('input[name="employement"]:checked').value
    Arbeitszeitmodellselected = document.getElementById('arbeitszeitmodell').value
    Einstellungenselected = document.getElementById('geplante_einstellungen').value
    boostinner = document.querySelector('input[name="boost"]:checked').value


    document.getElementById('Berufsgruppeselectedfield').innerText = jobtyp
    document.getElementById('Standortselectedfield').innerText = Standortinner
    document.getElementById('Anstellungsartselectedfield').innerText = Anstellungsartselected
    document.getElementById('Arbeitszeitmodellselectedfield').innerText = Arbeitszeitmodellselected
    document.getElementById('Einstellungenselectedfield').innerText = Einstellungenselected
    document.getElementById('boostselectedvalue').innerText = boostinner

    // textboxes in result




  }
// $(".Arbeitszeitmodell  option").unwrap().each(function(index) {
//     if(index == 0){
//         var btn = $('<div onclick="calculation()" class="btnn Arbeitszeitmodell_selected">'+$(this).text()+'</div>');
//         if($(this).is(':checked')) btn.addClass('on');
//         $(this).replaceWith(btn);
//     } else {
//         var btn = $('<div onclick="calculation()" class="btnn">'+$(this).text()+'</div>');
//         if($(this).is(':checked')) btn.addClass('on');
//         $(this).replaceWith(btn);
//     }
    
// });

// $(document).on('click', '.btnn', function() {
//     $('.btnn').removeClass('Arbeitszeitmodell_selected');
//     $(this).addClass('Arbeitszeitmodell_selected');
// });