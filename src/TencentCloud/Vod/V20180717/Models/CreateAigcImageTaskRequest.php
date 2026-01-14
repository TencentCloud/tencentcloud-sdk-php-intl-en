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
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getModelName() Obtain Model name. valid values:.
<li>GEM:Gemini;</li>
<Li>Qwen: qianwen.</li>
<Li>Hunyuan: hunyuan.</li>
 * @method void setModelName(string $ModelName) Set Model name. valid values:.
<li>GEM:Gemini;</li>
<Li>Qwen: qianwen.</li>
<Li>Hunyuan: hunyuan.</li>
 * @method string getModelVersion() Obtain Model version. valid values:.
<li>When ModelName is GEM, optional values are 2.5, 3.0;</li>
<li>When ModelName is Qwen, optional values are 0925.</li>
<li>When ModelName is Hunyuan, the optional values are 3.0.</li>
 * @method void setModelVersion(string $ModelVersion) Set Model version. valid values:.
<li>When ModelName is GEM, optional values are 2.5, 3.0;</li>
<li>When ModelName is Qwen, optional values are 0925.</li>
<li>When ModelName is Hunyuan, the optional values are 3.0.</li>
 * @method array getFileInfos() Obtain File information of the input image for the AIGC image generation task. By default only one image can be specified; when using the GEM model, version 2.5 supports up to 3 images and version 3.0 supports up to 14 images.
 * @method void setFileInfos(array $FileInfos) Set File information of the input image for the AIGC image generation task. By default only one image can be specified; when using the GEM model, version 2.5 supports up to 3 images and version 3.0 supports up to 14 images.
 * @method string getPrompt() Obtain The prompt content for image generation. this parameter is required when FileInfos is empty.
 * @method void setPrompt(string $Prompt) Set The prompt content for image generation. this parameter is required when FileInfos is empty.
 * @method string getNegativePrompt() Obtain Prevent the model from generating image generation prompts.
 * @method void setNegativePrompt(string $NegativePrompt) Set Prevent the model from generating image generation prompts.
 * @method string getEnhancePrompt() Obtain Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
 * @method void setEnhancePrompt(string $EnhancePrompt) Set Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
 * @method AigcImageOutputConfig getOutputConfig() Obtain Output media file configuration for the task.
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) Set Output media file configuration for the task.
 * @method string getSessionId() Obtain An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
 * @method string getSessionContext() Obtain Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field. longest 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field. longest 1000 characters.
 * @method integer getTasksPriority() Obtain Task priority. the higher the value, the higher the priority. value range is from -10 to 10. if left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. the higher the value, the higher the priority. value range is from -10 to 10. if left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used when special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used when special purpose.
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Model name. valid values:.
<li>GEM:Gemini;</li>
<Li>Qwen: qianwen.</li>
<Li>Hunyuan: hunyuan.</li>
     */
    public $ModelName;

    /**
     * @var string Model version. valid values:.
<li>When ModelName is GEM, optional values are 2.5, 3.0;</li>
<li>When ModelName is Qwen, optional values are 0925.</li>
<li>When ModelName is Hunyuan, the optional values are 3.0.</li>
     */
    public $ModelVersion;

    /**
     * @var array File information of the input image for the AIGC image generation task. By default only one image can be specified; when using the GEM model, version 2.5 supports up to 3 images and version 3.0 supports up to 14 images.
     */
    public $FileInfos;

    /**
     * @var string The prompt content for image generation. this parameter is required when FileInfos is empty.
     */
    public $Prompt;

    /**
     * @var string Prevent the model from generating image generation prompts.
     */
    public $NegativePrompt;

    /**
     * @var string Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
     */
    public $EnhancePrompt;

    /**
     * @var AigcImageOutputConfig Output media file configuration for the task.
     */
    public $OutputConfig;

    /**
     * @var string An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field. longest 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task priority. the higher the value, the higher the priority. value range is from -10 to 10. if left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used when special purpose.
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $ModelName Model name. valid values:.
<li>GEM:Gemini;</li>
<Li>Qwen: qianwen.</li>
<Li>Hunyuan: hunyuan.</li>
     * @param string $ModelVersion Model version. valid values:.
<li>When ModelName is GEM, optional values are 2.5, 3.0;</li>
<li>When ModelName is Qwen, optional values are 0925.</li>
<li>When ModelName is Hunyuan, the optional values are 3.0.</li>
     * @param array $FileInfos File information of the input image for the AIGC image generation task. By default only one image can be specified; when using the GEM model, version 2.5 supports up to 3 images and version 3.0 supports up to 14 images.
     * @param string $Prompt The prompt content for image generation. this parameter is required when FileInfos is empty.
     * @param string $NegativePrompt Prevent the model from generating image generation prompts.
     * @param string $EnhancePrompt Whether to optimize Prompt content automatically. when Enabled, it will optimize the passed in Prompt automatically to enhance generation quality. valid values: <li>Enabled: turn on;</li> <li>Disabled: turn off;</li>
     * @param AigcImageOutputConfig $OutputConfig Output media file configuration for the task.
     * @param string $SessionId An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
     * @param string $SessionContext Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field. longest 1000 characters.
     * @param integer $TasksPriority Task priority. the higher the value, the higher the priority. value range is from -10 to 10. if left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used when special purpose.
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
