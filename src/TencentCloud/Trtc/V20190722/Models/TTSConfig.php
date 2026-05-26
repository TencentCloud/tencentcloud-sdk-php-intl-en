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
 * TTS configuration.
 *
 * @method string getVoiceId() Obtain Voice type ID.
 * @method void setVoiceId(string $VoiceId) Set Voice type ID.
 * @method string getModel() Obtain TTS model: flow_01_turbo is selected by default. options: [flow_01_turbo, flow_01_ex].
 * @method void setModel(string $Model) Set TTS model: flow_01_turbo is selected by default. options: [flow_01_turbo, flow_01_ex].
 * @method float getSpeed() Obtain Speaking rate. value range: 0.5-2.0. default: 1.0.
 * @method void setSpeed(float $Speed) Set Speaking rate. value range: 0.5-2.0. default: 1.0.
 * @method float getVolume() Obtain Value range: (0, 10]. default value: 1.0.
 * @method void setVolume(float $Volume) Set Value range: (0, 10]. default value: 1.0.
 */
class TTSConfig extends AbstractModel
{
    /**
     * @var string Voice type ID.
     */
    public $VoiceId;

    /**
     * @var string TTS model: flow_01_turbo is selected by default. options: [flow_01_turbo, flow_01_ex].
     */
    public $Model;

    /**
     * @var float Speaking rate. value range: 0.5-2.0. default: 1.0.
     */
    public $Speed;

    /**
     * @var float Value range: (0, 10]. default value: 1.0.
     */
    public $Volume;

    /**
     * @param string $VoiceId Voice type ID.
     * @param string $Model TTS model: flow_01_turbo is selected by default. options: [flow_01_turbo, flow_01_ex].
     * @param float $Speed Speaking rate. value range: 0.5-2.0. default: 1.0.
     * @param float $Volume Value range: (0, 10]. default value: 1.0.
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

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
