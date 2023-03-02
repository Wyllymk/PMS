<?php 
/**
 * Template Name: Modal
 */
get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Add New Project
  </button>
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-body">
      <form method ="POST" action="">
          <div class="form-group">
            <label for="projectName">Project Name</label>
            <input type="text" class="form-control" id="projectName" placeholder="Enter project name" name="projectName" required>
          </div>
          <div class="form-group">
            <label for="task">Task</label>
            <input type="text" class="form-control" id="task" placeholder="Enter task"  name="task" required>
          </div>
          <div class="form-group">
            <label for="startDate">Start Date</label>
            <input type="date" class="form-control" id="startDate" name="StartDate" required>
          </div>
          <div class="form-group">
            <label for="dueDate">Due Date</label>
            <input type="date" class="form-control" id="dueDate" name="DueDate" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name ="savechanges">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>



<?php get_footer();?>