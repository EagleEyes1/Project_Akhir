<!-- <ul class="collection">
    <?php foreach ($home_post as $data) :?>
        <li class="collection-item avatar">
            <img src="<?=site_url('upload/post/'.$data['filename']) ?>" class="circle">
            <img src="<?=site_url('asset/images/naruto.jpg') ?>" class="circle">
            <p class="title"><?= $data['name'] ;?></p>
            <small><?= $data['description'] ;?></small>
            <a href="<?=site_url('welcome/index/'.$data['id'])  ?>" class="secondary-content">
                <i class="material-icons">visibility</i>
            </a>
        </li>
    <?php endforeach ?>
</ul> -->

<div class="container-fluid d-flex justify-content-center content ">
    <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="tambah">
        <img style="
        border-radius:7px; 
        padding:5px;
        max-width: 30px;
        max-height: 30px;" src="asset/images/plus.png" class="card-img-plus" alt="tambah">Add Pokemon
    </div>
    <div class="row d-flex justify-content-center text-center mt-3">
        <div class="col-4">
            <div class="card">
                <div>
                    <div data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                        <img src="asset/images/edit3.png" class="card-img-edit" alt="poke">
                    </div>
                    <img style="background-color:#dfe4e2; border-radius:7px" src="asset/images/001.png"
                        class="card-img-top" alt="poke">
                    <div data-bs-toggle="modal" data-bs-target="#exampleModalDelete" class="mid-image">
                        <img src="asset/images/delete.png" class="card-img-delete" alt="poke">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Bulbasaur</h5>
                    <div>
                        <div class="d-inline p-1 me-1" style="background-color:#9bcc50;border-radius:5px">
                            Grass
                        </div>
                        <div class="d-inline p-1" style="background-color:#b97fc9;border-radius:5px">
                            Poison
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div>
                    <div data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                        <img src="asset/images/edit3.png" class="card-img-edit" alt="poke">
                    </div>
                    <img style="background-color:#dfe4e2; border-radius:7px" src="asset/images/005.png"
                        class="card-img-top" alt="poke">
                    <div data-bs-toggle="modal" data-bs-target="#exampleModalDelete" class="mid-image">
                        <img src="asset/images/delete.png" class="card-img-delete" alt="poke">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Charmeleon</h5>
                    <div>
                        <div class="d-inline p-1 me-1" style="background-color:#fd7d24;border-radius:5px">
                            Fire
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div>
                    <div data-bs-toggle="modal" data-bs-target="#exampleModalEdit">
                        <img src="asset/images/edit3.png" class="card-img-edit" alt="poke">
                    </div>
                    <img style="background-color:#dfe4e2; border-radius:7px" src="asset/images/006.png"
                        class="card-img-top" alt="poke">
                    <div data-bs-toggle="modal" data-bs-target="#exampleModalDelete" class="mid-image">
                        <img src="asset/images/delete.png" class="card-img-delete" alt="poke">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Charizard</h5>
                    <div>
                        <div class="d-inline p-1 me-1" style="background-color:#fd7d24;border-radius:5px">
                            Fire
                        </div>
                        <div class="d-inline p-1"
                            style="background: linear-gradient(to bottom, #3dc7ef 50%, #bdb9b8 50%);border-radius:5px">
                            Flying
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Your Collection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('welcome/create'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                            aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formSelect" class="form-label">Type 1</label>
                        <select class="form-select" name="type1" aria-label="Default select example">
                            <option disabled selected>Select Pokemon Element</option>
                            <option style="background-color:#fd7d24" value="Fire">Fire</option>
                            <option style="background-color:#9bcc50" value="Grass">Grass</option>
                            <option style="background: linear-gradient(to bottom, #3dc7ef 50%, #bdb9b8 50%)"
                                value="Flying">
                                Flying</option>
                            <option style="background-color:#707070" value="Dark">Dark</option>
                            <option style="background-color:#b97fc8" value="Poison">Poison</option>
                            <option style="background-color:#4592c4" value="Water">Water</option>
                            <option style="background-color:#a4acaf" value="Normal">Normal</option>
                            <option style="background-color:#edd435" value="Electric">Electric</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formSelect" class="form-label">Type 2</label>
                        <select class="form-select" name="type2" aria-label="Default select example">
                            <option disabled selected>Select Pokemon Element</option>
                            <option style="background-color:#fd7d24" value="Fire">Fire</option>
                            <option style="background-color:#9bcc50" value="Grass">Grass</option>
                            <option style="background: linear-gradient(to bottom, #3dc7ef 50%, #bdb9b8 50%)"
                                value="Flying">
                                Flying</option>
                            <option style="background-color:#707070" value="Dark">Dark</option>
                            <option style="background-color:#b97fc8" value="Poison">Poison</option>
                            <option style="background-color:#4592c4" value="Water">Water</option>
                            <option style="background-color:#a4acaf" value="Normal">Normal</option>
                            <option style="background-color:#edd435" value="Electric">Electric</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Add Pokemon</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Your Collection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formSelect" class="form-label">Element</label>
                        <select class="form-select" aria-label="Default select example">
                            <option disabled selected>Select Pokemon Element</option>
                            <option style="background-color:#fd7d24" value="1">Fire</option>
                            <option style="background-color:#9bcc50" value="2">Grass</option>
                            <option style="background: linear-gradient(to bottom, #3dc7ef 50%, #bdb9b8 50%)" value="3">
                                Flying</option>
                            <option style="background-color:#707070" value="4">Dark</option>
                            <option style="background-color:#b97fc8" value="5">Poison</option>
                            <option style="background-color:#4592c4" value="6">Water</option>
                            <option style="background-color:#a4acaf" value="7">Normal</option>
                            <option style="background-color:#edd435" value="8">Electric</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Edit Pokemon</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button id="toastbtn" type="button" class="btn btn-primary" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>


<!-- Toast -->
<div class="toast position-fixed top-0 end-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="asset/images/checklist.png" style="
        max-width: 30px;
        max-height: 30px" class="rounded me-2" alt="checklist">
        <strong class="me-auto">Yeay</strong>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        Pokemon Already Deleted!!!
    </div>
</div>

<script>
document.getElementById("toastbtn").onclick = function() {
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function(toastEl) {
        return new bootstrap.Toast(toastEl)
    })
    toastList.forEach(toast => toast.show())
}
</script>