        <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Create Supplier</h1>
                    <p class="mb-4">Create / Delete / update Supplier.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fill Supplier Information</h6>
                        </div>
                        <div class="card-body">
                      
                            <!-- row1  -->
                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Suppler Name</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                               
                            </div>
                            <div class="row">                                                          
                                <div class="col">
                                <label for="">GSTIN</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>  
                                <div class="col">
                                <label for="">Dealer Code</label>
                                <input type="text" class="form-control mb-2 id="iname">
                                </div>                                     
                            </div>
                            
                          
                            <div class="row">                                                          
                                <div class="col">
                                <label for="">PAN NO</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>   
                                <div class="col">
                                <label for="">State Code</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                             
                            </div>

                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Address</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                               
                            </div>                          

                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Contact Person</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                               
                            </div>

                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Mobile No</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>  
                                <div class="col">
                                <label for="">Phone No</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                                
                            </div>

                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Status</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                               
                            </div>

                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Opening Balance</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div> 
                                <div class="col">
                                <label for="">Dr/Cr Type</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                               
                            </div>

                            <div class="row">                                                          
                                <div class="col">
                                <label for="">Notes</label>
                                <input type="text" class="form-control mb-2" id="iname">
                                </div>                               
                            </div>
                            <div class="row">
                                <Button class="btn btn-primary mt-4" id="AddItem" onclick="additem()">Add Item</Button>
                                <Button class="btn btn-warning mt-4" id="updateItem" onclick="updateitemdata()">Update Item</Button>
                               
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->