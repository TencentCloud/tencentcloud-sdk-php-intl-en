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
 * DescribeScheduledSqlInfo request structure.
 *
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method string getName() Obtain Task name.
 * @method void setName(string $Name) Set Task name.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method array getFilters() Obtain -srcTopicName is filtered by [source log topic name] with fuzzy matching. Type: String. Required: No. Example: business log topic 1. Get the log topic name by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Filter dstTopicName by [target log topic name] with fuzzy matching. Type: String. Required: No. Example: Business log topic 2. Get the log topic name by [getting the log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- srcTopicId is filtered by [source log topic ID]. Type: String. Required: No. Example: a4478687-2382-4486-9692-de7986350f6b. Get the log topic id by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-dstTopicId is filtered by [target log topic ID]. Type: String. Required: No. Example: bd4d3375-d72a-4cd2-988d-d8eda2bd62b0. Get log topic ID by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-bizType is filtered by [topic type], 0: log topic; 1: metric topic. Type: String. Required: No.
-Status is filtered by [task status]: 1: running; 2: stop; 3: exception. Type: String. Required: no.
-Filter the taskName by [task name] with fuzzy matching. Type: String. Required: No. Example: metricTask. Search the task name by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
-taskId is filtered by [task ID] with fuzzy matching. Type: String. Required: No. Example: 9c64f9c1-a14e-4b59-b074-5b73cac3dd66. Obtain the task ID by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
 * @method void setFilters(array $Filters) Set -srcTopicName is filtered by [source log topic name] with fuzzy matching. Type: String. Required: No. Example: business log topic 1. Get the log topic name by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Filter dstTopicName by [target log topic name] with fuzzy matching. Type: String. Required: No. Example: Business log topic 2. Get the log topic name by [getting the log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- srcTopicId is filtered by [source log topic ID]. Type: String. Required: No. Example: a4478687-2382-4486-9692-de7986350f6b. Get the log topic id by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-dstTopicId is filtered by [target log topic ID]. Type: String. Required: No. Example: bd4d3375-d72a-4cd2-988d-d8eda2bd62b0. Get log topic ID by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-bizType is filtered by [topic type], 0: log topic; 1: metric topic. Type: String. Required: No.
-Status is filtered by [task status]: 1: running; 2: stop; 3: exception. Type: String. Required: no.
-Filter the taskName by [task name] with fuzzy matching. Type: String. Required: No. Example: metricTask. Search the task name by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
-taskId is filtered by [task ID] with fuzzy matching. Type: String. Required: No. Example: 9c64f9c1-a14e-4b59-b074-5b73cac3dd66. Obtain the task ID by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
 */
class DescribeScheduledSqlInfoRequest extends AbstractModel
{
    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Task name.
     */
    public $Name;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var array -srcTopicName is filtered by [source log topic name] with fuzzy matching. Type: String. Required: No. Example: business log topic 1. Get the log topic name by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Filter dstTopicName by [target log topic name] with fuzzy matching. Type: String. Required: No. Example: Business log topic 2. Get the log topic name by [getting the log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- srcTopicId is filtered by [source log topic ID]. Type: String. Required: No. Example: a4478687-2382-4486-9692-de7986350f6b. Get the log topic id by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-dstTopicId is filtered by [target log topic ID]. Type: String. Required: No. Example: bd4d3375-d72a-4cd2-988d-d8eda2bd62b0. Get log topic ID by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-bizType is filtered by [topic type], 0: log topic; 1: metric topic. Type: String. Required: No.
-Status is filtered by [task status]: 1: running; 2: stop; 3: exception. Type: String. Required: no.
-Filter the taskName by [task name] with fuzzy matching. Type: String. Required: No. Example: metricTask. Search the task name by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
-taskId is filtered by [task ID] with fuzzy matching. Type: String. Required: No. Example: 9c64f9c1-a14e-4b59-b074-5b73cac3dd66. Obtain the task ID by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
     */
    public $Filters;

    /**
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param string $Name Task name.
     * @param string $TaskId Task ID.
     * @param array $Filters -srcTopicName is filtered by [source log topic name] with fuzzy matching. Type: String. Required: No. Example: business log topic 1. Get the log topic name by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Filter dstTopicName by [target log topic name] with fuzzy matching. Type: String. Required: No. Example: Business log topic 2. Get the log topic name by [getting the log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
- srcTopicId is filtered by [source log topic ID]. Type: String. Required: No. Example: a4478687-2382-4486-9692-de7986350f6b. Get the log topic id by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-dstTopicId is filtered by [target log topic ID]. Type: String. Required: No. Example: bd4d3375-d72a-4cd2-988d-d8eda2bd62b0. Get log topic ID by [get log topic list](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-bizType is filtered by [topic type], 0: log topic; 1: metric topic. Type: String. Required: No.
-Status is filtered by [task status]: 1: running; 2: stop; 3: exception. Type: String. Required: no.
-Filter the taskName by [task name] with fuzzy matching. Type: String. Required: No. Example: metricTask. Search the task name by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
-taskId is filtered by [task ID] with fuzzy matching. Type: String. Required: No. Example: 9c64f9c1-a14e-4b59-b074-5b73cac3dd66. Obtain the task ID by [retrieving the scheduled SQL analysis task list](https://www.tencentcloud.com/document/product/614/95519?from_cn_redirect=1).
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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
