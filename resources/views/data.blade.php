<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RestFul Corona</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
		{{-- <div class="container">	 --}}
			<div class="card mt-2">	
				<div class="card-header">
					<h5>Jumlah Data Covid 19</h5>

				</div>

				<div class="card-body">
					Terakhir Diupdate : {{ date('d-m-Y', strtotime($data['last_date'])) }}
					<br>
					<i>Sumber : https://data.covid19.go.id/</i>

					<table class="table table-secondary table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Provinsi</th>
								<th>Jumlah Kasus</th>
								<th>Jumlah Sembuh</th>
								<th>Jumlah Meninggal</th>
								<th>Jumlah Dirawat</th>
								<th colspan="2" class="text-center">Jenis Kelamin</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data['list_data'] as $item)
							<tr class="text-center">
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item['key'] }}</td>
								<td>{{ $item['jumlah_kasus'] }}</td>
								<td>{{ $item['jumlah_sembuh'] }}</td>
								<td>{{ $item['jumlah_meninggal'] }}</td>
								<td>{{ $item['jumlah_dirawat'] }}</td>

								@foreach($item['jenis_kelamin'] as $jk)
								<td>{{ $jk['key'] }} : {{ $jk['doc_count'] }}</td>
								@endforeach
							</tr>
							@endforeach
						</tbody>

					</table>
				{{-- </div> --}}
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
	</html>

