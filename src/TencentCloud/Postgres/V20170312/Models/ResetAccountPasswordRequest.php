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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetAccountPassword request structure.
 *
 * @method string getDBInstanceId() Obtain Specifies the instance ID, such as postgres-4wdeb0zv. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Specifies the instance ID, such as postgres-4wdeb0zv. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getUserName() Obtain Instance account name. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109).
 * @method void setUserName(string $UserName) Set Instance account name. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109).
 * @method string getPassword() Obtain Specifies the new password for the UserName account.
Password settings rule specifies the following:.
- valid values: 8 to 32 characters. a password with more than 12 characters is recommended.
- Must not start with "/".
- Must include the following four items:.
Lowercase letters a - z.
Uppercase letters: A - Z.
Digits: 0-9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.
 * @method void setPassword(string $Password) Set Specifies the new password for the UserName account.
Password settings rule specifies the following:.
- valid values: 8 to 32 characters. a password with more than 12 characters is recommended.
- Must not start with "/".
- Must include the following four items:.
Lowercase letters a - z.
Uppercase letters: A - Z.
Digits: 0-9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.
 */
class ResetAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Specifies the instance ID, such as postgres-4wdeb0zv. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Instance account name. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109).
     */
    public $UserName;

    /**
     * @var string Specifies the new password for the UserName account.
Password settings rule specifies the following:.
- valid values: 8 to 32 characters. a password with more than 12 characters is recommended.
- Must not start with "/".
- Must include the following four items:.
Lowercase letters a - z.
Uppercase letters: A - Z.
Digits: 0-9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.
     */
    public $Password;

    /**
     * @param string $DBInstanceId Specifies the instance ID, such as postgres-4wdeb0zv. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $UserName Instance account name. obtain through the api [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109).
     * @param string $Password Specifies the new password for the UserName account.
Password settings rule specifies the following:.
- valid values: 8 to 32 characters. a password with more than 12 characters is recommended.
- Must not start with "/".
- Must include the following four items:.
Lowercase letters a - z.
Uppercase letters: A - Z.
Digits: 0-9.
Special symbols: ()`~!@#$%^&*-+=_|{}[]:<>,.?/.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
