 
 <button class="btn btn-sm btn-success search-person" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-search"></i></button>
<div class="modal fade bs-example-modal-lg" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" role="dialog" aaria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="staticBackdropLabel">Select Customer</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php 
                $result = DB::table('inv_customers')->get();
                foreach($result as $row){
                ?>  
                <div>
                    <p>{{ $row->name }}</p>
                </div>
                <?php    
                } ?>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm ">Understood</button>
            </div>
        </div>
    </div>
</div>

