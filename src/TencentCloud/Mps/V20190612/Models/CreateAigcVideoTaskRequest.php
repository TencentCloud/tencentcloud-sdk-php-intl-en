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
 * CreateAigcVideoTask request structure.
 *
 * @method string getModelName() Obtain 
 * @method void setModelName(string $ModelName) Set 
 * @method string getModelVersion() Obtain 
 * @method void setModelVersion(string $ModelVersion) Set 
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getNegativePrompt() Obtain 
 * @method void setNegativePrompt(string $NegativePrompt) Set 
 * @method boolean getEnhancePrompt() Obtain 
 * @method void setEnhancePrompt(boolean $EnhancePrompt) Set 
 * @method string getImageUrl() Obtain 
 * @method void setImageUrl(string $ImageUrl) Set 
 * @method string getLastImageUrl() Obtain 
 * @method void setLastImageUrl(string $LastImageUrl) Set 
 * @method array getImageInfos() Obtain 
 * @method void setImageInfos(array $ImageInfos) Set 
 * @method array getVideoInfos() Obtain 
 * @method void setVideoInfos(array $VideoInfos) Set 
 * @method array getAudioInfos() Obtain 
 * @method void setAudioInfos(array $AudioInfos) Set 
 * @method array getSubjectInfos() Obtain <p>Entity information.</p>
 * @method void setSubjectInfos(array $SubjectInfos) Set <p>Entity information.</p>
 * @method integer getDuration() Obtain 
 * @method void setDuration(integer $Duration) Set 
 * @method AigcVideoExtraParam getExtraParameters() Obtain 
 * @method void setExtraParameters(AigcVideoExtraParam $ExtraParameters) Set 
 * @method AigcStoreCosParam getStoreCosParam() Obtain 
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set 
 * @method string getAdditionalParameters() Obtain 
 * @method void setAdditionalParameters(string $AdditionalParameters) Set 
 * @method string getOperator() Obtain 
 * @method void setOperator(string $Operator) Set 
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $ModelName;

    /**
     * @var string 
     */
    public $ModelVersion;

    /**
     * @var string 
     */
    public $SceneType;

    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $NegativePrompt;

    /**
     * @var boolean 
     */
    public $EnhancePrompt;

    /**
     * @var string 
     */
    public $ImageUrl;

    /**
     * @var string 
     */
    public $LastImageUrl;

    /**
     * @var array 
     */
    public $ImageInfos;

    /**
     * @var array 
     */
    public $VideoInfos;

    /**
     * @var array 
     */
    public $AudioInfos;

    /**
     * @var array <p>Entity information.</p>
     */
    public $SubjectInfos;

    /**
     * @var integer 
     */
    public $Duration;

    /**
     * @var AigcVideoExtraParam 
     */
    public $ExtraParameters;

    /**
     * @var AigcStoreCosParam 
     */
    public $StoreCosParam;

    /**
     * @var string 
     */
    public $AdditionalParameters;

    /**
     * @var string 
     */
    public $Operator;

    /**
     * @param string $ModelName 
     * @param string $ModelVersion 
     * @param string $SceneType 
     * @param string $Prompt 
     * @param string $NegativePrompt 
     * @param boolean $EnhancePrompt 
     * @param string $ImageUrl 
     * @param string $LastImageUrl 
     * @param array $ImageInfos 
     * @param array $VideoInfos 
     * @param array $AudioInfos 
     * @param array $SubjectInfos <p>Entity information.</p>
     * @param integer $Duration 
     * @param AigcVideoExtraParam $ExtraParameters 
     * @param AigcStoreCosParam $StoreCosParam 
     * @param string $AdditionalParameters 
     * @param string $Operator 
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("EnhancePrompt",$param) and $param["EnhancePrompt"] !== null) {
            $this->EnhancePrompt = $param["EnhancePrompt"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("LastImageUrl",$param) and $param["LastImageUrl"] !== null) {
            $this->LastImageUrl = $param["LastImageUrl"];
        }

        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcVideoReferenceImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcVideoReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcVideoReferenceAudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
        }

        if (array_key_exists("SubjectInfos",$param) and $param["SubjectInfos"] !== null) {
            $this->SubjectInfos = [];
            foreach ($param["SubjectInfos"] as $key => $value){
                $obj = new AigcVideoReferenceSubjectInfo();
                $obj->deserialize($value);
                array_push($this->SubjectInfos, $obj);
            }
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcVideoExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AigcStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
