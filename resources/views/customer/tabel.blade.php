<table>
    <!-- <thead>
        <th>Tanggal</th>
        <th>Nama Customer</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>kate</th>
    </thead> -->
    <tbody>
        <tr>
            <td>Tanggal</td>
            <td>Nama Customer</td>
            <td>No HP</td>
            <td>Alamat</td>
            <td>Kategori</td>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ date('d/m/y', strtotime($customer->created_at)) }}</td>
            <td>{{ $customer->nama }}</td>
            <td>{{ $customer->telp }}</td>
            <td>{{ $customer->alamat }}</td>
            <td>{{ $customer->type }}</td>
        </tr>
        @endforeach
    </tbody>
</table>