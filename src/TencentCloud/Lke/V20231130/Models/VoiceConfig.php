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
 * Timbre Parameters
 *
 * @method integer getVoiceType() Obtain Public Cloud Timbre ID
 * @method void setVoiceType(integer $VoiceType) Set Public Cloud Timbre ID
 * @method string getTimbreKey() Obtain Timbre Key
 * @method void setTimbreKey(string $TimbreKey) Set Timbre Key
 * @method string getVoiceName() Obtain Timbre Name
 * @method void setVoiceName(string $VoiceName) Set Timbre Name
 */
class VoiceConfig extends AbstractModel
{
    /**
     * @var integer Public Cloud Timbre ID
     */
    public $VoiceType;

    /**
     * @var string Timbre Key
     */
    public $TimbreKey;

    /**
     * @var string Timbre Name
     */
    public $VoiceName;

    /**
     * @param integer $VoiceType Public Cloud Timbre ID
     * @param string $TimbreKey Timbre Key
     * @param string $VoiceName Timbre Name
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
