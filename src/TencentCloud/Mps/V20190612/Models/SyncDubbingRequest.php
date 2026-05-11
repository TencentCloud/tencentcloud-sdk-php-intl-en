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
 * SyncDubbing request structure.
 *
 * @method string getText() Obtain <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.</p>
 * @method void setText(string $Text) Set <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.</p>
 * @method string getTextLang() Obtain <p>Text language. This defaults to Chinese if left empty.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
 * @method void setTextLang(string $TextLang) Set <p>Text language. This defaults to Chinese if left empty.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
 * @method string getVoiceId() Obtain <p>Voice ID. This is required for synthesis with a specific voice. System voice and voice cloning are supported.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID. This is required for synthesis with a specific voice. System voice and voice cloning are supported.</p>
 * @method string getAudioData() Obtain <p>Base64-encoded audio for cloning.</p>
 * @method void setAudioData(string $AudioData) Set <p>Base64-encoded audio for cloning.</p>
 * @method string getAudioUrl() Obtain <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method void setAudioUrl(string $AudioUrl) Set <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method string getAudioLang() Obtain <p>Cloning audio language. The default language is Chinese. <br>Supported languages are the same as those for TextLang.</p>
 * @method void setAudioLang(string $AudioLang) Set <p>Cloning audio language. The default language is Chinese. <br>Supported languages are the same as those for TextLang.</p>
 * @method SyncDubbingOutputOption getOutput() Obtain <p>Output parameters.</p><p>Specifies the output format, etc.</p>
 * @method void setOutput(SyncDubbingOutputOption $Output) Set <p>Output parameters.</p><p>Specifies the output format, etc.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p><p>‑ synExt (Object): Speech synthesis extension parameter.<br>- duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>- sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br> pitch (Integer): -Pitch. Default value: 0 (original voice output). Valid values: [-12, 12].<br>‑ cloneExt (Object): Voice cloning extension parameter.<br>    - timeRanges (Float[][]): Specifies the time ranges for audio cloning. Default value: [[0, 20]]. Example: [[5.2, 10], [45, 59.8]].</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p><p>‑ synExt (Object): Speech synthesis extension parameter.<br>- duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>- sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br> pitch (Integer): -Pitch. Default value: 0 (original voice output). Valid values: [-12, 12].<br>‑ cloneExt (Object): Voice cloning extension parameter.<br>    - timeRanges (Float[][]): Specifies the time ranges for audio cloning. Default value: [[0, 20]]. Example: [[5.2, 10], [45, 59.8]].</p>
 */
class SyncDubbingRequest extends AbstractModel
{
    /**
     * @var string <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.</p>
     */
    public $Text;

    /**
     * @var string <p>Text language. This defaults to Chinese if left empty.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
     */
    public $TextLang;

    /**
     * @var string <p>Voice ID. This is required for synthesis with a specific voice. System voice and voice cloning are supported.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Base64-encoded audio for cloning.</p>
     */
    public $AudioData;

    /**
     * @var string <p>Cloning audio URL. Valid when AudioData is empty.</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>Cloning audio language. The default language is Chinese. <br>Supported languages are the same as those for TextLang.</p>
     */
    public $AudioLang;

    /**
     * @var SyncDubbingOutputOption <p>Output parameters.</p><p>Specifies the output format, etc.</p>
     */
    public $Output;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p><p>‑ synExt (Object): Speech synthesis extension parameter.<br>- duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>- sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br> pitch (Integer): -Pitch. Default value: 0 (original voice output). Valid values: [-12, 12].<br>‑ cloneExt (Object): Voice cloning extension parameter.<br>    - timeRanges (Float[][]): Specifies the time ranges for audio cloning. Default value: [[0, 20]]. Example: [[5.2, 10], [45, 59.8]].</p>
     */
    public $ExtParam;

    /**
     * @param string $Text <p>Text for the synthesis. This is required for text to speech. The text cannot exceed 2000 characters in length.</p>
     * @param string $TextLang <p>Text language. This defaults to Chinese if left empty.<br>Supported languages:<br>zh    Chinese<br>en    English<br>ja    Japanese<br>de    German<br>fr    French<br>ko    Korean<br>ru    Russian<br>uk    Ukrainian<br>pt    Portuguese<br>it    Italian<br>es    Spanish<br>id    Indonesian<br>nl    Dutch<br>tr    Turkish<br>fil    Filipino<br>ms    Malay<br>el    Greek<br>fi    Finnish<br>hr    Croatian<br>sk    Slovak<br>pl    Polish<br>sv    Swedish<br>hi    Hindi<br>bg    Bulgarian<br>ro    Romanian<br>ar    Arabic<br>cs    Czech<br>da    Danish<br>ta    Tamil<br>hun    Hungarian<br>vi    Vietnamese<br>no    Norwegian<br>yue    Cantonese<br>th    Thai<br>he    Hebrew<br>ca    Catalan<br>nn    Nynorsk<br>af    Afrikaans<br>fa    Persian<br>sl    Slovenian</p>
     * @param string $VoiceId <p>Voice ID. This is required for synthesis with a specific voice. System voice and voice cloning are supported.</p>
     * @param string $AudioData <p>Base64-encoded audio for cloning.</p>
     * @param string $AudioUrl <p>Cloning audio URL. Valid when AudioData is empty.</p>
     * @param string $AudioLang <p>Cloning audio language. The default language is Chinese. <br>Supported languages are the same as those for TextLang.</p>
     * @param SyncDubbingOutputOption $Output <p>Output parameters.</p><p>Specifies the output format, etc.</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p><p>‑ synExt (Object): Speech synthesis extension parameter.<br>- duration (Float): Synthesized audio duration, in seconds. Example: 5.2.<br>- sampleRate (Integer): Synthesized audio sample rate. Default value: 16000. Supported values: [8000,16000,22050,32000,44100].<br> pitch (Integer): -Pitch. Default value: 0 (original voice output). Valid values: [-12, 12].<br>‑ cloneExt (Object): Voice cloning extension parameter.<br>    - timeRanges (Float[][]): Specifies the time ranges for audio cloning. Default value: [[0, 20]]. Example: [[5.2, 10], [45, 59.8]].</p>
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

        if (array_key_exists("TextLang",$param) and $param["TextLang"] !== null) {
            $this->TextLang = $param["TextLang"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("AudioLang",$param) and $param["AudioLang"] !== null) {
            $this->AudioLang = $param["AudioLang"];
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
