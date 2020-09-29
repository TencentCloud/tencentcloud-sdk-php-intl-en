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
 * Video editing task information
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
 * @method integer getErrCode() Obtain Error code
<li>0: success;</li>
<li>Other values: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method EditMediaTaskInput getInput() Obtain Input of video editing task.
 * @method void setInput(EditMediaTaskInput $Input) Set Input of video editing task.
 * @method EditMediaTaskOutput getOutput() Obtain Output of video editing task.
 * @method void setOutput(EditMediaTaskOutput $Output) Set Output of video editing task.
 */
class EditMediaTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code
<li>0: success;</li>
<li>Other values: failure.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var EditMediaTaskInput Input of video editing task.
     */
    public $Input;

    /**
     * @var EditMediaTaskOutput Output of video editing task.
     */
    public $Output;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
     * @param string $Message Error message.
     * @param EditMediaTaskInput $Input Input of video editing task.
     * @param EditMediaTaskOutput $Output Output of video editing task.
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new EditMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new EditMediaTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
