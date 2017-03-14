<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>使用array_keys函数来获取数组中重复元素的所有键名</title>
</head>

<body>
<?php
$arr=array("葡萄","山竹","橙子","西瓜","山竹");
$name=array_keys($arr,"山竹");				//使用array_keys获取$arr数组中“山竹”的所有键值
echo $name;
print_r($name);							//因为array_keys函数返回的是数组类型的值，所以使用print_r输出
?>

</body>
</html>
