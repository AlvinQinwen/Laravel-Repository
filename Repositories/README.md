~~~php
public function index()
{
    $result =  Model::all();
    if (!$result) {
        return 'xxx';
    }
    return result;
}
~~~

**这里是介绍文件**