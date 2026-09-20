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
 * Create AIGC voice clone input information.
 *
 * @method AigcAudioCloneInputFileInfo getAudioFileInfo() Obtain <p>Original audio file. The model will use the voice type of the audio passed in this parameter as an example to clone the timbre.</p>
 * @method void setAudioFileInfo(AigcAudioCloneInputFileInfo $AudioFileInfo) Set <p>Original audio file. The model will use the voice type of the audio passed in this parameter as an example to clone the timbre.</p>
 * @method string getVoiceId() Obtain <p>Custom Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Custom Voice ID.</p>
 * @method string getText() Obtain <p>Clone audition parameter.</p>
 * @method void setText(string $Text) Set <p>Clone audition parameter.</p>
 * @method AigcAudioCloneInputFileInfo getPromptAudioFileInfo() Obtain <p>Sample audio for voice replication.</p>
 * @method void setPromptAudioFileInfo(AigcAudioCloneInputFileInfo $PromptAudioFileInfo) Set <p>Sample audio for voice replication.</p>
 * @method string getPromptText() Obtain <p>Text content corresponding to the sample audio.</p>
 * @method void setPromptText(string $PromptText) Set <p>Text content corresponding to the sample audio.</p>
 * @method string getPayload() Obtain <p>Pass-through parameter.</p>
 * @method void setPayload(string $Payload) Set <p>Pass-through parameter.</p>
 */
class CreateAigcAudioCloneInput extends AbstractModel
{
    /**
     * @var AigcAudioCloneInputFileInfo <p>Original audio file. The model will use the voice type of the audio passed in this parameter as an example to clone the timbre.</p>
     */
    public $AudioFileInfo;

    /**
     * @var string <p>Custom Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Clone audition parameter.</p>
     */
    public $Text;

    /**
     * @var AigcAudioCloneInputFileInfo <p>Sample audio for voice replication.</p>
     */
    public $PromptAudioFileInfo;

    /**
     * @var string <p>Text content corresponding to the sample audio.</p>
     */
    public $PromptText;

    /**
     * @var string <p>Pass-through parameter.</p>
     */
    public $Payload;

    /**
     * @param AigcAudioCloneInputFileInfo $AudioFileInfo <p>Original audio file. The model will use the voice type of the audio passed in this parameter as an example to clone the timbre.</p>
     * @param string $VoiceId <p>Custom Voice ID.</p>
     * @param string $Text <p>Clone audition parameter.</p>
     * @param AigcAudioCloneInputFileInfo $PromptAudioFileInfo <p>Sample audio for voice replication.</p>
     * @param string $PromptText <p>Text content corresponding to the sample audio.</p>
     * @param string $Payload <p>Pass-through parameter.</p>
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
        if (array_key_exists("AudioFileInfo",$param) and $param["AudioFileInfo"] !== null) {
            $this->AudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->AudioFileInfo->deserialize($param["AudioFileInfo"]);
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("PromptAudioFileInfo",$param) and $param["PromptAudioFileInfo"] !== null) {
            $this->PromptAudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->PromptAudioFileInfo->deserialize($param["PromptAudioFileInfo"]);
        }

        if (array_key_exists("PromptText",$param) and $param["PromptText"] !== null) {
            $this->PromptText = $param["PromptText"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }
    }
}
