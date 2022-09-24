<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                <div class="container-fluid">
                <form id="addForm">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Firstname:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="firstname" id="firstname">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Lastname:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                    </div>                
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Address:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" id="address">
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addbutton" class="btn btn-primary"> Save</a>
                </form>
                </div>
                 
            </div>
        </div>
    </div>
 
<!-- Edit -->
    <div class="modal fade" id="editmem" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <form id="editForm">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Firstname:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="efirstname" id="efirstname">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2"><input type="hidden" name="eid" id="eid">
                            <label class="control-label" style="position:relative; top:7px;">Lastname:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="elastname" id="elastname">
                        </div>
                    </div>                    
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Address:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eaddress" id="eaddress">
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="editbutton" class="btn btn-warning"> Update</a>
                </form>
                </div>
                 
            </div>
        </div>
    </div>
 
<!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <h5><center>Firstname: <strong><span id="dfirstname"></span></strong></center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="delbutton" class="btn btn-danger"> Delete</button>
                </div>
                 
            </div>
        </div>
    </div>
