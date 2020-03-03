<div class="row">
    <div class="col-xs-12 col-md-6">
        @include('admin.partials.errors')
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">نام</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">کلمه عبور</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <input type="submit" class="btn btn-outline-success float-right" value="ذخیره اطلاعات">

        </form>
    </div>
</div>