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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRotationPassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
 * @method string getUser() Obtain Instance account name with password rotation disabled, such as root
 * @method void setUser(string $User) Set Instance account name with password rotation disabled, such as root
 * @method string getHost() Obtain Disable the domain name of the instance account with password rotation, such as%
 * @method void setHost(string $Host) Set Disable the domain name of the instance account with password rotation, such as%
 * @method string getPassword() Obtain The latest password of the instance account after disabling password rotation
 * @method void setPassword(string $Password) Set The latest password of the instance account after disabling password rotation
 * @method string getEncryptMethod() Obtain If the input is not null, the password is encrypted.
 * @method void setEncryptMethod(string $EncryptMethod) Set If the input is not null, the password is encrypted.
 */
class DeleteRotationPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var string Instance account name with password rotation disabled, such as root
     */
    public $User;

    /**
     * @var string Disable the domain name of the instance account with password rotation, such as%
     */
    public $Host;

    /**
     * @var string The latest password of the instance account after disabling password rotation
     */
    public $Password;

    /**
     * @var string If the input is not null, the password is encrypted.
     */
    public $EncryptMethod;

    /**
     * @param string $InstanceId Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console.
     * @param string $User Instance account name with password rotation disabled, such as root
     * @param string $Host Disable the domain name of the instance account with password rotation, such as%
     * @param string $Password The latest password of the instance account after disabling password rotation
     * @param string $EncryptMethod If the input is not null, the password is encrypted.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }
    }
}
