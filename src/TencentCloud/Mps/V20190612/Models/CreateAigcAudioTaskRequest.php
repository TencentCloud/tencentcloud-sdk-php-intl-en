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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcAudioTask request structure.
 *
 * @method string getModelName() Obtain <p>Model name. Supported models for music generation: GL and MiniMaxMusic.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name. Supported models for music generation: GL and MiniMaxMusic.</p>
 * @method string getModelVersion() Obtain <p>Specifies the model version. By default, the system uses the supported stable version of the model.<br>Supported versions for GL: 3.0-clip and 3.0-pro.<br>Supported versions for MinimaxMusic: 2.0, 2.5, and 2.6.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Specifies the model version. By default, the system uses the supported stable version of the model.<br>Supported versions for GL: 3.0-clip and 3.0-pro.<br>Supported versions for MinimaxMusic: 2.0, 2.5, and 2.6.</p>
 * @method string getSceneType() Obtain <p>Specifies the scenario for audio generation. Music: music.</p>
 * @method void setSceneType(string $SceneType) Set <p>Specifies the scenario for audio generation. Music: music.</p>
 * @method string getPrompt() Obtain <p>Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.</p>
 * @method void setPrompt(string $Prompt) Set <p>Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.</p>
 * @method array getVideoInfos() Obtain <p>Reference video information, which is supported by some models.</p>
 * @method void setVideoInfos(array $VideoInfos) Set <p>Reference video information, which is supported by some models.</p>
 * @method array getAudioInfos() Obtain <p>Specify the reference audio information.</p><p>For example, this is required for music generation.</p>
 * @method void setAudioInfos(array $AudioInfos) Set <p>Specify the reference audio information.</p><p>For example, this is required for music generation.</p>
 * @method string getOutputAudioFormat() Obtain <p>Output audio format. By default, this is not specified. Valid values: mp3 and wav.</p>
 * @method void setOutputAudioFormat(string $OutputAudioFormat) Set <p>Output audio format. By default, this is not specified. Valid values: mp3 and wav.</p>
 * @method AigcStoreCosParam getStoreCosParam() Obtain <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
 * @method AigcAudioExtraParam getExtraParameters() Obtain <p>Additional parameters required.</p>
 * @method void setExtraParameters(AigcAudioExtraParam $ExtraParameters) Set <p>Additional parameters required.</p>
 * @method string getAdditionalParameters() Obtain <p>This is used to specify special scenario parameters required by the model, in the format of a serialized JSON string.<br>Example to specify lyrics for the MinimaxMusic model:<br>{"lyric":{"The pony is running with joy. The flowers are blooming."}}</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>This is used to specify special scenario parameters required by the model, in the format of a serialized JSON string.<br>Example to specify lyrics for the MinimaxMusic model:<br>{"lyric":{"The pony is running with joy. The flowers are blooming."}}</p>
 * @method string getOperator() Obtain <p>API operator name.</p>
 * @method void setOperator(string $Operator) Set <p>API operator name.</p>
 */
class CreateAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Model name. Supported models for music generation: GL and MiniMaxMusic.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Specifies the model version. By default, the system uses the supported stable version of the model.<br>Supported versions for GL: 3.0-clip and 3.0-pro.<br>Supported versions for MinimaxMusic: 2.0, 2.5, and 2.6.</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>Specifies the scenario for audio generation. Music: music.</p>
     */
    public $SceneType;

    /**
     * @var string <p>Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.</p>
     */
    public $Prompt;

    /**
     * @var array <p>Reference video information, which is supported by some models.</p>
     */
    public $VideoInfos;

    /**
     * @var array <p>Specify the reference audio information.</p><p>For example, this is required for music generation.</p>
     */
    public $AudioInfos;

    /**
     * @var string <p>Output audio format. By default, this is not specified. Valid values: mp3 and wav.</p>
     */
    public $OutputAudioFormat;

    /**
     * @var AigcStoreCosParam <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
     */
    public $StoreCosParam;

    /**
     * @var AigcAudioExtraParam <p>Additional parameters required.</p>
     */
    public $ExtraParameters;

    /**
     * @var string <p>This is used to specify special scenario parameters required by the model, in the format of a serialized JSON string.<br>Example to specify lyrics for the MinimaxMusic model:<br>{"lyric":{"The pony is running with joy. The flowers are blooming."}}</p>
     */
    public $AdditionalParameters;

    /**
     * @var string <p>API operator name.</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>Model name. Supported models for music generation: GL and MiniMaxMusic.</p>
     * @param string $ModelVersion <p>Specifies the model version. By default, the system uses the supported stable version of the model.<br>Supported versions for GL: 3.0-clip and 3.0-pro.<br>Supported versions for MinimaxMusic: 2.0, 2.5, and 2.6.</p>
     * @param string $SceneType <p>Specifies the scenario for audio generation. Music: music.</p>
     * @param string $Prompt <p>Description of the generated video. (Note: A maximum of 2000 characters is supported.) This parameter is required when no reference image is specified.</p>
     * @param array $VideoInfos <p>Reference video information, which is supported by some models.</p>
     * @param array $AudioInfos <p>Specify the reference audio information.</p><p>For example, this is required for music generation.</p>
     * @param string $OutputAudioFormat <p>Output audio format. By default, this is not specified. Valid values: mp3 and wav.</p>
     * @param AigcStoreCosParam $StoreCosParam <p>COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.</p>
     * @param AigcAudioExtraParam $ExtraParameters <p>Additional parameters required.</p>
     * @param string $AdditionalParameters <p>This is used to specify special scenario parameters required by the model, in the format of a serialized JSON string.<br>Example to specify lyrics for the MinimaxMusic model:<br>{"lyric":{"The pony is running with joy. The flowers are blooming."}}</p>
     * @param string $Operator <p>API operator name.</p>
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

        if (array_key_exists("OutputAudioFormat",$param) and $param["OutputAudioFormat"] !== null) {
            $this->OutputAudioFormat = $param["OutputAudioFormat"];
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AigcStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcAudioExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
