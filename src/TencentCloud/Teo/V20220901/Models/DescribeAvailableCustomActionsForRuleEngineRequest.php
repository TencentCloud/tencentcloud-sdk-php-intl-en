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
 * DescribeAvailableCustomActionsForRuleEngine request structure.
 *
 * @method string getZoneId() Obtain <p>Zone ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Zone ID.</p>
 * @method array getFilters() Obtain <p>Filter criteria. Multiple conditions have an AND relationship. The maximum number of Filters.Values is 20. If this parameter is left empty, return all available rule engine custom configurations under the current site. Detailed filter criteria:</p><li>action-id: Filter by the unique identification ID of the custom configuration.</li><li>name: Filter by the name of the custom configuration.</a></li>Fuzzy query only supports filtering fields named <code>name</code>.<p></p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. Multiple conditions have an AND relationship. The maximum number of Filters.Values is 20. If this parameter is left empty, return all available rule engine custom configurations under the current site. Detailed filter criteria:</p><li>action-id: Filter by the unique identification ID of the custom configuration.</li><li>name: Filter by the name of the custom configuration.</a></li>Fuzzy query only supports filtering fields named <code>name</code>.<p></p>
 * @method integer getLimit() Obtain <p>Paginated query limit.</p><p>Value ranges from 0 to 1000.</p><p>Default value: 20.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit.</p><p>Value ranges from 0 to 1000.</p><p>Default value: 20.</p>
 * @method integer getOffset() Obtain <p>Paging offset.</p><p>Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset.</p><p>Default value: 0.</p>
 * @method string getSortBy() Obtain <p>Sorting field. Valid values:</p><li>action-id: Sort by custom configuration unique identification ID.</li><li>create-time: Sort by custom configuration creation time.</li>Default value: <code>action-id</code>.<p></p>
 * @method void setSortBy(string $SortBy) Set <p>Sorting field. Valid values:</p><li>action-id: Sort by custom configuration unique identification ID.</li><li>create-time: Sort by custom configuration creation time.</li>Default value: <code>action-id</code>.<p></p>
 * @method string getSortOrder() Obtain <p>Sorting method. Valid values:</p><li>asc: ascending sort;</li><li>desc: sort in descending order.</li>Default value: desc.<p></p>
 * @method void setSortOrder(string $SortOrder) Set <p>Sorting method. Valid values:</p><li>asc: ascending sort;</li><li>desc: sort in descending order.</li>Default value: desc.<p></p>
 */
class DescribeAvailableCustomActionsForRuleEngineRequest extends AbstractModel
{
    /**
     * @var string <p>Zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>Filter criteria. Multiple conditions have an AND relationship. The maximum number of Filters.Values is 20. If this parameter is left empty, return all available rule engine custom configurations under the current site. Detailed filter criteria:</p><li>action-id: Filter by the unique identification ID of the custom configuration.</li><li>name: Filter by the name of the custom configuration.</a></li>Fuzzy query only supports filtering fields named <code>name</code>.<p></p>
     */
    public $Filters;

    /**
     * @var integer <p>Paginated query limit.</p><p>Value ranges from 0 to 1000.</p><p>Default value: 20.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paging offset.</p><p>Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting field. Valid values:</p><li>action-id: Sort by custom configuration unique identification ID.</li><li>create-time: Sort by custom configuration creation time.</li>Default value: <code>action-id</code>.<p></p>
     */
    public $SortBy;

    /**
     * @var string <p>Sorting method. Valid values:</p><li>asc: ascending sort;</li><li>desc: sort in descending order.</li>Default value: desc.<p></p>
     */
    public $SortOrder;

    /**
     * @param string $ZoneId <p>Zone ID.</p>
     * @param array $Filters <p>Filter criteria. Multiple conditions have an AND relationship. The maximum number of Filters.Values is 20. If this parameter is left empty, return all available rule engine custom configurations under the current site. Detailed filter criteria:</p><li>action-id: Filter by the unique identification ID of the custom configuration.</li><li>name: Filter by the name of the custom configuration.</a></li>Fuzzy query only supports filtering fields named <code>name</code>.<p></p>
     * @param integer $Limit <p>Paginated query limit.</p><p>Value ranges from 0 to 1000.</p><p>Default value: 20.</p>
     * @param integer $Offset <p>Paging offset.</p><p>Default value: 0.</p>
     * @param string $SortBy <p>Sorting field. Valid values:</p><li>action-id: Sort by custom configuration unique identification ID.</li><li>create-time: Sort by custom configuration creation time.</li>Default value: <code>action-id</code>.<p></p>
     * @param string $SortOrder <p>Sorting method. Valid values:</p><li>asc: ascending sort;</li><li>desc: sort in descending order.</li>Default value: desc.<p></p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
