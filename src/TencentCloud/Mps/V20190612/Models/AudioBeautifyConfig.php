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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Volume beautification configuration
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
 * @method array getTypes() Obtain <p>Type. Multiple selections allowed. Available values:</p><li>declick: noise removal</li><li>deesser: de-ess</li>Default value: declick.
 * @method void setTypes(array $Types) Set <p>Type. Multiple selections allowed. Available values:</p><li>declick: noise removal</li><li>deesser: de-ess</li>Default value: declick.
 */
class AudioBeautifyConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
     */
    public $Switch;

    /**
     * @var array <p>Type. Multiple selections allowed. Available values:</p><li>declick: noise removal</li><li>deesser: de-ess</li>Default value: declick.
     */
    public $Types;

    /**
     * @param string $Switch <p>Capability configuration switch. Available values: </p><li>ON: Enable;</li><li>OFF: Disable.</li>Default value: ON.
     * @param array $Types <p>Type. Multiple selections allowed. Available values:</p><li>declick: noise removal</li><li>deesser: de-ess</li>Default value: declick.
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

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }
    }
}
