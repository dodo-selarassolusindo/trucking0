@section('title')
Trucking Apps v2 - Tambah Transaksi Perbaikan
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="store">

                        <div class="form-group mb-4">
                            <label class="fw-bold">NOMOR</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" wire:model="nomor" placeholder="Masukkan Nomor Transaksi Perbaikan">

                            <!-- error message untuk nomor -->
                            @error('nomor')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">TANGGAL</label>
                            {{-- <textarea class="form-control @error('content') is-invalid @enderror" wire:model="content" rows="5" placeholder="Masukkan Konten Post"></textarea> --}}
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" wire:model="tanggal" placeholder="Masukkan Tanggal Transaksi Perbaikan">

                            <!-- error message untuk tanggal -->
                            @error('tanggal')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">PERBAIKAN DETAIL</label>
                            @livewire('tperbaikands.create')
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
