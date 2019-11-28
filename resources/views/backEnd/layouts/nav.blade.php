<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i>Điều khiển</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Điều khiển</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Danh mục</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Thêm mới danh mục</a></li>
                <li><a href="{{route('category.index')}}">Danh sách danh mục</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Sản phẩm</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Thêm mới sản phẩm</a></li>
                <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Coupons</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Thêm mới Coupon</a></li>
                <li><a href="{{route('coupon.index')}}">Danh sách Coupons</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->