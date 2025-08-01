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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPassword request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getName() Obtain Username
 * @method void setName(string $Name) Set Username
 * @method string getPassword() Obtain Current user password
 * @method void setPassword(string $Password) Set Current user password
 * @method string getPasswordNew() Obtain New user password
 * @method void setPasswordNew(string $PasswordNew) Set New user password
 */
class ModifyPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Username
     */
    public $Name;

    /**
     * @var string Current user password
     */
    public $Password;

    /**
     * @var string New user password
     */
    public $PasswordNew;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Name Username
     * @param string $Password Current user password
     * @param string $PasswordNew New user password
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PasswordNew",$param) and $param["PasswordNew"] !== null) {
            $this->PasswordNew = $param["PasswordNew"];
        }
    }
}
