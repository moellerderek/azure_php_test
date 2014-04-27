$row = array(
        'column 1' => 'value',
        'column 2' => 'value',
        'column 3' => 'value',
        'column 4' => 'value',
        'column 5' => 'value',
        'column 6' => 'value',
        'column 7' => 'value',
    );

    $rows = array($row, $row, $row, $row, $row, $row, $row, $row, $row, $row);

    print array_to_html($rows);


function array_to_html($data) {
    $report = "";

    if (count($data) > 0) {

        $report .= "<table>";
        $report .= sprintf("<tr><th>%s</th></tr>", join("</th><th>", array_keys($data[0])));

        foreach ($data as $row) {

            $report .= "<tr>";

            foreach ($row as $column) {
                $report .= "<td>$column</td>";
            }
            $report .= "</tr>";
        }
        $report .= "</table>";
    } else {
        $report = "No data";
    }

    return $report;
