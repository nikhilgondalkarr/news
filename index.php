<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ukvukv</title>
    <style>
        /* Your CSS styles here */
        .action-buttons {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        .edit-card {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
    </style>
</head>
<body>
    <h2>Blog Posts</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Posted By</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php include 'fetch_posts.php'; ?>
    </table>

    <!-- Floating action buttons -->
    <div class="action-buttons">
        <button id="edit-btn" style="display: none;">Edit</button>
        <button id="view-btn" style="display: none;">View</button>
        <button id="delete-btn" style="display: none;">Delete</button>
    </div>

    <!-- Floating card for editing post -->
    <div class="edit-card" id="edit-card">
        <h3>Edit Post</h3>
        <!-- Form for editing post -->
        <form id="edit-form">
            <label for="edit-title">Title:</label>
            <input type="text" id="edit-title" name="title" required><br><br>
            <label for="edit-description">Description:</label>
            <textarea id="edit-description" name="description" required></textarea><br><br>
            <label for="edit-category">Category:</label>
            <input type="text" id="edit-category" name="category" required><br><br>
            <label for="edit-posted-by">Posted By:</label>
            <input type="text" id="edit-posted-by" name="posted_by" required><br><br>
            <button type="submit">Save</button>
        </form>
    </div>

    <script>
        // JavaScript code to show/hide action buttons and edit card
        document.addEventListener('DOMContentLoaded', function () {
            var editBtn = document.getElementById('edit-btn');
            var editCard = document.getElementById('edit-card');

            // Show edit card when edit button is clicked
            editBtn.addEventListener('click', function () {
                editCard.style.display = 'block';
            });

            // Hide edit card when clicking outside
            document.addEventListener('click', function (event) {
                var target = event.target;
                if (!target.closest('.edit-card') && target.id !== 'edit-btn') {
                    editCard.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
