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
 * DescribeFunctionReplicas request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getFunctionId() Obtain Function ID.
 * @method void setFunctionId(string $FunctionId) Set Function ID.
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum value: 200.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum value: 200.
 * @method string getSortBy() Obtain Sorting basis. Valid values: <li>created-on: Creation time.</li> Default sorting is based on the created-on attribute.
 * @method void setSortBy(string $SortBy) Set Sorting basis. Valid values: <li>created-on: Creation time.</li> Default sorting is based on the created-on attribute.
 * @method string getSortOrder() Obtain List sort method. Valid values: <li>asc: ascending order;</li> <li>desc: sort in descending order.</li> Default value: asc.
 * @method void setSortOrder(string $SortOrder) Set List sort method. Valid values: <li>asc: ascending order;</li> <li>desc: sort in descending order.</li> Default value: asc.
 * @method array getFilters() Obtain Filtering Conditions. The maximum of Filters.Values is 20. If this parameter is left empty, it returns all function replicas under the function ID. Detailed filter criteria: <li>replica-name: Filter by function replica name. Fuzzy query is supported.</li>
 * @method void setFilters(array $Filters) Set Filtering Conditions. The maximum of Filters.Values is 20. If this parameter is left empty, it returns all function replicas under the function ID. Detailed filter criteria: <li>replica-name: Filter by function replica name. Fuzzy query is supported.</li>
 */
class DescribeFunctionReplicasRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Function ID.
     */
    public $FunctionId;

    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum value: 200.
     */
    public $Limit;

    /**
     * @var string Sorting basis. Valid values: <li>created-on: Creation time.</li> Default sorting is based on the created-on attribute.
     */
    public $SortBy;

    /**
     * @var string List sort method. Valid values: <li>asc: ascending order;</li> <li>desc: sort in descending order.</li> Default value: asc.
     */
    public $SortOrder;

    /**
     * @var array Filtering Conditions. The maximum of Filters.Values is 20. If this parameter is left empty, it returns all function replicas under the function ID. Detailed filter criteria: <li>replica-name: Filter by function replica name. Fuzzy query is supported.</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $FunctionId Function ID.
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum value: 200.
     * @param string $SortBy Sorting basis. Valid values: <li>created-on: Creation time.</li> Default sorting is based on the created-on attribute.
     * @param string $SortOrder List sort method. Valid values: <li>asc: ascending order;</li> <li>desc: sort in descending order.</li> Default value: asc.
     * @param array $Filters Filtering Conditions. The maximum of Filters.Values is 20. If this parameter is left empty, it returns all function replicas under the function ID. Detailed filter criteria: <li>replica-name: Filter by function replica name. Fuzzy query is supported.</li>
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

        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
