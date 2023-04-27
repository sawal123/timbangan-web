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
    {{-- <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                @php
                    $data = [$berat, $ringan, $avg, $jml];
                    $status = ['BERAT', 'RINGAN', 'RATA-RATA', 'JUMLAH'];
                    $icon = ['arrow-up', 'arrow-down', 'arrow-clock', 'arrow-max'];
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
                                        <h3 class="mb-2">{{ $datas }}</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+2.8%</span>
                                                <i data-feather="{{ $icon[$key] }}" class="icon-sm mb-1"></i>
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
        </div>
    </div> <!-- row --> --}}

    <div class="row d-flex align-items-center flex-wrap text-nowrap">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Rekap Data</h6>
                    <p class="text-muted mb-3">Data Berdasarkan filter Tanggal</p>
                    <div class="form-group">
                        <?php
                        error_reporting(0);
                        $filter = $_GET['filter'];
                        ?>
                        <form action="" method="get">
                            <label for="tanggal" style="display: block;">Filter Tanggal</label>
                            <input type="date" name="filter" value="<?= !$filter ? $date : $filter ?>"
                                parsley-trigger="change" required class="form-control"
                                style="display: inline-block ; width:200px">
                            <button class="btn btn-primary" type="submit">Filter</button>
                        </form>
                    </div>


                    <div class="table-responsive mt-5">
                        <table id="rekap" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Berat</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Kode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                @foreach ($tb as $tbs)
                                    @php
                                        $berat = $tbs->berat;
                                        $kg = $berat / 1000;
                                    @endphp
                                    <tr>
                                        <input type="hidden" class="delete_id" id="id" value="{{ $tbs->id }}">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $kg }} Kg</td>
                                        <td>{{ date('Y-m-d', strtotime($tbs->created_at)) }}</td>
                                        <td>{{ date('H:i:s', strtotime($tbs->created_at)) }}</td>
                                        <td>{{ $tbs->kode }}</td>
                                        <td>
                                            {{-- data-bs-toggle="modal" --}}
                                            <button type="button" class="btn btn-primary open-modal" id="modaledit"
                                                data-bs-toggle="modal" data-bs-target="#edit-modal{{ $tbs->id }}"
                                                data-id="{{ $tbs->id }}" data-berat="{{ $tbs->berat }}">
                                                <i class="mdi mdi-pencil"></i>
                                            </button>
                                            <a href="{{ url('/data/hapus/' . $tbs->id ) }}"
                                                class="btn btn-inverse-danger button"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="edit-modal{{ $tbs->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="btn-close"></button>
                                                </div>

                                                <form id="edit-form" name="edit-form" method="POST"
                                                    action="{{ url('/data/update/'. $tbs->id)  }}" class="form-horizontal"
                                                    novalidate="">

                                                    @csrf
                                                    <div class="modal-body">
                                                        {{-- @include('dashboard.layout.modal-edit') --}}
                                                        <input type="hidden" class="delete_id" id="id"
                                                            name="id">
                                                        {{-- <input type="text" class="sr" id="sr" name="sr" value="<script>id</script>"> --}}
                                                        <div class="form-group">
                                                            <label for="inputName"
                                                                class="col-sm-3 control-label">berat</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control has-error berat"
                                                                    id="berat" name="berat"
                                                                    value="{{ $tbs->berat }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal" id="btn-save" id="btn-save"
                                                            value="add">Close</button>
                                                        <button type="submit" name="update" id="update"
                                                            class="btn btn-primary">Update</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
