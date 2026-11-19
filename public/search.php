<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<table id="example" class="display">
  <thead>
    <tr>
      <th>Имя</th>
      <th>Должность</th>
      <th>Отдел</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Александр</td>
      <td>Менеджер</td>
      <td>Продажи</td>
    </tr>
    <tr>
      <td>Мария</td>
      <td>Аналитик</td>
      <td>Разработка</td>
    </tr>
  </tbody>
</table>

<script>
$(document).ready(function() {
  const table = $('#example').DataTable({
    columns: [
      { title: 'Имя', data: 'name' },
      { title: 'Должность', data: 'position' },
      { title: 'Отдел', data: 'department' }
    ],
    search: 'applied' // Включаем глобальный поиск
  });
});
</script>    
</body>
</html>
