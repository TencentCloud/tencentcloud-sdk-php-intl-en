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
 * MPS AI media task item
 *
 * @method string getTaskType() Obtain MPS intelligent processing task type. Valid values:
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: intelligent thumbnail generating.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-by-frame tagging task.</li>
<li>AiAnalysis.HighlightTask: Intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: Intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: Intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: Intelligent summary task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: Intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: Intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: Video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: Returns the pure subtitle file translation result.</li>
<li>SmartSubtitle.OcrFullTextTask: Intelligent text extraction subtitle task.</li>
 * @method void setTaskType(string $TaskType) Set MPS intelligent processing task type. Valid values:
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: intelligent thumbnail generating.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-by-frame tagging task.</li>
<li>AiAnalysis.HighlightTask: Intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: Intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: Intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: Intelligent summary task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: Intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: Intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: Video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: Returns the pure subtitle file translation result.</li>
<li>SmartSubtitle.OcrFullTextTask: Intelligent text extraction subtitle task.</li>
 * @method array getAiMediaTasks() Obtain MPS intelligent processing task result set
 * @method void setAiMediaTasks(array $AiMediaTasks) Set MPS intelligent processing task result set
 */
class MPSAiMediaItem extends AbstractModel
{
    /**
     * @var string MPS intelligent processing task type. Valid values:
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: intelligent thumbnail generating.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-by-frame tagging task.</li>
<li>AiAnalysis.HighlightTask: Intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: Intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: Intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: Intelligent summary task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: Intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: Intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: Video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: Returns the pure subtitle file translation result.</li>
<li>SmartSubtitle.OcrFullTextTask: Intelligent text extraction subtitle task.</li>
     */
    public $TaskType;

    /**
     * @var array MPS intelligent processing task result set
     */
    public $AiMediaTasks;

    /**
     * @param string $TaskType MPS intelligent processing task type. Valid values:
<li>AiAnalysis.ClassificationTask: intelligent classification task.</li>
<li>AiAnalysis.CoverTask: intelligent thumbnail generating.</li>
<li>AiAnalysis.TagTask: intelligent tag task.</li>
<li>AiAnalysis.FrameTagTask: intelligent frame-by-frame tagging task.</li>
<li>AiAnalysis.HighlightTask: Intelligent highlight task.</li>
<li>AiAnalysis.SegmentTask: Intelligent video splitting task.</li>
<li>AiAnalysis.HeadTailTask: Intelligent opening and closing credits task.</li>
<li>AiAnalysis.DescriptionTask: Intelligent summary task.</li>
<li>AiAnalysis.HorizontalToVerticalTask: Intelligent Landscape to Portrait Task.</li>
<li>AiAnalysis.DubbingTask: Intelligent dubbing task.</li>
<li>AiAnalysis.VideoRemakeTask: Intelligent deduplication task.</li>
<li>AiAnalysis.VideoComprehensionTask: Video understanding task.</li>
<li>SmartSubtitle.AsrFullTextTask: Intelligent speech full-text recognition task.</li>
<li>SmartSubtitle.TransTextTask: Translation result.</li>
<li>SmartSubtitle.PureSubtitleTransTask: Returns the pure subtitle file translation result.</li>
<li>SmartSubtitle.OcrFullTextTask: Intelligent text extraction subtitle task.</li>
     * @param array $AiMediaTasks MPS intelligent processing task result set
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

        if (array_key_exists("AiMediaTasks",$param) and $param["AiMediaTasks"] !== null) {
            $this->AiMediaTasks = [];
            foreach ($param["AiMediaTasks"] as $key => $value){
                $obj = new MPSAiMediaTask();
                $obj->deserialize($value);
                array_push($this->AiMediaTasks, $obj);
            }
        }
    }
}
