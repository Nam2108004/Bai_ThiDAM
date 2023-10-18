<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List category</h1>

    


    <main style="display: flex; margin: 40px 80px" class="catalog  mb ">
            
          
            <div class="boxleft">
                <h2>Danh sách danh mục</h2>
                
                <a href="?url=add-category">   <button class="learn-more"> Thêm Danh Mục</button></a>
                 
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã Loại</th>
      <th scope="col">Tên Loại</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($categorys as $category): ?>
    <tr>
      <th scope="row"><?php echo $category['ma_loai']?></th>
      <td><?php echo $category['ten_loai']?></td>
      <td class="suaxoa"><a href="?url=edit-category&id=<?php echo $category['ma_loai'] ?>">Sửa</a></td>
      <td><a href="javascript:void(0);" onclick="confirmDelete(<?php echo $category['ma_loai'] ?>)">Xóa</a></td>
      
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
             
             
             
            
        </div>
    
            
           
        </main>
</body>
<script>
    function confirmDelete(id) {
        if (confirm("Bạn có chắc chắn muốn xóa danh mục này?")) {
            window.location.href = "?url=delete-category&id=" + id;
        }
    }
</script>
</html>