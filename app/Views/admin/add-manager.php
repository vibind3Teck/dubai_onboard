 
 <?=$this->extend("backend/base")?>
 
 <?=$this->section("main_content")?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
       <div class="col-6">
         <div class="card card-primary">
 
              <div class="card-header">
                <h3 class="card-title">Create-Managers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="product" enctype="multipart/form-data" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="f_name" name="f_name"placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name </label>
                    <input type="text" class="form-control" id="l_name" name="l_name"placeholder="Enter Last Name">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="email" name="email"placeholder="Enter Email">
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone"placeholder="Enter Phone">
                  </div> 

                  <div class="form-group">
                    <label for="Product_image">Manager Image</label>
                   <div class="custom-file">
                      <!-- <input type="file" class="custom-file-input" id="Product_image" name="Product_image"> -->
                      <input type="file" name="user_image" id="user_image" class="form-group" multiple>
                    </div>
                  </div> 


                 <div class="card-footer">
                 <!--   <button type="submit" class="btn btn-primary">Submit</button> -->
                  <input type="button" name="submit" id="submit" class="btn btn-primary" value="Submit" />  
                </div>
              </div>
              </form>
             </div>
            </div>
          </div>
       <?=$this->section("script_content")?>
       <script type="text/javascript">




$(document).ready(function() {
  $('#summernote').summernote();
  $('#brand_name').on('change', function(e) {
     e.preventDefault();
    var brand_id =  this.value ;

     $.ajax({
             url:'<?php echo base_url('getCategoryById');?>',
             type:"POST",
             data:{brand_id},
          beforeSend: function(){
                
            $('#category_name').empty();
               },
          success: function(response){
            $('#category_name').find('option').not(':first').remove();
            $.each(JSON.parse(response),function(index,data){
            $('#category_name').append('<option value="'+data['id']+'">'+data['category_name']+'</option>');
            });
           
           }
          });
  });


});


  $(document).on('click', '#submit', function(){ 
    var html = $('#summernote').summernote('code');

   var form_data = new FormData($('#product')[0]);
  
   form_data.append('description', html);


   /* var category_id = $('#category_id').find(":selected").val();
    var product_name = $('#product_name').val();
    var product_sku = $('#product_sku').val();*/
   if($('#product_name').val() == ''){
  
      Swal.fire('Product Name Is Required!', '', 'error')
    
   }else if($('#product_sku').val() == ''){
  
      Swal.fire('Product SKU Is Required!', '', 'error')
    
   }else if($('#product_price').val() == ''){
  
      Swal.fire('Product Price Is Required!', '', 'error')
    
   }else if($('#brand_name').val() == 'Choose Brand'){
  
      Swal.fire('Brand Name Is Required!', '', 'error')
    
   }else if($('#category_name').val() == ''){
  
      Swal.fire('Category Name Is Required!', '', 'error')
    
   }else if($('#product_image').val() == ''){
  
      Swal.fire('Product Image  Is Required!', '', 'error')
    
   }else if($('#summernote').summernote('isEmpty')){
  
      Swal.fire('Product Description  Is Required!', '', 'error')
    
   }else{
      $.ajax({
           url:'<?php echo base_url('addSingleProduct');?>',
           type:"POST",
           data:form_data,
           processData: false,
           contentType: false,
           
            success: function(data){
              //console.log(data);
             Swal.fire(data.msg)   

              window.location.href = '<?php echo base_url('admin/Products');?>'; 
         }
       });
   }

 });


    <?=$this->endSection('script')?>
  <?=$this->endSection('main_content')?>