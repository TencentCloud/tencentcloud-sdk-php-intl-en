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
 * DescribeInstanceUsers request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getUserName() Obtain <p>userName. If left empty, query all users</p>
 * @method void setUserName(string $UserName) Set <p>userName. If left empty, query all users</p>
 * @method string getDatabase() Obtain <p>Database name. If left empty, query all database accounts.</p>
 * @method void setDatabase(string $Database) Set <p>Database name. If left empty, query all database accounts.</p>
 * @method string getOrderBy() Obtain <p>Sorting field, available values: UserName; by default, sort by UserName if not passed.</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field, available values: UserName; by default, sort by UserName if not passed.</p>
 * @method string getOrderType() Obtain <p>Sorting method. Value range: asc (in ascending order), desc (in descending order). Default: asc.</p>
 * @method void setOrderType(string $OrderType) Set <p>Sorting method. Value range: asc (in ascending order), desc (in descending order). Default: asc.</p>
 * @method integer getOffset() Obtain <p>Pagination offset, defaults to 0</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset, defaults to 0</p>
 * @method integer getLimit() Obtain <p>Number of items per page, defaults to 20, maximum 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page, defaults to 20, maximum 100.</p>
 */
class DescribeInstanceUsersRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>userName. If left empty, query all users</p>
     */
    public $UserName;

    /**
     * @var string <p>Database name. If left empty, query all database accounts.</p>
     */
    public $Database;

    /**
     * @var string <p>Sorting field, available values: UserName; by default, sort by UserName if not passed.</p>
     */
    public $OrderBy;

    /**
     * @var string <p>Sorting method. Value range: asc (in ascending order), desc (in descending order). Default: asc.</p>
     */
    public $OrderType;

    /**
     * @var integer <p>Pagination offset, defaults to 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page, defaults to 20, maximum 100.</p>
     */
    public $Limit;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $UserName <p>userName. If left empty, query all users</p>
     * @param string $Database <p>Database name. If left empty, query all database accounts.</p>
     * @param string $OrderBy <p>Sorting field, available values: UserName; by default, sort by UserName if not passed.</p>
     * @param string $OrderType <p>Sorting method. Value range: asc (in ascending order), desc (in descending order). Default: asc.</p>
     * @param integer $Offset <p>Pagination offset, defaults to 0</p>
     * @param integer $Limit <p>Number of items per page, defaults to 20, maximum 100.</p>
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
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
