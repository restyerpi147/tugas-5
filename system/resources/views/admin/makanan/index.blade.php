@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Makanan Restaurant 24</h3>

            <div class="card">
                @include('template.utils.notif')
            	<div class="card-header">
            		<strong>Menu Makanan</strong>
            		<a href="{{url('admin/makanan/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Aksi</th>
            					<th>Nama Makanan</th>
                                <th>Harga Makanan</th>
                                <th>Kategori Makanan</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($list_makanan as $makanan)
            				<tr>
            					<td>{{$loop->iteration}}</td>
            					<td>
            						<div class="btn-group">
            							<a href="{{url('admin/makanan', $makanan->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
            							<a href="{{url('admin/makanan', $makanan->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('template.utils.delete', ['url' => url('admin/makanan', $makanan->id)])
            						</div>
            					</td>
            					<td>{{$makanan->nama}}</td>
                                <td>Rp. {{number_format($makanan->harga)}}</td>
                                <td>{{$makanan->kategori}}</td>
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection