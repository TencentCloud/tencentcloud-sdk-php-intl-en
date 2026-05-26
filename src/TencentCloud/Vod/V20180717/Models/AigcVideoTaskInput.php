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
 * Input of the AIGC video generation task.
 *
 * @method string getModelName() Obtain <p>Model name.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.</p>
 * @method string getModelVersion() Obtain <p>Model version.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version.</p>
 * @method array getFileInfos() Obtain <p>Input file information of the AIGC video generation task.</p>
 * @method void setFileInfos(array $FileInfos) Set <p>Input file information of the AIGC video generation task.</p>
 * @method array getSubjectInfos() Obtain <p>Fixed entity input information for AIGC tasks.</p>
 * @method void setSubjectInfos(array $SubjectInfos) Set <p>Fixed entity input information for AIGC tasks.</p>
 * @method string getLastFrameFileId() Obtain <p>Media file ID used as the end frame to generate video. This file has a globally unique ID on VOD, assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method void setLastFrameFileId(string $LastFrameFileId) Set <p>Media file ID used as the end frame to generate video. This file has a globally unique ID on VOD, assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method string getLastFrameUrl() Obtain <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) Set <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
 * @method string getPrompt() Obtain <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>To prevent the model from generating video prompts. Supports a maximum of 1000 characters.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>To prevent the model from generating video prompts. Supports a maximum of 1000 characters.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method string getGenerationMode() Obtain <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
 * @method void setGenerationMode(string $GenerationMode) Set <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
 * @method AigcVideoOutputConfig getOutputConfig() Obtain <p>Output the result file of the AIGC image generation.</p>
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) Set <p>Output the result file of the AIGC image generation.</p>
 * @method string getInputRegion() Obtain <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
 * @method void setInputRegion(string $InputRegion) Set <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
 * @method string getSceneType() Obtain <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li><li>Other ModelName not currently supported.</li></p>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li><li>Other ModelName not currently supported.</li></p>
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 */
class AigcVideoTaskInput extends AbstractModel
{
    /**
     * @var string <p>Model name.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Model version.</p>
     */
    public $ModelVersion;

    /**
     * @var array <p>Input file information of the AIGC video generation task.</p>
     */
    public $FileInfos;

    /**
     * @var array <p>Fixed entity input information for AIGC tasks.</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>Media file ID used as the end frame to generate video. This file has a globally unique ID on VOD, assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>To prevent the model from generating video prompts. Supports a maximum of 1000 characters.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var string <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
     */
    public $GenerationMode;

    /**
     * @var AigcVideoOutputConfig <p>Output the result file of the AIGC image generation.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     */
    public $InputRegion;

    /**
     * @var string <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li><li>Other ModelName not currently supported.</li></p>
     */
    public $SceneType;

    /**
     * @var integer <p>Random seed of the model.</p>
     */
    public $Seed;

    /**
     * @param string $ModelName <p>Model name.</p>
     * @param string $ModelVersion <p>Model version.</p>
     * @param array $FileInfos <p>Input file information of the AIGC video generation task.</p>
     * @param array $SubjectInfos <p>Fixed entity input information for AIGC tasks.</p>
     * @param string $LastFrameFileId <p>Media file ID used as the end frame to generate video. This file has a globally unique ID on VOD, assigned by the VOD backend after successful upload. You can get this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     * @param string $LastFrameUrl <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
     * @param string $Prompt <p>Prompt for video generation. Supports a maximum of 1000 characters. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>To prevent the model from generating video prompts. Supports a maximum of 1000 characters.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param string $GenerationMode <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>Output the result file of the AIGC image generation.</p>
     * @param string $InputRegion <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     * @param string $SceneType <p>Scenario type. Values as follows: <li>When ModelName is Kling, value motion_control means action control;</li><li>Other ModelName not currently supported.</li></p>
     * @param integer $Seed <p>Random seed of the model.</p>
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
    }
}
