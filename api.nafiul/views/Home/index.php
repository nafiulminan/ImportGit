<table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($viewModel as $pengguna):?>
            <tr>
                <td colspan="2"><?php echo $pengguna->name;?></td>
                <td colspan="2"><?php echo $pengguna->email;?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>