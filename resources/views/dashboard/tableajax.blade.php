
    @foreach ($tgl as $tbs)
        @php
            $berat = $tbs->berat;
            $kg = $berat / 1000;
        @endphp
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $kg }} {{$satuan}}</td>
            <td>{{ date('Y-m-d', strtotime($tbs->created_at)) }}</td>

            <td>{{ date('H:i:s', strtotime($tbs->created_at)) }}</td>
            <td>{{ $tbs->kode }}</td>
           
        </tr>
    @endforeach

    

