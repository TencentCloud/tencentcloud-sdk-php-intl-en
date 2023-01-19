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
 * Video editing task information
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
 * @method integer getErrCode() Obtain Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
 * @method string getMessage() Obtain Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Progress of a video editing task. Value range: [0, 100]
 * @method void setProgress(integer $Progress) Set Progress of a video editing task. Value range: [0, 100]
 * @method EditMediaTaskInput getInput() Obtain Input of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInput(EditMediaTaskInput $Input) Set Input of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method EditMediaTaskOutput getOutput() Obtain Output of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(EditMediaTaskOutput $Output) Set Output of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method MediaMetaData getMetaData() Obtain The metadata of the output video.
 * @method void setMetaData(MediaMetaData $MetaData) Set The metadata of the output video.
 * @method string getProcedureTaskId() Obtain The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method string getReviewAudioVideoTaskId() Obtain The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method string getSessionId() Obtain The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionId(string $SessionId) Set The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSessionContext() Obtain The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSessionContext(string $SessionContext) Set The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class EditMediaTask extends AbstractModel
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
     * @var integer Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     */
    public $ErrCodeExt;

    /**
     * @var string Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var integer Progress of a video editing task. Value range: [0, 100]
     */
    public $Progress;

    /**
     * @var EditMediaTaskInput Input of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var EditMediaTaskOutput Output of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var MediaMetaData The metadata of the output video.
     */
    public $MetaData;

    /**
     * @var string The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     */
    public $ProcedureTaskId;

    /**
     * @var string The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @var string The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionId;

    /**
     * @var string The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: processing;</li>
<li>FINISH: completed.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrCode Error code. 0: success; other values: failure.
<li>40000: invalid input parameter. Please check it;</li>
<li>60000: invalid source file (e.g., video data is corrupted). Please check whether the source file is normal;</li>
<li>70000: internal service error. Please try again.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ErrCodeExt Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video Processing Error Codes](https://intl.cloud.tencent.com/zh/document/product/266/39145).
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Progress of a video editing task. Value range: [0, 100]
     * @param EditMediaTaskInput $Input Input of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param EditMediaTaskOutput $Output Output of video editing task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param MediaMetaData $MetaData The metadata of the output video.
     * @param string $ProcedureTaskId The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     * @param string $ReviewAudioVideoTaskId The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [EditMedia](https://intl.cloud.tencent.com/document/api/266/34783?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     * @param string $SessionId The ID used for deduplication. If there was a request with the same ID in the last seven days, the current request will return an error. The ID can contain up to 50 characters. If this parameter is left empty or a blank string is entered, no deduplication will be performed.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SessionContext The source context which is used to pass through the user request information. The task flow status change callback will return the value of this field. It can contain up to 1,000 characters.
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
            $this->Input = new EditMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new EditMediaTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
