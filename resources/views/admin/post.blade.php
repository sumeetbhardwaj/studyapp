@extends('admin.master')

@section('content')
                    <div class="container-fluid">
                        <h2 class="mt-4">Post's</h2>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Post's Title / Url</th>
                                                <th>User's Name</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sr. No</th>
                                                <th>Post's Title / Url</th>
                                                <th>User's Name</th>
												<th>Date</th>
                                                <th>States</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Post titles</td>
                                                <td>Admin</td>
                                                <td>22nd Dec, 2020</td>
                                                <td><button class="active-btn">Active</button></td>
                                                <td><a href="#"><i class='fas fa-eye'></i></a> | <a href="#"><i class='fas fa-trash-alt'></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Post 2nd</td>
                                                <td>Sumeet</td>
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
