@extends('main')
@section('content')
<div class="flex m-5">
  <a href="{{ route('create.project') }}" class="btn btn-secondary xl"><i class="fe fe-plus"></i> ADD PROJECT</a>
</div>
           <div class="col-12 mt-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Projects list</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">No.</th>
                          <th>Project Name</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th>Price</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><span class="text-muted">001401</span></td>
                          <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                         
                          <td>
                            15 Dec 2017
                          </td>
                          <td>
                            <span class="status-icon bg-success"></span> Paid
                          </td>
                          <td>$887</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">001402</span></td>
                          <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
                          
                          <td>
                            12 Apr 2017
                          </td>
                          <td>
                            <span class="status-icon bg-warning"></span> Pending
                          </td>
                          <td>$1200</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">001403</span></td>
                          <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                         
                          <td>
                            23 Oct 2017
                          </td>
                          <td>
                            <span class="status-icon bg-warning"></span> Pending
                          </td>
                          <td>$534</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">001404</span></td>
                          <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                          
                          <td>
                            2 Sep 2017
                          </td>
                          <td>
                            <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                          </td>
                          <td>$1500</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">001405</span></td>
                          <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                         
                          <td>
                            29 Jan 2018
                          </td>
                          <td>
                            <span class="status-icon bg-danger"></span> Paid Today
                          </td>
                          <td>$648</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td><span class="text-muted">001406</span></td>
                          <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                         
                          <td>
                            4 Feb 2018
                          </td>
                          <td>
                            <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                          </td>
                          <td>$300</td>
                          <td class="text-right">
                            <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                            <div class="dropdown">
                              <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                            </div>
                          </td>
                          <td>
                            <a class="icon" href="javascript:void(0)">
                              <i class="fe fe-edit"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
            
@endsection