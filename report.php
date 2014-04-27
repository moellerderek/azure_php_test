$row = array(
        'date' => 'value',
        'self' => 'value',
        'feel' => 'value',
        'talk' => 'value',
        'love' => 'value',
        'does' => 'value',
        'gorw' => 'value',
  		'pull' => 'value',
  		'obox' => 'value',
  		'spur' => 'value',
  		'stop' => 'value',
    );

    $rows = array($row, $row, $row, $row, $row, $row, $row, $row, $row, $row, 					$row, $row);

    print array_to_html($rows);


function array_to_html($data) {
    $report = "";

    if (count($data) > 0) {

        $report .= "<table>";
        $report .= sprintf("<tr><th>%s</th></tr>", join("</th><th>", 				array_keys($data[0])));

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
