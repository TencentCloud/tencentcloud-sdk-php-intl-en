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
 * Country/region code mapping (name and code)
 *
 * @method string getNationCountryName() Obtain Country name.
 * @method void setNationCountryName(string $NationCountryName) Set Country name.
 * @method string getNationCountryInnerCode() Obtain Country code.
 * @method void setNationCountryInnerCode(string $NationCountryInnerCode) Set Country code.
 * @method string getGeographicalZoneName() Obtain Region name.
 * @method void setGeographicalZoneName(string $GeographicalZoneName) Set Region name.
 * @method string getGeographicalZoneInnerCode() Obtain Region code.
 * @method void setGeographicalZoneInnerCode(string $GeographicalZoneInnerCode) Set Region code.
 * @method string getContinentName() Obtain Continent name.
 * @method void setContinentName(string $ContinentName) Set Continent name.
 * @method string getContinentInnerCode() Obtain Continent code.
 * @method void setContinentInnerCode(string $ContinentInnerCode) Set Continent code.
 * @method string getRemark() Obtain Remark information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remark information
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Remark information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $NationCountryName Country name.
     * @param string $NationCountryInnerCode Country code.
     * @param string $GeographicalZoneName Region name.
     * @param string $GeographicalZoneInnerCode Region code.
     * @param string $ContinentName Continent name.
     * @param string $ContinentInnerCode Continent code.
     * @param string $Remark Remark information
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
