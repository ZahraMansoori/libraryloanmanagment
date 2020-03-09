<div class="row">
    <div class="col-xs-12 col-md-6">
        @include('admin.partials.errors')
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">نام کتاب</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name',$bookItem->name)}}">
            </div>
            <div class="form-group">
                <label for="author">نویسنده</label>
                <input type="text" class="form-control" id="author" name="author"
                       value="{{old('author',$bookItem->author)}}">
            </div>
            <div class="form-group">
                <label for="pub_year">سال انشار</label>
                <input type="text" class="form-control" id="pub_year" name="pub_year">
            </div>
            <div class="form-group">
                <label for="pub_name">ناشر</label>
                <input type="text" class="form-control" id="pub_name" name="pub_name">
            </div>
            <div class="form-group">
                <label for="translator_name">نام مترجم</label>
                <input type="text" class="form-control" id="translator_name" name="translator_name">
            </div>
            <div>
                <label for="category">دسته بندی</label>
                <select name="category" id="category">
                <option value="">علمی و تخیلی</option>
                <option value="">درسی و کمک درسی</option>
                <option value="">داستان و رمان</option>
                <option value="">پژوهشی</option>
                </select><
                </div>
            <div class="form-group">
                <label for="price">قیمت</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
                <input type="submit" class="btn btn-outline-success float-right" value="ذخیره اطلاعات">

        </form>
    </div>
</div>