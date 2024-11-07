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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Execution information of the adaptive bitrate streaming task.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method array getComplexAdaptiveDynamicStreamingTaskResultSet() Obtain Execution status and result of the complex adaptive bitrate streaming task. Each array element corresponds to an adaptive bitrate streaming template specified when initiating the task.
 * @method void setComplexAdaptiveDynamicStreamingTaskResultSet(array $ComplexAdaptiveDynamicStreamingTaskResultSet) Set Execution status and result of the complex adaptive bitrate streaming task. Each array element corresponds to an adaptive bitrate streaming template specified when initiating the task.
 */
class ComplexAdaptiveDynamicStreamingTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var array Execution status and result of the complex adaptive bitrate streaming task. Each array element corresponds to an adaptive bitrate streaming template specified when initiating the task.
     */
    public $ComplexAdaptiveDynamicStreamingTaskResultSet;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     * @param array $ComplexAdaptiveDynamicStreamingTaskResultSet Execution status and result of the complex adaptive bitrate streaming task. Each array element corresponds to an adaptive bitrate streaming template specified when initiating the task.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingTaskResultSet",$param) and $param["ComplexAdaptiveDynamicStreamingTaskResultSet"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingTaskResultSet = [];
            foreach ($param["ComplexAdaptiveDynamicStreamingTaskResultSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskResult();
                $obj->deserialize($value);
                array_push($this->ComplexAdaptiveDynamicStreamingTaskResultSet, $obj);
            }
        }
    }
}
