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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordingRuleTask request structure.
 *
 * @method string getTopicId() Obtain <p>Source metric topic id.</p>
 * @method void setTopicId(string $TopicId) Set <p>Source metric topic id.</p>
 * @method integer getOffset() Obtain <p>Pagination offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
 * @method array getFilters() Obtain <li>yamlId [Configuration ID of the associated yaml] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskName [Task name] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskId [Task ID] for filtering, fuzzy matching. Type: String. Required: No</li>
 * @method void setFilters(array $Filters) Set <li>yamlId [Configuration ID of the associated yaml] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskName [Task name] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskId [Task ID] for filtering, fuzzy matching. Type: String. Required: No</li>
 */
class DescribeRecordingRuleTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Source metric topic id.</p>
     */
    public $TopicId;

    /**
     * @var integer <p>Pagination offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var array <li>yamlId [Configuration ID of the associated yaml] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskName [Task name] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskId [Task ID] for filtering, fuzzy matching. Type: String. Required: No</li>
     */
    public $Filters;

    /**
     * @param string $TopicId <p>Source metric topic id.</p>
     * @param integer $Offset <p>Pagination offset. Default value: 0.</p>
     * @param integer $Limit <p>Maximum number of entries per page. Default value: 20. Maximum value: 100.</p>
     * @param array $Filters <li>yamlId [Configuration ID of the associated yaml] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskName [Task name] for filtering, fuzzy matching. Type: String. Required: No</li> <li>taskId [Task ID] for filtering, fuzzy matching. Type: String. Required: No</li>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
