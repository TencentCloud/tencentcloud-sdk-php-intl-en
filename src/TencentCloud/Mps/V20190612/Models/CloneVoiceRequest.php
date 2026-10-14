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
 * CloneVoice request structure.
 *
 * @method string getAudioData() Obtain <p>Clone audio base64 code</p>
 * @method void setAudioData(string $AudioData) Set <p>Clone audio base64 code</p>
 * @method string getAudioUrl() Obtain <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method void setAudioUrl(string $AudioUrl) Set <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method string getAudioLang() Obtain <p>Cloning audio language. The default language is Chinese. Supported languages are the same as those for TextLang in text to speech.</p>
 * @method void setAudioLang(string $AudioLang) Set <p>Cloning audio language. The default language is Chinese. Supported languages are the same as those for TextLang in text to speech.</p>
 * @method VoiceProfile getVoiceProfile() Obtain <p>Voice attribute. Use timbre for querying and matching.</p>
 * @method void setVoiceProfile(VoiceProfile $VoiceProfile) Set <p>Voice attribute. Use timbre for querying and matching.</p>
 * @method string getText() Obtain <p>Trial text</p>
 * @method void setText(string $Text) Set <p>Trial text</p>
 * @method string getTextLang() Obtain <p>Language of the trial text. By default, it is automatically detected if left blank. The currently supported languages are the same as those for TTS.</p>
 * @method void setTextLang(string $TextLang) Set <p>Language of the trial text. By default, it is automatically detected if left blank. The currently supported languages are the same as those for TTS.</p>
 * @method SyncDubbingOutputOption getOutput() Obtain <p>Output parameters. You can specify the output audio format, etc. The default output audio format is base64.</p>
 * @method void setOutput(SyncDubbingOutputOption $Output) Set <p>Output parameters. You can specify the output audio format, etc. The default output audio format is base64.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 */
class CloneVoiceRequest extends AbstractModel
{
    /**
     * @var string <p>Clone audio base64 code</p>
     */
    public $AudioData;

    /**
     * @var string <p>Cloning audio URL. Valid when AudioData is empty.</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>Cloning audio language. The default language is Chinese. Supported languages are the same as those for TextLang in text to speech.</p>
     */
    public $AudioLang;

    /**
     * @var VoiceProfile <p>Voice attribute. Use timbre for querying and matching.</p>
     */
    public $VoiceProfile;

    /**
     * @var string <p>Trial text</p>
     */
    public $Text;

    /**
     * @var string <p>Language of the trial text. By default, it is automatically detected if left blank. The currently supported languages are the same as those for TTS.</p>
     */
    public $TextLang;

    /**
     * @var SyncDubbingOutputOption <p>Output parameters. You can specify the output audio format, etc. The default output audio format is base64.</p>
     */
    public $Output;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @param string $AudioData <p>Clone audio base64 code</p>
     * @param string $AudioUrl <p>Cloning audio URL. Valid when AudioData is empty.</p>
     * @param string $AudioLang <p>Cloning audio language. The default language is Chinese. Supported languages are the same as those for TextLang in text to speech.</p>
     * @param VoiceProfile $VoiceProfile <p>Voice attribute. Use timbre for querying and matching.</p>
     * @param string $Text <p>Trial text</p>
     * @param string $TextLang <p>Language of the trial text. By default, it is automatically detected if left blank. The currently supported languages are the same as those for TTS.</p>
     * @param SyncDubbingOutputOption $Output <p>Output parameters. You can specify the output audio format, etc. The default output audio format is base64.</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p>
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
        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("AudioLang",$param) and $param["AudioLang"] !== null) {
            $this->AudioLang = $param["AudioLang"];
        }

        if (array_key_exists("VoiceProfile",$param) and $param["VoiceProfile"] !== null) {
            $this->VoiceProfile = new VoiceProfile();
            $this->VoiceProfile->deserialize($param["VoiceProfile"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
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
