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
 * Output of the audio and video quality inspection task.
 *
 * @method integer getNoAudio() Obtain <p>Whether the media file has no audio track. Value range:</p><li>0: No, it has audio tracks;</li><li>1: Yes, it has no audio track.</li>
 * @method void setNoAudio(integer $NoAudio) Set <p>Whether the media file has no audio track. Value range:</p><li>0: No, it has audio tracks;</li><li>1: Yes, it has no audio track.</li>
 * @method integer getNoVideo() Obtain <p>Whether the media file has no video track. Value range:</p><li>0: No, it has a video track;</li><li>1: Yes, it has no video track.</li>
 * @method void setNoVideo(integer $NoVideo) Set <p>Whether the media file has no video track. Value range:</p><li>0: No, it has a video track;</li><li>1: Yes, it has no video track.</li>
 * @method integer getQualityEvaluationScore() Obtain <p>Video picture quality score. Value range: [0, 100].</p>
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set <p>Video picture quality score. Value range: [0, 100].</p>
 * @method array getQualityInspectResultSet() Obtain <p>List of abnormalities detected in audio and video quality.</p>
 * @method void setQualityInspectResultSet(array $QualityInspectResultSet) Set <p>List of abnormalities detected in audio and video quality.</p>
 * @method float getQualityEvaluationMeanOpinionScore() Obtain <p>No-reference quality score of the video (MOS).</p>
 * @method void setQualityEvaluationMeanOpinionScore(float $QualityEvaluationMeanOpinionScore) Set <p>No-reference quality score of the video (MOS).</p>
 * @method integer getAestheticEvaluationScore() Obtain <p>Video aesthetic score. Value range: [0, 100].</p>
 * @method void setAestheticEvaluationScore(integer $AestheticEvaluationScore) Set <p>Video aesthetic score. Value range: [0, 100].</p>
 * @method array getContainerDiagnoseResultSet() Obtain <p>Exception items detected in format diagnosis.</p>
 * @method void setContainerDiagnoseResultSet(array $ContainerDiagnoseResultSet) Set <p>Exception items detected in format diagnosis.</p>
 * @method QualityInspectLLMDetectionReport getLLMDetectionReport() Obtain <p>LLM AIGC quality detection result.</p>
 * @method void setLLMDetectionReport(QualityInspectLLMDetectionReport $LLMDetectionReport) Set <p>LLM AIGC quality detection result.</p>
 */
class QualityInspectTaskOutput extends AbstractModel
{
    /**
     * @var integer <p>Whether the media file has no audio track. Value range:</p><li>0: No, it has audio tracks;</li><li>1: Yes, it has no audio track.</li>
     */
    public $NoAudio;

    /**
     * @var integer <p>Whether the media file has no video track. Value range:</p><li>0: No, it has a video track;</li><li>1: Yes, it has no video track.</li>
     */
    public $NoVideo;

    /**
     * @var integer <p>Video picture quality score. Value range: [0, 100].</p>
     */
    public $QualityEvaluationScore;

    /**
     * @var array <p>List of abnormalities detected in audio and video quality.</p>
     */
    public $QualityInspectResultSet;

    /**
     * @var float <p>No-reference quality score of the video (MOS).</p>
     */
    public $QualityEvaluationMeanOpinionScore;

    /**
     * @var integer <p>Video aesthetic score. Value range: [0, 100].</p>
     */
    public $AestheticEvaluationScore;

    /**
     * @var array <p>Exception items detected in format diagnosis.</p>
     */
    public $ContainerDiagnoseResultSet;

    /**
     * @var QualityInspectLLMDetectionReport <p>LLM AIGC quality detection result.</p>
     */
    public $LLMDetectionReport;

    /**
     * @param integer $NoAudio <p>Whether the media file has no audio track. Value range:</p><li>0: No, it has audio tracks;</li><li>1: Yes, it has no audio track.</li>
     * @param integer $NoVideo <p>Whether the media file has no video track. Value range:</p><li>0: No, it has a video track;</li><li>1: Yes, it has no video track.</li>
     * @param integer $QualityEvaluationScore <p>Video picture quality score. Value range: [0, 100].</p>
     * @param array $QualityInspectResultSet <p>List of abnormalities detected in audio and video quality.</p>
     * @param float $QualityEvaluationMeanOpinionScore <p>No-reference quality score of the video (MOS).</p>
     * @param integer $AestheticEvaluationScore <p>Video aesthetic score. Value range: [0, 100].</p>
     * @param array $ContainerDiagnoseResultSet <p>Exception items detected in format diagnosis.</p>
     * @param QualityInspectLLMDetectionReport $LLMDetectionReport <p>LLM AIGC quality detection result.</p>
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
        if (array_key_exists("NoAudio",$param) and $param["NoAudio"] !== null) {
            $this->NoAudio = $param["NoAudio"];
        }

        if (array_key_exists("NoVideo",$param) and $param["NoVideo"] !== null) {
            $this->NoVideo = $param["NoVideo"];
        }

        if (array_key_exists("QualityEvaluationScore",$param) and $param["QualityEvaluationScore"] !== null) {
            $this->QualityEvaluationScore = $param["QualityEvaluationScore"];
        }

        if (array_key_exists("QualityInspectResultSet",$param) and $param["QualityInspectResultSet"] !== null) {
            $this->QualityInspectResultSet = [];
            foreach ($param["QualityInspectResultSet"] as $key => $value){
                $obj = new QualityInspectResultItem();
                $obj->deserialize($value);
                array_push($this->QualityInspectResultSet, $obj);
            }
        }

        if (array_key_exists("QualityEvaluationMeanOpinionScore",$param) and $param["QualityEvaluationMeanOpinionScore"] !== null) {
            $this->QualityEvaluationMeanOpinionScore = $param["QualityEvaluationMeanOpinionScore"];
        }

        if (array_key_exists("AestheticEvaluationScore",$param) and $param["AestheticEvaluationScore"] !== null) {
            $this->AestheticEvaluationScore = $param["AestheticEvaluationScore"];
        }

        if (array_key_exists("ContainerDiagnoseResultSet",$param) and $param["ContainerDiagnoseResultSet"] !== null) {
            $this->ContainerDiagnoseResultSet = [];
            foreach ($param["ContainerDiagnoseResultSet"] as $key => $value){
                $obj = new QualityInspectContainerDiagnoseResultItem();
                $obj->deserialize($value);
                array_push($this->ContainerDiagnoseResultSet, $obj);
            }
        }

        if (array_key_exists("LLMDetectionReport",$param) and $param["LLMDetectionReport"] !== null) {
            $this->LLMDetectionReport = new QualityInspectLLMDetectionReport();
            $this->LLMDetectionReport->deserialize($param["LLMDetectionReport"]);
        }
    }
}
