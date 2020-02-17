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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() Obtain TESHD type. Valid values:
<li>TEHD-100: TESHD-100.</li>
If this parameter is left blank, no modification will be made.
 * @method void setType(string $Type) Set TESHD type. Valid values:
<li>TEHD-100: TESHD-100.</li>
If this parameter is left blank, no modification will be made.
 * @method integer getMaxVideoBitrate() Obtain Maximum bitrate. If this parameter is left empty, no modification will be made.
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) Set Maximum bitrate. If this parameter is left empty, no modification will be made.
 */

/**
 *TESHD parameter configuration.
 */
class TEHDConfigForUpdate extends AbstractModel
{
    /**
     * @var string TESHD type. Valid values:
<li>TEHD-100: TESHD-100.</li>
If this parameter is left blank, no modification will be made.
     */
    public $Type;

    /**
     * @var integer Maximum bitrate. If this parameter is left empty, no modification will be made.
     */
    public $MaxVideoBitrate;
    /**
     * @param string $Type TESHD type. Valid values:
<li>TEHD-100: TESHD-100.</li>
If this parameter is left blank, no modification will be made.
     * @param integer $MaxVideoBitrate Maximum bitrate. If this parameter is left empty, no modification will be made.
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

        if (array_key_exists("MaxVideoBitrate",$param) and $param["MaxVideoBitrate"] !== null) {
            $this->MaxVideoBitrate = $param["MaxVideoBitrate"];
        }
    }
}
