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
 * Video splitting task information.
 *
 * @method SplitMediaTaskInput getInput() Obtain Input information of the video splitting task.
 * @method void setInput(SplitMediaTaskInput $Input) Set Input information of the video splitting task.
 * @method TaskOutputMediaInfo getOutput() Obtain Output information of the video splitting task.
 * @method void setOutput(TaskOutputMediaInfo $Output) Set Output information of the video splitting task.
 * @method string getProcedureTaskId() Obtain Task ID of the task type `Procedure`. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), initiate the task when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set Task ID of the task type `Procedure`. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), initiate the task when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`.
 * @method string getReviewAudioVideoTaskId() Obtain Task ID of the `ReviewAudioVideo` type. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), the task is triggered when `ReviewAudioVideoTask` is specified in the task flow template.
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set Task ID of the `ReviewAudioVideo` type. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), the task is triggered when `ReviewAudioVideoTask` is specified in the task flow template.
 */
class SplitMediaTaskSegmentInfo extends AbstractModel
{
    /**
     * @var SplitMediaTaskInput Input information of the video splitting task.
     */
    public $Input;

    /**
     * @var TaskOutputMediaInfo Output information of the video splitting task.
     */
    public $Output;

    /**
     * @var string Task ID of the task type `Procedure`. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), initiate the task when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`.
     */
    public $ProcedureTaskId;

    /**
     * @var string Task ID of the `ReviewAudioVideo` type. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), the task is triggered when `ReviewAudioVideoTask` is specified in the task flow template.
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @param SplitMediaTaskInput $Input Input information of the video splitting task.
     * @param TaskOutputMediaInfo $Output Output information of the video splitting task.
     * @param string $ProcedureTaskId Task ID of the task type `Procedure`. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), initiate the task when the task flow template specifies one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`.
     * @param string $ReviewAudioVideoTaskId Task ID of the `ReviewAudioVideo` type. If a task flow template (`ProcedureName`) is specified in the video split task information list when initiating a video splitting task (https://www.tencentcloud.com/document/api/266/51098?from_cn_redirect=1), the task is triggered when `ReviewAudioVideoTask` is specified in the task flow template.
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new SplitMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TaskOutputMediaInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }
    }
}
