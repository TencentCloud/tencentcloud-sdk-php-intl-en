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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-6fego161
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-6fego161
 * @method integer getLimit() Obtain Number of entries returned per page. Default value: 10. Value range: 1–100.
 * @method void setLimit(integer $Limit) Set Number of entries returned per page. Default value: 10. Value range: 1–100.
 * @method integer getOffset() Obtain Data offset, which starts from 0.
 * @method void setOffset(integer $Offset) Set Data offset, which starts from 0.
 * @method string getOrderBy() Obtain Whether to sort by creation time or username. Valid values: `createTime` (sort by creation time), `name` (sort by username)
 * @method void setOrderBy(string $OrderBy) Set Whether to sort by creation time or username. Valid values: `createTime` (sort by creation time), `name` (sort by username)
 * @method string getOrderByType() Obtain Whether returns are sorted in ascending or descending order. Valid values: `desc` (descending), `asc` (ascending)
 * @method void setOrderByType(string $OrderByType) Set Whether returns are sorted in ascending or descending order. Valid values: `desc` (descending), `asc` (ascending)
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-6fego161
     */
    public $DBInstanceId;

    /**
     * @var integer Number of entries returned per page. Default value: 10. Value range: 1–100.
     */
    public $Limit;

    /**
     * @var integer Data offset, which starts from 0.
     */
    public $Offset;

    /**
     * @var string Whether to sort by creation time or username. Valid values: `createTime` (sort by creation time), `name` (sort by username)
     */
    public $OrderBy;

    /**
     * @var string Whether returns are sorted in ascending or descending order. Valid values: `desc` (descending), `asc` (ascending)
     */
    public $OrderByType;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-6fego161
     * @param integer $Limit Number of entries returned per page. Default value: 10. Value range: 1–100.
     * @param integer $Offset Data offset, which starts from 0.
     * @param string $OrderBy Whether to sort by creation time or username. Valid values: `createTime` (sort by creation time), `name` (sort by username)
     * @param string $OrderByType Whether returns are sorted in ascending or descending order. Valid values: `desc` (descending), `asc` (ascending)
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
