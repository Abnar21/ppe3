<head>
   
</head>

<body>
    <header class="business-header"> 
        <div class="container"> </body> 
            <div class="row"> 
                <div class="col-lg-12"> 
                    <h1 class="tagline">Historique des colles</h1> 
                </div> 
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
                ?> </select>
<div class="row">
	<table class="table table-bordered">
            <thead>
		<tr>
                    <th>Classe</th>
                    <th>Nom élève</th>
                    <th>Prénom élève</th>
                    <th>Date</th>
                    <th>Motif(s)</th>
                    <th>Action</th>
		</tr>
            </thead>
            <tbody>
		<tr>
                    <?php
            foreach ($lesEleves as $unEleve){
                ?>
                    <th><?= $uneClasse["libelle"]?></th>
                    <th><?= $unEleve["nomEleve"]?></th>
                    <th><?= $unEleve["prenomEleve"]?></th>
                    <th></th>
                    <th>Motif</th>
                    <th>Action</th>
                    <?php
                    }
                    ?>
                </tr>
            </tbody>
	</table>
</div>

