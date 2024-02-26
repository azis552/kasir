
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="4" class="text-center">Nota Penjualan</th>
        </tr>
        <tr>
            <th colspan="4" class="text-center">Toko Blabla</th>
        </tr>
        <tr>
            <th colspan="4" class="text-center">Jln jln</th>
        </tr>
        <tr>
            <th colspan="4"><hr></th>
        </tr>
        @foreach ($data_barang as $i)
        <tr>
            <td>{{ $i->barang->nama_barang }}</td>
            <td>{{ $i->jumlah_barang }}</td>
            <td>{{ $i->barang->harga }}</td>
            <td>{{ $i->total }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4"><hr></td>
        </tr>
        @foreach ($data_pembayaran as $i)
        <tr>
            <td colspan="2">Total Tagihan</td>
            <td >:</td>
            <td>{{ $i->total_harga }}</td>
        </tr>
        <tr>
            <td colspan="2">Diskon</td>
            <td >:</td>
            <td>{{ $i->diskon }}</td>
        </tr>
        <tr>
            <td colspan="4"><hr></td>
        </tr>
        
        <tr>
            <td colspan="2">Bayar</td>
            <td >:</td>
            <td>{{ $i->total_bayar }}</td>
        </tr>
        <tr>
            <td colspan="2">Kembalian</td>
            <td >:</td>
            <td>{{ $i->kembalian }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>