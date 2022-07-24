<!DOCTYPE html>
</html>
  <head>
    <title>TEST FORM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
      session_start();
      echo "&nbspCreating appointment for " . $_SESSION["namedis"] . "<b> | </b>" . $_SESSION["studentidis"] . "<b> | </b>" . $_SESSION["programtitledis"] . "<b> | </b>" . $_SESSION["unitnamedis"];
    ?>
    <div class="parent">
      <h2>&nbspCPI FORM</h2>
      <form method="post" action="formtestdb.php">
      <div class="child">
        <div class="input">
          <div class="form-group">
            <label for="num">Contact Number (required)</label>
            <input type="text" class="form-control" name ="contactnum" id="contactnum" placeholder="Mobile or Phone number" required>
          </div>
          <div class="form-group">
            <label for="coun">OGTS Counselor</label>
            <input type="text" class="form-control" name ="counselor" id="counselor" placeholder="If you availed counseling services before"></input>
          </div>
          <div class="form group">
            <label for="example">Preferred Date (required)</label>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                <input name="date" type="date" id="date" class="form-control" required>
                <i class="fas fa-calendar input-prefix"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="child">
        <div class="form-group">
            <div class="input">
              <label for="exampleFormControlTextarea1">Description (required)</label>
              <textarea class="form-control" name="description" id="description" rows="4" placeholder="Brief description of concern" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-20">
              <label for="exampleFormControlSelect1">Preffered Times (required)</label>
              <select class="form-control" name="time1" id="time1" required>
                <option value="">Select Time</option>
                <option value="8:00AM-9:00AM">8:00AM-9:00AM</option>
                <option value="9:00AM-10:00AM">9:00AM-10:00AM</option>
                <option value="10:00AM-11:00AM">10:00AM-11:00AM</option>
                <option value="11:00AM-12:00AM">11:00AM-12:00AM</option>
                <option value="12:00AM-1:00AM">12:00AM-1:00AM</option>
                <option value="1:00AM-2:00AM">1:00AM-2:00AM</option>
                <option value="2:00AM-3:00AM">2:00AM-3:00AM</option>
                <option value="3:00AM-4:00AM">3:00AM-4:00AM</option>
                <option value="4:00AM-5:00AM">4:00AM-5:00AM</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-20">
              <select class="form-control" name="time2" id="time2" required>
                <option value="">Select Time</option>
                <option value="8:00AM-9:00AM">8:00AM-9:00AM</option>
                <option value="9:00AM-10:00AM">9:00AM-10:00AM</option>
                <option value="10:00AM-11:00AM">10:00AM-11:00AM</option>
                <option value="11:00AM-12:00AM">11:00AM-12:00AM</option>
                <option value="12:00AM-1:00AM">12:00AM-1:00AM</option>
                <option value="1:00AM-2:00AM">1:00AM-2:00AM</option>
                <option value="2:00AM-3:00AM">2:00AM-3:00AM</option>
                <option value="3:00AM-4:00AM">3:00AM-4:00AM</option>
                <option value="4:00AM-5:00AM">4:00AM-5:00AM</option>
              </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-20">
              <select class="form-control" name="time3" id="time3" required>
                <option value="">Select Time</option>
                <option value="8:00AM-9:00AM">8:00AM-9:00AM</option>
                <option value="9:00AM-10:00AM">9:00AM-10:00AM</option>
                <option value="10:00AM-11:00AM">10:00AM-11:00AM</option>
                <option value="11:00AM-12:00AM">11:00AM-12:00AM</option>
                <option value="12:00AM-1:00AM">12:00AM-1:00AM</option>
                <option value="1:00AM-2:00AM">1:00AM-2:00AM</option>
                <option value="2:00AM-3:00AM">2:00AM-3:00AM</option>
                <option value="3:00AM-4:00AM">3:00AM-4:00AM</option>
                <option value="4:00AM-5:00AM">4:00AM-5:00AM</option>
              </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5">
            <button type="submit" class="subbut">Submit</button>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>
