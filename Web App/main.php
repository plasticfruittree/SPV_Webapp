<!DOCTYPE html>
<html lang="">

<head>
    <title>SPV CRUD</title>
</head>

<body>

    <h1>Input Data</h1>
    <p>HTML form will go below.</p>


    <form>

        <label for="id">Pool ID</label>
        <input type="text" id = "id" name = "id"><br>

        <br>

        <label for="account">Asset ID</label>
        <input type="text" id = "account" name = "account"><br>

        <br>

        <input type = "checkbox" id = "credit_card" name = "pool_type" value = "credit_card">
        <label for = "credit_card">Credit Card</label><br>

        <input type = "checkbox" id = "student_loan" name = "pool_type" value = "student_loan">
        <label for = "student_loan">Student Loan</label><br>

        <input type = "checkbox" id = "asset_backed" name = "asset_backed" value = "asset_backed">
        <label for = "asset_backed">Asset Backed</label><br>

        <br>

        <label for = "face_value">Face Value</label>
        <input type = "text" id = "face_value" name = "face_value"><br>

        <br>

        <label for = "credit_score">Credit Score</label>
        <input type = "text" id = "credit_score" name = "credit_score"><br>

        <br>

        <label for = "Loan-to-Value">Loan-to-Value</label>
        <input type = "text" id = "Loan-to-Value" name = "Loan-to-Value"><br>

        <br>

        <input type = "submit" value = "submit">

    </form>

    <h1>Output Here</h1>

</body>
</html>