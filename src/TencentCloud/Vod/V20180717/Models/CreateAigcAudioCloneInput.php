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
 * 
 *
 * @method AigcAudioCloneInputFileInfo getAudioFileInfo() Obtain 
 * @method void setAudioFileInfo(AigcAudioCloneInputFileInfo $AudioFileInfo) Set 
 * @method string getVoiceId() Obtain 
 * @method void setVoiceId(string $VoiceId) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method AigcAudioCloneInputFileInfo getPromptAudioFileInfo() Obtain 
 * @method void setPromptAudioFileInfo(AigcAudioCloneInputFileInfo $PromptAudioFileInfo) Set 
 * @method string getPromptText() Obtain 
 * @method void setPromptText(string $PromptText) Set 
 * @method string getPayload() Obtain 
 * @method void setPayload(string $Payload) Set 
 */
class CreateAigcAudioCloneInput extends AbstractModel
{
    /**
     * @var AigcAudioCloneInputFileInfo 
     */
    public $AudioFileInfo;

    /**
     * @var string 
     */
    public $VoiceId;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var AigcAudioCloneInputFileInfo 
     */
    public $PromptAudioFileInfo;

    /**
     * @var string 
     */
    public $PromptText;

    /**
     * @var string 
     */
    public $Payload;

    /**
     * @param AigcAudioCloneInputFileInfo $AudioFileInfo 
     * @param string $VoiceId 
     * @param string $Text 
     * @param AigcAudioCloneInputFileInfo $PromptAudioFileInfo 
     * @param string $PromptText 
     * @param string $Payload 
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
