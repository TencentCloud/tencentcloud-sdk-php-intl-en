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
 * Type of the MPS subtask query result.
 *
 * @method string getTaskType() Obtain Task type. The specific subtask type in the WorkflowTask structure of MPS. Value:
<li>MediaProcess.Transcode: audio and video transcoding task.</li>
<li>AiAnalysis.DeLogo: intelligent erasure task.</li>
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: Intelligent Cover Task.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-specific tagging task.</li>
<li>AiAnalysis.HighlightTask: intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: intelligent summarization task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: returns the translation result of a pure subtitle file.</li>
<li>SmartSubtitle.OcrFullTextTask: intelligent text extraction subtitle task.</li>
<li>SmartErase: intelligent erasure task.</li>

 * @method void setTaskType(string $TaskType) Set Task type. The specific subtask type in the WorkflowTask structure of MPS. Value:
<li>MediaProcess.Transcode: audio and video transcoding task.</li>
<li>AiAnalysis.DeLogo: intelligent erasure task.</li>
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: Intelligent Cover Task.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-specific tagging task.</li>
<li>AiAnalysis.HighlightTask: intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: intelligent summarization task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: returns the translation result of a pure subtitle file.</li>
<li>SmartSubtitle.OcrFullTextTask: intelligent text extraction subtitle task.</li>
<li>SmartErase: intelligent erasure task.</li>

 * @method string getStatus() Obtain Task status. It has three values: PROCESSING, SUCCESS, and FAIL.
 * @method void setStatus(string $Status) Set Task status. It has three values: PROCESSING, SUCCESS, and FAIL.
 * @method string getErrCode() Obtain Error code. `0` indicates success. Other values indicate failure.
 * @method void setErrCode(string $ErrCode) Set Error code. `0` indicates success. Other values indicate failure.
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getInput() Obtain Input of the MPS video processing task. This field corresponds to the Input result returned by the MPS task, returned in JSON format.
 * @method void setInput(string $Input) Set Input of the MPS video processing task. This field corresponds to the Input result returned by the MPS task, returned in JSON format.
 * @method MPSTaskOutput getOutput() Obtain Output of the MPS video processing task.
 * @method void setOutput(MPSTaskOutput $Output) Set Output of the MPS video processing task.
 */
class MPSSubTaskResult extends AbstractModel
{
    /**
     * @var string Task type. The specific subtask type in the WorkflowTask structure of MPS. Value:
<li>MediaProcess.Transcode: audio and video transcoding task.</li>
<li>AiAnalysis.DeLogo: intelligent erasure task.</li>
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: Intelligent Cover Task.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-specific tagging task.</li>
<li>AiAnalysis.HighlightTask: intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: intelligent summarization task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: returns the translation result of a pure subtitle file.</li>
<li>SmartSubtitle.OcrFullTextTask: intelligent text extraction subtitle task.</li>
<li>SmartErase: intelligent erasure task.</li>

     */
    public $TaskType;

    /**
     * @var string Task status. It has three values: PROCESSING, SUCCESS, and FAIL.
     */
    public $Status;

    /**
     * @var string Error code. `0` indicates success. Other values indicate failure.
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string Input of the MPS video processing task. This field corresponds to the Input result returned by the MPS task, returned in JSON format.
     */
    public $Input;

    /**
     * @var MPSTaskOutput Output of the MPS video processing task.
     */
    public $Output;

    /**
     * @param string $TaskType Task type. The specific subtask type in the WorkflowTask structure of MPS. Value:
<li>MediaProcess.Transcode: audio and video transcoding task.</li>
<li>AiAnalysis.DeLogo: intelligent erasure task.</li>
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: Intelligent Cover Task.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-specific tagging task.</li>
<li>AiAnalysis.HighlightTask: intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: intelligent summarization task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: returns the translation result of a pure subtitle file.</li>
<li>SmartSubtitle.OcrFullTextTask: intelligent text extraction subtitle task.</li>
<li>SmartErase: intelligent erasure task.</li>

     * @param string $Status Task status. It has three values: PROCESSING, SUCCESS, and FAIL.
     * @param string $ErrCode Error code. `0` indicates success. Other values indicate failure.
     * @param string $Message Error message.
     * @param string $Input Input of the MPS video processing task. This field corresponds to the Input result returned by the MPS task, returned in JSON format.
     * @param MPSTaskOutput $Output Output of the MPS video processing task.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
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
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new MPSTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
