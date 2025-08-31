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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationDatabases request structure.
 *
 * @method string getInstanceId() Obtain Migration source instance ID, in the format of mssql-si2823jyl.
 * @method void setInstanceId(string $InstanceId) Set Migration source instance ID, in the format of mssql-si2823jyl.
 * @method string getUserName() Obtain Username of the migration source instance.
 * @method void setUserName(string $UserName) Set Username of the migration source instance.
 * @method string getPassword() Obtain Password of the migration source instance.
 * @method void setPassword(string $Password) Set Password of the migration source instance.
 */
class DescribeMigrationDatabasesRequest extends AbstractModel
{
    /**
     * @var string Migration source instance ID, in the format of mssql-si2823jyl.
     */
    public $InstanceId;

    /**
     * @var string Username of the migration source instance.
     */
    public $UserName;

    /**
     * @var string Password of the migration source instance.
     */
    public $Password;

    /**
     * @param string $InstanceId Migration source instance ID, in the format of mssql-si2823jyl.
     * @param string $UserName Username of the migration source instance.
     * @param string $Password Password of the migration source instance.
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
