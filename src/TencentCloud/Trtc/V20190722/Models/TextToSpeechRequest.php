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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToSpeech request structure.
 *
 * @method string getText() Obtain Text to be converted to speech. length range: [1, 255].
 * @method void setText(string $Text) Set Text to be converted to speech. length range: [1, 255].
 * @method Voice getVoice() Obtain Audio configuration for text-to-speech.
 * @method void setVoice(Voice $Voice) Set Audio configuration for text-to-speech.
 * @method integer getSdkAppId() Obtain Specifies the SdkAppId of TRTC.
 * @method void setSdkAppId(integer $SdkAppId) Set Specifies the SdkAppId of TRTC.
 * @method AudioFormat getAudioFormat() Obtain Specifies the output audio format for text-to-speech.
 * @method void setAudioFormat(AudioFormat $AudioFormat) Set Specifies the output audio format for text-to-speech.
 * @method string getAPIKey() Obtain API key for TTS.
 * @method void setAPIKey(string $APIKey) Set API key for TTS.
 * @method string getModel() Obtain TTS model, current fixed value: flow_01_turbo.
 * @method void setModel(string $Model) Set TTS model, current fixed value: flow_01_turbo.
 * @method string getLanguage() Obtain Language to be synthesised (ISO 639-1). supports zh (chinese), en (english), yue (cantonese), ja (japanese), and ko (korean). defaults to auto-identification.
 * @method void setLanguage(string $Language) Set Language to be synthesised (ISO 639-1). supports zh (chinese), en (english), yue (cantonese), ja (japanese), and ko (korean). defaults to auto-identification.
 * @method array getPronunciationDict() Obtain 
 * @method void setPronunciationDict(array $PronunciationDict) Set 
 * @method integer getAlignmentMode() Obtain 
 * @method void setAlignmentMode(integer $AlignmentMode) Set 
 */
class TextToSpeechRequest extends AbstractModel
{
    /**
     * @var string Text to be converted to speech. length range: [1, 255].
     */
    public $Text;

    /**
     * @var Voice Audio configuration for text-to-speech.
     */
    public $Voice;

    /**
     * @var integer Specifies the SdkAppId of TRTC.
     */
    public $SdkAppId;

    /**
     * @var AudioFormat Specifies the output audio format for text-to-speech.
     */
    public $AudioFormat;

    /**
     * @var string API key for TTS.
     * @deprecated
     */
    public $APIKey;

    /**
     * @var string TTS model, current fixed value: flow_01_turbo.
     */
    public $Model;

    /**
     * @var string Language to be synthesised (ISO 639-1). supports zh (chinese), en (english), yue (cantonese), ja (japanese), and ko (korean). defaults to auto-identification.
     */
    public $Language;

    /**
     * @var array 
     */
    public $PronunciationDict;

    /**
     * @var integer 
     */
    public $AlignmentMode;

    /**
     * @param string $Text Text to be converted to speech. length range: [1, 255].
     * @param Voice $Voice Audio configuration for text-to-speech.
     * @param integer $SdkAppId Specifies the SdkAppId of TRTC.
     * @param AudioFormat $AudioFormat Specifies the output audio format for text-to-speech.
     * @param string $APIKey API key for TTS.
     * @param string $Model TTS model, current fixed value: flow_01_turbo.
     * @param string $Language Language to be synthesised (ISO 639-1). supports zh (chinese), en (english), yue (cantonese), ja (japanese), and ko (korean). defaults to auto-identification.
     * @param array $PronunciationDict 
     * @param integer $AlignmentMode 
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

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new Voice();
            $this->Voice->deserialize($param["Voice"]);
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = new AudioFormat();
            $this->AudioFormat->deserialize($param["AudioFormat"]);
        }

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("PronunciationDict",$param) and $param["PronunciationDict"] !== null) {
            $this->PronunciationDict = [];
            foreach ($param["PronunciationDict"] as $key => $value){
                $obj = new PronunciationDict();
                $obj->deserialize($value);
                array_push($this->PronunciationDict, $obj);
            }
        }

        if (array_key_exists("AlignmentMode",$param) and $param["AlignmentMode"] !== null) {
            $this->AlignmentMode = $param["AlignmentMode"];
        }
    }
}
