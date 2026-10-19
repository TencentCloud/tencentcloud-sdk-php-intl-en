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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Start time in the format of "2017-07-12 10:29:20".
 * @method void setStartTime(string $StartTime) Set Start time in the format of "2017-07-12 10:29:20".
 * @method string getEndTime() Obtain End time in the format: "2017-07-12 10:29:20".
 * @method void setEndTime(string $EndTime) Set End time in the format: "2017-07-12 10:29:20".
 * @method string getOrder() Obtain Sort order. Supported values: "ASC" - Ascending order, "DESC" - Descending order.
 * @method void setOrder(string $Order) Set Sort order. Supported values: "ASC" - Ascending order, "DESC" - Descending order.
 * @method string getOrderBy() Obtain Sorting field. Supported values include:
timestamp
"affectRows" - Number of affected rows
"execTime" - Execution time.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Supported values include:
timestamp
"affectRows" - Number of affected rows
"execTime" - Execution time.
 * @method AuditLogFilter getFilter() Obtain Deprecated.
 * @method void setFilter(AuditLogFilter $Filter) Set Deprecated.
 * @method integer getLimit() Obtain Pagination parameter. Number of data entries returned per request. Default value: 100. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Pagination parameter. Number of data entries returned per request. Default value: 100. Maximum value: 100.
 * @method integer getOffset() Obtain Pagination offset.
Description: The sum of Limit and Offset must be less than or equal to 65536.
 * @method void setOffset(integer $Offset) Set Pagination offset.
Description: The sum of Limit and Offset must be less than or equal to 65536.
 * @method array getLogFilter() Obtain Filter criteria. Multiple values have an AND relationship.
 * @method void setLogFilter(array $LogFilter) Set Filter criteria. Multiple values have an AND relationship.
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Start time in the format of "2017-07-12 10:29:20".
     */
    public $StartTime;

    /**
     * @var string End time in the format: "2017-07-12 10:29:20".
     */
    public $EndTime;

    /**
     * @var string Sort order. Supported values: "ASC" - Ascending order, "DESC" - Descending order.
     */
    public $Order;

    /**
     * @var string Sorting field. Supported values include:
timestamp
"affectRows" - Number of affected rows
"execTime" - Execution time.
     */
    public $OrderBy;

    /**
     * @var AuditLogFilter Deprecated.
     * @deprecated
     */
    public $Filter;

    /**
     * @var integer Pagination parameter. Number of data entries returned per request. Default value: 100. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset.
Description: The sum of Limit and Offset must be less than or equal to 65536.
     */
    public $Offset;

    /**
     * @var array Filter criteria. Multiple values have an AND relationship.
     */
    public $LogFilter;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Start time in the format of "2017-07-12 10:29:20".
     * @param string $EndTime End time in the format: "2017-07-12 10:29:20".
     * @param string $Order Sort order. Supported values: "ASC" - Ascending order, "DESC" - Descending order.
     * @param string $OrderBy Sorting field. Supported values include:
timestamp
"affectRows" - Number of affected rows
"execTime" - Execution time.
     * @param AuditLogFilter $Filter Deprecated.
     * @param integer $Limit Pagination parameter. Number of data entries returned per request. Default value: 100. Maximum value: 100.
     * @param integer $Offset Pagination offset.
Description: The sum of Limit and Offset must be less than or equal to 65536.
     * @param array $LogFilter Filter criteria. Multiple values have an AND relationship.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new InstanceAuditLogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
