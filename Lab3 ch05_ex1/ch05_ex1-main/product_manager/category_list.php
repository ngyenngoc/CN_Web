<?php include '../view/header.php'; ?>
<div id="main">

    <h1 class="top">Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <!-- Vòng lặp hiển thị danh sách category -->
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo htmlspecialchars($category['categoryName']); ?></td>
            <td>
                <!-- Nút Edit nằm trong vòng lặp -->
                <a href="index.php?action=show_update_category&category_id=<?php echo $category['categoryID']; ?>">Edit</a>
            </td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="category_id" 
                           value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Category</h2>
    <!-- Form thêm mới category -->
    <form action="index.php" method="post" id="add_category_form">
        <input type="hidden" name="action" value="add_category">

        <label>Name:</label>
        <input type="text" name="name">
        <input id="add_category_button" type="submit" value="Add"><br>
    </form>
    <br>

    <p><a href="index.php?action=list_products">List Products</a></p>

</div>
<?php include '../view/footer.php'; ?>