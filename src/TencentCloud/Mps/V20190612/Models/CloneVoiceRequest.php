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
 * @method string getAudioData() Obtain 
 * @method void setAudioData(string $AudioData) Set 
 * @method string getAudioUrl() Obtain 
 * @method void setAudioUrl(string $AudioUrl) Set 
 * @method string getAudioLang() Obtain 
 * @method void setAudioLang(string $AudioLang) Set 
 * @method VoiceProfile getVoiceProfile() Obtain 
 * @method void setVoiceProfile(VoiceProfile $VoiceProfile) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method string getTextLang() Obtain 
 * @method void setTextLang(string $TextLang) Set 
 * @method SyncDubbingOutputOption getOutput() Obtain 
 * @method void setOutput(SyncDubbingOutputOption $Output) Set 
 * @method string getExtParam() Obtain 
 * @method void setExtParam(string $ExtParam) Set 
 */
class CloneVoiceRequest extends AbstractModel
{
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
    public $AudioLang;

    /**
     * @var VoiceProfile 
     */
    public $VoiceProfile;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var string 
     */
    public $TextLang;

    /**
     * @var SyncDubbingOutputOption 
     */
    public $Output;

    /**
     * @var string 
     */
    public $ExtParam;

    /**
     * @param string $AudioData 
     * @param string $AudioUrl 
     * @param string $AudioLang 
     * @param VoiceProfile $VoiceProfile 
     * @param string $Text 
     * @param string $TextLang 
     * @param SyncDubbingOutputOption $Output 
     * @param string $ExtParam 
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
