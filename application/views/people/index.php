<div class="container mt-3">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h3>List of Peoples</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($peoples as $people) : ?>
                            <tr>
                                <th><?= ++$start ?></th>
                                <td><?= $people['name']; ?></td>
                                <td><?= $people['email'] ?></td>
                                <td>
                                <a href="" class="float-roght badge badge-info">Detail</a>
                                <a href="" class="float-roght badge badge-warning">Edit</a>
                                <a href="" class="float-roght badge badge-danger">Delete</a>
                                </td>
                            
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="mt-3">
                    <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>