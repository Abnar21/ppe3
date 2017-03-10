<head>
    
</head>

<body>
    <header class="business-header">
        <div class="container"> </body>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Administration des élèves</h1>
                </div>
            </div>
    </header>
    
    <h4> selectionner la classe de l'élève : </h4>
<select class="form-control" name="listeClasse" objet="classe">
    <?php foreach ($classe as $uneClasse) ?>
</select>
    <h4><br><center><a href="adminEleve.php?action=classe"/><button>Valider</button></a></center></h4>

<div class="row">
	<table class="table table-bordered">
            <thead>
		<tr>
                    <th>Nom élève</th>
                    <th>Prénom élève</th>
                    <th>Action</th>
		</tr>
            </thead>
            <tbody>
		<tr>
                    <th><?=$unEleve["nomEleve"]?></th>
                    <th><?=$unEleve["prenomEleve"]?></th>
                    <th>...</th>
                </tr>
            </tbody>
	</table>
</div>
