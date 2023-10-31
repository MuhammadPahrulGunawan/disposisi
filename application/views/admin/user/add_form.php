<main>
    <div class="container-fluid">
        <h1 class="mt-4">Form Tambah User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/user') ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('admin/user/save') ?>" method="post">
                    <div class="mb-3">
                        <label for="username">Username <span class="text-danger">*</span></label>
                        <input class="form-control <?php echo form_error('username') ? 'is-invalid' : ''; ?>" type="text" name="username" placeholder="Username" required>
                        <div class="invalid-feedback">
                            <?php echo form_error('username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="full_name">Full Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="full_name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="phone" placeholder="Phone">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="role">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="sekretaris">Sekretaris</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
