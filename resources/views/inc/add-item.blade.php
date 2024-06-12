 
 <!-- <button class="btn btn-sm btn-success search-person" style="height: 30px;" data-bs-toggle="modal" data-bs-target="#addItem"><i class="fa fa-search"></i></button> -->
<div class="modal fade bs-example-modal-xl " id="addItem" data-bs-backdrop="static" tabindex="-1" role="dialog" aaria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-xl ">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" fs-4 fw-bold id="staticBackdropLabel">Add Item</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
        	<div class=" ">
        		 
  <form class="form" action="{{ url('/inventory/add/item') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="row  ">
      <div class="col-12   bg-white py-3">
        <div class="row">
          <div class="col-6">
            <table class="w-100 table table-sm ">
              <tr>
                <td ><label for="productname">Types</label> </td>
                <td>
                  <div class="row">
                    <div class="col form-group">
                    <div class="row">
                      <div class="col">
                        <input class="form-check-input text-uppercase" name="item_type" type="radio"
                            id="formRadios1" value="Goods" checked>&nbsp;&nbsp;
                        <label class="form-check-label" for="formRadios1">
                          Goods
                        </label>
                      </div>
                      <div class="col">
                        <input class="form-check-input text-uppercase" name="item_type" type="radio"
                            id="formRadios1" value="Services" >&nbsp;&nbsp;
                        <label class="form-check-label" for="formRadios1">
                          Services
                        </label>
                      </div>
                    </div>
                    </div>
                  </div>
                </td>
              </tr>
            </table>

            <table class="w-100 table-responsive table table-sm">
              <tr>
                <td>
                  <label for="productname">Product Name</label>
                </td>
                <td>
                  <div class=" ">
                      <input id="productname" name="product_name" type="text" class="form-control" placeholder="Product Name">
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="productname">SKU</label>
                </td>
                <td>
                  <div class=" ">
                      <input id="productname" name="sku" type="text" class="form-control" placeholder="SKU">
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="productname">Unit</label>
                </td>
                <td>
                  <div class=" ">
                    <select class="w-100 form-control select2" name="unit" >
                        <option>Select</option>
                        <option value="FA">value 1</option>
                        <option value="EL">value 2</option>
                          <option value="EL">value 3</option>
                    </select>
                  </div>
                </td>
              </tr>

              <tr>
                <td>  <label for="">Image</label></td>
                <td>
                <input type="file" class="form-control" name="image" value="" id="imageInput" accept="image/*">
                </td>
              </tr>

              <tr>
                <td></td>
                <td>
                  <div class="my-3 ">
                     <!-- <input class="form-check-input text-uppsercase" name="returnable" value="1" type="checkbox" id="formCheck1">
                     <label class="form-check-label" for="formCheck1">
                         Returnable
                     </label> -->
                     <div class="row">
                       <div class="col">
                         <input class="form-check-input text-uppercase" name="returnable" type="radio"
                               value="1" checked>&nbsp;&nbsp;
                         <label class="form-check-label" for="formRadios1">
                           Returnable
                         </label>
                       </div>
                       <div class="col">
                         <input class="form-check-input text-uppercase" name="returnable" type="radio"
                              value="0" >&nbsp;&nbsp;
                         <label class="form-check-label" for="formRadios1">
                           Non Returnable
                         </label>
                       </div>
                     </div>
                 </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col">
            <div class="image-box" id="imagePreview" style="width: 30px;">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <table class="w-100 table table-sm">
              <tr>
                <td><label>Dimension ( length X Breadth X Height )</label></td>
                <td>
                  <div class="">
                    <input type="text" name="dimension" class="form-control" placeholder="00 X 00 X 00">
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>Weight</label></td>
                <td>
                  <div class="">
                    <input type="text" name="weight" class="form-control" placeholder="Kg and Gram">
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>Color</label></td>
                <td>
                  <div class="">
                    <select class="w-100  " name="color" placeholder="Color">
                      @foreach($colors as $row)
                      <option value="{{$row->id}}">{{$row->color_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>Brand</label></td>
                <td>
                  <div class="w-100">
                    <select class="w-100  " name="brand" placeholder="select Brand">
                      @foreach($brand as $row)
                      <option value="{{$row->id}}">{{$row->brand_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>Manufacturer</label></td>
                <td>
                  <div class="">
                    <select class="w-100   rounded-0" name="manufacturer" placeholder="select Manufacturer">
                      @foreach($manufacturer as $row)
                      <option value="{{$row->id}}">{{$row->manufacturer_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>UPC(Barcode number)</label></td>
                <td>
                  <div class="">
                    <input type="text" name="barcode_number" class="form-control" placeholder="">
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>MPN(Manufacturing Part Number)</label></td>
                <td>
                  <div class="">
                    <input type="text" name="manufacturing_part_no" class="form-control" placeholder=" ">
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-6">
            <table>

            </table>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <table class="w-100 table table-sm">
              <tr>
                <td><label>Mrp</label></td>
                <td>
                    <input type="text" name="mrp" class="form-control" placeholder="">
                </td>
              </tr>
              <tr>
                <td><label>Cost Price</label></td>
                <td>
                  <div class="">
                    <input type="text" name="cost_price" class="form-control" placeholder=" ">
                  </div>
                </td>
              </tr>
              <tr>
                <td><label>Selling Price</label></td>
                <td>
                    <input type="text" name="selling_price" class="form-control" placeholder="">
                </td>
              </tr>

            </table>
          </div>

        </div>
      </div>
  </div>
  <div class="row mt-3">
    <div class="col text-right">
      <button type="submit"  name="button" class="btn btn-info">Save Item</button>
    </div>
  </div>
  </form>
</div>        
            </div>
           <!--  <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm ">Understood</button>
            </div> -->
        </div>
    </div>
</div>

