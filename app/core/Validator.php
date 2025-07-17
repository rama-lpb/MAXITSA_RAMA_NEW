<?php
    namespace App\Core;

    class Validator extends Singleton{

    private static  array $errors = [];
    private static array $rules = [];


    function __construct (){
        self::$errors = [];
        self::$rules = [
                    'required' => function($key , $value , $message ){
                        if (empty($value)){
                            self::addErros($key , $message);
                          //var_dump( self::addErros($key , $message));
                            }
                        },
                        'minlength'  => function($key ,$value , $min,  $message ){
                            if (isset($value) && strlen($value) < $min){
                                self::addErros($key , $message);
                            //    var_dump(self::addErros($key , $message));
                            }
                        },
                        'maxlength'  => function($value , $key ,$max, $message ){
                        if (strlen($value) > $max){
                            $message = "Le nombre de caractères saisit est supérieur au nombre maximal .";
                            self::addErros($key , $message);
                        }
                        },
                        "isMail" => function ($key, $value, $message = "Email invalide") {
                            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                                    self::addErros($key, $message);
                            }
                        },
                        "isPassword" => function ($key, $value, $message = "Mot de passe invalide") {
                            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/', $value)) {
                                self::addErros($key, $message);
                            }
                        },
                        "isSenegalPhone" => function ($key, $value, $message = "Numéro de téléphone invalide") {
                            $value = preg_replace('/\D/', '', $value);
                            $prefixes = ['70', '75', '76', '77', '78'];
                            if (!(strlen($value) === 9 && in_array(substr($value, 0, 2), $prefixes))) {
                                self::addErros($key, $message);
                            }
                        },
                        "isCNI" => function ($key, $value, $message = "Numéro de CNI invalide") {
                            $value = preg_replace('/\D/', '', $value);
                            if (!preg_match('/^1\d{12}$/', $value)) {
                                self::addErros($key, $message);
                            }       
                        }           
        ] ;

    }

    public  static function getErros (){
       // var_dump(self::$errors);
    return self::$errors;
    }

    public  static function addErros (string $key , string $message){
        //var_dump(self::$errors);

    self::$errors[$key]= $message ;


    }
  public static function validate(array $data, array $rules): bool
{
    self::$errors = []; 
    foreach ($rules as $field => $fieldRules) {
        $value = $data[$field] ?? null;
        //  print_r($fieldRules);

        foreach ($fieldRules as $rule) {
            if (isset(self::$errors[$field])) {
                break;
            }
            if (is_string($rule)) {
                $callback = self::$rules[$rule] ?? null;
                if ($callback) {
                    $callback($field, $value);
                }
            } elseif (is_array($rule)) {
                $ruleName = $rule[0];
                $params = array_slice($rule, 1);
                $callback = self::$rules[$ruleName] ?? null;
                if ($callback) {
                    $callback($field, $value, ...$params);
                }
            }
        }
    }
    return empty(self::$errors);
}
    }