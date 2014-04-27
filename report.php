$row = array(
        '0' => 'date',
        '1' => 'self',
        '2' => 'feel',
        '3' => 'talk',
        '4' => 'love',
        '5' => 'does',
        '6' => 'grow',
  		'7' => 'pull',
  		'8' => 'obox',
  		'9' => 'spur',
  		'10' => 'stop',
    );

    $rows = array($row, $row, $row, $row, $row, $row, $row, $row, $row, $row);

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
