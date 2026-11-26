<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Token authentication configuration parameters.
 *
 * @method string getAuthType() Obtain Authentication type. Valid values:

<li>TypeA: authentication method type A. For its specific meaning, refer to [Authentication Method A](https://www.tencentcloud.com/document/product/1552/109329?from_cn_redirect=1);</li>
<li>TypeB: authentication method B type. For its specific meaning, refer to [Authentication Method B](https://www.tencentcloud.com/document/product/1552/109330?from_cn_redirect=1);</li>
<li>TypeC: authentication method C type. For its specific meaning, refer to [Authentication Method C](https://www.tencentcloud.com/document/product/1552/109331?from_cn_redirect=1);</li>
<li>TypeD: authentication method D type. For its specific meaning, refer to [Authentication Method D](https://www.tencentcloud.com/document/product/1552/109332?from_cn_redirect=1);</li>
<li>TypeVOD: authentication method V type. For its specific meaning, refer to [Authentication Method V](https://www.tencentcloud.com/document/product/1552/109333?from_cn_redirect=1).</li>
 * @method void setAuthType(string $AuthType) Set Authentication type. Valid values:

<li>TypeA: authentication method type A. For its specific meaning, refer to [Authentication Method A](https://www.tencentcloud.com/document/product/1552/109329?from_cn_redirect=1);</li>
<li>TypeB: authentication method B type. For its specific meaning, refer to [Authentication Method B](https://www.tencentcloud.com/document/product/1552/109330?from_cn_redirect=1);</li>
<li>TypeC: authentication method C type. For its specific meaning, refer to [Authentication Method C](https://www.tencentcloud.com/document/product/1552/109331?from_cn_redirect=1);</li>
<li>TypeD: authentication method D type. For its specific meaning, refer to [Authentication Method D](https://www.tencentcloud.com/document/product/1552/109332?from_cn_redirect=1);</li>
<li>TypeVOD: authentication method V type. For its specific meaning, refer to [Authentication Method V](https://www.tencentcloud.com/document/product/1552/109333?from_cn_redirect=1).</li>
 * @method string getSecretKey() Obtain Primary authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
 * @method void setSecretKey(string $SecretKey) Set Primary authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
 * @method integer getTimeout() Obtain Valid duration of the authentication URL, in seconds. Value range: 1–630720000. It is used to determine whether the client access request is expired:
<li>If the current time exceeds the "timestamp + valid duration" time, the request is expired and 403 is returned directly.</li>
<li>If the current time has not exceeded the "timestamp + valid duration" time, the request is not expired. Proceed to validate the md5 string.</li>Note: This field is required when AuthType is one of TypeA, TypeB, TypeC, or TypeD.
 * @method void setTimeout(integer $Timeout) Set Valid duration of the authentication URL, in seconds. Value range: 1–630720000. It is used to determine whether the client access request is expired:
<li>If the current time exceeds the "timestamp + valid duration" time, the request is expired and 403 is returned directly.</li>
<li>If the current time has not exceeded the "timestamp + valid duration" time, the request is not expired. Proceed to validate the md5 string.</li>Note: This field is required when AuthType is one of TypeA, TypeB, TypeC, or TypeD.
 * @method string getBackupSecretKey() Obtain Backup authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
 * @method void setBackupSecretKey(string $BackupSecretKey) Set Backup authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
 * @method string getAuthParam() Obtain Authentication parameter name. The node will validate the value corresponding to this parameter name. It consists of 1–100 upper- and lower-case letters, digits, or underscores.<br>Note: This field is required when AuthType is one of TypeA and TypeD.
 * @method void setAuthParam(string $AuthParam) Set Authentication parameter name. The node will validate the value corresponding to this parameter name. It consists of 1–100 upper- and lower-case letters, digits, or underscores.<br>Note: This field is required when AuthType is one of TypeA and TypeD.
 * @method string getTimeParam() Obtain Authentication timestamp. It cannot be the same as the AuthParam field value.<br>Note: This field is required when AuthType is TypeD.
 * @method void setTimeParam(string $TimeParam) Set Authentication timestamp. It cannot be the same as the AuthParam field value.<br>Note: This field is required when AuthType is TypeD.
 * @method string getTimeFormat() Obtain Authentication time format. Valid values:
<li>dec: decimal;</li>
<li>hex: hexadecimal.</li>Note: This field is required when AuthType is TypeD. Default value: hex.
 * @method void setTimeFormat(string $TimeFormat) Set Authentication time format. Valid values:
<li>dec: decimal;</li>
<li>hex: hexadecimal.</li>Note: This field is required when AuthType is TypeD. Default value: hex.
 */
class AuthenticationParameters extends AbstractModel
{
    /**
     * @var string Authentication type. Valid values:

<li>TypeA: authentication method type A. For its specific meaning, refer to [Authentication Method A](https://www.tencentcloud.com/document/product/1552/109329?from_cn_redirect=1);</li>
<li>TypeB: authentication method B type. For its specific meaning, refer to [Authentication Method B](https://www.tencentcloud.com/document/product/1552/109330?from_cn_redirect=1);</li>
<li>TypeC: authentication method C type. For its specific meaning, refer to [Authentication Method C](https://www.tencentcloud.com/document/product/1552/109331?from_cn_redirect=1);</li>
<li>TypeD: authentication method D type. For its specific meaning, refer to [Authentication Method D](https://www.tencentcloud.com/document/product/1552/109332?from_cn_redirect=1);</li>
<li>TypeVOD: authentication method V type. For its specific meaning, refer to [Authentication Method V](https://www.tencentcloud.com/document/product/1552/109333?from_cn_redirect=1).</li>
     */
    public $AuthType;

    /**
     * @var string Primary authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
     */
    public $SecretKey;

    /**
     * @var integer Valid duration of the authentication URL, in seconds. Value range: 1–630720000. It is used to determine whether the client access request is expired:
<li>If the current time exceeds the "timestamp + valid duration" time, the request is expired and 403 is returned directly.</li>
<li>If the current time has not exceeded the "timestamp + valid duration" time, the request is not expired. Proceed to validate the md5 string.</li>Note: This field is required when AuthType is one of TypeA, TypeB, TypeC, or TypeD.
     */
    public $Timeout;

    /**
     * @var string Backup authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
     */
    public $BackupSecretKey;

    /**
     * @var string Authentication parameter name. The node will validate the value corresponding to this parameter name. It consists of 1–100 upper- and lower-case letters, digits, or underscores.<br>Note: This field is required when AuthType is one of TypeA and TypeD.
     */
    public $AuthParam;

    /**
     * @var string Authentication timestamp. It cannot be the same as the AuthParam field value.<br>Note: This field is required when AuthType is TypeD.
     */
    public $TimeParam;

    /**
     * @var string Authentication time format. Valid values:
<li>dec: decimal;</li>
<li>hex: hexadecimal.</li>Note: This field is required when AuthType is TypeD. Default value: hex.
     */
    public $TimeFormat;

    /**
     * @param string $AuthType Authentication type. Valid values:

<li>TypeA: authentication method type A. For its specific meaning, refer to [Authentication Method A](https://www.tencentcloud.com/document/product/1552/109329?from_cn_redirect=1);</li>
<li>TypeB: authentication method B type. For its specific meaning, refer to [Authentication Method B](https://www.tencentcloud.com/document/product/1552/109330?from_cn_redirect=1);</li>
<li>TypeC: authentication method C type. For its specific meaning, refer to [Authentication Method C](https://www.tencentcloud.com/document/product/1552/109331?from_cn_redirect=1);</li>
<li>TypeD: authentication method D type. For its specific meaning, refer to [Authentication Method D](https://www.tencentcloud.com/document/product/1552/109332?from_cn_redirect=1);</li>
<li>TypeVOD: authentication method V type. For its specific meaning, refer to [Authentication Method V](https://www.tencentcloud.com/document/product/1552/109333?from_cn_redirect=1).</li>
     * @param string $SecretKey Primary authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
     * @param integer $Timeout Valid duration of the authentication URL, in seconds. Value range: 1–630720000. It is used to determine whether the client access request is expired:
<li>If the current time exceeds the "timestamp + valid duration" time, the request is expired and 403 is returned directly.</li>
<li>If the current time has not exceeded the "timestamp + valid duration" time, the request is not expired. Proceed to validate the md5 string.</li>Note: This field is required when AuthType is one of TypeA, TypeB, TypeC, or TypeD.
     * @param string $BackupSecretKey Backup authentication key. It contains 6–40 uppercase/lowercase letters or digits and cannot contain " or $.
     * @param string $AuthParam Authentication parameter name. The node will validate the value corresponding to this parameter name. It consists of 1–100 upper- and lower-case letters, digits, or underscores.<br>Note: This field is required when AuthType is one of TypeA and TypeD.
     * @param string $TimeParam Authentication timestamp. It cannot be the same as the AuthParam field value.<br>Note: This field is required when AuthType is TypeD.
     * @param string $TimeFormat Authentication time format. Valid values:
<li>dec: decimal;</li>
<li>hex: hexadecimal.</li>Note: This field is required when AuthType is TypeD. Default value: hex.
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
