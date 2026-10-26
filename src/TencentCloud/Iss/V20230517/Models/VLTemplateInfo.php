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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Visual understanding template information
 *
 * @method string getVLTemplateId() Obtain <p>Template ID</p>
 * @method void setVLTemplateId(string $VLTemplateId) Set <p>Template ID</p>
 * @method string getAIModel() Obtain <p>AI model</p><p>Enumeration values:</p><ul><li>IVC-G: Default large model for view</li></ul>
 * @method void setAIModel(string $AIModel) Set <p>AI model</p><p>Enumeration values:</p><ul><li>IVC-G: Default large model for view</li></ul>
 * @method string getName() Obtain <p>AI scenario name</p>
 * @method void setName(string $Name) Set <p>AI scenario name</p>
 * @method string getDescribe() Obtain <p>AI scenario description</p>
 * @method void setDescribe(string $Describe) Set <p>AI scenario description</p>
 * @method string getPrompt() Obtain <p>Prompt content</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt content</p>
 * @method string getAnalysisMode() Obtain <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: Image mode</li><li>video: Video mode</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) Set <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: Image mode</li><li>video: Video mode</li></ul>
 * @method ImageSceneInfo getImageConfig() Obtain <p>Image scenario configuration</p>
 * @method void setImageConfig(ImageSceneInfo $ImageConfig) Set <p>Image scenario configuration</p>
 * @method array getTimes() Obtain <p>Effective period list</p>
 * @method void setTimes(array $Times) Set <p>Effective period list</p>
 * @method string getCreatedAt() Obtain <p>Creation time.</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Creation time.</p>
 * @method string getUpdatedAt() Obtain <p>Last update time</p>
 * @method void setUpdatedAt(string $UpdatedAt) Set <p>Last update time</p>
 * @method boolean getIsUsed() Obtain <p>Whether associated with a visual understanding plan</p>
 * @method void setIsUsed(boolean $IsUsed) Set <p>Whether associated with a visual understanding plan</p>
 * @method VideoSceneInfo getVideoConfig() Obtain <p>Video scene configuration</p>
 * @method void setVideoConfig(VideoSceneInfo $VideoConfig) Set <p>Video scene configuration</p>
 */
class VLTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>Template ID</p>
     */
    public $VLTemplateId;

    /**
     * @var string <p>AI model</p><p>Enumeration values:</p><ul><li>IVC-G: Default large model for view</li></ul>
     */
    public $AIModel;

    /**
     * @var string <p>AI scenario name</p>
     */
    public $Name;

    /**
     * @var string <p>AI scenario description</p>
     */
    public $Describe;

    /**
     * @var string <p>Prompt content</p>
     */
    public $Prompt;

    /**
     * @var string <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: Image mode</li><li>video: Video mode</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var ImageSceneInfo <p>Image scenario configuration</p>
     */
    public $ImageConfig;

    /**
     * @var array <p>Effective period list</p>
     */
    public $Times;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Last update time</p>
     */
    public $UpdatedAt;

    /**
     * @var boolean <p>Whether associated with a visual understanding plan</p>
     */
    public $IsUsed;

    /**
     * @var VideoSceneInfo <p>Video scene configuration</p>
     */
    public $VideoConfig;

    /**
     * @param string $VLTemplateId <p>Template ID</p>
     * @param string $AIModel <p>AI model</p><p>Enumeration values:</p><ul><li>IVC-G: Default large model for view</li></ul>
     * @param string $Name <p>AI scenario name</p>
     * @param string $Describe <p>AI scenario description</p>
     * @param string $Prompt <p>Prompt content</p>
     * @param string $AnalysisMode <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: Image mode</li><li>video: Video mode</li></ul>
     * @param ImageSceneInfo $ImageConfig <p>Image scenario configuration</p>
     * @param array $Times <p>Effective period list</p>
     * @param string $CreatedAt <p>Creation time.</p>
     * @param string $UpdatedAt <p>Last update time</p>
     * @param boolean $IsUsed <p>Whether associated with a visual understanding plan</p>
     * @param VideoSceneInfo $VideoConfig <p>Video scene configuration</p>
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
        if (array_key_exists("VLTemplateId",$param) and $param["VLTemplateId"] !== null) {
            $this->VLTemplateId = $param["VLTemplateId"];
        }

        if (array_key_exists("AIModel",$param) and $param["AIModel"] !== null) {
            $this->AIModel = $param["AIModel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new ImageSceneInfo();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }

        if (array_key_exists("VideoConfig",$param) and $param["VideoConfig"] !== null) {
            $this->VideoConfig = new VideoSceneInfo();
            $this->VideoConfig->deserialize($param["VideoConfig"]);
        }
    }
}
