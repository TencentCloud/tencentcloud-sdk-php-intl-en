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
 * Output media file configuration for the AIGC image generation task.
 *
 * @method string getStorageMode() Obtain Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand), and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod, and the Temporary access URL can be obtained in the event notification.</li>.
Default value: Temporary.
 * @method void setStorageMode(string $StorageMode) Set Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand), and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod, and the Temporary access URL can be obtained in the event notification.</li>.
Default value: Temporary.
 * @method string getMediaName() Obtain Output filename, up to 64 characters. default filename is assigned by the system.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. default filename is assigned by the system.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
 * @method string getExpireTime() Obtain The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getResolution() Obtain Image generation resolution. available values are 720P, 1080P, 2K, 4K, 1024x1024, 2048x2048, 2304x1728, 2496x1664, 2560x1440, 3024x1296, 4096x4096, 4694x3520, 4992x3328, 5404x3040, 6198x2656.
 * @method void setResolution(string $Resolution) Set Image generation resolution. available values are 720P, 1080P, 2K, 4K, 1024x1024, 2048x2048, 2304x1728, 2496x1664, 2560x1440, 3024x1296, 4096x4096, 4694x3520, 4992x3328, 5404x3040, 6198x2656.
 * @method string getAspectRatio() Obtain Specify the aspect ratio of the generated image. <li>when ModelName is GEM, the available values are 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.</li> <li>when ModelName is Qwen, it is not currently supported.</li>.
 * @method void setAspectRatio(string $AspectRatio) Set Specify the aspect ratio of the generated image. <li>when ModelName is GEM, the available values are 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.</li> <li>when ModelName is Qwen, it is not currently supported.</li>.
 * @method string getPersonGeneration() Obtain Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>.
 * @method void setPersonGeneration(string $PersonGeneration) Set Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>.
 * @method string getInputComplianceCheck() Obtain Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
 * @method void setInputComplianceCheck(string $InputComplianceCheck) Set Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
 * @method string getOutputComplianceCheck() Obtain Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) Set Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
 */
class AigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand), and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod, and the Temporary access URL can be obtained in the event notification.</li>.
Default value: Temporary.
     */
    public $StorageMode;

    /**
     * @var string Output filename, up to 64 characters. default filename is assigned by the system.
     */
    public $MediaName;

    /**
     * @var integer Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
     */
    public $ClassId;

    /**
     * @var string The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string Image generation resolution. available values are 720P, 1080P, 2K, 4K, 1024x1024, 2048x2048, 2304x1728, 2496x1664, 2560x1440, 3024x1296, 4096x4096, 4694x3520, 4992x3328, 5404x3040, 6198x2656.
     */
    public $Resolution;

    /**
     * @var string Specify the aspect ratio of the generated image. <li>when ModelName is GEM, the available values are 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.</li> <li>when ModelName is Qwen, it is not currently supported.</li>.
     */
    public $AspectRatio;

    /**
     * @var string Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>.
     */
    public $PersonGeneration;

    /**
     * @var string Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
     */
    public $InputComplianceCheck;

    /**
     * @var string Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
     */
    public $OutputComplianceCheck;

    /**
     * @param string $StorageMode Storage mode. valid values: <li>Permanent: Permanent storage. the generated image file will be stored in VOD (video on demand), and the FileId can be obtained in the event notification.</li> <li>Temporary: Temporary storage. the generated image file will not be stored in vod, and the Temporary access URL can be obtained in the event notification.</li>.
Default value: Temporary.
     * @param string $MediaName Output filename, up to 64 characters. default filename is assigned by the system.
     * @param integer $ClassId Category ID, used to categorize and manage media. you can create a category and obtain the category ID via the [create classification](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) api.
<Li>Default value: 0, indicating other categories.</li>.
     * @param string $ExpireTime The expiry date of the output file. files will be deleted longer than this time. default is no expiration. format according to ISO 8601 standard. for details, see [ISO date format description](https://www.tencentcloud.comom/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $Resolution Image generation resolution. available values are 720P, 1080P, 2K, 4K, 1024x1024, 2048x2048, 2304x1728, 2496x1664, 2560x1440, 3024x1296, 4096x4096, 4694x3520, 4992x3328, 5404x3040, 6198x2656.
     * @param string $AspectRatio Specify the aspect ratio of the generated image. <li>when ModelName is GEM, the available values are 1:1, 3:2, 2:3, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, and 21:9.</li> <li>when ModelName is Qwen, it is not currently supported.</li>.
     * @param string $PersonGeneration Whether to allow figure or human face generation. valid values: <li>AllowAdult: allow adult generation.</li> <li>Disallowed: forbid including figures or human faces in images.</li>.
     * @param string $InputComplianceCheck Whether to enable compliance check for input content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
     * @param string $OutputComplianceCheck Whether to enable compliance check for output content. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
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

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
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
    }
}
