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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrations request structure.
 *
 * @method array getStatusSet() Obtain Status set. As long as a migration task is in a status therein, it will be listed
 * @method void setStatusSet(array $StatusSet) Set Status set. As long as a migration task is in a status therein, it will be listed
 * @method string getMigrateName() Obtain Migration task name (fuzzy match)
 * @method void setMigrateName(string $MigrateName) Set Migration task name (fuzzy match)
 * @method integer getLimit() Obtain Number of results per page. Value range: 1-100. Default value: 100
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1-100. Default value: 100
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method string getOrderBy() Obtain The query results are sorted by keyword. Valid values: name, createTime, startTime, endTime, status
 * @method void setOrderBy(string $OrderBy) Set The query results are sorted by keyword. Valid values: name, createTime, startTime, endTime, status
 * @method string getOrderByType() Obtain Sorting order. Valid values: desc, asc
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: desc, asc
 */
class DescribeMigrationsRequest extends AbstractModel
{
    /**
     * @var array Status set. As long as a migration task is in a status therein, it will be listed
     */
    public $StatusSet;

    /**
     * @var string Migration task name (fuzzy match)
     */
    public $MigrateName;

    /**
     * @var integer Number of results per page. Value range: 1-100. Default value: 100
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var string The query results are sorted by keyword. Valid values: name, createTime, startTime, endTime, status
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: desc, asc
     */
    public $OrderByType;

    /**
     * @param array $StatusSet Status set. As long as a migration task is in a status therein, it will be listed
     * @param string $MigrateName Migration task name (fuzzy match)
     * @param integer $Limit Number of results per page. Value range: 1-100. Default value: 100
     * @param integer $Offset Page number. Default value: 0
     * @param string $OrderBy The query results are sorted by keyword. Valid values: name, createTime, startTime, endTime, status
     * @param string $OrderByType Sorting order. Valid values: desc, asc
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
        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("MigrateName",$param) and $param["MigrateName"] !== null) {
            $this->MigrateName = $param["MigrateName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
