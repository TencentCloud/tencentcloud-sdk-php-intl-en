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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogs request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Search log start time
 * @method void setStartTime(string $StartTime) Set Search log start time
 * @method string getEndTime() Obtain End time to retrieve logs
 * @method void setEndTime(string $EndTime) Set End time to retrieve logs
 * @method array getLogFilter() Obtain Filter criteria.
 * @method void setLogFilter(array $LogFilter) Set Filter criteria.
 * @method integer getLimit() Obtain Items per page limit
 * @method void setLimit(integer $Limit) Set Items per page limit
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getOrder() Obtain Sort, selectable: ASC, DESC
 * @method void setOrder(string $Order) Set Sort, selectable: ASC, DESC
 * @method string getOrderBy() Obtain Sorting criteria may not be the same as selectable fields used to sort according to business.
 * @method void setOrderBy(string $OrderBy) Set Sorting criteria may not be the same as selectable fields used to sort according to business.
 */
class DescribeSlowLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Search log start time
     */
    public $StartTime;

    /**
     * @var string End time to retrieve logs
     */
    public $EndTime;

    /**
     * @var array Filter criteria.
     */
    public $LogFilter;

    /**
     * @var integer Items per page limit
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Sort, selectable: ASC, DESC
     */
    public $Order;

    /**
     * @var string Sorting criteria may not be the same as selectable fields used to sort according to business.
     */
    public $OrderBy;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Search log start time
     * @param string $EndTime End time to retrieve logs
     * @param array $LogFilter Filter criteria.
     * @param integer $Limit Items per page limit
     * @param integer $Offset Offset.
     * @param string $Order Sort, selectable: ASC, DESC
     * @param string $OrderBy Sorting criteria may not be the same as selectable fields used to sort according to business.
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

        if (array_key_exists("LogFilter",$param) and $param["LogFilter"] !== null) {
            $this->LogFilter = [];
            foreach ($param["LogFilter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
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
