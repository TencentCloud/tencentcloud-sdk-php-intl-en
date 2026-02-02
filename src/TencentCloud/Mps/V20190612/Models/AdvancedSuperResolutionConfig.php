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
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
 * @method string getType() Obtain Type. Valid values:<li>standard: standard super-resolution.</li><li>super: super advanced super-resolution.</li><li>ultra: ultra advanced super-resolution.</li>Default value: standard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type. Valid values:<li>standard: standard super-resolution.</li><li>super: super advanced super-resolution.</li><li>ultra: ultra advanced super-resolution.</li>Default value: standard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMode() Obtain Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMode(string $Mode) Set Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getPercent() Obtain Scale factor of super-resolution, which can be a decimal.Note: This is used when Mode is percent.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(float $Percent) Set Scale factor of super-resolution, which can be a decimal.Note: This is used when Mode is percent.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Width of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWidth(integer $Width) Set Width of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHeight() Obtain Height of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeight(integer $Height) Set Height of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLongSide() Obtain Long side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLongSide(integer $LongSide) Set Long side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShortSide() Obtain Short side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShortSide(integer $ShortSide) Set Short side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
 */
class AdvancedSuperResolutionConfig extends AbstractModel
{
    /**
     * @var string Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string Type. Valid values:<li>standard: standard super-resolution.</li><li>super: super advanced super-resolution.</li><li>ultra: ultra advanced super-resolution.</li>Default value: standard.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mode;

    /**
     * @var float Scale factor of super-resolution, which can be a decimal.Note: This is used when Mode is percent.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @var integer Width of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Width;

    /**
     * @var integer Height of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Height;

    /**
     * @var integer Long side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LongSide;

    /**
     * @var integer Short side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShortSide;

    /**
     * @param string $Switch Capability configuration switch. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
     * @param string $Type Type. Valid values:<li>standard: standard super-resolution.</li><li>super: super advanced super-resolution.</li><li>ultra: ultra advanced super-resolution.</li>Default value: standard.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mode Image output mode. The default value is percent.
<li>aspect: obtain a larger rectangle with specified width and height through super-resolution.</li>
<li>fixed: obtain images of fixed width and height through super-resolution, with forced scaling supported.</li>
<li>percent: magnification factor of super-resolution, which can be a decimal.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Percent Scale factor of super-resolution, which can be a decimal.Note: This is used when Mode is percent.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Width of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Height Height of the target image. The value cannot exceed 4096.Note: When Mode is aspect or fixed, this configuration takes priority.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LongSide Long side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShortSide Short side length of the target image. The value cannot exceed 4096.Note: This configuration is used when Mode is aspect or fixed and the Width and Height fields are not specified.Note: This field may return null, indicating that no valid values can be obtained.
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
