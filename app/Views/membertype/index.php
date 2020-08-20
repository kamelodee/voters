


<div class="container">
 
 <h1 class="text-center">Member Types</h1>
<a href="/membertype-create" class="btn-bg btn mb-1">Create New</a>
<table class="table table-bordered" id="voters-table">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Member Type</th>
     <th scope="col">description</th>
     <th scope="col" class="text-center">Actions</th>
   
   </tr>
 </thead>
 <tbody>
 <?php
           foreach($membertypes as $value){
       ?>
   <tr>
     <th scope="row"> <?php echo $value['id']; ?></th>
     <td> <?php echo $value['membertype']; ?></td>
     <td><?php echo $value['description']; ?></td>
     <td class="text-center">
         <a href="/membertype-edit-<?= $value['id']; ?>" class="btn btn-bg">Edit</a>
         <a href="/membertype/delete/<?=$value['id']; ?>" class="btn btn-danger">Delete</a>
   
   </td>
   </tr>
   <?php
           }
       ?>
 </tbody>
</table>

</div>


   