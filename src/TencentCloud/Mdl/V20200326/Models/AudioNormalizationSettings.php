<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Special configuration information for audio transcoding.
 *
 * @method integer getAudioNormalizationEnabled() Obtain Whether to enable special configuration for audio transcoding: 1: Enable 0: Disable, the default value is 0.
 * @method void setAudioNormalizationEnabled(integer $AudioNormalizationEnabled) Set Whether to enable special configuration for audio transcoding: 1: Enable 0: Disable, the default value is 0.
 * @method float getTargetLUFS() Obtain Loudness value, floating-point number, rounded to one decimal place, range -5 to -70.
 * @method void setTargetLUFS(float $TargetLUFS) Set Loudness value, floating-point number, rounded to one decimal place, range -5 to -70.
 */
class AudioNormalizationSettings extends AbstractModel
{
    /**
     * @var integer Whether to enable special configuration for audio transcoding: 1: Enable 0: Disable, the default value is 0.
     */
    public $AudioNormalizationEnabled;

    /**
     * @var float Loudness value, floating-point number, rounded to one decimal place, range -5 to -70.
     */
    public $TargetLUFS;

    /**
     * @param integer $AudioNormalizationEnabled Whether to enable special configuration for audio transcoding: 1: Enable 0: Disable, the default value is 0.
     * @param float $TargetLUFS Loudness value, floating-point number, rounded to one decimal place, range -5 to -70.
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
        if (array_key_exists("AudioNormalizationEnabled",$param) and $param["AudioNormalizationEnabled"] !== null) {
            $this->AudioNormalizationEnabled = $param["AudioNormalizationEnabled"];
        }

        if (array_key_exists("TargetLUFS",$param) and $param["TargetLUFS"] !== null) {
            $this->TargetLUFS = $param["TargetLUFS"];
        }
    }
}
