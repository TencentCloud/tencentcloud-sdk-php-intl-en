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
 * CreateAigcVideoTask request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
 * @method string getModelName() Obtain <p>Model name. Value:</p><li>Hailuo: Hailuo;</li><li>Kling: Keling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: Mingmou;</li>
 * @method void setModelName(string $ModelName) Set <p>Model name. Value:</p><li>Hailuo: Hailuo;</li><li>Kling: Keling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: Mingmou;</li>
 * @method string getModelVersion() Obtain <p>Model version. Parameter Value: <li>When ModelName is Hailuo, optional values: 02, 2.3, and 2.3-fast;</li><li>When ModelName is Kling, optional values: 1.6, 2.0, 2.1, 2.5, and O1;</li><li>When ModelName is Jimeng, optional values: 3.0pro;</li><li>When ModelName is Vidu, optional values: q2, q2-pro, q2-turbo, q3-pro, and q3-turbo;</li><li>When ModelName is GV, optional values: 3.1 and 3.1-fast;</li><li>When ModelName is OS, optional values: 2.0;</li><li>When ModelName is Hunyuan, optional values: 1.5;</li><li>When ModelName is Mingmou, optional values: 1.0;</li></p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version. Parameter Value: <li>When ModelName is Hailuo, optional values: 02, 2.3, and 2.3-fast;</li><li>When ModelName is Kling, optional values: 1.6, 2.0, 2.1, 2.5, and O1;</li><li>When ModelName is Jimeng, optional values: 3.0pro;</li><li>When ModelName is Vidu, optional values: q2, q2-pro, q2-turbo, q3-pro, and q3-turbo;</li><li>When ModelName is GV, optional values: 3.1 and 3.1-fast;</li><li>When ModelName is OS, optional values: 2.0;</li><li>When ModelName is Hunyuan, optional values: 1.5;</li><li>When ModelName is Mingmou, optional values: 1.0;</li></p>
 * @method array getFileInfos() Obtain <p>A list of up to three material resource files for description of the resource files to be used by the model to generate video.</p><p>Video generation for first and last frame: use the first table in FileInfos to represent the first frame (at this time FileInfos contains at most one image), and LastFrameFileId or LastFrameUrl to represent the last frame.</p><p>Models that support multi-image input:</p><ol><li>GV: when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.</li><li>Vidu: supports video generation with multiple image references. For q2 model, 1-7 images can be imported as the subject id via ObjectId in FileInfos.</li></ol><p>Note:</p><ol><li>Image size should not exceed 10M.</li><li>Supported image formats: jpeg, png.</li></ol>
 * @method void setFileInfos(array $FileInfos) Set <p>A list of up to three material resource files for description of the resource files to be used by the model to generate video.</p><p>Video generation for first and last frame: use the first table in FileInfos to represent the first frame (at this time FileInfos contains at most one image), and LastFrameFileId or LastFrameUrl to represent the last frame.</p><p>Models that support multi-image input:</p><ol><li>GV: when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.</li><li>Vidu: supports video generation with multiple image references. For q2 model, 1-7 images can be imported as the subject id via ObjectId in FileInfos.</li></ol><p>Note:</p><ol><li>Image size should not exceed 10M.</li><li>Supported image formats: jpeg, png.</li></ol>
 * @method array getSubjectInfos() Obtain <p>Fixed entity input information.</p>
 * @method void setSubjectInfos(array $SubjectInfos) Set <p>Fixed entity input information.</p>
 * @method string getLastFrameFileId() Obtain <p>Media file ID used as the tail frame to generate video. This file has a globally unique ID assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. Description:</p><ol><li>Only models GV, Kling, and Vidu are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
 * @method void setLastFrameFileId(string $LastFrameFileId) Set <p>Media file ID used as the tail frame to generate video. This file has a globally unique ID assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. Description:</p><ol><li>Only models GV, Kling, and Vidu are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
 * @method string getLastFrameUrl() Obtain <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) Set <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
 * @method string getPrompt() Obtain <p>Prompt for video generation. This parameter is required when FileInfos is empty.<br>Example value: move the picture</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for video generation. This parameter is required when FileInfos is empty.<br>Example value: move the picture</p>
 * @method string getNegativePrompt() Obtain <p>To prevent the model from generating video prompts.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>To prevent the model from generating video prompts.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method AigcVideoOutputConfig getOutputConfig() Obtain <p>Output media file configuration for the video generation task.</p>
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) Set <p>Output media file configuration for the video generation task.</p>
 * @method string getInputRegion() Obtain <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
 * @method void setInputRegion(string $InputRegion) Set <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
 * @method string getSceneType() Obtain <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect Template;</li><li>Other ModelNames are not currently supported.</li>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect Template;</li><li>Other ModelNames are not currently supported.</li>
 * @method integer getSeed() Obtain 
 * @method void setSeed(integer $Seed) Set 
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used for special purpose.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used for special purpose.</p>
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name. Value:</p><li>Hailuo: Hailuo;</li><li>Kling: Keling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: Mingmou;</li>
     */
    public $ModelName;

    /**
     * @var string <p>Model version. Parameter Value: <li>When ModelName is Hailuo, optional values: 02, 2.3, and 2.3-fast;</li><li>When ModelName is Kling, optional values: 1.6, 2.0, 2.1, 2.5, and O1;</li><li>When ModelName is Jimeng, optional values: 3.0pro;</li><li>When ModelName is Vidu, optional values: q2, q2-pro, q2-turbo, q3-pro, and q3-turbo;</li><li>When ModelName is GV, optional values: 3.1 and 3.1-fast;</li><li>When ModelName is OS, optional values: 2.0;</li><li>When ModelName is Hunyuan, optional values: 1.5;</li><li>When ModelName is Mingmou, optional values: 1.0;</li></p>
     */
    public $ModelVersion;

    /**
     * @var array <p>A list of up to three material resource files for description of the resource files to be used by the model to generate video.</p><p>Video generation for first and last frame: use the first table in FileInfos to represent the first frame (at this time FileInfos contains at most one image), and LastFrameFileId or LastFrameUrl to represent the last frame.</p><p>Models that support multi-image input:</p><ol><li>GV: when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.</li><li>Vidu: supports video generation with multiple image references. For q2 model, 1-7 images can be imported as the subject id via ObjectId in FileInfos.</li></ol><p>Note:</p><ol><li>Image size should not exceed 10M.</li><li>Supported image formats: jpeg, png.</li></ol>
     */
    public $FileInfos;

    /**
     * @var array <p>Fixed entity input information.</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>Media file ID used as the tail frame to generate video. This file has a globally unique ID assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. Description:</p><ol><li>Only models GV, Kling, and Vidu are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>Prompt for video generation. This parameter is required when FileInfos is empty.<br>Example value: move the picture</p>
     */
    public $Prompt;

    /**
     * @var string <p>To prevent the model from generating video prompts.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcVideoOutputConfig <p>Output media file configuration for the video generation task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     */
    public $InputRegion;

    /**
     * @var string <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect Template;</li><li>Other ModelNames are not currently supported.</li>
     */
    public $SceneType;

    /**
     * @var integer 
     */
    public $Seed;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Reserved field, used for special purpose.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     * @param string $ModelName <p>Model name. Value:</p><li>Hailuo: Hailuo;</li><li>Kling: Keling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: Mingmou;</li>
     * @param string $ModelVersion <p>Model version. Parameter Value: <li>When ModelName is Hailuo, optional values: 02, 2.3, and 2.3-fast;</li><li>When ModelName is Kling, optional values: 1.6, 2.0, 2.1, 2.5, and O1;</li><li>When ModelName is Jimeng, optional values: 3.0pro;</li><li>When ModelName is Vidu, optional values: q2, q2-pro, q2-turbo, q3-pro, and q3-turbo;</li><li>When ModelName is GV, optional values: 3.1 and 3.1-fast;</li><li>When ModelName is OS, optional values: 2.0;</li><li>When ModelName is Hunyuan, optional values: 1.5;</li><li>When ModelName is Mingmou, optional values: 1.0;</li></p>
     * @param array $FileInfos <p>A list of up to three material resource files for description of the resource files to be used by the model to generate video.</p><p>Video generation for first and last frame: use the first table in FileInfos to represent the first frame (at this time FileInfos contains at most one image), and LastFrameFileId or LastFrameUrl to represent the last frame.</p><p>Models that support multi-image input:</p><ol><li>GV: when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.</li><li>Vidu: supports video generation with multiple image references. For q2 model, 1-7 images can be imported as the subject id via ObjectId in FileInfos.</li></ol><p>Note:</p><ol><li>Image size should not exceed 10M.</li><li>Supported image formats: jpeg, png.</li></ol>
     * @param array $SubjectInfos <p>Fixed entity input information.</p>
     * @param string $LastFrameFileId <p>Media file ID used as the tail frame to generate video. This file has a globally unique ID assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830?from_cn_redirect=1">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>. Description:</p><ol><li>Only models GV, Kling, and Vidu are supported. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame of the video to be generated. When ModelName is Kling, ModelVersion is 2.1, and the output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
     * @param string $LastFrameUrl <p>Media file URL used as the tail frame to generate video. Description:</p><ol><li>Only support models GV, Kling, and Vidu. Other models are not currently supported. When ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the head frame for video generation. When ModelName is Kling, ModelVersion is 2.1, and output resolution Resolution is specified as 1080P, you can specify this parameter. When ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.</li><li>Image size must be less than 5M.</li><li><ol start="3"><li>Image format value: jpeg, jpg, png, webp.</li></ol></li></ol>
     * @param string $Prompt <p>Prompt for video generation. This parameter is required when FileInfos is empty.<br>Example value: move the picture</p>
     * @param string $NegativePrompt <p>To prevent the model from generating video prompts.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>Output media file configuration for the video generation task.</p>
     * @param string $InputRegion <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     * @param string $SceneType <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect Template;</li><li>Other ModelNames are not currently supported.</li>
     * @param integer $Seed 
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $ExtInfo <p>Reserved field, used for special purpose.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
