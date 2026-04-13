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
 * DescribeEdgeKVNamespaces request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain The limit of paginated query. Default value: 20. Maximum value: 1,000.
 * @method void setLimit(integer $Limit) Set The limit of paginated query. Default value: 20. Maximum value: 1,000.
 * @method string getSortBy() Obtain Sorting basis. Valid values:
<li>created-on: creation time;</li>
<li>updated-on: Update time.</li>
Default value is created-on.
 * @method void setSortBy(string $SortBy) Set Sorting basis. Valid values:
<li>created-on: creation time;</li>
<li>updated-on: Update time.</li>
Default value is created-on.
 * @method string getSortOrder() Obtain List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>
Default value is desc.

 * @method void setSortOrder(string $SortOrder) Set List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>
Default value is desc.

 * @method array getFilters() Obtain Filter criteria. The maximum of Filters.Values is 20. If this parameter is left empty, return all KV namespaces under the site ID. Detailed filter criteria:
<li>Namespace: Filter by KV namespace name. Fuzzy query is supported.</li>
<li>remark: Filter by namespace description. Fuzzy query is supported.</li>

 * @method void setFilters(array $Filters) Set Filter criteria. The maximum of Filters.Values is 20. If this parameter is left empty, return all KV namespaces under the site ID. Detailed filter criteria:
<li>Namespace: Filter by KV namespace name. Fuzzy query is supported.</li>
<li>remark: Filter by namespace description. Fuzzy query is supported.</li>
 */
class DescribeEdgeKVNamespacesRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The limit of paginated query. Default value: 20. Maximum value: 1,000.
     */
    public $Limit;

    /**
     * @var string Sorting basis. Valid values:
<li>created-on: creation time;</li>
<li>updated-on: Update time.</li>
Default value is created-on.
     */
    public $SortBy;

    /**
     * @var string List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>
Default value is desc.

     */
    public $SortOrder;

    /**
     * @var array Filter criteria. The maximum of Filters.Values is 20. If this parameter is left empty, return all KV namespaces under the site ID. Detailed filter criteria:
<li>Namespace: Filter by KV namespace name. Fuzzy query is supported.</li>
<li>remark: Filter by namespace description. Fuzzy query is supported.</li>

     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit The limit of paginated query. Default value: 20. Maximum value: 1,000.
     * @param string $SortBy Sorting basis. Valid values:
<li>created-on: creation time;</li>
<li>updated-on: Update time.</li>
Default value is created-on.
     * @param string $SortOrder List sort method. Valid values:
<li>asc: ascending order;</li>
<li>desc: descending order.</li>
Default value is desc.

     * @param array $Filters Filter criteria. The maximum of Filters.Values is 20. If this parameter is left empty, return all KV namespaces under the site ID. Detailed filter criteria:
<li>Namespace: Filter by KV namespace name. Fuzzy query is supported.</li>
<li>remark: Filter by namespace description. Fuzzy query is supported.</li>
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
