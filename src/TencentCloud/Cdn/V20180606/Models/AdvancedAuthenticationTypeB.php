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
 * Timestamp hotlink protection advanced configuration mode B
 *
 * @method string getKeyAlpha() Obtain Alpha key name
 * @method void setKeyAlpha(string $KeyAlpha) Set Alpha key name
 * @method string getKeyBeta() Obtain Beta key name
 * @method void setKeyBeta(string $KeyBeta) Set Beta key name
 * @method string getKeyGamma() Obtain Gamma key name
 * @method void setKeyGamma(string $KeyGamma) Set Gamma key name
 * @method string getSignParam() Obtain Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method void setSignParam(string $SignParam) Set Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method string getTimeParam() Obtain Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method void setTimeParam(string $TimeParam) Set Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
 * @method integer getExpireTime() Obtain Expiration time in seconds
 * @method void setExpireTime(integer $ExpireTime) Set Expiration time in seconds
 * @method string getTimeFormat() Obtain Time format. Valid values: dec (decimal), hex (hexadecimal).
 * @method void setTimeFormat(string $TimeFormat) Set Time format. Valid values: dec (decimal), hex (hexadecimal).
 * @method integer getFailCode() Obtain Status code returned when the authentication failed
 * @method void setFailCode(integer $FailCode) Set Status code returned when the authentication failed
 * @method integer getExpireCode() Obtain Status code returned when the URL expired
 * @method void setExpireCode(integer $ExpireCode) Set Status code returned when the URL expired
 * @method array getRulePaths() Obtain List of URLs to be authenticated
 * @method void setRulePaths(array $RulePaths) Set List of URLs to be authenticated
 */
class AdvancedAuthenticationTypeB extends AbstractModel
{
    /**
     * @var string Alpha key name
     */
    public $KeyAlpha;

    /**
     * @var string Beta key name
     */
    public $KeyBeta;

    /**
     * @var string Gamma key name
     */
    public $KeyGamma;

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
     * @param string $KeyAlpha Alpha key name
     * @param string $KeyBeta Beta key name
     * @param string $KeyGamma Gamma key name
     * @param string $SignParam Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     * @param string $TimeParam Time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
     * @param integer $ExpireTime Expiration time in seconds
     * @param string $TimeFormat Time format. Valid values: dec (decimal), hex (hexadecimal).
     * @param integer $FailCode Status code returned when the authentication failed
     * @param integer $ExpireCode Status code returned when the URL expired
     * @param array $RulePaths List of URLs to be authenticated
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
        if (array_key_exists("KeyAlpha",$param) and $param["KeyAlpha"] !== null) {
            $this->KeyAlpha = $param["KeyAlpha"];
        }

        if (array_key_exists("KeyBeta",$param) and $param["KeyBeta"] !== null) {
            $this->KeyBeta = $param["KeyBeta"];
        }

        if (array_key_exists("KeyGamma",$param) and $param["KeyGamma"] !== null) {
            $this->KeyGamma = $param["KeyGamma"];
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
    }
}
