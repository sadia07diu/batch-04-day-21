
<?php include "pages/includes/header.php"; ?>

<section class="py-5">
     <div class="container">
         <div class="row">
             <div class="col-md-8 mx-auto">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="text-capitalize">calculator</h5>
                     </div>
                     <div class="card-body">
                         <form action="action.php" method="post">
                             <div class="form-group row">
                                 <label for="" class="col-md-4 col-form-label"> First Number</label>
                                 <div class="col-md-8">
                                     <input type="number" name="first_number" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-4 col-form-label"> Last Number</label>
                                 <div class="col-md-8">
                                     <input type="number" name="last_number" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-4 col-form-label">Options </label>
                                 <div class="col-md-8">
                                     <label><input type="radio" name="option" value="+">add</label>
                                     <label><input type="radio" name="option" value="-">sub</label>
                                     <label><input type="radio" name="option" value="*">mul</label>
                                     <label><input type="radio" name="option" value="/">div</label>
                                     <label><input type="radio" name="option" value="%">mod</label>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-4 col-form-label">Result</label>
                                 <div class="col-md-8">
                                     <input type="text" readonly value="<?php echo isset($result) ? $result : '' ?>" class="form-control">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-4 col-form-label"></label>
                                 <div class="col-md-8">
                                     <input type="submit" name="btn" value="Check Result" class="btn btn-outline-success">
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</section>
<?php include 'pages/includes/footer.php'; ?>