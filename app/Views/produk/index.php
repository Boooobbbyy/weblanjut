 <!DOCTYPE html>
 <html>
 <title>Tabel Produk</title> </head>
 <body>
 <h1>Read Data</h1>
<table border="2">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Deskripsi Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        <?php foreach ($data as $key => $keluar) { ?>
                            <tr>
                                <td class="table-success"><?php echo $keluar['nama_produk'];  ?></td>
                                <td><?php echo $keluar['deskripsi'];  ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    </tr>
                    </tbody>
                </table>
 </body>
 </html>

