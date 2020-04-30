<div class="container-fluid">
    <h1 class="h3 mb-4c "><?= $title; ?></h1>
    <div class="jumbotron">
        <form action="" method="post">
            <input type="hidden" class="form-control" name="id" value="<?= $profil['id']; ?>">
            <div class="form-group row">
                <label for="visi" class="col-sm-2 col-form-label">profil</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="profil" name="profil"><?= $profil['profil']; ?></textarea>
                </div>

            </div>
            <div class="text-center">
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
                <a class="btn btn-danger" href="<?= base_url(); ?>profil/profill">Batal</a>

            </div>
        </form>
    </div>
</div>