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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timbre parameters
 *
 * @method integer getVoiceType() Obtain Public cloud timbre id
 * @method void setVoiceType(integer $VoiceType) Set Public cloud timbre id
 * @method string getTimbreKey() Obtain Timbre key
 * @method void setTimbreKey(string $TimbreKey) Set Timbre key
 * @method string getVoiceName() Obtain Timbre name.
 * @method void setVoiceName(string $VoiceName) Set Timbre name.
 */
class VoiceConfig extends AbstractModel
{
    /**
     * @var integer Public cloud timbre id
     */
    public $VoiceType;

    /**
     * @var string Timbre key
     */
    public $TimbreKey;

    /**
     * @var string Timbre name.
     */
    public $VoiceName;

    /**
     * @param integer $VoiceType Public cloud timbre id
     * @param string $TimbreKey Timbre key
     * @param string $VoiceName Timbre name.
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
        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }
    }
}
