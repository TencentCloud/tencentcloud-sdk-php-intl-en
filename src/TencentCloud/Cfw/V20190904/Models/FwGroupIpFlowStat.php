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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC firewall status monitoring diagram
 *
 * @method string getIp() Obtain IP
 * @method void setIp(string $Ip) Set IP
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getVpcId() Obtain VPCID
 * @method void setVpcId(string $VpcId) Set VPCID
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method integer getFlowMax() Obtain Peak traffic
 * @method void setFlowMax(integer $FlowMax) Set Peak traffic
 * @method float getFlowAvg() Obtain Average bandwidth
 * @method void setFlowAvg(float $FlowAvg) Set Average bandwidth
 * @method integer getTcRuleStatus() Obtain Rate limiting status
 * @method void setTcRuleStatus(integer $TcRuleStatus) Set Rate limiting status
 * @method string getFwInsId() Obtain Firewall ID.
 * @method void setFwInsId(string $FwInsId) Set Firewall ID.
 * @method integer getIpVersion() Obtain 0 IPV4 , 1 IPV6
 * @method void setIpVersion(integer $IpVersion) Set 0 IPV4 , 1 IPV6
 */
class FwGroupIpFlowStat extends AbstractModel
{
    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string VPCID
     */
    public $VpcId;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var integer Peak traffic
     */
    public $FlowMax;

    /**
     * @var float Average bandwidth
     */
    public $FlowAvg;

    /**
     * @var integer Rate limiting status
     */
    public $TcRuleStatus;

    /**
     * @var string Firewall ID.
     */
    public $FwInsId;

    /**
     * @var integer 0 IPV4 , 1 IPV6
     */
    public $IpVersion;

    /**
     * @param string $Ip IP
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name.
     * @param string $VpcId VPCID
     * @param string $VpcName VPC name
     * @param integer $FlowMax Peak traffic
     * @param float $FlowAvg Average bandwidth
     * @param integer $TcRuleStatus Rate limiting status
     * @param string $FwInsId Firewall ID.
     * @param integer $IpVersion 0 IPV4 , 1 IPV6
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("FlowMax",$param) and $param["FlowMax"] !== null) {
            $this->FlowMax = $param["FlowMax"];
        }

        if (array_key_exists("FlowAvg",$param) and $param["FlowAvg"] !== null) {
            $this->FlowAvg = $param["FlowAvg"];
        }

        if (array_key_exists("TcRuleStatus",$param) and $param["TcRuleStatus"] !== null) {
            $this->TcRuleStatus = $param["TcRuleStatus"];
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
