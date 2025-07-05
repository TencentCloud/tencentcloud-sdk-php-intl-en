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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getLimit() Obtain Number of results per page. Value range: 1-100. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of results per page. Value range: 1-100. Default value: 20
 * @method integer getOffset() Obtain Page number. Default value: 0
 * @method void setOffset(integer $Offset) Set Page number. Default value: 0
 * @method string getName() Obtain Account ID
 * @method void setName(string $Name) Set Account ID
 * @method string getOrderBy() Obtain Sorting by `createTime`, `updateTime`, or `passTime`. Default value: `createTime` (desc).
 * @method void setOrderBy(string $OrderBy) Set Sorting by `createTime`, `updateTime`, or `passTime`. Default value: `createTime` (desc).
 * @method string getOrderByType() Obtain Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Number of results per page. Value range: 1-100. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Page number. Default value: 0
     */
    public $Offset;

    /**
     * @var string Account ID
     */
    public $Name;

    /**
     * @var string Sorting by `createTime`, `updateTime`, or `passTime`. Default value: `createTime` (desc).
     */
    public $OrderBy;

    /**
     * @var string Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $Limit Number of results per page. Value range: 1-100. Default value: 20
     * @param integer $Offset Page number. Default value: 0
     * @param string $Name Account ID
     * @param string $OrderBy Sorting by `createTime`, `updateTime`, or `passTime`. Default value: `createTime` (desc).
     * @param string $OrderByType Sorting rule. Valid values: `desc` (descending order), `asc` (ascending order). Default value: `desc`.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
