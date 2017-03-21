<pre name="code" class="html"><?php  
require_once 'include.php'; 
include 'config.php';  
$sql = "select * from life_glist";
$rows=fetchOne($sql,$result_type=MYSQL_ASSOC);
while($rows){  
    $row[] = $rows;  
}  
//print_r($row);  
?>  
<!DOCTYPE html>  
<html lang="zh-hans">  
<head>  
    <meta charset="UTF-8">  
    <title></title>  
</head>  
<body>  
<table width="" border="1" cellspacing="0" cellpadding="0" align="center">  
    <tr>  
        <td>商品名称</td>  
        <td>商品库存</td>  
        <td>商品单价</td>  
        <td>购买数量</td>  
        <td>小计</td>  
        <td>操作</td>  
    </tr>  
    <!--遍历数据-->  
    <?php foreach($row as $key=>$val){?>  
  
    <tr>  
        <td><?php echo $val['name'] ?></td>  
        <td><?php echo $val['total_quantity'] ?></td>  
        <!--商品单价-->  
        <td><input type="text" name="price" value="<?php echo $val['price'] ?>"></td>  
        <td>  
            <button onclick="minusCart(this, '<?php echo $val['id'] ?>')">-</button>  
            <!--购买数量-->  
            <input type="text" name="num" value="<?php echo $val['num'] ?>" max="<?php echo $val['total_quantity'] ?>" />  
            <button onclick="plusCart(this, '<?php echo $val['id'] ?>')">+</button>  
        </td>  
        <!--小计价格  -->  
        <td><input type="text" name="subtotal_price" value="<?php echo $val['price']*$val['num'];?>" onclick="price()"></td>  
        <td><button>编辑</button><button>删除</button></td>  
    </tr>  
  
    <?php }?>  
  
    <tr>  
        <!--总价-->  
        <td>总价</td>  
        <td colspan="4">0元</td>  
    </tr>  
</table>  
<!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.4.1.min.js"></script>-->  
<script src="jquery-2.1.1.min.js"></script>  
<script>  
    function setPrice(o) {//设置小计和总价  
        var tr = o.closest('tr');  
        var ipt = tr.find('input');  
        ipt.filter(':last').val(parseInt(o.val()) * parseInt(ipt.eq(0).val(), 10));  
        var sum = 0;  
        o.closest('tbody').find('input[name="subtotal_price"]').each(function () { sum += parseInt(this.value, 0) || 0; })  
            .end().find('td:last').html(sum+'元')  
  
    }  
    //减  
    function minusCart(_this, id){  
        var num_input = $(_this).next('input[name="num"]');  
        var num = parseInt(num_input.val());  
        num--;  
        if(num <= 0){  
            return false;  
        } else {  
            num_input.val(num);  
            setPrice(num_input);  
            cartNum(num_input, id, num);  
        }  
    }  
    //加  
    function plusCart(_this,id){  
        //获取购买数量  
        var num_input = $(_this).prev('input[name="num"]');  
        var num = parseInt(num_input.val());  
        var total_quantity = parseInt(num_input.attr('max'));  
        if(num >= total_quantity){  
            alert('库存不足');  
            return false;  
        }else {  
            //alert(num);  
            num = parseInt(num) + 1;  
            num_input.val(num);  
            setPrice(num_input);  
            cartNum(num_input, id, num);  
        }  
    }  
  
    /**  
     * 修改购物车商品数量  
     * @param _this  
     * @param id  
     * @param num  
     */  
    function cartNum(_this, id, num){  
        $.ajax({  
            type: 'POST',  
            url: 'cart_ajax.php',  
            data: {id: id, num: num},  
            dataType: 'json',  
            success: function (res) {  
                if (res.status == 1) {  
                    _this.val(num);  
                }else{  
                    alert(res.info);  
                }  
            }  
        });  
    }  
  
  
  
</script>  
</body>  
</html>  