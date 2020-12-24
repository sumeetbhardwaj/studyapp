@extends('admin.master')

@section('content')
                    <div class="container-fluid">
                        <h2 class="mt-4">Subject's</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                                <button class="add-btn" data-toggle="modal" data-target="#sub-addform">Add New Subject</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Subject's Name</th>
                                                <th>Subject's Code</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Subject's Name</th>
                                                <th>Subject's Code</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Hindi</td>
                                                <td>101</td>
                                                <td>22nd Dec, 2020</td>
                                                <td><button class="active-btn">Active</button></td>
                                                <td><a href="#" data-toggle="modal" data-target="#sub-editform"><i class='fas fa-edit'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>English</td>
                                                <td>102</td>
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
 <div class="modal fade" id="sub-addform" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title">Add New Subject</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			  <div class="container">
				  <form action="">
					<div class="form-group">
					  <label for="email">Subject Name</label>
					  <input type="text" class="form-control" id="email" placeholder="Enter subject name" name="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Subject Code:</label>
					  <input type="text" class="form-control" id="pwd" placeholder="Enter subject code" name="pwd">
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
 <div class="modal fade" id="sub-editform" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title">Update Subject</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			  <div class="container">
				  <form action="">
					<div class="form-group">
					  <label for="email">Subject Name</label>
					  <input type="text" class="form-control" id="email" placeholder="Enter subject" name="email">
					</div>
					<div class="form-group">
					  <label for="pwd">Subject Code:</label>
					  <input type="text" class="form-control" id="pwd" placeholder="Enter subject code" name="pwd">
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
					