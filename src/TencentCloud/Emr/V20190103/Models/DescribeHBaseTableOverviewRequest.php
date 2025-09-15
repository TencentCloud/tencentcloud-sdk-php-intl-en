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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHBaseTableOverview request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getOffset() Obtain Pagination query number offset, starting from 0.	
 * @method void setOffset(integer $Offset) Set Pagination query number offset, starting from 0.	
 * @method integer getLimit() Obtain Page size for pagination query. The minimum value is 1, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Page size for pagination query. The minimum value is 1, and the maximum value is 100.
 * @method string getTable() Obtain Table name, supporting fuzzy matching
 * @method void setTable(string $Table) Set Table name, supporting fuzzy matching
 * @method string getOrderField() Obtain Field for sorting, with a default value
 * @method void setOrderField(string $OrderField) Set Field for sorting, with a default value
 * @method string getOrderType() Obtain asc: Ascending; desc: Descending (default)
 * @method void setOrderType(string $OrderType) Set asc: Ascending; desc: Descending (default)
 */
class DescribeHBaseTableOverviewRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Pagination query number offset, starting from 0.	
     */
    public $Offset;

    /**
     * @var integer Page size for pagination query. The minimum value is 1, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Table name, supporting fuzzy matching
     */
    public $Table;

    /**
     * @var string Field for sorting, with a default value
     */
    public $OrderField;

    /**
     * @var string asc: Ascending; desc: Descending (default)
     */
    public $OrderType;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Offset Pagination query number offset, starting from 0.	
     * @param integer $Limit Page size for pagination query. The minimum value is 1, and the maximum value is 100.
     * @param string $Table Table name, supporting fuzzy matching
     * @param string $OrderField Field for sorting, with a default value
     * @param string $OrderType asc: Ascending; desc: Descending (default)
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
