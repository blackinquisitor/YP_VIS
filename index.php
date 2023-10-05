<?php $user = "bogdan"; $password = "123";
    if ($_POST['submit'])
    {
        $firstNum = (int)$_POST['first'];
        $secondNum = (int)$_POST['second'];
        $tmp = $_POST['operation'];
        $result = null;
        if ($tmp=='+')
            $result = $firstNum + $secondNum;
        elseif ($tmp=='-')
            $result = $firstNum - $secondNum;
        elseif ($tmp=='*')
            $result = $firstNum * $secondNum;
        elseif ($tmp=='/')
        {
            if ($secondNum==0)
                echo "На ноль делить нельзя";
            else $result = $firstNum / $secondNum;
        }
        elseif ($tmp=='^')
            $result = pow($firstNum, $secondNum);
    }
    if ($result != null)
        echo $result;
?>

<form action="" method="post">
    <label>
        <input type="text" name="first" required>
    </label>
    <label>
        <select name="operation" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="^">^</option>
        </select>
    </label>

    <label>
        <input type="text" name="second" required>
    </label>
    <input type="submit" name="submit" required>
</form>

