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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Suspected attack detail
 *
 * @method string getType() Obtain Suspected attack trace types
SuspectedSpoofingAttack: Suspected spoofing attack
 SuspectedSynthesisImage: Suspected synthesis image SuspectedSynthesisVideo: Suspected synthesis video SuspectedeAnomalyAttack: Suspected anomaly attack SuspectedAdversarialAttack: Suspected adversarial attack SuspectedBlackIndustry: Suspected batch generation attack
SuspectedWatermark: Suspected watermark
 * @method void setType(string $Type) Set Suspected attack trace types
SuspectedSpoofingAttack: Suspected spoofing attack
 SuspectedSynthesisImage: Suspected synthesis image SuspectedSynthesisVideo: Suspected synthesis video SuspectedeAnomalyAttack: Suspected anomaly attack SuspectedAdversarialAttack: Suspected adversarial attack SuspectedBlackIndustry: Suspected batch generation attack
SuspectedWatermark: Suspected watermark
 */
class AttackRiskDetail extends AbstractModel
{
    /**
     * @var string Suspected attack trace types
SuspectedSpoofingAttack: Suspected spoofing attack
 SuspectedSynthesisImage: Suspected synthesis image SuspectedSynthesisVideo: Suspected synthesis video SuspectedeAnomalyAttack: Suspected anomaly attack SuspectedAdversarialAttack: Suspected adversarial attack SuspectedBlackIndustry: Suspected batch generation attack
SuspectedWatermark: Suspected watermark
     */
    public $Type;

    /**
     * @param string $Type Suspected attack trace types
SuspectedSpoofingAttack: Suspected spoofing attack
 SuspectedSynthesisImage: Suspected synthesis image SuspectedSynthesisVideo: Suspected synthesis video SuspectedeAnomalyAttack: Suspected anomaly attack SuspectedAdversarialAttack: Suspected adversarial attack SuspectedBlackIndustry: Suspected batch generation attack
SuspectedWatermark: Suspected watermark
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
    }
}
