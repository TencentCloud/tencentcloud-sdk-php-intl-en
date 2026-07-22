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
 * Image beauty effect item.
 *
 * @method string getSwitch() Obtain <p>Whether to enable beauty effects.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
 * @method void setSwitch(string $Switch) Set <p>Whether to enable beauty effects.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
 * @method string getType() Obtain <p>Beauty option.</p>
 * @method void setType(string $Type) Set <p>Beauty option.</p>
 * @method integer getValue() Obtain <p>Intensity of beauty effects.</p>
 * @method void setValue(integer $Value) Set <p>Intensity of beauty effects.</p>
 * @method string getResourcePath() Obtain <p>Attach the resource path.</p>
 * @method void setResourcePath(string $ResourcePath) Set <p>Attach the resource path.</p>
 * @method string getExtInfo() Obtain <p>Additional information.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Additional information.</p>
 */
class BeautyEffectItem extends AbstractModel
{
    /**
     * @var string <p>Whether to enable beauty effects.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
     */
    public $Switch;

    /**
     * @var string <p>Beauty option.</p>
     */
    public $Type;

    /**
     * @var integer <p>Intensity of beauty effects.</p>
     */
    public $Value;

    /**
     * @var string <p>Attach the resource path.</p>
     */
    public $ResourcePath;

    /**
     * @var string <p>Additional information.</p>
     */
    public $ExtInfo;

    /**
     * @param string $Switch <p>Whether to enable beauty effects.</p><p>Enumeration value:</p><ul><li>ON: On</li><li>OFF: Off</li></ul>
     * @param string $Type <p>Beauty option.</p>
     * @param integer $Value <p>Intensity of beauty effects.</p>
     * @param string $ResourcePath <p>Attach the resource path.</p>
     * @param string $ExtInfo <p>Additional information.</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ResourcePath",$param) and $param["ResourcePath"] !== null) {
            $this->ResourcePath = $param["ResourcePath"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
