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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * git checkout rules
 *
 * @method boolean getEnabled() Obtain <p>Whether to enable sparse detect</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable sparse detect</p>
 * @method boolean getConeMode() Obtain <p>Whether to use cone mode (true recommended for greater efficiency in directory matching)</p>
 * @method void setConeMode(boolean $ConeMode) Set <p>Whether to use cone mode (true recommended for greater efficiency in directory matching)</p>
 * @method array getPatterns() Obtain <p>Sparse checkout path list (for example, ["src/module-a/", "docs/"])</p>
 * @method void setPatterns(array $Patterns) Set <p>Sparse checkout path list (for example, ["src/module-a/", "docs/"])</p>
 */
class SparseCheckoutConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable sparse detect</p>
     */
    public $Enabled;

    /**
     * @var boolean <p>Whether to use cone mode (true recommended for greater efficiency in directory matching)</p>
     */
    public $ConeMode;

    /**
     * @var array <p>Sparse checkout path list (for example, ["src/module-a/", "docs/"])</p>
     */
    public $Patterns;

    /**
     * @param boolean $Enabled <p>Whether to enable sparse detect</p>
     * @param boolean $ConeMode <p>Whether to use cone mode (true recommended for greater efficiency in directory matching)</p>
     * @param array $Patterns <p>Sparse checkout path list (for example, ["src/module-a/", "docs/"])</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ConeMode",$param) and $param["ConeMode"] !== null) {
            $this->ConeMode = $param["ConeMode"];
        }

        if (array_key_exists("Patterns",$param) and $param["Patterns"] !== null) {
            $this->Patterns = $param["Patterns"];
        }
    }
}
