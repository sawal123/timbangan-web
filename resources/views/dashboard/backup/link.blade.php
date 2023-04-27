
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script src="https://code.jquery.com/jquery.js"></script>
                    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                    <script>
                        $(function() {
                            $('#dataTableExample').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: '{!! route('berat.beratTimbangan') !!}', // memanggil route yang menampilkan data json
                                columns: [{ // mengambil & menampilkan kolom sesuai tabel database
                                        data: 'id',
                                        name: 'id'
                                    },
                                    {
                                        data: 'berat',
                                        name: 'berat'
                                    },
                                    {
                                        data: 'waktu',
                                        name: 'waktu'
                                    },
                                    {
                                        data: 'kode',
                                        name: 'kode'
                                    },
                                    {
                                        data: 'created_at',
                                        name: 'created_at'
                                    },
                                    {
                                        data: 'created_at',
                                        name: 'created_at'
                                    },
                                ]
                            });
                        });
                    </script>