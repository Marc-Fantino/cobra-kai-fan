<div class="container-fluide">

<div class="container text-center cobra">
    <h1 class="dojo">Commence par choisir ton Dojo</h1>
    <div class="row">
         
           
            <div class="col senseigauche">
            <img src="issets/img/cobra-kai.jpg" alt="Cobra Kai" width="200px" height="200px">
                
                <form action="" method="POST"><button type="submit" name="Lawrence">Eagle Fang Karaté</button>
                <?php
                if (isset($_POST["Lawrence"])){
                function EagleFang(){
                    echo "<p class='essai'>karaté basé sur l'attaque, ancien sensei des cobra Kai Johnny Lawrence veut repartir de zero et comprend que l'anciennement de son ancien maitre John Kreese n'ancienne que de la violence et aucune pitier. Le sensei Lawrence souhaite repartir de zero mais avec un karaté qui basé sur l'attaque avec un peu de respect</p>";
                } 
                EagleFang();
            }
                 ?>
            </form>
            
                </div>

                <div class="col senseidroite">
                
            <img src="issets/img/miyagi-do.jpg" alt="Daniel Larusso" width="200px" height="200px">
               
                <form action="" method="POST"><button type="submit" name="Larusso">Miyagi Do Karaté</button>
            <?php
            if (isset($_POST["Larusso"])){
                function affiche(){
                    echo "<p class='essai'>karaté basé sur la defence, le Miyagi Do karaté est enseigné par Daniel Larusso dans l'ancienne demeure de Mr Miyagi, il l'utilise son enseignement pour contrer l'entrainement du Cobra</p>";
                } 
                affiche();
            }
            ?>
            </form>
            </div>
            
        </div>
       
      
    </div>

   
</div>

