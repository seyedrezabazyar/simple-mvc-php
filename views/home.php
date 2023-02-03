<html>

<head>
    <title>Task Manager</title>
</head>

<body>
    <h1>Task Manager</h1>
    <table>
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Status</th>
        </tr>
        <?php foreach ($tasks as $task) : ?>
            <tr>
                <td><?php echo $task->getName(); ?></td>
                <td><?php echo $task->getDescription(); ?></td>
                <td><?php echo $task->getDueDate(); ?></td>
                <td><?php echo $task->isCompleted() ? 'Completed' : 'Pending'; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>