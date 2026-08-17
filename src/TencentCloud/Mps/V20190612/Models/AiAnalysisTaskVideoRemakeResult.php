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
 * Data structure of the video deduplication result.
 *
 * @method string getStatus() Obtain Task status. Valid values are `PROCESSING`, `SUCCESS`, and `FAIL`.
 * @method void setStatus(string $Status) Set Task status. Valid values are `PROCESSING`, `SUCCESS`, and `FAIL`.
 * @method integer getErrCode() Obtain Error code. 0: successful; other values: failed.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: successful; other values: failed.
 * @method string getMessage() Obtain Error message
 * @method void setMessage(string $Message) Set Error message
 * @method AiAnalysisTaskVideoRemakeInput getInput() Obtain Task input for deduplication
 * @method void setInput(AiAnalysisTaskVideoRemakeInput $Input) Set Task input for deduplication
 * @method AiAnalysisTaskVideoRemakeOutput getOutput() Obtain 
 * @method void setOutput(AiAnalysisTaskVideoRemakeOutput $Output) Set 
 */
class AiAnalysisTaskVideoRemakeResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values are `PROCESSING`, `SUCCESS`, and `FAIL`.
     */
    public $Status;

    /**
     * @var integer Error code. 0: successful; other values: failed.
     */
    public $ErrCode;

    /**
     * @var string Error message
     */
    public $Message;

    /**
     * @var AiAnalysisTaskVideoRemakeInput Task input for deduplication
     */
    public $Input;

    /**
     * @var AiAnalysisTaskVideoRemakeOutput 
     */
    public $Output;

    /**
     * @param string $Status Task status. Valid values are `PROCESSING`, `SUCCESS`, and `FAIL`.
     * @param integer $ErrCode Error code. 0: successful; other values: failed.
     * @param string $Message Error message
     * @param AiAnalysisTaskVideoRemakeInput $Input Task input for deduplication
     * @param AiAnalysisTaskVideoRemakeOutput $Output 
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
            $this->Input = new AiAnalysisTaskVideoRemakeInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskVideoRemakeOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
