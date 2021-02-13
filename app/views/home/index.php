<div class="container">
    <div class="border p-5 mt-5 rounded shadow">
        <h1>Welcome <?= $data['nama']; ?></h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio quam ea, id ipsa enim ullam?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo in, aliquid mollitia architecto provident praesentium, distinctio sunt neque ipsam, a iusto adipisci nemo cumque? Expedita nihil quos aperiam molestiae cupiditate quas tempore eveniet aspernatur fuga consequatur iste incidunt neque sunt similique accusamus, error non. Dicta, voluptate neque! Voluptatum, adipisci ut?</p>
        <hr>
        <a class="btn btn-lg btn-primary" href="<?= BASEURL ?>about">About Us</a>
        <button type="button" class="btn btn-lg btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="triggerModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kenapa anda tidak tertarik ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Tulis jawaban disini!!!">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Gak Jadi</button>
                        <button type="button" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>