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
 * Super-resolution configuration.
 *
 * @method string getSwitch() Obtain Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
 * @method string getType() Obtain Type. Valid values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution super version.</li>
<li>ultra: Advanced super resolution ultra version.</li>
Default value: standard.
 * @method void setType(string $Type) Set Type. Valid values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution super version.</li>
<li>ultra: Advanced super resolution ultra version.</li>
Default value: standard.
 * @method string getMode() Obtain Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
 * @method void setMode(string $Mode) Set Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
 * @method float getPercent() Obtain Super resolution multiplication rate, which can be a decimal.
Note: Used when Mode is equal to percent.
 * @method void setPercent(float $Percent) Set Super resolution multiplication rate, which can be a decimal.
Note: Used when Mode is equal to percent.
 * @method integer getWidth() Obtain Target image width. Cannot exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
 * @method void setWidth(integer $Width) Set Target image width. Cannot exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
 * @method integer getHeight() Obtain Target image height. Must not exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
 * @method void setHeight(integer $Height) Set Target image height. Must not exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
 * @method integer getLongSide() Obtain Long side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
 * @method void setLongSide(integer $LongSide) Set Long side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
 * @method integer getShortSide() Obtain Short side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
 * @method void setShortSide(integer $ShortSide) Set Short side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
 */
class AdvancedSuperResolutionConfig extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string Type. Valid values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution super version.</li>
<li>ultra: Advanced super resolution ultra version.</li>
Default value: standard.
     */
    public $Type;

    /**
     * @var string Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
     */
    public $Mode;

    /**
     * @var float Super resolution multiplication rate, which can be a decimal.
Note: Used when Mode is equal to percent.
     */
    public $Percent;

    /**
     * @var integer Target image width. Cannot exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
     */
    public $Width;

    /**
     * @var integer Target image height. Must not exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
     */
    public $Height;

    /**
     * @var integer Long side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
     */
    public $LongSide;

    /**
     * @var integer Short side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
     */
    public $ShortSide;

    /**
     * @param string $Switch Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: disabled</li>
Default value: ON.
     * @param string $Type Type. Valid values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution super version.</li>
<li>ultra: Advanced super resolution ultra version.</li>
Default value: standard.
     * @param string $Mode Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
     * @param float $Percent Super resolution multiplication rate, which can be a decimal.
Note: Used when Mode is equal to percent.
     * @param integer $Width Target image width. Cannot exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
     * @param integer $Height Target image height. Must not exceed 4096.
Note: When Mode is equal to aspect or fixed, preferentially use this configuration.
     * @param integer $LongSide Long side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
     * @param integer $ShortSide Short side length of the target image. Must not exceed 4096.
Note: This configuration is used when Mode is equal to aspect or fixed, and Width and Height fields are not configured.
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("LongSide",$param) and $param["LongSide"] !== null) {
            $this->LongSide = $param["LongSide"];
        }

        if (array_key_exists("ShortSide",$param) and $param["ShortSide"] !== null) {
            $this->ShortSide = $param["ShortSide"];
        }
    }
}
