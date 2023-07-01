
<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

    <?= $this->include('components/navbar') ?>
    <div class="container-fluid columns is-vcentered is-centered block">
        <div class="column is-5 has-background-primary bg-login  ">
         
        </div>
        <div class="column has-background-white">
            <div class="container m-6">
                <div class="box login-width">
                    <?php echo form_open() ?>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                        <input class="input" type="email" placeholder="e.g. alex@example.com">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                        <input class="input" type="password" placeholder="********">
                        </div>
                    </div>

                        <button class="button is-primary">Sign in</button>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
