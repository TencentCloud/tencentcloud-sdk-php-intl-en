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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media quality inspection result output.
 *
 * @method boolean getNoAudio() Obtain <p>A value of true indicates that the video has no audio track.</p>
 * @method void setNoAudio(boolean $NoAudio) Set <p>A value of true indicates that the video has no audio track.</p>
 * @method boolean getNoVideo() Obtain <p>A value of true indicates that the video has no video track.</p>
 * @method void setNoVideo(boolean $NoVideo) Set <p>A value of true indicates that the video has no video track.</p>
 * @method integer getQualityEvaluationScore() Obtain <p>No-reference quality score of the video, on a scale of 0 to 100.</p>
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set <p>No-reference quality score of the video, on a scale of 0 to 100.</p>
 * @method float getQualityEvaluationMeanOpinionScore() Obtain <p>No-reference quality score of the video (MOS).</p>
 * @method void setQualityEvaluationMeanOpinionScore(float $QualityEvaluationMeanOpinionScore) Set <p>No-reference quality score of the video (MOS).</p>
 * @method integer getAestheticEvaluationScore() Obtain <p>Video aesthetic score. Value range: [0, 100].</p>
 * @method void setAestheticEvaluationScore(integer $AestheticEvaluationScore) Set <p>Video aesthetic score. Value range: [0, 100].</p>
 * @method array getQualityControlResultSet() Obtain <p>Exception items detected in content quality inspection.</p>
 * @method void setQualityControlResultSet(array $QualityControlResultSet) Set <p>Exception items detected in content quality inspection.</p>
 * @method array getContainerDiagnoseResultSet() Obtain <p>Exception items detected in format diagnosis.</p>
 * @method void setContainerDiagnoseResultSet(array $ContainerDiagnoseResultSet) Set <p>Exception items detected in format diagnosis.</p>
 */
class QualityControlData extends AbstractModel
{
    /**
     * @var boolean <p>A value of true indicates that the video has no audio track.</p>
     */
    public $NoAudio;

    /**
     * @var boolean <p>A value of true indicates that the video has no video track.</p>
     */
    public $NoVideo;

    /**
     * @var integer <p>No-reference quality score of the video, on a scale of 0 to 100.</p>
     */
    public $QualityEvaluationScore;

    /**
     * @var float <p>No-reference quality score of the video (MOS).</p>
     */
    public $QualityEvaluationMeanOpinionScore;

    /**
     * @var integer <p>Video aesthetic score. Value range: [0, 100].</p>
     */
    public $AestheticEvaluationScore;

    /**
     * @var array <p>Exception items detected in content quality inspection.</p>
     */
    public $QualityControlResultSet;

    /**
     * @var array <p>Exception items detected in format diagnosis.</p>
     */
    public $ContainerDiagnoseResultSet;

    /**
     * @param boolean $NoAudio <p>A value of true indicates that the video has no audio track.</p>
     * @param boolean $NoVideo <p>A value of true indicates that the video has no video track.</p>
     * @param integer $QualityEvaluationScore <p>No-reference quality score of the video, on a scale of 0 to 100.</p>
     * @param float $QualityEvaluationMeanOpinionScore <p>No-reference quality score of the video (MOS).</p>
     * @param integer $AestheticEvaluationScore <p>Video aesthetic score. Value range: [0, 100].</p>
     * @param array $QualityControlResultSet <p>Exception items detected in content quality inspection.</p>
     * @param array $ContainerDiagnoseResultSet <p>Exception items detected in format diagnosis.</p>
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

        if (array_key_exists("QualityEvaluationMeanOpinionScore",$param) and $param["QualityEvaluationMeanOpinionScore"] !== null) {
            $this->QualityEvaluationMeanOpinionScore = $param["QualityEvaluationMeanOpinionScore"];
        }

        if (array_key_exists("AestheticEvaluationScore",$param) and $param["AestheticEvaluationScore"] !== null) {
            $this->AestheticEvaluationScore = $param["AestheticEvaluationScore"];
        }

        if (array_key_exists("QualityControlResultSet",$param) and $param["QualityControlResultSet"] !== null) {
            $this->QualityControlResultSet = [];
            foreach ($param["QualityControlResultSet"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResultSet, $obj);
            }
        }

        if (array_key_exists("ContainerDiagnoseResultSet",$param) and $param["ContainerDiagnoseResultSet"] !== null) {
            $this->ContainerDiagnoseResultSet = [];
            foreach ($param["ContainerDiagnoseResultSet"] as $key => $value){
                $obj = new ContainerDiagnoseResultItem();
                $obj->deserialize($value);
                array_push($this->ContainerDiagnoseResultSet, $obj);
            }
        }
    }
}
