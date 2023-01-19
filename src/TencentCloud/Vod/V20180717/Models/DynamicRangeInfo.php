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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamic range information.
 *
 * @method string getType() Obtain The dynamic range information. Valid values:
<li>`SDR`: Standard Dynamic Range</li>
<li>`HDR`: High Dynamic Range</li>
 * @method void setType(string $Type) Set The dynamic range information. Valid values:
<li>`SDR`: Standard Dynamic Range</li>
<li>`HDR`: High Dynamic Range</li>
 * @method string getHDRType() Obtain The HDR type. This parameter is valid only if `Type` is `HDR`. Valid values:
<li>`hdr10`</li>
<li>`hlg`</li>
 * @method void setHDRType(string $HDRType) Set The HDR type. This parameter is valid only if `Type` is `HDR`. Valid values:
<li>`hdr10`</li>
<li>`hlg`</li>
 */
class DynamicRangeInfo extends AbstractModel
{
    /**
     * @var string The dynamic range information. Valid values:
<li>`SDR`: Standard Dynamic Range</li>
<li>`HDR`: High Dynamic Range</li>
     */
    public $Type;

    /**
     * @var string The HDR type. This parameter is valid only if `Type` is `HDR`. Valid values:
<li>`hdr10`</li>
<li>`hlg`</li>
     */
    public $HDRType;

    /**
     * @param string $Type The dynamic range information. Valid values:
<li>`SDR`: Standard Dynamic Range</li>
<li>`HDR`: High Dynamic Range</li>
     * @param string $HDRType The HDR type. This parameter is valid only if `Type` is `HDR`. Valid values:
<li>`hdr10`</li>
<li>`hlg`</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HDRType",$param) and $param["HDRType"] !== null) {
            $this->HDRType = $param["HDRType"];
        }
    }
}
