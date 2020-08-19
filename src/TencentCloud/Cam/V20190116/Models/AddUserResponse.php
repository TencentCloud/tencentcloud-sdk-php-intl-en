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
 * AddUser response structure.
 *
 * @method integer getUin() Obtain Sub-user UIN
 * @method void setUin(integer $Uin) Set Sub-user UIN
 * @method string getName() Obtain Sub-user username
 * @method void setName(string $Name) Set Sub-user username
 * @method string getPassword() Obtain If the combination of input parameters indicates that a random password should be generated, the generated password is returned
 * @method void setPassword(string $Password) Set If the combination of input parameters indicates that a random password should be generated, the generated password is returned
 * @method string getSecretId() Obtain Sub-user's key ID
 * @method void setSecretId(string $SecretId) Set Sub-user's key ID
 * @method string getSecretKey() Obtain Sub-user's secret key
 * @method void setSecretKey(string $SecretKey) Set Sub-user's secret key
 * @method integer getUid() Obtain Sub-user UID
 * @method void setUid(integer $Uid) Set Sub-user UID
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
     * @var string Sub-user's key ID
     */
    public $SecretId;

    /**
     * @var string Sub-user's secret key
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
     * @param string $SecretId Sub-user's key ID
     * @param string $SecretKey Sub-user's secret key
     * @param integer $Uid Sub-user UID
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
