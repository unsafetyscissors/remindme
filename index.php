<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
  web index <?php echo ($PAGE->id) ?><br>

  <button id='healthCheck'>health check</button>

  <br><br>

  <button id='listGet'>get list</button><br>
  <button id='listPost'>post list</button><br>
  <button id='listPut'>put list</button><br>
  <button id='listDelete'>delete list</button>

  <br><br>

  <button id='listItemGet'>get listItems</button><br>
  <button id='listItemPost'>post listItem</button><br>
  <button id='listItemPut'>put listItem</button><br>
  <button id='listItemDelete'>delete listItem</button>

  <script src='web/src/jquery-1.11.2.js'></script>
  <script src='web/src/request.js'></script>
  <script src='web/src/lists.js'></script>
  <script src='web/src/listItems.js'></script>
</body>
</html>