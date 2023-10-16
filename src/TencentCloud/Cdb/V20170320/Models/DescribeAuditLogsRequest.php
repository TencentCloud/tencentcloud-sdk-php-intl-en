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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getLimit() Obtain The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
 * @method void setLimit(integer $Limit) Set The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method string getOrder() Obtain Sorting order Valid values: `ASC (ascending), `DESC` (descending).
 * @method void setOrder(string $Order) Set Sorting order Valid values: `ASC (ascending), `DESC` (descending).
 * @method string getOrderBy() Obtain Sorting field Valid values: 
`timestamp`: Timestamp,
`affectRows`: Number of affected rows,
`execTime`: Execution time.
 * @method void setOrderBy(string $OrderBy) Set Sorting field Valid values: 
`timestamp`: Timestamp,
`affectRows`: Number of affected rows,
`execTime`: Execution time.
 * @method array getLogFilter() Obtain Filter. Multiple values are in `AND` relationship.
 * @method void setLogFilter(array $LogFilter) Set Filter. Multiple values are in `AND` relationship.
 */
class DescribeAuditLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var string Sorting order Valid values: `ASC (ascending), `DESC` (descending).
     */
    public $Order;

    /**
     * @var string Sorting field Valid values: 
`timestamp`: Timestamp,
`affectRows`: Number of affected rows,
`execTime`: Execution time.
     */
    public $OrderBy;

    /**
     * @var array Filter. Multiple values are in `AND` relationship.
     */
    public $LogFilter;

    /**
     * @param string $InstanceId Instance ID
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $Limit The pagination parameter, which specifies the number of entries per page. Maximum value: 100 (default).
     * @param integer $Offset Pagination offset
     * @param string $Order Sorting order Valid values: `ASC (ascending), `DESC` (descending).
     * @param string $OrderBy Sorting field Valid values: 
`timestamp`: Timestamp,
`affectRows`: Number of affected rows,
`execTime`: Execution time.
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
