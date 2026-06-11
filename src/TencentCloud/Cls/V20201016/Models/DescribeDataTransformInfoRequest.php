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
 * DescribeDataTransformInfo request structure.
 *
 * @method array getFilters() Obtain - taskName
Filter by [processing task name].
Type: String
Required: No
Example: test-task

- taskId
Filter by [processing task id].
Type: String
Required: No
Example: a3622556-6402-4942-b4ff-5ae32ec29810
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.

- topicId
Filter by [source topicId].
Type: String
Required: No
Example: 756cec3e-a0a5-44c3-85a8-090870582000
Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

- status
Filter by [Task running status]. 1: Preparing, 2: Running, 3: Stopping, 4: Stopped.
Type: String
Required: No
Example: 1

- hasServiceLog
Filter by [whether service logs are enabled]. 1: not enabled, 2: on.
Type: String
Required: No
Example: 1

- dstTopicType
Filter by [Target topic Type]. 1: Fixed, 2: Dynamic.
Type: String
Required: No
Example: 1

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method void setFilters(array $Filters) Set - taskName
Filter by [processing task name].
Type: String
Required: No
Example: test-task

- taskId
Filter by [processing task id].
Type: String
Required: No
Example: a3622556-6402-4942-b4ff-5ae32ec29810
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.

- topicId
Filter by [source topicId].
Type: String
Required: No
Example: 756cec3e-a0a5-44c3-85a8-090870582000
Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

- status
Filter by [Task running status]. 1: Preparing, 2: Running, 3: Stopping, 4: Stopped.
Type: String
Required: No
Example: 1

- hasServiceLog
Filter by [whether service logs are enabled]. 1: not enabled, 2: on.
Type: String
Required: No
Example: 1

- dstTopicType
Filter by [Target topic Type]. 1: Fixed, 2: Dynamic.
Type: String
Required: No
Example: 1

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method integer getOffset() Obtain The pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method integer getType() Obtain Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
 * @method void setType(integer $Type) Set Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
 * @method string getTaskId() Obtain When Type is 1, this parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
 * @method void setTaskId(string $TaskId) Set When Type is 1, this parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
 */
class DescribeDataTransformInfoRequest extends AbstractModel
{
    /**
     * @var array - taskName
Filter by [processing task name].
Type: String
Required: No
Example: test-task

- taskId
Filter by [processing task id].
Type: String
Required: No
Example: a3622556-6402-4942-b4ff-5ae32ec29810
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.

- topicId
Filter by [source topicId].
Type: String
Required: No
Example: 756cec3e-a0a5-44c3-85a8-090870582000
Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

- status
Filter by [Task running status]. 1: Preparing, 2: Running, 3: Stopping, 4: Stopped.
Type: String
Required: No
Example: 1

- hasServiceLog
Filter by [whether service logs are enabled]. 1: not enabled, 2: on.
Type: String
Required: No
Example: 1

- dstTopicType
Filter by [Target topic Type]. 1: Fixed, 2: Dynamic.
Type: String
Required: No
Example: 1

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     */
    public $Filters;

    /**
     * @var integer The pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
     */
    public $Type;

    /**
     * @var string When Type is 1, this parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
     */
    public $TaskId;

    /**
     * @param array $Filters - taskName
Filter by [processing task name].
Type: String
Required: No
Example: test-task

- taskId
Filter by [processing task id].
Type: String
Required: No
Example: a3622556-6402-4942-b4ff-5ae32ec29810
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.

- topicId
Filter by [source topicId].
Type: String
Required: No
Example: 756cec3e-a0a5-44c3-85a8-090870582000
Log topic ID
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).

- status
Filter by [Task running status]. 1: Preparing, 2: Running, 3: Stopping, 4: Stopped.
Type: String
Required: No
Example: 1

- hasServiceLog
Filter by [whether service logs are enabled]. 1: not enabled, 2: on.
Type: String
Required: No
Example: 1

- dstTopicType
Filter by [Target topic Type]. 1: Fixed, 2: Dynamic.
Type: String
Required: No
Example: 1

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     * @param integer $Offset The pagination offset. Default value: 0.
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param integer $Type Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
     * @param string $TaskId When Type is 1, this parameter is required.
Data processing task ID - Search the data processing task list basic information (https://www.tencentcloud.com/document/product/614/72182?from_cn_redirect=1) to get the data processing task ID.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
