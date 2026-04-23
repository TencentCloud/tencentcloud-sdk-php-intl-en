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
 * MPS intelligent task
 *
 * @method integer getDefinition() Obtain MPS intelligent task template ID
 * @method void setDefinition(integer $Definition) Set MPS intelligent task template ID
 * @method array getOutputFile() Obtain MPS intelligent task output file collection
 * @method void setOutputFile(array $OutputFile) Set MPS intelligent task output file collection
 * @method string getOutputText() Obtain The returned result of the MPS intelligent task. This field corresponds to the Output result in the MPS task return and is returned in JSON format.
Different MPS task output results have different structures. For the specific return content, see the MPS task output struct.
[Intelligent classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent cover result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent Tag Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Intelligent caption full speech recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure srt translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)


 * @method void setOutputText(string $OutputText) Set The returned result of the MPS intelligent task. This field corresponds to the Output result in the MPS task return and is returned in JSON format.
Different MPS task output results have different structures. For the specific return content, see the MPS task output struct.
[Intelligent classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent cover result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent Tag Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Intelligent caption full speech recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure srt translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)
 */
class MPSAiMediaTask extends AbstractModel
{
    /**
     * @var integer MPS intelligent task template ID
     */
    public $Definition;

    /**
     * @var array MPS intelligent task output file collection
     */
    public $OutputFile;

    /**
     * @var string The returned result of the MPS intelligent task. This field corresponds to the Output result in the MPS task return and is returned in JSON format.
Different MPS task output results have different structures. For the specific return content, see the MPS task output struct.
[Intelligent classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent cover result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent Tag Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Intelligent caption full speech recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure srt translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)


     */
    public $OutputText;

    /**
     * @param integer $Definition MPS intelligent task template ID
     * @param array $OutputFile MPS intelligent task output file collection
     * @param string $OutputText The returned result of the MPS intelligent task. This field corresponds to the Output result in the MPS task return and is returned in JSON format.
Different MPS task output results have different structures. For the specific return content, see the MPS task output struct.
[Intelligent classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent cover result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent Tag Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Intelligent caption full speech recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure srt translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("OutputFile",$param) and $param["OutputFile"] !== null) {
            $this->OutputFile = [];
            foreach ($param["OutputFile"] as $key => $value){
                $obj = new MPSOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->OutputFile, $obj);
            }
        }

        if (array_key_exists("OutputText",$param) and $param["OutputText"] !== null) {
            $this->OutputText = $param["OutputText"];
        }
    }
}
