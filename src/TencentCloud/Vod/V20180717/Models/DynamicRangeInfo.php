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
 * Visual dynamic range information.
 *
 * @method string getType() Obtain Frame dynamic range information. Valid values:
<li>SDR: Standard Dynamic Range;</li>
<li>HDR: High Dynamic Range.</li>
 * @method void setType(string $Type) Set Frame dynamic range information. Valid values:
<li>SDR: Standard Dynamic Range;</li>
<li>HDR: High Dynamic Range.</li>
 * @method string getHDRType() Obtain High dynamic range type. Valid when Type is HDR. Currently supports the following valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>
 * @method void setHDRType(string $HDRType) Set High dynamic range type. Valid when Type is HDR. Currently supports the following valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>
 */
class DynamicRangeInfo extends AbstractModel
{
    /**
     * @var string Frame dynamic range information. Valid values:
<li>SDR: Standard Dynamic Range;</li>
<li>HDR: High Dynamic Range.</li>
     */
    public $Type;

    /**
     * @var string High dynamic range type. Valid when Type is HDR. Currently supports the following valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>
     */
    public $HDRType;

    /**
     * @param string $Type Frame dynamic range information. Valid values:
<li>SDR: Standard Dynamic Range;</li>
<li>HDR: High Dynamic Range.</li>
     * @param string $HDRType High dynamic range type. Valid when Type is HDR. Currently supports the following valid values:
<li>hdr10: refers to the hdr10 standard;</li>
<li>hlg: refers to the hlg standard.</li>
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
