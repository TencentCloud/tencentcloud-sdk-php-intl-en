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
 * The information of a digital watermark.
 *
 * @method string getSwitch() Obtain Whether to use digital watermarks. This parameter is required. Valid values:
<li>ON</li>
<li>OFF</li>
 * @method void setSwitch(string $Switch) Set Whether to use digital watermarks. This parameter is required. Valid values:
<li>ON</li>
<li>OFF</li>
 * @method integer getDefinition() Obtain This parameter has been deprecated.
 * @method void setDefinition(integer $Definition) Set This parameter has been deprecated.
 */
class TraceWatermarkInput extends AbstractModel
{
    /**
     * @var string Whether to use digital watermarks. This parameter is required. Valid values:
<li>ON</li>
<li>OFF</li>
     */
    public $Switch;

    /**
     * @var integer This parameter has been deprecated.
     * @deprecated
     */
    public $Definition;

    /**
     * @param string $Switch Whether to use digital watermarks. This parameter is required. Valid values:
<li>ON</li>
<li>OFF</li>
     * @param integer $Definition This parameter has been deprecated.
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
