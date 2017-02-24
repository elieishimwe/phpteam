<?php

class StaticC
{
    protected static $Total=200;
    public static $Mark=150;

    const PASS_MARK=50;

    public static function MarkPercentage()
    {
        return self::$Mark/self::$Total*100;
    }
}
$StaticC1=StaticC::MarkPercentage();

echo "The percentage is ".$StaticC1."&nbsp;";

if($StaticC1>=StaticC::PASS_MARK)
{
    echo " (Passed)";
}
elseif ($StaticC1<StaticC::PASS_MARK)
{
    echo " (Failed)";
}
?>