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
 * Media file composing task information
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getErrCode() Obtain Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTaskInput getInput() Obtain Input of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInput(ComposeMediaTaskInput $Input) Set Input of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaTaskOutput getOutput() Obtain Output of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(ComposeMediaTaskOutput $Output) Set Output of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ComposeMediaTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var ComposeMediaTaskInput Input of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var ComposeMediaTaskOutput Output of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTaskInput $Input Input of media file composing task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaTaskOutput $Output Output of media file composing task.
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
            $this->Input = new ComposeMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ComposeMediaTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
