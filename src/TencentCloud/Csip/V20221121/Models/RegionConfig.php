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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region configuration
 *
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getRegionName() Obtain <p>Region in Chinese</p>
 * @method void setRegionName(string $RegionName) Set <p>Region in Chinese</p>
 * @method integer getForeign() Obtain <p>Outside Chinese Mainland or not</p>
 * @method void setForeign(integer $Foreign) Set <p>Outside Chinese Mainland or not</p>
 * @method integer getCode() Obtain <p>Region code</p>
 * @method void setCode(integer $Code) Set <p>Region code</p>
 * @method integer getIsAutoDriveCloud() Obtain <p>Whether self-driving cloud</p>
 * @method void setIsAutoDriveCloud(integer $IsAutoDriveCloud) Set <p>Whether self-driving cloud</p>
 * @method integer getIsSupportNat() Obtain <p>nat support</p>
 * @method void setIsSupportNat(integer $IsSupportNat) Set <p>nat support</p>
 * @method string getRegionArea() Obtain <p>Region information</p>
 * @method void setRegionArea(string $RegionArea) Set <p>Region information</p>
 * @method string getRegionNameEN() Obtain <p>Region in English</p>
 * @method void setRegionNameEN(string $RegionNameEN) Set <p>Region in English</p>
 */
class RegionConfig extends AbstractModel
{
    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>Region in Chinese</p>
     */
    public $RegionName;

    /**
     * @var integer <p>Outside Chinese Mainland or not</p>
     */
    public $Foreign;

    /**
     * @var integer <p>Region code</p>
     */
    public $Code;

    /**
     * @var integer <p>Whether self-driving cloud</p>
     */
    public $IsAutoDriveCloud;

    /**
     * @var integer <p>nat support</p>
     */
    public $IsSupportNat;

    /**
     * @var string <p>Region information</p>
     */
    public $RegionArea;

    /**
     * @var string <p>Region in English</p>
     */
    public $RegionNameEN;

    /**
     * @param string $Region <p>Region.</p>
     * @param string $RegionName <p>Region in Chinese</p>
     * @param integer $Foreign <p>Outside Chinese Mainland or not</p>
     * @param integer $Code <p>Region code</p>
     * @param integer $IsAutoDriveCloud <p>Whether self-driving cloud</p>
     * @param integer $IsSupportNat <p>nat support</p>
     * @param string $RegionArea <p>Region information</p>
     * @param string $RegionNameEN <p>Region in English</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Foreign",$param) and $param["Foreign"] !== null) {
            $this->Foreign = $param["Foreign"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("IsAutoDriveCloud",$param) and $param["IsAutoDriveCloud"] !== null) {
            $this->IsAutoDriveCloud = $param["IsAutoDriveCloud"];
        }

        if (array_key_exists("IsSupportNat",$param) and $param["IsSupportNat"] !== null) {
            $this->IsSupportNat = $param["IsSupportNat"];
        }

        if (array_key_exists("RegionArea",$param) and $param["RegionArea"] !== null) {
            $this->RegionArea = $param["RegionArea"];
        }

        if (array_key_exists("RegionNameEN",$param) and $param["RegionNameEN"] !== null) {
            $this->RegionNameEN = $param["RegionNameEN"];
        }
    }
}
