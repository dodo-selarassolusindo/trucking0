@section('title')
Trucking Apps v2 - Edit Armada
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="update">

                        <div class="form-group mb-4">
                            <label class="fw-bold">MERK</label>
                            <input type="text" class="form-control @error('merk') is-invalid @enderror" wire:model="merk" placeholder="Masukkan Merk Armada">

                            <!-- error message untuk merk -->
                            @error('merk')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">NOPOL</label>
                            {{-- <textarea class="form-control @error('content') is-invalid @enderror" wire:model="content" rows="5" placeholder="Masukkan Konten Post"></textarea> --}}
                            <input type="text" class="form-control @error('nopol') is-invalid @enderror" wire:model="nopol" placeholder="Masukkan Nopol Armada">

                            <!-- error message untuk nopol -->
                            @error('nopol')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
