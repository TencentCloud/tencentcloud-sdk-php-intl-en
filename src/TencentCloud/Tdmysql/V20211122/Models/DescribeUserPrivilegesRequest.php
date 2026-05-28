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
 * DescribeUserPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as tdsql3-5baee8df.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as tdsql3-5baee8df.
 * @method string getHost() Obtain Accessing host allowed for the user. Username+host uniquely determines an account.
 * @method void setHost(string $Host) Set Accessing host allowed for the user. Username+host uniquely determines an account.
 * @method string getUserName() Obtain Login username.
 * @method void setUserName(string $UserName) Set Login username.
 * @method string getDbName() Obtain Database name. If it is \*, query global permission (\*.\*) and ignore the Type and Object parameter.
 * @method void setDbName(string $DbName) Set Database name. If it is \*, query global permission (\*.\*) and ignore the Type and Object parameter.
 * @method string getObject() Obtain The name of the specific Type, for example, when Type is table, it is exactly the table name. If both DbName and Type are function names, Object represents the specific object name and cannot be \* or empty.
 * @method void setObject(string $Object) Set The name of the specific Type, for example, when Type is table, it is exactly the table name. If both DbName and Type are function names, Object represents the specific object name and cannot be \* or empty.
 * @method string getObjectType() Obtain Type, can be set to table, view, proc, func, and \*. When DbName is a specific database name and Type is \*, it queries the database permission (i.e., db.\*), ignoring the Object parameter.
 * @method void setObjectType(string $ObjectType) Set Type, can be set to table, view, proc, func, and \*. When DbName is a specific database name and Type is \*, it queries the database permission (i.e., db.\*), ignoring the Object parameter.
 * @method string getColName() Obtain When Type=table, ColName as \* indicates the permission to query the table. If it is a specific field name, it indicates the permission to query the corresponding field.
 * @method void setColName(string $ColName) Set When Type=table, ColName as \* indicates the permission to query the table. If it is a specific field name, it indicates the permission to query the corresponding field.
 */
class DescribeUserPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as tdsql3-5baee8df.
     */
    public $InstanceId;

    /**
     * @var string Accessing host allowed for the user. Username+host uniquely determines an account.
     */
    public $Host;

    /**
     * @var string Login username.
     */
    public $UserName;

    /**
     * @var string Database name. If it is \*, query global permission (\*.\*) and ignore the Type and Object parameter.
     */
    public $DbName;

    /**
     * @var string The name of the specific Type, for example, when Type is table, it is exactly the table name. If both DbName and Type are function names, Object represents the specific object name and cannot be \* or empty.
     */
    public $Object;

    /**
     * @var string Type, can be set to table, view, proc, func, and \*. When DbName is a specific database name and Type is \*, it queries the database permission (i.e., db.\*), ignoring the Object parameter.
     */
    public $ObjectType;

    /**
     * @var string When Type=table, ColName as \* indicates the permission to query the table. If it is a specific field name, it indicates the permission to query the corresponding field.
     */
    public $ColName;

    /**
     * @param string $InstanceId Instance ID, such as tdsql3-5baee8df.
     * @param string $Host Accessing host allowed for the user. Username+host uniquely determines an account.
     * @param string $UserName Login username.
     * @param string $DbName Database name. If it is \*, query global permission (\*.\*) and ignore the Type and Object parameter.
     * @param string $Object The name of the specific Type, for example, when Type is table, it is exactly the table name. If both DbName and Type are function names, Object represents the specific object name and cannot be \* or empty.
     * @param string $ObjectType Type, can be set to table, view, proc, func, and \*. When DbName is a specific database name and Type is \*, it queries the database permission (i.e., db.\*), ignoring the Object parameter.
     * @param string $ColName When Type=table, ColName as \* indicates the permission to query the table. If it is a specific field name, it indicates the permission to query the corresponding field.
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("ColName",$param) and $param["ColName"] !== null) {
            $this->ColName = $param["ColName"];
        }
    }
}
