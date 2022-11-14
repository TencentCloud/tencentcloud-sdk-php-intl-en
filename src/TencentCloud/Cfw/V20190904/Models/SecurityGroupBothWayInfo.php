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
 * Two-way enterprise security group rules
 *
 * @method integer getOrderIndex() Obtain Priority
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setOrderIndex(integer $OrderIndex) Set Priority
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSourceId() Obtain Access source
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSourceId(string $SourceId) Set Access source
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getSourceType() Obtain Access source type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSourceType(integer $SourceType) Set Access source type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getTargetId() Obtain Access destination
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTargetId(string $TargetId) Set Access destination
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getTargetType() Obtain Access destination type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTargetType(integer $TargetType) Set Access destination type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getProtocol() Obtain Protocol
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setProtocol(string $Protocol) Set Protocol
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPort() Obtain Destination port
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPort(string $Port) Set Destination port
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStrategy() Obtain Policy. 1: block; 2: allow
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStrategy(integer $Strategy) Set Policy. 1: block; 2: allow
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound. 1 by default
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound. 1 by default
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getDetail() Obtain Description
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setDetail(string $Detail) Set Description
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStatus() Obtain Toggle status. 0: off; 1: on
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStatus(integer $Status) Set Toggle status. 0: off; 1: on
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getIsNew() Obtain Indicates whether the rule is normal. 0: normal; 1: abnormal
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setIsNew(integer $IsNew) Set Indicates whether the rule is normal. 0: normal; 1: abnormal
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getBothWay() Obtain One-way/two-way. 0: one-way; 1: two-way
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setBothWay(integer $BothWay) Set One-way/two-way. 0: one-way; 1: two-way
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getVpcId() Obtain VPC ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getSubnetId() Obtain Subnet ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPublicIp() Obtain Public IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPublicIp(string $PublicIp) Set Public IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getPrivateIp() Obtain Private IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPrivateIp(string $PrivateIp) Set Private IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCidr() Obtain Masked address. Multiple addresses are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setCidr(string $Cidr) Set Masked address. Multiple addresses are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getServiceTemplateId() Obtain Port protocol template ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setServiceTemplateId(string $ServiceTemplateId) Set Port protocol template ID
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getProtocolPortType() Obtain Indicates whether to use the port protocol template. 0: no; 1: yes
 * @method void setProtocolPortType(integer $ProtocolPortType) Set Indicates whether to use the port protocol template. 0: no; 1: yes
 */
class SecurityGroupBothWayInfo extends AbstractModel
{
    /**
     * @var integer Priority
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $OrderIndex;

    /**
     * @var string Access source
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SourceId;

    /**
     * @var integer Access source type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SourceType;

    /**
     * @var string Access destination
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TargetId;

    /**
     * @var integer Access destination type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TargetType;

    /**
     * @var string Protocol
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Protocol;

    /**
     * @var string Destination port
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Port;

    /**
     * @var integer Policy. 1: block; 2: allow
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Strategy;

    /**
     * @var integer Direction. 0: outbound; 1: inbound. 1 by default
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Direction;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Description
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Detail;

    /**
     * @var integer Toggle status. 0: off; 1: on
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Status;

    /**
     * @var integer Indicates whether the rule is normal. 0: normal; 1: abnormal
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $IsNew;

    /**
     * @var integer One-way/two-way. 0: one-way; 1: two-way
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $BothWay;

    /**
     * @var string VPC ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $SubnetId;

    /**
     * @var string Instance name
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $InstanceName;

    /**
     * @var string Public IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PublicIp;

    /**
     * @var string Private IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PrivateIp;

    /**
     * @var string Masked address. Multiple addresses are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Cidr;

    /**
     * @var string Port protocol template ID
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ServiceTemplateId;

    /**
     * @var integer Indicates whether to use the port protocol template. 0: no; 1: yes
     */
    public $ProtocolPortType;

    /**
     * @param integer $OrderIndex Priority
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SourceId Access source
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $SourceType Access source type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $TargetId Access destination
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $TargetType Access destination type. Default: 0. 0: IP; 1: VPC; 2: SUBNET; 3: CVM; 4: CLB; 5: ENI; 6: CDB; 7: Parameter template. 100: asset group
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Protocol Protocol
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Port Destination port
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Strategy Policy. 1: block; 2: allow
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Direction Direction. 0: outbound; 1: inbound. 1 by default
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Region Region
     * @param string $Detail Description
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Status Toggle status. 0: off; 1: on
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $IsNew Indicates whether the rule is normal. 0: normal; 1: abnormal
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $BothWay One-way/two-way. 0: one-way; 1: two-way
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $VpcId VPC ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $SubnetId Subnet ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $InstanceName Instance name
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $PublicIp Public IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $PrivateIp Private IP. Multiple IPs are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $Cidr Masked address. Multiple addresses are separated by commas.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $ServiceTemplateId Port protocol template ID
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $ProtocolPortType Indicates whether to use the port protocol template. 0: no; 1: yes
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

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("BothWay",$param) and $param["BothWay"] !== null) {
            $this->BothWay = $param["BothWay"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("ProtocolPortType",$param) and $param["ProtocolPortType"] !== null) {
            $this->ProtocolPortType = $param["ProtocolPortType"];
        }
    }
}
