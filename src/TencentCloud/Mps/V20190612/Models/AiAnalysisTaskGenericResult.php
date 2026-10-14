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
 * Intelligent Analysis common result type.
 *
 * @method string getStatus() Obtain <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p><p>Enumeration values: </p><ul><li>PROCESSING: Processing</li><li>SUCCESS: Success</li><li>FAIL: Failure</li></ul>
 * @method void setStatus(string $Status) Set <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p><p>Enumeration values: </p><ul><li>PROCESSING: Processing</li><li>SUCCESS: Success</li><li>FAIL: Failure</li></ul>
 * @method integer getErrCode() Obtain <p>Error code. 0: Successful. Other values: Failed.</p>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code. 0: Successful. Other values: Failed.</p>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method AiAnalysisTaskGenericInput getInput() Obtain <p>Intelligent analysis task input.</p>
 * @method void setInput(AiAnalysisTaskGenericInput $Input) Set <p>Intelligent analysis task input.</p>
 * @method AiAnalysisTaskGenericOutput getOutput() Obtain <p>Intelligent analysis task output.</p>
 * @method void setOutput(AiAnalysisTaskGenericOutput $Output) Set <p>Intelligent analysis task output.</p>
 */
class AiAnalysisTaskGenericResult extends AbstractModel
{
    /**
     * @var string <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p><p>Enumeration values: </p><ul><li>PROCESSING: Processing</li><li>SUCCESS: Success</li><li>FAIL: Failure</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Error code. 0: Successful. Other values: Failed.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var AiAnalysisTaskGenericInput <p>Intelligent analysis task input.</p>
     */
    public $Input;

    /**
     * @var AiAnalysisTaskGenericOutput <p>Intelligent analysis task output.</p>
     */
    public $Output;

    /**
     * @param string $Status <p>Task status. Valid values are PROCESSING, SUCCESS, and FAIL.</p><p>Enumeration values: </p><ul><li>PROCESSING: Processing</li><li>SUCCESS: Success</li><li>FAIL: Failure</li></ul>
     * @param integer $ErrCode <p>Error code. 0: Successful. Other values: Failed.</p>
     * @param string $Message <p>Error message.</p>
     * @param AiAnalysisTaskGenericInput $Input <p>Intelligent analysis task input.</p>
     * @param AiAnalysisTaskGenericOutput $Output <p>Intelligent analysis task output.</p>
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
            $this->Input = new AiAnalysisTaskGenericInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskGenericOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
