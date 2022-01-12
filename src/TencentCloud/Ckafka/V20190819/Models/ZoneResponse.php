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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The entity returned for the query of Kafka’s zone information
 *
 * @method array getZoneList() Obtain Zone list
 * @method void setZoneList(array $ZoneList) Set Zone list
 * @method integer getMaxBuyInstanceNum() Obtain Maximum number of instances to be purchased
 * @method void setMaxBuyInstanceNum(integer $MaxBuyInstanceNum) Set Maximum number of instances to be purchased
 * @method integer getMaxBandwidth() Obtain Maximum bandwidth in MB/S
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Maximum bandwidth in MB/S
 * @method Price getUnitPrice() Obtain Pay-as-you-go unit price
 * @method void setUnitPrice(Price $UnitPrice) Set Pay-as-you-go unit price
 * @method Price getMessagePrice() Obtain Pay-as-you-go unit message price
 * @method void setMessagePrice(Price $MessagePrice) Set Pay-as-you-go unit message price
 * @method array getClusterInfo() Obtain Cluster information dedicated to a user
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setClusterInfo(array $ClusterInfo) Set Cluster information dedicated to a user
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getStandard() Obtain Purchase of Standard Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setStandard(string $Standard) Set Purchase of Standard Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getStandardS2() Obtain Purchase of Standard S2 Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setStandardS2(string $StandardS2) Set Purchase of Standard S2 Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getProfession() Obtain Purchase of Pro Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setProfession(string $Profession) Set Purchase of Pro Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getPhysical() Obtain Purchase of Physical Dedicated Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setPhysical(string $Physical) Set Purchase of Physical Dedicated Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getPublicNetwork() Obtain Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublicNetwork(string $PublicNetwork) Set Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getPublicNetworkLimit() Obtain Public network bandwidth configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublicNetworkLimit(string $PublicNetworkLimit) Set Public network bandwidth configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ZoneResponse extends AbstractModel
{
    /**
     * @var array Zone list
     */
    public $ZoneList;

    /**
     * @var integer Maximum number of instances to be purchased
     */
    public $MaxBuyInstanceNum;

    /**
     * @var integer Maximum bandwidth in MB/S
     */
    public $MaxBandwidth;

    /**
     * @var Price Pay-as-you-go unit price
     */
    public $UnitPrice;

    /**
     * @var Price Pay-as-you-go unit message price
     */
    public $MessagePrice;

    /**
     * @var array Cluster information dedicated to a user
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ClusterInfo;

    /**
     * @var string Purchase of Standard Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Standard;

    /**
     * @var string Purchase of Standard S2 Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $StandardS2;

    /**
     * @var string Purchase of Pro Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Profession;

    /**
     * @var string Purchase of Physical Dedicated Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Physical;

    /**
     * @var string Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublicNetwork;

    /**
     * @var string Public network bandwidth configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublicNetworkLimit;

    /**
     * @param array $ZoneList Zone list
     * @param integer $MaxBuyInstanceNum Maximum number of instances to be purchased
     * @param integer $MaxBandwidth Maximum bandwidth in MB/S
     * @param Price $UnitPrice Pay-as-you-go unit price
     * @param Price $MessagePrice Pay-as-you-go unit message price
     * @param array $ClusterInfo Cluster information dedicated to a user
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $Standard Purchase of Standard Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $StandardS2 Purchase of Standard S2 Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $Profession Purchase of Pro Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $Physical Purchase of Physical Dedicated Edition configurations
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $PublicNetwork Public network bandwidth.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $PublicNetworkLimit Public network bandwidth configuration.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("MaxBuyInstanceNum",$param) and $param["MaxBuyInstanceNum"] !== null) {
            $this->MaxBuyInstanceNum = $param["MaxBuyInstanceNum"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = new Price();
            $this->UnitPrice->deserialize($param["UnitPrice"]);
        }

        if (array_key_exists("MessagePrice",$param) and $param["MessagePrice"] !== null) {
            $this->MessagePrice = new Price();
            $this->MessagePrice->deserialize($param["MessagePrice"]);
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = [];
            foreach ($param["ClusterInfo"] as $key => $value){
                $obj = new ClusterInfo();
                $obj->deserialize($value);
                array_push($this->ClusterInfo, $obj);
            }
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("StandardS2",$param) and $param["StandardS2"] !== null) {
            $this->StandardS2 = $param["StandardS2"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("Physical",$param) and $param["Physical"] !== null) {
            $this->Physical = $param["Physical"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("PublicNetworkLimit",$param) and $param["PublicNetworkLimit"] !== null) {
            $this->PublicNetworkLimit = $param["PublicNetworkLimit"];
        }
    }
}
