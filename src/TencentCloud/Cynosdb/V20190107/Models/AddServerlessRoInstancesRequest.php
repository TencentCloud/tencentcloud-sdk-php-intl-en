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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddServerlessRoInstances request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster Id</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster Id</p>
 * @method float getMinCpu() Obtain <p>Minimum specification of the ro instance</p>
 * @method void setMinCpu(float $MinCpu) Set <p>Minimum specification of the ro instance</p>
 * @method float getMaxCpu() Obtain <p>Maximum specification of ro instance</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>Maximum specification of ro instance</p>
 * @method string getInstanceName() Obtain <p>ro instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>ro instance name</p>
 * @method string getVpcId() Obtain <p>VPC network ID</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC network ID</p>
 * @method string getSubnetId() Obtain <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
 * @method integer getPort() Obtain <p>Port used when adding new RO groups, value range [0,65535)</p>
 * @method void setPort(integer $Port) Set <p>Port used when adding new RO groups, value range [0,65535)</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
 * @method string getAutoPause() Obtain <p>Whether to automatically pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul>
 * @method void setAutoPause(string $AutoPause) Set <p>Whether to automatically pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul>
 * @method integer getAutoPauseDelay() Obtain <p>Auto-pause time</p><p>Unit: s</p>
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) Set <p>Auto-pause time</p><p>Unit: s</p>
 * @method array getInstanceParams() Obtain <p>Instance parameter</p>
 * @method void setInstanceParams(array $InstanceParams) Set <p>Instance parameter</p>
 * @method integer getParamTemplateId() Obtain <p>Parameter template</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) Set <p>Parameter template</p>
 * @method integer getRoCount() Obtain <p>Number of newly-added read-only instances</p>
 * @method void setRoCount(integer $RoCount) Set <p>Number of newly-added read-only instances</p>
 */
class AddServerlessRoInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster Id</p>
     */
    public $ClusterId;

    /**
     * @var float <p>Minimum specification of the ro instance</p>
     */
    public $MinCpu;

    /**
     * @var float <p>Maximum specification of ro instance</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>ro instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>VPC network ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Port used when adding new RO groups, value range [0,65535)</p>
     */
    public $Port;

    /**
     * @var array <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>Whether to automatically pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul>
     */
    public $AutoPause;

    /**
     * @var integer <p>Auto-pause time</p><p>Unit: s</p>
     */
    public $AutoPauseDelay;

    /**
     * @var array <p>Instance parameter</p>
     */
    public $InstanceParams;

    /**
     * @var integer <p>Parameter template</p>
     */
    public $ParamTemplateId;

    /**
     * @var integer <p>Number of newly-added read-only instances</p>
     */
    public $RoCount;

    /**
     * @param string $ClusterId <p>Cluster Id</p>
     * @param float $MinCpu <p>Minimum specification of the ro instance</p>
     * @param float $MaxCpu <p>Maximum specification of ro instance</p>
     * @param string $InstanceName <p>ro instance name</p>
     * @param string $VpcId <p>VPC network ID</p>
     * @param string $SubnetId <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
     * @param integer $Port <p>Port used when adding new RO groups, value range [0,65535)</p>
     * @param array $SecurityGroupIds <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
     * @param string $AutoPause <p>Whether to automatically pause</p><p>Enumeration value:</p><ul><li>yes: Yes</li><li>no: No</li></ul>
     * @param integer $AutoPauseDelay <p>Auto-pause time</p><p>Unit: s</p>
     * @param array $InstanceParams <p>Instance parameter</p>
     * @param integer $ParamTemplateId <p>Parameter template</p>
     * @param integer $RoCount <p>Number of newly-added read-only instances</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("InstanceParams",$param) and $param["InstanceParams"] !== null) {
            $this->InstanceParams = [];
            foreach ($param["InstanceParams"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->InstanceParams, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("RoCount",$param) and $param["RoCount"] !== null) {
            $this->RoCount = $param["RoCount"];
        }
    }
}
