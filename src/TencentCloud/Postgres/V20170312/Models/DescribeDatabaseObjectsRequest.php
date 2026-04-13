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
 * DescribeDatabaseObjects request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getObjectType() Obtain Specifies the object type for querying. supported objects: database, schema, sequence, procedure, type, function, table, view, matview, column.
 * @method void setObjectType(string $ObjectType) Set Specifies the object type for querying. supported objects: database, schema, sequence, procedure, type, function, table, view, matview, column.
 * @method integer getLimit() Obtain Number of items displayed at a time. default 20. value range 0-100.
 * @method void setLimit(integer $Limit) Set Number of items displayed at a time. default 20. value range 0-100.
 * @method integer getOffset() Obtain Data offset, starting from 0.		
 * @method void setOffset(integer $Offset) Set Data offset, starting from 0.		
 * @method string getDatabaseName() Obtain Describes the database the query object belongs to. this parameter is required when the query object type is not database.
 * @method void setDatabaseName(string $DatabaseName) Set Describes the database the query object belongs to. this parameter is required when the query object type is not database.
 * @method string getSchemaName() Obtain Specifies the mode belonging to the query object. this parameter is required when the query object type is not database or schema.
 * @method void setSchemaName(string $SchemaName) Set Specifies the mode belonging to the query object. this parameter is required when the query object type is not database or schema.
 * @method string getTableName() Obtain Specifies the table belonging to the query object. this parameter is required when the query object type is column.
 * @method void setTableName(string $TableName) Set Specifies the table belonging to the query object. this parameter is required when the query object type is column.
 */
class DescribeDatabaseObjectsRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Specifies the object type for querying. supported objects: database, schema, sequence, procedure, type, function, table, view, matview, column.
     */
    public $ObjectType;

    /**
     * @var integer Number of items displayed at a time. default 20. value range 0-100.
     */
    public $Limit;

    /**
     * @var integer Data offset, starting from 0.		
     */
    public $Offset;

    /**
     * @var string Describes the database the query object belongs to. this parameter is required when the query object type is not database.
     */
    public $DatabaseName;

    /**
     * @var string Specifies the mode belonging to the query object. this parameter is required when the query object type is not database or schema.
     */
    public $SchemaName;

    /**
     * @var string Specifies the table belonging to the query object. this parameter is required when the query object type is column.
     */
    public $TableName;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $ObjectType Specifies the object type for querying. supported objects: database, schema, sequence, procedure, type, function, table, view, matview, column.
     * @param integer $Limit Number of items displayed at a time. default 20. value range 0-100.
     * @param integer $Offset Data offset, starting from 0.		
     * @param string $DatabaseName Describes the database the query object belongs to. this parameter is required when the query object type is not database.
     * @param string $SchemaName Specifies the mode belonging to the query object. this parameter is required when the query object type is not database or schema.
     * @param string $TableName Specifies the table belonging to the query object. this parameter is required when the query object type is column.
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

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
