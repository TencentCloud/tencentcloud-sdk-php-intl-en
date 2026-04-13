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
 * DescribeAccountPrivileges request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
 * @method string getUserName() Obtain Describes the permissions owned by this account for a database object. the account name can be obtained through the [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109?lang=en) api.
 * @method void setUserName(string $UserName) Set Describes the permissions owned by this account for a database object. the account name can be obtained through the [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109?lang=en) api.
 * @method array getDatabaseObjectSet() Obtain Specifies the database object information to query.
 * @method void setDatabaseObjectSet(array $DatabaseObjectSet) Set Specifies the database object information to query.
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     */
    public $DBInstanceId;

    /**
     * @var string Describes the permissions owned by this account for a database object. the account name can be obtained through the [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109?lang=en) api.
     */
    public $UserName;

    /**
     * @var array Specifies the database object information to query.
     */
    public $DatabaseObjectSet;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/product/409/16773?lang=en).
     * @param string $UserName Describes the permissions owned by this account for a database object. the account name can be obtained through the [DescribeAccounts](https://www.tencentcloud.com/document/product/409/18109?lang=en) api.
     * @param array $DatabaseObjectSet Specifies the database object information to query.
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

        if (array_key_exists("DatabaseObjectSet",$param) and $param["DatabaseObjectSet"] !== null) {
            $this->DatabaseObjectSet = [];
            foreach ($param["DatabaseObjectSet"] as $key => $value){
                $obj = new DatabaseObject();
                $obj->deserialize($value);
                array_push($this->DatabaseObjectSet, $obj);
            }
        }
    }
}
