<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Display & Processing</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            max-width: 40%;
        }

        table {
            width: 40%;
            max-height: 60vh;
            overflow: auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        #table2 {
            margin-bottom: 0; /* Remove margin for the second table */
        }
    </style>
</head>
<body>
    <h2>TABLE 1</h2>
    <table id="table1">
        <tr>
            <th>Index</th>
            <th>Value</th>
        </tr>
    </table>

    <h2>TABLE 2</h2>
    <table id="table2">
        <!-- Table 2 rows will be dynamically added using JavaScript -->
        <tr>
            <th>Category</th>
            <th>Value</th>
        </tr>
    </table>

    <script>
        
        const table1Data = [
            
    ["A1", 41],
    ["A2", 18],
    ["A3", 21],
    ["A4", 63],
    ["A5", 2],
    ["A6", 53],
    ["A7", 5],
    ["A8", 57],
    ["A9", 60],
    ["A10", 93],
    ["A11", 28],
    ["A12", 3],
    ["A13", 90],
    ["A14", 39],
    ["A15", 80],
    ["A16", 88],
    ["A17", 49],
    ["A18", 60],
    ["A19", 26],
    ["A20", 28],
];

        // Function to generate table rows
        function generateTableRows(tableId, data) {
            const table = document.getElementById(tableId);

            data.forEach((rowData, index) => {
                const row = table.insertRow();
                rowData.forEach((cellData, columnIndex) => {
                    const cell = row.insertCell();
                    cell.textContent = columnIndex === 0 ? index + 1 : cellData;
                });
            });
        }

        // Display Table 1
        generateTableRows("table1", table1Data);

        // Calculate values for Table 2
        const alphaValue = table1Data[4][1] + table1Data[19][1];
        const betaValue = table1Data[14][1] / table1Data[6][1];
        const charlieValue = table1Data[12][1] * table1Data[11][1];

        // Display values for Table 2
        generateTableRows("table2", [["Alpha", alphaValue], ["Beta", betaValue], ["Charlie", charlieValue]]);
    </script>
</body>
</html>
