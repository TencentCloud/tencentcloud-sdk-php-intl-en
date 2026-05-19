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
 * @method string getModelName() Obtain <p>Model name. Parameter Value:<br>Kling: Keling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
 * @method void setModelName(string $ModelName) Set <p>Model name. Parameter Value:<br>Kling: Keling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
 * @method string getModelVersion() Obtain <p>Model version. Parameter Value:<br>When ModelName is Hailuo, optional values are 02, 2.3, and 2.3-fast.<br>When ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, and 3.0-Omni.<br>When ModelName is Jimeng, optional value is 3.0pro.<br>When ModelName is Vidu, optional values are q2, q2-pro, q2-turbo, q3, q3-pro, and q3-turbo.<br>When ModelName is GV, optional values are 3.1 and 3.1-fast.<br>When ModelName is OS, optional value is 2.0.<br>When ModelName is Hunyuan, optional value is 1.5.<br>When ModelName is Mingmou, optional value is 1.0.<br>When ModelName is PixVerse, optional values are v5.6, v6, and c1.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version. Parameter Value:<br>When ModelName is Hailuo, optional values are 02, 2.3, and 2.3-fast.<br>When ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, and 3.0-Omni.<br>When ModelName is Jimeng, optional value is 3.0pro.<br>When ModelName is Vidu, optional values are q2, q2-pro, q2-turbo, q3, q3-pro, and q3-turbo.<br>When ModelName is GV, optional values are 3.1 and 3.1-fast.<br>When ModelName is OS, optional value is 2.0.<br>When ModelName is Hunyuan, optional value is 1.5.<br>When ModelName is Mingmou, optional value is 1.0.<br>When ModelName is PixVerse, optional values are v5.6, v6, and c1.</p>
 * @method array getFileInfos() Obtain <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image, video reference, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: The first frame supports only a <strong>single image</strong>, with the <strong>Usage field of the image set to FirstFrame</strong>. LastFrameFileId or LastFrameUrl represents the last frame. The first frame can be imported separately, but the last frame cannot. <strong>First and last frame generation refers to the image aspect ratio</strong>.<br><strong>Reference image generation</strong>: Allows input of a single image or multiple images, with the <strong>Usage field of the image set to Reference</strong>. Reference images can adjust the aspect ratio of the generated video.<br><strong>Video editing and video reference</strong>: Vidu and Kling can input a video as a reference or proceed with editing. Images can also be imported along with the video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size should be no more than 10M.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>To check whether a specific model version supports reference images, first and last frames, video editing, and other features, request the document from us or refer to the original document information.</li></ol>
 * @method void setFileInfos(array $FileInfos) Set <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image, video reference, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: The first frame supports only a <strong>single image</strong>, with the <strong>Usage field of the image set to FirstFrame</strong>. LastFrameFileId or LastFrameUrl represents the last frame. The first frame can be imported separately, but the last frame cannot. <strong>First and last frame generation refers to the image aspect ratio</strong>.<br><strong>Reference image generation</strong>: Allows input of a single image or multiple images, with the <strong>Usage field of the image set to Reference</strong>. Reference images can adjust the aspect ratio of the generated video.<br><strong>Video editing and video reference</strong>: Vidu and Kling can input a video as a reference or proceed with editing. Images can also be imported along with the video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size should be no more than 10M.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>To check whether a specific model version supports reference images, first and last frames, video editing, and other features, request the document from us or refer to the original document information.</li></ol>
 * @method array getSubjectInfos() Obtain <p>Subject input information.</p>
 * @method void setSubjectInfos(array $SubjectInfos) Set <p>Subject input information.</p>
 * @method string getLastFrameFileId() Obtain <p>Media file ID used as the last frame to generate video. This file's globally unique ID on VOD is assigned by the VOD backend after successful upload. You can retrieve this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When specifying this parameter, you must simultaneously designate the first frame via FileInfos.</li><li>Image size must be less than 10M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
 * @method void setLastFrameFileId(string $LastFrameFileId) Set <p>Media file ID used as the last frame to generate video. This file's globally unique ID on VOD is assigned by the VOD backend after successful upload. You can retrieve this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When specifying this parameter, you must simultaneously designate the first frame via FileInfos.</li><li>Image size must be less than 10M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
 * @method string getLastFrameUrl() Obtain <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) Set <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
 * @method string getPrompt() Obtain <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario is specified, ExtInfo is not empty, Prompt is required.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario is specified, ExtInfo is not empty, Prompt is required.</p>
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
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used when special purpose.<br>Can be used to input special parameters and storyboard prompts to the model.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used when special purpose.<br>Can be used to input special parameters and storyboard prompts to the model.</p>
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name. Parameter Value:<br>Kling: Keling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
     */
    public $ModelName;

    /**
     * @var string <p>Model version. Parameter Value:<br>When ModelName is Hailuo, optional values are 02, 2.3, and 2.3-fast.<br>When ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, and 3.0-Omni.<br>When ModelName is Jimeng, optional value is 3.0pro.<br>When ModelName is Vidu, optional values are q2, q2-pro, q2-turbo, q3, q3-pro, and q3-turbo.<br>When ModelName is GV, optional values are 3.1 and 3.1-fast.<br>When ModelName is OS, optional value is 2.0.<br>When ModelName is Hunyuan, optional value is 1.5.<br>When ModelName is Mingmou, optional value is 1.0.<br>When ModelName is PixVerse, optional values are v5.6, v6, and c1.</p>
     */
    public $ModelVersion;

    /**
     * @var array <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image, video reference, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: The first frame supports only a <strong>single image</strong>, with the <strong>Usage field of the image set to FirstFrame</strong>. LastFrameFileId or LastFrameUrl represents the last frame. The first frame can be imported separately, but the last frame cannot. <strong>First and last frame generation refers to the image aspect ratio</strong>.<br><strong>Reference image generation</strong>: Allows input of a single image or multiple images, with the <strong>Usage field of the image set to Reference</strong>. Reference images can adjust the aspect ratio of the generated video.<br><strong>Video editing and video reference</strong>: Vidu and Kling can input a video as a reference or proceed with editing. Images can also be imported along with the video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size should be no more than 10M.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>To check whether a specific model version supports reference images, first and last frames, video editing, and other features, request the document from us or refer to the original document information.</li></ol>
     */
    public $FileInfos;

    /**
     * @var array <p>Subject input information.</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>Media file ID used as the last frame to generate video. This file's globally unique ID on VOD is assigned by the VOD backend after successful upload. You can retrieve this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When specifying this parameter, you must simultaneously designate the first frame via FileInfos.</li><li>Image size must be less than 10M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario is specified, ExtInfo is not empty, Prompt is required.</p>
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
     * @var integer <p>Random seed of the model.</p>
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
     * @var string <p>Reserved field, used when special purpose.<br>Can be used to input special parameters and storyboard prompts to the model.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     * @param string $ModelName <p>Model name. Parameter Value:<br>Kling: Keling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
     * @param string $ModelVersion <p>Model version. Parameter Value:<br>When ModelName is Hailuo, optional values are 02, 2.3, and 2.3-fast.<br>When ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, and 3.0-Omni.<br>When ModelName is Jimeng, optional value is 3.0pro.<br>When ModelName is Vidu, optional values are q2, q2-pro, q2-turbo, q3, q3-pro, and q3-turbo.<br>When ModelName is GV, optional values are 3.1 and 3.1-fast.<br>When ModelName is OS, optional value is 2.0.<br>When ModelName is Hunyuan, optional value is 1.5.<br>When ModelName is Mingmou, optional value is 1.0.<br>When ModelName is PixVerse, optional values are v5.6, v6, and c1.</p>
     * @param array $FileInfos <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image, video reference, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: The first frame supports only a <strong>single image</strong>, with the <strong>Usage field of the image set to FirstFrame</strong>. LastFrameFileId or LastFrameUrl represents the last frame. The first frame can be imported separately, but the last frame cannot. <strong>First and last frame generation refers to the image aspect ratio</strong>.<br><strong>Reference image generation</strong>: Allows input of a single image or multiple images, with the <strong>Usage field of the image set to Reference</strong>. Reference images can adjust the aspect ratio of the generated video.<br><strong>Video editing and video reference</strong>: Vidu and Kling can input a video as a reference or proceed with editing. Images can also be imported along with the video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size should be no more than 10M.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>To check whether a specific model version supports reference images, first and last frames, video editing, and other features, request the document from us or refer to the original document information.</li></ol>
     * @param array $SubjectInfos <p>Subject input information.</p>
     * @param string $LastFrameFileId <p>Media file ID used as the last frame to generate video. This file's globally unique ID on VOD is assigned by the VOD backend after successful upload. You can retrieve this field in the <a href="https://www.tencentcloud.com/document/product/266/33950">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When specifying this parameter, you must simultaneously designate the first frame via FileInfos.</li><li>Image size must be less than 10M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
     * @param string $LastFrameUrl <p>URL of the media file used as the last frame to generate video. Description:</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Image format value is: jpeg, jpg, png, webp.</li></ol>
     * @param string $Prompt <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario is specified, ExtInfo is not empty, Prompt is required.</p>
     * @param string $NegativePrompt <p>To prevent the model from generating video prompts.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>Output media file configuration for the video generation task.</p>
     * @param string $InputRegion <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     * @param string $SceneType <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect Template;</li><li>Other ModelNames are not currently supported.</li>
     * @param integer $Seed <p>Random seed of the model.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $ExtInfo <p>Reserved field, used when special purpose.<br>Can be used to input special parameters and storyboard prompts to the model.</p>
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
