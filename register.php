<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action = "action_page.php" method ="POST">
            <table border="1" cellpadding = "20" width = "50">
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type = "text" name = "name" placeholder="Enter full name" value ="Rona"></td>
                </tr>    
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name = "gender" value = "male" checked      > male
                        <input type="radio" name = "gender" value = "female" > female
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name="country">
                            <option value = "PH">Philippines</option>
                            <option value = "AUS">Australia</option>
                            <option value = "US" >United States</option>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right ;">
                        <input type="submit"  name="submit" value="Save">
                    </td>
                </tr>
            </table>
        <form>     
    </body>
</html>