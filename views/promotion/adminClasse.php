<div class="row">
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Classe</th>
            <th colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th></th>
            <th><a href="#">Renommer la classe</th>
            <th><a href="index.php?action=classeActuelle">Consulter la liste de la classe</a></th>
            <th><a href="index.php?action=adminEleve">Modifier la liste de classe</a></th>
            <th><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Supprimer la classe</button></th>
        </tr>
    </tbody>    
</table>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Êtes-vous sûr de vouloir supprimer cette classe ?</p>
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-default">Oui</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
    </div>

  </div>
</div>