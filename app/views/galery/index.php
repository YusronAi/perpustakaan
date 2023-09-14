<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    <?php foreach ($data['tabel_buku'] as $row) : ?>
        <tr>
            <td><?= $i; ?>.</td>
            <td><?= $row['judul_buku']; ?></td>
            <td><?= $row['pengarang']; ?></td>
            <td><?= $row['nama_kategori']; ?></td>
        </tr> 
    <?php $i++ ?>
    <?php endforeach; ?>
    </tbody>
    </table>