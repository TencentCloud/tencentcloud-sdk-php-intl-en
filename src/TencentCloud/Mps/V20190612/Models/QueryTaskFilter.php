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
 * Query the list filter criteria for AIGC tasks
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getTaskType() Obtain <p>Task type</p>
 * @method void setTaskType(string $TaskType) Set <p>Task type</p>
 * @method string getTaskStatus() Obtain <p>Task status.</p>
 * @method void setTaskStatus(string $TaskStatus) Set <p>Task status.</p>
 * @method string getResolution() Obtain <p>Resolution</p>
 * @method void setResolution(string $Resolution) Set <p>Resolution</p>
 * @method string getRatio() Obtain <p>Aspect ratio.</p>
 * @method void setRatio(string $Ratio) Set <p>Aspect ratio.</p>
 */
class QueryTaskFilter extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task type</p>
     */
    public $TaskType;

    /**
     * @var string <p>Task status.</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>Resolution</p>
     */
    public $Resolution;

    /**
     * @var string <p>Aspect ratio.</p>
     */
    public $Ratio;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $TaskType <p>Task type</p>
     * @param string $TaskStatus <p>Task status.</p>
     * @param string $Resolution <p>Resolution</p>
     * @param string $Ratio <p>Aspect ratio.</p>
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
