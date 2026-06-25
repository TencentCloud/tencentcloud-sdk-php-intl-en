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
 * @method string getModelName() Obtain Model name. Currently supported models for music generation: GL, MinimaxMusic.Example value: MiniMaxMusic
 * @method void setModelName(string $ModelName) Set Model name. Currently supported models for music generation: GL, MinimaxMusic.Example value: MiniMaxMusic
 * @method string getModelVersion() Obtain Specifies the model version. By default, the system uses the supported stable version of the model.Supported versions for GL: 2.0, 3.0-clip, 3.0-pro.Supported versions for MinimaxMusic: 2.0, 2.5, 2.6.Example value: 2.0
 * @method void setModelVersion(string $ModelVersion) Set Specifies the model version. By default, the system uses the supported stable version of the model.Supported versions for GL: 2.0, 3.0-clip, 3.0-pro.Supported versions for MinimaxMusic: 2.0, 2.5, 2.6.Example value: 2.0
 * @method string getSceneType() Obtain Specifies the audio generation scene. Music: music.Example value: music
 * @method void setSceneType(string $SceneType) Set Specifies the audio generation scene. Music: music.Example value: music
 * @method string getPrompt() Obtain Description of the generated audio. (Note: Supports up to 2000 characters.) This parameter is required when no reference image is passed in.Example value: generate a piece of music
 * @method void setPrompt(string $Prompt) Set Description of the generated audio. (Note: Supports up to 2000 characters.) This parameter is required when no reference image is passed in.Example value: generate a piece of music
 * @method array getVideoInfos() Obtain Reference video information. Only supported by certain models.
 * @method void setVideoInfos(array $VideoInfos) Set Reference video information. Only supported by certain models.
 * @method array getAudioInfos() Obtain Reference audio information.For example, this parameter is required when generating music from a reference audio.
 * @method void setAudioInfos(array $AudioInfos) Set Reference audio information.For example, this parameter is required when generating music from a reference audio.
 * @method string getOutputAudioFormat() Obtain Output audio format. Empty by default. Supported values: mp3, wav.Example value: wav
 * @method void setOutputAudioFormat(string $OutputAudioFormat) Set Output audio format. Empty by default. Supported values: mp3, wav.Example value: wav
 * @method AigcStoreCosParam getStoreCosParam() Obtain COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
 * @method AigcAudioExtraParam getExtraParameters() Obtain Additional parameters required for the model.
 * @method void setExtraParameters(AigcAudioExtraParam $ExtraParameters) Set Additional parameters required for the model.
 * @method string getAdditionalParameters() Obtain Used to input some special scene parameters required by the model, serialized into a string in JSON format.Example: when passing lyrics to the MinimaxMusic model:{"lyric":{"The pony runs happily, flowers are blooming"}}Example value: {"sequential_image_generation":"auto"}
 * @method void setAdditionalParameters(string $AdditionalParameters) Set Used to input some special scene parameters required by the model, serialized into a string in JSON format.Example: when passing lyrics to the MinimaxMusic model:{"lyric":{"The pony runs happily, flowers are blooming"}}Example value: {"sequential_image_generation":"auto"}
 * @method string getOperator() Obtain API operator name.Example value: admin
 * @method void setOperator(string $Operator) Set API operator name.Example value: admin
 */
class CreateAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var string Model name. Currently supported models for music generation: GL, MinimaxMusic.Example value: MiniMaxMusic
     */
    public $ModelName;

    /**
     * @var string Specifies the model version. By default, the system uses the supported stable version of the model.Supported versions for GL: 2.0, 3.0-clip, 3.0-pro.Supported versions for MinimaxMusic: 2.0, 2.5, 2.6.Example value: 2.0
     */
    public $ModelVersion;

    /**
     * @var string Specifies the audio generation scene. Music: music.Example value: music
     */
    public $SceneType;

    /**
     * @var string Description of the generated audio. (Note: Supports up to 2000 characters.) This parameter is required when no reference image is passed in.Example value: generate a piece of music
     */
    public $Prompt;

    /**
     * @var array Reference video information. Only supported by certain models.
     */
    public $VideoInfos;

    /**
     * @var array Reference audio information.For example, this parameter is required when generating music from a reference audio.
     */
    public $AudioInfos;

    /**
     * @var string Output audio format. Empty by default. Supported values: mp3, wav.Example value: wav
     */
    public $OutputAudioFormat;

    /**
     * @var AigcStoreCosParam COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
     */
    public $StoreCosParam;

    /**
     * @var AigcAudioExtraParam Additional parameters required for the model.
     */
    public $ExtraParameters;

    /**
     * @var string Used to input some special scene parameters required by the model, serialized into a string in JSON format.Example: when passing lyrics to the MinimaxMusic model:{"lyric":{"The pony runs happily, flowers are blooming"}}Example value: {"sequential_image_generation":"auto"}
     */
    public $AdditionalParameters;

    /**
     * @var string API operator name.Example value: admin
     */
    public $Operator;

    /**
     * @param string $ModelName Model name. Currently supported models for music generation: GL, MinimaxMusic.Example value: MiniMaxMusic
     * @param string $ModelVersion Specifies the model version. By default, the system uses the supported stable version of the model.Supported versions for GL: 2.0, 3.0-clip, 3.0-pro.Supported versions for MinimaxMusic: 2.0, 2.5, 2.6.Example value: 2.0
     * @param string $SceneType Specifies the audio generation scene. Music: music.Example value: music
     * @param string $Prompt Description of the generated audio. (Note: Supports up to 2000 characters.) This parameter is required when no reference image is passed in.Example value: generate a piece of music
     * @param array $VideoInfos Reference video information. Only supported by certain models.
     * @param array $AudioInfos Reference audio information.For example, this parameter is required when generating music from a reference audio.
     * @param string $OutputAudioFormat Output audio format. Empty by default. Supported values: mp3, wav.Example value: wav
     * @param AigcStoreCosParam $StoreCosParam COS bucket information for the file result. Note: COS is required and the MPS_QcsRole role needs to be created and authorized.
     * @param AigcAudioExtraParam $ExtraParameters Additional parameters required for the model.
     * @param string $AdditionalParameters Used to input some special scene parameters required by the model, serialized into a string in JSON format.Example: when passing lyrics to the MinimaxMusic model:{"lyric":{"The pony runs happily, flowers are blooming"}}Example value: {"sequential_image_generation":"auto"}
     * @param string $Operator API operator name.Example value: admin
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
