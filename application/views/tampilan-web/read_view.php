<div class="konten">
    <div class="posting">
        <h3><?php echo $detail['judul'] ?></h3>
        <div class="ringkasan"><?php echo $detail['isi'] ?></div>
    </div>
    <div class="anggota">
        <h3>Berita terbaru</h3>
        <ul>
            <?php foreach($berita as $list) { ?>
                <li><a href="<?php echo base_url() ?>home/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>