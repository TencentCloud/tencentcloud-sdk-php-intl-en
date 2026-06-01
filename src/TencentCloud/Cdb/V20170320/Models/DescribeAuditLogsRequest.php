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
 * DescribeAuditLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getStartTime() Obtain Start time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method void setStartTime(string $StartTime) Set Start time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method string getEndTime() Obtain End time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method void setEndTime(string $EndTime) Set End time. We recommend that the interval between start and end time does not exceed 7 days.
 * @method integer getLimit() Obtain The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
 * @method void setLimit(integer $Limit) Set The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
 * @method integer getOffset() Obtain Log offset, supports up to 65535 log entries for offset querying. Fill in the range: 0 - 65535.
 * @method void setOffset(integer $Offset) Set Log offset, supports up to 65535 log entries for offset querying. Fill in the range: 0 - 65535.
 * @method string getOrder() Obtain Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
 * @method void setOrder(string $Order) Set Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
 * @method string getOrderBy() Obtain Field to sort by. Valid values:
"timestamp" - timestamp;
"affectRows" - Number of affected rows.
"execTime" - Execution time.
 * @method void setOrderBy(string $OrderBy) Set Field to sort by. Valid values:
"timestamp" - timestamp;
"affectRows" - Number of affected rows.
"execTime" - Execution time.
 * @method array getLogFilter() Obtain Filter. Multiple values are in `AND` relationship.
 * @method void setLogFilter(array $LogFilter) Set Filter. Multiple values are in `AND` relationship.
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
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
     * @var integer The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
     */
    public $Limit;

    /**
     * @var integer Log offset, supports up to 65535 log entries for offset querying. Fill in the range: 0 - 65535.
     */
    public $Offset;

    /**
     * @var string Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
     */
    public $Order;

    /**
     * @var string Field to sort by. Valid values:
"timestamp" - timestamp;
"affectRows" - Number of affected rows.
"execTime" - Execution time.
     */
    public $OrderBy;

    /**
     * @var array Filter. Multiple values are in `AND` relationship.
     */
    public $LogFilter;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $StartTime Start time. We recommend that the interval between start and end time does not exceed 7 days.
     * @param string $EndTime End time. We recommend that the interval between start and end time does not exceed 7 days.
     * @param integer $Limit The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
     * @param integer $Offset Log offset, supports up to 65535 log entries for offset querying. Fill in the range: 0 - 65535.
     * @param string $Order Sort order. Valid values: "ASC" - Ascending order, "DESC" - Descending order. Default value: "DESC".
     * @param string $OrderBy Field to sort by. Valid values:
"timestamp" - timestamp;
"affectRows" - Number of affected rows.
"execTime" - Execution time.
     * @param array $LogFilter Filter. Multiple values are in `AND` relationship.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilters();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
