<div>
    <table border="0" width="100%">
        <tr>
            <td width="10%">
            </td>
            <td align="right" width="20%">
                <img src="assets/images/logo.jpg" width="auto" height="100">
            </td>
            <td align="center" width="50%">
                <h3>DATA MATA PELAJARAN</h3>
                <p>SMP TARUNA PROBOLINGGO
                    <br>
                    JL. RAYA LECES A3 LECES-PROBOLINGGO
                    <br>
                    Website : www.smptaruna.sch.id email : smptaruna@gmail.com
                </p>
            </td>
            <td width="20%"></td>
        </tr>
    </table>
</div>

<div>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Mata Pelajaran</th>
                <th>Nama Mata Pelajaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($cetak_mapel as $g) : ?>
            <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td><?php echo $g->kd_mapel ?></td>
                <td><?php echo $g->nm_mapel ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>