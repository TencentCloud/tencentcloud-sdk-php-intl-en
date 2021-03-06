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
 * DescribeTaskTemplates request structure.
 *
 * @method array getTaskTemplateIds() Obtain Job template ID
 * @method void setTaskTemplateIds(array $TaskTemplateIds) Set Job template ID
 * @method array getFilters() Obtain Filter.
<li> `task-template-name` - String - Optional - Filter by task template name.</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
<li> `tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `TaskTemplateIds` parameter.
 * @method void setFilters(array $Filters) Set Filter.
<li> `task-template-name` - String - Optional - Filter by task template name.</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
<li> `tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `TaskTemplateIds` parameter.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number of returned results
 * @method void setLimit(integer $Limit) Set Number of returned results
 */
class DescribeTaskTemplatesRequest extends AbstractModel
{
    /**
     * @var array Job template ID
     */
    public $TaskTemplateIds;

    /**
     * @var array Filter.
<li> `task-template-name` - String - Optional - Filter by task template name.</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
<li> `tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `TaskTemplateIds` parameter.
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
     * @param array $TaskTemplateIds Job template ID
     * @param array $Filters Filter.
<li> `task-template-name` - String - Optional - Filter by task template name.</li>
<li> `tag-key` - String - Optional - Filter by tag key.</li>
<li> `tag-value` - String - Optional - Filter by tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with the `TaskTemplateIds` parameter.
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
        if (array_key_exists("TaskTemplateIds",$param) and $param["TaskTemplateIds"] !== null) {
            $this->TaskTemplateIds = $param["TaskTemplateIds"];
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
