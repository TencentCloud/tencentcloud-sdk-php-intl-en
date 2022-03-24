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
 * TESHD parameter configuration.
 *
 * @method string getType() Obtain TESHD transcoding type. Valid values: <li>TEHD-100</li> <li>OFF (default)</li>
 * @method void setType(string $Type) Set TESHD transcoding type. Valid values: <li>TEHD-100</li> <li>OFF (default)</li>
 * @method integer getMaxVideoBitrate() Obtain Maximum bitrate, which is valid when `Type` is `TESHD`.
If this parameter is left blank or 0 is entered, there will be no upper limit for bitrate.
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) Set Maximum bitrate, which is valid when `Type` is `TESHD`.
If this parameter is left blank or 0 is entered, there will be no upper limit for bitrate.
 */
class TEHDConfig extends AbstractModel
{
    /**
     * @var string TESHD transcoding type. Valid values: <li>TEHD-100</li> <li>OFF (default)</li>
     */
    public $Type;

    /**
     * @var integer Maximum bitrate, which is valid when `Type` is `TESHD`.
If this parameter is left blank or 0 is entered, there will be no upper limit for bitrate.
     */
    public $MaxVideoBitrate;

    /**
     * @param string $Type TESHD transcoding type. Valid values: <li>TEHD-100</li> <li>OFF (default)</li>
     * @param integer $MaxVideoBitrate Maximum bitrate, which is valid when `Type` is `TESHD`.
If this parameter is left blank or 0 is entered, there will be no upper limit for bitrate.
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
