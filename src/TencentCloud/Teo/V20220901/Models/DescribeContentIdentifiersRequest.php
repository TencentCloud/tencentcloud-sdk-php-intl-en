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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContentIdentifiers request structure.
 *
 * @method integer getOffset() Obtain The offset of paginated query. default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. default value: 0.
 * @method integer getLimit() Obtain Limit on paginated queries. default value: `20`. maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. default value: `20`. maximum value: `100`.
 * @method array getFilters() Obtain Filter conditions. the upper limit for filters is 20, and the upper limit for filters.values is 20. if this parameter is not filled in, the content identifiers with permissions under the current appid are returned by default. detailed filtering conditions are as follows: <li>description: filter by content identifier description in batches; for example: test;</li><li>content-id: filter by content identifier id in batches; for example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by Tag key;</li><li>tag-value: filter by Tag value;</li><li>status: filter by content identifier status. valid values: active: active; deleted: deleted.</li>only description supports fuzzy query, other fields require precise query.
 * @method void setFilters(array $Filters) Set Filter conditions. the upper limit for filters is 20, and the upper limit for filters.values is 20. if this parameter is not filled in, the content identifiers with permissions under the current appid are returned by default. detailed filtering conditions are as follows: <li>description: filter by content identifier description in batches; for example: test;</li><li>content-id: filter by content identifier id in batches; for example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by Tag key;</li><li>tag-value: filter by Tag value;</li><li>status: filter by content identifier status. valid values: active: active; deleted: deleted.</li>only description supports fuzzy query, other fields require precise query.
 */
class DescribeContentIdentifiersRequest extends AbstractModel
{
    /**
     * @var integer The offset of paginated query. default value: 0.
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. default value: `20`. maximum value: `100`.
     */
    public $Limit;

    /**
     * @var array Filter conditions. the upper limit for filters is 20, and the upper limit for filters.values is 20. if this parameter is not filled in, the content identifiers with permissions under the current appid are returned by default. detailed filtering conditions are as follows: <li>description: filter by content identifier description in batches; for example: test;</li><li>content-id: filter by content identifier id in batches; for example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by Tag key;</li><li>tag-value: filter by Tag value;</li><li>status: filter by content identifier status. valid values: active: active; deleted: deleted.</li>only description supports fuzzy query, other fields require precise query.
     */
    public $Filters;

    /**
     * @param integer $Offset The offset of paginated query. default value: 0.
     * @param integer $Limit Limit on paginated queries. default value: `20`. maximum value: `100`.
     * @param array $Filters Filter conditions. the upper limit for filters is 20, and the upper limit for filters.values is 20. if this parameter is not filled in, the content identifiers with permissions under the current appid are returned by default. detailed filtering conditions are as follows: <li>description: filter by content identifier description in batches; for example: test;</li><li>content-id: filter by content identifier id in batches; for example: eocontent-2noz78a8ev6k;</li><li>tag-key: filter by Tag key;</li><li>tag-value: filter by Tag value;</li><li>status: filter by content identifier status. valid values: active: active; deleted: deleted.</li>only description supports fuzzy query, other fields require precise query.
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
