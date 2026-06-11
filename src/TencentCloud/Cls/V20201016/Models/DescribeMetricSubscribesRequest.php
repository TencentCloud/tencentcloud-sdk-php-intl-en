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
 * DescribeMetricSubscribes request structure.
 *
 * @method string getTopicId() Obtain Log topic id
 * @method void setTopicId(string $TopicId) Set Log topic id
 * @method array getFilters() Obtain <br><li> Filter taskId by [configuration id]. Type: String. Required: No</li>
<br><li> Name is filtered by [configuration name]. Type: String Required: No</li>
<br><li> Filter status by [configuration status tag]. Type: String Required: No</li>
<br><li>Each request can have up to 10 Filters. The maximum number of Filter.Values is 100.</li>
 * @method void setFilters(array $Filters) Set <br><li> Filter taskId by [configuration id]. Type: String. Required: No</li>
<br><li> Name is filtered by [configuration name]. Type: String Required: No</li>
<br><li> Filter status by [configuration status tag]. Type: String Required: No</li>
<br><li>Each request can have up to 10 Filters. The maximum number of Filter.Values is 100.</li>
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 */
class DescribeMetricSubscribesRequest extends AbstractModel
{
    /**
     * @var string Log topic id
     */
    public $TopicId;

    /**
     * @var array <br><li> Filter taskId by [configuration id]. Type: String. Required: No</li>
<br><li> Name is filtered by [configuration name]. Type: String Required: No</li>
<br><li> Filter status by [configuration status tag]. Type: String Required: No</li>
<br><li>Each request can have up to 10 Filters. The maximum number of Filter.Values is 100.</li>
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @param string $TopicId Log topic id
     * @param array $Filters <br><li> Filter taskId by [configuration id]. Type: String. Required: No</li>
<br><li> Name is filtered by [configuration name]. Type: String Required: No</li>
<br><li> Filter status by [configuration status tag]. Type: String Required: No</li>
<br><li>Each request can have up to 10 Filters. The maximum number of Filter.Values is 100.</li>
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
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
