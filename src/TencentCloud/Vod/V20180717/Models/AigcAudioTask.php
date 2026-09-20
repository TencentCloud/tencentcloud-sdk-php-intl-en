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
 * Create AIGC sound effect task information.
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getStatus() Obtain <p>Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li></p>
 * @method void setStatus(string $Status) Set <p>Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li></p>
 * @method integer getErrCode() Obtain <p>Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
 * @method string getErrCodeExt() Obtain <p>Extended error code. An empty string indicates success, and other values indicate failure.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: The input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter value error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li><li>InvalidParameter: Invalid parameter.</li><li>InvalidParameter.MediaFormat: Invalid media format.</li><li>ContentModerationFailed: Content moderation failed.</li><li>ResourceInsufficient: Insufficient resources.</li><li>ModelGenerateFailed: Model generation failed.</li><li>ResourceNotFound: Resource not found.</li><li>OperationCanceled: Operation canceled.</li><li>TaskTimeout: Task timeout.</li></ul>
 * @method void setErrCodeExt(string $ErrCodeExt) Set <p>Extended error code. An empty string indicates success, and other values indicate failure.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: The input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter value error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li><li>InvalidParameter: Invalid parameter.</li><li>InvalidParameter.MediaFormat: Invalid media format.</li><li>ContentModerationFailed: Content moderation failed.</li><li>ResourceInsufficient: Insufficient resources.</li><li>ModelGenerateFailed: Model generation failed.</li><li>ResourceNotFound: Resource not found.</li><li>OperationCanceled: Operation canceled.</li><li>TaskTimeout: Task timeout.</li></ul>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method integer getProgress() Obtain <p>Task progress. Value range: 0–100.</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress. Value range: 0–100.</p>
 * @method AigcAudioTaskInput getInput() Obtain <p>Input information of the AIGC audio task.</p>
 * @method void setInput(AigcAudioTaskInput $Input) Set <p>Input information of the AIGC audio task.</p>
 * @method AigcAudioTaskOutput getOutput() Obtain <p>Output information of AIGC audio tasks.</p>
 * @method void setOutput(AigcAudioTaskOutput $Output) Set <p>Output information of AIGC audio tasks.</p>
 */
class AigcAudioTask extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li></p>
     */
    public $Status;

    /**
     * @var integer <p>Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Extended error code. An empty string indicates success, and other values indicate failure.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: The input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter value error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li><li>InvalidParameter: Invalid parameter.</li><li>InvalidParameter.MediaFormat: Invalid media format.</li><li>ContentModerationFailed: Content moderation failed.</li><li>ResourceInsufficient: Insufficient resources.</li><li>ModelGenerateFailed: Model generation failed.</li><li>ResourceNotFound: Resource not found.</li><li>OperationCanceled: Operation canceled.</li><li>TaskTimeout: Task timeout.</li></ul>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var integer <p>Task progress. Value range: 0–100.</p>
     */
    public $Progress;

    /**
     * @var AigcAudioTaskInput <p>Input information of the AIGC audio task.</p>
     */
    public $Input;

    /**
     * @var AigcAudioTaskOutput <p>Output information of AIGC audio tasks.</p>
     */
    public $Output;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $Status <p>Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li></p>
     * @param integer $ErrCode <p>Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.</p>
     * @param string $ErrCodeExt <p>Extended error code. An empty string indicates success, and other values indicate failure.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: The input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter value error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li><li>InvalidParameter: Invalid parameter.</li><li>InvalidParameter.MediaFormat: Invalid media format.</li><li>ContentModerationFailed: Content moderation failed.</li><li>ResourceInsufficient: Insufficient resources.</li><li>ModelGenerateFailed: Model generation failed.</li><li>ResourceNotFound: Resource not found.</li><li>OperationCanceled: Operation canceled.</li><li>TaskTimeout: Task timeout.</li></ul>
     * @param string $Message <p>Error message.</p>
     * @param integer $Progress <p>Task progress. Value range: 0–100.</p>
     * @param AigcAudioTaskInput $Input <p>Input information of the AIGC audio task.</p>
     * @param AigcAudioTaskOutput $Output <p>Output information of AIGC audio tasks.</p>
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AigcAudioTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AigcAudioTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
