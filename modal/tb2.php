<h3>新增</h3>
<hr>
<form action="api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td style="vertical-align:top">內容</td>
    </tr>
    <tr>
        <td><textarea name="text" style="width:400px;height:20px;"></textarea></td>
    </tr>
    <tr>
		<td><textarea name="text2" style="width:400px;height:20px;"></textarea></td>
    </tr>
    <tr>
		<td><textarea name="text3" style="width:400px;height:20px;"></textarea></td>
    </tr>
    <tr>
		<td><textarea name="text4" style="width:400px;height:20px;"></textarea></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>
    </tr>
</table>
    
    
</form>