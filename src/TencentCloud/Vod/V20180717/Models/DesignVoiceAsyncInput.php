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
 * Timbre design task input.
 *
 * @method string getPrompt() Obtain <p>Voice description.</p>
 * @method void setPrompt(string $Prompt) Set <p>Voice description.</p>
 * @method VoiceSettings getVoiceSettings() Obtain <p>Tone information</p>
 * @method void setVoiceSettings(VoiceSettings $VoiceSettings) Set <p>Tone information</p>
 * @method string getPreviewText() Obtain <p>Trial text.</p>
 * @method void setPreviewText(string $PreviewText) Set <p>Trial text.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 */
class DesignVoiceAsyncInput extends AbstractModel
{
    /**
     * @var string <p>Voice description.</p>
     */
    public $Prompt;

    /**
     * @var VoiceSettings <p>Tone information</p>
     */
    public $VoiceSettings;

    /**
     * @var string <p>Trial text.</p>
     */
    public $PreviewText;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @param string $Prompt <p>Voice description.</p>
     * @param VoiceSettings $VoiceSettings <p>Tone information</p>
     * @param string $PreviewText <p>Trial text.</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("VoiceSettings",$param) and $param["VoiceSettings"] !== null) {
            $this->VoiceSettings = new VoiceSettings();
            $this->VoiceSettings->deserialize($param["VoiceSettings"]);
        }

        if (array_key_exists("PreviewText",$param) and $param["PreviewText"] !== null) {
            $this->PreviewText = $param["PreviewText"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
