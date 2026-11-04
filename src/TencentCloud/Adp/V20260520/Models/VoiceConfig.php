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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VoiceConfig
 *
 * @method string getTimbreKey() Obtain Digital human tone key, which needs to align with the public cloud voice type id.
 * @method void setTimbreKey(string $TimbreKey) Set Digital human tone key, which needs to align with the public cloud voice type id.
 * @method string getVoiceName() Obtain Timbre name
 * @method void setVoiceName(string $VoiceName) Set Timbre name
 * @method integer getVoiceType() Obtain Public cloud timbre id
 * @method void setVoiceType(integer $VoiceType) Set Public cloud timbre id
 */
class VoiceConfig extends AbstractModel
{
    /**
     * @var string Digital human tone key, which needs to align with the public cloud voice type id.
     */
    public $TimbreKey;

    /**
     * @var string Timbre name
     */
    public $VoiceName;

    /**
     * @var integer Public cloud timbre id
     */
    public $VoiceType;

    /**
     * @param string $TimbreKey Digital human tone key, which needs to align with the public cloud voice type id.
     * @param string $VoiceName Timbre name
     * @param integer $VoiceType Public cloud timbre id
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
        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }
    }
}
