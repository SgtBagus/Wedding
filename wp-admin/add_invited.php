<?php
$Page = "Invited";
include("script/header_script.php");
?>
    <div class="wrapper animsition">
      <?php include("menu/sidebar.php") ?>
        <main class="main">
          <?php include("menu/header.php") ?>
            <div class="main-content section">
              <div class="row">
                <?php
                  if(isset($_GET['name']) || isset($_GET['office'])){
                    echo '<form class="col s12" method="POST" action="system/add_invited">';
                  }else{
                    echo '<form class="col s12" method="GET" action="?">';
                  }
                ?>
                  <div class="card-panel">
                    <div class="row">
                      <div class="input-field col s12 m12">
                        <i class="material-icons prefix">account_circle</i>
                        <?php
                          if(isset($_GET['name']) || isset($_GET['office'])){
                            $name = ($_GET["name"]);
                            echo '<input id="icon_prefix" class="validate" type="text" name="name" value="'.$name.'" readonly>';
                          }else{
                            echo '<input id="icon_prefix" class="validate" type="text" name="name" required>';
                          }
                        ?>
                        <label for="icon_prefix">Name</label>
                      </div>
                      <div class="input-field col s12 m12">
                          <?php
                            if(isset($_GET['name']) || isset($_GET['office'])){
                              $Office_code = ($_GET["office"]);
                              $query = "SELECT * FROM office WHERE Office_code = '$Office_code' ";
                              $result = mysqli_query($con, $query);
                              if(!$result){
                              die ("Query Error: ".mysqli_errno($con).
                                  " - ".mysqli_error($con));
                              }
                              else{
                                $data = mysqli_fetch_assoc($result);
                                $Office_name = $data["Office_name"];
                                echo '<input id="icon_prefix" class="validate" type="text" name="office" readonly value="'.$Office_name.'">
                                <label for="icon_prefix">Office</label>';
                              }
                            }else{
                                $query = "SELECT * FROM office";
                                $result = mysqli_query($con, $query);
                                if(!$result){
                                    die ("Query Error: ".mysqli_errno($con).
                                    " - ".mysqli_error($con));
                                }
                                else{
                                  echo '<select name="office" required>
                                    <option SELECTED></option>';
                                      while($data = mysqli_fetch_assoc($result))
                                      {
                                          echo '<option value="'.$data[Office_code].'">'.$data[Office_name].'</option>';
                                      }
                                  echo '</select>
                                  <label for="icon_prefix">Office</label>';
                                }
                            }
                          ?>
                      </div>
                      <?php
                        if(isset($_GET['name']) || isset($_GET['office'])){
                          $name = ($_GET["name"]);
                          $arr = explode(' ',trim($name));
                          $user = mb_strtolower($arr[0]);
                          $Office_code = ($_GET["office"]);
                          echo '
                            <div class="input-field col s12 m12">
                              <input id="icon_prefix" class="validate" type="text" name="username" required value="'.$user.'.'.$Office_code.'">
                              <label for="icon_prefix">Username</label>
                            </div>
                            ';
                        }else{

                        }
                        ?>
                    </div>
                    <div class="row" align="right">
                      <?php
                        if(isset($_GET['name']) || isset($_GET['office'])){
                          echo '<a href="index" type="submit" class="waves-effect waves-light btn blue">
                            Back
                          </a>
                          <a href="add_invited" type="submit" class="waves-effect waves-light btn blue">
                            Reset
                          </a>
                          <button type="submit" name="input" class="waves-effect waves-light btn blue">
                            Add Invited
                          </button>';
                        }else{
                          echo '<a href="index" type="submit" class="waves-effect waves-light btn blue">
                            Back
                          </a>
                          <button type="submit" class="waves-effect waves-light btn blue">
                            Create Username
                          </button>';
                        }
                      ?>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <?php include("menu/footer.php") ?>
        </main>
    </div>
<?php include("script/footer_script.php"); ?>
