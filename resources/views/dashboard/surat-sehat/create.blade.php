 @extends('dashboard.layouts.main')

 @section('container')
 <title>Dokter</title>
 <div class=" row justify-content-center" >
  <div class="col-lg-9">
    <form action ="/sehat" method="post">
      @csrf
      <div class="card border-dark mb-3" >
        <div class="card-header text-center "><b><h3>
          Form Insert Surat Keterangan Sehat
        </h3></b></div>
        <d iv class="card-body">
          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">NIK</label>
            <div class="col-sm-10">
              <select class="form-select" name="pasien_id" aria-label="Default select example">
                <option class="selected">--Pilih NIK--</option>
                @foreach ($pasiens as $pasien)
                @if(old('pasien_id')== $pasien->id)
                <option value="{{ $pasien->id }}" selected>{{ $pasien->nik }}</option>
                @else
                <option value="{{ $pasien->id }}">{{ $pasien->nik }}</option>
                @endif
                @endforeach
              </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tinggi Badan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('tinggi_badan') is-invalid @enderror" id="tinggi_badan" name="tinggi_badan" value="{{old('tinggi_badan')}}">
              @error('tinggi_badan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Berat Badan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('berat_badan') is-invalid @enderror" id="berat_badan" name="berat_badan" value="{{old('berat_badan')}}">
              @error('berat_badan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Golongan Darah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('golongan_darah') is-invalid @enderror" id="golongan_darah" name="golongan_darah" value="{{old('golongan_darah')}}">
              @error('golongan_darah')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Riwayat Penyakit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('riwayat_penyakit') is-invalid @enderror" id="riwayat_penyakit" name="riwayat_penyakit" value="{{old('riwayat_penyakit')}}">
              @error('riwayat_penyakit')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Tanggal MPeriksa</label>
            <div class="col-sm-10">
              <input type="date" class="form-control @error('tgl_periksa') is-invalid @enderror" id="tgl_periksa" name="tgl_periksa" value="{{old('tgl_periksa')}}">
              @error('tgl_periksa')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

          <div class="mb-3 row">
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">Keperluan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" value="{{old('keperluan')}}">
              @error('keperluan')
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
                @if(old('dokter_id')== $dokter->id)
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
              <a href="../sehat" class="btn btn-outline-dark col-md-2 ">Kembali</a> 
              <button type="submit" name="submit" class="btn btn-success col-md-2 offset-md-8">Create</button>

            </div>
          </div>
        </div>
      </div>

    </form>
  </div>

</div>

@endsection