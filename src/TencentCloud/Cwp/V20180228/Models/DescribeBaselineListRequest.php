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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBaselineList request structure.
 *
 * @method integer getLimit() Obtain Pagination parameter, indicating the number of entries per page. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Pagination parameter, indicating the number of entries per page. Maximum value: 100.
 * @method integer getOffset() Obtain Pagination parameter
 * @method void setOffset(integer $Offset) Set Pagination parameter
 * @method array getFilters() Obtain Filtering criteria
<li>StrategyId - Uint64 - baseline policy ID</li>
<li>Status - Uint64 - processing status: 1: passed; 0: failed</li><li>Level - Uint64[] - risk level: 1: low; 2: medium; 3: high; 4: critical</li><li>BaselineName - String - baseline name</li>
<li>Quuid - String - host QUUID</li>
<li>Uuid - String - host UUID</li>
 * @method void setFilters(array $Filters) Set Filtering criteria
<li>StrategyId - Uint64 - baseline policy ID</li>
<li>Status - Uint64 - processing status: 1: passed; 0: failed</li><li>Level - Uint64[] - risk level: 1: low; 2: medium; 3: high; 4: critical</li><li>BaselineName - String - baseline name</li>
<li>Quuid - String - host QUUID</li>
<li>Uuid - String - host UUID</li>
 */
class DescribeBaselineListRequest extends AbstractModel
{
    /**
     * @var integer Pagination parameter, indicating the number of entries per page. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Pagination parameter
     */
    public $Offset;

    /**
     * @var array Filtering criteria
<li>StrategyId - Uint64 - baseline policy ID</li>
<li>Status - Uint64 - processing status: 1: passed; 0: failed</li><li>Level - Uint64[] - risk level: 1: low; 2: medium; 3: high; 4: critical</li><li>BaselineName - String - baseline name</li>
<li>Quuid - String - host QUUID</li>
<li>Uuid - String - host UUID</li>
     */
    public $Filters;

    /**
     * @param integer $Limit Pagination parameter, indicating the number of entries per page. Maximum value: 100.
     * @param integer $Offset Pagination parameter
     * @param array $Filters Filtering criteria
<li>StrategyId - Uint64 - baseline policy ID</li>
<li>Status - Uint64 - processing status: 1: passed; 0: failed</li><li>Level - Uint64[] - risk level: 1: low; 2: medium; 3: high; 4: critical</li><li>BaselineName - String - baseline name</li>
<li>Quuid - String - host QUUID</li>
<li>Uuid - String - host UUID</li>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
