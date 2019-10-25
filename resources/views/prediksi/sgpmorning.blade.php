@extends('apps.layout2')
@section('content')
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    @foreach ($gambar_sgpmornings as $gh)
                    <h3 class="mt-30"><b>{{$gh->judul}}</b></h3>

                    <img width="600px" src="{{ url('/data_file/'.$gh->file) }}" >

                    <p class="mtb-15">{{$gh->keterangan}}</p>
                    @endforeach
                </div>
            </div>
        </div>
</section>
@endsection
