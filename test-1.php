<h2>Basic Validation, AJAX Form submit, Notification</h2>
<form id="test-form" method="post" action="submit.php">
    <table>
        <tr>
            <th>Name</th>
            <td><input name="fullname" class="required" type="text" /></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input name="email" class="required" type="text" /></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><textarea name="address" class="required"></textarea></td>
        </tr>
        <tr>
            <th>Address</th>
            <td>
                <select name="country" class="required">
                    <option value="">---- Choose ----</option>
                    <option value="in">India</option>
                    <option value="ch">China</option>
                    <option value="us">USA</option>
                    <option value="uk">UK</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>&nbsp;</th>
            <td><input value="Submit" type="submit" /></td>
        </tr>
    </table>
</form>