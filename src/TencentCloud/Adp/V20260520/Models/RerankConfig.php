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
 * Rearrange the configuration
 *
 * @method boolean getEnabled() Obtain <p>Whether to enable</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable</p>
 * @method string getModelName() Obtain <p>Model name</p>
 * @method void setModelName(string $ModelName) Set <p>Model name</p>
 */
class RerankConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enabled;

    /**
     * @var string <p>Model name</p>
     */
    public $ModelName;

    /**
     * @param boolean $Enabled <p>Whether to enable</p>
     * @param string $ModelName <p>Model name</p>
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

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }
    }
}
