<?php
$Page = "Invitation";
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
              <a href="add_invited" class="waves-effect waves-light btn blue">
                Add More Invited
              </a>
            </div> 
          </div>
          <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Invited</th>
                <th>Office</th>
                <th>Username</th>
                <th></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Invited</th>
                <th>Office</th>
                <th>Username</th>
                <th></th>
              </tr>
            </tfoot>
            <tbody>
<?php
    $query = "SELECT a.*, b.* FROM invite AS a INNER JOIN office AS b WHERE a.id_office = b.id_office";
    $result = mysqli_query($con, $query);
    if($result->num_rows == 0){
              echo '
              <tr>
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
                  <td>'.$data['Invited'].'</td>
                  <td>'.$data['Office_name'].'</td>
                  <td>'.$data['Username'].'</td>
                  <td>
                    <a href="edit_invited?id_invited='.$data['Id_invit'].'"
                      class="waves-effect waves-light btn blue">
                      <i class="material-icons">edit</i>
                    </a>
                    <a onclick="delet('.$data['Id_invit'].')"class="waves-effect waves-light btn red btn toast-action-btn">
                      <i class="material-icons">delete_sweep</i>
                    </a>
                    <a href="report?id_invite='.$data['Id_invit'].'"
                      class="waves-effect waves-light btn blue">
                      <i class="material-icons">print</i>
                    </a>
                  </td>
              </tr>';
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
      .add($('<a href="index" class="waves-effect  btn-flat btn-primary">Cancel</a><a href="system/delet_invited.php?id='+id+'"class="waves-effect  btn-flat red-text">Yes</a>'));
    Materialize.toast($toastContent, 3000);
  }
</script>
<?php include("script/footer_script.php"); ?>
