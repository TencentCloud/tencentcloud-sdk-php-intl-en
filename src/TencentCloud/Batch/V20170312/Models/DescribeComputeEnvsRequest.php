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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeComputeEnvs request structure.
 *
 * @method array getEnvIds() Obtain Compute environment ID
 * @method void setEnvIds(array $EnvIds) Set Compute environment ID
 * @method array getFilters() Obtain Filter.
<li> `zone` - String - Optional - Filter by availability zone.</li>
<li> `env-id` - String - Optional - Filter by compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by compute environment name.</li>
<li> `resource-type` - String - Optional - Filter by compute resource type, which can be CVM or CPM (BM).</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
</li>`tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `EnvIds` parameter.
 * @method void setFilters(array $Filters) Set Filter.
<li> `zone` - String - Optional - Filter by availability zone.</li>
<li> `env-id` - String - Optional - Filter by compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by compute environment name.</li>
<li> `resource-type` - String - Optional - Filter by compute resource type, which can be CVM or CPM (BM).</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
</li>`tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `EnvIds` parameter.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number of returned results
 * @method void setLimit(integer $Limit) Set Number of returned results
 */
class DescribeComputeEnvsRequest extends AbstractModel
{
    /**
     * @var array Compute environment ID
     */
    public $EnvIds;

    /**
     * @var array Filter.
<li> `zone` - String - Optional - Filter by availability zone.</li>
<li> `env-id` - String - Optional - Filter by compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by compute environment name.</li>
<li> `resource-type` - String - Optional - Filter by compute resource type, which can be CVM or CPM (BM).</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
</li>`tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `EnvIds` parameter.
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results
     */
    public $Limit;

    /**
     * @param array $EnvIds Compute environment ID
     * @param array $Filters Filter.
<li> `zone` - String - Optional - Filter by availability zone.</li>
<li> `env-id` - String - Optional - Filter by compute environment ID.</li>
<li> `env-name` - String - Optional - Filter by compute environment name.</li>
<li> `resource-type` - String - Optional - Filter by compute resource type, which can be CVM or CPM (BM).</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
</li>`tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `EnvIds` parameter.
     * @param integer $Offset Offset
     * @param integer $Limit Number of returned results
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
        if (array_key_exists("EnvIds",$param) and $param["EnvIds"] !== null) {
            $this->EnvIds = $param["EnvIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
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
    }
}
