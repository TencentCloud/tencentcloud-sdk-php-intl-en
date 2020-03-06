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
 * @method string getStatus() Obtain Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set Task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method integer getErrCode() Obtain Error code. 0: success; other values: failure.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: success; other values: failure.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AiRecognitionTaskFaceResultInput getInput() Obtain Input information of face recognition task.
 * @method void setInput(AiRecognitionTaskFaceResultInput $Input) Set Input information of face recognition task.
 * @method AiRecognitionTaskFaceResultOutput getOutput() Obtain Output information of face recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(AiRecognitionTaskFaceResultOutput $Output) Set Output information of face recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
 */

/**
 *Face recognition result.
 */
class AiRecognitionTaskFaceResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var integer Error code. 0: success; other values: failure.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var AiRecognitionTaskFaceResultInput Input information of face recognition task.
     */
    public $Input;

    /**
     * @var AiRecognitionTaskFaceResultOutput Output information of face recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Output;
    /**
     * @param string $Status Task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param integer $ErrCode Error code. 0: success; other values: failure.
     * @param string $Message Error message.
     * @param AiRecognitionTaskFaceResultInput $Input Input information of face recognition task.
     * @param AiRecognitionTaskFaceResultOutput $Output Output information of face recognition task.
Note: this field may return null, indicating that no valid values can be obtained.
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
            $this->Input = new AiRecognitionTaskFaceResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiRecognitionTaskFaceResultOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
