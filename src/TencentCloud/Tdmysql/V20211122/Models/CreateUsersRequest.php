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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUsers request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method array getUsers() Obtain <p>Add user list</p>
 * @method void setUsers(array $Users) Set <p>Add user list</p>
 * @method string getPassword() Obtain <p>Unencrypted password</p>
 * @method void setPassword(string $Password) Set <p>Unencrypted password</p>
 * @method string getEncryptedPassword() Obtain <p>Encryption password</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) Set <p>Encryption password</p>
 * @method string getDescription() Obtain <p>User description</p>
 * @method void setDescription(string $Description) Set <p>User description</p>
 */
class CreateUsersRequest extends AbstractModel
{
    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Add user list</p>
     */
    public $Users;

    /**
     * @var string <p>Unencrypted password</p>
     */
    public $Password;

    /**
     * @var string <p>Encryption password</p>
     */
    public $EncryptedPassword;

    /**
     * @var string <p>User description</p>
     */
    public $Description;

    /**
     * @param string $InstanceId <p>Instance id</p>
     * @param array $Users <p>Add user list</p>
     * @param string $Password <p>Unencrypted password</p>
     * @param string $EncryptedPassword <p>Encryption password</p>
     * @param string $Description <p>User description</p>
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

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new User();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
