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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getUin() 获取Sub-user UIN
 * @method void setUin(integer $Uin) 设置Sub-user UIN
 * @method string getName() 获取Sub-user username
 * @method void setName(string $Name) 设置Sub-user username
 * @method string getPassword() 获取If the combination of input parameters indicates that a random password should be generated, the generated password is returned
 * @method void setPassword(string $Password) 设置If the combination of input parameters indicates that a random password should be generated, the generated password is returned
 * @method string getSecretId() 获取Sub-user’s key ID
 * @method void setSecretId(string $SecretId) 设置Sub-user’s key ID
 * @method string getSecretKey() 获取Sub-user’s secret key
 * @method void setSecretKey(string $SecretKey) 设置Sub-user’s secret key
 * @method integer getUid() 获取Sub-user UID
 * @method void setUid(integer $Uid) 设置Sub-user UID
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *AddUser response structure.
 */
class AddUserResponse extends AbstractModel
{
    /**
     * @var integer Sub-user UIN
     */
    public $Uin;

    /**
     * @var string Sub-user username
     */
    public $Name;

    /**
     * @var string If the combination of input parameters indicates that a random password should be generated, the generated password is returned
     */
    public $Password;

    /**
     * @var string Sub-user’s key ID
     */
    public $SecretId;

    /**
     * @var string Sub-user’s secret key
     */
    public $SecretKey;

    /**
     * @var integer Sub-user UID
     */
    public $Uid;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $Uin Sub-user UIN
     * @param string $Name Sub-user username
     * @param string $Password If the combination of input parameters indicates that a random password should be generated, the generated password is returned
     * @param string $SecretId Sub-user’s key ID
     * @param string $SecretKey Sub-user’s secret key
     * @param integer $Uid Sub-user UID
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
