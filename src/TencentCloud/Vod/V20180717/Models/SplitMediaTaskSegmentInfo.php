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
 * Information of a video splitting task.
 *
 * @method SplitMediaTaskInput getInput() Obtain Input information of a video splitting task.
 * @method void setInput(SplitMediaTaskInput $Input) Set Input information of a video splitting task.
 * @method TaskOutputMediaInfo getOutput() Obtain Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOutput(TaskOutputMediaInfo $Output) Set Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProcedureTaskId() Obtain If a video processing flow is specified when a video splitting task is initiated, this field will be the task flow ID.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set If a video processing flow is specified when a video splitting task is initiated, this field will be the task flow ID.
 */
class SplitMediaTaskSegmentInfo extends AbstractModel
{
    /**
     * @var SplitMediaTaskInput Input information of a video splitting task.
     */
    public $Input;

    /**
     * @var TaskOutputMediaInfo Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string If a video processing flow is specified when a video splitting task is initiated, this field will be the task flow ID.
     */
    public $ProcedureTaskId;

    /**
     * @param SplitMediaTaskInput $Input Input information of a video splitting task.
     * @param TaskOutputMediaInfo $Output Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProcedureTaskId If a video processing flow is specified when a video splitting task is initiated, this field will be the task flow ID.
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SplitMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TaskOutputMediaInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }
    }
}
