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
 * TextToSpeechSync request structure.
 *
 * @method string getText() Obtain <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 bytes in length.</p>
 * @method void setText(string $Text) Set <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 bytes in length.</p>
 * @method string getVoiceId() Obtain <p>Voice Id. Fill in when synthesizing with a specified timbre. System, designed, and cloned timbres are supported.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice Id. Fill in when synthesizing with a specified timbre. System, designed, and cloned timbres are supported.</p>
 * @method string getSubAppId() Obtain <p>VOD application ID. Customers who activate on-demand services on or after December 25, 2023 must fill in this field with the application ID when accessing resources in VOD applications, whether in the default application or a newly created application.</p>
 * @method void setSubAppId(string $SubAppId) Set <p>VOD application ID. Customers who activate on-demand services on or after December 25, 2023 must fill in this field with the application ID when accessing resources in VOD applications, whether in the default application or a newly created application.</p>
 * @method string getLanguageBoost() Obtain <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) Set <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method TextToSpeechSyncOutputOption getOutput() Obtain <p>Output parameters.</p><p>Specifies the output format, etc. The default output audio format is base64.</p>
 * @method void setOutput(TextToSpeechSyncOutputOption $Output) Set <p>Output parameters.</p><p>Specifies the output format, etc. The default output audio format is base64.</p>
 * @method string getExtParam() Obtain <p>Synchronous speech synthesis expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>model</code> (string): Synthesis model. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Default: <code>minimax-speech-2.8-hd</code>.</li>  <li><code>voice_setting</code> (object): Fine adjustment of voice type. Optional fields:    <ul>      <li><code>speed</code> (float): Speech speed, <code>[0.5, 2.0]</code>. Default: <code>1.0</code>.</li>      <li><code>vol</code> (float): Volume, <code>(0, 10]</code>. Default: <code>1.0</code>.</li>      <li><code>pitch</code> (int): Pitch, <code>[-12, 12]</code>. Default: <code>0</code>.</li>      <li><code>emotion</code> (string): Emotion. Options: <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>.</li>    </ul>  </li>  <li><code>audio_setting</code> (object): Audio output parameter. Optional fields:    <ul>      <li><code>sample_rate</code> (int): Sampling rate. Options: <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>. Default: <code>16000</code>.</li>      <li><code>format</code> (string): Audio format. Options: <code>mp3</code> / <code>wav</code>. Default: <code>wav</code>.</li>      <li><code>duration</code> (float): Target duration (seconds).</li>      <li><code>cut_silence</code> (bool): Whether to trim silence segments.</li>    </ul>  </li></ul>
 * @method void setExtParam(string $ExtParam) Set <p>Synchronous speech synthesis expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>model</code> (string): Synthesis model. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Default: <code>minimax-speech-2.8-hd</code>.</li>  <li><code>voice_setting</code> (object): Fine adjustment of voice type. Optional fields:    <ul>      <li><code>speed</code> (float): Speech speed, <code>[0.5, 2.0]</code>. Default: <code>1.0</code>.</li>      <li><code>vol</code> (float): Volume, <code>(0, 10]</code>. Default: <code>1.0</code>.</li>      <li><code>pitch</code> (int): Pitch, <code>[-12, 12]</code>. Default: <code>0</code>.</li>      <li><code>emotion</code> (string): Emotion. Options: <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>.</li>    </ul>  </li>  <li><code>audio_setting</code> (object): Audio output parameter. Optional fields:    <ul>      <li><code>sample_rate</code> (int): Sampling rate. Options: <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>. Default: <code>16000</code>.</li>      <li><code>format</code> (string): Audio format. Options: <code>mp3</code> / <code>wav</code>. Default: <code>wav</code>.</li>      <li><code>duration</code> (float): Target duration (seconds).</li>      <li><code>cut_silence</code> (bool): Whether to trim silence segments.</li>    </ul>  </li></ul>
 */
class TextToSpeechSyncRequest extends AbstractModel
{
    /**
     * @var string <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 bytes in length.</p>
     */
    public $Text;

    /**
     * @var string <p>Voice Id. Fill in when synthesizing with a specified timbre. System, designed, and cloned timbres are supported.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>VOD application ID. Customers who activate on-demand services on or after December 25, 2023 must fill in this field with the application ID when accessing resources in VOD applications, whether in the default application or a newly created application.</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     */
    public $LanguageBoost;

    /**
     * @var TextToSpeechSyncOutputOption <p>Output parameters.</p><p>Specifies the output format, etc. The default output audio format is base64.</p>
     */
    public $Output;

    /**
     * @var string <p>Synchronous speech synthesis expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>model</code> (string): Synthesis model. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Default: <code>minimax-speech-2.8-hd</code>.</li>  <li><code>voice_setting</code> (object): Fine adjustment of voice type. Optional fields:    <ul>      <li><code>speed</code> (float): Speech speed, <code>[0.5, 2.0]</code>. Default: <code>1.0</code>.</li>      <li><code>vol</code> (float): Volume, <code>(0, 10]</code>. Default: <code>1.0</code>.</li>      <li><code>pitch</code> (int): Pitch, <code>[-12, 12]</code>. Default: <code>0</code>.</li>      <li><code>emotion</code> (string): Emotion. Options: <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>.</li>    </ul>  </li>  <li><code>audio_setting</code> (object): Audio output parameter. Optional fields:    <ul>      <li><code>sample_rate</code> (int): Sampling rate. Options: <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>. Default: <code>16000</code>.</li>      <li><code>format</code> (string): Audio format. Options: <code>mp3</code> / <code>wav</code>. Default: <code>wav</code>.</li>      <li><code>duration</code> (float): Target duration (seconds).</li>      <li><code>cut_silence</code> (bool): Whether to trim silence segments.</li>    </ul>  </li></ul>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 bytes in length.</p>
     * @param string $VoiceId <p>Voice Id. Fill in when synthesizing with a specified timbre. System, designed, and cloned timbres are supported.</p>
     * @param string $SubAppId <p>VOD application ID. Customers who activate on-demand services on or after December 25, 2023 must fill in this field with the application ID when accessing resources in VOD applications, whether in the default application or a newly created application.</p>
     * @param string $LanguageBoost <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     * @param TextToSpeechSyncOutputOption $Output <p>Output parameters.</p><p>Specifies the output format, etc. The default output audio format is base64.</p>
     * @param string $ExtParam <p>Synchronous speech synthesis expansion parameters. Fields supported by <code>ExtParam</code>:</p><ul>  <li><code>model</code> (string): Synthesis model. Options: <code>minimax-speech-2.8-hd</code>, <code>minimax-speech-2.8-turbo</code>, <code>minimax-speech-2.6-hd</code>, <code>minimax-speech-2.6-turbo</code>, <code>minimax-speech-02-hd</code>, <code>minimax-speech-02-turbo</code>. Default: <code>minimax-speech-2.8-hd</code>.</li>  <li><code>voice_setting</code> (object): Fine adjustment of voice type. Optional fields:    <ul>      <li><code>speed</code> (float): Speech speed, <code>[0.5, 2.0]</code>. Default: <code>1.0</code>.</li>      <li><code>vol</code> (float): Volume, <code>(0, 10]</code>. Default: <code>1.0</code>.</li>      <li><code>pitch</code> (int): Pitch, <code>[-12, 12]</code>. Default: <code>0</code>.</li>      <li><code>emotion</code> (string): Emotion. Options: <code>happy</code> / <code>sad</code> / <code>angry</code> / <code>fearful</code> / <code>disgusted</code> / <code>surprised</code> / <code>calm</code> / <code>fluent</code> / <code>whisper</code>.</li>    </ul>  </li>  <li><code>audio_setting</code> (object): Audio output parameter. Optional fields:    <ul>      <li><code>sample_rate</code> (int): Sampling rate. Options: <code>8000</code> / <code>16000</code> / <code>22050</code> / <code>24000</code> / <code>32000</code> / <code>44100</code>. Default: <code>16000</code>.</li>      <li><code>format</code> (string): Audio format. Options: <code>mp3</code> / <code>wav</code>. Default: <code>wav</code>.</li>      <li><code>duration</code> (float): Target duration (seconds).</li>      <li><code>cut_silence</code> (bool): Whether to trim silence segments.</li>    </ul>  </li></ul>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TextToSpeechSyncOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
