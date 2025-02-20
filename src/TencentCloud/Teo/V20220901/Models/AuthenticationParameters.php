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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Token authentication configuration parameters
 *
 * @method string getAuthType() Obtain Authentication type. valid values:.

<Li>TypeA: authentication method a type, for specific meaning please refer to [authentication method a](https://intl.cloud.tencent.com/document/product/1552/109329?from_cn_redirect=1);</li>.
<Li>TypeB: authentication method b type, for specific meaning please refer to [authentication method b](https://intl.cloud.tencent.com/document/product/1552/109330?from_cn_redirect=1);</li>.
<Li>TypeC: authentication method c type, for specific meaning please refer to [authentication method c](https://intl.cloud.tencent.com/document/product/1552/109331?from_cn_redirect=1);</li>.
<Li>TypeD: authentication method d type, for specific meaning please refer to [authentication method d](https://intl.cloud.tencent.com/document/product/1552/109332?from_cn_redirect=1);</li>.
<Li>TypeVOD: authentication method v type, for specific meaning please refer to [authentication method v](https://intl.cloud.tencent.com/document/product/1552/109333?from_cn_redirect=1).</li>.
 * @method void setAuthType(string $AuthType) Set Authentication type. valid values:.

<Li>TypeA: authentication method a type, for specific meaning please refer to [authentication method a](https://intl.cloud.tencent.com/document/product/1552/109329?from_cn_redirect=1);</li>.
<Li>TypeB: authentication method b type, for specific meaning please refer to [authentication method b](https://intl.cloud.tencent.com/document/product/1552/109330?from_cn_redirect=1);</li>.
<Li>TypeC: authentication method c type, for specific meaning please refer to [authentication method c](https://intl.cloud.tencent.com/document/product/1552/109331?from_cn_redirect=1);</li>.
<Li>TypeD: authentication method d type, for specific meaning please refer to [authentication method d](https://intl.cloud.tencent.com/document/product/1552/109332?from_cn_redirect=1);</li>.
<Li>TypeVOD: authentication method v type, for specific meaning please refer to [authentication method v](https://intl.cloud.tencent.com/document/product/1552/109333?from_cn_redirect=1).</li>.
 * @method string getSecretKey() Obtain The primary authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
 * @method void setSecretKey(string $SecretKey) Set The primary authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
 * @method integer getTimeout() Obtain Validity period of the authentication url, in seconds, value range: 1–630720000. used to determine if the client access request has expired:.
<Li>If the current time exceeds "timestamp + validity period", it is an expired request, and a 403 is returned directly.</li>.
<Li>If the current time does not exceed "timestamp + validity period", the request is not expired, and the md5 string is further validated.</li> note: when authtype is one of typea, typeb, typec, or typed, this field is required.
 * @method void setTimeout(integer $Timeout) Set Validity period of the authentication url, in seconds, value range: 1–630720000. used to determine if the client access request has expired:.
<Li>If the current time exceeds "timestamp + validity period", it is an expired request, and a 403 is returned directly.</li>.
<Li>If the current time does not exceed "timestamp + validity period", the request is not expired, and the md5 string is further validated.</li> note: when authtype is one of typea, typeb, typec, or typed, this field is required.
 * @method string getBackupSecretKey() Obtain The backup authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set The backup authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
 * @method string getAuthParam() Obtain Authentication parameters name. the node will validate the value corresponding to this parameter name. consists of 1-100 uppercase and lowercase letters, numbers, or underscores.<br>note: this field is required when authtype is either typea or typed.
 * @method void setAuthParam(string $AuthParam) Set Authentication parameters name. the node will validate the value corresponding to this parameter name. consists of 1-100 uppercase and lowercase letters, numbers, or underscores.<br>note: this field is required when authtype is either typea or typed.
 * @method string getTimeParam() Obtain Authentication timestamp. it cannot be the same as the value of the authparam field.<br>note: this field is required when authtype is typed.
 * @method void setTimeParam(string $TimeParam) Set Authentication timestamp. it cannot be the same as the value of the authparam field.<br>note: this field is required when authtype is typed.
 * @method string getTimeFormat() Obtain Authentication time format. values:.
<Li>Dec: decimal;</li>.
<Li>Hex: hexadecimal.</li>note: this field is required when authtype is typed. the default is hex.
 * @method void setTimeFormat(string $TimeFormat) Set Authentication time format. values:.
<Li>Dec: decimal;</li>.
<Li>Hex: hexadecimal.</li>note: this field is required when authtype is typed. the default is hex.
 */
class AuthenticationParameters extends AbstractModel
{
    /**
     * @var string Authentication type. valid values:.

<Li>TypeA: authentication method a type, for specific meaning please refer to [authentication method a](https://intl.cloud.tencent.com/document/product/1552/109329?from_cn_redirect=1);</li>.
<Li>TypeB: authentication method b type, for specific meaning please refer to [authentication method b](https://intl.cloud.tencent.com/document/product/1552/109330?from_cn_redirect=1);</li>.
<Li>TypeC: authentication method c type, for specific meaning please refer to [authentication method c](https://intl.cloud.tencent.com/document/product/1552/109331?from_cn_redirect=1);</li>.
<Li>TypeD: authentication method d type, for specific meaning please refer to [authentication method d](https://intl.cloud.tencent.com/document/product/1552/109332?from_cn_redirect=1);</li>.
<Li>TypeVOD: authentication method v type, for specific meaning please refer to [authentication method v](https://intl.cloud.tencent.com/document/product/1552/109333?from_cn_redirect=1).</li>.
     */
    public $AuthType;

    /**
     * @var string The primary authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
     */
    public $SecretKey;

    /**
     * @var integer Validity period of the authentication url, in seconds, value range: 1–630720000. used to determine if the client access request has expired:.
<Li>If the current time exceeds "timestamp + validity period", it is an expired request, and a 403 is returned directly.</li>.
<Li>If the current time does not exceed "timestamp + validity period", the request is not expired, and the md5 string is further validated.</li> note: when authtype is one of typea, typeb, typec, or typed, this field is required.
     */
    public $Timeout;

    /**
     * @var string The backup authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
     */
    public $BackupSecretKey;

    /**
     * @var string Authentication parameters name. the node will validate the value corresponding to this parameter name. consists of 1-100 uppercase and lowercase letters, numbers, or underscores.<br>note: this field is required when authtype is either typea or typed.
     */
    public $AuthParam;

    /**
     * @var string Authentication timestamp. it cannot be the same as the value of the authparam field.<br>note: this field is required when authtype is typed.
     */
    public $TimeParam;

    /**
     * @var string Authentication time format. values:.
<Li>Dec: decimal;</li>.
<Li>Hex: hexadecimal.</li>note: this field is required when authtype is typed. the default is hex.
     */
    public $TimeFormat;

    /**
     * @param string $AuthType Authentication type. valid values:.

<Li>TypeA: authentication method a type, for specific meaning please refer to [authentication method a](https://intl.cloud.tencent.com/document/product/1552/109329?from_cn_redirect=1);</li>.
<Li>TypeB: authentication method b type, for specific meaning please refer to [authentication method b](https://intl.cloud.tencent.com/document/product/1552/109330?from_cn_redirect=1);</li>.
<Li>TypeC: authentication method c type, for specific meaning please refer to [authentication method c](https://intl.cloud.tencent.com/document/product/1552/109331?from_cn_redirect=1);</li>.
<Li>TypeD: authentication method d type, for specific meaning please refer to [authentication method d](https://intl.cloud.tencent.com/document/product/1552/109332?from_cn_redirect=1);</li>.
<Li>TypeVOD: authentication method v type, for specific meaning please refer to [authentication method v](https://intl.cloud.tencent.com/document/product/1552/109333?from_cn_redirect=1).</li>.
     * @param string $SecretKey The primary authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
     * @param integer $Timeout Validity period of the authentication url, in seconds, value range: 1–630720000. used to determine if the client access request has expired:.
<Li>If the current time exceeds "timestamp + validity period", it is an expired request, and a 403 is returned directly.</li>.
<Li>If the current time does not exceed "timestamp + validity period", the request is not expired, and the md5 string is further validated.</li> note: when authtype is one of typea, typeb, typec, or typed, this field is required.
     * @param string $BackupSecretKey The backup authentication key consists of 6–40 uppercase and lowercase english letters or digits, and cannot contain " and $.
     * @param string $AuthParam Authentication parameters name. the node will validate the value corresponding to this parameter name. consists of 1-100 uppercase and lowercase letters, numbers, or underscores.<br>note: this field is required when authtype is either typea or typed.
     * @param string $TimeParam Authentication timestamp. it cannot be the same as the value of the authparam field.<br>note: this field is required when authtype is typed.
     * @param string $TimeFormat Authentication time format. values:.
<Li>Dec: decimal;</li>.
<Li>Hex: hexadecimal.</li>note: this field is required when authtype is typed. the default is hex.
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("BackupSecretKey",$param) and $param["BackupSecretKey"] !== null) {
            $this->BackupSecretKey = $param["BackupSecretKey"];
        }

        if (array_key_exists("AuthParam",$param) and $param["AuthParam"] !== null) {
            $this->AuthParam = $param["AuthParam"];
        }

        if (array_key_exists("TimeParam",$param) and $param["TimeParam"] !== null) {
            $this->TimeParam = $param["TimeParam"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }
    }
}
