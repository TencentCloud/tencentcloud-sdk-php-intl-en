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
 * Intelligent description result type.
 *
 * @method string getStatus() Obtain Task status, including PROCESSING, SUCCESS, and FAIL.
 * @method void setStatus(string $Status) Set Task status, including PROCESSING, SUCCESS, and FAIL.
 * @method integer getErrCode() Obtain Error code. `0`: Task successful. Other values: Task failed.
 * @method void setErrCode(integer $ErrCode) Set Error code. `0`: Task successful. Other values: Task failed.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AiAnalysisTaskDescriptionInput getInput() Obtain Intelligent description task input.
 * @method void setInput(AiAnalysisTaskDescriptionInput $Input) Set Intelligent description task input.
 * @method AiAnalysisTaskDescriptionOutput getOutput() Obtain Intelligent description task output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiAnalysisTaskDescriptionOutput $Output) Set Intelligent description task output.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskDescriptionResult extends AbstractModel
{
    /**
     * @var string Task status, including PROCESSING, SUCCESS, and FAIL.
     */
    public $Status;

    /**
     * @var integer Error code. `0`: Task successful. Other values: Task failed.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var AiAnalysisTaskDescriptionInput Intelligent description task input.
     */
    public $Input;

    /**
     * @var AiAnalysisTaskDescriptionOutput Intelligent description task output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @param string $Status Task status, including PROCESSING, SUCCESS, and FAIL.
     * @param integer $ErrCode Error code. `0`: Task successful. Other values: Task failed.
     * @param string $Message Error message.
     * @param AiAnalysisTaskDescriptionInput $Input Intelligent description task input.
     * @param AiAnalysisTaskDescriptionOutput $Output Intelligent description task output.
Note: This field may return null, indicating that no valid values can be obtained.
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
            $this->Input = new AiAnalysisTaskDescriptionInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskDescriptionOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
