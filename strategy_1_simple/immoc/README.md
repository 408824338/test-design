# 策略模式

1.将一组特定的行为和算法封闭成类,以适应某些特定的上下文环境,这种模式就是策略模式

2.实际应用举例,例如一个电商网站系统,针对男性女性用户要各自跳转到不同的商品类目,并且所有广告位展示不同的广告

###调用方法
```
class Page
{

    protected $strategy;

    function index()
    {
        echo 'AD:';
        echo $this->strategy->showAd();
        echo "<br />";
        echo 'Category:';
        echo $this->strategy->showCategory();
    }

    function setStrategy(\IMooc\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

}

$page = new Page();
if (isset($_GET['female'])) {
    $strategy = new \IMooc\FemaleUserStrategy();
} else {
   $strategy = new \IMooc\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();
```
