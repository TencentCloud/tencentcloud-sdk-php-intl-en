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
 * Speech parameter configuration for companion transcription TTS
 *
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method float getSpeed() Obtain <p>Speech speed. 0.5 for half speed, 2.0 for 2x speed, 1.0 for normal speed. Value range: [0.5, 2.0]. Default: 1.0.</p>
 * @method void setSpeed(float $Speed) Set <p>Speech speed. 0.5 for half speed, 2.0 for 2x speed, 1.0 for normal speed. Value range: [0.5, 2.0]. Default: 1.0.</p>
 * @method float getVolume() Obtain <p>Audio volume. 0 is mute, 10 is maximum volume. It is recommended to keep the default value to 1.0. Value range: [0, 10]. Default: 1.0.</p>
 * @method void setVolume(float $Volume) Set <p>Audio volume. 0 is mute, 10 is maximum volume. It is recommended to keep the default value to 1.0. Value range: [0, 10]. Default: 1.0.</p>
 * @method integer getPitch() Obtain <p>Pitch. Negative value makes the sound low and deep, positive value makes it sharper. 0 indicates the original pitch. Value range: [-12, 12]. Default 0.</p>
 * @method void setPitch(integer $Pitch) Set <p>Pitch. Negative value makes the sound low and deep, positive value makes it sharper. 0 indicates the original pitch. Value range: [-12, 12]. Default 0.</p>
 */
class TTSVoice extends AbstractModel
{
    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var float <p>Speech speed. 0.5 for half speed, 2.0 for 2x speed, 1.0 for normal speed. Value range: [0.5, 2.0]. Default: 1.0.</p>
     */
    public $Speed;

    /**
     * @var float <p>Audio volume. 0 is mute, 10 is maximum volume. It is recommended to keep the default value to 1.0. Value range: [0, 10]. Default: 1.0.</p>
     */
    public $Volume;

    /**
     * @var integer <p>Pitch. Negative value makes the sound low and deep, positive value makes it sharper. 0 indicates the original pitch. Value range: [-12, 12]. Default 0.</p>
     */
    public $Pitch;

    /**
     * @param string $VoiceId <p>Voice ID.</p>
     * @param float $Speed <p>Speech speed. 0.5 for half speed, 2.0 for 2x speed, 1.0 for normal speed. Value range: [0.5, 2.0]. Default: 1.0.</p>
     * @param float $Volume <p>Audio volume. 0 is mute, 10 is maximum volume. It is recommended to keep the default value to 1.0. Value range: [0, 10]. Default: 1.0.</p>
     * @param integer $Pitch <p>Pitch. Negative value makes the sound low and deep, positive value makes it sharper. 0 indicates the original pitch. Value range: [-12, 12]. Default 0.</p>
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

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Pitch",$param) and $param["Pitch"] !== null) {
            $this->Pitch = $param["Pitch"];
        }
    }
}
