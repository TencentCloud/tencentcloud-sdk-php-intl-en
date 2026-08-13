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
 * TextToSpeech request structure.
 *
 * @method string getText() Obtain <p>Text to convert to speech.</p>
 * @method void setText(string $Text) Set <p>Text to convert to speech.</p>
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getTextLang() Obtain <p>Text language. This defaults to auto-identification if left blank.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
 * @method void setTextLang(string $TextLang) Set <p>Text language. This defaults to auto-identification if left blank.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
 * @method SyncDubbingOutputOption getOutput() Obtain <p>Output parameters.</p>
 * @method void setOutput(SyncDubbingOutputOption $Output) Set <p>Output parameters.</p>
 * @method string getExtParam() Obtain <p>Additional parameters, json string</p><p><strong>synExt</strong> Object Text To Speech extension parameters<br>   <strong>duration</strong> Float Synthetic audio duration in seconds. No throttling period by default. For example: 5.2<br>   <strong>format</strong> String Output audio format. Default is wav. Support wav and mp3.<br>   <strong>sampleRate</strong> Integer Synthetic audio sample rate. Default is 16000. Support [8000,16000,22050,24000,32000,44100]</p>
 * @method void setExtParam(string $ExtParam) Set <p>Additional parameters, json string</p><p><strong>synExt</strong> Object Text To Speech extension parameters<br>   <strong>duration</strong> Float Synthetic audio duration in seconds. No throttling period by default. For example: 5.2<br>   <strong>format</strong> String Output audio format. Default is wav. Support wav and mp3.<br>   <strong>sampleRate</strong> Integer Synthetic audio sample rate. Default is 16000. Support [8000,16000,22050,24000,32000,44100]</p>
 */
class TextToSpeechRequest extends AbstractModel
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
     * @var string <p>Text language. This defaults to auto-identification if left blank.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
     */
    public $TextLang;

    /**
     * @var SyncDubbingOutputOption <p>Output parameters.</p>
     */
    public $Output;

    /**
     * @var string <p>Additional parameters, json string</p><p><strong>synExt</strong> Object Text To Speech extension parameters<br>   <strong>duration</strong> Float Synthetic audio duration in seconds. No throttling period by default. For example: 5.2<br>   <strong>format</strong> String Output audio format. Default is wav. Support wav and mp3.<br>   <strong>sampleRate</strong> Integer Synthetic audio sample rate. Default is 16000. Support [8000,16000,22050,24000,32000,44100]</p>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>Text to convert to speech.</p>
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $TextLang <p>Text language. This defaults to auto-identification if left blank.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
     * @param SyncDubbingOutputOption $Output <p>Output parameters.</p>
     * @param string $ExtParam <p>Additional parameters, json string</p><p><strong>synExt</strong> Object Text To Speech extension parameters<br>   <strong>duration</strong> Float Synthetic audio duration in seconds. No throttling period by default. For example: 5.2<br>   <strong>format</strong> String Output audio format. Default is wav. Support wav and mp3.<br>   <strong>sampleRate</strong> Integer Synthetic audio sample rate. Default is 16000. Support [8000,16000,22050,24000,32000,44100]</p>
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

        if (array_key_exists("TextLang",$param) and $param["TextLang"] !== null) {
            $this->TextLang = $param["TextLang"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SyncDubbingOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
