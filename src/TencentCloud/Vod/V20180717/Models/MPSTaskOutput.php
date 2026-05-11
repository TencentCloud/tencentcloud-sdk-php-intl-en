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
 * MPS subtask output return result.
 *
 * @method array getOutputFiles() Obtain File type result in the returned result. For example, in intelligent erasure, the video file after removal will be stored in the media asset and the FileId will be provided in this field. The file Url of the subtitle extracted from video will be provided in this field.
 * @method void setOutputFiles(array $OutputFiles) Set File type result in the returned result. For example, in intelligent erasure, the video file after removal will be stored in the media asset and the FileId will be provided in this field. The file Url of the subtitle extracted from video will be provided in this field.
 * @method string getOutputText() Obtain Result returned by the task. This field corresponds to the Output result returned by the MPS task in JSON format.
Different MPS task output results have different structures. For specific return content, see the MPS task output struct.
[Intelligent Classification Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent Cover Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent tag result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Smart subtitling full text recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure subtitle file translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)


 * @method void setOutputText(string $OutputText) Set Result returned by the task. This field corresponds to the Output result returned by the MPS task in JSON format.
Different MPS task output results have different structures. For specific return content, see the MPS task output struct.
[Intelligent Classification Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent Cover Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent tag result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Smart subtitling full text recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure subtitle file translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)
 */
class MPSTaskOutput extends AbstractModel
{
    /**
     * @var array File type result in the returned result. For example, in intelligent erasure, the video file after removal will be stored in the media asset and the FileId will be provided in this field. The file Url of the subtitle extracted from video will be provided in this field.
     */
    public $OutputFiles;

    /**
     * @var string Result returned by the task. This field corresponds to the Output result returned by the MPS task in JSON format.
Different MPS task output results have different structures. For specific return content, see the MPS task output struct.
[Intelligent Classification Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent Cover Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent tag result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Smart subtitling full text recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure subtitle file translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
[Smart subtitling text extraction result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTextResultOutput)


     */
    public $OutputText;

    /**
     * @param array $OutputFiles File type result in the returned result. For example, in intelligent erasure, the video file after removal will be stored in the media asset and the FileId will be provided in this field. The file Url of the subtitle extracted from video will be provided in this field.
     * @param string $OutputText Result returned by the task. This field corresponds to the Output result returned by the MPS task in JSON format.
Different MPS task output results have different structures. For specific return content, see the MPS task output struct.
[Intelligent Classification Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskClassificationOutput)
[Intelligent Cover Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskCoverOutput)
[Intelligent tag result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskTagOutput)
[Intelligent frame tagging classification result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskFrameTagOutput)
[Intelligent Highlight Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHighlightOutput)
[Video Splitting Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskSegmentOutput)
[Intelligent video opening/closing credits result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHeadTailOutput)
[Intelligent summary result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDescriptionOutput)
[Horizontal-to-Vertical Video Transformation Result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskHorizontalToVerticalOutput)
[Intelligent dubbing result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskDubbingOutput)
[Intelligent video understanding result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#AiAnalysisTaskVideoComprehensionOutput)
[Smart subtitling full text recognition result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskAsrFullTextResultOutput)
[Intelligent caption translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#SmartSubtitleTaskTransTextResultOutput)
[Intelligent caption pure subtitle file translation result](https://www.tencentcloud.com/document/product/862/37615?from_cn_redirect=1#PureSubtitleTransResultOutput)
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
        if (array_key_exists("OutputFiles",$param) and $param["OutputFiles"] !== null) {
            $this->OutputFiles = [];
            foreach ($param["OutputFiles"] as $key => $value){
                $obj = new MPSOutputFile();
                $obj->deserialize($value);
                array_push($this->OutputFiles, $obj);
            }
        }

        if (array_key_exists("OutputText",$param) and $param["OutputText"] !== null) {
            $this->OutputText = $param["OutputText"];
        }
    }
}
