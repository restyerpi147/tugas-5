@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Makanan Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		Detail Data <strong>{{$user->nama}}</strong>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Alamat Email</th>
                                <th>Remember Token</th>
            				</tr>
            			</thead>
            			<tbody>
            				
            				<tr>
            					<td>1</td>
            					
            					<td>{{$user->nama}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->remember_token}}</td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection