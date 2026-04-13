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
 * ModifyAccountPrivileges request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getUserName() Obtain Modify the permission of this account for a database object. obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1) api.
 * @method void setUserName(string $UserName) Set Modify the permission of this account for a database object. obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1) api.
 * @method array getModifyPrivilegeSet() Obtain Permission information to modify. supports batch modification. the maximum number of modifications per batch is 50.
 * @method void setModifyPrivilegeSet(array $ModifyPrivilegeSet) Set Permission information to modify. supports batch modification. the maximum number of modifications per batch is 50.
 */
class ModifyAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Modify the permission of this account for a database object. obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1) api.
     */
    public $UserName;

    /**
     * @var array Permission information to modify. supports batch modification. the maximum number of modifications per batch is 50.
     */
    public $ModifyPrivilegeSet;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $UserName Modify the permission of this account for a database object. obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/409/18109?from_cn_redirect=1) api.
     * @param array $ModifyPrivilegeSet Permission information to modify. supports batch modification. the maximum number of modifications per batch is 50.
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

        if (array_key_exists("ModifyPrivilegeSet",$param) and $param["ModifyPrivilegeSet"] !== null) {
            $this->ModifyPrivilegeSet = [];
            foreach ($param["ModifyPrivilegeSet"] as $key => $value){
                $obj = new ModifyPrivilege();
                $obj->deserialize($value);
                array_push($this->ModifyPrivilegeSet, $obj);
            }
        }
    }
}
