<?php
    include __DIR__."/partials/templates/header.php";

 ?>

 <div class="container p-3">
     <form class="" action="partials/create/server.php" method="post">
         <div class="form-group">
             <label for="roomNumber">Numero stanza</label>
             <input type="number" class="form-control" name="roomNumber" placeholder="Inserisci il numero della stanza" value="" id="roomNumber" >

         </div>
         <div class="form-group">
             <label for="floor">Floor</label>
             <input type="number" class="form-control" name="floor" placeholder="inserisci il piano" value="" id="floor" >

         </div>
         <div class="form-group">
             <label for="beds">Numero di letti</label>
             <input type="number" class="form-control" name="beds" placeholder="inserisci il numero di letti" value="" id="beds" >

         </div>
         <div class="form-group">
             <input type="submit" class="form-control bg-warning" value="Inserisci">
         </div>
     </form>
 </div>
<!-- chiusura container -->
 <?php
 include __DIR__ . "/partials/templates/footer.php";
  ?>
