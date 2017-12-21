<!doctype html>
<html lang="en">
  <head>
    <title>parrain</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  </head>

  <body>
  @include('header')
  <div class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12">
        <br>
        <br>
				<center>
          <div class="col-xs-4 col-sm-4 col-md-4" style="float: left;">
            Bonus: <?php echo $info2[0] . " euro(s)"; ?>
            <br>
            <a href="demandepaiement/<?php echo $info2[3] ?>">Demander un paiement</a>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4" style="float: left;">
            Nombre de personne ayant utilisé pseudo: <?php if(isset($info2[1])){ echo $info2[1]; } else {echo "0";} ?>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4" style="float: left;">
            Pseudo: <?php if(isset($info2[2])){ echo $info2[2]; } else {echo "";} ?>
          </div>
          <br>
          <br>
          <br>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="parrain/<?php echo $info2[3] ?>">Voir Infos Profile</a>
          </div>
          <br>
          <br>
					<h2>Liste Filleule (s)</h2>
					<div class="table-responsive">
                  <table id="myTable" class="table table-bordered datatable">
                    <thead>
                      <tr>
                        <th>Filleule</th>
                        <th>Date Parrainage</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                          if($info)
                          {  
                            foreach($info as $roito) 
                            {
                              echo "<tr>";
                              echo "<td>" . $roito->Nom . " " . $roito->Prenom . "</td>";
                              echo "<td>" . $roito->DateParrainage . "</td>";
                              echo "</tr>";                             
                            } 
                          }  
                        ?> 
                    </tbody>
                  </table>
                </div>
				</center>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>

    <script type="text/javascript">

    $( document ).ready(function() 
    {
    $('#myTable').DataTable(
    {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
    });
    });
    </script>
		
  </body>
</html>