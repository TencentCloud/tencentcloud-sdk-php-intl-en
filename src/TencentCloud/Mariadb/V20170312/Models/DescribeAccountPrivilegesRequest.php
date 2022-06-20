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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the form of `tdsql-ow728lmc`, which can be obtained by querying the instance details through `DescribeDBInstances`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the form of `tdsql-ow728lmc`, which can be obtained by querying the instance details through `DescribeDBInstances`.
 * @method string getUserName() Obtain Login username.
 * @method void setUserName(string $UserName) Set Login username.
 * @method string getHost() Obtain Access host allowed for a user. An account is uniquely identified by username and host.
 * @method void setHost(string $Host) Set Access host allowed for a user. An account is uniquely identified by username and host.
 * @method string getDbName() Obtain Database name. `\*` indicates that global permissions will be queried (i.e., `\*.\*`), in which case the `Type` and `Object ` parameters will be ignored.
 * @method void setDbName(string $DbName) Set Database name. `\*` indicates that global permissions will be queried (i.e., `\*.\*`), in which case the `Type` and `Object ` parameters will be ignored.
 * @method string getType() Obtain Type. Valid values: table, view, proc, func, \*. If `DbName` is a specific database name and `Type` is `\*`, the permissions of the database will be queried (i.e., `db.\*`), in which case the `Object` parameter will be ignored.
 * @method void setType(string $Type) Set Type. Valid values: table, view, proc, func, \*. If `DbName` is a specific database name and `Type` is `\*`, the permissions of the database will be queried (i.e., `db.\*`), in which case the `Object` parameter will be ignored.
 * @method string getObject() Obtain Type name. For example, if `Type` is `table`, `Object` indicates a specific table name; if both `DbName` and `Type` are specific names, it indicates a specific object name and cannot be `\*` or empty.
 * @method void setObject(string $Object) Set Type name. For example, if `Type` is `table`, `Object` indicates a specific table name; if both `DbName` and `Type` are specific names, it indicates a specific object name and cannot be `\*` or empty.
 * @method string getColName() Obtain If `Type` is `table` and `ColName` is `\*`, the permissions of the table will be queried; if `ColName` is a specific field name, the permissions of the corresponding field will be queried.
 * @method void setColName(string $ColName) Set If `Type` is `table` and `ColName` is `\*`, the permissions of the table will be queried; if `ColName` is a specific field name, the permissions of the corresponding field will be queried.
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the form of `tdsql-ow728lmc`, which can be obtained by querying the instance details through `DescribeDBInstances`.
     */
    public $InstanceId;

    /**
     * @var string Login username.
     */
    public $UserName;

    /**
     * @var string Access host allowed for a user. An account is uniquely identified by username and host.
     */
    public $Host;

    /**
     * @var string Database name. `\*` indicates that global permissions will be queried (i.e., `\*.\*`), in which case the `Type` and `Object ` parameters will be ignored.
     */
    public $DbName;

    /**
     * @var string Type. Valid values: table, view, proc, func, \*. If `DbName` is a specific database name and `Type` is `\*`, the permissions of the database will be queried (i.e., `db.\*`), in which case the `Object` parameter will be ignored.
     */
    public $Type;

    /**
     * @var string Type name. For example, if `Type` is `table`, `Object` indicates a specific table name; if both `DbName` and `Type` are specific names, it indicates a specific object name and cannot be `\*` or empty.
     */
    public $Object;

    /**
     * @var string If `Type` is `table` and `ColName` is `\*`, the permissions of the table will be queried; if `ColName` is a specific field name, the permissions of the corresponding field will be queried.
     */
    public $ColName;

    /**
     * @param string $InstanceId Instance ID in the form of `tdsql-ow728lmc`, which can be obtained by querying the instance details through `DescribeDBInstances`.
     * @param string $UserName Login username.
     * @param string $Host Access host allowed for a user. An account is uniquely identified by username and host.
     * @param string $DbName Database name. `\*` indicates that global permissions will be queried (i.e., `\*.\*`), in which case the `Type` and `Object ` parameters will be ignored.
     * @param string $Type Type. Valid values: table, view, proc, func, \*. If `DbName` is a specific database name and `Type` is `\*`, the permissions of the database will be queried (i.e., `db.\*`), in which case the `Object` parameter will be ignored.
     * @param string $Object Type name. For example, if `Type` is `table`, `Object` indicates a specific table name; if both `DbName` and `Type` are specific names, it indicates a specific object name and cannot be `\*` or empty.
     * @param string $ColName If `Type` is `table` and `ColName` is `\*`, the permissions of the table will be queried; if `ColName` is a specific field name, the permissions of the corresponding field will be queried.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("ColName",$param) and $param["ColName"] !== null) {
            $this->ColName = $param["ColName"];
        }
    }
}
