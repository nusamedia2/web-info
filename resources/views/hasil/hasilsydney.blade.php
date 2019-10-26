@extends('apps.layout2')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <h3 class="mt-30"><b>HASIL</b></h3>
                <select name="Select Pools" onchange="location = this.value;" class="form-control">
                    <option value="">-- Select Pools --</option>
                    <option value="/hasil-hongkong">Hongkong Pools</option>
                    <option value="/hasil-jakarta">Jakarta Pools</option>
                    <option value="/hasil-jowo">Jowo Pools</option>
                    <option value="/hasil-sihanouk">Sihanouk Pools</option>
                    <option value="/hasil-singapore">Singapore Pools</option>
                    <option value="/hasil-sydney">Sydney Pools</option>
                    <option value="/hasil-totomacau">Toto Macau Pools</option>
                </select>
                <h3 class="mt-30">History Nomor</h3>
                <h4 class="mt-30"><b>Sydney Pools</b></h4>
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Periode</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nomor</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hasil_sydeys as $p)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$p->hari}}</td>
                                <td>{{$p->tanggal}}</td>
                                <td>{{$p->nomor}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
