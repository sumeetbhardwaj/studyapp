@extends('admin.master')

@section('content')
                    <div class="container-fluid">
                        <h2 class="mt-4">Subject's</h2>
                        <div class="card mb-4">
                            <div class="card-header">
                                <button class="add-btn">Add New Subject</button>
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
                                                <td><a href="#"><i class='fas fa-edit'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
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