<?php
    /**
     * Copyright (c) 2015 - 2017 by KAA Soft. All rights reserved.
     */

    namespace KAASoft\Util;

    /**
     * Class ValidationHelper
     * @package KAASoft\Util
     */
    class ValidationHelper {

        /**
         * @param $var
         * @return bool
         */
        public static function isEmpty($var) {
            return !isset( $var ) or empty( $var );
        }

        /**
         * @param $var
         * @return bool
         */
        public static function getBool($var) {
            $var = ValidationHelper::trim($var);

            return ValidationHelper::isEmpty($var) ? false : (bool)$var;
        }

        /**
         * @param      $var
         * @param null $length
         * @return null|string
         */
        public static function getString($var, $length = null) {
            if (ValidationHelper::isEmpty($var)) {
                return null;
            }
            $var = ValidationHelper::trim($var);
            if ($length !== null) {
                return substr($var,
                              0,
                              $length);
            }

            return (string)$var;
        }

        /**
         * @param $string
         * @param $variants
         * @param $defaultValue
         * @return null|string
         */
        public static function getStringFromVariants($string, $variants, $defaultValue) {
            $string = ValidationHelper::getString($string);

            if (in_array($string,
                         $variants)) {
                return $string;
            }
            else {
                return $defaultValue;
            }
        }

        /**
         * @param $var
         * @param $defaultValue
         * @return string
         */
        public static function getChar($var, $defaultValue) {
            return strlen($var) == 1 ? $var : $defaultValue;
        }

        /**
         * @param $var
         * @return int
         */
        public static function getNullableInt($var) {
            $var = ValidationHelper::trim($var);

            return ValidationHelper::isEmpty($var) ? ( ( $var === 0 || $var === "0" ) ? 0 : null ) : (int)$var;
        }


        /**
         * @param     $var
         * @param int $default
         * @return int
         */
        public static function getInt($var, $default = 0) {
            $var = ValidationHelper::trim($var);

            return ValidationHelper::isEmpty($var) ? (int)$default : (int)$var;
        }

        /**
         * @param $var
         * @return float|null
         */
        public static function getFloat($var) {
            $var = ValidationHelper::trim($var);

            return ValidationHelper::isEmpty($var) ? null : (float)$var;
        }

        /**
         * @param $input
         * @return bool
         */
        function isInteger($input) {
            return ( ctype_digit(strval($input)) );
        }

        /**
         * @param $array
         * @return bool
         */
        public static function isArrayEmpty($array) {
            return !isset( $array ) or count($array) == 0;
        }

        /**
         * @param $var
         * @return null|array
         */
        public static function getArray($var) {
            return ValidationHelper::isArrayEmpty($var) ? null : $var;
        }

        /**
         * @param $var
         * @return array|null
         */
        public static function getIntArray($var) {
            $var = ValidationHelper::getArray($var);
            if ($var !== null) {

                $newArray = [];
                foreach ($var as $int) {
                    if (ValidationHelper::isInteger($int)) {
                        $newArray [] = $int;
                    }
                }

                if (count($newArray) > 0) {
                    return $newArray;
                }
            }

            return null;
        }

        /**
         * @param $var
         * @return string
         */
        public static function trim($var) {
            return trim($var);
        }

        /**
         * @param $var
         * @return string [ASC|DESC]
         */
        public static function getDatabaseSortOrder($var) {
            if (strcmp(ValidationHelper::getString($var),
                       "DESC") === 0
            ) {
                return "DESC";
            }
            else {
                return "ASC";
            }
        }
    }