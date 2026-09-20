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
 * Object recognition task control parameters
 *
 * @method string getSwitch() Obtain Object recognition task switch. Available values:
<li>ON: enable the intelligent object recognition task;</li>
<li>OFF: Disable the intelligent object recognition task.</li>
 * @method void setSwitch(string $Switch) Set Object recognition task switch. Available values:
<li>ON: enable the intelligent object recognition task;</li>
<li>OFF: Disable the intelligent object recognition task.</li>
 * @method string getObjectLibrary() Obtain Object library selection. Valid values:
<li>Default: use the default object library;</li>
<li>UserDefine: Use the user-defined object library.</li>
<li>All: Use both the default object library and the user-defined object library.</li>
Default value: All. The default object library and user-defined object library are used simultaneously.
 * @method void setObjectLibrary(string $ObjectLibrary) Set Object library selection. Valid values:
<li>Default: use the default object library;</li>
<li>UserDefine: Use the user-defined object library.</li>
<li>All: Use both the default object library and the user-defined object library.</li>
Default value: All. The default object library and user-defined object library are used simultaneously.
 */
class ObjectConfigureInfo extends AbstractModel
{
    /**
     * @var string Object recognition task switch. Available values:
<li>ON: enable the intelligent object recognition task;</li>
<li>OFF: Disable the intelligent object recognition task.</li>
     */
    public $Switch;

    /**
     * @var string Object library selection. Valid values:
<li>Default: use the default object library;</li>
<li>UserDefine: Use the user-defined object library.</li>
<li>All: Use both the default object library and the user-defined object library.</li>
Default value: All. The default object library and user-defined object library are used simultaneously.
     */
    public $ObjectLibrary;

    /**
     * @param string $Switch Object recognition task switch. Available values:
<li>ON: enable the intelligent object recognition task;</li>
<li>OFF: Disable the intelligent object recognition task.</li>
     * @param string $ObjectLibrary Object library selection. Valid values:
<li>Default: use the default object library;</li>
<li>UserDefine: Use the user-defined object library.</li>
<li>All: Use both the default object library and the user-defined object library.</li>
Default value: All. The default object library and user-defined object library are used simultaneously.
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

        if (array_key_exists("ObjectLibrary",$param) and $param["ObjectLibrary"] !== null) {
            $this->ObjectLibrary = $param["ObjectLibrary"];
        }
    }
}
