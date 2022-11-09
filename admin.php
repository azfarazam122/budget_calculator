<?php
session_start();

if ($_SESSION["username"] == '' && $_SESSION["password"] == '') {
    header('Location: '.'login.html');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"
        integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"
        integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Budget Calculator</title>
</head>

<body>
    <div class="text-end">
        <button class="btn btn-warning" onclick="logout()" style="width:130px;"><i class="fa-solid fa-power-off"></i>
            Logout</button>
    </div>

    <div>

    </div>
    <div class="container">
        <p class="display-5 text-center">Change CSV Files (Only for Admin)</p>
        <div class="">
            <!-- <input id="text" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"> -->
            <div>
                <label for="BudgetLevels" class="lead fs-4 mb-2">For Budget Levels (CSV)</label>
                <textarea id="BudgetLevels" class="form-control" cols="10" rows="10"></textarea>
                <div class="text-end">
                    <button type="button" style="width:130px;" class="btn btn-primary"
                        onclick="saveDataInCSV('budget_berechnung/csv/BudgetLevels.csv','BudgetLevels')">Subbmit</button>
                </div>
            </div>
            <div class="mt-5">
                <label for="CALCOrtsliste" class="lead fs-4 mb-2">For CALCOrtsliste (CSV)</label>
                <textarea id="CALCOrtsliste" class="form-control" cols="10" rows="10"></textarea>
                <div class="text-end">
                    <button type="button" style="width:130px;" class="btn btn-primary"
                        onclick="saveDataInCSV('budget_berechnung/csv/CALCOrtsliste.csv','CALCOrtsliste')">Subbmit</button>
                </div>
            </div>
            <div class="mt-5">
                <label for="InputOther" class="lead fs-4 mb-2">For InputOther (CSV)</label>
                <textarea id="InputOther" class="form-control" cols="10" rows="10"></textarea>
                <div class="text-end">
                    <button type="button" style="width:130px;" class="btn btn-primary"
                        onclick="saveDataInCSV('budget_berechnung/csv/InputOther.csv','InputOther')">Subbmit</button>
                </div>
            </div>
            <div class="mt-5">
                <label for="SalesData" class="lead fs-4 mb-2">For SalesData (CSV)</label>
                <textarea id="SalesData" class="form-control" cols="10" rows="10"></textarea>
                <div class="text-end">
                    <button type="button" style="width:130px;" class="btn btn-primary"
                        onclick="saveDataInCSV('budget_berechnung/csv/SalesData.csv','SalesData')">Subbmit</button>
                </div>
            </div>
        </div>
        <div>






        </div>




    </div>


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script>
    function logout() {
        $.ajax({
            type: "POST",
            url: "php/logout.php",
            data: {},
            success: function(response) {
                if (response == "logout") {
                    window.location.href = "login.html";
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Logout Failed...",
                        text: "Unexpected error! Contact your Developer",
                    });
                }
            },
            error: function(response) {
                console.log(response);
            },
        });
    }

    function saveDataInCSV(filename, id) {
        debugger;
        var temp = filename.split(".")[0];
        temp = temp.split('/')
        temp = temp[temp.length - 1]
        // if (temp == id) {
        var convert_text_to_csv = document.getElementById(id).value;
        var text = convert_text_to_csv.split('\n')

        for (let index = 0; index < text.length; index++) {
            text[index] = text[index].replace(/\t/g, '_');
        }
        console.log(text)
        $.ajax({
            type: "POST",
            url: 'php/app.php',
            data: {
                filename: filename,
                coverted_text: text,
            },
            success: function(response) {
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
        // } else {
        //     console.log("error")
        // }
    }
    </script>
</body>

</html>