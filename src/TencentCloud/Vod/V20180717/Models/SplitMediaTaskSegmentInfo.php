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
 * Information of a video splitting task.
 *
 * @method SplitMediaTaskInput getInput() Obtain Input information of a video splitting task.
 * @method void setInput(SplitMediaTaskInput $Input) Set Input information of a video splitting task.
 * @method TaskOutputMediaInfo getOutput() Obtain Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setOutput(TaskOutputMediaInfo $Output) Set Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProcedureTaskId() Obtain The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
 * @method string getReviewAudioVideoTaskId() Obtain The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
 */
class SplitMediaTaskSegmentInfo extends AbstractModel
{
    /**
     * @var SplitMediaTaskInput Input information of a video splitting task.
     */
    public $Input;

    /**
     * @var TaskOutputMediaInfo Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     */
    public $ProcedureTaskId;

    /**
     * @var string The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @param SplitMediaTaskInput $Input Input information of a video splitting task.
     * @param TaskOutputMediaInfo $Output Output information of a video splitting task.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ProcedureTaskId The task ID for the task type `Procedure`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes one or more of `MediaProcessTask`, `AiAnalysisTask`, and `AiRecognitionTask`, the task specified by this parameter will be executed.
     * @param string $ReviewAudioVideoTaskId The task ID for the task type `ReviewAudioVideo`. If a task flow (`ProcedureName`) is specified by [SplitMedia](https://intl.cloud.tencent.com/document/api/266/51098?from_cn_redirect=1), and the task flow includes `ReviewAudioVideoTask`, the task specified by this parameter will be executed.
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
