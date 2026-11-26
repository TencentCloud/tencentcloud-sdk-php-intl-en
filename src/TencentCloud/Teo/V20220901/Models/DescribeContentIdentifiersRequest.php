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
 * DescribeContentIdentifiers request structure.
 *
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum value: 100.
 * @method array getFilters() Obtain Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, the content identifiers authorized under the current AppId are returned by default. The detailed filter criteria are as follows: <li>description: filter by content identifier description in batches. For example: test;</li><li>content-id: filter by content identifier ID in batches. For example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li><li>status: filter by content identifier status. Valid values: active: active; deleted: deleted.</li>Fuzzy query is supported only for description. Precise query is required for other fields.
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, the content identifiers authorized under the current AppId are returned by default. The detailed filter criteria are as follows: <li>description: filter by content identifier description in batches. For example: test;</li><li>content-id: filter by content identifier ID in batches. For example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li><li>status: filter by content identifier status. Valid values: active: active; deleted: deleted.</li>Fuzzy query is supported only for description. Precise query is required for other fields.
 */
class DescribeContentIdentifiersRequest extends AbstractModel
{
    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, the content identifiers authorized under the current AppId are returned by default. The detailed filter criteria are as follows: <li>description: filter by content identifier description in batches. For example: test;</li><li>content-id: filter by content identifier ID in batches. For example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li><li>status: filter by content identifier status. Valid values: active: active; deleted: deleted.</li>Fuzzy query is supported only for description. Precise query is required for other fields.
     */
    public $Filters;

    /**
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum value: 100.
     * @param array $Filters Filter criteria. The maximum number of Filters is 20, and the maximum number of Filters.Values is 20. If this parameter is left empty, the content identifiers authorized under the current AppId are returned by default. The detailed filter criteria are as follows: <li>description: filter by content identifier description in batches. For example: test;</li><li>content-id: filter by content identifier ID in batches. For example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by tag key;</li> <li>tag-value: filter by tag value;</li><li>status: filter by content identifier status. Valid values: active: active; deleted: deleted.</li>Fuzzy query is supported only for description. Precise query is required for other fields.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
