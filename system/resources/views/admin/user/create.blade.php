@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman User Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Tambah User</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/user')}}" method="post">
                    @csrf
                    
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            	</div>
            </div>
          </div>
        </div>




@endsection