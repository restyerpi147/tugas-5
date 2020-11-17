@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Makanan Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		Detail Makanan <strong>{{$makanan->nama}}</strong>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Kategori</th>
                                <th>Harga Makanan</th>
                                <th width="400px">Deskripsi Makanan</th>
            				</tr>
            			</thead>
            			<tbody>
            				
            				<tr>
            					<td>1</td>
            					
            					<td>{{$makanan->kategori}}</td>
                                <td>Rp. {{number_format($makanan->harga)}}</td>
                                <td>{{$makanan->deskripsi}}</td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection