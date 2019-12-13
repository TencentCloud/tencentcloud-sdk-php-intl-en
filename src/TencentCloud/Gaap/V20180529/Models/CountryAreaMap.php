<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getNationCountryName() 获取Country name.
 * @method void setNationCountryName(string $NationCountryName) 设置Country name.
 * @method string getNationCountryInnerCode() 获取Country code.
 * @method void setNationCountryInnerCode(string $NationCountryInnerCode) 设置Country code.
 * @method string getGeographicalZoneName() 获取Region name.
 * @method void setGeographicalZoneName(string $GeographicalZoneName) 设置Region name.
 * @method string getGeographicalZoneInnerCode() 获取Region code.
 * @method void setGeographicalZoneInnerCode(string $GeographicalZoneInnerCode) 设置Region code.
 * @method string getContinentName() 获取Continent name.
 * @method void setContinentName(string $ContinentName) 设置Continent name.
 * @method string getContinentInnerCode() 获取Continent code.
 * @method void setContinentInnerCode(string $ContinentInnerCode) 设置Continent code.
 */

/**
 *Country/region code mapping (name and code)
 */
class CountryAreaMap extends AbstractModel
{
    /**
     * @var string Country name.
     */
    public $NationCountryName;

    /**
     * @var string Country code.
     */
    public $NationCountryInnerCode;

    /**
     * @var string Region name.
     */
    public $GeographicalZoneName;

    /**
     * @var string Region code.
     */
    public $GeographicalZoneInnerCode;

    /**
     * @var string Continent name.
     */
    public $ContinentName;

    /**
     * @var string Continent code.
     */
    public $ContinentInnerCode;
    /**
     * @param string $NationCountryName Country name.
     * @param string $NationCountryInnerCode Country code.
     * @param string $GeographicalZoneName Region name.
     * @param string $GeographicalZoneInnerCode Region code.
     * @param string $ContinentName Continent name.
     * @param string $ContinentInnerCode Continent code.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NationCountryName",$param) and $param["NationCountryName"] !== null) {
            $this->NationCountryName = $param["NationCountryName"];
        }

        if (array_key_exists("NationCountryInnerCode",$param) and $param["NationCountryInnerCode"] !== null) {
            $this->NationCountryInnerCode = $param["NationCountryInnerCode"];
        }

        if (array_key_exists("GeographicalZoneName",$param) and $param["GeographicalZoneName"] !== null) {
            $this->GeographicalZoneName = $param["GeographicalZoneName"];
        }

        if (array_key_exists("GeographicalZoneInnerCode",$param) and $param["GeographicalZoneInnerCode"] !== null) {
            $this->GeographicalZoneInnerCode = $param["GeographicalZoneInnerCode"];
        }

        if (array_key_exists("ContinentName",$param) and $param["ContinentName"] !== null) {
            $this->ContinentName = $param["ContinentName"];
        }

        if (array_key_exists("ContinentInnerCode",$param) and $param["ContinentInnerCode"] !== null) {
            $this->ContinentInnerCode = $param["ContinentInnerCode"];
        }
    }
}
