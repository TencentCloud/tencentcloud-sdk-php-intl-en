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
 * Super-resolution configuration.
 *
 * @method string getSwitch() Obtain Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li>
Default value: ON.
 * @method string getType() Obtain Type, available values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution.</li>
Default value: standard.
 * @method void setType(string $Type) Set Type, available values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution.</li>
Default value: standard.
 * @method string getMode() Obtain Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: Super-resolution multiplication rate, which can be a decimal.</li>
 * @method void setMode(string $Mode) Set Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: Super-resolution multiplication rate, which can be a decimal.</li>
 * @method float getPercent() Obtain Super-resolution multiplication rate, can be decimal.
 * @method void setPercent(float $Percent) Set Super-resolution multiplication rate, can be decimal.
 * @method integer getWidth() Obtain Target image width must not exceed 4096.
 * @method void setWidth(integer $Width) Set Target image width must not exceed 4096.
 * @method integer getHeight() Obtain Target image height must not exceed 4096.
 * @method void setHeight(integer $Height) Set Target image height must not exceed 4096.
 * @method integer getLongSide() Obtain The long edge length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
 * @method void setLongSide(integer $LongSide) Set The long edge length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
 * @method integer getShortSide() Obtain The short side length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
 * @method void setShortSide(integer $ShortSide) Set The short side length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
 */
class AdvancedSuperResolutionConfig extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string Type, available values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution.</li>
Default value: standard.
     */
    public $Type;

    /**
     * @var string Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: Super-resolution multiplication rate, which can be a decimal.</li>
     */
    public $Mode;

    /**
     * @var float Super-resolution multiplication rate, can be decimal.
     */
    public $Percent;

    /**
     * @var integer Target image width must not exceed 4096.
     */
    public $Width;

    /**
     * @var integer Target image height must not exceed 4096.
     */
    public $Height;

    /**
     * @var integer The long edge length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
     */
    public $LongSide;

    /**
     * @var integer The short side length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
     */
    public $ShortSide;

    /**
     * @param string $Switch Capability configuration switch. Valid values:
<li>ON: enabled;</li>
<li>OFF: Disabled.</li>
Default value: ON.
     * @param string $Type Type, available values:
<li>standard: common super resolution</li>
<li>super: advanced super-resolution.</li>
Default value: standard.
     * @param string $Mode Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: Super-resolution multiplication rate, which can be a decimal.</li>
     * @param float $Percent Super-resolution multiplication rate, can be decimal.
     * @param integer $Width Target image width must not exceed 4096.
     * @param integer $Height Target image height must not exceed 4096.
     * @param integer $LongSide The long edge length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
     * @param integer $ShortSide The short side length of the target image must not exceed 4096.
Note: This configuration is used when Mode equals aspect or fixed and the Width and Height fields are unconfigured.
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
