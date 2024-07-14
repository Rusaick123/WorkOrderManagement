<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Order Management System<</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="content">
    <div class="login-container">
        <form class="login-form" action="workorder_check.php" method="post">
            <h2>Create Work Order</h2>
            <div class = "form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="worktype">Type of Work:</label>
                <select id="worktype" name="worktype" required onchange="showOtherWorkField()">
                    <option value="Electrical">Electrical</option>
                    <option value="Masonry">Masonry</option>
                    <option value="Water Supply & Plumbing">Water Supply & Plumbing</option>
                    <option value="Other">Other works</option>
                </select>
                <div id="other_work_field" class="form-group" style="display: none;">
                    <label for="other_work_description">Please specify:</label>
                    <input type="text" id="other_work_description" name="other_work_description">
                </div>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="Office of the Dean">Office of the Dean</option>
                    <option value="Dept. of Languages">Dept. of Languages</option>
                    <option value="Dept. of Political Sciences">Dept. of Political Sciences</option>
                </select>
            </div>
            <div class="form-group">
                <label for="complaint">Work to be performed/Complaint:</label>
                <textarea id="complaint" name="complaint" required oninput="limitTextCount(event)"></textarea>
            </div>
            <button type="submit">Submit Work Order</button>
        </form>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
