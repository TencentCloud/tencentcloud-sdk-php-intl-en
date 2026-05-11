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
 * CreateAigcImageTask request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
 * @method string getModelName() Obtain <p>Model name. Value:</p><li>Qwen: Qianwen.</li><li>Hunyuan: Hunyuan.</li><li>Vidu: Shengshu.</li><li>Kling: Keling.</li>
 * @method void setModelName(string $ModelName) Set <p>Model name. Value:</p><li>Qwen: Qianwen.</li><li>Hunyuan: Hunyuan.</li><li>Vidu: Shengshu.</li><li>Kling: Keling.</li>
 * @method string getModelVersion() Obtain <p>Model version. Parameter Value: <li>When ModelName is Qwen, optional values: 0925;</li><li>When ModelName is Hunyuan, optional values: 3.0;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1;</li></p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Model version. Parameter Value: <li>When ModelName is Qwen, optional values: 0925;</li><li>When ModelName is Hunyuan, optional values: 3.0;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1;</li></p>
 * @method array getFileInfos() Obtain <p>File information of the input image for the AIGC image generation task. Only one is supported by default. The following models can accept multiple reference images: <li>GEM 2.5: 0 to 3 images;</li><li>Vidu q2: 0 to 7 images. Supported formats include png, jpeg, jpg, and webp. The image pixel size cannot be less than 128x128, and the ratio must be less than 1:4 or 4:1.</li></p>
 * @method void setFileInfos(array $FileInfos) Set <p>File information of the input image for the AIGC image generation task. Only one is supported by default. The following models can accept multiple reference images: <li>GEM 2.5: 0 to 3 images;</li><li>Vidu q2: 0 to 7 images. Supported formats include png, jpeg, jpg, and webp. The image pixel size cannot be less than 128x128, and the ratio must be less than 1:4 or 4:1.</li></p>
 * @method string getPrompt() Obtain <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
 * @method string getNegativePrompt() Obtain <p>To prevent the model from generating image prompts.</p>
 * @method void setNegativePrompt(string $NegativePrompt) Set <p>To prevent the model from generating image prompts.</p>
 * @method string getEnhancePrompt() Obtain <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
 * @method AigcImageOutputConfig getOutputConfig() Obtain <p>Output media file configuration for the image generation task.</p>
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set <p>Output media file configuration for the image generation task.</p>
 * @method string getInputRegion() Obtain <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
 * @method void setInputRegion(string $InputRegion) Set <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
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
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether it is the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name. Value:</p><li>Qwen: Qianwen.</li><li>Hunyuan: Hunyuan.</li><li>Vidu: Shengshu.</li><li>Kling: Keling.</li>
     */
    public $ModelName;

    /**
     * @var string <p>Model version. Parameter Value: <li>When ModelName is Qwen, optional values: 0925;</li><li>When ModelName is Hunyuan, optional values: 3.0;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1;</li></p>
     */
    public $ModelVersion;

    /**
     * @var array <p>File information of the input image for the AIGC image generation task. Only one is supported by default. The following models can accept multiple reference images: <li>GEM 2.5: 0 to 3 images;</li><li>Vidu q2: 0 to 7 images. Supported formats include png, jpeg, jpg, and webp. The image pixel size cannot be less than 128x128, and the ratio must be less than 1:4 or 4:1.</li></p>
     */
    public $FileInfos;

    /**
     * @var string <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
     */
    public $Prompt;

    /**
     * @var string <p>To prevent the model from generating image prompts.</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcImageOutputConfig <p>Output media file configuration for the image generation task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     */
    public $InputRegion;

    /**
     * @var string 
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
     * @param string $ModelName <p>Model name. Value:</p><li>Qwen: Qianwen.</li><li>Hunyuan: Hunyuan.</li><li>Vidu: Shengshu.</li><li>Kling: Keling.</li>
     * @param string $ModelVersion <p>Model version. Parameter Value: <li>When ModelName is Qwen, optional values: 0925;</li><li>When ModelName is Hunyuan, optional values: 3.0;</li><li>When ModelName is Vidu, optional values: q2;</li><li>When ModelName is Kling, optional values: 2.1;</li></p>
     * @param array $FileInfos <p>File information of the input image for the AIGC image generation task. Only one is supported by default. The following models can accept multiple reference images: <li>GEM 2.5: 0 to 3 images;</li><li>Vidu q2: 0 to 7 images. Supported formats include png, jpeg, jpg, and webp. The image pixel size cannot be less than 128x128, and the ratio must be less than 1:4 or 4:1.</li></p>
     * @param string $Prompt <p>Prompt for image generation. This parameter is required when FileInfos is empty.</p>
     * @param string $NegativePrompt <p>To prevent the model from generating image prompts.</p>
     * @param string $EnhancePrompt <p>Whether to optimize Prompt content automatically. When Enabled, the passed in Prompt will be optimized automatically to enhance generation quality. Valid values: <li>Enabled: Enable;</li> <li>Disabled: Disable;</li></p>
     * @param AigcImageOutputConfig $OutputConfig <p>Output media file configuration for the image generation task.</p>
     * @param string $InputRegion <p>Region information of the input file. When the file url is an overseas address, selectable Oversea. Default Mainland.</p>
     * @param string $SceneType 
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
                $obj = new AigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
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
            $this->OutputConfig = new AigcImageOutputConfig();
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
