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
 * TextToSpeechAsync request structure.
 *
 * @method string getText() Obtain <p>Text to convert to speech.</p>
 * @method void setText(string $Text) Set <p>Text to convert to speech.</p>
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getSubAppId() Obtain <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
 * @method void setSubAppId(string $SubAppId) Set <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
 * @method string getLanguageBoost() Obtain <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) Set <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method string getExtParam() Obtain <p>Extended parameters for text-to-speech (async). Fields supported by ExtParam:</p><ul><li>model (string): Synthesis model. Options: minimax-speech-2.8-hd, minimax-speech-2.8-turbo, minimax-speech-2.6-hd, minimax-speech-2.6-turbo, minimax-speech-02-hd, minimax-speech-02-turbo. Default: minimax-speech-2.8-hd.</li><li>text_lang (string): Text language, such as zh / en. Synonymous with the input parameter LanguageBoost. If both are passed, ExtParam takes precedence.</li><li>audio_setting (object): Audio output and voice type fine-tuning parameters. Note: For async APIs, speaking rate, volume, pitch, and emotion are all under audio_setting, unlike the voice_setting of synchronous APIs. Optional fields:<ul><li>speed (float): Speaking rate. Range: [0.5, 2.0]. Default: 1.0.</li><li>vol (float): Volume. Range: (0, 10]. Default: 1.0.</li><li>pitch (int): Pitch. Range: [-12, 12]. Default: 0.</li><li>emotion (string): Emotion. Options: happy, sad, angry, fearful, disgusted, surprised, calm, fluent, whisper.</li><li>sample_rate (int): Sampling rate. Options: 8000, 16000, 22050, 24000, 32000, 44100. Default: 16000.</li><li>format (string): Audio format. Options: mp3, wav. Default: wav.</li><li>duration (float): Target duration in seconds.</li><li>cut_silence (bool): Whether to trim silence segments.</li></ul></li></ul>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters for text-to-speech (async). Fields supported by ExtParam:</p><ul><li>model (string): Synthesis model. Options: minimax-speech-2.8-hd, minimax-speech-2.8-turbo, minimax-speech-2.6-hd, minimax-speech-2.6-turbo, minimax-speech-02-hd, minimax-speech-02-turbo. Default: minimax-speech-2.8-hd.</li><li>text_lang (string): Text language, such as zh / en. Synonymous with the input parameter LanguageBoost. If both are passed, ExtParam takes precedence.</li><li>audio_setting (object): Audio output and voice type fine-tuning parameters. Note: For async APIs, speaking rate, volume, pitch, and emotion are all under audio_setting, unlike the voice_setting of synchronous APIs. Optional fields:<ul><li>speed (float): Speaking rate. Range: [0.5, 2.0]. Default: 1.0.</li><li>vol (float): Volume. Range: (0, 10]. Default: 1.0.</li><li>pitch (int): Pitch. Range: [-12, 12]. Default: 0.</li><li>emotion (string): Emotion. Options: happy, sad, angry, fearful, disgusted, surprised, calm, fluent, whisper.</li><li>sample_rate (int): Sampling rate. Options: 8000, 16000, 22050, 24000, 32000, 44100. Default: 16000.</li><li>format (string): Audio format. Options: mp3, wav. Default: wav.</li><li>duration (float): Target duration in seconds.</li><li>cut_silence (bool): Whether to trim silence segments.</li></ul></li></ul>
 * @method TextToSpeechAsyncOutputOption getOutput() Obtain <p>Output parameters.</p><p>Specifies the output format, etc. The default output is an audio url.</p>
 * @method void setOutput(TextToSpeechAsyncOutputOption $Output) Set <p>Output parameters.</p><p>Specifies the output format, etc. The default output is an audio url.</p>
 * @method string getSessionContext() Obtain <p>Identifies the source context. This is used to pass through user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Identifies the source context. This is used to pass through user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
 * @method string getSessionId() Obtain <p>Identification Code for Task Deduplication. If a request with the same identification code has been made within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identification Code for Task Deduplication. If a request with the same identification code has been made within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
 */
class TextToSpeechAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>Text to convert to speech.</p>
     */
    public $Text;

    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>Extended parameters for text-to-speech (async). Fields supported by ExtParam:</p><ul><li>model (string): Synthesis model. Options: minimax-speech-2.8-hd, minimax-speech-2.8-turbo, minimax-speech-2.6-hd, minimax-speech-2.6-turbo, minimax-speech-02-hd, minimax-speech-02-turbo. Default: minimax-speech-2.8-hd.</li><li>text_lang (string): Text language, such as zh / en. Synonymous with the input parameter LanguageBoost. If both are passed, ExtParam takes precedence.</li><li>audio_setting (object): Audio output and voice type fine-tuning parameters. Note: For async APIs, speaking rate, volume, pitch, and emotion are all under audio_setting, unlike the voice_setting of synchronous APIs. Optional fields:<ul><li>speed (float): Speaking rate. Range: [0.5, 2.0]. Default: 1.0.</li><li>vol (float): Volume. Range: (0, 10]. Default: 1.0.</li><li>pitch (int): Pitch. Range: [-12, 12]. Default: 0.</li><li>emotion (string): Emotion. Options: happy, sad, angry, fearful, disgusted, surprised, calm, fluent, whisper.</li><li>sample_rate (int): Sampling rate. Options: 8000, 16000, 22050, 24000, 32000, 44100. Default: 16000.</li><li>format (string): Audio format. Options: mp3, wav. Default: wav.</li><li>duration (float): Target duration in seconds.</li><li>cut_silence (bool): Whether to trim silence segments.</li></ul></li></ul>
     */
    public $ExtParam;

    /**
     * @var TextToSpeechAsyncOutputOption <p>Output parameters.</p><p>Specifies the output format, etc. The default output is an audio url.</p>
     */
    public $Output;

    /**
     * @var string <p>Identifies the source context. This is used to pass through user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Identification Code for Task Deduplication. If a request with the same identification code has been made within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
     */
    public $SessionId;

    /**
     * @param string $Text <p>Text to convert to speech.</p>
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $SubAppId <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
     * @param string $LanguageBoost <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     * @param string $ExtParam <p>Extended parameters for text-to-speech (async). Fields supported by ExtParam:</p><ul><li>model (string): Synthesis model. Options: minimax-speech-2.8-hd, minimax-speech-2.8-turbo, minimax-speech-2.6-hd, minimax-speech-2.6-turbo, minimax-speech-02-hd, minimax-speech-02-turbo. Default: minimax-speech-2.8-hd.</li><li>text_lang (string): Text language, such as zh / en. Synonymous with the input parameter LanguageBoost. If both are passed, ExtParam takes precedence.</li><li>audio_setting (object): Audio output and voice type fine-tuning parameters. Note: For async APIs, speaking rate, volume, pitch, and emotion are all under audio_setting, unlike the voice_setting of synchronous APIs. Optional fields:<ul><li>speed (float): Speaking rate. Range: [0.5, 2.0]. Default: 1.0.</li><li>vol (float): Volume. Range: (0, 10]. Default: 1.0.</li><li>pitch (int): Pitch. Range: [-12, 12]. Default: 0.</li><li>emotion (string): Emotion. Options: happy, sad, angry, fearful, disgusted, surprised, calm, fluent, whisper.</li><li>sample_rate (int): Sampling rate. Options: 8000, 16000, 22050, 24000, 32000, 44100. Default: 16000.</li><li>format (string): Audio format. Options: mp3, wav. Default: wav.</li><li>duration (float): Target duration in seconds.</li><li>cut_silence (bool): Whether to trim silence segments.</li></ul></li></ul>
     * @param TextToSpeechAsyncOutputOption $Output <p>Output parameters.</p><p>Specifies the output format, etc. The default output is an audio url.</p>
     * @param string $SessionContext <p>Identifies the source context. This is used to pass through user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
     * @param string $SessionId <p>Identification Code for Task Deduplication. If a request with the same identification code has been made within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
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

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TextToSpeechAsyncOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
