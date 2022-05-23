<a href="/fakultas/create">tambahan fakultas</a>
<table border="1">
    <tr>
        <th>id</th>
        <th>nama_fakultas</th>
        <th>nama</th>
        <th>NIM</th>
        <th>semester</th>
        <th>jenis_kelamin</th>
    </tr>
    @foreach($fakultas as $w)
        <tr>
        <td>{{$w->id}}</td>
            <td>{{$w->nama_fakultas}}</td>
            <td>{{$w->nama}}</td>
            <td>{{$w->NIM}}</td>
            <td>{{$w->semester}}</td>
            <td>{{$w->jenis_kelamin}}</td>
            </tar>
    @endforeach
</table>