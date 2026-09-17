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
 * @method integer getSubtitleOutlineConfigSwitch() Obtain 
 * @method void setSubtitleOutlineConfigSwitch(integer $SubtitleOutlineConfigSwitch) Set 
 * @method float getOutlineWidth() Obtain 
 * @method void setOutlineWidth(float $OutlineWidth) Set 
 * @method integer getOutlineWidthUnit() Obtain 
 * @method void setOutlineWidthUnit(integer $OutlineWidthUnit) Set 
 * @method string getOutlineColor() Obtain 
 * @method void setOutlineColor(string $OutlineColor) Set 
 * @method float getOutlineAlpha() Obtain 
 * @method void setOutlineAlpha(float $OutlineAlpha) Set 
 */
class MPSSubtitleOutlineConfig extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubtitleOutlineConfigSwitch;

    /**
     * @var float 
     */
    public $OutlineWidth;

    /**
     * @var integer 
     */
    public $OutlineWidthUnit;

    /**
     * @var string 
     */
    public $OutlineColor;

    /**
     * @var float 
     */
    public $OutlineAlpha;

    /**
     * @param integer $SubtitleOutlineConfigSwitch 
     * @param float $OutlineWidth 
     * @param integer $OutlineWidthUnit 
     * @param string $OutlineColor 
     * @param float $OutlineAlpha 
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
        if (array_key_exists("SubtitleOutlineConfigSwitch",$param) and $param["SubtitleOutlineConfigSwitch"] !== null) {
            $this->SubtitleOutlineConfigSwitch = $param["SubtitleOutlineConfigSwitch"];
        }

        if (array_key_exists("OutlineWidth",$param) and $param["OutlineWidth"] !== null) {
            $this->OutlineWidth = $param["OutlineWidth"];
        }

        if (array_key_exists("OutlineWidthUnit",$param) and $param["OutlineWidthUnit"] !== null) {
            $this->OutlineWidthUnit = $param["OutlineWidthUnit"];
        }

        if (array_key_exists("OutlineColor",$param) and $param["OutlineColor"] !== null) {
            $this->OutlineColor = $param["OutlineColor"];
        }

        if (array_key_exists("OutlineAlpha",$param) and $param["OutlineAlpha"] !== null) {
            $this->OutlineAlpha = $param["OutlineAlpha"];
        }
    }
}
