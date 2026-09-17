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
 * @method string getModelName() Obtain 
 * @method void setModelName(string $ModelName) Set 
 * @method string getModelVersion() Obtain 
 * @method void setModelVersion(string $ModelVersion) Set 
 * @method array getFileInfos() Obtain 
 * @method void setFileInfos(array $FileInfos) Set 
 * @method array getSubjectInfos() Obtain 
 * @method void setSubjectInfos(array $SubjectInfos) Set 
 * @method string getLastFrameFileId() Obtain 
 * @method void setLastFrameFileId(string $LastFrameFileId) Set 
 * @method string getLastFrameUrl() Obtain 
 * @method void setLastFrameUrl(string $LastFrameUrl) Set 
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getNegativePrompt() Obtain 
 * @method void setNegativePrompt(string $NegativePrompt) Set 
 * @method string getEnhancePrompt() Obtain 
 * @method void setEnhancePrompt(string $EnhancePrompt) Set 
 * @method string getGenerationMode() Obtain 
 * @method void setGenerationMode(string $GenerationMode) Set 
 * @method AigcVideoOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) Set 
 * @method string getInputRegion() Obtain 
 * @method void setInputRegion(string $InputRegion) Set 
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
 * @method integer getSeed() Obtain 
 * @method void setSeed(integer $Seed) Set 
 * @method string getExtInfo() Obtain 
 * @method void setExtInfo(string $ExtInfo) Set 
 */
class AigcVideoTaskInput extends AbstractModel
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
     * @var array 
     */
    public $FileInfos;

    /**
     * @var array 
     */
    public $SubjectInfos;

    /**
     * @var string 
     */
    public $LastFrameFileId;

    /**
     * @var string 
     */
    public $LastFrameUrl;

    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $NegativePrompt;

    /**
     * @var string 
     */
    public $EnhancePrompt;

    /**
     * @var string 
     */
    public $GenerationMode;

    /**
     * @var AigcVideoOutputConfig 
     */
    public $OutputConfig;

    /**
     * @var string 
     */
    public $InputRegion;

    /**
     * @var string 
     */
    public $SceneType;

    /**
     * @var integer 
     */
    public $Seed;

    /**
     * @var string 
     */
    public $ExtInfo;

    /**
     * @param string $ModelName 
     * @param string $ModelVersion 
     * @param array $FileInfos 
     * @param array $SubjectInfos 
     * @param string $LastFrameFileId 
     * @param string $LastFrameUrl 
     * @param string $Prompt 
     * @param string $NegativePrompt 
     * @param string $EnhancePrompt 
     * @param string $GenerationMode 
     * @param AigcVideoOutputConfig $OutputConfig 
     * @param string $InputRegion 
     * @param string $SceneType 
     * @param integer $Seed 
     * @param string $ExtInfo 
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

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcVideoTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("SubjectInfos",$param) and $param["SubjectInfos"] !== null) {
            $this->SubjectInfos = [];
            foreach ($param["SubjectInfos"] as $key => $value){
                $obj = new AigcVideoTaskInputSubjectInfo();
                $obj->deserialize($value);
                array_push($this->SubjectInfos, $obj);
            }
        }

        if (array_key_exists("LastFrameFileId",$param) and $param["LastFrameFileId"] !== null) {
            $this->LastFrameFileId = $param["LastFrameFileId"];
        }

        if (array_key_exists("LastFrameUrl",$param) and $param["LastFrameUrl"] !== null) {
            $this->LastFrameUrl = $param["LastFrameUrl"];
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

        if (array_key_exists("GenerationMode",$param) and $param["GenerationMode"] !== null) {
            $this->GenerationMode = $param["GenerationMode"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcVideoOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
