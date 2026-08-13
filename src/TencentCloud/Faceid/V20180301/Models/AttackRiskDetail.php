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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Suspected attack detail
 *
 * @method string getType() Obtain <p>Suspected attack trace type, specific type as follows:<br>SuspectedSpoofingAttack: Re-photography Attack<br>SuspectedSynthesisImage: Suspected synthesized image<br>SuspectedSynthesisVideo: Suspected synthesized video<br>SuspectedAnomalyAttack: Facial features suspected of not being real<br>SuspectedAdversarialAttack: Suspected adversarial sample attack<br>SuspectedBlackIndustry: Suspected black industry batch Template attack<br>SuspectedWatermark: Suspected watermark</p>
 * @method void setType(string $Type) Set <p>Suspected attack trace type, specific type as follows:<br>SuspectedSpoofingAttack: Re-photography Attack<br>SuspectedSynthesisImage: Suspected synthesized image<br>SuspectedSynthesisVideo: Suspected synthesized video<br>SuspectedAnomalyAttack: Facial features suspected of not being real<br>SuspectedAdversarialAttack: Suspected adversarial sample attack<br>SuspectedBlackIndustry: Suspected black industry batch Template attack<br>SuspectedWatermark: Suspected watermark</p>
 */
class AttackRiskDetail extends AbstractModel
{
    /**
     * @var string <p>Suspected attack trace type, specific type as follows:<br>SuspectedSpoofingAttack: Re-photography Attack<br>SuspectedSynthesisImage: Suspected synthesized image<br>SuspectedSynthesisVideo: Suspected synthesized video<br>SuspectedAnomalyAttack: Facial features suspected of not being real<br>SuspectedAdversarialAttack: Suspected adversarial sample attack<br>SuspectedBlackIndustry: Suspected black industry batch Template attack<br>SuspectedWatermark: Suspected watermark</p>
     */
    public $Type;

    /**
     * @param string $Type <p>Suspected attack trace type, specific type as follows:<br>SuspectedSpoofingAttack: Re-photography Attack<br>SuspectedSynthesisImage: Suspected synthesized image<br>SuspectedSynthesisVideo: Suspected synthesized video<br>SuspectedAnomalyAttack: Facial features suspected of not being real<br>SuspectedAdversarialAttack: Suspected adversarial sample attack<br>SuspectedBlackIndustry: Suspected black industry batch Template attack<br>SuspectedWatermark: Suspected watermark</p>
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
