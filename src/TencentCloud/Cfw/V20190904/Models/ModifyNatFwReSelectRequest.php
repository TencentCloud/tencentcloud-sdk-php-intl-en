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
 * ModifyNatFwReSelect request structure.
 *
 * @method integer getMode() Obtain Mode. 1: use existing; 0: create new
 * @method void setMode(integer $Mode) Set Mode. 1: use existing; 0: create new
 * @method string getCfwInstance() Obtain Firewall instance ID
 * @method void setCfwInstance(string $CfwInstance) Set Firewall instance ID
 * @method array getNatGwList() Obtain List of NAT gateways reconnected for the Using Existing mode. Only one of NatGwList and VpcList can be passed.
 * @method void setNatGwList(array $NatGwList) Set List of NAT gateways reconnected for the Using Existing mode. Only one of NatGwList and VpcList can be passed.
 * @method array getVpcList() Obtain List of VPCs reconnected for the Create New mode. Only one of NatGwList and VpcList can be passed.
 * @method void setVpcList(array $VpcList) Set List of VPCs reconnected for the Create New mode. Only one of NatGwList and VpcList can be passed.
 * @method FwCidrInfo getFwCidrInfo() Obtain IP range of the firewall
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) Set IP range of the firewall
 */
class ModifyNatFwReSelectRequest extends AbstractModel
{
    /**
     * @var integer Mode. 1: use existing; 0: create new
     */
    public $Mode;

    /**
     * @var string Firewall instance ID
     */
    public $CfwInstance;

    /**
     * @var array List of NAT gateways reconnected for the Using Existing mode. Only one of NatGwList and VpcList can be passed.
     */
    public $NatGwList;

    /**
     * @var array List of VPCs reconnected for the Create New mode. Only one of NatGwList and VpcList can be passed.
     */
    public $VpcList;

    /**
     * @var FwCidrInfo IP range of the firewall
     */
    public $FwCidrInfo;

    /**
     * @param integer $Mode Mode. 1: use existing; 0: create new
     * @param string $CfwInstance Firewall instance ID
     * @param array $NatGwList List of NAT gateways reconnected for the Using Existing mode. Only one of NatGwList and VpcList can be passed.
     * @param array $VpcList List of VPCs reconnected for the Create New mode. Only one of NatGwList and VpcList can be passed.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("NatGwList",$param) and $param["NatGwList"] !== null) {
            $this->NatGwList = $param["NatGwList"];
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }
    }
}
