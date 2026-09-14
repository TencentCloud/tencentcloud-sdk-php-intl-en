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
 * 
 *
 * @method string getResolution() Obtain 
 * @method void setResolution(string $Resolution) Set 
 * @method string getAspectRatio() Obtain 
 * @method void setAspectRatio(string $AspectRatio) Set 
 * @method integer getLogoAdd() Obtain 
 * @method void setLogoAdd(integer $LogoAdd) Set 
 * @method boolean getEnableAudio() Obtain 
 * @method void setEnableAudio(boolean $EnableAudio) Set 
 * @method boolean getOffPeak() Obtain 
 * @method void setOffPeak(boolean $OffPeak) Set 
 * @method boolean getEnableBgm() Obtain 
 * @method void setEnableBgm(boolean $EnableBgm) Set 
 */
class AigcVideoExtraParam extends AbstractModel
{
    /**
     * @var string 
     */
    public $Resolution;

    /**
     * @var string 
     */
    public $AspectRatio;

    /**
     * @var integer 
     */
    public $LogoAdd;

    /**
     * @var boolean 
     */
    public $EnableAudio;

    /**
     * @var boolean 
     */
    public $OffPeak;

    /**
     * @var boolean 
     */
    public $EnableBgm;

    /**
     * @param string $Resolution 
     * @param string $AspectRatio 
     * @param integer $LogoAdd 
     * @param boolean $EnableAudio 
     * @param boolean $OffPeak 
     * @param boolean $EnableBgm 
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
        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("EnableAudio",$param) and $param["EnableAudio"] !== null) {
            $this->EnableAudio = $param["EnableAudio"];
        }

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }

        if (array_key_exists("EnableBgm",$param) and $param["EnableBgm"] !== null) {
            $this->EnableBgm = $param["EnableBgm"];
        }
    }
}
