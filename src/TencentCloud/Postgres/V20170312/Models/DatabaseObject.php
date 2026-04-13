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
 * Describes the type of a certain object in the database, and the database, mode, and table of the object.
 *
 * @method string getObjectType() Obtain Specifies the supported object types in the database: account, database, schema, sequence, procedure, type, function, table, view, matview, column.
 * @method void setObjectType(string $ObjectType) Set Specifies the supported object types in the database: account, database, schema, sequence, procedure, type, function, table, view, matview, column.
 * @method string getObjectName() Obtain Specifies the database object name.
 * @method void setObjectName(string $ObjectName) Set Specifies the database object name.
 * @method string getDatabaseName() Obtain Describes the database object and the database name it belongs to. this parameter is required when the description object type is not database.
 * @method void setDatabaseName(string $DatabaseName) Set Describes the database object and the database name it belongs to. this parameter is required when the description object type is not database.
 * @method string getSchemaName() Obtain Specifies the schema name of the database object to describe. this parameter is required when the description object is not database or schema.
 * @method void setSchemaName(string $SchemaName) Set Specifies the schema name of the database object to describe. this parameter is required when the description object is not database or schema.
 * @method string getTableName() Obtain Specifies the database object to describe and the table name it belongs to. this parameter is required when the object type is column.
 * @method void setTableName(string $TableName) Set Specifies the database object to describe and the table name it belongs to. this parameter is required when the object type is column.
 */
class DatabaseObject extends AbstractModel
{
    /**
     * @var string Specifies the supported object types in the database: account, database, schema, sequence, procedure, type, function, table, view, matview, column.
     */
    public $ObjectType;

    /**
     * @var string Specifies the database object name.
     */
    public $ObjectName;

    /**
     * @var string Describes the database object and the database name it belongs to. this parameter is required when the description object type is not database.
     */
    public $DatabaseName;

    /**
     * @var string Specifies the schema name of the database object to describe. this parameter is required when the description object is not database or schema.
     */
    public $SchemaName;

    /**
     * @var string Specifies the database object to describe and the table name it belongs to. this parameter is required when the object type is column.
     */
    public $TableName;

    /**
     * @param string $ObjectType Specifies the supported object types in the database: account, database, schema, sequence, procedure, type, function, table, view, matview, column.
     * @param string $ObjectName Specifies the database object name.
     * @param string $DatabaseName Describes the database object and the database name it belongs to. this parameter is required when the description object type is not database.
     * @param string $SchemaName Specifies the schema name of the database object to describe. this parameter is required when the description object is not database or schema.
     * @param string $TableName Specifies the database object to describe and the table name it belongs to. this parameter is required when the object type is column.
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
        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
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
