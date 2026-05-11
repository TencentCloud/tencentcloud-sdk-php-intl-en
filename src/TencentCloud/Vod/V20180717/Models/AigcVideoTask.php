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
 * AIGC video generation task info
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getStatus() Obtain <p>Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li></p>
 * @method void setStatus(string $Status) Set <p>Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li></p>
 * @method integer getErrCode() Obtain <p>Error code. A non-zero error code is returned back when a source error occurs. Please use the ErrCode of each specific task when 0 is returned.</p>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code. A non-zero error code is returned back when a source error occurs. Please use the ErrCode of each specific task when 0 is returned.</p>
 * @method string getErrCodeExt() Obtain <p>Extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: API call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: User-submitted input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li></ul>
 * @method void setErrCodeExt(string $ErrCodeExt) Set <p>Extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: API call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: User-submitted input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li></ul>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method integer getProgress() Obtain <p>Task progress, with a value range of [0-100].</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress, with a value range of [0-100].</p>
 * @method AigcVideoTaskInput getInput() Obtain <p>Input of the AIGC video generation task.</p>
 * @method void setInput(AigcVideoTaskInput $Input) Set <p>Input of the AIGC video generation task.</p>
 * @method AigcVideoTaskOutput getOutput() Obtain <p>Output information of the AIGC video task.</p>
 * @method void setOutput(AigcVideoTaskOutput $Output) Set <p>Output information of the AIGC video task.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 */
class AigcVideoTask extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li></p>
     */
    public $Status;

    /**
     * @var integer <p>Error code. A non-zero error code is returned back when a source error occurs. Please use the ErrCode of each specific task when 0 is returned.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: API call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: User-submitted input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li></ul>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var integer <p>Task progress, with a value range of [0-100].</p>
     */
    public $Progress;

    /**
     * @var AigcVideoTaskInput <p>Input of the AIGC video generation task.</p>
     */
    public $Input;

    /**
     * @var AigcVideoTaskOutput <p>Output information of the AIGC video task.</p>
     */
    public $Output;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $Status <p>Task status. Value: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li></p>
     * @param integer $ErrCode <p>Error code. A non-zero error code is returned back when a source error occurs. Please use the ErrCode of each specific task when 0 is returned.</p>
     * @param string $ErrCodeExt <p>Extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: API call exceeds the concurrency limit.</li><li>InvalidParameter.VoilationContent: User-submitted input prompt violates the Content Security Policy.</li><li>InvalidParameterValue: Parameter error.</li><li>FailedOperation: Model tasks accumulate.</li><li>InternalError: Internal error.</li></ul>
     * @param string $Message <p>Error message.</p>
     * @param integer $Progress <p>Task progress, with a value range of [0-100].</p>
     * @param AigcVideoTaskInput $Input <p>Input of the AIGC video generation task.</p>
     * @param AigcVideoTaskOutput $Output <p>Output information of the AIGC video task.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
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
