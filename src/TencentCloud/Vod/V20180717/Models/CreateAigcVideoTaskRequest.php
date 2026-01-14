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
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method string getModelName() Obtain Model name. valid values: <li>Hailuo: conch;</li><li>Kling: Kling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: bright eyes;</li>
 * @method void setModelName(string $ModelName) Set Model name. valid values: <li>Hailuo: conch;</li><li>Kling: Kling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: bright eyes;</li>
 * @method string getModelVersion() Obtain Model version. parameter value: <li>when ModelName is Hailuo, optional values are 02, 2.3, 2.3-fast;</li><li>when ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, O1;</li><li>when ModelName is Jimeng, optional values are 3.0pro;</li><li>when ModelName is Vidu, optional values are q2, q2-pro, q2-turbo;</li><li>when ModelName is GV, optional values are 3.1, 3.1-fast;</li><li>when ModelName is OS, optional values are 2.0;</li><li>when ModelName is Hunyuan, optional values are 1.5;</li><li>when ModelName is Mingmou, optional values are 1.0;</li>
 * @method void setModelVersion(string $ModelVersion) Set Model version. parameter value: <li>when ModelName is Hailuo, optional values are 02, 2.3, 2.3-fast;</li><li>when ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, O1;</li><li>when ModelName is Jimeng, optional values are 3.0pro;</li><li>when ModelName is Vidu, optional values are q2, q2-pro, q2-turbo;</li><li>when ModelName is GV, optional values are 3.1, 3.1-fast;</li><li>when ModelName is OS, optional values are 2.0;</li><li>when ModelName is Hunyuan, optional values are 1.5;</li><li>when ModelName is Mingmou, optional values are 1.0;</li>
 * @method array getFileInfos() Obtain List of up to three material resources for description of resource images to be used by the model in video generation.

Video generation with first and last frame: use the first table in FileInfos to represent the first frame (FileInfos contains at most one image at this point). LastFrameFileId or LastFrameUrl represents the last frame.

Model supporting multi-image input.
1. GV, when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.
2. Vidu supports multi-image reference for video generation. the q2 model accepts 1-7 images. use the ObjectId in FileInfos as the subject id for input.

Note:.
1. Image size: the size should not exceed 10 mb.
2. supported image formats: jpeg, png.
 * @method void setFileInfos(array $FileInfos) Set List of up to three material resources for description of resource images to be used by the model in video generation.

Video generation with first and last frame: use the first table in FileInfos to represent the first frame (FileInfos contains at most one image at this point). LastFrameFileId or LastFrameUrl represents the last frame.

Model supporting multi-image input.
1. GV, when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.
2. Vidu supports multi-image reference for video generation. the q2 model accepts 1-7 images. use the ObjectId in FileInfos as the subject id for input.

Note:.
1. Image size: the size should not exceed 10 mb.
2. supported image formats: jpeg, png.
 * @method string getLastFrameFileId() Obtain The media file ID used as the end frame to generate video. this file has a globally unique ID on vod, assigned by the vod backend after successful upload. you can get this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
 * @method void setLastFrameFileId(string $LastFrameFileId) Set The media file ID used as the end frame to generate video. this file has a globally unique ID on vod, assigned by the vod backend after successful upload. you can get this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
 * @method string getLastFrameUrl() Obtain Media file URL used as frames to generate video. description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
 * @method void setLastFrameUrl(string $LastFrameUrl) Set Media file URL used as frames to generate video. description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
 * @method string getPrompt() Obtain Prompt content for video generation. this parameter is required when FileInfos is empty.
Example value: move the picture.
 * @method void setPrompt(string $Prompt) Set Prompt content for video generation. this parameter is required when FileInfos is empty.
Example value: move the picture.
 * @method string getNegativePrompt() Obtain Prevent the model from generating video prompts.
 * @method void setNegativePrompt(string $NegativePrompt) Set Prevent the model from generating video prompts.
 * @method string getEnhancePrompt() Obtain Whether to optimize Prompt content automatically. when Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
 * @method void setEnhancePrompt(string $EnhancePrompt) Set Whether to optimize Prompt content automatically. when Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
 * @method AigcVideoOutputConfig getOutputConfig() Obtain Specifies the output media file configuration for the video task.
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) Set Specifies the output media file configuration for the video task.
 * @method string getSessionId() Obtain An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
 * @method string getSessionContext() Obtain Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
 * @method integer getTasksPriority() Obtain Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purpose.
 * @method string getInputRegion() Obtain Specifies the region information of the input image. when the image url is a foreign address, selectable Oversea. default Mainland.
 * @method void setInputRegion(string $InputRegion) Set Specifies the region information of the input image. when the image url is a foreign address, selectable Oversea. default Mainland.
 */
class CreateAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var string Model name. valid values: <li>Hailuo: conch;</li><li>Kling: Kling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: bright eyes;</li>
     */
    public $ModelName;

    /**
     * @var string Model version. parameter value: <li>when ModelName is Hailuo, optional values are 02, 2.3, 2.3-fast;</li><li>when ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, O1;</li><li>when ModelName is Jimeng, optional values are 3.0pro;</li><li>when ModelName is Vidu, optional values are q2, q2-pro, q2-turbo;</li><li>when ModelName is GV, optional values are 3.1, 3.1-fast;</li><li>when ModelName is OS, optional values are 2.0;</li><li>when ModelName is Hunyuan, optional values are 1.5;</li><li>when ModelName is Mingmou, optional values are 1.0;</li>
     */
    public $ModelVersion;

    /**
     * @var array List of up to three material resources for description of resource images to be used by the model in video generation.

Video generation with first and last frame: use the first table in FileInfos to represent the first frame (FileInfos contains at most one image at this point). LastFrameFileId or LastFrameUrl represents the last frame.

Model supporting multi-image input.
1. GV, when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.
2. Vidu supports multi-image reference for video generation. the q2 model accepts 1-7 images. use the ObjectId in FileInfos as the subject id for input.

Note:.
1. Image size: the size should not exceed 10 mb.
2. supported image formats: jpeg, png.
     */
    public $FileInfos;

    /**
     * @var string The media file ID used as the end frame to generate video. this file has a globally unique ID on vod, assigned by the vod backend after successful upload. you can get this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
     */
    public $LastFrameFileId;

    /**
     * @var string Media file URL used as frames to generate video. description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
     */
    public $LastFrameUrl;

    /**
     * @var string Prompt content for video generation. this parameter is required when FileInfos is empty.
Example value: move the picture.
     */
    public $Prompt;

    /**
     * @var string Prevent the model from generating video prompts.
     */
    public $NegativePrompt;

    /**
     * @var string Whether to optimize Prompt content automatically. when Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
     */
    public $EnhancePrompt;

    /**
     * @var AigcVideoOutputConfig Specifies the output media file configuration for the video task.
     */
    public $OutputConfig;

    /**
     * @var string An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purpose.
     */
    public $ExtInfo;

    /**
     * @var string Specifies the region information of the input image. when the image url is a foreign address, selectable Oversea. default Mainland.
     */
    public $InputRegion;

    /**
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param string $ModelName Model name. valid values: <li>Hailuo: conch;</li><li>Kling: Kling;</li><li>Jimeng: Jimeng;</li><li>Vidu;</li><li>Hunyuan: Hunyuan;</li><li>Mingmou: bright eyes;</li>
     * @param string $ModelVersion Model version. parameter value: <li>when ModelName is Hailuo, optional values are 02, 2.3, 2.3-fast;</li><li>when ModelName is Kling, optional values are 1.6, 2.0, 2.1, 2.5, O1;</li><li>when ModelName is Jimeng, optional values are 3.0pro;</li><li>when ModelName is Vidu, optional values are q2, q2-pro, q2-turbo;</li><li>when ModelName is GV, optional values are 3.1, 3.1-fast;</li><li>when ModelName is OS, optional values are 2.0;</li><li>when ModelName is Hunyuan, optional values are 1.5;</li><li>when ModelName is Mingmou, optional values are 1.0;</li>
     * @param array $FileInfos List of up to three material resources for description of resource images to be used by the model in video generation.

Video generation with first and last frame: use the first table in FileInfos to represent the first frame (FileInfos contains at most one image at this point). LastFrameFileId or LastFrameUrl represents the last frame.

Model supporting multi-image input.
1. GV, when entering multiple images, LastFrameFileId and LastFrameUrl are unavailable.
2. Vidu supports multi-image reference for video generation. the q2 model accepts 1-7 images. use the ObjectId in FileInfos as the subject id for input.

Note:.
1. Image size: the size should not exceed 10 mb.
2. supported image formats: jpeg, png.
     * @param string $LastFrameFileId The media file ID used as the end frame to generate video. this file has a globally unique ID on vod, assigned by the vod backend after successful upload. you can get this field in the [video upload completion event notification](https://www.tencentcloud.com/document/product/266/7830?from_cn_redirect=1) or [vod console](https://console.cloud.tencent.com/vod/media). description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
     * @param string $LastFrameUrl Media file URL used as frames to generate video. description:.
1. only models GV, Kling, and Vidu are supported. other models are not currently supported. when ModelName is GV, if you specify this parameter, you must simultaneously specify FileInfos as the first frame of the video to be generated. when ModelName is Kling and ModelVersion is 2.1 and specify output Resolution Resolution as 1080P, you can specify this parameter. when ModelName is Vidu and ModelVersion is q2-pro or q2-turbo, you can specify this parameter.
2. Image size: the size should be less than 5 mb.
3. image format value is jpeg, jpg, png, webp.
     * @param string $Prompt Prompt content for video generation. this parameter is required when FileInfos is empty.
Example value: move the picture.
     * @param string $NegativePrompt Prevent the model from generating video prompts.
     * @param string $EnhancePrompt Whether to optimize Prompt content automatically. when Enabled, the passed-in Prompt will be optimized automatically to enhance generation quality. valid values: <li>Enabled: enable;</li> <li>Disabled: disable;</li>.
     * @param AigcVideoOutputConfig $OutputConfig Specifies the output media file configuration for the video task.
     * @param string $SessionId An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
     * @param string $SessionContext Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
     * @param integer $TasksPriority Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purpose.
     * @param string $InputRegion Specifies the region information of the input image. when the image url is a foreign address, selectable Oversea. default Mainland.
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

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }
    }
}
