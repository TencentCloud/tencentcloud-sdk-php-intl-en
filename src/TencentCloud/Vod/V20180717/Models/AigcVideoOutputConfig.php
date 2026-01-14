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
 * Output media file configuration for AIGC video task.
 *
 * @method string getStorageMode() Obtain Storage mode. valid values: <li>Permanent: Permanent storage. the generated video file will be stored in vod, and the FileId can be obtained from the event notification.</li> <li>Temporary: Temporary storage. the generated video file will not be stored in vod, and a Temporary access URL can be obtained from the event notification.</li>
Default value: Temporary.
 * @method void setStorageMode(string $StorageMode) Set Storage mode. valid values: <li>Permanent: Permanent storage. the generated video file will be stored in vod, and the FileId can be obtained from the event notification.</li> <li>Temporary: Temporary storage. the generated video file will not be stored in vod, and a Temporary access URL can be obtained from the event notification.</li>
Default value: Temporary.
 * @method string getMediaName() Obtain Output media filename, longest 64 characters. default filename is specified by the system.
 * @method void setMediaName(string $MediaName) Set Output media filename, longest 64 characters. default filename is specified by the system.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicate other categories.</li>.
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicate other categories.</li>.
 * @method string getExpireTime() Obtain The expiry date of the output file. files will be deleted longer than this time. default is never expire. format according to ISO 8601 standard. see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set The expiry date of the output file. files will be deleted longer than this time. default is never expire. format according to ISO 8601 standard. see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
 * @method float getDuration() Obtain Video duration, unit: seconds. <li>when ModelName is Kling, optional values: 5, 10, defaults to 5;</li> <li>when ModelName is Hailuo, optional values: 6, 10, defaults to 6;</li> <li>when ModelName is Vidu, specify 1-10;</li> <li>when ModelName is GV, optional values: 8, defaults to 8;</li> <li>when ModelName is OS, optional values: 4, 8, 12, defaults to 8;</li>
 * @method void setDuration(float $Duration) Set Video duration, unit: seconds. <li>when ModelName is Kling, optional values: 5, 10, defaults to 5;</li> <li>when ModelName is Hailuo, optional values: 6, 10, defaults to 6;</li> <li>when ModelName is Vidu, specify 1-10;</li> <li>when ModelName is GV, optional values: 8, defaults to 8;</li> <li>when ModelName is OS, optional values: 4, 8, 12, defaults to 8;</li>
 * @method string getResolution() Obtain Generated video resolution.
<li>When ModelName is Kling, available values are 720P and 1080P, with a default value of 720P.</li>
<li>When ModelName is Hailuo, optional values are 768P and 1080P, with a default value of 768P.</li>
<li>When ModelName is Vidu, optional values are 720P, 1080P, defaults to 720P.</li>
<li>When ModelName is GV, optional values are 720P, 1080P, with a default value of 720P.</li>
<li>When ModelName is OS, the optional values are 720P.</li>
 * @method void setResolution(string $Resolution) Set Generated video resolution.
<li>When ModelName is Kling, available values are 720P and 1080P, with a default value of 720P.</li>
<li>When ModelName is Hailuo, optional values are 768P and 1080P, with a default value of 768P.</li>
<li>When ModelName is Vidu, optional values are 720P, 1080P, defaults to 720P.</li>
<li>When ModelName is GV, optional values are 720P, 1080P, with a default value of 720P.</li>
<li>When ModelName is OS, the optional values are 720P.</li>
 * @method string getAspectRatio() Obtain Specify the aspect ratio of the generated video.
<li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, 1:1, default is 16:9.</li>
<li>When ModelName is Vidu, the optional values for video generation and image generation usage reference are 16:9, 9:16, 4:3, 3:4, and 1:1. among them, only version q2 supports 4:3 and 3:4.</li>
<li>When ModelName is GV, optional values are 16:9 and 9:16, with a default value of 16:9.</li>
<li>When ModelName is OS, for text-to-video, optional values are 16:9, 9:16, default is 16:9;</li>
<li>When ModelName is Hailuo, it is not currently supported.</li>
 * @method void setAspectRatio(string $AspectRatio) Set Specify the aspect ratio of the generated video.
<li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, 1:1, default is 16:9.</li>
<li>When ModelName is Vidu, the optional values for video generation and image generation usage reference are 16:9, 9:16, 4:3, 3:4, and 1:1. among them, only version q2 supports 4:3 and 3:4.</li>
<li>When ModelName is GV, optional values are 16:9 and 9:16, with a default value of 16:9.</li>
<li>When ModelName is OS, for text-to-video, optional values are 16:9, 9:16, default is 16:9;</li>
<li>When ModelName is Hailuo, it is not currently supported.</li>
 * @method string getAudioGeneration() Obtain Whether to generate audio. supported models include GV, OS, Vidu. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Default value: Disabled.
 * @method void setAudioGeneration(string $AudioGeneration) Set Whether to generate audio. supported models include GV, OS, Vidu. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Default value: Disabled.
 * @method string getPersonGeneration() Obtain Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>
 * @method void setPersonGeneration(string $PersonGeneration) Set Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>
 * @method string getInputComplianceCheck() Obtain Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
 * @method void setInputComplianceCheck(string $InputComplianceCheck) Set Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
 * @method string getOutputComplianceCheck() Obtain Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) Set Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
 * @method string getEnhanceSwitch() Obtain Whether to enable video enhancement. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Note:
1. when the selected resolution exceeds the resolution the model can generate, enhancement is enabled by default.
2. for resolutions that the model can directly output, you can also proactively select the model to directly output low-resolution images and use enhancement to obtain the specified resolution.
 * @method void setEnhanceSwitch(string $EnhanceSwitch) Set Whether to enable video enhancement. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Note:
1. when the selected resolution exceeds the resolution the model can generate, enhancement is enabled by default.
2. for resolutions that the model can directly output, you can also proactively select the model to directly output low-resolution images and use enhancement to obtain the specified resolution.
 * @method string getFrameInterpolate() Obtain Whether to enable vidu intelligent frame interpolation. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
 * @method void setFrameInterpolate(string $FrameInterpolate) Set Whether to enable vidu intelligent frame interpolation. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
 */
class AigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string Storage mode. valid values: <li>Permanent: Permanent storage. the generated video file will be stored in vod, and the FileId can be obtained from the event notification.</li> <li>Temporary: Temporary storage. the generated video file will not be stored in vod, and a Temporary access URL can be obtained from the event notification.</li>
Default value: Temporary.
     */
    public $StorageMode;

    /**
     * @var string Output media filename, longest 64 characters. default filename is specified by the system.
     */
    public $MediaName;

    /**
     * @var integer Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicate other categories.</li>.
     */
    public $ClassId;

    /**
     * @var string The expiry date of the output file. files will be deleted longer than this time. default is never expire. format according to ISO 8601 standard. see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var float Video duration, unit: seconds. <li>when ModelName is Kling, optional values: 5, 10, defaults to 5;</li> <li>when ModelName is Hailuo, optional values: 6, 10, defaults to 6;</li> <li>when ModelName is Vidu, specify 1-10;</li> <li>when ModelName is GV, optional values: 8, defaults to 8;</li> <li>when ModelName is OS, optional values: 4, 8, 12, defaults to 8;</li>
     */
    public $Duration;

    /**
     * @var string Generated video resolution.
<li>When ModelName is Kling, available values are 720P and 1080P, with a default value of 720P.</li>
<li>When ModelName is Hailuo, optional values are 768P and 1080P, with a default value of 768P.</li>
<li>When ModelName is Vidu, optional values are 720P, 1080P, defaults to 720P.</li>
<li>When ModelName is GV, optional values are 720P, 1080P, with a default value of 720P.</li>
<li>When ModelName is OS, the optional values are 720P.</li>
     */
    public $Resolution;

    /**
     * @var string Specify the aspect ratio of the generated video.
<li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, 1:1, default is 16:9.</li>
<li>When ModelName is Vidu, the optional values for video generation and image generation usage reference are 16:9, 9:16, 4:3, 3:4, and 1:1. among them, only version q2 supports 4:3 and 3:4.</li>
<li>When ModelName is GV, optional values are 16:9 and 9:16, with a default value of 16:9.</li>
<li>When ModelName is OS, for text-to-video, optional values are 16:9, 9:16, default is 16:9;</li>
<li>When ModelName is Hailuo, it is not currently supported.</li>
     */
    public $AspectRatio;

    /**
     * @var string Whether to generate audio. supported models include GV, OS, Vidu. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Default value: Disabled.
     */
    public $AudioGeneration;

    /**
     * @var string Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>
     */
    public $PersonGeneration;

    /**
     * @var string Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
     */
    public $InputComplianceCheck;

    /**
     * @var string Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
     */
    public $OutputComplianceCheck;

    /**
     * @var string Whether to enable video enhancement. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Note:
1. when the selected resolution exceeds the resolution the model can generate, enhancement is enabled by default.
2. for resolutions that the model can directly output, you can also proactively select the model to directly output low-resolution images and use enhancement to obtain the specified resolution.
     */
    public $EnhanceSwitch;

    /**
     * @var string Whether to enable vidu intelligent frame interpolation. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
     */
    public $FrameInterpolate;

    /**
     * @param string $StorageMode Storage mode. valid values: <li>Permanent: Permanent storage. the generated video file will be stored in vod, and the FileId can be obtained from the event notification.</li> <li>Temporary: Temporary storage. the generated video file will not be stored in vod, and a Temporary access URL can be obtained from the event notification.</li>
Default value: Temporary.
     * @param string $MediaName Output media filename, longest 64 characters. default filename is specified by the system.
     * @param integer $ClassId Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicate other categories.</li>.
     * @param string $ExpireTime The expiry date of the output file. files will be deleted longer than this time. default is never expire. format according to ISO 8601 standard. see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
     * @param float $Duration Video duration, unit: seconds. <li>when ModelName is Kling, optional values: 5, 10, defaults to 5;</li> <li>when ModelName is Hailuo, optional values: 6, 10, defaults to 6;</li> <li>when ModelName is Vidu, specify 1-10;</li> <li>when ModelName is GV, optional values: 8, defaults to 8;</li> <li>when ModelName is OS, optional values: 4, 8, 12, defaults to 8;</li>
     * @param string $Resolution Generated video resolution.
<li>When ModelName is Kling, available values are 720P and 1080P, with a default value of 720P.</li>
<li>When ModelName is Hailuo, optional values are 768P and 1080P, with a default value of 768P.</li>
<li>When ModelName is Vidu, optional values are 720P, 1080P, defaults to 720P.</li>
<li>When ModelName is GV, optional values are 720P, 1080P, with a default value of 720P.</li>
<li>When ModelName is OS, the optional values are 720P.</li>
     * @param string $AspectRatio Specify the aspect ratio of the generated video.
<li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, 1:1, default is 16:9.</li>
<li>When ModelName is Vidu, the optional values for video generation and image generation usage reference are 16:9, 9:16, 4:3, 3:4, and 1:1. among them, only version q2 supports 4:3 and 3:4.</li>
<li>When ModelName is GV, optional values are 16:9 and 9:16, with a default value of 16:9.</li>
<li>When ModelName is OS, for text-to-video, optional values are 16:9, 9:16, default is 16:9;</li>
<li>When ModelName is Hailuo, it is not currently supported.</li>
     * @param string $AudioGeneration Whether to generate audio. supported models include GV, OS, Vidu. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Default value: Disabled.
     * @param string $PersonGeneration Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>
     * @param string $InputComplianceCheck Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
     * @param string $OutputComplianceCheck Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
     * @param string $EnhanceSwitch Whether to enable video enhancement. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
Note:
1. when the selected resolution exceeds the resolution the model can generate, enhancement is enabled by default.
2. for resolutions that the model can directly output, you can also proactively select the model to directly output low-resolution images and use enhancement to obtain the specified resolution.
     * @param string $FrameInterpolate Whether to enable vidu intelligent frame interpolation. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("AudioGeneration",$param) and $param["AudioGeneration"] !== null) {
            $this->AudioGeneration = $param["AudioGeneration"];
        }

        if (array_key_exists("PersonGeneration",$param) and $param["PersonGeneration"] !== null) {
            $this->PersonGeneration = $param["PersonGeneration"];
        }

        if (array_key_exists("InputComplianceCheck",$param) and $param["InputComplianceCheck"] !== null) {
            $this->InputComplianceCheck = $param["InputComplianceCheck"];
        }

        if (array_key_exists("OutputComplianceCheck",$param) and $param["OutputComplianceCheck"] !== null) {
            $this->OutputComplianceCheck = $param["OutputComplianceCheck"];
        }

        if (array_key_exists("EnhanceSwitch",$param) and $param["EnhanceSwitch"] !== null) {
            $this->EnhanceSwitch = $param["EnhanceSwitch"];
        }

        if (array_key_exists("FrameInterpolate",$param) and $param["FrameInterpolate"] !== null) {
            $this->FrameInterpolate = $param["FrameInterpolate"];
        }
    }
}
