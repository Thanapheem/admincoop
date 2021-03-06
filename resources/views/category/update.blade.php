@extends('master')
@section('title', 'แก้ไขหมวดหมู่')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-header border-0 pt-3">
                    <h4> <i class="nav-icon fas fa-edit"></i> แก้ไขหมวดหมู่ </h4>
                    <a href="{{ url('/category/list') }}" class="btn btn-info"><i class="fas fa-list-ul"></i> กลับหน้ารายการ</a>
                </div>
                <!-- form start -->
                <div class="container">
                    <form action="{{ route('updateCate', $categorys->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="text">ชื่อหมวดหมู่</label>
                                <input type="text" class="form-control" name="name" placeholder="ชื่อหมวดหมู่" required
                                    value="{{ $categorys->name }}">
                            </div>
                            <div class="form-group">
                                <label for="text">รายละเอียด</label>
                                <input type="text" class="form-control" name="desc" placeholder="รายละเอียด" required
                                    value="{{ $categorys->desc }}">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
