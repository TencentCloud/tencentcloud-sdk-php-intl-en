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
 * CreateVLTemplate request structure.
 *
 * @method string getAIModel() Obtain <p>AI model</p><p>Enumeration values:</p><ul><li>ivc-vl-1.0: View large model</li></ul>
 * @method void setAIModel(string $AIModel) Set <p>AI model</p><p>Enumeration values:</p><ul><li>ivc-vl-1.0: View large model</li></ul>
 * @method string getName() Obtain <p>Template name. Supports only Chinese, English, digits, _, and -, with a maximum length of 32 characters.</p>
 * @method void setName(string $Name) Set <p>Template name. Supports only Chinese, English, digits, _, and -, with a maximum length of 32 characters.</p>
 * @method string getPrompt() Obtain <p>Prompt content, maximum 2MB</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt content, maximum 2MB</p>
 * @method string getAnalysisMode() Obtain <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: image mode</li><li>video: video mode</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) Set <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: image mode</li><li>video: video mode</li></ul>
 * @method array getTimes() Obtain <p>List of effective periods, up to 100 entries</p>
 * @method void setTimes(array $Times) Set <p>List of effective periods, up to 100 entries</p>
 * @method string getDescribe() Obtain <p>Template description. Maximum length: 256 characters.</p>
 * @method void setDescribe(string $Describe) Set <p>Template description. Maximum length: 256 characters.</p>
 * @method ImageSceneInfo getImageConfig() Obtain <p>Image scenario configuration (required when AnalysisMode=image)</p>
 * @method void setImageConfig(ImageSceneInfo $ImageConfig) Set <p>Image scenario configuration (required when AnalysisMode=image)</p>
 */
class CreateVLTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>AI model</p><p>Enumeration values:</p><ul><li>ivc-vl-1.0: View large model</li></ul>
     */
    public $AIModel;

    /**
     * @var string <p>Template name. Supports only Chinese, English, digits, _, and -, with a maximum length of 32 characters.</p>
     */
    public $Name;

    /**
     * @var string <p>Prompt content, maximum 2MB</p>
     */
    public $Prompt;

    /**
     * @var string <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: image mode</li><li>video: video mode</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>List of effective periods, up to 100 entries</p>
     */
    public $Times;

    /**
     * @var string <p>Template description. Maximum length: 256 characters.</p>
     */
    public $Describe;

    /**
     * @var ImageSceneInfo <p>Image scenario configuration (required when AnalysisMode=image)</p>
     */
    public $ImageConfig;

    /**
     * @param string $AIModel <p>AI model</p><p>Enumeration values:</p><ul><li>ivc-vl-1.0: View large model</li></ul>
     * @param string $Name <p>Template name. Supports only Chinese, English, digits, _, and -, with a maximum length of 32 characters.</p>
     * @param string $Prompt <p>Prompt content, maximum 2MB</p>
     * @param string $AnalysisMode <p>Analysis mode</p><p>Enumeration values:</p><ul><li>image: image mode</li><li>video: video mode</li></ul>
     * @param array $Times <p>List of effective periods, up to 100 entries</p>
     * @param string $Describe <p>Template description. Maximum length: 256 characters.</p>
     * @param ImageSceneInfo $ImageConfig <p>Image scenario configuration (required when AnalysisMode=image)</p>
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
        if (array_key_exists("AIModel",$param) and $param["AIModel"] !== null) {
            $this->AIModel = $param["AIModel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new ImageSceneInfo();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }
    }
}
