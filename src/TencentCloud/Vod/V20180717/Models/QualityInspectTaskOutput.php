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
 * 
 *
 * @method integer getNoAudio() Obtain 
 * @method void setNoAudio(integer $NoAudio) Set 
 * @method integer getNoVideo() Obtain 
 * @method void setNoVideo(integer $NoVideo) Set 
 * @method integer getQualityEvaluationScore() Obtain 
 * @method void setQualityEvaluationScore(integer $QualityEvaluationScore) Set 
 * @method array getQualityInspectResultSet() Obtain 
 * @method void setQualityInspectResultSet(array $QualityInspectResultSet) Set 
 * @method float getQualityEvaluationMeanOpinionScore() Obtain 
 * @method void setQualityEvaluationMeanOpinionScore(float $QualityEvaluationMeanOpinionScore) Set 
 * @method integer getAestheticEvaluationScore() Obtain 
 * @method void setAestheticEvaluationScore(integer $AestheticEvaluationScore) Set 
 * @method array getContainerDiagnoseResultSet() Obtain 
 * @method void setContainerDiagnoseResultSet(array $ContainerDiagnoseResultSet) Set 
 * @method QualityInspectLLMDetectionReport getLLMDetectionReport() Obtain 
 * @method void setLLMDetectionReport(QualityInspectLLMDetectionReport $LLMDetectionReport) Set 
 */
class QualityInspectTaskOutput extends AbstractModel
{
    /**
     * @var integer 
     */
    public $NoAudio;

    /**
     * @var integer 
     */
    public $NoVideo;

    /**
     * @var integer 
     */
    public $QualityEvaluationScore;

    /**
     * @var array 
     */
    public $QualityInspectResultSet;

    /**
     * @var float 
     */
    public $QualityEvaluationMeanOpinionScore;

    /**
     * @var integer 
     */
    public $AestheticEvaluationScore;

    /**
     * @var array 
     */
    public $ContainerDiagnoseResultSet;

    /**
     * @var QualityInspectLLMDetectionReport 
     */
    public $LLMDetectionReport;

    /**
     * @param integer $NoAudio 
     * @param integer $NoVideo 
     * @param integer $QualityEvaluationScore 
     * @param array $QualityInspectResultSet 
     * @param float $QualityEvaluationMeanOpinionScore 
     * @param integer $AestheticEvaluationScore 
     * @param array $ContainerDiagnoseResultSet 
     * @param QualityInspectLLMDetectionReport $LLMDetectionReport 
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
