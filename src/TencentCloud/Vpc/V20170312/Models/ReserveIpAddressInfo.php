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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reserved private IP address data.
 *
 * @method string getReserveIpId() Obtain Unique ID of the reserved private IP address.
 * @method void setReserveIpId(string $ReserveIpId) Set Unique ID of the reserved private IP address.
 * @method string getVpcId() Obtain Unique ID of the VPC.
 * @method void setVpcId(string $VpcId) Set Unique ID of the VPC.
 * @method string getSubnetId() Obtain Unique ID of the subnet.
 * @method void setSubnetId(string $SubnetId) Set Unique ID of the subnet.
 * @method string getReserveIpAddress() Obtain Reserved private IP address.
 * @method void setReserveIpAddress(string $ReserveIpAddress) Set Reserved private IP address.
 * @method string getResourceId() Obtain Resource instance ID bound to the reserved private IP address.
 * @method void setResourceId(string $ResourceId) Set Resource instance ID bound to the reserved private IP address.
 * @method integer getIpType() Obtain IpType applied for the product.
 * @method void setIpType(integer $IpType) Set IpType applied for the product.
 * @method string getState() Obtain Binding status. UnBind: unbound; Bind: bound.
 * @method void setState(string $State) Set Binding status. UnBind: unbound; Bind: bound.
 * @method string getName() Obtain Name of the reserved private IP address.
 * @method void setName(string $Name) Set Name of the reserved private IP address.
 * @method string getDescription() Obtain Description of the reserved private IP address.
 * @method void setDescription(string $Description) Set Description of the reserved private IP address.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method array getTagSet() Obtain Tag key-value pair.
 * @method void setTagSet(array $TagSet) Set Tag key-value pair.
 */
class ReserveIpAddressInfo extends AbstractModel
{
    /**
     * @var string Unique ID of the reserved private IP address.
     */
    public $ReserveIpId;

    /**
     * @var string Unique ID of the VPC.
     */
    public $VpcId;

    /**
     * @var string Unique ID of the subnet.
     */
    public $SubnetId;

    /**
     * @var string Reserved private IP address.
     */
    public $ReserveIpAddress;

    /**
     * @var string Resource instance ID bound to the reserved private IP address.
     */
    public $ResourceId;

    /**
     * @var integer IpType applied for the product.
     */
    public $IpType;

    /**
     * @var string Binding status. UnBind: unbound; Bind: bound.
     */
    public $State;

    /**
     * @var string Name of the reserved private IP address.
     */
    public $Name;

    /**
     * @var string Description of the reserved private IP address.
     */
    public $Description;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var array Tag key-value pair.
     */
    public $TagSet;

    /**
     * @param string $ReserveIpId Unique ID of the reserved private IP address.
     * @param string $VpcId Unique ID of the VPC.
     * @param string $SubnetId Unique ID of the subnet.
     * @param string $ReserveIpAddress Reserved private IP address.
     * @param string $ResourceId Resource instance ID bound to the reserved private IP address.
     * @param integer $IpType IpType applied for the product.
     * @param string $State Binding status. UnBind: unbound; Bind: bound.
     * @param string $Name Name of the reserved private IP address.
     * @param string $Description Description of the reserved private IP address.
     * @param string $CreatedTime Creation time.
     * @param array $TagSet Tag key-value pair.
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
        if (array_key_exists("ReserveIpId",$param) and $param["ReserveIpId"] !== null) {
            $this->ReserveIpId = $param["ReserveIpId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ReserveIpAddress",$param) and $param["ReserveIpAddress"] !== null) {
            $this->ReserveIpAddress = $param["ReserveIpAddress"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("IpType",$param) and $param["IpType"] !== null) {
            $this->IpType = $param["IpType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
