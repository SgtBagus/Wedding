<?php
$Page = "Office";
include("script/header_script.php");

    if (isset($_GET['id_office'])) {
        $id_office = ($_GET["id_office"]);
        $query = "SELECT * FROM office WHERE Id_office = '$id_office' ";
        $result = mysqli_query($con, $query);
        if(!$result){
        die ("Query Error: ".mysqli_errno($con).
            " - ".mysqli_error($con));
        }

        $data = mysqli_fetch_assoc($result);
        $id_office = $data["Id_office"];
        $Office_name = $data["Office_name"];
        $Office_code = $data["Office_code"];
        $Description = $data["Description"];
    }else{
			header("location:../404");
    }
    ?>
    <div class="wrapper animsition">
      <?php include("menu/sidebar.php") ?>
        <main class="main">
          <?php include("menu/header.php") ?>
            <div class="main-content section">
              <div class="row">
                <form class="col s12" method="POST" action="system/edit_office.php">
                  <div class="card-panel">
                    <div class="row">
                      <div class="input-field col s12 m12">
                        <i class="material-icons prefix">account_balance</i>
                        <input type="hidden" name="id_office" value="<?php echo $id_office  ?>">
                        <input id="icon_prefix" class="validate" type="text" name="office_name" value="<?php echo $Office_name ?>">
                        <label for="icon_prefix" class="">Office Name</label>
                      </div>
                      <div class="input-field col s12 m12">
                        <i class="material-icons prefix">account_balance</i>
                        <input id="icon_prefix" class="validate" type="text" name="office_code" value="<?php echo $Office_code ?>">
                        <label for="icon_prefix" class="">Office code</label>
                      </div>
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea" style="height: 45px;" name="desk"><?php echo $Description ?></textarea>
                        <label for="textarea1" class="">Description</label>
                      </div>
                    </div>
                    <div class="row" align="right">
                      <a href="office" type="submit" name="input" class="waves-effect waves-light btn blue">
                        Back
                      </a>
                      <button type="submit" name="input" class="waves-effect waves-light btn blue">
                        Edit Office's Data
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
