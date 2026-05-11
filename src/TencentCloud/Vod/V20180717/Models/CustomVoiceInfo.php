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
 * Custom tone information.
 *
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getVoiceInfo() Obtain <p>Tone information.</p>
 * @method void setVoiceInfo(string $VoiceInfo) Set <p>Tone information.</p>
 */
class CustomVoiceInfo extends AbstractModel
{
    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Tone information.</p>
     */
    public $VoiceInfo;

    /**
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $VoiceInfo <p>Tone information.</p>
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("VoiceInfo",$param) and $param["VoiceInfo"] !== null) {
            $this->VoiceInfo = $param["VoiceInfo"];
        }
    }
}
