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
                  <div class="col s12 m12">
                    <div class="row">
                        <div class="col s12 m12" align="right">
                            <a href="add_office" class="waves-effect waves-light btn blue">
                                Add More Office
                            </a>
                        </div>
                    </div>
                      <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Office</th>
                                  <th>Code</th>
                                  <th width="500px">Description</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th>No</th>
                                  <th>Office</th>
                                  <th>Code</th>
                                  <th width="500px">Description</th>
                                  <th></th>
                              </tr>
                          </tfoot>
                          <tbody>
<?php
    $query = "SELECT * FROM office";
    $result = mysqli_query($con, $query);
    if($result->num_rows == 0){
        echo '<tr>
            <td colspan="4">
                <div align="center">
                    There is empty
                </div>
            </td>
        </tr>';

    }
    else{
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
        echo '
            <tr>
                <td>'.$no.'</td>
                <td>'.$data['Office_name'].'</td>
                <td>'.$data['Office_code'].'</td>
                <td>'.$data['Description'].'</td>
                <td>
                <a href="edit_office?id_office='.$data['Id_office'].'"
                    class="waves-effect waves-light btn blue">
                    <i class="material-icons">edit</i>
                </a>
                <a onclick="delet('.$data['Id_office'].')"class="waves-effect waves-light btn red btn toast-action-btn">
                    <i class="material-icons">delete_sweep</i>
                </a>
                </td>
            </tr>
        ';
    $no++;
                }
    }
  ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          <?php include("menu/footer.php") ?>
        </main>
    </div>
    <script>
    function delet(id){
        var $toastContent = $('<span>Are you sure to deleted this data</span>')
            .add($('<a href="office" class="waves-effect  btn-flat btn-primary">Cancel</a><a href="system/delet_office.php?id='+id+'"class="waves-effect  btn-flat red-text">Yes</a>'));
        Materialize.toast($toastContent, 3000);
    }
    </script>
<?php include("script/footer_script.php"); ?>
