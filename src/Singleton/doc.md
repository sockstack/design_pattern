## 最简单的设计模式

很容易理解，也很简单。

最常见的场景就是一个数据库的链接，我们每次请求只需要连接一次，也就是说如果我们用类来写的话，只需要用一个实例就够了（多了浪费）。

```php
<?php
    class Mysql{
        //该属性用来保存实例
        private static $conn;
        //构造函数为private,防止创建对象
        private function __construct(){
            self::$conn = mysqli_connect('localhost','root','');
        }
        //创建一个用来实例化对象的方法，如果不存在一个这个类的实例属性，就创建一个，否则就取这个实例属性。
        public static function getInstance(){
            if(!(self::$conn instanceof self)){
                self::$conn = new self;
            }
            return self::$conn;
        }
        //防止对象被复制
        public function __clone(){
            trigger_error('Clone is not allowed !');
        }
        //防止反序列化后创建对象
        private function __wakeup(){
            trigger_error('Unserialized is not allowed !');
        }
    }
    //只能这样取得实例，不能new 和 clone
    $mysql = Mysql::getInstance();
?>
```

> 解析

1. 构造函数私有化。
2. 定义获取实例方法，对象由该方法创建，并且赋值给对象属性，如果属性存在即返回。
3. 定义__clone()方法防止对象被复制。
4. 定义__wakeup()方法防止对象被反序列创建对象。