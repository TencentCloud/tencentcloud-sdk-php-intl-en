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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditLogFile request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getStartTime() Obtain Start time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method void setStartTime(string $StartTime) Set Start time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method string getEndTime() Obtain End time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method void setEndTime(string $EndTime) Set End time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method string getOrder() Obtain Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
 * @method void setOrder(string $Order) Set Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
 * @method string getOrderBy() Obtain Field to sort by. Valid values: "timestamp" - Timestamp; "affectRows" - Number of affected rows; "execTime" - Execution time. Default value: "timestamp".
 * @method void setOrderBy(string $OrderBy) Set Field to sort by. Valid values: "timestamp" - Timestamp; "affectRows" - Number of affected rows; "execTime" - Execution time. Default value: "timestamp".
 * @method AuditLogFilter getFilter() Obtain Deprecated.
 * @method void setFilter(AuditLogFilter $Filter) Set Deprecated.
 * @method array getLogFilter() Obtain Filter conditions. You can filter logs based on these conditions.
 * @method void setLogFilter(array $LogFilter) Set Filter conditions. You can filter logs based on these conditions.
 * @method array getColumnFilter() Obtain Columns to include in the download.
 * @method void setColumnFilter(array $ColumnFilter) Set Columns to include in the download.
 */
class CreateAuditLogFileRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Start time. We recommend that the interval between start and end time does not exceed 7 days.
     */
    public $StartTime;

    /**
     * @var string End time. We recommend that the interval between start and end time does not exceed 7 days.
     */
    public $EndTime;

    /**
     * @var string Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
     */
    public $Order;

    /**
     * @var string Field to sort by. Valid values: "timestamp" - Timestamp; "affectRows" - Number of affected rows; "execTime" - Execution time. Default value: "timestamp".
     */
    public $OrderBy;

    /**
     * @var AuditLogFilter Deprecated.
     * @deprecated
     */
    public $Filter;

    /**
     * @var array Filter conditions. You can filter logs based on these conditions.
     */
    public $LogFilter;

    /**
     * @var array Columns to include in the download.
     */
    public $ColumnFilter;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.comom/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $StartTime Start time. We recommend that the interval between start and end time does not exceed 7 days.
     * @param string $EndTime End time. We recommend that the interval between start and end time does not exceed 7 days.
     * @param string $Order Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
     * @param string $OrderBy Field to sort by. Valid values: "timestamp" - Timestamp; "affectRows" - Number of affected rows; "execTime" - Execution time. Default value: "timestamp".
     * @param AuditLogFilter $Filter Deprecated.
     * @param array $LogFilter Filter conditions. You can filter logs based on these conditions.
     * @param array $ColumnFilter Columns to include in the download.
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

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilters();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }

        if (array_key_exists("ColumnFilter",$param) and $param["ColumnFilter"] !== null) {
            $this->ColumnFilter = $param["ColumnFilter"];
        }
    }
}
