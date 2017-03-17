<head>
    
</head>

<body>
    <header class="business-header">
        <div class="container"> 
</body>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tagline">Administration des élèves</h1>
            </div>
        </div>
    </header> Sélectionner une classe dans la liste suivante :      
        <select name="menu_destination" id="menu_destination_liste">
            <?php
            foreach ($lesClasses as $uneClasse){
                ?>
		
                     <option><?= $uneClasse["libelle"]?></option>
       
                <?php
                }
                ?>
        </select>
    
    <h4><br><center><a href=""/><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Valider</button></a></center></h4>
    <?php
    foreach ($lesEleves as $unEleve) 
        ?> 
    
<div class="row">
	<table class="table table-bordered">
            <thead>
		<tr>
                    <th>Nom élève</th>
                    <th>Prénom élève</th>
                    <th colspan="2">Actions</th>
		</tr>
            </thead>
            <?php
         foreach ($lesEleves as $unEleve)
         {
            ?>
            <tbody>
		<tr>
                    <td><?=$unEleve["nomEleve"]?></td>
                    <td><?=$unEleve["prenomEleve"]?></td>
                    <td><a href="index.php?action=erase&id=<?=$unEleve["id"]?>">il est beau</a></td>
                </tr>
            </tbody>
            <?php
         }
            ?>   
           
	</table>
</div>
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ajouter un élève</button>
