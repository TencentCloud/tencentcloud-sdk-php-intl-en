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
 * Specifies the permission list of the specified account for the database object.
 *
 * @method DatabaseObject getObject() Obtain The database object. when ObjectType is database, DatabaseName/SchemaName/TableName can be empty. when ObjectType is schema, SchemaName/TableName can be empty. when ObjectType is column, TableName cannot be empty. other cases can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObject(DatabaseObject $Object) Set The database object. when ObjectType is database, DatabaseName/SchemaName/TableName can be empty. when ObjectType is schema, SchemaName/TableName can be empty. when ObjectType is column, TableName cannot be empty. other cases can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPrivilegeSet() Obtain Specifies the permission list of the specified account for the database object.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivilegeSet(array $PrivilegeSet) Set Specifies the permission list of the specified account for the database object.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DatabasePrivilege extends AbstractModel
{
    /**
     * @var DatabaseObject The database object. when ObjectType is database, DatabaseName/SchemaName/TableName can be empty. when ObjectType is schema, SchemaName/TableName can be empty. when ObjectType is column, TableName cannot be empty. other cases can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Object;

    /**
     * @var array Specifies the permission list of the specified account for the database object.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivilegeSet;

    /**
     * @param DatabaseObject $Object The database object. when ObjectType is database, DatabaseName/SchemaName/TableName can be empty. when ObjectType is schema, SchemaName/TableName can be empty. when ObjectType is column, TableName cannot be empty. other cases can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PrivilegeSet Specifies the permission list of the specified account for the database object.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = new DatabaseObject();
            $this->Object->deserialize($param["Object"]);
        }

        if (array_key_exists("PrivilegeSet",$param) and $param["PrivilegeSet"] !== null) {
            $this->PrivilegeSet = $param["PrivilegeSet"];
        }
    }
}
