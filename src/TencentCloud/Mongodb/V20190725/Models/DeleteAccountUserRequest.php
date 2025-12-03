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
 * DeleteAccountUser request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID for the account to be deleted. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID for the account to be deleted. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

 * @method string getUserName() Obtain Configures the name of the account to be deleted.
 * @method void setUserName(string $UserName) Set Configures the name of the account to be deleted.
 * @method string getMongoUserPassword() Obtain Configures the password corresponding to the mongouser account. mongouser is the default account of the system. Enter the password corresponding to it.
 * @method void setMongoUserPassword(string $MongoUserPassword) Set Configures the password corresponding to the mongouser account. mongouser is the default account of the system. Enter the password corresponding to it.
 */
class DeleteAccountUserRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID for the account to be deleted. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

     */
    public $InstanceId;

    /**
     * @var string Configures the name of the account to be deleted.
     */
    public $UserName;

    /**
     * @var string Configures the password corresponding to the mongouser account. mongouser is the default account of the system. Enter the password corresponding to it.
     */
    public $MongoUserPassword;

    /**
     * @param string $InstanceId Specifies the instance ID for the account to be deleted. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.

     * @param string $UserName Configures the name of the account to be deleted.
     * @param string $MongoUserPassword Configures the password corresponding to the mongouser account. mongouser is the default account of the system. Enter the password corresponding to it.
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

        if (array_key_exists("MongoUserPassword",$param) and $param["MongoUserPassword"] !== null) {
            $this->MongoUserPassword = $param["MongoUserPassword"];
        }
    }
}
