<!-- Start Contact -->
<div class="container py-5">
    <div class="row py-5">
        <form class="col-md-9 m-auto" method="post" role="form">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname">Tên Khách Hàng</label>
                    <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Tên khách hàng">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputsubject">Chủ đề</label>
                <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Chủ đề">
            </div>
            <div class="mb-3">
                <label for="inputmessage">Nội Dung</label>
                <textarea class="form-control mt-1" id="message" name="message" placeholder="Nội Dung..."
                    rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3">Gửi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact -->