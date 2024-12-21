<?
echo "3";
class connection
{
    public PDO $pdo;

    public function __construct()
    {
        echo "test";
    }
}
return new connection();
?>