 @extends('dashboard.layouts.main')

 @section('container')
 <title>Dokter</title>
 <div class=" row justify-content-center" >
  <div class="col-lg-9">
    <form action ="/sakit/{{ $sakits->id}}" method="post">
      @method('PUT')
      @csrf
      <div class="card border-dark mb-3" >
        <div class="card-header text-center "><b><h3>
          Form Edit Surat Keterangan Sakit
        </h3></b></div>
        <d iv class="card-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('pasien_id') is-invalid @enderror" id="pasien_id" name="pasien_id" value="{{old('pasien_id',$sakits->pasien_id)}}" readonly="true">
              @error('pasien_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tanggal Mulai</label>
            <div class="col-sm-10">
              <input type="date" class="form-control @error('tgl_mulai') is-invalid @enderror" id="tgl_mulai" name="tgl_mulai" value="{{old('tgl_mulai',$sakits->tgl_mulai)}}">
              @error('tgl_mulai')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tanggal Berakhir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control @error('tgl_berakhir') is-invalid @enderror" id="tgl_berakhir" name="tgl_berakhir" value="{{old('tgl_berakhir',$sakits->tgl_berakhir)}}">
              @error('tgl_berakhir')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 form-label">Dokter</label>
            <div class="col-sm-10">
              <select class="form-select" name="dokter_id" aria-label="Default select example">
                <option class="selected">--Pilih Dokter--</option>
                @foreach ($dokters as $dokter)
                @if(old('dokter_id',$sakits->dokter_id)== $dokter->id)
                <option value="{{ $dokter->id }}" selected>{{ $dokter->nama }}</option>
                @else
                <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <a href="../sakit" class="btn btn-outline-dark col-md-2 ">Kembali</a> 
              <button type="submit" name="submit" class="btn btn-success col-md-2 offset-md-8">Update</button>

            </div>
          </div>
        </div>
      </div>

    </form>
  </div>

</div>

@endsection