<?php
$Page = "Office";
include("script/header_script.php");
?>
    <div class="wrapper animsition">
      <?php include("menu/sidebar.php") ?>
        <main class="main">
          <?php include("menu/header.php") ?>
            <div class="main-content section">
              <div class="row">
                <form class="col s12" method="POST" action="system/add_office.php">
                  <div class="card-panel">
                    <div class="row">
                      <div class="input-field col s12 m12">
                        <i class="material-icons prefix">account_balance</i>
                        <input id="icon_prefix" class="validate" type="text" name="office_name">
                        <label for="icon_prefix" class="">Office Name</label>
                      </div>
                      <div class="input-field col s12 m12">
                        <i class="material-icons prefix">code</i>
                        <input id="icon_prefix" class="validate" type="text" name="office_code">
                        <label for="icon_prefix" class="">Office code</label>
                      </div>
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" style="height: 45px;" name="desk"></textarea>
                        <label for="textarea1" class="">Description</label>
                      </div>
                    </div>
                    <div class="row" align="right">
                      <a href="office" type="submit" name="input" class="waves-effect waves-light btn blue">
                        Back
                      </a>
                      <button type="submit" name="input" class="waves-effect waves-light btn blue">
                        Add More Office
                      </button>
                    <div>
                  </div>
                </form>
              </div>
            </div>
          <?php include("menu/footer.php") ?>
        </main>
      </div>
<?php include("script/footer_script.php"); ?>
