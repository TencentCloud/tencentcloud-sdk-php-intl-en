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
 * @method boolean getNoAudio() Obtain When this field is set to true, it indicates that the video has no audio track.
 * @method void setNoAudio(boolean $NoAudio) Set When this field is set to true, it indicates that the video has no audio track.
 * @method boolean getNoVideo() Obtain When this field is set to true, it indicates that the video has no video track.
 * @method void setNoVideo(boolean $NoVideo) Set When this field is set to true, it indicates that the video has no video track.
 * @method integer getQualityEvaluationScore() Obtain No-reference quality score of the video (100 points in total).
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set No-reference quality score of the video (100 points in total).
 * @method float getQualityEvaluationMeanOpinionScore() Obtain No-reference quality score of the video (MOS).
 * @method void setQualityEvaluationMeanOpinionScore(float $QualityEvaluationMeanOpinionScore) Set No-reference quality score of the video (MOS).
 * @method array getQualityControlResultSet() Obtain Exception items identified in content quality inspection.
 * @method void setQualityControlResultSet(array $QualityControlResultSet) Set Exception items identified in content quality inspection.
 * @method array getContainerDiagnoseResultSet() Obtain Exception items identified in format diagnosis.
 * @method void setContainerDiagnoseResultSet(array $ContainerDiagnoseResultSet) Set Exception items identified in format diagnosis.
 */
class QualityControlData extends AbstractModel
{
    /**
     * @var boolean When this field is set to true, it indicates that the video has no audio track.
     */
    public $NoAudio;

    /**
     * @var boolean When this field is set to true, it indicates that the video has no video track.
     */
    public $NoVideo;

    /**
     * @var integer No-reference quality score of the video (100 points in total).
     */
    public $QualityEvaluationScore;

    /**
     * @var float No-reference quality score of the video (MOS).
     */
    public $QualityEvaluationMeanOpinionScore;

    /**
     * @var array Exception items identified in content quality inspection.
     */
    public $QualityControlResultSet;

    /**
     * @var array Exception items identified in format diagnosis.
     */
    public $ContainerDiagnoseResultSet;

    /**
     * @param boolean $NoAudio When this field is set to true, it indicates that the video has no audio track.
     * @param boolean $NoVideo When this field is set to true, it indicates that the video has no video track.
     * @param integer $QualityEvaluationScore No-reference quality score of the video (100 points in total).
     * @param float $QualityEvaluationMeanOpinionScore No-reference quality score of the video (MOS).
     * @param array $QualityControlResultSet Exception items identified in content quality inspection.
     * @param array $ContainerDiagnoseResultSet Exception items identified in format diagnosis.
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
