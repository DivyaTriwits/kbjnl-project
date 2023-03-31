<?php if($this->session->flashdata('success')){?>
    <script>
        toastr.success('<?php echo $this->session->flashdata('success')?>');
    </script>
<?php }?>
<style>
    .btn:hover{
        background-color: #66CD00 !important;
        border-color: #66CD00 !important;
    }
</style>
<main>
    <div class="container-fluid site-width">
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">

                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center"> 
              <div class="row">
                 <div class="col-md-8">
                     <?php if($this->session->userdata('lang')=='EN') { ?>                
                        <h4 class="card-title">My Uploads</h4> 
                         <?php } else {?>
                             <h4 class="card-title">ನನ್ನ ಅಪ್‌ಲೋಡ್‌ಗಳು</h4>
                         <?php }?>
</div>
<div class="col-md-4" align="right">
<button type="submit" class="btn btn-outline-primary btn-sm" style="background-color: #66CD00; border: #66CD00; color: #ffff" data-toggle="modal" data-target="#uploadsModal" >Add Uploads</button>
</div>
</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered" >
                                <thead>
                                    <?php if($this->session->userdata('lang')=='EN') { ?> 
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Upload Type</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>View Images</th>
                                        <th>Comments</th>
                                        
                                    </tr>
                                    <?php } else {?>
                                        <tr>
                                        <th>Sl No.</th>
                                        <th>ಅಪ್‌ಲೋಡ್ ಪ್ರಕಾರ</th>
                                        <th>ವಿವರಣೆ</th>
                                        <th>ದಿನಾಂಕ</th>
                                        <th>ಚಿತ್ರವನ್ನು ವೀಕ್ಷಿಸಿ</th>
                                       <th>ಕಾಮೆಂಟ್</th>
                                    </tr>
                                        <?php }?>
                                </thead>
                                <tbody>

                                    <?php $i=1;
                                     foreach ($uploads as $eachupload) {?>
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><?php echo $eachupload->upload_type?></td>
                                            <td><?php echo $eachupload->msg?></td>
                                            <td><?php echo $eachupload->date?></td>
                                            <td><a class="btn btn-outline-primary btn-sm" style="border-color:#66CD00 " href="<?php echo base_url('view-images/'.$eachupload->upload_id)?>">View</a></td>
                                           <td><a class="btn btn-outline-primary btn-sm" style="color: green; cursor: pointer; border-color:#66CD00" href="<?php echo base_url('view-comments/'.$eachupload->upload_id)?>">Comments</a></td>
                                            
                                        </tr>
                                    <?php $i++; }?>
                                    
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div> 

            </div>                  
        </div>
    </div>
</main>


                <div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel10" aria-hidden="true" id="uploadsModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myLargeModalLabel10">Uploads Images</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                             <form id="formUpload" enctype="multipart/form-data" method="post" action="<?php echo base_url('insert-uploads')?>">
                                            <div class="modal-body">
                                               
                                                <div class="form-row">
                                                  <div class="col-md-6 mb-3">
                                                        <label for="">Upload Type</label>
                                                      <!--   <input type="text" class="form-control" id="location" placeholder="Ex: 11:00 AM to 12:00 PM" name="time" value="" required> -->
                                                        <select class="form-control" required="" name="types">
                                                          <option selected="" disabled=""> Select</option>
                                                          <option value="After Plant">After Plant</option>
                                                          <option value="On Delivery">On Delivery</option>
                                                          <option value="After Plant Some Day">After Plant Some Day</option>
                                                        </select>
                                                    </div>
                                                        <div class="col-md-6 mb-3">
                                                        <label>Images</label>
                                                         <input type="file" class="form-control" id="file" placeholder="" name="files[]" value="" multiple="" required>
                                                        
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Descriptions</label>
                                                        <textarea class="form-control" name="msg"></textarea>
                                                        
                                                    </div>
                                               
                                                    
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a data-dismiss="modal" style="cursor: pointer">Close</a>
                                                <button type="submit" class="btn btn" style="background-color: #66CD00; color: white">Submit</button>
                                               
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>

                                <script>
  $(document).ready(function(){
    $('#formUpload').bootstrapValidator({
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      fields: {
        files[]: {

          validators: {
            notEmpty: {
              message: 'The images is required'
            }
          }
        },
         msg: {

          validators: {
            notEmpty: {
              message: 'The description is required'
            }
          }
        },
         types: {

          validators: {
            notEmpty: {
              message: 'The upload type is required'
            }
          }
        },
        

      }
    })
  });

</script>