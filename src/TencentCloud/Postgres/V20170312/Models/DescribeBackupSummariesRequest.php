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
 * DescribeBackupSummaries request structure.
 *
 * @method integer getLimit() Obtain The maximum number of results returned per page. Value range: 1-100. Default: `10`
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Value range: 1-100. Default: `10`
 * @method integer getOffset() Obtain Data offset, which starts from 0.
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0.
 * @method array getFilters() Obtain Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: filter by instance id (string type).
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-instance-ip: specifies the instance VPC ip for filtering (string type).
 * @method void setFilters(array $Filters) Set Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: filter by instance id (string type).
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-instance-ip: specifies the instance VPC ip for filtering (string type).
 * @method string getOrderBy() Obtain Sorting field, supports TotalBackupSize - total size of backups, LogBackupSize - size of backup logs, ManualBaseBackupSize - size of manual backup data, AutoBaseBackupSize - size of automatic data backup. if this parameter is not input, no sorting is performed by default.
 * @method void setOrderBy(string $OrderBy) Set Sorting field, supports TotalBackupSize - total size of backups, LogBackupSize - size of backup logs, ManualBaseBackupSize - size of manual backup data, AutoBaseBackupSize - size of automatic data backup. if this parameter is not input, no sorting is performed by default.
 * @method string getOrderByType() Obtain Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
 */
class DescribeBackupSummariesRequest extends AbstractModel
{
    /**
     * @var integer The maximum number of results returned per page. Value range: 1-100. Default: `10`
     */
    public $Limit;

    /**
     * @var integer Data offset, which starts from 0.
     */
    public $Offset;

    /**
     * @var array Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: filter by instance id (string type).
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-instance-ip: specifies the instance VPC ip for filtering (string type).
     */
    public $Filters;

    /**
     * @var string Sorting field, supports TotalBackupSize - total size of backups, LogBackupSize - size of backup logs, ManualBaseBackupSize - size of manual backup data, AutoBaseBackupSize - size of automatic data backup. if this parameter is not input, no sorting is performed by default.
     */
    public $OrderBy;

    /**
     * @var string Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
     */
    public $OrderByType;

    /**
     * @param integer $Limit The maximum number of results returned per page. Value range: 1-100. Default: `10`
     * @param integer $Offset Data offset, which starts from 0.
     * @param array $Filters Query using one or more filter criteria. filter criteria currently supported include:.
db-instance-id: filter by instance id (string type).
db-instance-name: specifies the instance name to filter by, supports fuzzy matching (string type).
db-instance-ip: specifies the instance VPC ip for filtering (string type).
     * @param string $OrderBy Sorting field, supports TotalBackupSize - total size of backups, LogBackupSize - size of backup logs, ManualBaseBackupSize - size of manual backup data, AutoBaseBackupSize - size of automatic data backup. if this parameter is not input, no sorting is performed by default.
     * @param string $OrderByType Sorting method, including ascending: `asc` and descending: `desc`. the default value is `asc`.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
