@extends('admin.master')

@section('content')
                    <div class="container-fluid">
                        <h2 class="mt-4">User's</h2>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>User's Name</th>
                                                <th>Email</th>
												<th>Phone</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No</th>
												<th>User's Name</th>
                                                <th>Email</th>
												<th>Phone</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Admin</td>
                                                <td>admin@studyapp.com</td>
												<td>9813313393</td>
                                                <td>22nd Dec, 2020</td>
                                                <td><button class="active-btn">Active</button></td>
                                                <td><a href="#"><i class='fas fa-eye'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Sumeet</td>
                                                <td>sumeet@studyapp.com</td>
												<td>9813313393</td>
                                                <td>22nd Dec, 2020</td>
                                                <td><button class="active-btn">Active</button></td>
                                                <td><a href="#"><i class='fas fa-eye'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @stop
