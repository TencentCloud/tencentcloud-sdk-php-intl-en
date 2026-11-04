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
 * Expiration policy (validity time and behavior after the validity period expires)
 *
 * @method EffectivePeriod getEffectivePeriod() Obtain <p>Validity time</p>
 * @method void setEffectivePeriod(EffectivePeriod $EffectivePeriod) Set <p>Validity time</p>
 * @method integer getExpireBehavior() Obtain <p>Behavior after the validity period expires: 1=NOT_RETRIEVABLE cannot be retrieved, 2=RETRIEVABLE can still be retrieved; meaningless for permanent validity<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>EXPIRE_BEHAVIOR_UNKNOWN</td><td>0</td><td>Unspecified (server uses the default process)</td></tr><tr><td>EXPIRE_BEHAVIOR_NOT_RETRIEVABLE</td><td>1</td><td>Cannot be retrieved (removed upon expiration)</td></tr><tr><td>EXPIRE_BEHAVIOR_RETRIEVABLE</td><td>2</td><td>Can still be retrieved (not removed upon expiration, only the validity period is tagged)</td></tr></tbody></table></p>
 * @method void setExpireBehavior(integer $ExpireBehavior) Set <p>Behavior after the validity period expires: 1=NOT_RETRIEVABLE cannot be retrieved, 2=RETRIEVABLE can still be retrieved; meaningless for permanent validity<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>EXPIRE_BEHAVIOR_UNKNOWN</td><td>0</td><td>Unspecified (server uses the default process)</td></tr><tr><td>EXPIRE_BEHAVIOR_NOT_RETRIEVABLE</td><td>1</td><td>Cannot be retrieved (removed upon expiration)</td></tr><tr><td>EXPIRE_BEHAVIOR_RETRIEVABLE</td><td>2</td><td>Can still be retrieved (not removed upon expiration, only the validity period is tagged)</td></tr></tbody></table></p>
 */
class ExpirationPolicy extends AbstractModel
{
    /**
     * @var EffectivePeriod <p>Validity time</p>
     */
    public $EffectivePeriod;

    /**
     * @var integer <p>Behavior after the validity period expires: 1=NOT_RETRIEVABLE cannot be retrieved, 2=RETRIEVABLE can still be retrieved; meaningless for permanent validity<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>EXPIRE_BEHAVIOR_UNKNOWN</td><td>0</td><td>Unspecified (server uses the default process)</td></tr><tr><td>EXPIRE_BEHAVIOR_NOT_RETRIEVABLE</td><td>1</td><td>Cannot be retrieved (removed upon expiration)</td></tr><tr><td>EXPIRE_BEHAVIOR_RETRIEVABLE</td><td>2</td><td>Can still be retrieved (not removed upon expiration, only the validity period is tagged)</td></tr></tbody></table></p>
     */
    public $ExpireBehavior;

    /**
     * @param EffectivePeriod $EffectivePeriod <p>Validity time</p>
     * @param integer $ExpireBehavior <p>Behavior after the validity period expires: 1=NOT_RETRIEVABLE cannot be retrieved, 2=RETRIEVABLE can still be retrieved; meaningless for permanent validity<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>EXPIRE_BEHAVIOR_UNKNOWN</td><td>0</td><td>Unspecified (server uses the default process)</td></tr><tr><td>EXPIRE_BEHAVIOR_NOT_RETRIEVABLE</td><td>1</td><td>Cannot be retrieved (removed upon expiration)</td></tr><tr><td>EXPIRE_BEHAVIOR_RETRIEVABLE</td><td>2</td><td>Can still be retrieved (not removed upon expiration, only the validity period is tagged)</td></tr></tbody></table></p>
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
        if (array_key_exists("EffectivePeriod",$param) and $param["EffectivePeriod"] !== null) {
            $this->EffectivePeriod = new EffectivePeriod();
            $this->EffectivePeriod->deserialize($param["EffectivePeriod"]);
        }

        if (array_key_exists("ExpireBehavior",$param) and $param["ExpireBehavior"] !== null) {
            $this->ExpireBehavior = $param["ExpireBehavior"];
        }
    }
}
