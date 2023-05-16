<?php
class flashMessage{

    const created= "Your Product added successfully";
    const edited ="Your product updated successfully";
    const deleted= "Your product deleted successfully";
    const error ="Something went wrong";

    function productStored()
    {
        echo self::created;
    }

    function productUpdated()
    {
        echo self::edited;
    }

    function productDeleted()
    {
        echo self::deleted;
    }

    function error()
    {
        echo self::error;
    }
}

$action="deleted";
$flash= new flashMessage();
switch($action){
    case "created":
        $flash->productStored();
        break;

    case "edited":
            $flash->productUpdated();
            break;
            case "deleted":
                $flash->productDeleted();
                break;
                case "error":
                    $flash->error();
                    break;

                    default:
                    echo "Unknown";

}

?>