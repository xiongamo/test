<?php
// 激活断言，并设置它为 quiet
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

//创建处理函数
function my_assert_handler($file, $line, $code)
{
    echo "<hr>Assertion Failed:
        File '$file'<br />
        Line '$line'<br />
        Code '$code'<br /><hr />";
}

// 设置回调函数
assert_options(ASSERT_CALLBACK, 'my_assert_handler');

// 让一则断言失败
assert('mysql_query("")');
?>