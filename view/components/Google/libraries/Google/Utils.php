<?php
/*
 * Copyright 2011 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Collection of static utility methods used for convenience across
 * the client library.
 */
class Google_Utils
{
  public static function urlSafeB64Encode($data)
  {
    $b64 = base64_encode($data);
    $b64 = str_replace(
        array('+', '/', '\r', '\n', '='),
        array('-', '_'),
        $b64
    );
    return $b64;
  }

  public static function urlSafeB64Decode($b64)
  {
    $b64 = str_replace(
        array('-', '_'),
        array('+', '/'),
        $b64
    );
    return base64_decode($b64);
  }

  /**
   * Misc function used to count the number of bytes in a post body, in the
   * world of multi-byte chars and the unpredictability of
   * strlen/mb_strlen/sizeof, this is the only way to do that in a sane
   * manner at the moment.
   *
   * This algorithm was originally developed for the
   * Solar Framework by Paul M. Jones
   *
   * @link   http://solarphp.com/
   * @link   http://svn.solarphp.com/core/trunk/Solar/Json.php
   * @link   http://framework.zend.com/svn/framework/standard/trunk/library/Zend/Json/Decoder.php
   * @param  string $str
   * @return int The number of bytes in a string.
   */
  

  /**
   * Normalize all keys in an array to lower-case.
   * @param array $arr
   * @return array Normalized array.
   */
  public static function normalize($arr)
  {
    if (!is_array($arr)) {
      return array();
    }

    $normalized = array();
    foreach ($arr as $key => $val) {
      $normalized[strtolower($key)] = $val;
    }
    return $normalized;
  }

  /**
   * Convert a string to camelCase
   * @param  string $value
   * @return string
   */
  public static function camelCase($value)
  {
    $value = ucwords(str_replace(array('-', '_'), ' ', $value));
    $value = str_replace(' ', '', $value);
    $value[0] = strtolower($value[0]);
    return $value;
  }
}
