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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceRoles request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getDatabase() Obtain <p>Database name. If it is empty, query the role of all databases.</p>
 * @method void setDatabase(string $Database) Set <p>Database name. If it is empty, query the role of all databases.</p>
 * @method array getRoleType() Obtain <p>Role type: builtin_database - built-in database role, builtin_cluster - built-in cluster role, custom - custom role. Query all if left empty.</p>
 * @method void setRoleType(array $RoleType) Set <p>Role type: builtin_database - built-in database role, builtin_cluster - built-in cluster role, custom - custom role. Query all if left empty.</p>
 * @method string getRoleName() Obtain <p>Role name. Query all roles if left empty.</p>
 * @method void setRoleName(string $RoleName) Set <p>Role name. Query all roles if left empty.</p>
 * @method string getSearchKey() Obtain <p>Common search keywords, fuzzy match inheritable roles and permissions relevant database name, role name, Action name, etc.</p>
 * @method void setSearchKey(string $SearchKey) Set <p>Common search keywords, fuzzy match inheritable roles and permissions relevant database name, role name, Action name, etc.</p>
 * @method string getOrderBy() Obtain <p>Sorting field, supports: RoleName, defaults to RoleName</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field, supports: RoleName, defaults to RoleName</p>
 * @method string getOrderType() Obtain <p>Sorting method: asc-ascending, desc-descending, defaults to asc</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting method: asc-ascending, desc-descending, defaults to asc</p>
 * @method integer getOffset() Obtain <p>Pagination offset, defaults to 0</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset, defaults to 0</p>
 * @method integer getLimit() Obtain <p>Number of items per page. Default: 20. Maximum: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page. Default: 20. Maximum: 100.</p>
 */
class DescribeInstanceRolesRequest extends AbstractModel
{
    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Database name. If it is empty, query the role of all databases.</p>
     */
    public $Database;

    /**
     * @var array <p>Role type: builtin_database - built-in database role, builtin_cluster - built-in cluster role, custom - custom role. Query all if left empty.</p>
     */
    public $RoleType;

    /**
     * @var string <p>Role name. Query all roles if left empty.</p>
     */
    public $RoleName;

    /**
     * @var string <p>Common search keywords, fuzzy match inheritable roles and permissions relevant database name, role name, Action name, etc.</p>
     */
    public $SearchKey;

    /**
     * @var string <p>Sorting field, supports: RoleName, defaults to RoleName</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting method: asc-ascending, desc-descending, defaults to asc</p>
     */
    public $OrderType;

    /**
     * @var integer <p>Pagination offset, defaults to 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page. Default: 20. Maximum: 100.</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>Instance id</p>
     * @param string $Database <p>Database name. If it is empty, query the role of all databases.</p>
     * @param array $RoleType <p>Role type: builtin_database - built-in database role, builtin_cluster - built-in cluster role, custom - custom role. Query all if left empty.</p>
     * @param string $RoleName <p>Role name. Query all roles if left empty.</p>
     * @param string $SearchKey <p>Common search keywords, fuzzy match inheritable roles and permissions relevant database name, role name, Action name, etc.</p>
     * @param string $OrderBy <p>Sorting field, supports: RoleName, defaults to RoleName</p>
     * @param string $OrderType <p>Sorting method: asc-ascending, desc-descending, defaults to asc</p>
     * @param integer $Offset <p>Pagination offset, defaults to 0</p>
     * @param integer $Limit <p>Number of items per page. Default: 20. Maximum: 100.</p>
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
