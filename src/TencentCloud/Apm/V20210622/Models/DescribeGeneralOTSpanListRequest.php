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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralOTSpanList request structure.
 *
 * @method string getInstanceId() Obtain <p>Business system ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Business system ID</p>
 * @method integer getStartTime() Obtain <p>Span query start timestamp (unit: seconds)</p>
 * @method void setStartTime(integer $StartTime) Set <p>Span query start timestamp (unit: seconds)</p>
 * @method integer getEndTime() Obtain <p>Span query end timestamp (unit: s)</p>
 * @method void setEndTime(integer $EndTime) Set <p>Span query end timestamp (unit: s)</p>
 * @method array getFilters() Obtain <p>Universal filter parameters supported filter key such as service.name</p>
 * @method void setFilters(array $Filters) Set <p>Universal filter parameters supported filter key such as service.name</p>
 * @method OrderBy getOrderBy() Obtain <p>Sort<br>Keys now supported:</p><ul><li>startTime</li><li>endTime</li><li>duration</li></ul><p>Values now supported:</p><ul><li>desc (sort in descending order)</li><li>asc (ascending order)</li></ul>
 * @method void setOrderBy(OrderBy $OrderBy) Set <p>Sort<br>Keys now supported:</p><ul><li>startTime</li><li>endTime</li><li>duration</li></ul><p>Values now supported:</p><ul><li>desc (sort in descending order)</li><li>asc (ascending order)</li></ul>
 * @method string getBusinessName() Obtain <p>Business service name. Console users please enter taw</p>
 * @method void setBusinessName(string $BusinessName) Set <p>Business service name. Console users please enter taw</p>
 * @method integer getLimit() Obtain <p>Count of single-page projects. Defaults to 10000. Valid value range is 0–10000.</p>
 * @method void setLimit(integer $Limit) Set <p>Count of single-page projects. Defaults to 10000. Valid value range is 0–10000.</p>
 * @method integer getOffset() Obtain <p>Page</p>
 * @method void setOffset(integer $Offset) Set <p>Page</p>
 */
class DescribeGeneralOTSpanListRequest extends AbstractModel
{
    /**
     * @var string <p>Business system ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Span query start timestamp (unit: seconds)</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Span query end timestamp (unit: s)</p>
     */
    public $EndTime;

    /**
     * @var array <p>Universal filter parameters supported filter key such as service.name</p>
     */
    public $Filters;

    /**
     * @var OrderBy <p>Sort<br>Keys now supported:</p><ul><li>startTime</li><li>endTime</li><li>duration</li></ul><p>Values now supported:</p><ul><li>desc (sort in descending order)</li><li>asc (ascending order)</li></ul>
     */
    public $OrderBy;

    /**
     * @var string <p>Business service name. Console users please enter taw</p>
     */
    public $BusinessName;

    /**
     * @var integer <p>Count of single-page projects. Defaults to 10000. Valid value range is 0–10000.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Page</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>Business system ID</p>
     * @param integer $StartTime <p>Span query start timestamp (unit: seconds)</p>
     * @param integer $EndTime <p>Span query end timestamp (unit: s)</p>
     * @param array $Filters <p>Universal filter parameters supported filter key such as service.name</p>
     * @param OrderBy $OrderBy <p>Sort<br>Keys now supported:</p><ul><li>startTime</li><li>endTime</li><li>duration</li></ul><p>Values now supported:</p><ul><li>desc (sort in descending order)</li><li>asc (ascending order)</li></ul>
     * @param string $BusinessName <p>Business service name. Console users please enter taw</p>
     * @param integer $Limit <p>Count of single-page projects. Defaults to 10000. Valid value range is 0–10000.</p>
     * @param integer $Offset <p>Page</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
