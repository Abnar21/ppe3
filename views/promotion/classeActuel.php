<center><h1>CLASSE ACTUELLE</h1></center>
<div class="row"> 
            <div class="col-sm-8"> 
                <h2>Sélectionner la classe dans le menu déroulant</h2>
                <label for="menu_destination_liste">Classes : </label> 
                <select name="menu_destination" id="menu_destination_liste">
                    <option>Selectionner</option>
                     <option value="index.php?tableau=1SSI">1SSI</option>
                     <option value="index.php?tableau=TSSI">TSSI</option> 
                     <option value="index.php?tableau=1BACPROSN">1BACPROSN</option>
                </select>
            </div> 
            <div class="col-sm-4"> 

                <?php
                    if(isset($_GET["tableau"]))
                    {
                            // r�cupartion de l'action pass�e dans l'url
                            $action=$_GET["tableau"];
                            // test de la valeur de la variable
                            switch ($tableau) {
                                case "1SSI":
                                    include 'view/accueil.php';
                                    break; 
                                case "TSSI":
                                    include 'view/classeActuel.php';
                                    break;
                                case "1BACPROSN":
                                    include 'view/historique.php';
                                    break;                               
                            }
                    }
                    else
                    {
                    }
                   ?>
