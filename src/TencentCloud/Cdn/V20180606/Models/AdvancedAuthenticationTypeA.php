<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp hotlink protection advanced configuration mode A
 *
 * @method string getSecretKey() Obtain Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
 * @method void setSecretKey(string $SecretKey) Set Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
 * @method string getSignParam() Obtain Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method void setSignParam(string $SignParam) Set Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method string getTimeParam() Obtain Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method void setTimeParam(string $TimeParam) Set Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method integer getExpireTime() Obtain Expiration time in seconds
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time in seconds
 * @method boolean getExpireTimeRequired() Obtain Whether the expiration time parameter is required
 * @method void setExpireTimeRequired(boolean $ExpireTimeRequired) Set Whether the expiration time parameter is required
 * @method string getFormat() Obtain URL composition, e.g., `${private_key}${schema}${host}${full_uri}`.
 * @method void setFormat(string $Format) Set URL composition, e.g., `${private_key}${schema}${host}${full_uri}`.
 * @method string getTimeFormat() Obtain Time format. Valid values: dec (decimal), hex (hexadecimal).
 * @method void setTimeFormat(string $TimeFormat) Set Time format. Valid values: dec (decimal), hex (hexadecimal).
 * @method integer getFailCode() Obtain Status code returned when the authentication failed
 * @method void setFailCode(integer $FailCode) Set Status code returned when the authentication failed
 * @method integer getExpireCode() Obtain Status code returned when the URL expired
 * @method void setExpireCode(integer $ExpireCode) Set Status code returned when the URL expired
 * @method array getRulePaths() Obtain List of URLs to be authenticated
 * @method void setRulePaths(array $RulePaths) Set List of URLs to be authenticated
 * @method integer getTransformation() Obtain Reserved field
 * @method void setTransformation(integer $Transformation) Set Reserved field
 */
class AdvancedAuthenticationTypeA extends AbstractModel
{
    /**
     * @var string Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
     */
    public $SecretKey;

    /**
     * @var string Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     */
    public $SignParam;

    /**
     * @var string Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     */
    public $TimeParam;

    /**
     * @var integer Expiration time in seconds
     */
    public $ExpireTime;

    /**
     * @var boolean Whether the expiration time parameter is required
     */
    public $ExpireTimeRequired;

    /**
     * @var string URL composition, e.g., `${private_key}${schema}${host}${full_uri}`.
     */
    public $Format;

    /**
     * @var string Time format. Valid values: dec (decimal), hex (hexadecimal).
     */
    public $TimeFormat;

    /**
     * @var integer Status code returned when the authentication failed
     */
    public $FailCode;

    /**
     * @var integer Status code returned when the URL expired
     */
    public $ExpireCode;

    /**
     * @var array List of URLs to be authenticated
     */
    public $RulePaths;

    /**
     * @var integer Reserved field
     */
    public $Transformation;

    /**
     * @param string $SecretKey Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
     * @param string $SignParam Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     * @param string $TimeParam Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     * @param integer $ExpireTime Expiration time in seconds
     * @param boolean $ExpireTimeRequired Whether the expiration time parameter is required
     * @param string $Format URL composition, e.g., `${private_key}${schema}${host}${full_uri}`.
     * @param string $TimeFormat Time format. Valid values: dec (decimal), hex (hexadecimal).
     * @param integer $FailCode Status code returned when the authentication failed
     * @param integer $ExpireCode Status code returned when the URL expired
     * @param array $RulePaths List of URLs to be authenticated
     * @param integer $Transformation Reserved field
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SignParam",$param) and $param["SignParam"] !== null) {
            $this->SignParam = $param["SignParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExpireTimeRequired",$param) and $param["ExpireTimeRequired"] !== null) {
            $this->ExpireTimeRequired = $param["ExpireTimeRequired"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("FailCode",$param) and $param["FailCode"] !== null) {
            $this->FailCode = $param["FailCode"];
        }

        if (array_key_exists("ExpireCode",$param) and $param["ExpireCode"] !== null) {
            $this->ExpireCode = $param["ExpireCode"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("Transformation",$param) and $param["Transformation"] !== null) {
            $this->Transformation = $param["Transformation"];
        }
    }
}
