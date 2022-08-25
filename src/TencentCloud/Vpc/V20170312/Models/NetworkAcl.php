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
 * Network ACL
 *
 * @method string getVpcId() Obtain `ID` of the `VPC` instance.
 * @method void setVpcId(string $VpcId) Set `ID` of the `VPC` instance.
 * @method string getNetworkAclId() Obtain `ID` of the network ACL instance.
 * @method void setNetworkAclId(string $NetworkAclId) Set `ID` of the network ACL instance.
 * @method string getNetworkAclName() Obtain Name of the network ACL. The maximum length is 60 bytes.
 * @method void setNetworkAclName(string $NetworkAclName) Set Name of the network ACL. The maximum length is 60 bytes.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method array getSubnetSet() Obtain Array of subnets associated with the network ACL.
 * @method void setSubnetSet(array $SubnetSet) Set Array of subnets associated with the network ACL.
 * @method array getIngressEntries() Obtain Inbound rules of the network ACL.
 * @method void setIngressEntries(array $IngressEntries) Set Inbound rules of the network ACL.
 * @method array getEgressEntries() Obtain Outbound rules of the network ACL.
 * @method void setEgressEntries(array $EgressEntries) Set Outbound rules of the network ACL.
 * @method string getNetworkAclType() Obtain Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
 * @method void setNetworkAclType(string $NetworkAclType) Set Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
 * @method array getTagSet() Obtain Tag key-value pairs
 * @method void setTagSet(array $TagSet) Set Tag key-value pairs
 */
class NetworkAcl extends AbstractModel
{
    /**
     * @var string `ID` of the `VPC` instance.
     */
    public $VpcId;

    /**
     * @var string `ID` of the network ACL instance.
     */
    public $NetworkAclId;

    /**
     * @var string Name of the network ACL. The maximum length is 60 bytes.
     */
    public $NetworkAclName;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var array Array of subnets associated with the network ACL.
     */
    public $SubnetSet;

    /**
     * @var array Inbound rules of the network ACL.
     */
    public $IngressEntries;

    /**
     * @var array Outbound rules of the network ACL.
     */
    public $EgressEntries;

    /**
     * @var string Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
     */
    public $NetworkAclType;

    /**
     * @var array Tag key-value pairs
     */
    public $TagSet;

    /**
     * @param string $VpcId `ID` of the `VPC` instance.
     * @param string $NetworkAclId `ID` of the network ACL instance.
     * @param string $NetworkAclName Name of the network ACL. The maximum length is 60 bytes.
     * @param string $CreatedTime Creation time.
     * @param array $SubnetSet Array of subnets associated with the network ACL.
     * @param array $IngressEntries Inbound rules of the network ACL.
     * @param array $EgressEntries Outbound rules of the network ACL.
     * @param string $NetworkAclType Network ACL type. Valid values: `TRIPLE` and `QUINTUPLE`.
     * @param array $TagSet Tag key-value pairs
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            $this->NetworkAclId = $param["NetworkAclId"];
        }

        if (array_key_exists("NetworkAclName",$param) and $param["NetworkAclName"] !== null) {
            $this->NetworkAclName = $param["NetworkAclName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("SubnetSet",$param) and $param["SubnetSet"] !== null) {
            $this->SubnetSet = [];
            foreach ($param["SubnetSet"] as $key => $value){
                $obj = new Subnet();
                $obj->deserialize($value);
                array_push($this->SubnetSet, $obj);
            }
        }

        if (array_key_exists("IngressEntries",$param) and $param["IngressEntries"] !== null) {
            $this->IngressEntries = [];
            foreach ($param["IngressEntries"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->IngressEntries, $obj);
            }
        }

        if (array_key_exists("EgressEntries",$param) and $param["EgressEntries"] !== null) {
            $this->EgressEntries = [];
            foreach ($param["EgressEntries"] as $key => $value){
                $obj = new NetworkAclEntry();
                $obj->deserialize($value);
                array_push($this->EgressEntries, $obj);
            }
        }

        if (array_key_exists("NetworkAclType",$param) and $param["NetworkAclType"] !== null) {
            $this->NetworkAclType = $param["NetworkAclType"];
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
