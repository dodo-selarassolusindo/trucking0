        <div class="card">
            {{-- <div class="card-header">
                Detail Transaksi Perbaikan
            </div> --}}

            <input type="hidden" name="armada2[]" wire:model="armada2.0" value="2">

            <div class="card-body">
                <table class="table" id="tperbaikand_table">
                    <thead>
                    <tr>
                        <th>Armada</th>
                        {{-- <th>Jenis Perbaikan</th> --}}
                        <th>Nilai</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tperbaikands as $index => $tperbaikand)
                        <tr>
                            <td>
                                <select name="tperbaikands[{{$index}}][armada]" wire:model="tperbaikands.{{$index}}.armada" class="form-control">
                                    <option value="">-- choose Armada --</option>
                                    @foreach ($allArmadas as $armada)
                                        <option value="{{ $armada->id }}">
                                            {{ $armada->merk }} - {{ $armada->nopol }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            {{-- <td>
                                <select name="tperbaikandetails[{{$index}}][jperbaikan]" wire:model="tperbaikandetails.{{$index}}.jperbaikan" class="form-control">
                                    <option value="">-- choose Jenis Perbaikan --</option>
                                    @foreach ($allJperbaikans as $jperbaikan)
                                        <option value="{{ $jperbaikan->id }}">
                                            {{ $jperbaikan->jenis }}
                                        </option>
                                    @endforeach
                                </select>
                            </td> --}}
                            <td>&nbsp;</td>
                            <td>
                                <a href="#" wire:click.prevent="removeTperbaikand({{$index}})">Delete</a>
                            </td>
                            {{-- <td>
                                <input type="number"
                                       name="orderProducts[{{$index}}][quantity]"
                                       class="form-control"
                                       wire:model="orderProducts.{{$index}}.quantity" />
                            </td>
                            <td>
                                <a href="#" wire:click.prevent="removeProduct({{$index}})">Delete</a>
                            </td> --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addTperbaikand">Add Detail</button>
                    </div>
                </div>
            </div>
        </div>
