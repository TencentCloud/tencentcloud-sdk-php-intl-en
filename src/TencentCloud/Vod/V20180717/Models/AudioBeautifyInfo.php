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
 * The audio improvement configuration.
 *
 * @method string getSwitch() Obtain Whether to enable audio improvement. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `OFF`.
 * @method void setSwitch(string $Switch) Set Whether to enable audio improvement. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `OFF`.
 * @method array getTypes() Obtain The audio improvement options. You can specify multiple options. Valid values:
<li>`declick`: Noise removal.</li>
<li>`deesser`: De-essing.</li>
Default: `declick`.
 * @method void setTypes(array $Types) Set The audio improvement options. You can specify multiple options. Valid values:
<li>`declick`: Noise removal.</li>
<li>`deesser`: De-essing.</li>
Default: `declick`.
 */
class AudioBeautifyInfo extends AbstractModel
{
    /**
     * @var string Whether to enable audio improvement. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `OFF`.
     */
    public $Switch;

    /**
     * @var array The audio improvement options. You can specify multiple options. Valid values:
<li>`declick`: Noise removal.</li>
<li>`deesser`: De-essing.</li>
Default: `declick`.
     */
    public $Types;

    /**
     * @param string $Switch Whether to enable audio improvement. Valid values:
<li>`ON`</li>
<li>`OFF` </li>
Default value: `OFF`.
     * @param array $Types The audio improvement options. You can specify multiple options. Valid values:
<li>`declick`: Noise removal.</li>
<li>`deesser`: De-essing.</li>
Default: `declick`.
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
