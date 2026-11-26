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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInferenceServices request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method array getFilters() Obtain <p>Filter criteria. Up to 20 criteria are supported, and multiple criteria are in AND relationship. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>service-name: filter by service name;</li><li>service-id: filter by service ID;</li><li>status: filter by service status.</li>For fuzzy query, only filtering by the field name service-name is supported.</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. Up to 20 criteria are supported, and multiple criteria are in AND relationship. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>service-name: filter by service name;</li><li>service-id: filter by service ID;</li><li>status: filter by service status.</li>For fuzzy query, only filtering by the field name service-name is supported.</p>
 * @method integer getOffset() Obtain <p>The offset of paginated query. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>The offset of paginated query. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
 * @method string getOrder() Obtain <p>Returned results can be sorted by this field. Valid values: <li>create-time: creation time.</li>If left empty, results are sorted by create-time by default.</p>
 * @method void setOrder(string $Order) Set <p>Returned results can be sorted by this field. Valid values: <li>create-time: creation time.</li>If left empty, results are sorted by create-time by default.</p>
 * @method string getDirection() Obtain <p>Sorting order. If the field value is a number, sort by numeric size; if the field value is text, sort by ASCII code size. Valid values: <li>asc: sort in ascending order;</li><li>desc: sort in descending order.</li>Use default value desc if not specified.</p>
 * @method void setDirection(string $Direction) Set <p>Sorting order. If the field value is a number, sort by numeric size; if the field value is text, sort by ASCII code size. Valid values: <li>asc: sort in ascending order;</li><li>desc: sort in descending order.</li>Use default value desc if not specified.</p>
 */
class DescribeInferenceServicesRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>Filter criteria. Up to 20 criteria are supported, and multiple criteria are in AND relationship. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>service-name: filter by service name;</li><li>service-id: filter by service ID;</li><li>status: filter by service status.</li>For fuzzy query, only filtering by the field name service-name is supported.</p>
     */
    public $Filters;

    /**
     * @var integer <p>The offset of paginated query. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
     */
    public $Limit;

    /**
     * @var string <p>Returned results can be sorted by this field. Valid values: <li>create-time: creation time.</li>If left empty, results are sorted by create-time by default.</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting order. If the field value is a number, sort by numeric size; if the field value is text, sort by ASCII code size. Valid values: <li>asc: sort in ascending order;</li><li>desc: sort in descending order.</li>Use default value desc if not specified.</p>
     */
    public $Direction;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param array $Filters <p>Filter criteria. Up to 20 criteria are supported, and multiple criteria are in AND relationship. The maximum number of Filters.Values is 20. The detailed filter criteria are as follows: <li>service-name: filter by service name;</li><li>service-id: filter by service ID;</li><li>status: filter by service status.</li>For fuzzy query, only filtering by the field name service-name is supported.</p>
     * @param integer $Offset <p>The offset of paginated query. Default value: 0.</p>
     * @param integer $Limit <p>Paginated query limit. Default value: 20, maximum value: 200.</p>
     * @param string $Order <p>Returned results can be sorted by this field. Valid values: <li>create-time: creation time.</li>If left empty, results are sorted by create-time by default.</p>
     * @param string $Direction <p>Sorting order. If the field value is a number, sort by numeric size; if the field value is text, sort by ASCII code size. Valid values: <li>asc: sort in ascending order;</li><li>desc: sort in descending order.</li>Use default value desc if not specified.</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
