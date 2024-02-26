
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <style>
        /* Gaya khusus untuk cetak */
        @media print {
            /* Atur ukuran kertas dan orientasi halaman */
            @page {
                size: 80mm 600mm; /* Atur lebar dan panjang kertas dalam milimeter */
                /* Anda juga bisa menentukan orientasi halaman, misalnya:
                   orientation: landscape; untuk mode landscape */
            }

            /* Pastikan konten tetap di dalam kertas */
            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>
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
        <tr>
            <th>Nama</th>
            <th>Qty</th>
            <th>harga</th>
            <th>Total</th>
        </tr>
        @foreach ($data_barang as $i)
        <tr>
            <td class="text-center">{{ $i->barang->nama_barang }}</td>
            <td class="text-center">{{ $i->jumlah_barang }}</td>
            <td class="text-center">{{ formatRupiah($i->barang->harga) }}</td>
            <td class="text-center">{{ formatRupiah($i->total) }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4"><hr></td>
        </tr>
        @foreach ($data_pembayaran as $i)
        <tr>
            <td colspan="2">Total Tagihan</td>
            <td >:</td>
            <td>{{ formatRupiah($i->total_harga) }}</td>
        </tr>
        <tr>
            <td colspan="2">Diskon</td>
            <td >:</td>
            <td>{{ formatRupiah($i->diskon) }}</td>
        </tr>
        <tr>
            <td colspan="4"><hr></td>
        </tr>
        
        <tr>
            <td colspan="2">Bayar</td>
            <td >:</td>
            <td>{{ formatRupiah($i->total_bayar) }}</td>
        </tr>
        <tr>
            <td colspan="2">Kembalian</td>
            <td >:</td>
            <td>{{ formatRupiah($i->kembalian) }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
<script>
    window.onload = function() {
        window.print(); // Mencetak saat halaman dimuat
    };
</script>