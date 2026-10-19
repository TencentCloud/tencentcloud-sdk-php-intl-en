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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcFwIpStat request structure.
 *
 * @method integer getLimit() Obtain <p>Entries per page</p>
 * @method void setLimit(integer $Limit) Set <p>Entries per page</p>
 * @method integer getOffset() Obtain <p>Offset value</p>
 * @method void setOffset(integer $Offset) Set <p>Offset value</p>
 * @method string getFwGroupId() Obtain <p>Firewall group ID</p>
 * @method void setFwGroupId(string $FwGroupId) Set <p>Firewall group ID</p>
 * @method string getFwInsId() Obtain <p>Instance id of the firewall</p>
 * @method void setFwInsId(string $FwInsId) Set <p>Instance id of the firewall</p>
 * @method integer getTimeType() Obtain <p>Selected time interval 1: within an hour, 2: 24 hours, 3: 7 days, 4: 1 month</p>
 * @method void setTimeType(integer $TimeType) Set <p>Selected time interval 1: within an hour, 2: 24 hours, 3: 7 days, 4: 1 month</p>
 * @method array getFilters() Obtain <p>Filter condition composite</p>
 * @method void setFilters(array $Filters) Set <p>Filter condition composite</p>
 * @method string getStartTime() Obtain <p>Start time of retrieval. Can be omitted.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time of retrieval. Can be omitted.</p>
 * @method string getEndTime() Obtain <p>End time of retrieval. Can be omitted.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time of retrieval. Can be omitted.</p>
 * @method string getOrder() Obtain <p>desc: descending order; asc: ascending order. Sort by the value of the By field. If any parameters are loaded, by must have a value.</p>
 * @method void setOrder(string $Order) Set <p>desc: descending order; asc: ascending order. Sort by the value of the By field. If any parameters are loaded, by must have a value.</p>
 * @method string getBy() Obtain <p>Fields used for sorting</p>
 * @method void setBy(string $By) Set <p>Fields used for sorting</p>
 */
class DescribeVpcFwIpStatRequest extends AbstractModel
{
    /**
     * @var integer <p>Entries per page</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset value</p>
     */
    public $Offset;

    /**
     * @var string <p>Firewall group ID</p>
     */
    public $FwGroupId;

    /**
     * @var string <p>Instance id of the firewall</p>
     */
    public $FwInsId;

    /**
     * @var integer <p>Selected time interval 1: within an hour, 2: 24 hours, 3: 7 days, 4: 1 month</p>
     */
    public $TimeType;

    /**
     * @var array <p>Filter condition composite</p>
     */
    public $Filters;

    /**
     * @var string <p>Start time of retrieval. Can be omitted.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time of retrieval. Can be omitted.</p>
     */
    public $EndTime;

    /**
     * @var string <p>desc: descending order; asc: ascending order. Sort by the value of the By field. If any parameters are loaded, by must have a value.</p>
     */
    public $Order;

    /**
     * @var string <p>Fields used for sorting</p>
     */
    public $By;

    /**
     * @param integer $Limit <p>Entries per page</p>
     * @param integer $Offset <p>Offset value</p>
     * @param string $FwGroupId <p>Firewall group ID</p>
     * @param string $FwInsId <p>Instance id of the firewall</p>
     * @param integer $TimeType <p>Selected time interval 1: within an hour, 2: 24 hours, 3: 7 days, 4: 1 month</p>
     * @param array $Filters <p>Filter condition composite</p>
     * @param string $StartTime <p>Start time of retrieval. Can be omitted.</p>
     * @param string $EndTime <p>End time of retrieval. Can be omitted.</p>
     * @param string $Order <p>desc: descending order; asc: ascending order. Sort by the value of the By field. If any parameters are loaded, by must have a value.</p>
     * @param string $By <p>Fields used for sorting</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
