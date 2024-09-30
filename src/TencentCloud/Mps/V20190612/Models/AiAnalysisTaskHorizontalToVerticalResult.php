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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent landscape-to-portrait result type.
 *
 * @method string getStatus() Obtain Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getErrCode() Obtain Error code. 0: Task successful. Other values: Task failed.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: Task successful. Other values: Task failed.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message

Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskHorizontalToVerticalInput getInput() Obtain Intelligent landscape-to-portrait task input.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInput(AiAnalysisTaskHorizontalToVerticalInput $Input) Set Intelligent landscape-to-portrait task input.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AiAnalysisTaskHorizontalToVerticalOutput getOutput() Obtain Intelligent landscape-to-portrait task output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiAnalysisTaskHorizontalToVerticalOutput $Output) Set Intelligent landscape-to-portrait task output.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskHorizontalToVerticalResult extends AbstractModel
{
    /**
     * @var string Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Error code. 0: Task successful. Other values: Task failed.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string Error message

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var AiAnalysisTaskHorizontalToVerticalInput Intelligent landscape-to-portrait task input.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var AiAnalysisTaskHorizontalToVerticalOutput Intelligent landscape-to-portrait task output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @param string $Status Task status, including PROCESSING, SUCCESS, and FAIL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrCode Error code. 0: Task successful. Other values: Task failed.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message

Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskHorizontalToVerticalInput $Input Intelligent landscape-to-portrait task input.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AiAnalysisTaskHorizontalToVerticalOutput $Output Intelligent landscape-to-portrait task output.
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
            $this->Input = new AiAnalysisTaskHorizontalToVerticalInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskHorizontalToVerticalOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
