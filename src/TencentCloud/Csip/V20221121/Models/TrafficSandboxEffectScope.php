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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Effective scope of the traffic sandbox rule
 *
 * @method string getEffectType() Obtain Effective mode
Enumeration values:
INCLUDE: specified asset takes effect
EXCLUDE: Remove the specified asset (all take effect by default)
 * @method void setEffectType(string $EffectType) Set Effective mode
Enumeration values:
INCLUDE: specified asset takes effect
EXCLUDE: Remove the specified asset (all take effect by default)
 * @method array getEffectAssets() Obtain List of effective assets
Input parameter limits: required and non-empty when EffectType=INCLUDE; an empty array can be passed when EffectType=EXCLUDE.
 * @method void setEffectAssets(array $EffectAssets) Set List of effective assets
Input parameter limits: required and non-empty when EffectType=INCLUDE; an empty array can be passed when EffectType=EXCLUDE.
 */
class TrafficSandboxEffectScope extends AbstractModel
{
    /**
     * @var string Effective mode
Enumeration values:
INCLUDE: specified asset takes effect
EXCLUDE: Remove the specified asset (all take effect by default)
     */
    public $EffectType;

    /**
     * @var array List of effective assets
Input parameter limits: required and non-empty when EffectType=INCLUDE; an empty array can be passed when EffectType=EXCLUDE.
     */
    public $EffectAssets;

    /**
     * @param string $EffectType Effective mode
Enumeration values:
INCLUDE: specified asset takes effect
EXCLUDE: Remove the specified asset (all take effect by default)
     * @param array $EffectAssets List of effective assets
Input parameter limits: required and non-empty when EffectType=INCLUDE; an empty array can be passed when EffectType=EXCLUDE.
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
        if (array_key_exists("EffectType",$param) and $param["EffectType"] !== null) {
            $this->EffectType = $param["EffectType"];
        }

        if (array_key_exists("EffectAssets",$param) and $param["EffectAssets"] !== null) {
            $this->EffectAssets = [];
            foreach ($param["EffectAssets"] as $key => $value){
                $obj = new TrafficSandboxAssetScope();
                $obj->deserialize($value);
                array_push($this->EffectAssets, $obj);
            }
        }
    }
}
