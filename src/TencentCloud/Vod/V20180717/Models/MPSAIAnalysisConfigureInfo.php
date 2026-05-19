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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MPS intelligent analysis template configuration options
 *
 * @method string getSwitch() Obtain <p>Task switch for intelligent classification. Available values: <li>ON: Enable intelligent classification task;</li> <li>OFF: Disable intelligent classification task.</li></p>
 * @method void setSwitch(string $Switch) Set <p>Task switch for intelligent classification. Available values: <li>ON: Enable intelligent classification task;</li> <li>OFF: Disable intelligent classification task.</li></p>
 */
class MPSAIAnalysisConfigureInfo extends AbstractModel
{
    /**
     * @var string <p>Task switch for intelligent classification. Available values: <li>ON: Enable intelligent classification task;</li> <li>OFF: Disable intelligent classification task.</li></p>
     */
    public $Switch;

    /**
     * @param string $Switch <p>Task switch for intelligent classification. Available values: <li>ON: Enable intelligent classification task;</li> <li>OFF: Disable intelligent classification task.</li></p>
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
    }
}
