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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method string getModelName() Obtain <p>Model name. Parameter values:<br>Kling: Kling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
 * @method void setModelName(string $ModelName) Set <p>Model name. Parameter values:<br>Kling: Kling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
 * @method string getModelVersion() Obtain <p>Model version. Value: <br>When ModelName is Hailuo, available values are 02, 2.3, 2.3-fast, H3, H3_regen, and H3-Max;<br>When ModelName is Kling, available values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, 3.0-Omni, 3.0-turbo, and scene;<br>When ModelName is Vidu, available values are q2, q2-pro, q2-turbo, q3, q3-pro, q3-turbo, q3-mix, q3-drama, q3-ad, scene, avatar-q2-pro, avatar-q2-turbo, and lip-sync;<br>When ModelName is GV, available values are 3.1, 3.1-fast, 3.1-lite, and omni;<br>When ModelName is OS, available values are 2.0;<br>When ModelName is Hunyuan, available values are 1.5 and 3d_2.0;<br>When ModelName is Mingmou, available values are 1.0;<br>When ModelName is PixVerse, available values are v5.6, v6, and c1;</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version. Value: <br>When ModelName is Hailuo, available values are 02, 2.3, 2.3-fast, H3, H3_regen, and H3-Max;<br>When ModelName is Kling, available values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, 3.0-Omni, 3.0-turbo, and scene;<br>When ModelName is Vidu, available values are q2, q2-pro, q2-turbo, q3, q3-pro, q3-turbo, q3-mix, q3-drama, q3-ad, scene, avatar-q2-pro, avatar-q2-turbo, and lip-sync;<br>When ModelName is GV, available values are 3.1, 3.1-fast, 3.1-lite, and omni;<br>When ModelName is OS, available values are 2.0;<br>When ModelName is Hunyuan, available values are 1.5 and 3d_2.0;<br>When ModelName is Mingmou, available values are 1.0;<br>When ModelName is PixVerse, available values are v5.6, v6, and c1;</p>
 * @method array getFileInfos() Obtain <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image/video/sound generation, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: <strong>The Usage field of the first frame image is FirstFrame, and the Usage field of the last frame image is LastFrame</strong>. One image is supported for each. The first frame can be imported separately, but the last frame cannot be imported separately. <strong>First and last frame generation uses the image ratio for reference</strong>.<br><strong>Reference image/video/sound generation</strong>: You can import single or multiple images/videos/sounds as references, with the <strong>Usage field set to Reference</strong>. <strong>In reference mode, you can adjust the aspect ratio of the generated video</strong>.<br><strong>Video editing</strong>: Vidu and Kling can input a video for editing. You can also import images while importing a video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size cannot exceed 10 MB.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>For whether a specific model version supports reference image/video/sound, first and last frame, video editing, and other features, you can request documentation from us or refer to the original vendor's document information.</li></ol>
 * @method void setFileInfos(array $FileInfos) Set <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image/video/sound generation, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: <strong>The Usage field of the first frame image is FirstFrame, and the Usage field of the last frame image is LastFrame</strong>. One image is supported for each. The first frame can be imported separately, but the last frame cannot be imported separately. <strong>First and last frame generation uses the image ratio for reference</strong>.<br><strong>Reference image/video/sound generation</strong>: You can import single or multiple images/videos/sounds as references, with the <strong>Usage field set to Reference</strong>. <strong>In reference mode, you can adjust the aspect ratio of the generated video</strong>.<br><strong>Video editing</strong>: Vidu and Kling can input a video for editing. You can also import images while importing a video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size cannot exceed 10 MB.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>For whether a specific model version supports reference image/video/sound, first and last frame, video editing, and other features, you can request documentation from us or refer to the original vendor's document information.</li></ol>
 * @method array getSubjectInfos() Obtain <p>Subject input information.</p>
 * @method void setSubjectInfos(array $SubjectInfos) Set <p>Subject input information.</p>
 * @method string getLastFrameFileId() Obtain <p>Media file ID used as the last frame image to generate a video. The globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>The image size must be less than 10M.</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
 * @method void setLastFrameFileId(string $LastFrameFileId) Set <p>Media file ID used as the last frame image to generate a video. The globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>The image size must be less than 10M.</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
 * @method string getLastFrameUrl() Obtain <p>URL of the media file used as the last frame to generate video. Note:</p><ol><li>When specifying this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Supported image formats: jpeg, jpg, png, webp.</li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) Set <p>URL of the media file used as the last frame to generate video. Note:</p><ol><li>When specifying this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Supported image formats: jpeg, jpg, png, webp.</li></ol>
 * @method string getPrompt() Obtain <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario type is used, and ExtInfo is not null, Prompt is required.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario type is used, and ExtInfo is not null, Prompt is required.</p>
 * @method string getNegativePrompt() Obtain <p>Prompt to prevent the model from generating videos.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>Prompt to prevent the model from generating videos.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
 * @method AigcVideoOutputConfig getOutputConfig() Obtain <p>Output media file configuration for a video task.</p>
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) Set <p>Output media file configuration for a video task.</p>
 * @method string getInputRegion() Obtain <p>Region information of the input file. Values are as follows:</p><ul><li>If the input file is stored overseas: Oversea;</li><li>If the input file is stored in the western United States: OverseaUSWest;</li><li>If the input file is stored in the Chinese mainland: Mainland.</li></ul><p>Default value: Mainland</p>
 * @method void setInputRegion(string $InputRegion) Set <p>Region information of the input file. Values are as follows:</p><ul><li>If the input file is stored overseas: Oversea;</li><li>If the input file is stored in the western United States: OverseaUSWest;</li><li>If the input file is stored in the Chinese mainland: Mainland.</li></ul><p>Default value: Mainland</p>
 * @method string getSceneType() Obtain <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect template;</li><li>Other ModelName values are not currently supported.</li>
 * @method void setSceneType(string $SceneType) Set <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect template;</li><li>Other ModelName values are not currently supported.</li>
 * @method string getProcedure() Obtain <p><a href="https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81">Task flow name</a>. Fill in when you need to execute a task flow on the generated new video.</p>
 * @method void setProcedure(string $Procedure) Set <p><a href="https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81">Task flow name</a>. Fill in when you need to execute a task flow on the generated new video.</p>
 * @method integer getSeed() Obtain <p>Random seed of the model.</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed of the model.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used for special purposes.<br>Can be used to import special model parameters, storyboard prompts, etc.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used for special purposes.<br>Can be used to import special model parameters, storyboard prompts, etc.</p>
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name. Parameter values:<br>Kling: Kling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
     */
    public $ModelName;

    /**
     * @var string <p>Model version. Value: <br>When ModelName is Hailuo, available values are 02, 2.3, 2.3-fast, H3, H3_regen, and H3-Max;<br>When ModelName is Kling, available values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, 3.0-Omni, 3.0-turbo, and scene;<br>When ModelName is Vidu, available values are q2, q2-pro, q2-turbo, q3, q3-pro, q3-turbo, q3-mix, q3-drama, q3-ad, scene, avatar-q2-pro, avatar-q2-turbo, and lip-sync;<br>When ModelName is GV, available values are 3.1, 3.1-fast, 3.1-lite, and omni;<br>When ModelName is OS, available values are 2.0;<br>When ModelName is Hunyuan, available values are 1.5 and 3d_2.0;<br>When ModelName is Mingmou, available values are 1.0;<br>When ModelName is PixVerse, available values are v5.6, v6, and c1;</p>
     */
    public $ModelVersion;

    /**
     * @var array <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image/video/sound generation, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: <strong>The Usage field of the first frame image is FirstFrame, and the Usage field of the last frame image is LastFrame</strong>. One image is supported for each. The first frame can be imported separately, but the last frame cannot be imported separately. <strong>First and last frame generation uses the image ratio for reference</strong>.<br><strong>Reference image/video/sound generation</strong>: You can import single or multiple images/videos/sounds as references, with the <strong>Usage field set to Reference</strong>. <strong>In reference mode, you can adjust the aspect ratio of the generated video</strong>.<br><strong>Video editing</strong>: Vidu and Kling can input a video for editing. You can also import images while importing a video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size cannot exceed 10 MB.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>For whether a specific model version supports reference image/video/sound, first and last frame, video editing, and other features, you can request documentation from us or refer to the original vendor's document information.</li></ol>
     */
    public $FileInfos;

    /**
     * @var array <p>Subject input information.</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>Media file ID used as the last frame image to generate a video. The globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>The image size must be less than 10M.</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>URL of the media file used as the last frame to generate video. Note:</p><ol><li>When specifying this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Supported image formats: jpeg, jpg, png, webp.</li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario type is used, and ExtInfo is not null, Prompt is required.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Prompt to prevent the model from generating videos.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcVideoOutputConfig <p>Output media file configuration for a video task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Region information of the input file. Values are as follows:</p><ul><li>If the input file is stored overseas: Oversea;</li><li>If the input file is stored in the western United States: OverseaUSWest;</li><li>If the input file is stored in the Chinese mainland: Mainland.</li></ul><p>Default value: Mainland</p>
     */
    public $InputRegion;

    /**
     * @var string <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect template;</li><li>Other ModelName values are not currently supported.</li>
     */
    public $SceneType;

    /**
     * @var string <p><a href="https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81">Task flow name</a>. Fill in when you need to execute a task flow on the generated new video.</p>
     */
    public $Procedure;

    /**
     * @var integer <p>Random seed of the model.</p>
     */
    public $Seed;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Reserved field, used for special purposes.<br>Can be used to import special model parameters, storyboard prompts, etc.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="/document/product/266/14574">application</a> ID. For customers who activate VOD services after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     * @param string $ModelName <p>Model name. Parameter values:<br>Kling: Kling;<br>Vidu;<br>Hailuo: Hailuo;<br>Hunyuan: Hunyuan;<br>Mingmou: Mingmou;<br>GV;<br>OS;<br>PixVerse;</p>
     * @param string $ModelVersion <p>Model version. Value: <br>When ModelName is Hailuo, available values are 02, 2.3, 2.3-fast, H3, H3_regen, and H3-Max;<br>When ModelName is Kling, available values are 1.6, 2.0, 2.1, 2.5, 2.6, O1, 3.0, 3.0-Omni, 3.0-turbo, and scene;<br>When ModelName is Vidu, available values are q2, q2-pro, q2-turbo, q3, q3-pro, q3-turbo, q3-mix, q3-drama, q3-ad, scene, avatar-q2-pro, avatar-q2-turbo, and lip-sync;<br>When ModelName is GV, available values are 3.1, 3.1-fast, 3.1-lite, and omni;<br>When ModelName is OS, available values are 2.0;<br>When ModelName is Hunyuan, available values are 1.5 and 3d_2.0;<br>When ModelName is Mingmou, available values are 1.0;<br>When ModelName is PixVerse, available values are v5.6, v6, and c1;</p>
     * @param array $FileInfos <p>Describes the resource file to be used by the model for video generation, divided into <strong>first and last frame mode, reference image/video/sound generation, video editing, and other modes</strong>.</p><p><strong>First and last frame video generation</strong>: <strong>The Usage field of the first frame image is FirstFrame, and the Usage field of the last frame image is LastFrame</strong>. One image is supported for each. The first frame can be imported separately, but the last frame cannot be imported separately. <strong>First and last frame generation uses the image ratio for reference</strong>.<br><strong>Reference image/video/sound generation</strong>: You can import single or multiple images/videos/sounds as references, with the <strong>Usage field set to Reference</strong>. <strong>In reference mode, you can adjust the aspect ratio of the generated video</strong>.<br><strong>Video editing</strong>: Vidu and Kling can input a video for editing. You can also import images while importing a video, with the <strong>Usage field of the image set to Reference</strong>.</p><p>Note:</p><ol><li>Image size cannot exceed 10 MB.</li><li>Supported image formats: jpeg, jpg, png. x0b</li><li>For whether a specific model version supports reference image/video/sound, first and last frame, video editing, and other features, you can request documentation from us or refer to the original vendor's document information.</li></ol>
     * @param array $SubjectInfos <p>Subject input information.</p>
     * @param string $LastFrameFileId <p>Media file ID used as the last frame image to generate a video. The globally unique identifier of the file in VOD, assigned by the VOD backend after successful upload. You can obtain this field in the <a href="/document/product/266/7830">video upload completion event notification</a> or the <a href="https://console.cloud.tencent.com/vod/media">VOD console</a>.</p><ol><li>When you specify this parameter, you must also specify the first frame through FileInfos.</li><li>The image size must be less than 10M.</li><li>The image format values are: jpeg, jpg, png, webp.</li></ol>
     * @param string $LastFrameUrl <p>URL of the media file used as the last frame to generate video. Note:</p><ol><li>When specifying this parameter, you must also specify the first frame through FileInfos.</li><li>Image size must be less than 5M.</li><li>Supported image formats: jpeg, jpg, png, webp.</li></ol>
     * @param string $Prompt <p>Prompt for video generation.<br>When no reference file is passed in, no usage scenario type is used, and ExtInfo is not null, Prompt is required.</p>
     * @param string $NegativePrompt <p>Prompt to prevent the model from generating videos.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>Output media file configuration for a video task.</p>
     * @param string $InputRegion <p>Region information of the input file. Values are as follows:</p><ul><li>If the input file is stored overseas: Oversea;</li><li>If the input file is stored in the western United States: OverseaUSWest;</li><li>If the input file is stored in the Chinese mainland: Mainland.</li></ul><p>Default value: Mainland</p>
     * @param string $SceneType <p>Scenario type. Values are as follows:</p><li>When ModelName is Kling: motion_control means action control; avatar_i2v means digital human; lip_sync means lip-sync;</li><li>When ModelName is Vidu: template_effect means special effect template;</li><li>Other ModelName values are not currently supported.</li>
     * @param string $Procedure <p><a href="https://www.tencentcloud.com/document/product/266/33475?from_cn_redirect=1#.E4.BB.BB.E5.8A.A1.E6.B5.81">Task flow name</a>. Fill in when you need to execute a task flow on the generated new video.</p>
     * @param integer $Seed <p>Random seed of the model.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $ExtInfo <p>Reserved field, used for special purposes.<br>Can be used to import special model parameters, storyboard prompts, etc.</p>
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

        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
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
