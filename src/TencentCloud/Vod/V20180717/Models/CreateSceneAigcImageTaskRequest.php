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
 * CreateSceneAigcImageTask request structure.
 *
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method AigcImageSceneInfo getSceneInfo() Obtain Scenario-Based image generation parameter configuration.
 * @method void setSceneInfo(AigcImageSceneInfo $SceneInfo) Set Scenario-Based image generation parameter configuration.
 * @method array getFileInfos() Obtain Input image list. supported image formats: jpg, jpeg, png, webp. different scenarios require different input data.

- AI clothing change scenario: input only 1 model image.
- AI product image scenario: manually input 1-10 images of different angles per product.
 * @method void setFileInfos(array $FileInfos) Set Input image list. supported image formats: jpg, jpeg, png, webp. different scenarios require different input data.

- AI clothing change scenario: input only 1 model image.
- AI product image scenario: manually input 1-10 images of different angles per product.
 * @method SceneAigcImageOutputConfig getOutputConfig() Obtain Specifies the output media file configuration for the scenario-based image task.
 * @method void setOutputConfig(SceneAigcImageOutputConfig $OutputConfig) Set Specifies the output media file configuration for the scenario-based image task.
 * @method string getSessionId() Obtain An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
 * @method string getSessionContext() Obtain Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
 * @method integer getTasksPriority() Obtain Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purpose.
 */
class CreateSceneAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @var AigcImageSceneInfo Scenario-Based image generation parameter configuration.
     */
    public $SceneInfo;

    /**
     * @var array Input image list. supported image formats: jpg, jpeg, png, webp. different scenarios require different input data.

- AI clothing change scenario: input only 1 model image.
- AI product image scenario: manually input 1-10 images of different angles per product.
     */
    public $FileInfos;

    /**
     * @var SceneAigcImageOutputConfig Specifies the output media file configuration for the scenario-based image task.
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
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     * @param AigcImageSceneInfo $SceneInfo Scenario-Based image generation parameter configuration.
     * @param array $FileInfos Input image list. supported image formats: jpg, jpeg, png, webp. different scenarios require different input data.

- AI clothing change scenario: input only 1 model image.
- AI product image scenario: manually input 1-10 images of different angles per product.
     * @param SceneAigcImageOutputConfig $OutputConfig Specifies the output media file configuration for the scenario-based image task.
     * @param string $SessionId An identifier for deduplication. if there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. the maximum length is 50 characters. leaving it blank or using an empty string indicates no deduplication.
     * @param string $SessionContext Source context, used to pass through user request information. the audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
     * @param integer $TasksPriority Task priority. the higher the value, the higher the priority. the value range is from -10 to 10. if left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purpose.
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

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new AigcImageSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new SceneAigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SceneAigcImageOutputConfig();
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
