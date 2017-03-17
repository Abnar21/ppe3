<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="index.php?action=createSanction" method="post">
            Sélectionner le type de sanctions : 
            <select name="menu_destination" id="menu_destination_liste">
            <?php
            foreach ($lesSanctions as $uneSanction){
                ?>
		
                     <option><?= $uneSanction["TypeSanction"]?></option>
       
                <?php
                }
                ?> </select>
            <div class="form-group">
              <label for="description">Description de la sanction</label>
              <textarea class="form-control" rows="3" id="descriptionSanction" name="descriptionSanction" placeholder="Description de la sanction "></textarea>
            </div>
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>    