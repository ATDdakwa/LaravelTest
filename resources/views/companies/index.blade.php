@extends('base_layout.base')
@section('content')


    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Company</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" action="{{route('save_company')}}">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="Enter email">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Companies</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>Name</th>
                    <th>Action(s)</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse($companies as $company)
                  <tr>
                    <td>{{ $company->id }}</td>
                   <td>{{ $company->name}}</td>
                   <td>
                      <a class="btn bg-info" href="{{ route('get_company',['id'=>$company->id] )}}">
                        View
                      </a>
                      <a class="btn bg-danger" class="btn bg-secondary" href="{{ route('delete_company',['id'=>$company->id] )}}">
                          Delete
                      </a>   
                     </td>
                  </tr>
                  @empty
                  @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

        
          </div>
    </div>



@endsection