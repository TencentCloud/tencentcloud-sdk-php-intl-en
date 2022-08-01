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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cross-border origin-pull optimization configuration. This is disabled by default. (This feature is in beta and not generally available yet.)
 *
 * @method string getSwitch() Obtain Cross-border origin-pull optimization configuration switch
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Cross-border origin-pull optimization configuration switch
`on`: Enable
`off`: Disable
 * @method string getOptimizationType() Obtain Cross-border types
OVToCN: origin-pull from outside mainland China to inside mainland China
CNToOV: origin-pull from inside mainland China to outside mainland China
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOptimizationType(string $OptimizationType) Set Cross-border types
OVToCN: origin-pull from outside mainland China to inside mainland China
CNToOV: origin-pull from inside mainland China to outside mainland China
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class OriginPullOptimization extends AbstractModel
{
    /**
     * @var string Cross-border origin-pull optimization configuration switch
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var string Cross-border types
OVToCN: origin-pull from outside mainland China to inside mainland China
CNToOV: origin-pull from inside mainland China to outside mainland China
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OptimizationType;

    /**
     * @param string $Switch Cross-border origin-pull optimization configuration switch
`on`: Enable
`off`: Disable
     * @param string $OptimizationType Cross-border types
OVToCN: origin-pull from outside mainland China to inside mainland China
CNToOV: origin-pull from inside mainland China to outside mainland China
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("OptimizationType",$param) and $param["OptimizationType"] !== null) {
            $this->OptimizationType = $param["OptimizationType"];
        }
    }
}
