

<div class="row flex-grow-1">
    @php
        $data = [$berat, $ringan, $avg, $jml];
        $status = ['BERAT', 'RINGAN', 'RATA-RATA', 'JUMLAH'];
        $text = ['Beban Paling Berat', 'Beban Paling Ringan', 'Beban Rata-Rata', 'Jumlah Beban'];
        // $satuan = 'Kg';
    @endphp
    @foreach ($data as $key => $datas)
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">{{ $status[$key] }} </h6>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-12 col-xl-5">
                            <h3 class="mb-2">{{ $datas }} {{ $satuan }}</h3>
                            <div class="d-flex align-items-baseline">
                                <p class="text-success">
                                    <span>{{$text[$key]}}</span>
                                    {{-- <i data-feather="{{ $icon[$key] }}" class="icon-sm mb-1"></i> --}}
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-md-12 col-xl-7">
                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>