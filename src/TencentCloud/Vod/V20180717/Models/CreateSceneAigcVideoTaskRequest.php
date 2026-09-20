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
 * @method integer getSubAppId() Obtain **VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).**
 * @method void setSubAppId(integer $SubAppId) Set **VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).**
 * @method AigcVideoSceneInfo getSceneInfo() Obtain Scenario-based video generation parameter configuration.
 * @method void setSceneInfo(AigcVideoSceneInfo $SceneInfo) Set Scenario-based video generation parameter configuration.
 * @method SceneAigcVideoOutputConfig getOutputConfig() Obtain Output media file configuration for scenario-based video tasks.
 * @method void setOutputConfig(SceneAigcVideoOutputConfig $OutputConfig) Set Output media file configuration for scenario-based video tasks.
 * @method array getFileInfos() Obtain Input image list. Supported image formats: jpg, jpeg, png, webp.


 * @method void setFileInfos(array $FileInfos) Set Input image list. Supported image formats: jpg, jpeg, png, webp.


 * @method string getSessionId() Obtain An identifier for deduplication. If there has been a request with the same identifier within the past three days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method void setSessionId(string $SessionId) Set An identifier for deduplication. If there has been a request with the same identifier within the past three days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
 * @method string getSessionContext() Obtain Source context used to pass through user request information. The audio and video quality revival complete callback will return the value of this field. Maximum length: 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context used to pass through user request information. The audio and video quality revival complete callback will return the value of this field. Maximum length: 1000 characters.
 * @method integer getTasksPriority() Obtain Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method void setTasksPriority(integer $TasksPriority) Set Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
 * @method string getExtInfo() Obtain Reserved field, used for special purposes.
 * @method void setExtInfo(string $ExtInfo) Set Reserved field, used for special purposes.
 * @method string getPrompt() Obtain User-customized prompt
 * @method void setPrompt(string $Prompt) Set User-customized prompt
 */
class CreateSceneAigcVideoTaskRequest extends AbstractModel
{
    /**
     * @var integer **VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).**
     */
    public $SubAppId;

    /**
     * @var AigcVideoSceneInfo Scenario-based video generation parameter configuration.
     */
    public $SceneInfo;

    /**
     * @var SceneAigcVideoOutputConfig Output media file configuration for scenario-based video tasks.
     */
    public $OutputConfig;

    /**
     * @var array Input image list. Supported image formats: jpg, jpeg, png, webp.


     */
    public $FileInfos;

    /**
     * @var string An identifier for deduplication. If there has been a request with the same identifier within the past three days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     */
    public $SessionId;

    /**
     * @var string Source context used to pass through user request information. The audio and video quality revival complete callback will return the value of this field. Maximum length: 1000 characters.
     */
    public $SessionContext;

    /**
     * @var integer Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     */
    public $TasksPriority;

    /**
     * @var string Reserved field, used for special purposes.
     */
    public $ExtInfo;

    /**
     * @var string User-customized prompt
     */
    public $Prompt;

    /**
     * @param integer $SubAppId **VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).**
     * @param AigcVideoSceneInfo $SceneInfo Scenario-based video generation parameter configuration.
     * @param SceneAigcVideoOutputConfig $OutputConfig Output media file configuration for scenario-based video tasks.
     * @param array $FileInfos Input image list. Supported image formats: jpg, jpeg, png, webp.


     * @param string $SessionId An identifier for deduplication. If there has been a request with the same identifier within the past three days, an error will be returned for the current request. The maximum length is 50 characters. Leaving it blank or using a null string indicates no deduplication is required.
     * @param string $SessionContext Source context used to pass through user request information. The audio and video quality revival complete callback will return the value of this field. Maximum length: 1000 characters.
     * @param integer $TasksPriority Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.
     * @param string $ExtInfo Reserved field, used for special purposes.
     * @param string $Prompt User-customized prompt
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
