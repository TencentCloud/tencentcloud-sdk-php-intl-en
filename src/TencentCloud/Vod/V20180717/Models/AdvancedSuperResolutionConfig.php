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
 * 
 *
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getMode() Obtain 
 * @method void setMode(string $Mode) Set 
 * @method float getPercent() Obtain 
 * @method void setPercent(float $Percent) Set 
 * @method integer getWidth() Obtain 
 * @method void setWidth(integer $Width) Set 
 * @method integer getHeight() Obtain 
 * @method void setHeight(integer $Height) Set 
 * @method integer getLongSide() Obtain 
 * @method void setLongSide(integer $LongSide) Set 
 * @method integer getShortSide() Obtain 
 * @method void setShortSide(integer $ShortSide) Set 
 */
class AdvancedSuperResolutionConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Mode;

    /**
     * @var float 
     */
    public $Percent;

    /**
     * @var integer 
     */
    public $Width;

    /**
     * @var integer 
     */
    public $Height;

    /**
     * @var integer 
     */
    public $LongSide;

    /**
     * @var integer 
     */
    public $ShortSide;

    /**
     * @param string $Switch 
     * @param string $Type 
     * @param string $Mode 
     * @param float $Percent 
     * @param integer $Width 
     * @param integer $Height 
     * @param integer $LongSide 
     * @param integer $ShortSide 
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
