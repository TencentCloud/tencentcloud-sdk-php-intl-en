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
 * @method integer getSubtitleLayoutConfigSwitch() Obtain 
 * @method void setSubtitleLayoutConfigSwitch(integer $SubtitleLayoutConfigSwitch) Set 
 * @method integer getLineSpacing() Obtain 
 * @method void setLineSpacing(integer $LineSpacing) Set 
 * @method integer getLineSpacingUnit() Obtain 
 * @method void setLineSpacingUnit(integer $LineSpacingUnit) Set 
 * @method string getAlignment() Obtain 
 * @method void setAlignment(string $Alignment) Set 
 */
class MPSSubtitleLayoutConfig extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubtitleLayoutConfigSwitch;

    /**
     * @var integer 
     */
    public $LineSpacing;

    /**
     * @var integer 
     */
    public $LineSpacingUnit;

    /**
     * @var string 
     */
    public $Alignment;

    /**
     * @param integer $SubtitleLayoutConfigSwitch 
     * @param integer $LineSpacing 
     * @param integer $LineSpacingUnit 
     * @param string $Alignment 
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
        if (array_key_exists("SubtitleLayoutConfigSwitch",$param) and $param["SubtitleLayoutConfigSwitch"] !== null) {
            $this->SubtitleLayoutConfigSwitch = $param["SubtitleLayoutConfigSwitch"];
        }

        if (array_key_exists("LineSpacing",$param) and $param["LineSpacing"] !== null) {
            $this->LineSpacing = $param["LineSpacing"];
        }

        if (array_key_exists("LineSpacingUnit",$param) and $param["LineSpacingUnit"] !== null) {
            $this->LineSpacingUnit = $param["LineSpacingUnit"];
        }

        if (array_key_exists("Alignment",$param) and $param["Alignment"] !== null) {
            $this->Alignment = $param["Alignment"];
        }
    }
}
