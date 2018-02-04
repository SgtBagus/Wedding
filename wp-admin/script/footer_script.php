    <script src="js/scripts.min.js"></script>
    <script src="plugins/nicescrool/jquery.nicescroll.min.js"></script>
    <script src="plugins/animsition/js/animsition.min.js"></script>
    <script src="plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="plugins/datatable/dataTables.material.min.js"></script>
    <script src="plugins/datatable/dataTables.responsive.min.js"></script>
    <script>
        $('#example').DataTable({
            responsive: true,
            columnDefs: [{
                targets: [0, 1, 2],
                className: 'mdl-data-table__cell--non-numeric'
            }]
        });
      <?php
          if (isset($_GET['action'])) {
              $action = ($_GET["action"]);
              if($action == "deleted"){
                echo "Materialize.toast('Data Has Deleted', 4000)";
              }
              else if($action == "add"){
                echo "Materialize.toast('New Data Added', 4000)";
              }
              else if($action == "edit"){
                echo "Materialize.toast('Data Has Edited', 4000)";
              }
              else if($action == "duplicate"){
                echo "Materialize.toast('Data Has There', 4000)";
              }
              else if($action == "error"){
                echo "Materialize.toast('Error', 4000)";
              }
          }
      ?>
    </script>
  </body>
</html>
