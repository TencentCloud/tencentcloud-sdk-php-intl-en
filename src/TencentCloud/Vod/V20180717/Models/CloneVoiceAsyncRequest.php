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
 * CloneVoiceAsync request structure.
 *
 * @method string getSubAppId() Obtain 
 * @method void setSubAppId(string $SubAppId) Set 
 * @method string getAudioData() Obtain 
 * @method void setAudioData(string $AudioData) Set 
 * @method string getAudioUrl() Obtain 
 * @method void setAudioUrl(string $AudioUrl) Set 
 * @method string getAudioFileId() Obtain 
 * @method void setAudioFileId(string $AudioFileId) Set 
 * @method string getLanguageBoost() Obtain 
 * @method void setLanguageBoost(string $LanguageBoost) Set 
 * @method string getExtParam() Obtain <p>Voice clone expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. When not empty, <code>tts_model</code> must be passed simultaneously. After the clone is successful, the audition audio <code>DemoAudio</code> is returned.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Language of the audition text.</li>  <li><code>voice_profile</code> (object): Voice profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, such as <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, such as <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, such as <code>["commentate"]</code>.</li>    </ul>  </li></ul>
 * @method void setExtParam(string $ExtParam) Set <p>Voice clone expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. When not empty, <code>tts_model</code> must be passed simultaneously. After the clone is successful, the audition audio <code>DemoAudio</code> is returned.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Language of the audition text.</li>  <li><code>voice_profile</code> (object): Voice profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, such as <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, such as <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, such as <code>["commentate"]</code>.</li>    </ul>  </li></ul>
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 */
class CloneVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $AudioData;

    /**
     * @var string 
     */
    public $AudioUrl;

    /**
     * @var string 
     */
    public $AudioFileId;

    /**
     * @var string 
     */
    public $LanguageBoost;

    /**
     * @var string <p>Voice clone expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. When not empty, <code>tts_model</code> must be passed simultaneously. After the clone is successful, the audition audio <code>DemoAudio</code> is returned.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Language of the audition text.</li>  <li><code>voice_profile</code> (object): Voice profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, such as <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, such as <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, such as <code>["commentate"]</code>.</li>    </ul>  </li></ul>
     */
    public $ExtParam;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @param string $SubAppId 
     * @param string $AudioData 
     * @param string $AudioUrl 
     * @param string $AudioFileId 
     * @param string $LanguageBoost 
     * @param string $ExtParam <p>Voice clone expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. When not empty, <code>tts_model</code> must be passed simultaneously. After the clone is successful, the audition audio <code>DemoAudio</code> is returned.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Language of the audition text.</li>  <li><code>voice_profile</code> (object): Voice profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, such as <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, such as <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, such as <code>["commentate"]</code>.</li>    </ul>  </li></ul>
     * @param string $SessionContext 
     * @param string $SessionId 
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

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("AudioFileId",$param) and $param["AudioFileId"] !== null) {
            $this->AudioFileId = $param["AudioFileId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
