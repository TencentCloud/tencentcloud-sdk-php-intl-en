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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission overview
 *
 * @method array getGlobalPermissions() Obtain A list of user permissions in the global scope, which can be applied to all databases and tables.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGlobalPermissions(array $GlobalPermissions) Set A list of user permissions in the global scope, which can be applied to all databases and tables.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDatabasePermissions() Obtain The key is the database name, and the value is the permission list of the user on the database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabasePermissions(array $DatabasePermissions) Set The key is the database name, and the value is the permission list of the user on the database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTablePermissions() Obtain The key is the full name of the table, and the value is the permission list of the user on the table.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTablePermissions(array $TablePermissions) Set The key is the full name of the table, and the value is the permission list of the user on the table.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCatalogPermissions() Obtain The key is the full name of the catalog, and the value is the permission list of the user on the catalog.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCatalogPermissions(array $CatalogPermissions) Set The key is the full name of the catalog, and the value is the permission list of the user on the catalog.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class PermissionHostInfo extends AbstractModel
{
    /**
     * @var array A list of user permissions in the global scope, which can be applied to all databases and tables.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GlobalPermissions;

    /**
     * @var array The key is the database name, and the value is the permission list of the user on the database.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabasePermissions;

    /**
     * @var array The key is the full name of the table, and the value is the permission list of the user on the table.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TablePermissions;

    /**
     * @var array The key is the full name of the catalog, and the value is the permission list of the user on the catalog.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CatalogPermissions;

    /**
     * @param array $GlobalPermissions A list of user permissions in the global scope, which can be applied to all databases and tables.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DatabasePermissions The key is the database name, and the value is the permission list of the user on the database.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TablePermissions The key is the full name of the table, and the value is the permission list of the user on the table.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CatalogPermissions The key is the full name of the catalog, and the value is the permission list of the user on the catalog.

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
        if (array_key_exists("GlobalPermissions",$param) and $param["GlobalPermissions"] !== null) {
            $this->GlobalPermissions = $param["GlobalPermissions"];
        }

        if (array_key_exists("DatabasePermissions",$param) and $param["DatabasePermissions"] !== null) {
            $this->DatabasePermissions = [];
            foreach ($param["DatabasePermissions"] as $key => $value){
                $obj = new DatabasePermissions();
                $obj->deserialize($value);
                array_push($this->DatabasePermissions, $obj);
            }
        }

        if (array_key_exists("TablePermissions",$param) and $param["TablePermissions"] !== null) {
            $this->TablePermissions = [];
            foreach ($param["TablePermissions"] as $key => $value){
                $obj = new TablePermissions();
                $obj->deserialize($value);
                array_push($this->TablePermissions, $obj);
            }
        }

        if (array_key_exists("CatalogPermissions",$param) and $param["CatalogPermissions"] !== null) {
            $this->CatalogPermissions = [];
            foreach ($param["CatalogPermissions"] as $key => $value){
                $obj = new CatalogPermission();
                $obj->deserialize($value);
                array_push($this->CatalogPermissions, $obj);
            }
        }
    }
}
