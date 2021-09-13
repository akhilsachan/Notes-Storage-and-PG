<?php
include('connection.php');
// print_r($_SESSION);
// die;
?>

    <!--End Top Nav. header -->
    <div class="mb-3 pt-2 pb-1 text-center notes_header">
      <h2><b>YOUR NOTES</b>
      <div class="wrap">
        <div class="search">
           <input type="text" id="searchTxt" class="searchTerm" placeholder="Search here" aria-label="Search">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div></h2>
    </div>
    <!-- CARDS -->
    <div class="mx-4 row container-fluid">
    
    <?php
    $data = mysqli_query($connection, "SELECT * FROM `user_data_table` WHERE `user_id`= $_SESSION[user_id]");
    $i = 0;
    $numrows = mysqli_num_rows($data);
    if($numrows > 0)
    {
    while($i < $numrows)
    {
    ?>
    <div class="shadow-lg noteCard mx-4 mt-4 card card_border_design" style="width: 18rem;">
    <div class="card-body">
      <?php
            $hd = mysqli_fetch_assoc($data);
            $card_created = date('d-M-y H:i',strtotime($hd['card_created']));
      ?>
      <h5 class="card-title mb-4" style="font-size:22px;"><strong><?php echo $hd['name'] ?></strong>
        <span class="card_category badge bg-info text-dark"><?php echo $hd['category'] ?></span>
      </h5>
      <p class="card_user card-text mb-2">ID: <?php echo $hd['username'] ?></p>
      <p class="card_user card-text+ mb-2">Pass: <?php echo $hd['password'] ?></p>
      <div class="card_icon">
        <span class="created">Created: <?php echo $card_created ?></span>
        <a href="#" data-bs-target="#vault_update_note_<?php echo $hd['id']?>" data-bs-toggle="modal"><i class="text-dark fas fa-edit px-2"></i></a>
        <a href="#" data-bs-target="#vault_delete_note_<?php echo $hd['id']?>" data-bs-toggle="modal"><i class="delete_icon far fa-trash-alt"></i></a>
      </div>
    </div>
  </div>

    <!-- Card Update Modal -->

    <div id="vault_update_note_<?php echo $hd['id']?>" class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="container pt-3 px-4 pb-3 add_card_shadow">
          <form action="addcard.php" method="POST" class="form_design">
          <input type="hidden" name="card_id" value = "<?php echo $hd['id'] ?>" >
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Heading</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Heading" name="card_heading" value = "<?php echo $hd['name'] ?>" >
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter Category</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter Category" maxlength="6" name="card_category" value = "<?php echo $hd['category'] ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Account Name/Email/Username</label>
              <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here" name="card_username" value = "<?php echo $hd['username'] ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password/PIN/Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter here" name="card_password" value = "<?php echo $hd['password'] ?>">
            </div>
            <input type="submit" class="btn btn-primary add_note_btn" name="update_card" value="Update Data" />
          </form>
        </div>

      </div>
    </div>
  </div>

    <!-- Card Update Modal -->

      <!-- DELETE Modal -->

    <div id="vault_delete_note_<?php echo $hd['id']?>" class="modal" tabindex="-1">
    <div class="modal-dialog logout_modal_center">
      <div class="modal-content">
      <div class="modal-body logout_modal">
      <form action="addcard.php" method="POST" class="form_design">
      <input type="hidden" name="card_id" value = "<?php echo $hd['id'] ?>">
          <p class="mb-2">Are you sure you want to Delete?</p>
          <input type="submit" class="btn btn-primary logoutbtn_modal" name="delete_cards" value="Yes" >
          <button type="button" class="btn btn-secondary cancelbtn_modal" data-bs-dismiss="modal">No</button>
      </form>
      </div>
        
      </div>
    </div>
  </div>

  <!-- DELETE Modal -->


    <!-- Card Delete -->
  <?php
    $i++;
    }
  }
  ?>
   </div>
</div>
  <?php
  if($numrows <= 0){
    ?>

<div class="text-center not_found_vault">
      <p><b><pre>                   Nothing to show, Please save Important Details :(</pre></b></p>
  </div>


<?php

  }

?>
      
      <!-- CARDS -->


      <!-- search bar dalna hai -->

  <!-- Content Area END -->