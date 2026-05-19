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
 * CreateSceneAigcVideoTask request structure.
 *
 * @method integer getSubAppId() Obtain **VOD application ID.** Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).
 * @method void setSubAppId(integer $SubAppId) Set **VOD application ID.** Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).
 * @method AigcVideoSceneInfo getSceneInfo() Obtain Scenario-based video parameter configuration.
 * @method void setSceneInfo(AigcVideoSceneInfo $SceneInfo) Set Scenario-based video parameter configuration.
 * @method SceneAigcVideoOutputConfig getOutputConfig() Obtain Scenario-based output media file configuration for video tasks.
 * @method void setOutputConfig(SceneAigcVideoOutputConfig $OutputConfig) Set Scenario-based output media file configuration for video tasks.
 * @method array getFileInfos() Obtain Input image list. Supported image formats: jpg, jpeg, png, webp.


 * @method void setFileInfos(array $FileInfos) Set Input image list. Supported image formats: jpg, jpeg, png, webp.


 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
 * @method string getSessionContext() Obtain Source context, used for passing through user request information. The audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used for passing through user request information. The audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purpose.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purpose.
 * @method string getPrompt() Obtain Customize prompt
 * @method void setPrompt(string $Prompt) Set Customize prompt
 */
class CreateSceneAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer **VOD application ID.** Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).
     */
    public $SubAppId;

    /**
     * @var AigcVideoSceneInfo Scenario-based video parameter configuration.
     */
    public $SceneInfo;

    /**
     * @var SceneAigcVideoOutputConfig Scenario-based output media file configuration for video tasks.
     */
    public $OutputConfig;

    /**
     * @var array Input image list. Supported image formats: jpg, jpeg, png, webp.


     */
    public $FileInfos;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, used for passing through user request information. The audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purpose.
     */
    public $ExtInfo;

    /**
     * @var string Customize prompt
     */
    public $Prompt;

    /**
     * @param integer $SubAppId **VOD application ID.** Customers who activate on-demand services from December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).
     * @param AigcVideoSceneInfo $SceneInfo Scenario-based video parameter configuration.
     * @param SceneAigcVideoOutputConfig $OutputConfig Scenario-based output media file configuration for video tasks.
     * @param array $FileInfos Input image list. Supported image formats: jpg, jpeg, png, webp.


     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using an empty string indicates no deduplication.
     * @param string $SessionContext Source context, used for passing through user request information. The audio and video quality revival complete callback will return the value of this field, up to 1000 characters.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value ranges from -10 to 10. If left blank, it represents 0.
     * @param string $ExtInfo Reserved field, used for special purpose.
     * @param string $Prompt Customize prompt
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
            $this->SceneInfo = new AigcVideoSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SceneAigcVideoOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new SceneAigcVideoTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
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

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
