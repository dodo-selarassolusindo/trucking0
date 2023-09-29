@section('title')
Trucking Apps v2 - Data Armada
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <a href="/armada/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">TAMBAH ARMADA</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Merk</th>
                                <th scope="col">Nopol</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($armadas as $row)
                            <tr>
                                <td>{{ $row->merk }}</td>
                                <td>{{ $row->nopol }}</td>
                                <td class="text-center">
                                    <a href="/armada/edit/{{ $row->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    {{-- <button class="btn btn-sm btn-danger">DELETE</button> --}}
                                    {{-- <button wire:click="destroy({{ $row->id }})" class="btn btn-sm btn-danger">DELETE</button> --}}
                                    <button wire:confirm="Are you sure?" wire:click="destroy({{ $row->id }})" class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Armada belum tersedia
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $armadas->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    document.addEventListener('livewire:init', () => {

        Livewire.directive('confirm', ({ el, directive, component, cleanup }) => {
            let content = directive.expression

            let onClick = e => {
                if (! confirm(content)) {
                    e.preventDefault()
                    e.stopImmediatePropagation()
                }
            }

            el.addEventListener('click', onClick, { capture: true })

            cleanup(() => {
                el.removeEventListener('click', onClick)
            })
        })

    })

</script>
