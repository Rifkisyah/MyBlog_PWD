<h2 class="mt-4 mb-4"><i class="news"></i> Artikel</h2>

<div class="row">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Posting</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('../model/artikel.php');
                    $article = new Artikel();
                    $articles = $article->getAll();
                    
                    $num = 1;
                    foreach($articles as $row):
                        ?>
                        <tr>
                            <td><?=$num++ ?></td>
                            <td><?=$row['tanggal'] ?></td>
                            <td><?=$row['penulis'] ?></td>
                            <td><?=$row['judul'] ?></td>
                            <td><?=$row['deskripsi'] ?></td>
                            <td><?=$row['posting'] ?></td>
                            <td>
                                <a href="#"><i class="fa fa-eye text-success"></i></a> 
                                <a href="#"><i class="fa fa-edit text-warning"></i></a> 
                                <a href="#"><i class="fa fa-trash text-danger"></i></a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>