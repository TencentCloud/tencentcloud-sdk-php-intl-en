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
 * CreateAigcAudioTask request structure.
 *
 * @method integer getSubAppId() Obtain <p>VOD app ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</p>
 * @method void setSubAppId(integer $SubAppId) Set <p>VOD app ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</p>
 * @method string getModelName() Obtain <p>Model name.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name.</p>
 * @method string getModelVersion() Obtain <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p>
 * @method string getSceneType() Obtain <p>Designated scenarios currently support sfx (sound effects) and music.</p>
 * @method void setSceneType(string $SceneType) Set <p>Designated scenarios currently support sfx (sound effects) and music.</p>
 * @method string getPrompt() Obtain <p>Description of the generated audio</p>
 * @method void setPrompt(string $Prompt) Set <p>Description of the generated audio</p>
 * @method array getVideoInfos() Obtain <p>Reference video info</p>
 * @method void setVideoInfos(array $VideoInfos) Set <p>Reference video info</p>
 * @method array getAudioInfos() Obtain <p>Input the reference audio content.</p><p>For example, input is required for music generation.</p>
 * @method void setAudioInfos(array $AudioInfos) Set <p>Input the reference audio content.</p><p>For example, input is required for music generation.</p>
 * @method AigcAudioOutputConfig getOutputConfig() Obtain <p>Output parameter</p>
 * @method void setOutputConfig(AigcAudioOutputConfig $OutputConfig) Set <p>Output parameter</p>
 * @method string getAdditionalParameters() Obtain <p>Special scenario parameters required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>Special scenario parameters required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
 */
class CreateAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>VOD app ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Model name.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>Designated scenarios currently support sfx (sound effects) and music.</p>
     */
    public $SceneType;

    /**
     * @var string <p>Description of the generated audio</p>
     */
    public $Prompt;

    /**
     * @var array <p>Reference video info</p>
     */
    public $VideoInfos;

    /**
     * @var array <p>Input the reference audio content.</p><p>For example, input is required for music generation.</p>
     */
    public $AudioInfos;

    /**
     * @var AigcAudioOutputConfig <p>Output parameter</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Special scenario parameters required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
     */
    public $AdditionalParameters;

    /**
     * @param integer $SubAppId <p>VOD app ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created application).</p>
     * @param string $ModelName <p>Model name.</p>
     * @param string $ModelVersion <p>Specify the model version number. By default, the system uses the supported stable version of the model.</p>
     * @param string $SceneType <p>Designated scenarios currently support sfx (sound effects) and music.</p>
     * @param string $Prompt <p>Description of the generated audio</p>
     * @param array $VideoInfos <p>Reference video info</p>
     * @param array $AudioInfos <p>Input the reference audio content.</p><p>For example, input is required for music generation.</p>
     * @param AigcAudioOutputConfig $OutputConfig <p>Output parameter</p>
     * @param string $AdditionalParameters <p>Special scenario parameters required by the model, formatted as a JSON serialized string.<br>Example:<br>{"camera_control":{"type":"simple"}}.</p>
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

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcAudioReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcAudioReferenceAudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcAudioOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }
    }
}
