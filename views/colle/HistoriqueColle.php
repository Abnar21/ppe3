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
    </header> 
            <?php
            foreach ($lesClasses as $uneClasse){
                ?>
		Sélectionner une classe dans la liste suivante :
        <select name="menu_destination" id="menu_destination_liste">
                     <option><?= $uneClasse["libelle"]?></option>
        </select>
                <?php
                }
                ?>
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
                    <th>...</th>
                    <th>...</th>
                    <th>...</th>
                    <th>...</th>
                    <th>...</th>
                    <th>...</th>
                </tr>
            </tbody>
	</table>
</div>

