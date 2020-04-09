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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetAccountPassword request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-4wdeb0zv
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-4wdeb0zv
 * @method string getUserName() Obtain Instance account name
 * @method void setUserName(string $UserName) Set Instance account name
 * @method string getPassword() Obtain New password corresponding to `UserName` account
 * @method void setPassword(string $Password) Set New password corresponding to `UserName` account
 */
class ResetAccountPasswordRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-4wdeb0zv
     */
    public $DBInstanceId;

    /**
     * @var string Instance account name
     */
    public $UserName;

    /**
     * @var string New password corresponding to `UserName` account
     */
    public $Password;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-4wdeb0zv
     * @param string $UserName Instance account name
     * @param string $Password New password corresponding to `UserName` account
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
