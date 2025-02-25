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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralSpanList request structure.
 *
 * @method string getInstanceId() Obtain Business system id.
 * @method void setInstanceId(string $InstanceId) Set Business system id.
 * @method integer getStartTime() Obtain Span query start timestamp (unit: seconds).
 * @method void setStartTime(integer $StartTime) Set Span query start timestamp (unit: seconds).
 * @method integer getEndTime() Obtain Span query end timestamp (unit: seconds).
 * @method void setEndTime(integer $EndTime) Set Span query end timestamp (unit: seconds).
 * @method array getFilters() Obtain Universal filter parameters.
 * @method void setFilters(array $Filters) Set Universal filter parameters.
 * @method OrderBy getOrderBy() Obtain Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
 * @method void setOrderBy(OrderBy $OrderBy) Set Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
 * @method string getBusinessName() Obtain The service name of the business itself. console users should fill in taw.
 * @method void setBusinessName(string $BusinessName) Set The service name of the business itself. console users should fill in taw.
 * @method integer getLimit() Obtain Number of items per page, defaults to 10,000, valid values are 0 to 10,000.
 * @method void setLimit(integer $Limit) Set Number of items per page, defaults to 10,000, valid values are 0 to 10,000.
 * @method integer getOffset() Obtain Pagination.
 * @method void setOffset(integer $Offset) Set Pagination.
 */
class DescribeGeneralSpanListRequest extends AbstractModel
{
    /**
     * @var string Business system id.
     */
    public $InstanceId;

    /**
     * @var integer Span query start timestamp (unit: seconds).
     */
    public $StartTime;

    /**
     * @var integer Span query end timestamp (unit: seconds).
     */
    public $EndTime;

    /**
     * @var array Universal filter parameters.
     */
    public $Filters;

    /**
     * @var OrderBy Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
     */
    public $OrderBy;

    /**
     * @var string The service name of the business itself. console users should fill in taw.
     */
    public $BusinessName;

    /**
     * @var integer Number of items per page, defaults to 10,000, valid values are 0 to 10,000.
     */
    public $Limit;

    /**
     * @var integer Pagination.
     */
    public $Offset;

    /**
     * @param string $InstanceId Business system id.
     * @param integer $StartTime Span query start timestamp (unit: seconds).
     * @param integer $EndTime Span query end timestamp (unit: seconds).
     * @param array $Filters Universal filter parameters.
     * @param OrderBy $OrderBy Sort
.
The currently supported keys are:.

-StartTime (start time).
-EndTime (end time).
-Duration (response time).

The currently supported values are:.

- desc: sort in descending order.
-Asc - ascending order.
     * @param string $BusinessName The service name of the business itself. console users should fill in taw.
     * @param integer $Limit Number of items per page, defaults to 10,000, valid values are 0 to 10,000.
     * @param integer $Offset Pagination.
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
