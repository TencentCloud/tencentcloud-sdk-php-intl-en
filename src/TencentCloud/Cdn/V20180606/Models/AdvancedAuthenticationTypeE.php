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
 * Timestamp hotlink protection advanced configuration mode E
 *
 * @method string getSecretKey() Obtain Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSecretKey(string $SecretKey) Set Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSignParam() Obtain Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSignParam(string $SignParam) Set Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getAclSignParam() Obtain ACL signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAclSignParam(string $AclSignParam) Set ACL signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStartTimeParam() Obtain Start time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStartTimeParam(string $StartTimeParam) Set Start time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getExpireTimeParam() Obtain Expiration time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setExpireTimeParam(string $ExpireTimeParam) Set Expiration time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getTimeFormat() Obtain Time format (dec)
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTimeFormat(string $TimeFormat) Set Time format (dec)
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AdvancedAuthenticationTypeE extends AbstractModel
{
    /**
     * @var string Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SecretKey;

    /**
     * @var string Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SignParam;

    /**
     * @var string ACL signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AclSignParam;

    /**
     * @var string Start time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StartTimeParam;

    /**
     * @var string Expiration time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ExpireTimeParam;

    /**
     * @var string Time format (dec)
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TimeFormat;

    /**
     * @param string $SecretKey Key used for signature calculation, allowing 6 to 32 bytes of letters and digits.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SignParam Signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $AclSignParam ACL signature field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $StartTimeParam Start time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ExpireTimeParam Expiration time field name in the URI string, starting with a letter, and consisting of letters, digits, and underscores.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $TimeFormat Time format (dec)
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("AclSignParam",$param) and $param["AclSignParam"] !== null) {
            $this->AclSignParam = $param["AclSignParam"];
        }

        if (array_key_exists("StartTimeParam",$param) and $param["StartTimeParam"] !== null) {
            $this->StartTimeParam = $param["StartTimeParam"];
        }

        if (array_key_exists("ExpireTimeParam",$param) and $param["ExpireTimeParam"] !== null) {
            $this->ExpireTimeParam = $param["ExpireTimeParam"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
