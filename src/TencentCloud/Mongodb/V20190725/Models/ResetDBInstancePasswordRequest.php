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
 * ResetDBInstancePassword request structure.
 *
 * @method string getInstanceId() Obtain Specifies the instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specifies the instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method string getUserName() Obtain Specifies the account name for which the password needs to be changed. The [DescribeAccountUsers](https://www.tencentcloud.comom/document/product/240/80800?from_cn_redirect=1) API can be called to obtain the account list and copy the account name for which the password needs to be changed.
 * @method void setUserName(string $UserName) Set Specifies the account name for which the password needs to be changed. The [DescribeAccountUsers](https://www.tencentcloud.comom/document/product/240/80800?from_cn_redirect=1) API can be called to obtain the account list and copy the account name for which the password needs to be changed.
 * @method string getPassword() Obtain Specifies a new password for the account. Password complexity requirements:
- It should contain 8–32 characters.
- It should contain at least two types of the following: letters, digits, and special characters (!@#%^\*()\_).
 * @method void setPassword(string $Password) Set Specifies a new password for the account. Password complexity requirements:
- It should contain 8–32 characters.
- It should contain at least two types of the following: letters, digits, and special characters (!@#%^\*()\_).
 */
class ResetDBInstancePasswordRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Specifies the account name for which the password needs to be changed. The [DescribeAccountUsers](https://www.tencentcloud.comom/document/product/240/80800?from_cn_redirect=1) API can be called to obtain the account list and copy the account name for which the password needs to be changed.
     */
    public $UserName;

    /**
     * @var string Specifies a new password for the account. Password complexity requirements:
- It should contain 8–32 characters.
- It should contain at least two types of the following: letters, digits, and special characters (!@#%^\*()\_).
     */
    public $Password;

    /**
     * @param string $InstanceId Specifies the instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param string $UserName Specifies the account name for which the password needs to be changed. The [DescribeAccountUsers](https://www.tencentcloud.comom/document/product/240/80800?from_cn_redirect=1) API can be called to obtain the account list and copy the account name for which the password needs to be changed.
     * @param string $Password Specifies a new password for the account. Password complexity requirements:
- It should contain 8–32 characters.
- It should contain at least two types of the following: letters, digits, and special characters (!@#%^\*()\_).
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
    }
}
