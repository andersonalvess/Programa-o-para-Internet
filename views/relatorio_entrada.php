<div class="row">
    <div class="col-md-12">
        <h3 class="text-center">Todas as Entradas Realizadas</h3><hr>
    </div>
</div>
<?php if($_POST['entrada']->num_rows>0){?>
<div class="row">
    <div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
			    <thead>
			        <tr>
			            <th>Codigo</th>
			            <th>item</th>
                        <th>Quantidade</th>
			            <th>Data</th>
			            <th>Retirante</th>
			            <th>Matricula</th>
                        <th>Valor</th>
			        </tr>
			    </thead>
			    <tbody>
			        <?php
			            $control = new Controlador;
			            while($row = $_POST['entrada']->fetch_assoc()){
			            	$row['data'] = $control->data($row['data']);
			                echo'
			                    <tr>
			                        <td>'.$row['identrada'].'</td>
			                        <td>'.$row['item_iditem'].'</td>
                                    <td>'.$row['quantidade'].'</td>
			                        <td>'.$row['data'].'</td>
			                        <td>'.$row['nome'].'</td>
			                        <td>'.$row['usuario_matricula'].'</td>
                                    <td>R$ '.$row['valor']*$row['quantidade'].'</td>
                                </tr>
			                ';
			            }   
			        ?>                               
			    </tbody>
			</table>
		</div>
	</div>
</div>
<?php
  }else{
    echo '<div class="alert alert-danger"><h7><center>Nenhuma entrada cadastro</center></h7></div>';
  }
?>