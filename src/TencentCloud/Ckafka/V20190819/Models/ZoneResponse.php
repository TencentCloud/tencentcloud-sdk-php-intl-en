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
 * @method array getZoneList() Obtain <P>Specifies the zone list.</p>.
 * @method void setZoneList(array $ZoneList) Set <P>Specifies the zone list.</p>.
 * @method integer getMaxBuyInstanceNum() Obtain <P>Maximum number of instances that can be purchased.</p>.
 * @method void setMaxBuyInstanceNum(integer $MaxBuyInstanceNum) Set <P>Maximum number of instances that can be purchased.</p>.
 * @method integer getMaxBandwidth() Obtain <p>Maximum purchase bandwidth in Mb/s.</p>.
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set <p>Maximum purchase bandwidth in Mb/s.</p>.
 * @method Price getUnitPrice() Obtain <P>Unit price for postpayment.</p>.
 * @method void setUnitPrice(Price $UnitPrice) Set <P>Unit price for postpayment.</p>.
 * @method Price getMessagePrice() Obtain <P>Message unit price for postpayment.</p>.
 * @method void setMessagePrice(Price $MessagePrice) Set <P>Message unit price for postpayment.</p>.
 * @method array getClusterInfo() Obtain <P>User-Exclusive cluster information.</p>.
 * @method void setClusterInfo(array $ClusterInfo) Set <P>User-Exclusive cluster information.</p>.
 * @method string getStandard() Obtain <P>Specifies the standard version configuration to purchase.</p>.
 * @method void setStandard(string $Standard) Set <P>Specifies the standard version configuration to purchase.</p>.
 * @method string getStandardS2() Obtain <P>Specifies the purchase of standard version s2 configuration.</p>.
 * @method void setStandardS2(string $StandardS2) Set <P>Specifies the purchase of standard version s2 configuration.</p>.
 * @method string getProfession() Obtain <P>Specifies the configuration for purchasing professional edition.</p>.
 * @method void setProfession(string $Profession) Set <P>Specifies the configuration for purchasing professional edition.</p>.
 * @method string getPhysical() Obtain <P>Purchase physical dedicated edition configuration.</p>.
 * @method void setPhysical(string $Physical) Set <P>Purchase physical dedicated edition configuration.</p>.
 * @method string getPublicNetwork() Obtain <p>Specifies the public network bandwidth. valid values: 3Mbps to 999Mbps. only supported in pro edition. abandoned, meaningless.</p>.
 * @method void setPublicNetwork(string $PublicNetwork) Set <p>Specifies the public network bandwidth. valid values: 3Mbps to 999Mbps. only supported in pro edition. abandoned, meaningless.</p>.
 * @method string getPublicNetworkLimit() Obtain <P>Public network bandwidth configuration.</p>.
 * @method void setPublicNetworkLimit(string $PublicNetworkLimit) Set <P>Public network bandwidth configuration.</p>.
 * @method string getRequestId() Obtain <p>Request Id.</p>.
 * @method void setRequestId(string $RequestId) Set <p>Request Id.</p>.
 * @method integer getOffset() Obtain <P>Specifies the pagination offset.</p>.
 * @method void setOffset(integer $Offset) Set <P>Specifies the pagination offset.</p>.
 * @method integer getLimit() Obtain <P>Specifies the pagination limit.</p>.
 * @method void setLimit(integer $Limit) Set <P>Specifies the pagination limit.</p>.
 * @method boolean getForceCheckTag() Obtain <P>Specifies whether the tag is mandatory.</p>.
 * @method void setForceCheckTag(boolean $ForceCheckTag) Set <P>Specifies whether the tag is mandatory.</p>.
 */
class ZoneResponse extends AbstractModel
{
    /**
     * @var array <P>Specifies the zone list.</p>.
     */
    public $ZoneList;

    /**
     * @var integer <P>Maximum number of instances that can be purchased.</p>.
     */
    public $MaxBuyInstanceNum;

    /**
     * @var integer <p>Maximum purchase bandwidth in Mb/s.</p>.
     */
    public $MaxBandwidth;

    /**
     * @var Price <P>Unit price for postpayment.</p>.
     */
    public $UnitPrice;

    /**
     * @var Price <P>Message unit price for postpayment.</p>.
     */
    public $MessagePrice;

    /**
     * @var array <P>User-Exclusive cluster information.</p>.
     */
    public $ClusterInfo;

    /**
     * @var string <P>Specifies the standard version configuration to purchase.</p>.
     */
    public $Standard;

    /**
     * @var string <P>Specifies the purchase of standard version s2 configuration.</p>.
     */
    public $StandardS2;

    /**
     * @var string <P>Specifies the configuration for purchasing professional edition.</p>.
     */
    public $Profession;

    /**
     * @var string <P>Purchase physical dedicated edition configuration.</p>.
     */
    public $Physical;

    /**
     * @var string <p>Specifies the public network bandwidth. valid values: 3Mbps to 999Mbps. only supported in pro edition. abandoned, meaningless.</p>.
     */
    public $PublicNetwork;

    /**
     * @var string <P>Public network bandwidth configuration.</p>.
     */
    public $PublicNetworkLimit;

    /**
     * @var string <p>Request Id.</p>.
     */
    public $RequestId;

    /**
     * @var integer <P>Specifies the pagination offset.</p>.
     */
    public $Offset;

    /**
     * @var integer <P>Specifies the pagination limit.</p>.
     */
    public $Limit;

    /**
     * @var boolean <P>Specifies whether the tag is mandatory.</p>.
     */
    public $ForceCheckTag;

    /**
     * @param array $ZoneList <P>Specifies the zone list.</p>.
     * @param integer $MaxBuyInstanceNum <P>Maximum number of instances that can be purchased.</p>.
     * @param integer $MaxBandwidth <p>Maximum purchase bandwidth in Mb/s.</p>.
     * @param Price $UnitPrice <P>Unit price for postpayment.</p>.
     * @param Price $MessagePrice <P>Message unit price for postpayment.</p>.
     * @param array $ClusterInfo <P>User-Exclusive cluster information.</p>.
     * @param string $Standard <P>Specifies the standard version configuration to purchase.</p>.
     * @param string $StandardS2 <P>Specifies the purchase of standard version s2 configuration.</p>.
     * @param string $Profession <P>Specifies the configuration for purchasing professional edition.</p>.
     * @param string $Physical <P>Purchase physical dedicated edition configuration.</p>.
     * @param string $PublicNetwork <p>Specifies the public network bandwidth. valid values: 3Mbps to 999Mbps. only supported in pro edition. abandoned, meaningless.</p>.
     * @param string $PublicNetworkLimit <P>Public network bandwidth configuration.</p>.
     * @param string $RequestId <p>Request Id.</p>.
     * @param integer $Offset <P>Specifies the pagination offset.</p>.
     * @param integer $Limit <P>Specifies the pagination limit.</p>.
     * @param boolean $ForceCheckTag <P>Specifies whether the tag is mandatory.</p>.
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
