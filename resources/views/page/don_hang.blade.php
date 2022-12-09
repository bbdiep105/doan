<div id="app">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4"> <h4 class="card-title">Danh sách đơn hàng</h4></div>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="row mt-2 ml-2">
                        <div class="col-md-4">
                            <div class="input-group mb-2 ">
                                <input type="text"  v-model="inputSearch" class="form-control" placeholder="search" aria-label="Nhập danh mục cần tìm" aria-describedby="button-addon2">
                                <button v-on:click="search()"class="btn btn-outline-secondary" type="button" id="button-addon2">search</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Tổng Tiền</th>
                                    <th>Tiền Giảm Giá</th>
                                    <th>Thực Trả</th>
                                    <th>Người Nhận</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ngày Tạo</th>
                                    <th>Trạng Thái</th>
                                    <th>Chi Tiết</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in list_vue">
                                    <th class="text-center align-middle">@{{ key + 1 }}</th>
                                    <td class="text-center align-middle">@{{ value.username }}</td>
                                    <td class="text-center align-middle">@{{ value.tong_tien  }}</td>
                                    <td class="align-middle">@{{value.tien_giam_gia}}</td>
                                    <td class="text-center align-middle">@{{ value.thuc_tra }}</td>
                                    <td class="text-center align-middle">@{{ value.nguoi_nhan }}</td>
                                    <td class="text-center align-middle">@{{ value.sdt }}</td>
                                    <td class="text-center align-middle">@{{ value.dia_chi }}</td>
                                    <td class="text-center align-middle">@{{ value.created_at }}</td>
                                    <td>
                                        <template v-if="value.status==1" >
                                            <button v-on:click="doiTrangThai(value.id)" class="btn btn-primary" >Đang giao</button>
                                        </template>
                                        <template v-else>
                                            <button v-on:click="doiTrangThai(value.id)" class="btn btn-danger" >Đã giao</button>
                                        </template>
                                    </td>
                                    <td class="text-center">
                                        <a v-bind:href="'/admin/quan-ly-don-hang/chi-tiet/'+value.id"><button class="btn btn-primary">detail </button></a>

                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" v-on:click="deleteDanhMuc(value.id)">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xóa Danh Mục Sản Phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" v-model="idDelete"  placeholder="Nhập vào id cần xóa" hidden>
                    Bạn có chắc chắn muốn xóa? Điều này không thể hoàn tác.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" v-on:click="acceptDelete()" data-dismiss="modal">Xóa Danh Mục</button>
                </div>
            </div>
        </div>
    </div>
</div>
