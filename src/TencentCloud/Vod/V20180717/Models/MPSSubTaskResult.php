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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MPS specific subtask query result type.
 *
 * @method string getTaskType() Obtain Task type. Specific subtask type in the MPS WorkflowTask structure. Value: <li>AiAnalysis.DeLogo: Intelligent erasure task.</li>
 * @method void setTaskType(string $TaskType) Set Task type. Specific subtask type in the MPS WorkflowTask structure. Value: <li>AiAnalysis.DeLogo: Intelligent erasure task.</li>
 * @method string getStatus() Obtain Task status. There are three types: PROCESSING, SUCCESS, and FAIL.
 * @method void setStatus(string $Status) Set Task status. There are three types: PROCESSING, SUCCESS, and FAIL.
 * @method string getErrCode() Obtain Error code. Returns 0 for success, other values for failure.
 * @method void setErrCode(string $ErrCode) Set Error code. Returns 0 for success, other values for failure.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getInput() Obtain MPS media processing task input. This field corresponds to the Input result in the MPS task response and is returned in JSON format.
 * @method void setInput(string $Input) Set MPS media processing task input. This field corresponds to the Input result in the MPS task response and is returned in JSON format.
 * @method MPSTaskOutput getOutput() Obtain MPS media processing task output.
 * @method void setOutput(MPSTaskOutput $Output) Set MPS media processing task output.
 */
class MPSSubTaskResult extends AbstractModel
{
    /**
     * @var string Task type. Specific subtask type in the MPS WorkflowTask structure. Value: <li>AiAnalysis.DeLogo: Intelligent erasure task.</li>
     */
    public $TaskType;

    /**
     * @var string Task status. There are three types: PROCESSING, SUCCESS, and FAIL.
     */
    public $Status;

    /**
     * @var string Error code. Returns 0 for success, other values for failure.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string MPS media processing task input. This field corresponds to the Input result in the MPS task response and is returned in JSON format.
     */
    public $Input;

    /**
     * @var MPSTaskOutput MPS media processing task output.
     */
    public $Output;

    /**
     * @param string $TaskType Task type. Specific subtask type in the MPS WorkflowTask structure. Value: <li>AiAnalysis.DeLogo: Intelligent erasure task.</li>
     * @param string $Status Task status. There are three types: PROCESSING, SUCCESS, and FAIL.
     * @param string $ErrCode Error code. Returns 0 for success, other values for failure.
     * @param string $Message Error message.
     * @param string $Input MPS media processing task input. This field corresponds to the Input result in the MPS task response and is returned in JSON format.
     * @param MPSTaskOutput $Output MPS media processing task output.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new MPSTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
