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
 * InstallSandboxPlugin request structure.
 *
 * @method string getBelongAssetType() Obtain Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
 * @method void setBelongAssetType(string $BelongAssetType) Set Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
 * @method TrafficSandboxEffectScope getEffectScope() Obtain Installation target range
Input parameter limits: If EffectType is INCLUDE, EffectAssets must not be empty. If EffectType is EXCLUDE, EffectAssets can be an empty array (meaning deployment to all AI Agent assets).
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) Set Installation target range
Input parameter limits: If EffectType is INCLUDE, EffectAssets must not be empty. If EffectType is EXCLUDE, EffectAssets can be an empty array (meaning deployment to all AI Agent assets).
 */
class InstallSandboxPluginRequest extends AbstractModel
{
    /**
     * @var string Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope Installation target range
Input parameter limits: If EffectType is INCLUDE, EffectAssets must not be empty. If EffectType is EXCLUDE, EffectAssets can be an empty array (meaning deployment to all AI Agent assets).
     */
    public $EffectScope;

    /**
     * @param string $BelongAssetType Asset type to which it belongs
Enumeration values:
HOST: HOST
CONTAINER: Container
     * @param TrafficSandboxEffectScope $EffectScope Installation target range
Input parameter limits: If EffectType is INCLUDE, EffectAssets must not be empty. If EffectType is EXCLUDE, EffectAssets can be an empty array (meaning deployment to all AI Agent assets).
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
        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }
    }
}
