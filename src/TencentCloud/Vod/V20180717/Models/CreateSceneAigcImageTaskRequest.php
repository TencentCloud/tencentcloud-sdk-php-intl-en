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
 * @method integer getSubAppId() Obtain **VOD application ID. For customers who activate on-demand services after December 25, 2023, when accessing resources in on-demand applications (whether the default application or a newly created application), this field must be filled in with the app ID.**
 * @method void setSubAppId(integer $SubAppId) Set **VOD application ID. For customers who activate on-demand services after December 25, 2023, when accessing resources in on-demand applications (whether the default application or a newly created application), this field must be filled in with the app ID.**
 * @method AigcImageSceneInfo getSceneInfo() Obtain Scenario-based image generation parameter configuration.
 * @method void setSceneInfo(AigcImageSceneInfo $SceneInfo) Set Scenario-based image generation parameter configuration.
 * @method array getFileInfos() Obtain Input image list. Supported image formats: jpg, jpeg, png, webp. Different scenarios require different input data:

- AI outfit changing scenario: Input Only 1 **model** image.
- AI product image generation scenario: manually input 1–10 images of the same product from different angles.
 * @method void setFileInfos(array $FileInfos) Set Input image list. Supported image formats: jpg, jpeg, png, webp. Different scenarios require different input data:

- AI outfit changing scenario: Input Only 1 **model** image.
- AI product image generation scenario: manually input 1–10 images of the same product from different angles.
 * @method SceneAigcImageOutputConfig getOutputConfig() Obtain Configuration of the output media file for a scenario-based image generation task.
 * @method void setOutputConfig(SceneAigcImageOutputConfig $OutputConfig) Set Configuration of the output media file for a scenario-based image generation task.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method string getSessionContext() Obtain Source context. This is used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. The maximum length is 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context. This is used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. The maximum length is 1000 characters.
 * @method integer getTasksPriority() Obtain Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purposes.
 */
class CreateSceneAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer **VOD application ID. For customers who activate on-demand services after December 25, 2023, when accessing resources in on-demand applications (whether the default application or a newly created application), this field must be filled in with the app ID.**
     */
    public $SubAppId;

    /**
     * @var AigcImageSceneInfo Scenario-based image generation parameter configuration.
     */
    public $SceneInfo;

    /**
     * @var array Input image list. Supported image formats: jpg, jpeg, png, webp. Different scenarios require different input data:

- AI outfit changing scenario: Input Only 1 **model** image.
- AI product image generation scenario: manually input 1–10 images of the same product from different angles.
     */
    public $FileInfos;

    /**
     * @var SceneAigcImageOutputConfig Configuration of the output media file for a scenario-based image generation task.
     */
    public $OutputConfig;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @var string Source context. This is used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. The maximum length is 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purposes.
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId **VOD application ID. For customers who activate on-demand services after December 25, 2023, when accessing resources in on-demand applications (whether the default application or a newly created application), this field must be filled in with the app ID.**
     * @param AigcImageSceneInfo $SceneInfo Scenario-based image generation parameter configuration.
     * @param array $FileInfos Input image list. Supported image formats: jpg, jpeg, png, webp. Different scenarios require different input data:

- AI outfit changing scenario: Input Only 1 **model** image.
- AI product image generation scenario: manually input 1–10 images of the same product from different angles.
     * @param SceneAigcImageOutputConfig $OutputConfig Configuration of the output media file for a scenario-based image generation task.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     * @param string $SessionContext Source context. This is used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. The maximum length is 1000 characters.
     * @param integer $TasksPriority Task Priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purposes.
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
