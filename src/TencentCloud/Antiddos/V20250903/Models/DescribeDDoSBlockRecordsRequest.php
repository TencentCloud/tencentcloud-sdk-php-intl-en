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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSBlockRecords request structure.
 *
 * @method string getStartTime() Obtain <p>Start time of the query. Support up to data query for the past one year.</p><p>Parameter format: 2026-02-04T11:30:00+08:00.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time of the query. Support up to data query for the past one year.</p><p>Parameter format: 2026-02-04T11:30:00+08:00.</p>
 * @method string getEndTime() Obtain <p>End time of query. The query time range (EndTime - StartTime) must be less than or equal to 31 days.</p><p>Parameter format: 2026-03-04T11:30:00+08:00.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time of query. The query time range (EndTime - StartTime) must be less than or equal to 31 days.</p><p>Parameter format: 2026-03-04T11:30:00+08:00.</p>
 * @method array getFilters() Obtain <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, return the current list of resources blocked under the appid. Detailed filter criteria:</p><ul><li> Resource: Filter by blocked IP or six-segment resource format;</li><li> Status: Filter by blocked resource status.</li></ul><p>When Filters.Name value is Status, Filters.Values valid values:</p><ul><li>Blocked: blocked;</li><li>Unblocking: unblocking;</li><li>Unblocked: unblocked.</li></ul>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, return the current list of resources blocked under the appid. Detailed filter criteria:</p><ul><li> Resource: Filter by blocked IP or six-segment resource format;</li><li> Status: Filter by blocked resource status.</li></ul><p>When Filters.Name value is Status, Filters.Values valid values:</p><ul><li>Blocked: blocked;</li><li>Unblocking: unblocking;</li><li>Unblocked: unblocked.</li></ul>
 * @method integer getLimit() Obtain <p>Paginated query limit count. Maximum value: 100.</p><p>Default value: 20</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit count. Maximum value: 100.</p><p>Default value: 20</p>
 * @method integer getOffset() Obtain <p>Paginated query offset.</p><p>Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset.</p><p>Default value: 0.</p>
 */
class DescribeDDoSBlockRecordsRequest extends AbstractModel
{
    /**
     * @var string <p>Start time of the query. Support up to data query for the past one year.</p><p>Parameter format: 2026-02-04T11:30:00+08:00.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time of query. The query time range (EndTime - StartTime) must be less than or equal to 31 days.</p><p>Parameter format: 2026-03-04T11:30:00+08:00.</p>
     */
    public $EndTime;

    /**
     * @var array <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, return the current list of resources blocked under the appid. Detailed filter criteria:</p><ul><li> Resource: Filter by blocked IP or six-segment resource format;</li><li> Status: Filter by blocked resource status.</li></ul><p>When Filters.Name value is Status, Filters.Values valid values:</p><ul><li>Blocked: blocked;</li><li>Unblocking: unblocking;</li><li>Unblocked: unblocked.</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>Paginated query limit count. Maximum value: 100.</p><p>Default value: 20</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paginated query offset.</p><p>Default value: 0.</p>
     */
    public $Offset;

    /**
     * @param string $StartTime <p>Start time of the query. Support up to data query for the past one year.</p><p>Parameter format: 2026-02-04T11:30:00+08:00.</p>
     * @param string $EndTime <p>End time of query. The query time range (EndTime - StartTime) must be less than or equal to 31 days.</p><p>Parameter format: 2026-03-04T11:30:00+08:00.</p>
     * @param array $Filters <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, return the current list of resources blocked under the appid. Detailed filter criteria:</p><ul><li> Resource: Filter by blocked IP or six-segment resource format;</li><li> Status: Filter by blocked resource status.</li></ul><p>When Filters.Name value is Status, Filters.Values valid values:</p><ul><li>Blocked: blocked;</li><li>Unblocking: unblocking;</li><li>Unblocked: unblocked.</li></ul>
     * @param integer $Limit <p>Paginated query limit count. Maximum value: 100.</p><p>Default value: 20</p>
     * @param integer $Offset <p>Paginated query offset.</p><p>Default value: 0.</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
