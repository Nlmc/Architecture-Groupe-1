
<?php
class Validation
{
    public function check_empty($data, $fields)
    {
        $msg = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $msg .= "$value field empty <br />";
            }
        }
        return $msg;
    }

    public function is_annee_valid($annee)
    {
        //if (is_numeric($age)) {
        if (preg_match("/^[0-9]+$/", $annee)) {
            return true;
        }
        return false;
    }

}
?>
