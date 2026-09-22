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
 * Input of AIGC video tasks.
 *
 * @method string getModelName() Obtain <p>Model name.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.</p>
 * @method string getModelVersion() Obtain <p>Model version.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version.</p>
 * @method array getFileInfos() Obtain <p>Input file information for an AIGC video generation task.</p>
 * @method void setFileInfos(array $FileInfos) Set <p>Input file information for an AIGC video generation task.</p>
 * @method array getSubjectInfos() Obtain <p>Fixed subject input information for the AIGC task.</p>
 * @method void setSubjectInfos(array $SubjectInfos) Set <p>Fixed subject input information for the AIGC task.</p>
 * @method string getLastFrameFileId() Obtain <p>Media file ID used as the tail frame to generate a video. This globally unique identifier of the file in VOD is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method void setLastFrameFileId(string $LastFrameFileId) Set <p>Media file ID used as the tail frame to generate a video. This globally unique identifier of the file in VOD is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
 * @method string getLastFrameUrl() Obtain <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>Only GV, Kling, and Vidu models are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must also specify FileInfos as the first frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>The image size must be less than 5M.</li><li><ol start="3"><li>The value of the image format is: jpeg, jpg, png, webp.</li></ol></li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) Set <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>Only GV, Kling, and Vidu models are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must also specify FileInfos as the first frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>The image size must be less than 5M.</li><li><ol start="3"><li>The value of the image format is: jpeg, jpg, png, webp.</li></ol></li></ol>
 * @method string getPrompt() Obtain <p>Prompt for video generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for video generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>Prompt to prevent the model from generating video. Supports up to 1000 characters.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>Prompt to prevent the model from generating video. Supports up to 1000 characters.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method string getGenerationMode() Obtain <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
 * @method void setGenerationMode(string $GenerationMode) Set <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
 * @method AigcVideoOutputConfig getOutputConfig() Obtain <p>Output result file output for AIGC image generation.</p>
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) Set <p>Output result file output for AIGC image generation.</p>
 * @method string getInputRegion() Obtain <p>Region information of the input file. If the file url is a foreign address, selectable Oversea. Default: Mainland.</p>
 * @method void setInputRegion(string $InputRegion) Set <p>Region information of the input file. If the file url is a foreign address, selectable Oversea. Default: Mainland.</p>
 * @method string getSceneType() Obtain <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 * @method string getExtInfo() Obtain <p>Pass-through parameter.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Pass-through parameter.</p>
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
     * @var array <p>Input file information for an AIGC video generation task.</p>
     */
    public $FileInfos;

    /**
     * @var array <p>Fixed subject input information for the AIGC task.</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>Media file ID used as the tail frame to generate a video. This globally unique identifier of the file in VOD is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>Only GV, Kling, and Vidu models are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must also specify FileInfos as the first frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>The image size must be less than 5M.</li><li><ol start="3"><li>The value of the image format is: jpeg, jpg, png, webp.</li></ol></li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>Prompt for video generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Prompt to prevent the model from generating video. Supports up to 1000 characters.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var string <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
     */
    public $GenerationMode;

    /**
     * @var AigcVideoOutputConfig <p>Output result file output for AIGC image generation.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Region information of the input file. If the file url is a foreign address, selectable Oversea. Default: Mainland.</p>
     */
    public $InputRegion;

    /**
     * @var string <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
     */
    public $SceneType;

    /**
     * @var integer <p>Random seed of the model.</p>
     */
    public $Seed;

    /**
     * @var string <p>Pass-through parameter.</p>
     */
    public $ExtInfo;

    /**
     * @param string $ModelName <p>Model name.</p>
     * @param string $ModelVersion <p>Model version.</p>
     * @param array $FileInfos <p>Input file information for an AIGC video generation task.</p>
     * @param array $SubjectInfos <p>Fixed subject input information for the AIGC task.</p>
     * @param string $LastFrameFileId <p>Media file ID used as the tail frame to generate a video. This globally unique identifier of the file in VOD is assigned by the VOD backend after successful upload. You can obtain this field in the <a href="https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p>
     * @param string $LastFrameUrl <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>Only GV, Kling, and Vidu models are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must also specify FileInfos as the first frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>The image size must be less than 5M.</li><li><ol start="3"><li>The value of the image format is: jpeg, jpg, png, webp.</li></ol></li></ol>
     * @param string $Prompt <p>Prompt for video generation. Supports up to 1000 characters. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>Prompt to prevent the model from generating video. Supports up to 1000 characters.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     * @param string $GenerationMode <p>Generation mode. Valid values: <li>Standard: standard mode;</li> <li>Professional: high-quality mode;</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>Output result file output for AIGC image generation.</p>
     * @param string $InputRegion <p>Region information of the input file. If the file url is a foreign address, selectable Oversea. Default: Mainland.</p>
     * @param string $SceneType <p>Scenario type. Values are as follows: <li>When ModelName is Kling, the value motion_control means action control;</li><li>Not currently supported for other ModelName.</li></p>
     * @param integer $Seed <p>Random seed of the model.</p>
     * @param string $ExtInfo <p>Pass-through parameter.</p>
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
