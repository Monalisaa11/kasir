@extends('layouts.main')

@section('title','Pelanggan')

@section('content')

<body>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Monalisa</td>
                <td>Parungkuda</td>
                <td>081384636168</td>
            </tr>
        </tbody>
    </table>
    <button type="submit"class="btn btn-primary w-10">Submit</button> 
</body>
</html>

@endsection