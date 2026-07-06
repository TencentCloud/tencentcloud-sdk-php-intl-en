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
 * DesignVoiceAsync request structure.
 *
 * @method string getPrompt() Obtain <p>Voice description.</p>
 * @method void setPrompt(string $Prompt) Set <p>Voice description.</p>
 * @method VoiceProfile getVoiceProfile() Obtain <p>Voice attribute.</p>
 * @method void setVoiceProfile(VoiceProfile $VoiceProfile) Set <p>Voice attribute.</p>
 * @method string getText() Obtain <p>Audition audio text. The length cannot exceed 500.</p>
 * @method void setText(string $Text) Set <p>Audition audio text. The length cannot exceed 500.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 */
class DesignVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>Voice description.</p>
     */
    public $Prompt;

    /**
     * @var VoiceProfile <p>Voice attribute.</p>
     */
    public $VoiceProfile;

    /**
     * @var string <p>Audition audio text. The length cannot exceed 500.</p>
     */
    public $Text;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @param string $Prompt <p>Voice description.</p>
     * @param VoiceProfile $VoiceProfile <p>Voice attribute.</p>
     * @param string $Text <p>Audition audio text. The length cannot exceed 500.</p>
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

        if (array_key_exists("VoiceProfile",$param) and $param["VoiceProfile"] !== null) {
            $this->VoiceProfile = new VoiceProfile();
            $this->VoiceProfile->deserialize($param["VoiceProfile"]);
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
