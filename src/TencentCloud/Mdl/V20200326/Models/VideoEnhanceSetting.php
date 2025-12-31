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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VideoEnhanceSetting
 *
 * @method string getType() Obtain Video enhancement types, optional: "GameEnhance", "ColorEnhance", "Debur", "Comprehensive", "Denoising", "SR", "OutdoorSportsCompetitions", "IndoorSportsCompetitions", "ShowEnhance"
 * @method void setType(string $Type) Set Video enhancement types, optional: "GameEnhance", "ColorEnhance", "Debur", "Comprehensive", "Denoising", "SR", "OutdoorSportsCompetitions", "IndoorSportsCompetitions", "ShowEnhance"
 * @method float getStrength() Obtain Video enhancement intensity, 0-1.0, granularity 0.1
 * @method void setStrength(float $Strength) Set Video enhancement intensity, 0-1.0, granularity 0.1
 */
class VideoEnhanceSetting extends AbstractModel
{
    /**
     * @var string Video enhancement types, optional: "GameEnhance", "ColorEnhance", "Debur", "Comprehensive", "Denoising", "SR", "OutdoorSportsCompetitions", "IndoorSportsCompetitions", "ShowEnhance"
     */
    public $Type;

    /**
     * @var float Video enhancement intensity, 0-1.0, granularity 0.1
     */
    public $Strength;

    /**
     * @param string $Type Video enhancement types, optional: "GameEnhance", "ColorEnhance", "Debur", "Comprehensive", "Denoising", "SR", "OutdoorSportsCompetitions", "IndoorSportsCompetitions", "ShowEnhance"
     * @param float $Strength Video enhancement intensity, 0-1.0, granularity 0.1
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Strength",$param) and $param["Strength"] !== null) {
            $this->Strength = $param["Strength"];
        }
    }
}
