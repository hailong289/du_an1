<div class="right__title">Bảng khách hàng</div>
<div class="right__table">
    <p class="right__tableTitle">Danh sách khách hàng</p>
    <div class="right__tableWrapper">
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th style="text-align: left;">Họ và tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Trạng thái</th>
                    <th>Hình</th>
                    <!-- <th>ID Sản Phẩm</th>
                    <th>Trạng Thái</th> -->
                    <th>Sửa</th>
                    <th>Xóa</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach($ds_kh as $ds) { $stt+=1;?>
                <tr>
                    <td><?=$stt?></td>
                    <td><?=$ds['ho_ten']?></td>
                    <td><?=$ds['ten_tk']?></td>
                    <td>0<?=$ds['sdt']?></td>
                    <td><?=$ds['email']?></td>
                    <td><?=($ds['vai_tro']==1) ? 'Quản trị':"khách hàng"?></td>
                    <td><?=($ds['kich_hoat']==1)? 'Đã kích hoạt':"Đã bị khóa"?></td>
                    <td> <?php if($ds['hinh'] == null){ ?>
                        <img src="../uploaded/user.jpg" alt="" style="width: 100px;height:100px;border-radius: 50%;object-fit: cover;">
                    <?php }else{ ?>
                        <img src="../uploaded/<?=$ds['hinh']?>" alt="" style="width: 100px;height:100px;border-radius: 50%;object-fit: cover;">
                    <?php } ?>
                    </td>
                    <td>
                        <a href="?ctrl=tai_khoan&act=edit&ma_kh=<?=$ds['ma_tk']?>" style="color: #455A64;"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                      <?php if ($ds['ma_tk']==$_SESSION['sid']) {
                          echo "";
                      }
                      else
                      {
                          ?>
                          <a class="sua" href="javascript:Delete('index.php?ctrl=tai_khoan&act=delete&ma_kh=<?=$ds['ma_tk']?>')" style="color: #455A64;"><i class="fas fa-trash-alt"></i></a>

                          <?php } ?>
                    </td>

                </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</div>