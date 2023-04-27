@extends('dashboard.layout.master')




@push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush
@push('plugin-styles')
    {{-- <link href="{{ asset('assets/plugins/datatables-net-bs5/dataTables.bootstrap5.css') }}" rel="stylesheet" /> --}}
@endpush
@push('plugin-styles')
    <link href="{{ asset('assets/plugins/@mdi/css/materialdesignicons.min.css') }}" rel="stylesheet" />
@endpush


@section('content')
    <div>
        <h4 class="mb-3 mb-md-0">{{ $title }}</h4>
    </div>
    <br>
    <div class="row">
        <div id="data" class="col-12 col-xl-12 stretch-card">
            
        </div>
    </div> <!-- row -->

    <div class="row d-flex align-items-center flex-wrap text-nowrap">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Monitoring</h6>
                    <p class="text-muted mb-3">website akan otomatis reload</p>
                    <div class="form-group">
                        <?php
                        error_reporting(0);
                        $filter = $_GET['filter'];
                        ?>
                        <form action="" method="get">
                            {{-- <label for="tanggal" style="display: block;">Filter Tanggal</label> --}}
                            <input type="date" hidden name="filter" value="<?= !$filter ? $date : $filter ?>"
                                parsley-trigger="change" required class="form-control"
                                style="display: inline-block ; width:200px">
                            {{-- <button class="btn btn-primary" type="submit">Filter</button> --}}
                        </form>
                    </div>



                    <div class="table-responsive mt-1" id="ajax">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Berat</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Kode</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody id="table">

                            </tbody>
                        </table>



                    </div>
                   

                    
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function monitoring() {
        $.ajax({
            url: "{{ url('/tableajax')}}",
            type: "GET",
            cache: false,
            success: function(data) {
                // alert(data);
                $('#table').html(data);
            }
        });
    }
    setInterval(monitoring, 1000);


    function data() {
        $.ajax({
            url: "{{ url('/tabledata')}}",
            type: "GET",
            cache: false,
            success: function(data) {
                // alert(data);
                $('#data').html(data);
            }
        });
    }
    setInterval(data, 1000);
</script>








{{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
