<div class="container">
        <h2>INPUT</h2>
        <br><br>
        <div class="row my-3" style="margin-top: 700px;">
            <div class="col-md-6">
                <label>Jobtyp</label>
                <select name="jobtysp" id="jobtypp" class="form-constrol" onchange="calculation();">
                    <!-- <option value=""></option> -->
                </select>
            </div>
            <div class="col-md-6">
                <label>Anstellungsart</label>
                <!-- <input type="text" class="form-control" onchange="calculation();" id="anstellungsart"> -->
                <select name="anstellungsart" id="anstellungsart" class="form-control" onchange="calculation();">
                    <!-- <option value=""></option> -->
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-6">
                <label>Arbeitszeitmodell</label>
                <select name="arbeitszeitmodell" id="arbeitszeitmodell" class="form-control" onchange="calculation();">
                    <option value="Vollzeit">Vollzeit</option>
                    <option value="Teilzeit">Teilzeit</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Standort</label>
                <!-- <input type="text" class="form-control" onchange="calculation();" id="standort"> -->
                <select name="standort" id="standort" class="form-control" onchange="calculation();">
                    <!-- <option value=""></option> -->
                </select>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-6">
                <label>Geplante Einstellungen</label>
                <input type="number" class="form-control" onchange="calculation();" id="geplante_einstellungen" min="1" value="1">
            </div>
            <div class="col-md-6">
                <label>Boost</label>
                <!-- <input type="text" class="form-control" onchange="calculation();" id="boost"> -->
                <select name="boost" id="boost" class="form-control" onchange="calculation();">
                    <!-- <option value=""></option> -->
                </select>
            </div>
        </div>
        <h2>OUTPUT</h2>
        <h4>HIRE Kampagnenempfehlung</h4>
        <div class="row my-3">
            <div class="col-md-6">
                <label>Monatliche Budgetempfehlung</label>
                <input type="text" class="form-control" id="monatliche_budgetempfehlung" readonly>
            </div>
            <div class="col-md-6">
                <label>Gesamtbudget</label>
                <input type="text" class="form-control" id="gesamtbudget" readonly>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-6">
                <label>Laufzeitempfehlung</label>
                <input type="text" class="form-control" id="laufzeitempfehlung" readonly>
            </div>
            <div class="col-md-6">
                <label>Bewerbungen/Monat</label>
                <input type="text" class="form-control" id="bewerbungen_monat" readonly>
            </div>
        </div>
    </div>