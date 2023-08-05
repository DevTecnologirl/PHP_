<html>
    <body>
        <table>
          <tr>
            <td>Nome do Filtro</td>
            <td>ID do Filtro</td>
          </tr>
          <?php
              foreach (filter_list() as $id =>$filter) {
                  echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
              }
           ?>
        </table>
    </body>
</html>

