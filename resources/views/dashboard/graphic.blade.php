@extends('dashboard.layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">{{ $title }}</h4>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        @include('dashboard.layout.form-gra')
                        @php
                            $bln = $_GET['bulan'];
                            $thn = $_GET['tahun'];
                            $bln1 = $_GET['bulan1'];
                            $thn1 = $_GET['tahun1'];
                        @endphp

                    </div>
                    <a href="{{ url('/print/graphic?bulan=' .$bln.'&tahun='.$thn.'&bulan1='.$bln1.'&tahun1='.$thn1) }}" onclick="" target="_blank"
                        class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="printer"></i>
                        Print
                    </a>
                    <button id="download" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                        Download PDF
                    </button>
                    <button id="png" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                        Download PNG
                    </button>
                    <br>
                    <br>
                    {{-- <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Graphic Data Timbangan</h6>
                        <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        data-feather="printer" class="icon-sm me-2"></i> <span
                                        class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        data-feather="download" class="icon-sm me-2"></i> <span
                                        class="">Download</span></a>
                            </div>
                        </div>
                    </div> --}}
                    <p class="text-muted">Perbandingan Data Dengan Graphic </p>
                    {{-- <h4>{{ $chart }}</h4> --}}
                    <div id="reportPage">
                        <canvas id="myChart"></canvas>
                    </div>

                </div>
            </div>
        </div>

    </div> <!-- row -->
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script> --}}
@endpush


@push('custom-scripts')
    {{-- <script src="{{ asset('assets/js/chartcus.js') }}"></script> --}}
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
