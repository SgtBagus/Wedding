<?php
$Page = "Invited";
include("script/header_script.php");

    if (isset($_GET['id_invited'])) {
        $id_invited = ($_GET["id_invited"]);
        $query = "SELECT a.*, b.* FROM invite AS a INNER JOIN office AS b WHERE a.Id_invit = '$id_invited'
                  AND a.Id_office = b.Id_office";
        $result = mysqli_query($con, $query);
        if(!$result){
        die ("Query Error: ".mysqli_errno($con).
            " - ".mysqli_error($con));
        }

        $data = mysqli_fetch_assoc($result);
        $id_invited = $data["Id_invit"];
        $name = $data["Invited"];
        $office = $data["Office_name"];
        $username = $data['Username'];
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
                    <form class="col s12" method="POST" action="system/edit_invited.php">
                        <div class="card-panel">
                            <div class="row">
                                <div class="input-field col s12 m12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input type="hidden" name="id_invited"  value="<?php echo $id_invited ?>">
                                    <input id="icon_prefix" class="validate" type="text" name="name" value="<?php echo $name ?>" required>
                                    <label for="icon_prefix">Name</label>
                                </div>
                                <div class="input-field col s12 m12">
                                  <select name="office" required>
                    <?php
                        $query = "SELECT * FROM office";
                        $result = mysqli_query($con, $query);
                        if(!$result){
                            die ("Query Error: ".mysqli_errno($con).
                            " - ".mysqli_error($con));
                        }
                        else{
                              $office_now = $office;
                              while($data = mysqli_fetch_assoc($result))
                              {
                                  if($data[Office_name] == $office_now) {
                                      echo '<option value="'.$data[Id_office].'" SELECTED>'.$data[Office_name].'</option>';
                                  } else
                                  {
                                      echo '<option value="'.$data[Id_office].'">'.$data[Office_name].'</option>';
                                  }
                              }
                        }
                    ?>
                                  </select>
                                </div>
                                <div class="input-field col s12">
                                    <input id="username" class="validate" type="text" name="username" value="<?php echo $username ?>" required>
                                    <label for="username" class="">Username - auto generade</label>
                                </div>
                            </div>
                            <div class="row" align="right">
                                <a href="index" type="submit" name="input" class="waves-effect waves-light btn blue">
                                    Back
                                </a>
                                <button type="submit" name="input" class="waves-effect waves-light btn blue">
                                    Edit Invited
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
