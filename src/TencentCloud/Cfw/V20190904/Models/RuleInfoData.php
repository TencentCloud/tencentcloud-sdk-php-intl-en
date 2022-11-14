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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule input object
 *
 * @method integer getOrderIndex() Obtain Priority
 * @method void setOrderIndex(integer $OrderIndex) Set Priority
 * @method string getSourceIp() Obtain Access source
 * @method void setSourceIp(string $SourceIp) Set Access source
 * @method string getTargetIp() Obtain Access destination
 * @method void setTargetIp(string $TargetIp) Set Access destination
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getStrategy() Obtain Policy. 0: observe; 1: block; 2: allow
 * @method void setStrategy(string $Strategy) Set Policy. 0: observe; 1: block; 2: allow
 * @method integer getSourceType() Obtain Access source type. 1: IP; 3: domain name; 4: IP address template; 5: domain name address template
 * @method void setSourceType(integer $SourceType) Set Access source type. 1: IP; 3: domain name; 4: IP address template; 5: domain name address template
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound
 * @method string getDetail() Obtain Description
 * @method void setDetail(string $Detail) Set Description
 * @method integer getTargetType() Obtain Access destination type. 1: IP, 3: domain name; 4: IP address template; 5: domain name address template
 * @method void setTargetType(integer $TargetType) Set Access destination type. 1: IP, 3: domain name; 4: IP address template; 5: domain name address template
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method integer getId() Obtain ID value
 * @method void setId(integer $Id) Set ID value
 * @method string getLogId() Obtain Log ID, required when an alert log is created
 * @method void setLogId(string $LogId) Set Log ID, required when an alert log is created
 * @method integer getCity() Obtain City code
 * @method void setCity(integer $City) Set City code
 * @method integer getCountry() Obtain Country code
 * @method void setCountry(integer $Country) Set Country code
 * @method string getCloudCode() Obtain Cloud vendor. Multiple vendors are supported and separated with commas. 1: Tencent Cloud (only in Hong Kong, China and overseas); 2: Alibaba Cloud; 3: Amazon Cloud; 4: Huawei Cloud; 5: Microsoft Cloud
 * @method void setCloudCode(string $CloudCode) Set Cloud vendor. Multiple vendors are supported and separated with commas. 1: Tencent Cloud (only in Hong Kong, China and overseas); 2: Alibaba Cloud; 3: Amazon Cloud; 4: Huawei Cloud; 5: Microsoft Cloud
 * @method integer getIsRegion() Obtain Indicates whether it is a region
 * @method void setIsRegion(integer $IsRegion) Set Indicates whether it is a region
 * @method string getCityName() Obtain City name
 * @method void setCityName(string $CityName) Set City name
 * @method string getCountryName() Obtain Country name
 * @method void setCountryName(string $CountryName) Set Country name
 */
class RuleInfoData extends AbstractModel
{
    /**
     * @var integer Priority
     */
    public $OrderIndex;

    /**
     * @var string Access source
     */
    public $SourceIp;

    /**
     * @var string Access destination
     */
    public $TargetIp;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Policy. 0: observe; 1: block; 2: allow
     */
    public $Strategy;

    /**
     * @var integer Access source type. 1: IP; 3: domain name; 4: IP address template; 5: domain name address template
     */
    public $SourceType;

    /**
     * @var integer Direction. 0: outbound; 1: inbound
     */
    public $Direction;

    /**
     * @var string Description
     */
    public $Detail;

    /**
     * @var integer Access destination type. 1: IP, 3: domain name; 4: IP address template; 5: domain name address template
     */
    public $TargetType;

    /**
     * @var string Port
     */
    public $Port;

    /**
     * @var integer ID value
     */
    public $Id;

    /**
     * @var string Log ID, required when an alert log is created
     */
    public $LogId;

    /**
     * @var integer City code
     */
    public $City;

    /**
     * @var integer Country code
     */
    public $Country;

    /**
     * @var string Cloud vendor. Multiple vendors are supported and separated with commas. 1: Tencent Cloud (only in Hong Kong, China and overseas); 2: Alibaba Cloud; 3: Amazon Cloud; 4: Huawei Cloud; 5: Microsoft Cloud
     */
    public $CloudCode;

    /**
     * @var integer Indicates whether it is a region
     */
    public $IsRegion;

    /**
     * @var string City name
     */
    public $CityName;

    /**
     * @var string Country name
     */
    public $CountryName;

    /**
     * @param integer $OrderIndex Priority
     * @param string $SourceIp Access source
     * @param string $TargetIp Access destination
     * @param string $Protocol Protocol
     * @param string $Strategy Policy. 0: observe; 1: block; 2: allow
     * @param integer $SourceType Access source type. 1: IP; 3: domain name; 4: IP address template; 5: domain name address template
     * @param integer $Direction Direction. 0: outbound; 1: inbound
     * @param string $Detail Description
     * @param integer $TargetType Access destination type. 1: IP, 3: domain name; 4: IP address template; 5: domain name address template
     * @param string $Port Port
     * @param integer $Id ID value
     * @param string $LogId Log ID, required when an alert log is created
     * @param integer $City City code
     * @param integer $Country Country code
     * @param string $CloudCode Cloud vendor. Multiple vendors are supported and separated with commas. 1: Tencent Cloud (only in Hong Kong, China and overseas); 2: Alibaba Cloud; 3: Amazon Cloud; 4: Huawei Cloud; 5: Microsoft Cloud
     * @param integer $IsRegion Indicates whether it is a region
     * @param string $CityName City name
     * @param string $CountryName Country name
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
        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }

        if (array_key_exists("IsRegion",$param) and $param["IsRegion"] !== null) {
            $this->IsRegion = $param["IsRegion"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }
    }
}
