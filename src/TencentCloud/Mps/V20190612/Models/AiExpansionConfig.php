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
 * Intelligent image expansion configuration.
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
 * @method string getAspectRatio() Obtain <p>Target ratio, for example "16:9"</p>
 * @method void setAspectRatio(string $AspectRatio) Set <p>Target ratio, for example "16:9"</p>
 * @method integer getWidth() Obtain <p>Target width (pixel)</p><p>Value ranges from 0 to 2048.</p>
 * @method void setWidth(integer $Width) Set <p>Target width (pixel)</p><p>Value ranges from 0 to 2048.</p>
 * @method integer getHeight() Obtain <p>Target height (pixel)</p><p>Value ranges from 0 to 2048.</p>
 * @method void setHeight(integer $Height) Set <p>Target height (pixel)</p><p>Value ranges from 0 to 2048.</p>
 */
class AiExpansionConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
     */
    public $Switch;

    /**
     * @var string <p>Target ratio, for example "16:9"</p>
     */
    public $AspectRatio;

    /**
     * @var integer <p>Target width (pixel)</p><p>Value ranges from 0 to 2048.</p>
     */
    public $Width;

    /**
     * @var integer <p>Target height (pixel)</p><p>Value ranges from 0 to 2048.</p>
     */
    public $Height;

    /**
     * @param string $Switch <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
     * @param string $AspectRatio <p>Target ratio, for example "16:9"</p>
     * @param integer $Width <p>Target width (pixel)</p><p>Value ranges from 0 to 2048.</p>
     * @param integer $Height <p>Target height (pixel)</p><p>Value ranges from 0 to 2048.</p>
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

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}
