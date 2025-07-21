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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes login settings of an instance.
 *
 * @method string getPassword() Obtain Instance login password. The password complexity requirements vary according to the operating system type. The details are as follows:
- For a Linux system, the password should contain 8 to 30 characters consisting of at least two of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- For a Windows system, the password should contain 12 to 30 characters consisting of at least three of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- If this parameter is not specified, the system will generate a random password and notify the user via the message centerSupported special characters: ( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? /
 * @method void setPassword(string $Password) Set Instance login password. The password complexity requirements vary according to the operating system type. The details are as follows:
- For a Linux system, the password should contain 8 to 30 characters consisting of at least two of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- For a Windows system, the password should contain 12 to 30 characters consisting of at least three of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- If this parameter is not specified, the system will generate a random password and notify the user via the message centerSupported special characters: ( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? /
 * @method array getKeyIds() Obtain List of key ids. after associating a key, you can access the instance through the corresponding private key. KeyId can be obtained by calling the api [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1). key and password cannot be specified simultaneously. the Windows operating system does not support specifying a key. currently, only one key can be specified during purchase.
 * @method void setKeyIds(array $KeyIds) Set List of key ids. after associating a key, you can access the instance through the corresponding private key. KeyId can be obtained by calling the api [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1). key and password cannot be specified simultaneously. the Windows operating system does not support specifying a key. currently, only one key can be specified during purchase.
 * @method boolean getKeepImageLogin() Obtain Retain the original settings of the image. This parameter cannot be specified simultaneously with Password or KeyIds.N. It can only be set to TRUE when you create an instance by using a custom image, shared image, or externally imported image. Valid values:
<li>TRUE: Retain the login settings of the image.</li>
<li>FALSE: Do not retain the login settings of the image.</li> Default value: FALSE.
 * @method void setKeepImageLogin(boolean $KeepImageLogin) Set Retain the original settings of the image. This parameter cannot be specified simultaneously with Password or KeyIds.N. It can only be set to TRUE when you create an instance by using a custom image, shared image, or externally imported image. Valid values:
<li>TRUE: Retain the login settings of the image.</li>
<li>FALSE: Do not retain the login settings of the image.</li> Default value: FALSE.
 */
class LoginSettings extends AbstractModel
{
    /**
     * @var string Instance login password. The password complexity requirements vary according to the operating system type. The details are as follows:
- For a Linux system, the password should contain 8 to 30 characters consisting of at least two of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- For a Windows system, the password should contain 12 to 30 characters consisting of at least three of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- If this parameter is not specified, the system will generate a random password and notify the user via the message centerSupported special characters: ( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? /
     */
    public $Password;

    /**
     * @var array List of key ids. after associating a key, you can access the instance through the corresponding private key. KeyId can be obtained by calling the api [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1). key and password cannot be specified simultaneously. the Windows operating system does not support specifying a key. currently, only one key can be specified during purchase.
     */
    public $KeyIds;

    /**
     * @var boolean Retain the original settings of the image. This parameter cannot be specified simultaneously with Password or KeyIds.N. It can only be set to TRUE when you create an instance by using a custom image, shared image, or externally imported image. Valid values:
<li>TRUE: Retain the login settings of the image.</li>
<li>FALSE: Do not retain the login settings of the image.</li> Default value: FALSE.
     */
    public $KeepImageLogin;

    /**
     * @param string $Password Instance login password. The password complexity requirements vary according to the operating system type. The details are as follows:
- For a Linux system, the password should contain 8 to 30 characters consisting of at least two of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- For a Windows system, the password should contain 12 to 30 characters consisting of at least three of the four character types: lowercase letters, uppercase letters, digits, and special characters.
- If this parameter is not specified, the system will generate a random password and notify the user via the message centerSupported special characters: ( ) ` ~ ! @ # $ % ^ & * - + = | { } [ ] : ; ' , . ? /
     * @param array $KeyIds List of key ids. after associating a key, you can access the instance through the corresponding private key. KeyId can be obtained by calling the api [DescribeKeyPairs](https://intl.cloud.tencent.com/document/api/213/15699?from_cn_redirect=1). key and password cannot be specified simultaneously. the Windows operating system does not support specifying a key. currently, only one key can be specified during purchase.
     * @param boolean $KeepImageLogin Retain the original settings of the image. This parameter cannot be specified simultaneously with Password or KeyIds.N. It can only be set to TRUE when you create an instance by using a custom image, shared image, or externally imported image. Valid values:
<li>TRUE: Retain the login settings of the image.</li>
<li>FALSE: Do not retain the login settings of the image.</li> Default value: FALSE.
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
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            $this->KeepImageLogin = $param["KeepImageLogin"];
        }
    }
}
