@extends('admin.master')

@section('content')
                    <div class="container-fluid">
                        <h2 class="mt-4">Test Cat's</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                                <button class="add-btn" data-toggle="modal" data-target="#testcat-addform">Add New Test Cat</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Test Cat's Name</th>
                                                <th>Test Cat's Code</th>
												<th>Test's Name</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Test Cat's Name</th>
                                                <th>Test Cat's Code</th>
												<th>Test's Name</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Bank</td>
                                                <td>301</td>
												<td>Clerk</td>
                                                <td>22nd Dec, 2020</td>
                                                <td><button class="active-btn">Active</button></td>
                                                <td><a href="#" data-toggle="modal" data-target="#testcat-editform"><i class='fas fa-edit'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>HSSC</td>
                                                <td>302</td>
												<td>Patwari</td>
                                                <td>22nd Dec, 2020</td>
                                                <td><button class="active-btn">Active</button></td>
                                                <td><a href="#"><i class='fas fa-edit'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @stop
<!--- Add subject popup --->					
 <div class="modal fade" id="testcat-addform" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title">Add New Test Cat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			  <div class="container">
				  <form action="">
					<div class="form-group">
					  <label for="email">Test Cat Name</label>
					  <input type="text" class="form-control" id="email" placeholder="Enter subject name
					  
					  
					  " name="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Test Cat Code:</label>
					  <input type="text" class="form-control" id="pwd" placeholder="Enter subject code" name="pwd">
					</div>
					<div class="form-group">
					  <label for="pwd">Test's Name:</label>
					  <select name="" class="form-control" id="">
					  	<option value="">Bank</option>
						<option value="">HSSC</option>
					  </select>
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				  </form>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>		
<!--- end Add subject popup --->  

<!--- edit subject popup --->					
 <div class="modal fade" id="testcat-editform" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title">Update Test Cat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			  <div class="container">
				  <form action="">
					<div class="form-group">
					  <label for="email">Test Cat Name</label>
					  <input type="text" class="form-control" id="email" placeholder="Enter subject" name="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Test Cat Code:</label>
					  <input type="text" class="form-control" id="pwd" placeholder="Enter subject code" name="pwd">
					</div>
					<div class="form-group">
					  <label for="pwd">Test's Name:</label>
					  <select name="" class="form-control" id="">
					  	<option value="">Bank</option>
						<option value="">HSSC</option>
					  </select>
					</div>
					<button type="submit" class="btn btn-success">Update</button>
				  </form>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>		
<!--- end Add subject popup ---> 
					