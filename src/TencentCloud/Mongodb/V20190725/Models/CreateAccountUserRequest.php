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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccountUser request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), and copy the instance ID from the instance list.
 * @method string getUserName() Obtain New account name. The format requirements are as follows:
- The value range for the character length is [1, 64].
- Allowed characters include uppercase letters, lowercase letters, digits (1–9), underscores (\_), and hyphens (-).
 * @method void setUserName(string $UserName) Set New account name. The format requirements are as follows:
- The value range for the character length is [1, 64].
- Allowed characters include uppercase letters, lowercase letters, digits (1–9), underscores (\_), and hyphens (-).
 * @method string getPassword() Obtain New account password. The password complexity requirements are as follows:
- The value range for the character length is [8, 32].
- It should include at least two of the following: letters, digits, and special characters (the exclamation mark (!), at sign (@), number sign (#), percent sign (%), caret (^), asterisk (*), parentheses (), and underscore (_)).
 * @method void setPassword(string $Password) Set New account password. The password complexity requirements are as follows:
- The value range for the character length is [8, 32].
- It should include at least two of the following: letters, digits, and special characters (the exclamation mark (!), at sign (@), number sign (#), percent sign (%), caret (^), asterisk (*), parentheses (), and underscore (_)).
 * @method string getMongoUserPassword() Obtain Password corresponding to the mongouser account. mongouser is the default account of the system; it indicates the password set during instance creation.
 * @method void setMongoUserPassword(string $MongoUserPassword) Set Password corresponding to the mongouser account. mongouser is the default account of the system; it indicates the password set during instance creation.
 * @method string getUserDesc() Obtain Account remarks.
 * @method void setUserDesc(string $UserDesc) Set Account remarks.
 * @method array getAuthRole() Obtain Read/Write permission information of the account.
 * @method void setAuthRole(array $AuthRole) Set Read/Write permission information of the account.
 */
class CreateAccountUserRequest extends AbstractModel
{
    /**
     * @var string Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string New account name. The format requirements are as follows:
- The value range for the character length is [1, 64].
- Allowed characters include uppercase letters, lowercase letters, digits (1–9), underscores (\_), and hyphens (-).
     */
    public $UserName;

    /**
     * @var string New account password. The password complexity requirements are as follows:
- The value range for the character length is [8, 32].
- It should include at least two of the following: letters, digits, and special characters (the exclamation mark (!), at sign (@), number sign (#), percent sign (%), caret (^), asterisk (*), parentheses (), and underscore (_)).
     */
    public $Password;

    /**
     * @var string Password corresponding to the mongouser account. mongouser is the default account of the system; it indicates the password set during instance creation.
     */
    public $MongoUserPassword;

    /**
     * @var string Account remarks.
     */
    public $UserDesc;

    /**
     * @var array Read/Write permission information of the account.
     */
    public $AuthRole;

    /**
     * @param string $InstanceId Instance ID. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB), and copy the instance ID from the instance list.
     * @param string $UserName New account name. The format requirements are as follows:
- The value range for the character length is [1, 64].
- Allowed characters include uppercase letters, lowercase letters, digits (1–9), underscores (\_), and hyphens (-).
     * @param string $Password New account password. The password complexity requirements are as follows:
- The value range for the character length is [8, 32].
- It should include at least two of the following: letters, digits, and special characters (the exclamation mark (!), at sign (@), number sign (#), percent sign (%), caret (^), asterisk (*), parentheses (), and underscore (_)).
     * @param string $MongoUserPassword Password corresponding to the mongouser account. mongouser is the default account of the system; it indicates the password set during instance creation.
     * @param string $UserDesc Account remarks.
     * @param array $AuthRole Read/Write permission information of the account.
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("MongoUserPassword",$param) and $param["MongoUserPassword"] !== null) {
            $this->MongoUserPassword = $param["MongoUserPassword"];
        }

        if (array_key_exists("UserDesc",$param) and $param["UserDesc"] !== null) {
            $this->UserDesc = $param["UserDesc"];
        }

        if (array_key_exists("AuthRole",$param) and $param["AuthRole"] !== null) {
            $this->AuthRole = [];
            foreach ($param["AuthRole"] as $key => $value){
                $obj = new Auth();
                $obj->deserialize($value);
                array_push($this->AuthRole, $obj);
            }
        }
    }
}
