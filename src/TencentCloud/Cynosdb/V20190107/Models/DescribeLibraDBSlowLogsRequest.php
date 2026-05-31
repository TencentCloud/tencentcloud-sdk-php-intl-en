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
 * DescribeLibraDBSlowLogs request structure.
 *
 * @method string getInstanceId() Obtain Read-only analysis engine instance ID
 * @method void setInstanceId(string $InstanceId) Set Read-only analysis engine instance ID
 * @method integer getStartTime() Obtain Start time, 1753171200.
 * @method void setStartTime(integer $StartTime) Set Start time, 1753171200.
 * @method integer getEndTime() Obtain End time, 1753171200.
 * @method void setEndTime(integer $EndTime) Set End time, 1753171200.
 * @method string getLimit() Obtain Log items per page limit: 0-200.
 * @method void setLimit(string $Limit) Set Log items per page limit: 0-200.
 * @method string getOffset() Obtain Log paginate, more than 0.
 * @method void setOffset(string $Offset) Set Log paginate, more than 0.
 * @method string getOrder() Obtain Log sorting method, DESC - descending order, ASC - ascending order.
 * @method void setOrder(string $Order) Set Log sorting method, DESC - descending order, ASC - ascending order.
 * @method string getOrderBy() Obtain Log sorting condition.
 * @method void setOrderBy(string $OrderBy) Set Log sorting condition.
 * @method array getLogFilter() Obtain Filter criteria
 * @method void setLogFilter(array $LogFilter) Set Filter criteria
 */
class DescribeLibraDBSlowLogsRequest extends AbstractModel
{
    /**
     * @var string Read-only analysis engine instance ID
     */
    public $InstanceId;

    /**
     * @var integer Start time, 1753171200.
     */
    public $StartTime;

    /**
     * @var integer End time, 1753171200.
     */
    public $EndTime;

    /**
     * @var string Log items per page limit: 0-200.
     */
    public $Limit;

    /**
     * @var string Log paginate, more than 0.
     */
    public $Offset;

    /**
     * @var string Log sorting method, DESC - descending order, ASC - ascending order.
     */
    public $Order;

    /**
     * @var string Log sorting condition.
     */
    public $OrderBy;

    /**
     * @var array Filter criteria
     */
    public $LogFilter;

    /**
     * @param string $InstanceId Read-only analysis engine instance ID
     * @param integer $StartTime Start time, 1753171200.
     * @param integer $EndTime End time, 1753171200.
     * @param string $Limit Log items per page limit: 0-200.
     * @param string $Offset Log paginate, more than 0.
     * @param string $Order Log sorting method, DESC - descending order, ASC - ascending order.
     * @param string $OrderBy Log sorting condition.
     * @param array $LogFilter Filter criteria
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
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->LogFilter, $obj);
            }
        }
    }
}
