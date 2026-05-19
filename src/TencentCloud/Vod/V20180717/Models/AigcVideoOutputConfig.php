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
 * @method string getStorageMode() Obtain <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from event notification. The valid period is 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from event notification.</li></ul><p>Default value: Temporary</p>
 * @method void setStorageMode(string $StorageMode) Set <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from event notification. The valid period is 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from event notification.</li></ul><p>Default value: Temporary</p>
 * @method string getMediaName() Obtain <p>Output media file name, up to 64 characters. Default filename is specified by the system.</p>
 * @method void setMediaName(string $MediaName) Set <p>Output media file name, up to 64 characters. Default filename is specified by the system.</p>
 * @method integer getClassId() Obtain <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicate other categories.</li>
 * @method void setClassId(integer $ClassId) Set <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicate other categories.</li>
 * @method string getExpireTime() Obtain <p>The expiry date of the output file. The file will be deleted longer than this time. It defaults to no expiration, format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method void setExpireTime(string $ExpireTime) Set <p>The expiry date of the output file. The file will be deleted longer than this time. It defaults to no expiration, format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
 * @method float getDuration() Obtain <p>Duration of the generated video, unit: seconds.</p><li>When ModelName is Kling, available values are 5 and 10, default is 5;</li><li>When ModelName is Hailuo, available values are 6 and 10, default is 6;</li><li>When ModelName is Vidu, specify 1-10;</li><li>When ModelName is GV, available values are 8, default is 8;</li><li>When ModelName is OS, available values are 4, 8, and 12, default is 8;</li><li>When ModelName is PixVerse, specify 1-15, default is 5;</li>
 * @method void setDuration(float $Duration) Set <p>Duration of the generated video, unit: seconds.</p><li>When ModelName is Kling, available values are 5 and 10, default is 5;</li><li>When ModelName is Hailuo, available values are 6 and 10, default is 6;</li><li>When ModelName is Vidu, specify 1-10;</li><li>When ModelName is GV, available values are 8, default is 8;</li><li>When ModelName is OS, available values are 4, 8, and 12, default is 8;</li><li>When ModelName is PixVerse, specify 1-15, default is 5;</li>
 * @method string getResolution() Obtain <p>Resolution of the generated video.</p><li>When ModelName is Kling, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is Hailuo, available values are 768P and 1080P, default is 768P;</li><li>When ModelName is Vidu, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is GV, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is OS, available value is 720P;</li><li>When ModelName is PixVerse, available values are 540p, 720p, 1080p, 2k, and 4k, default is 720p;</li>
 * @method void setResolution(string $Resolution) Set <p>Resolution of the generated video.</p><li>When ModelName is Kling, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is Hailuo, available values are 768P and 1080P, default is 768P;</li><li>When ModelName is Vidu, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is GV, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is OS, available value is 720P;</li><li>When ModelName is PixVerse, available values are 540p, 720p, 1080p, 2k, and 4k, default is 720p;</li>
 * @method string getAspectRatio() Obtain <p>Specify the aspect ratio of the generated video.</p><li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, and 1:1, with a default value of 16:9.</li><li>When ModelName is Vidu, for text-to-video and reference image-to-video, the optional values are 16:9, 9:16, 4:3, 3:4, and 1:1. Only version q2 supports 4:3 and 3:4.</li><li>When ModelName is GV, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is OS, for text-to-video, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is Hailuo, this parameter is not currently supported.</li><li>When ModelName is PixVerse, the optional values are 16:9, 4:3, 1:1, 3:4, 9:16, 2:3, 3:2, and 21:9.</li>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Specify the aspect ratio of the generated video.</p><li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, and 1:1, with a default value of 16:9.</li><li>When ModelName is Vidu, for text-to-video and reference image-to-video, the optional values are 16:9, 9:16, 4:3, 3:4, and 1:1. Only version q2 supports 4:3 and 3:4.</li><li>When ModelName is GV, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is OS, for text-to-video, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is Hailuo, this parameter is not currently supported.</li><li>When ModelName is PixVerse, the optional values are 16:9, 4:3, 1:1, 3:4, 9:16, 2:3, 3:2, and 21:9.</li>
 * @method string getAudioGeneration() Obtain <p>Whether to generate audio. Supported models include GV, OS, Vidu, Jimeng, and Kling.</p><p>Enumeration value:</p><ul><li>Enabled: Enable</li><li>Disabled: Disable</li></ul><p>Default value: Disabled</p>
 * @method void setAudioGeneration(string $AudioGeneration) Set <p>Whether to generate audio. Supported models include GV, OS, Vidu, Jimeng, and Kling.</p><p>Enumeration value:</p><ul><li>Enabled: Enable</li><li>Disabled: Disable</li></ul><p>Default value: Disabled</p>
 * @method string getPersonGeneration() Obtain <p>Whether to allow figure or human face generation. Valid values: <li>AllowAdult: Allow adult generation;</li> <li>Disallowed: Forbid including figure or human face in the image;</li></p>
 * @method void setPersonGeneration(string $PersonGeneration) Set <p>Whether to allow figure or human face generation. Valid values: <li>AllowAdult: Allow adult generation;</li> <li>Disallowed: Forbid including figure or human face in the image;</li></p>
 * @method string getInputComplianceCheck() Obtain <p>Whether to enable compliance check for input content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setInputComplianceCheck(string $InputComplianceCheck) Set <p>Whether to enable compliance check for input content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method string getOutputComplianceCheck() Obtain <p>Whether to enable compliance check for output content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) Set <p>Whether to enable compliance check for output content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method string getEnhanceSwitch() Obtain <p>Whether to enable video enhancement. Valid values: <li>Enabled: Turn on;</li> <li>Disabled: Turn off;</li><br>Description:</p><ol><li>For selected resolution exceeding the resolution the model can generate, enhancement is enabled by default.</li><li>For resolutions the model can directly output, you can also proactively select the model to directly output low-resolution and use enhancement to obtain the specified resolution.</li></ol>
 * @method void setEnhanceSwitch(string $EnhanceSwitch) Set <p>Whether to enable video enhancement. Valid values: <li>Enabled: Turn on;</li> <li>Disabled: Turn off;</li><br>Description:</p><ol><li>For selected resolution exceeding the resolution the model can generate, enhancement is enabled by default.</li><li>For resolutions the model can directly output, you can also proactively select the model to directly output low-resolution and use enhancement to obtain the specified resolution.</li></ol>
 * @method string getOffPeak() Obtain <p>Whether peak shaving is enabled. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setOffPeak(string $OffPeak) Set <p>Whether peak shaving is enabled. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method string getFrameInterpolate() Obtain <p>Whether to enable vidu intelligent frame interpolation. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setFrameInterpolate(string $FrameInterpolate) Set <p>Whether to enable vidu intelligent frame interpolation. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method string getLogoAdd() Obtain <p>Indicates whether to enable the icon watermark. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li><br>Currently supported models include Vidu. Other models are not supported.</p>
 * @method void setLogoAdd(string $LogoAdd) Set <p>Indicates whether to enable the icon watermark. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li><br>Currently supported models include Vidu. Other models are not supported.</p>
 * @method string getEnableBGM() Obtain <p>Whether to add background music to the generated video.</p><p>Enumeration value:</p><ul><li>Enabled: The system will automatically select suitable music from the preset BGM library and add it.</li><li>Disabled: Do not add BGM.</li></ul><p>Default value: Disabled</p>
 * @method void setEnableBGM(string $EnableBGM) Set <p>Whether to add background music to the generated video.</p><p>Enumeration value:</p><ul><li>Enabled: The system will automatically select suitable music from the preset BGM library and add it.</li><li>Disabled: Do not add BGM.</li></ul><p>Default value: Disabled</p>
 */
class AigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from event notification. The valid period is 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from event notification.</li></ul><p>Default value: Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>Output media file name, up to 64 characters. Default filename is specified by the system.</p>
     */
    public $MediaName;

    /**
     * @var integer <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicate other categories.</li>
     */
    public $ClassId;

    /**
     * @var string <p>The expiry date of the output file. The file will be deleted longer than this time. It defaults to no expiration, format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     */
    public $ExpireTime;

    /**
     * @var float <p>Duration of the generated video, unit: seconds.</p><li>When ModelName is Kling, available values are 5 and 10, default is 5;</li><li>When ModelName is Hailuo, available values are 6 and 10, default is 6;</li><li>When ModelName is Vidu, specify 1-10;</li><li>When ModelName is GV, available values are 8, default is 8;</li><li>When ModelName is OS, available values are 4, 8, and 12, default is 8;</li><li>When ModelName is PixVerse, specify 1-15, default is 5;</li>
     */
    public $Duration;

    /**
     * @var string <p>Resolution of the generated video.</p><li>When ModelName is Kling, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is Hailuo, available values are 768P and 1080P, default is 768P;</li><li>When ModelName is Vidu, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is GV, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is OS, available value is 720P;</li><li>When ModelName is PixVerse, available values are 540p, 720p, 1080p, 2k, and 4k, default is 720p;</li>
     */
    public $Resolution;

    /**
     * @var string <p>Specify the aspect ratio of the generated video.</p><li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, and 1:1, with a default value of 16:9.</li><li>When ModelName is Vidu, for text-to-video and reference image-to-video, the optional values are 16:9, 9:16, 4:3, 3:4, and 1:1. Only version q2 supports 4:3 and 3:4.</li><li>When ModelName is GV, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is OS, for text-to-video, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is Hailuo, this parameter is not currently supported.</li><li>When ModelName is PixVerse, the optional values are 16:9, 4:3, 1:1, 3:4, 9:16, 2:3, 3:2, and 21:9.</li>
     */
    public $AspectRatio;

    /**
     * @var string <p>Whether to generate audio. Supported models include GV, OS, Vidu, Jimeng, and Kling.</p><p>Enumeration value:</p><ul><li>Enabled: Enable</li><li>Disabled: Disable</li></ul><p>Default value: Disabled</p>
     */
    public $AudioGeneration;

    /**
     * @var string <p>Whether to allow figure or human face generation. Valid values: <li>AllowAdult: Allow adult generation;</li> <li>Disallowed: Forbid including figure or human face in the image;</li></p>
     */
    public $PersonGeneration;

    /**
     * @var string <p>Whether to enable compliance check for input content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $InputComplianceCheck;

    /**
     * @var string <p>Whether to enable compliance check for output content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $OutputComplianceCheck;

    /**
     * @var string <p>Whether to enable video enhancement. Valid values: <li>Enabled: Turn on;</li> <li>Disabled: Turn off;</li><br>Description:</p><ol><li>For selected resolution exceeding the resolution the model can generate, enhancement is enabled by default.</li><li>For resolutions the model can directly output, you can also proactively select the model to directly output low-resolution and use enhancement to obtain the specified resolution.</li></ol>
     */
    public $EnhanceSwitch;

    /**
     * @var string <p>Whether peak shaving is enabled. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $OffPeak;

    /**
     * @var string <p>Whether to enable vidu intelligent frame interpolation. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $FrameInterpolate;

    /**
     * @var string <p>Indicates whether to enable the icon watermark. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li><br>Currently supported models include Vidu. Other models are not supported.</p>
     */
    public $LogoAdd;

    /**
     * @var string <p>Whether to add background music to the generated video.</p><p>Enumeration value:</p><ul><li>Enabled: The system will automatically select suitable music from the preset BGM library and add it.</li><li>Disabled: Do not add BGM.</li></ul><p>Default value: Disabled</p>
     */
    public $EnableBGM;

    /**
     * @param string $StorageMode <p>Storage mode</p><p>Enumeration value:</p><ul><li>Temporary: Temporary storage. The generated video file will not be stored in VOD. You can obtain the temporary access URL from event notification. The valid period is 7 days.</li><li>Permanent: Permanent storage. The generated video file will be stored in VOD. You can obtain the FileId from event notification.</li></ul><p>Default value: Temporary</p>
     * @param string $MediaName <p>Output media file name, up to 64 characters. Default filename is specified by the system.</p>
     * @param integer $ClassId <p>Category ID, used to categorize and manage media. You can create a category and obtain the category ID via the <a href="/document/product/266/7812">create category</a> API.</p><li>Default value: 0, indicate other categories.</li>
     * @param string $ExpireTime <p>The expiry date of the output file. The file will be deleted longer than this time. It defaults to no expiration, format according to ISO 8601 standard. For details, see <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format description</a>.</p>
     * @param float $Duration <p>Duration of the generated video, unit: seconds.</p><li>When ModelName is Kling, available values are 5 and 10, default is 5;</li><li>When ModelName is Hailuo, available values are 6 and 10, default is 6;</li><li>When ModelName is Vidu, specify 1-10;</li><li>When ModelName is GV, available values are 8, default is 8;</li><li>When ModelName is OS, available values are 4, 8, and 12, default is 8;</li><li>When ModelName is PixVerse, specify 1-15, default is 5;</li>
     * @param string $Resolution <p>Resolution of the generated video.</p><li>When ModelName is Kling, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is Hailuo, available values are 768P and 1080P, default is 768P;</li><li>When ModelName is Vidu, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is GV, available values are 720P and 1080P, default is 720P;</li><li>When ModelName is OS, available value is 720P;</li><li>When ModelName is PixVerse, available values are 540p, 720p, 1080p, 2k, and 4k, default is 720p;</li>
     * @param string $AspectRatio <p>Specify the aspect ratio of the generated video.</p><li>When ModelName is Kling, for text-to-video, the optional values are 16:9, 9:16, and 1:1, with a default value of 16:9.</li><li>When ModelName is Vidu, for text-to-video and reference image-to-video, the optional values are 16:9, 9:16, 4:3, 3:4, and 1:1. Only version q2 supports 4:3 and 3:4.</li><li>When ModelName is GV, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is OS, for text-to-video, the optional values are 16:9 and 9:16, with a default value of 16:9.</li><li>When ModelName is Hailuo, this parameter is not currently supported.</li><li>When ModelName is PixVerse, the optional values are 16:9, 4:3, 1:1, 3:4, 9:16, 2:3, 3:2, and 21:9.</li>
     * @param string $AudioGeneration <p>Whether to generate audio. Supported models include GV, OS, Vidu, Jimeng, and Kling.</p><p>Enumeration value:</p><ul><li>Enabled: Enable</li><li>Disabled: Disable</li></ul><p>Default value: Disabled</p>
     * @param string $PersonGeneration <p>Whether to allow figure or human face generation. Valid values: <li>AllowAdult: Allow adult generation;</li> <li>Disallowed: Forbid including figure or human face in the image;</li></p>
     * @param string $InputComplianceCheck <p>Whether to enable compliance check for input content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param string $OutputComplianceCheck <p>Whether to enable compliance check for output content. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param string $EnhanceSwitch <p>Whether to enable video enhancement. Valid values: <li>Enabled: Turn on;</li> <li>Disabled: Turn off;</li><br>Description:</p><ol><li>For selected resolution exceeding the resolution the model can generate, enhancement is enabled by default.</li><li>For resolutions the model can directly output, you can also proactively select the model to directly output low-resolution and use enhancement to obtain the specified resolution.</li></ol>
     * @param string $OffPeak <p>Whether peak shaving is enabled. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param string $FrameInterpolate <p>Whether to enable vidu intelligent frame interpolation. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param string $LogoAdd <p>Indicates whether to enable the icon watermark. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li><br>Currently supported models include Vidu. Other models are not supported.</p>
     * @param string $EnableBGM <p>Whether to add background music to the generated video.</p><p>Enumeration value:</p><ul><li>Enabled: The system will automatically select suitable music from the preset BGM library and add it.</li><li>Disabled: Do not add BGM.</li></ul><p>Default value: Disabled</p>
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

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }

        if (array_key_exists("FrameInterpolate",$param) and $param["FrameInterpolate"] !== null) {
            $this->FrameInterpolate = $param["FrameInterpolate"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("EnableBGM",$param) and $param["EnableBGM"] !== null) {
            $this->EnableBGM = $param["EnableBGM"];
        }
    }
}
