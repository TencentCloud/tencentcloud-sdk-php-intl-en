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
 * CreateNatFwInstanceWithDomain request structure.
 *
 * @method string getName() Obtain Firewall instance name
 * @method void setName(string $Name) Set Firewall instance name
 * @method integer getWidth() Obtain Bandwidth
 * @method void setWidth(integer $Width) Set Bandwidth
 * @method integer getMode() Obtain Mode. 1: use existing; 0: create new
 * @method void setMode(integer $Mode) Set Mode. 1: use existing; 0: create new
 * @method NewModeItems getNewModeItems() Obtain Parameter passed for the Create New mode. Either NewModeItems or NatgwList is required.
 * @method void setNewModeItems(NewModeItems $NewModeItems) Set Parameter passed for the Create New mode. Either NewModeItems or NatgwList is required.
 * @method array getNatGwList() Obtain NAT gateway list for the Using Existing mode. Either NewModeItems or NatgwList is required.
 * @method void setNatGwList(array $NatGwList) Set NAT gateway list for the Using Existing mode. Either NewModeItems or NatgwList is required.
 * @method string getZone() Obtain Primary zone. The default zone is selected if it is empty.
 * @method void setZone(string $Zone) Set Primary zone. The default zone is selected if it is empty.
 * @method string getZoneBak() Obtain Secondary zone. The default zone is selected if it is empty.
 * @method void setZoneBak(string $ZoneBak) Set Secondary zone. The default zone is selected if it is empty.
 * @method integer getCrossAZone() Obtain Remote disaster recovery. 1: enable; 0: disable; empty: disable by default
 * @method void setCrossAZone(integer $CrossAZone) Set Remote disaster recovery. 1: enable; 0: disable; empty: disable by default
 * @method integer getIsCreateDomain() Obtain 0: not create; 1: create
 * @method void setIsCreateDomain(integer $IsCreateDomain) Set 0: not create; 1: create
 * @method string getDomain() Obtain Required for creating a domain name
 * @method void setDomain(string $Domain) Set Required for creating a domain name
 * @method FwCidrInfo getFwCidrInfo() Obtain IP range of the firewall
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) Set IP range of the firewall
 */
class CreateNatFwInstanceWithDomainRequest extends AbstractModel
{
    /**
     * @var string Firewall instance name
     */
    public $Name;

    /**
     * @var integer Bandwidth
     */
    public $Width;

    /**
     * @var integer Mode. 1: use existing; 0: create new
     */
    public $Mode;

    /**
     * @var NewModeItems Parameter passed for the Create New mode. Either NewModeItems or NatgwList is required.
     */
    public $NewModeItems;

    /**
     * @var array NAT gateway list for the Using Existing mode. Either NewModeItems or NatgwList is required.
     */
    public $NatGwList;

    /**
     * @var string Primary zone. The default zone is selected if it is empty.
     */
    public $Zone;

    /**
     * @var string Secondary zone. The default zone is selected if it is empty.
     */
    public $ZoneBak;

    /**
     * @var integer Remote disaster recovery. 1: enable; 0: disable; empty: disable by default
     */
    public $CrossAZone;

    /**
     * @var integer 0: not create; 1: create
     */
    public $IsCreateDomain;

    /**
     * @var string Required for creating a domain name
     */
    public $Domain;

    /**
     * @var FwCidrInfo IP range of the firewall
     */
    public $FwCidrInfo;

    /**
     * @param string $Name Firewall instance name
     * @param integer $Width Bandwidth
     * @param integer $Mode Mode. 1: use existing; 0: create new
     * @param NewModeItems $NewModeItems Parameter passed for the Create New mode. Either NewModeItems or NatgwList is required.
     * @param array $NatGwList NAT gateway list for the Using Existing mode. Either NewModeItems or NatgwList is required.
     * @param string $Zone Primary zone. The default zone is selected if it is empty.
     * @param string $ZoneBak Secondary zone. The default zone is selected if it is empty.
     * @param integer $CrossAZone Remote disaster recovery. 1: enable; 0: disable; empty: disable by default
     * @param integer $IsCreateDomain 0: not create; 1: create
     * @param string $Domain Required for creating a domain name
     * @param FwCidrInfo $FwCidrInfo IP range of the firewall
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NewModeItems",$param) and $param["NewModeItems"] !== null) {
            $this->NewModeItems = new NewModeItems();
            $this->NewModeItems->deserialize($param["NewModeItems"]);
        }

        if (array_key_exists("NatGwList",$param) and $param["NatGwList"] !== null) {
            $this->NatGwList = $param["NatGwList"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneBak",$param) and $param["ZoneBak"] !== null) {
            $this->ZoneBak = $param["ZoneBak"];
        }

        if (array_key_exists("CrossAZone",$param) and $param["CrossAZone"] !== null) {
            $this->CrossAZone = $param["CrossAZone"];
        }

        if (array_key_exists("IsCreateDomain",$param) and $param["IsCreateDomain"] !== null) {
            $this->IsCreateDomain = $param["IsCreateDomain"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }
    }
}
