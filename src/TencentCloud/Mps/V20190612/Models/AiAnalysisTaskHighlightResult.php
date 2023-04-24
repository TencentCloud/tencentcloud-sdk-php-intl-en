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
 * The result of an intelligent highlight generation task.
 *
 * @method string getStatus() Obtain The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
 * @method void setStatus(string $Status) Set The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
 * @method integer getErrCode() Obtain Error code. `0`: The task succeeded; other values: The task failed.
 * @method void setErrCode(integer $ErrCode) Set Error code. `0`: The task succeeded; other values: The task failed.
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method AiAnalysisTaskHighlightInput getInput() Obtain The input of the intelligent highlight generation task.
 * @method void setInput(AiAnalysisTaskHighlightInput $Input) Set The input of the intelligent highlight generation task.
 * @method AiAnalysisTaskHighlightOutput getOutput() Obtain The output of the intelligent highlight generation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiAnalysisTaskHighlightOutput $Output) Set The output of the intelligent highlight generation task.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskHighlightResult extends AbstractModel
{
    /**
     * @var string The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
     */
    public $Status;

    /**
     * @var integer Error code. `0`: The task succeeded; other values: The task failed.
     */
    public $ErrCode;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var AiAnalysisTaskHighlightInput The input of the intelligent highlight generation task.
     */
    public $Input;

    /**
     * @var AiAnalysisTaskHighlightOutput The output of the intelligent highlight generation task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @param string $Status The task status. Valid values: `PROCESSING`, `SUCCESS`, `FAIL`.
     * @param integer $ErrCode Error code. `0`: The task succeeded; other values: The task failed.
     * @param string $Message The error message.
     * @param AiAnalysisTaskHighlightInput $Input The input of the intelligent highlight generation task.
     * @param AiAnalysisTaskHighlightOutput $Output The output of the intelligent highlight generation task.
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
            $this->Input = new AiAnalysisTaskHighlightInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskHighlightOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
