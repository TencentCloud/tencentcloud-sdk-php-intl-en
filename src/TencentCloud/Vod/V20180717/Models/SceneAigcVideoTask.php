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
 * Scenario-based AIGC video generation task info
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain Error code. Returns a non-zero error code for source error. For 0, please use the ErrCode of each specific task.
 * @method void setErrCode(integer $ErrCode) Set Error code. Returns a non-zero error code for source error. For 0, please use the ErrCode of each specific task.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method integer getProgress() Obtain Task progress, with a value range of [0-100].
 * @method void setProgress(integer $Progress) Set Task progress, with a value range of [0-100].
 * @method SceneAigcVideoTaskInput getInput() Obtain Input of the AIGC video generation task.
 * @method void setInput(SceneAigcVideoTaskInput $Input) Set Input of the AIGC video generation task.
 * @method SceneAigcVideoTaskOutput getOutput() Obtain Output information of the AIGC video task.
 * @method void setOutput(SceneAigcVideoTaskOutput $Output) Set Output information of the AIGC video task.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 */
class SceneAigcVideoTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code. Returns a non-zero error code for source error. For 0, please use the ErrCode of each specific task.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var integer Task progress, with a value range of [0-100].
     */
    public $Progress;

    /**
     * @var SceneAigcVideoTaskInput Input of the AIGC video generation task.
     */
    public $Input;

    /**
     * @var SceneAigcVideoTaskOutput Output information of the AIGC video task.
     */
    public $Output;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
     * @param integer $ErrCode Error code. Returns a non-zero error code for source error. For 0, please use the ErrCode of each specific task.
     * @param string $Message Error message.
     * @param integer $Progress Task progress, with a value range of [0-100].
     * @param SceneAigcVideoTaskInput $Input Input of the AIGC video generation task.
     * @param SceneAigcVideoTaskOutput $Output Output information of the AIGC video task.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
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
            $this->Input = new SceneAigcVideoTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SceneAigcVideoTaskOutput();
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
