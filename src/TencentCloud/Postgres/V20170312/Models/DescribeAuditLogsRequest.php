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
 * DescribeAuditLogs request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p>
 * @method string getStartTime() Obtain <p>Start time</p><p>Parameter format: 2026-03-25 00:00:00</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time</p><p>Parameter format: 2026-03-25 00:00:00</p>
 * @method string getEndTime() Obtain <p>End time</p><p>Parameter format: 2026-03-25 01:00:00</p>
 * @method void setEndTime(string $EndTime) Set <p>End time</p><p>Parameter format: 2026-03-25 01:00:00</p>
 * @method integer getLimit() Obtain <p>Query limit</p><p>Value range: [1, 100]</p>
 * @method void setLimit(integer $Limit) Set <p>Query limit</p><p>Value range: [1, 100]</p>
 * @method string getProduct() Obtain <p>Product name</p><p>Parameter format: postgres</p>
 * @method void setProduct(string $Product) Set <p>Product name</p><p>Parameter format: postgres</p>
 * @method integer getOffset() Obtain <p>Offset</p><p>Value range: [0, 10000]</p>
 * @method void setOffset(integer $Offset) Set <p>Offset</p><p>Value range: [0, 10000]</p>
 * @method string getOrder() Obtain <p>Sorting method</p><p>Input parameter limitation: Timestamp,AffectRows,ExecTime</p>
 * @method void setOrder(string $Order) Set <p>Sorting method</p><p>Input parameter limitation: Timestamp,AffectRows,ExecTime</p>
 * @method string getOrderBy() Obtain <p>Sorting field</p><p>Input limit: ASC, DESC</p>
 * @method void setOrderBy(string $OrderBy) Set <p>Sorting field</p><p>Input limit: ASC, DESC</p>
 * @method AuditLogFilter getFilter() Obtain <p>Filter criteria</p>
 * @method void setFilter(AuditLogFilter $Filter) Set <p>Filter criteria</p>
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Start time</p><p>Parameter format: 2026-03-25 00:00:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time</p><p>Parameter format: 2026-03-25 01:00:00</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Query limit</p><p>Value range: [1, 100]</p>
     */
    public $Limit;

    /**
     * @var string <p>Product name</p><p>Parameter format: postgres</p>
     */
    public $Product;

    /**
     * @var integer <p>Offset</p><p>Value range: [0, 10000]</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting method</p><p>Input parameter limitation: Timestamp,AffectRows,ExecTime</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field</p><p>Input limit: ASC, DESC</p>
     */
    public $OrderBy;

    /**
     * @var AuditLogFilter <p>Filter criteria</p>
     */
    public $Filter;

    /**
     * @param string $InstanceId <p>Instance ID</p>
     * @param string $StartTime <p>Start time</p><p>Parameter format: 2026-03-25 00:00:00</p>
     * @param string $EndTime <p>End time</p><p>Parameter format: 2026-03-25 01:00:00</p>
     * @param integer $Limit <p>Query limit</p><p>Value range: [1, 100]</p>
     * @param string $Product <p>Product name</p><p>Parameter format: postgres</p>
     * @param integer $Offset <p>Offset</p><p>Value range: [0, 10000]</p>
     * @param string $Order <p>Sorting method</p><p>Input parameter limitation: Timestamp,AffectRows,ExecTime</p>
     * @param string $OrderBy <p>Sorting field</p><p>Input limit: ASC, DESC</p>
     * @param AuditLogFilter $Filter <p>Filter criteria</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
