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
            <td>no order</td>
            <td>Tanggal</td>
            <td>Nama Customer</td>
            <td>No HP</td>
            <td>Alamat</td>
            <td>Kategori</td>
            <td>Nama Order</td>
            <td>Bahan</td>
            <td>Ukuran</td>
            <td>Pembayaran</td>
            <td>Pengiriman</td>
            <td>Harga</td>
            <td>Total Harga</td>
        </tr>
        @php
            $previousOrderId = null;
            $counter = 1;
        @endphp

        @foreach ($items as $item)
            @if ($previousOrderId == null)
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ date('d/m/y', strtotime($item->order->created_at)) }}</td>
                    <td>{{ $item->customer->nama }}</td>
                    <td>{{ $item->customer->telp }}</td>
                    <td>{{ $item->order->alamat }}</td>
                    <td>{{ $item->customer->type }}</td>
                    <td>{{ $item->order->nama_pesanan }}</td>
                    <td>{{ $item->bahan_sprei }}</td>
                    <td>{{ $item->ukuran_sprei }}</td>
                    <td>{{ $item->order->metode_pembayaran }}</td>
                    <td>{{ $item->order->jenis_pengiriman }}</td>
                    <td>{{ $item->harga_sprei }}</td>
                    <td>{{ $item->order->items->sum('harga_sprei') }}</td>
                </tr>
            @elseif ($item->order->id != $previousOrderId)
                @php
                    $counter++;
                @endphp

                <tr>
                    <td>-</td>
                </tr>
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ date('d/m/y', strtotime($item->order->created_at)) }}</td>
                    <td>{{ $item->customer->nama }}</td>
                    <td>{{ $item->customer->telp }}</td>
                    <td>{{ $item->order->alamat }}</td>
                    <td>{{ $item->customer->type }}</td>
                    <td>{{ $item->order->nama_pesanan }}</td>
                    <td>{{ $item->bahan_sprei }}</td>
                    <td>{{ $item->ukuran_sprei }}</td>
                    <td>{{ $item->order->metode_pembayaran }}</td>
                    <td>{{ $item->order->jenis_pengiriman }}</td>
                    <td>{{ $item->harga_sprei }}</td>
                    <td>{{ $item->order->items->sum('harga_sprei') }}</td>
                </tr>
            @else
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $item->bahan_sprei }}</td>
                    <td>{{ $item->ukuran_sprei }}</td>
                    <td>{{ $item->order->metode_pembayaran }}</td>
                    <td>{{ $item->order->jenis_pengiriman }}</td>
                    <td>{{ $item->harga_sprei }}</td>
                    <td></td>
                </tr>
            @endif
            @php
                $previousOrderId = $item->order->id;
            @endphp
        @endforeach


    </tbody>
</table>