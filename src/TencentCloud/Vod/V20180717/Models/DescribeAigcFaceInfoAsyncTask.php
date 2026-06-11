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
 * Asynchronously fetch AIGC face information tasks.
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getStatus() Obtain <p>Task status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set <p>Task status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain <p>Error code. It returns a non-zero error code in case of a source error. Please use the ErrCode of each specific task when it returns 0.</p>
 * @method void setErrCode(integer $ErrCode) Set <p>Error code. It returns a non-zero error code in case of a source error. Please use the ErrCode of each specific task when it returns 0.</p>
 * @method string getErrCodeExt() Obtain <p>Extended error codes.</p><p>Parameter format: extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameterValue: Parameter error.</li><li>InternalError: Internal error.</li><li>FailedOperation: Operation failed.</li></ul>
 * @method void setErrCodeExt(string $ErrCodeExt) Set <p>Extended error codes.</p><p>Parameter format: extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameterValue: Parameter error.</li><li>InternalError: Internal error.</li><li>FailedOperation: Operation failed.</li></ul>
 * @method string getMessage() Obtain <p>Error message.</p>
 * @method void setMessage(string $Message) Set <p>Error message.</p>
 * @method integer getProgress() Obtain <p>Task progress, in the range of [0-100].</p>
 * @method void setProgress(integer $Progress) Set <p>Task progress, in the range of [0-100].</p>
 * @method DescribeAigcFaceInfoAsyncInput getInput() Obtain <p>Input information to asynchronously fetch face information of the AIGC task.</p>
 * @method void setInput(DescribeAigcFaceInfoAsyncInput $Input) Set <p>Input information to asynchronously fetch face information of the AIGC task.</p>
 * @method DescribeAigcFaceInfoAsyncOutput getOutput() Obtain <p>Asynchronously fetch the output message of the human face information task for AIGC.</p>
 * @method void setOutput(DescribeAigcFaceInfoAsyncOutput $Output) Set <p>Asynchronously fetch the output message of the human face information task for AIGC.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The task status change callback returns the value of this field. The maximum length is 1000 characters.</p>
 */
class DescribeAigcFaceInfoAsyncTask extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Task status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer <p>Error code. It returns a non-zero error code in case of a source error. Please use the ErrCode of each specific task when it returns 0.</p>
     */
    public $ErrCode;

    /**
     * @var string <p>Extended error codes.</p><p>Parameter format: extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameterValue: Parameter error.</li><li>InternalError: Internal error.</li><li>FailedOperation: Operation failed.</li></ul>
     */
    public $ErrCodeExt;

    /**
     * @var string <p>Error message.</p>
     */
    public $Message;

    /**
     * @var integer <p>Task progress, in the range of [0-100].</p>
     */
    public $Progress;

    /**
     * @var DescribeAigcFaceInfoAsyncInput <p>Input information to asynchronously fetch face information of the AIGC task.</p>
     */
    public $Input;

    /**
     * @var DescribeAigcFaceInfoAsyncOutput <p>Asynchronously fetch the output message of the human face information task for AIGC.</p>
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
     * @param string $Status <p>Task status. Valid values: </p><li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     * @param integer $ErrCode <p>Error code. It returns a non-zero error code in case of a source error. Please use the ErrCode of each specific task when it returns 0.</p>
     * @param string $ErrCodeExt <p>Extended error codes.</p><p>Parameter format: extended error codes.</p><p>Enumeration values:</p><ul><li>RequestLimitExceeded: The call exceeds the concurrency limit.</li><li>InvalidParameterValue: Parameter error.</li><li>InternalError: Internal error.</li><li>FailedOperation: Operation failed.</li></ul>
     * @param string $Message <p>Error message.</p>
     * @param integer $Progress <p>Task progress, in the range of [0-100].</p>
     * @param DescribeAigcFaceInfoAsyncInput $Input <p>Input information to asynchronously fetch face information of the AIGC task.</p>
     * @param DescribeAigcFaceInfoAsyncOutput $Output <p>Asynchronously fetch the output message of the human face information task for AIGC.</p>
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
            $this->Input = new DescribeAigcFaceInfoAsyncInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new DescribeAigcFaceInfoAsyncOutput();
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
