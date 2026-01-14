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
 * AIGC video generation task.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
 * @method integer getErrCode() Obtain Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
 * @method void setErrCode(integer $ErrCode) Set Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
 * @method string getMessage() Obtain Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
 * @method void setMessage(string $Message) Set Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
 * @method integer getProgress() Obtain The execution progress of a single adaptive bitrate stream. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set The execution progress of a single adaptive bitrate stream. Value range: 0-100.
 * @method AigcVideoTaskInput getInput() Obtain Input of AIGC video task.
 * @method void setInput(AigcVideoTaskInput $Input) Set Input of AIGC video task.
 * @method AigcVideoTaskOutput getOutput() Obtain Output of AIGC video task.
 * @method void setOutput(AigcVideoTaskOutput $Output) Set Output of AIGC video task.
 * @method string getSessionId() Obtain ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is not carried or is left empty, no deduplication will be performed.
 * @method void setSessionId(string $SessionId) Set ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is not carried or is left empty, no deduplication will be performed.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this parameter. It can contain up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this parameter. It can contain up to 1000 characters.
 */
class AigcVideoTask extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
     */
    public $ErrCode;

    /**
     * @var string Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
     */
    public $Message;

    /**
     * @var integer The execution progress of a single adaptive bitrate stream. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var AigcVideoTaskInput Input of AIGC video task.
     */
    public $Input;

    /**
     * @var AigcVideoTaskOutput Output of AIGC video task.
     */
    public $Output;

    /**
     * @var string ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is not carried or is left empty, no deduplication will be performed.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this parameter. It can contain up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId The task ID.
     * @param string $Status Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
     * @param integer $ErrCode Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
     * @param string $Message Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
     * @param integer $Progress The execution progress of a single adaptive bitrate stream. Value range: 0-100.
     * @param AigcVideoTaskInput $Input Input of AIGC video task.
     * @param AigcVideoTaskOutput $Output Output of AIGC video task.
     * @param string $SessionId ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is not carried or is left empty, no deduplication will be performed.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this parameter. It can contain up to 1000 characters.
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AigcVideoTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AigcVideoTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
