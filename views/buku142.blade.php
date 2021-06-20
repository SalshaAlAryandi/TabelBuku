<!DOCTYPE html>
<html lang="en" class="antialiased">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>DataTables </title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<!-- component -->
<body class="flex items-center justify-center background-color:powderblue">
	<div class="container">
  <h1 class="text- w-full flex flex-row flex-no-wrap sm:bg-red rounded-lg overflow-hidden sm:shadow-lg my-5 "> Fachrul Andy Setyawan 1461900146</h1> 
		<table class="w-full flex flex-row flex-no-wrap sm:bg-red rounded-lg overflow-hidden sm:shadow-lg my-5">
			<thead class="text-black text-center">
            <tr>
            <a href="{{url('export')}}" class="bg-red-500 hover:bg-blue-400 text-black font-bold py-2 px-4 border-b-4 border-red-700 hover:border-blue-500 rounded">
                    Export
                    </a>          
					<th data-priority="1" class="border" >No</th>
					<th data-priority="3" class="border">Tanggal</th>
                    <th data-priority="2" class="border">Bulan</th>
                    <th data-priority="2" class="border">Total</th>

				</tr>
        
			</thead>
			<tbody class="flex-1 sm:flex-none">
                    @foreach($buku146 as $kubu)
						<tr>
							<td class="border" >{{$kubu->id_pin}}</td>
                            <td class="border" >{{$kubu->tanggal}}</td>
                            <td class="border" >{{$kubu->bulan}}</td>
                            <td class="border" >{{$kubu->total}}</td>
						</tr>
					@endforeach
          
			</tbody>
		</table>
	</div>
</body>

<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>