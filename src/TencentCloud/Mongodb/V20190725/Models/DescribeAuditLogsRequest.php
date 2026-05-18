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
 * DescribeAuditLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format of cmgo-xftsghuy. It is the same as the instance ID displayed on the TencentDB console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format of cmgo-xftsghuy. It is the same as the instance ID displayed on the TencentDB console page.
 * @method string getStartTime() Obtain Start time, format: "2017-07-12 10:29:20".
 * @method void setStartTime(string $StartTime) Set Start time, format: "2017-07-12 10:29:20".
 * @method string getEndTime() Obtain End time, format: "2017-07-12 10:29:20".
 * @method void setEndTime(string $EndTime) Set End time, format: "2017-07-12 10:29:20".
 * @method AuditLogFilter getFilter() Obtain Filter conditions. You can filter logs based on these conditions.
 * @method void setFilter(AuditLogFilter $Filter) Set Filter conditions. You can filter logs based on these conditions.
 * @method integer getLimit() Obtain Pagination parameter indicates the number of returned data entries. Default value is 100. Maximum value is 100.
 * @method void setLimit(integer $Limit) Set Pagination parameter indicates the number of returned data entries. Default value is 100. Maximum value is 100.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method string getOrder() Obtain Sorting method of the audit log.
<ul><li>ASC: ascending.</li><li>DESC: descending order.</li></ul>
 * @method void setOrder(string $Order) Set Sorting method of the audit log.
<ul><li>ASC: ascending.</li><li>DESC: descending order.</li></ul>
 * @method string getOrderBy() Obtain Sorting field of the audit log, including:
<ul><li>timestamp: Timestamp.</li>
<li>affectRows: Number of affected rows.</li>
<li>execTime: Execution time.</li></ul>
 * @method void setOrderBy(string $OrderBy) Set Sorting field of the audit log, including:
<ul><li>timestamp: Timestamp.</li>
<li>affectRows: Number of affected rows.</li>
<li>execTime: Execution time.</li></ul>
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format of cmgo-xftsghuy. It is the same as the instance ID displayed on the TencentDB console page.
     */
    public $InstanceId;

    /**
     * @var string Start time, format: "2017-07-12 10:29:20".
     */
    public $StartTime;

    /**
     * @var string End time, format: "2017-07-12 10:29:20".
     */
    public $EndTime;

    /**
     * @var AuditLogFilter Filter conditions. You can filter logs based on these conditions.
     */
    public $Filter;

    /**
     * @var integer Pagination parameter indicates the number of returned data entries. Default value is 100. Maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var string Sorting method of the audit log.
<ul><li>ASC: ascending.</li><li>DESC: descending order.</li></ul>
     */
    public $Order;

    /**
     * @var string Sorting field of the audit log, including:
<ul><li>timestamp: Timestamp.</li>
<li>affectRows: Number of affected rows.</li>
<li>execTime: Execution time.</li></ul>
     */
    public $OrderBy;

    /**
     * @param string $InstanceId Instance ID, in the format of cmgo-xftsghuy. It is the same as the instance ID displayed on the TencentDB console page.
     * @param string $StartTime Start time, format: "2017-07-12 10:29:20".
     * @param string $EndTime End time, format: "2017-07-12 10:29:20".
     * @param AuditLogFilter $Filter Filter conditions. You can filter logs based on these conditions.
     * @param integer $Limit Pagination parameter indicates the number of returned data entries. Default value is 100. Maximum value is 100.
     * @param integer $Offset Pagination offset.
     * @param string $Order Sorting method of the audit log.
<ul><li>ASC: ascending.</li><li>DESC: descending order.</li></ul>
     * @param string $OrderBy Sorting field of the audit log, including:
<ul><li>timestamp: Timestamp.</li>
<li>affectRows: Number of affected rows.</li>
<li>execTime: Execution time.</li></ul>
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AuditLogFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
    }
}
