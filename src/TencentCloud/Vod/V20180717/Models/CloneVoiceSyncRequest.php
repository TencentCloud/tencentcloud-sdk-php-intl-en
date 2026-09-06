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
 * CloneVoiceSync request structure.
 *
 * @method string getSubAppId() Obtain <p>VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</p>
 * @method void setSubAppId(string $SubAppId) Set <p>VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</p>
 * @method string getAudioData() Obtain <p>Base64-encoded audio for cloning.</p>
 * @method void setAudioData(string $AudioData) Set <p>Base64-encoded audio for cloning.</p>
 * @method string getAudioUrl() Obtain <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method void setAudioUrl(string $AudioUrl) Set <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method string getAudioFileId() Obtain <p>File ID for cloning. Valid when AudioData and AudioUrl are empty</p>
 * @method void setAudioFileId(string $AudioFileId) Set <p>File ID for cloning. Valid when AudioData and AudioUrl are empty</p>
 * @method string getLanguageBoost() Obtain <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) Set <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method string getExtParam() Obtain <p>Expansion parameters for synchronous timbre clone. Supported fields of <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. If not empty, <code>tts_model</code> must be passed simultaneously. Returns the audition audio <code>DemoAudio</code> upon successful clone.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Audition text language.</li>  <li><code>voice_profile</code> (object): Timbre profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, for example <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, for example <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, for example <code>["commentary"]</code>.</li>    </ul>  </li></ul>
 * @method void setExtParam(string $ExtParam) Set <p>Expansion parameters for synchronous timbre clone. Supported fields of <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. If not empty, <code>tts_model</code> must be passed simultaneously. Returns the audition audio <code>DemoAudio</code> upon successful clone.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Audition text language.</li>  <li><code>voice_profile</code> (object): Timbre profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, for example <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, for example <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, for example <code>["commentary"]</code>.</li>    </ul>  </li></ul>
 */
class CloneVoiceSyncRequest extends AbstractModel
{
    /**
     * @var string <p>VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Base64-encoded audio for cloning.</p>
     */
    public $AudioData;

    /**
     * @var string <p>Cloning audio URL. Valid when AudioData is empty.</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>File ID for cloning. Valid when AudioData and AudioUrl are empty</p>
     */
    public $AudioFileId;

    /**
     * @var string <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>Expansion parameters for synchronous timbre clone. Supported fields of <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. If not empty, <code>tts_model</code> must be passed simultaneously. Returns the audition audio <code>DemoAudio</code> upon successful clone.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Audition text language.</li>  <li><code>voice_profile</code> (object): Timbre profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, for example <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, for example <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, for example <code>["commentary"]</code>.</li>    </ul>  </li></ul>
     */
    public $ExtParam;

    /**
     * @param string $SubAppId <p>VOD application ID. Customers who activate on-demand services after December 25, 2023 must fill in this field with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</p>
     * @param string $AudioData <p>Base64-encoded audio for cloning.</p>
     * @param string $AudioUrl <p>Cloning audio URL. Valid when AudioData is empty.</p>
     * @param string $AudioFileId <p>File ID for cloning. Valid when AudioData and AudioUrl are empty</p>
     * @param string $LanguageBoost <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     * @param string $ExtParam <p>Expansion parameters for synchronous timbre clone. Supported fields of <code>ExtParam</code>:</p><ul>  <li><code>text</code> (string): Audition synthesis text, up to <code>1000</code> characters. If not empty, <code>tts_model</code> must be passed simultaneously. Returns the audition audio <code>DemoAudio</code> upon successful clone.</li>  <li><code>model</code> (string): Clone model. Default: <code>minimax-voice-clone</code>.</li>  <li><code>tts_model</code> (string): Model used to synthesize the audition audio. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Required when <code>text</code> is not empty.</li>  <li><code>text_lang</code> (string): Audition text language.</li>  <li><code>voice_profile</code> (object): Timbre profile. Optional fields:    <ul>      <li><code>name</code> (string): Timbre name.</li>      <li><code>description</code> (string): Timbre description.</li>      <li><code>gender</code> (string): Gender. Options: <code>male</code> / <code>female</code> / <code>unknown</code>.</li>      <li><code>age</code> (string): Age segment. Options: <code>child</code> / <code>teenager</code> / <code>youth</code> / <code>middle_aged</code> / <code>senior</code> / <code>unknown</code>.</li>      <li><code>languages</code> (string[]): Supported languages, for example <code>["zh", "en"]</code>.</li>      <li><code>labels</code> (string[]): Timbre tags, for example <code>["magnetic"]</code>.</li>      <li><code>scenes</code> (string[]): Application scenarios, for example <code>["commentary"]</code>.</li>    </ul>  </li></ul>
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
    }
}
