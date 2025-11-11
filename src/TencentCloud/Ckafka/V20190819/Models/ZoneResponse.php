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
 * @method array getClusterInfo() Obtain Specifies the user-exclusive cluster info.
 * @method void setClusterInfo(array $ClusterInfo) Set Specifies the user-exclusive cluster info.
 * @method string getStandard() Obtain Purchase the standard version configuration.
 * @method void setStandard(string $Standard) Set Purchase the standard version configuration.
 * @method string getStandardS2() Obtain Purchase the standard version S2 configuration.
 * @method void setStandardS2(string $StandardS2) Set Purchase the standard version S2 configuration.
 * @method string getProfession() Obtain Specifies the configuration for purchasing the professional edition.
 * @method void setProfession(string $Profession) Set Specifies the configuration for purchasing the professional edition.
 * @method string getPhysical() Obtain Purchase physical dedicated edition configuration.
 * @method void setPhysical(string $Physical) Set Purchase physical dedicated edition configuration.
 * @method string getPublicNetwork() Obtain Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in. abandoned, meaningless.
 * @method void setPublicNetwork(string $PublicNetwork) Set Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in. abandoned, meaningless.
 * @method string getPublicNetworkLimit() Obtain Configures the public network bandwidth.
 * @method void setPublicNetworkLimit(string $PublicNetworkLimit) Set Configures the public network bandwidth.
 * @method string getRequestId() Obtain Request ID.
 * @method void setRequestId(string $RequestId) Set Request ID.
 * @method integer getOffset() Obtain Pagination Offset
 * @method void setOffset(integer $Offset) Set Pagination Offset
 * @method integer getLimit() Obtain Pagination Limit
 * @method void setLimit(integer $Limit) Set Pagination Limit
 * @method boolean getForceCheckTag() Obtain Mandatory. input tag.
 * @method void setForceCheckTag(boolean $ForceCheckTag) Set Mandatory. input tag.
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
     * @var array Specifies the user-exclusive cluster info.
     */
    public $ClusterInfo;

    /**
     * @var string Purchase the standard version configuration.
     */
    public $Standard;

    /**
     * @var string Purchase the standard version S2 configuration.
     */
    public $StandardS2;

    /**
     * @var string Specifies the configuration for purchasing the professional edition.
     */
    public $Profession;

    /**
     * @var string Purchase physical dedicated edition configuration.
     */
    public $Physical;

    /**
     * @var string Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in. abandoned, meaningless.
     */
    public $PublicNetwork;

    /**
     * @var string Configures the public network bandwidth.
     */
    public $PublicNetworkLimit;

    /**
     * @var string Request ID.
     */
    public $RequestId;

    /**
     * @var integer Pagination Offset
     */
    public $Offset;

    /**
     * @var integer Pagination Limit
     */
    public $Limit;

    /**
     * @var boolean Mandatory. input tag.
     */
    public $ForceCheckTag;

    /**
     * @param array $ZoneList Zone list
     * @param integer $MaxBuyInstanceNum Maximum number of instances to be purchased
     * @param integer $MaxBandwidth Maximum bandwidth in MB/S
     * @param Price $UnitPrice Pay-as-you-go unit price
     * @param Price $MessagePrice Pay-as-you-go unit message price
     * @param array $ClusterInfo Specifies the user-exclusive cluster info.
     * @param string $Standard Purchase the standard version configuration.
     * @param string $StandardS2 Purchase the standard version S2 configuration.
     * @param string $Profession Specifies the configuration for purchasing the professional edition.
     * @param string $Physical Purchase physical dedicated edition configuration.
     * @param string $PublicNetwork Public network bandwidth. minimum 3 Mbps. maximum 999 Mbps. only the pro edition supports filling in. abandoned, meaningless.
     * @param string $PublicNetworkLimit Configures the public network bandwidth.
     * @param string $RequestId Request ID.
     * @param integer $Offset Pagination Offset
     * @param integer $Limit Pagination Limit
     * @param boolean $ForceCheckTag Mandatory. input tag.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ForceCheckTag",$param) and $param["ForceCheckTag"] !== null) {
            $this->ForceCheckTag = $param["ForceCheckTag"];
        }
    }
}
