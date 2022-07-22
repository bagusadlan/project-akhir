<!-- <main> -->
        <!-- <div class="message-table"> -->
        <div class="recent-orders pesan-box">
            <div class="main-box">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>   
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                        <?php foreach($data['pesan'] as $pesan) : ?>
                            <tr>
                                <td><?= $i ?>.</td>
                                <td><?= $pesan['PESAN'] ?></td>
                                <td><?= $pesan['CREATED_AT'] ?></td>
                            </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- </main> -->
<!-- END OF MAIN -->