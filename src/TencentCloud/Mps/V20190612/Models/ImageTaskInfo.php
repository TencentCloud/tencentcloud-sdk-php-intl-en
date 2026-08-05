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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task overview for image processing.
 *
 * @method string getTaskId() Obtain <p>TaskId of the image processing task.</p>
 * @method void setTaskId(string $TaskId) Set <p>TaskId of the image processing task.</p>
 * @method string getStatus() Obtain <p>Task status.</p><p>Enumeration values: </p><ul><li>FINISH: Task completion</li><li>PROCESSING: Task processing</li></ul>
 * @method void setStatus(string $Status) Set <p>Task status.</p><p>Enumeration values: </p><ul><li>FINISH: Task completion</li><li>PROCESSING: Task processing</li></ul>
 * @method string getInput() Obtain <p>Input file.</p>
 * @method void setInput(string $Input) Set <p>Input file.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getBeginProcessTime() Obtain <p>Processing start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setBeginProcessTime(string $BeginProcessTime) Set <p>Processing start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getFinishTime() Obtain <p>End time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setFinishTime(string $FinishTime) Set <p>End time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method boolean getSubTaskHasFailed() Obtain <p>Subtask failure identifier.</p>
 * @method void setSubTaskHasFailed(boolean $SubTaskHasFailed) Set <p>Subtask failure identifier.</p>
 */
class ImageTaskInfo extends AbstractModel
{
    /**
     * @var string <p>TaskId of the image processing task.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task status.</p><p>Enumeration values: </p><ul><li>FINISH: Task completion</li><li>PROCESSING: Task processing</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Input file.</p>
     */
    public $Input;

    /**
     * @var string <p>Creation time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Processing start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $BeginProcessTime;

    /**
     * @var string <p>End time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $FinishTime;

    /**
     * @var boolean <p>Subtask failure identifier.</p>
     */
    public $SubTaskHasFailed;

    /**
     * @param string $TaskId <p>TaskId of the image processing task.</p>
     * @param string $Status <p>Task status.</p><p>Enumeration values: </p><ul><li>FINISH: Task completion</li><li>PROCESSING: Task processing</li></ul>
     * @param string $Input <p>Input file.</p>
     * @param string $CreateTime <p>Creation time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $BeginProcessTime <p>Processing start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $FinishTime <p>End time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     * @param boolean $SubTaskHasFailed <p>Subtask failure identifier.</p>
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

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("SubTaskHasFailed",$param) and $param["SubTaskHasFailed"] !== null) {
            $this->SubTaskHasFailed = $param["SubTaskHasFailed"];
        }
    }
}
