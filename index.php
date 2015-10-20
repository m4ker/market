<?php 

$categories = json_decode('[
    {
        "id":1,
        "name":"特价专区",
        "products":[1,2,5,6,7,8,9,12,13,14,15,16,17,18]
    },
    {
        "id":2,
        "name":"水果生鲜",
        "products":[1,2,3,4,5,6,7,11,12,13,14,15,16,17,18]
    },
    {
        "id":3,
        "name":"饮品",
        "products":[3,4,5,6,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":4,
        "name":"饮用水",
        "products":[1,2,3,4,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":5,
        "name":"果汁茶饮",
        "products":[1,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":6,
        "name":"碳酸饮料",
        "products":[1,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":7,
        "name":"酒类",
        "products":[1,2,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":8,
        "name":"牛奶乳品",
        "products":[1,2,3,4,5,6,7,12,13,14,15,16,17,18]
    },
    {
        "id":9,
        "name":"烟草",
        "products":[1,2,3,4,5,6,7,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":10,
        "name":"膨化食品",
        "products":[1,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":11,
        "name":"咖啡冲调",
        "products":[1,2,3,4,5,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":12,
        "name":"酸奶",
        "products":[3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":13,
        "name":"零食",
        "products":[1,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":14,
        "name":"熟食卤味",
        "products":[1,2,3,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":15,
        "name":"生活日用",
        "products":[1,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
    },
    {
        "id":16,
        "name":"粮油调味",
        "products":[1,2,7,8,9,10,11,12,13,14,15,16,17,18]
    }
]');

$products = json_decode('[
    {
        "id":1,
        "name":"商品名称1",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":11.00,
        "discount":7.50
    },
    {
        "id":2,
        "name":"商品名称2",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":12.00,
        "discount":8.00
    },
    {
        "id":3,
        "name":"商品名称3",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":7.00
    },
    {
        "id":4,
        "name":"商品名称4",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":6.00
    },
    {
        "id":5,
        "name":"商品名称5",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.50,
        "discount":6.00
    },
    {
        "id":6,
        "name":"商品名称6",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":8.00
    },
    {
        "id":7,
        "name":"商品名称7",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.80,
        "discount":9.00
    },
    {
        "id":8,
        "name":"商品名称8",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":14.00,
        "discount":7.00
    },
    {
        "id":9,
        "name":"商品名称9",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":18.00,
        "discount":9.00
    },
    {
        "id":10,
        "name":"商品名称10",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":12.00,
        "discount":6.00
    },
    {
        "id":11,
        "name":"商品名称11",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":9.00
    },
    {
        "id":12,
        "name":"商品名称12",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":8.00
    },
    {
        "id":13,
        "name":"商品名称13",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":11.00,
        "discount":8.00
    },
    {
        "id":14,
        "name":"商品名称14",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":12.00,
        "discount":8.50
    },
    {
        "id":15,
        "name":"商品名称15",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":8.50
    },
    {
        "id":16,
        "name":"商品名称16",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":9.00
    },
    {
        "id":17,
        "name":"商品名称17",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":10.00,
        "discount":8.50
    },
    {
        "id":18,
        "name":"商品名称18",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":11.00,
        "discount":8.00
    },
    {
        "id":19,
        "name":"商品名称19",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":11.00,
        "discount":6.00
    },
    {
        "id":20,
        "name":"商品名称20",
        "desc":"商品描述",
        "photo":"1_200x200.jpg",
        "stock":5,
        "price":12.00,
        "discount":8.00
    }
]');

//var_dump($categories);
//var_dump($products);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>闪送超市</title>
<style>
*{
margin:0;
padding:0;
}
html,body{
height:100%;
}
header{
text-align:center;
background:orange;
position:fixed;
color:#ffffff;
top:0;
width:100%;
height:2em;
line-height:2em;
z-index:100;
}
#container{
overflow:hidden;
height:100%;
}
#sidebar{
width:30%;
float:left;
margin-top:2em;
height:100%;
overflow:scroll;
}
#categories{
width:30%;
position: absolute;
}
.category{
padding:.8em .8em;
background:#eeeeee;
color:#666666;
border-bottom:1px solid #ffffff;
text-align:center;
}
.category.active{
background:#ffffff;
color:orange;
border-left:5px solid orange;
}
#main{
width:70%;
float:right;
margin-top:2em;
height:100%;
overflow:scroll;
}
#products{
width: 70%;
position: absolute;
}
.product{
padding: .5em .8em;
background:#ffffff;
border-bottom:1px solid #eeeeee;
position:relative;
}
.info{
width:100%;
overflow:hidden;
}
.photo{
width:80px;
height:80px;
background:pink;
float:left;
}
.text{
padding-left:.5em;
float:left;
}
.name{
font-size:1em;
margin-bottom:1.8em;
}
.info{

}
.discount{
font-size:1.5em;
color:orange;
}
.price{
font-size:0.8em;
color:#bbbbbb;
}
.countbar{
position:absolute;
bottom:.5em;
right:.8em;
overflow:hidden;
}
.btn_minus{
float:left;
padding:.2em .7em .3em;
font-size:1em;
background:#ffffff;
border:1px solid #999999;
display:none;
}
.quantity{
float:left;
padding:.6em .8em 0;
display:none;
}
.btn_plus{
float:left;
padding:.2em .5em .3em;
font-size:1em;
background:#ffffff;
border:1px solid #999999;
display:block;
}
.btn_plus[disabled=disabled]{
color:#bbbbbb;
border:1px solid #bbbbbb;
}
footer{
border-top:1px solid #999999;
text-align:center;
background:#ffffff;
position:fixed;
bottom:0;
height:4em;
line-height:4em;
width:100%;
}
footer ul{
margin-left:1em;
}
footer ul li{
width:18%;
float:left;
list-style:none;
display:block;
/*border-right:1px solid #999999;*/
}
footer ul li a:link, footer ul li a:visited{
color:#666666;
/*background:green;*/
display:block;
}
footer ul li.active a:link, footer ul li.active a:visited{
color:orange;
}
footer .shoppingcart{
position:absolute;
background:#ffffff;
color:orange;
border:1px solid #999999;
bottom:.3em;
right:.3em;
padding:.2em;
border-radius:.7em;
}
footer .cartcount{
display:none;
position:absolute;
background:orange;
color:#ffffff;
font-size:.3em;
bottom:3.5em;
right:0;
padding:.5em;
border-radius:8em;
font-weight:bold;
}
/* 商品详情 */
#product_detail{
display:none;
width:100%;
height:100%;
position:absolute;
top:0;
left:0;
overflow:hidden;
z-index:200;
}
#product_main{
float:left;
background:#ffffff;
height:100%;
width:80%;
}
#product_main_inner{
    padding-bottom:4em;
}
.detail_img{
    margin:1em;
    text-align:center;
}
.detail_title{
    margin:1em;
}
.detail_desc{
    margin:1em;
}
.detail_bar{
background:yellow;
border-top:1px solid #999999;
text-align:center;
position:fixed;
bottom:0;
height:4em;
line-height:4em;
width:80%;
}
.detail_price{
}
.detail_countbar{
}
.btn_detail_minus{
}
.detail_quantity{
}
.btn_detail_plus{
}
#product_close{
float:right;
background:#333333;
height:100%;
width:20%;
opacity:0.8;
}
/* 购物车详情 */
#cart_detail{
}
#cart_close{
}
#cart_main{
}
#cart_main_inner{
}
</style>
</style>
<link href="//libs.baidu.com/fontawesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header>闪送超市</header>
    <div id="container">
        <div id="sidebar">
            <div id="categories">
                <?php foreach($categories as $k=>$c) { ?>
                <div class="category<?php echo $k==0 ? " active":'';?>" cate="<?php echo $c->id;?>">
                    <?php echo $c->name;?>
                </div>
                <?php } ?>
                <div style="height:6em;"></div>
            </div>
        </div>
        <div id="main">
            <div id="products">
                <?php foreach($products as $p) { ?>
                <div class="product" prod='<?php echo $p->id;?>'>
                    <div class="info">
                        <div class="photo">
                            <img src="<?php echo $p->photo;?>" width="80" height="80" />
                        </div>
                        <div class="text">
                            <div class="name"><?php echo $p->name;?></div>
                            <div class="info">
                                <span class="discount">￥<?php echo $p->discount;?></span>
                                <del class="price">￥<?php echo $p->price;?></del>
                            </div>
                        </div>
                    </div>
                    <div class="countbar">
                        <button class="btn_minus" style="">-</button>
                        <span class="quantity">0</span>
                        <button class="btn_plus" style="">+</button>
                    </div>
                </div>
                <?php } ?>
                <div style="height:8em;"></div>
            </div>
        </div>
    </div>
    <footer>
        <ul>
            <li><a href="/waimai">外卖</a></li>
            <li class="active"><a href="/chaoshi">超市</a></li>
            <li><a href="/xiyi">洗衣</a></li>
            <li><a href="/jiazheng">家政</a></li>
        </ul>
        <div class="shoppingcart fa fa-shopping-cart fa-3x">
            <div class="cartcount"></div>
        </div>
    </footer>
    <div id="product_detail">
        <div id="product_main">
        <div id="product_main_inner">
            <div class="detail_img"><img src="1_200x200.jpg" /></div>
            <div class="detail_title">王致和大块红方豆腐乳340g</div>
            <div class="detail_desc">
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
                <p>品牌：王致和大块腐乳</p>
            </div>
        </div>
            <div class="detail_bar">
                <div class="detail_price">￥4.90</div>
                <div class="detail_countbar">
                    <button class="btn_detail_minus" style="">-</button>
                    <span class="detail_quantity">0</span>
                    <button class="btn_detail_plus" style="">+</button>
                </div>
            </div>
        </div>
        <div id="product_close"></div>
    </div>
    <div id="cart_detail">
        <div id="cart_close"></div>
        <div id="cart_main">
            <div id="cart_main_inner">
                <?php for($i=0;$i<10;$i++){ ?>
                <div class="cart_product">
                    <div class="cart_product_title">慕尚狗屎咖啡 280ml</div>
                    <div class="cart_product_price">￥4.90</div>
                    <div class="cart_product_countbar">
                        <button class="btn_cart_product_minus" style="">-</button>
                        <span class="cart_product_quantity">1</span>
                        <button class="btn_cart_product_plus" style="">+</button>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="cart_bar">
                合计 ￥44.00
                共4件
                <button>差10元起送/选好了</button>
            </div>
        </div>
    </div>
</body>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="http://lab.cubiq.org/iscroll5/build/iscroll.js"></script>
<script type="text/javascript">

var categories = <?php echo json_encode($categories)?>;
var products = <?php echo json_encode($products)?>; 
var cart = [];
var cate_scroll,prod_scroll,prod_main_scroll;

function add_product(pid) {
    if(typeof cart[pid] !== 'undefined'){
        cart[pid]++;
    } else {
        cart[pid] = 1;
    }
    console.log(cart);
    update_cartcount();
}

function minus_product(pid) {
    cart[pid]--;
    console.log(cart);
    update_cartcount();
}

function update_cartcount() {
    cnt = 0;
    for ( i in cart ) {
        cnt += cart[i];
    }
    $('.cartcount').html(cnt);
    if(cnt > 0) {
        $('.cartcount').show();
    } else {
        $('.cartcount').hide();
    }
    //console.log(cnt);
}

$(
function () {
        cate_scroll = new IScroll('#sidebar', { click:true, scrollX: false, freeScroll: true });
        prod_scroll = new IScroll('#main', { click:true, scrollX: false, freeScroll: true });
        prod_main_scroll = new IScroll('#product_main', { click:true, scrollX: false, freeScroll: true });
        $('.category').click(function() {
            //alert('hello');
            $('.category').removeClass('active');
            $(this).addClass('active');

            cid = parseInt($(this).attr('cate'));
            category = null;
            for(i in categories) {
                if (categories[i].id == cid) {
                    category = categories[i];
                }
            }

            html = '';
            for(i in category.products) {
                for(j in products) {
                    if (products[j].id == category.products[i]) {
                        //console.log(products[j].id);
                        html += '<div class="product" prod="'+products[j].id+'">';
                        html += '<div class="info">';
                        html += '<div class="photo">';
                        html += '<img src="'+products[j].photo+'" width="80" height="80" />';
                        html += '</div>';
                        html += '<div class="text">';
                        html += '<div class="name">'+products[j].name+'</div>';
                        html += '<div class="info">';
                        html += '<span class="discount">￥'+products[j].discount+'</span>';
                        html += '<del class="price">￥'+products[j].price+'</del>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '<div class="countbar">';
                        if (typeof cart[products[j].id] !== 'undefined' && cart[products[j].id] > 0) {
                            html += '<button class="btn_minus" style="display:block;">-</button>';
                            html += '<span class="quantity" style="display:block;">'+cart[products[j].id]+'</span>';
                            html += '<button class="btn_plus" style="">+</button>';
                        } else {
                            html += '<button class="btn_minus" style="">-</button>';
                            html += '<span class="quantity">0</span>';
                            html += '<button class="btn_plus" style="">+</button>';
                        }
                        html += '</div>';
                        html += '</div>';
                        break;
                    }
                }
            }
            $('.product').remove();
            $('#products').prepend(html);
        });
        $(document).on("click", ".product .info", function(){ 
            $('#product_detail').show();
        });
        $(document).on("click", "#product_close", function(){ 
            $('#product_detail').hide();
        });
        $(document).on("click", ".btn_plus", function(){ 
            product = $(this).closest('.product');
            bar = $(this).closest('.countbar');
            quantity = bar.find('.quantity');
            minus = bar.find('.btn_minus');
            plus = bar.find('.btn_plus');
            quantity.html(parseInt(quantity.html()) + 1);
            minus.show();
            quantity.show();


            pid = product.attr('prod');
            add_product(pid);

            for ( i in products ) {
                if (products[i].id == pid) {
                    if (cart[pid] == products[i].stock) {
                        plus.attr('disabled', true);
                    }
                }
            }
        });
        $(document).on("click", ".btn_minus", function(){ 
            product = $(this).closest('.product');
            bar = $(this).closest('.countbar');
            quantity = bar.find('.quantity');
            minus = bar.find('.btn_minus');
            plus = bar.find('.btn_plus');
            q = parseInt(quantity.html());
            q = q-1;
            quantity.html(q);
            if (q <= 0) {
                minus.hide();
                quantity.hide();
            }

            pid = product.attr('prod');
            minus_product(pid);
            for ( i in products ) {
                if (products[i].id == pid) {
                    if (cart[pid] < products[i].stock) {
                        plus.attr('disabled', false);
                    }
                }
            }
        });
}
);

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

</script>
</html>
