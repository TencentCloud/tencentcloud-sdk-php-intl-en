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
 * @method string getModelName() Obtain <p>Model name. Supported models for music generation: GL, MiniMaxMusic, EL, and Mureka.</p>
 * @method void setModelName(string $ModelName) Set <p>Model name. Supported models for music generation: GL, MiniMaxMusic, EL, and Mureka.</p>
 * @method string getModelVersion() Obtain <p>Specifies the model version. By default, the system uses the supported stable version of the model. Supported versions for GL: 3.0-clip and 3.0-pro. Supported versions for MiniMaxMusic: 2.0, 2.5, 2.6, and 3.0. Supported versions for EL: compose_v2 and sound_t2s_v2. Supported versions for Mureka: song_8, song_9, song_9.5, instrumental_8, instrumental_9, and instrumental_9.5.</p>
 * @method void setModelVersion(string $ModelVersion) Set <p>Specifies the model version. By default, the system uses the supported stable version of the model. Supported versions for GL: 3.0-clip and 3.0-pro. Supported versions for MiniMaxMusic: 2.0, 2.5, 2.6, and 3.0. Supported versions for EL: compose_v2 and sound_t2s_v2. Supported versions for Mureka: song_8, song_9, song_9.5, instrumental_8, instrumental_9, and instrumental_9.5.</p>
 * @method string getSceneType() Obtain 
 * @method void setSceneType(string $SceneType) Set 
 * @method string getPrompt() Obtain <p>Description of the generated music. (Note: supports up to 2,000 characters).</p>
 * @method void setPrompt(string $Prompt) Set <p>Description of the generated music. (Note: supports up to 2,000 characters).</p>
 * @method array getVideoInfos() Obtain <p>Reference video information. Only partially supported by some models.</p><ol><li>Kling generates sound effects for videos.</li><li>EL adds background music to videos.</li></ol>
 * @method void setVideoInfos(array $VideoInfos) Set <p>Reference video information. Only partially supported by some models.</p><ol><li>Kling generates sound effects for videos.</li><li>EL adds background music to videos.</li></ol>
 * @method array getAudioInfos() Obtain <p>Specify the reference audio information.</p><ol><li>Use of the cover feature in MiniMaxMusic.</li></ol><p>For example, this is required for music generation.</p>
 * @method void setAudioInfos(array $AudioInfos) Set <p>Specify the reference audio information.</p><ol><li>Use of the cover feature in MiniMaxMusic.</li></ol><p>For example, this is required for music generation.</p>
 * @method AigcStoreCosParam getStoreCosParam() Obtain 
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) Set 
 * @method AigcAudioExtraParam getExtraParameters() Obtain 
 * @method void setExtraParameters(AigcAudioExtraParam $ExtraParameters) Set 
 * @method string getAdditionalParameters() Obtain <p>Used to pass in some special scene parameters required by the model, serialized into strings in Json format. <br>Example MinimaxMusic model When lyrics are passed in:<br> {"lyric":{"ponies are running happily, flowers are blooming"}}</p><ol><li>MiniMaxMusic raw pure music parameters use example:&quot; AdditionalParameters&quot;:&quot; {"is_instrumental":true}&quot;. <br>Supported transparent transmission parameters are: lyrics, is_instrumental, aigc_watermark, sample_rate, bitrate. </li><li>EL Health Music supports transparent transmission parameters:<br> PromptInfluence, WithTimestamps, CompositionPlan, ForceInstrumental and other parameters. </li></ol>
 * @method void setAdditionalParameters(string $AdditionalParameters) Set <p>Used to pass in some special scene parameters required by the model, serialized into strings in Json format. <br>Example MinimaxMusic model When lyrics are passed in:<br> {"lyric":{"ponies are running happily, flowers are blooming"}}</p><ol><li>MiniMaxMusic raw pure music parameters use example:&quot; AdditionalParameters&quot;:&quot; {"is_instrumental":true}&quot;. <br>Supported transparent transmission parameters are: lyrics, is_instrumental, aigc_watermark, sample_rate, bitrate. </li><li>EL Health Music supports transparent transmission parameters:<br> PromptInfluence, WithTimestamps, CompositionPlan, ForceInstrumental and other parameters. </li></ol>
 * @method string getOperator() Obtain 
 * @method void setOperator(string $Operator) Set 
 */
class CreateAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Model name. Supported models for music generation: GL, MiniMaxMusic, EL, and Mureka.</p>
     */
    public $ModelName;

    /**
     * @var string <p>Specifies the model version. By default, the system uses the supported stable version of the model. Supported versions for GL: 3.0-clip and 3.0-pro. Supported versions for MiniMaxMusic: 2.0, 2.5, 2.6, and 3.0. Supported versions for EL: compose_v2 and sound_t2s_v2. Supported versions for Mureka: song_8, song_9, song_9.5, instrumental_8, instrumental_9, and instrumental_9.5.</p>
     */
    public $ModelVersion;

    /**
     * @var string 
     */
    public $SceneType;

    /**
     * @var string <p>Description of the generated music. (Note: supports up to 2,000 characters).</p>
     */
    public $Prompt;

    /**
     * @var array <p>Reference video information. Only partially supported by some models.</p><ol><li>Kling generates sound effects for videos.</li><li>EL adds background music to videos.</li></ol>
     */
    public $VideoInfos;

    /**
     * @var array <p>Specify the reference audio information.</p><ol><li>Use of the cover feature in MiniMaxMusic.</li></ol><p>For example, this is required for music generation.</p>
     */
    public $AudioInfos;

    /**
     * @var AigcStoreCosParam 
     */
    public $StoreCosParam;

    /**
     * @var AigcAudioExtraParam 
     */
    public $ExtraParameters;

    /**
     * @var string <p>Used to pass in some special scene parameters required by the model, serialized into strings in Json format. <br>Example MinimaxMusic model When lyrics are passed in:<br> {"lyric":{"ponies are running happily, flowers are blooming"}}</p><ol><li>MiniMaxMusic raw pure music parameters use example:&quot; AdditionalParameters&quot;:&quot; {"is_instrumental":true}&quot;. <br>Supported transparent transmission parameters are: lyrics, is_instrumental, aigc_watermark, sample_rate, bitrate. </li><li>EL Health Music supports transparent transmission parameters:<br> PromptInfluence, WithTimestamps, CompositionPlan, ForceInstrumental and other parameters. </li></ol>
     */
    public $AdditionalParameters;

    /**
     * @var string 
     */
    public $Operator;

    /**
     * @param string $ModelName <p>Model name. Supported models for music generation: GL, MiniMaxMusic, EL, and Mureka.</p>
     * @param string $ModelVersion <p>Specifies the model version. By default, the system uses the supported stable version of the model. Supported versions for GL: 3.0-clip and 3.0-pro. Supported versions for MiniMaxMusic: 2.0, 2.5, 2.6, and 3.0. Supported versions for EL: compose_v2 and sound_t2s_v2. Supported versions for Mureka: song_8, song_9, song_9.5, instrumental_8, instrumental_9, and instrumental_9.5.</p>
     * @param string $SceneType 
     * @param string $Prompt <p>Description of the generated music. (Note: supports up to 2,000 characters).</p>
     * @param array $VideoInfos <p>Reference video information. Only partially supported by some models.</p><ol><li>Kling generates sound effects for videos.</li><li>EL adds background music to videos.</li></ol>
     * @param array $AudioInfos <p>Specify the reference audio information.</p><ol><li>Use of the cover feature in MiniMaxMusic.</li></ol><p>For example, this is required for music generation.</p>
     * @param AigcStoreCosParam $StoreCosParam 
     * @param AigcAudioExtraParam $ExtraParameters 
     * @param string $AdditionalParameters <p>Used to pass in some special scene parameters required by the model, serialized into strings in Json format. <br>Example MinimaxMusic model When lyrics are passed in:<br> {"lyric":{"ponies are running happily, flowers are blooming"}}</p><ol><li>MiniMaxMusic raw pure music parameters use example:&quot; AdditionalParameters&quot;:&quot; {"is_instrumental":true}&quot;. <br>Supported transparent transmission parameters are: lyrics, is_instrumental, aigc_watermark, sample_rate, bitrate. </li><li>EL Health Music supports transparent transmission parameters:<br> PromptInfluence, WithTimestamps, CompositionPlan, ForceInstrumental and other parameters. </li></ol>
     * @param string $Operator 
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
