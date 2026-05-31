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
 * AddInstances request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getCpu() Obtain <p>Cpu cores</p>
 * @method void setCpu(integer $Cpu) Set <p>Cpu cores</p>
 * @method integer getMemory() Obtain Memory in GB
 * @method void setMemory(integer $Memory) Set Memory in GB
 * @method integer getReadOnlyCount() Obtain Number of added read-only instances. Value range: (0,16].
 * @method void setReadOnlyCount(integer $ReadOnlyCount) Set Number of added read-only instances. Value range: (0,16].
 * @method string getDeviceType() Obtain <p>Instance Machine Type. Supported values are as follows:</p><ul><li>common: indicates universal type</li><li>exclusive: indicates exclusive</li></ul>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance Machine Type. Supported values are as follows:</p><ul><li>common: indicates universal type</li><li>exclusive: indicates exclusive</li></ul>
 * @method string getInstanceGrpId() Obtain <p>Instance group ID, used when adding new instances to an existing RO group. If not passed, a new RO group will be created. The current version does not recommend transmitting this value.</p>
 * @method void setInstanceGrpId(string $InstanceGrpId) Set <p>Instance group ID, used when adding new instances to an existing RO group. If not passed, a new RO group will be created. The current version does not recommend transmitting this value.</p>
 * @method string getVpcId() Obtain <p>ID of the associated VPC network.</p>
 * @method void setVpcId(string $VpcId) Set <p>ID of the associated VPC network.</p>
 * @method string getSubnetId() Obtain <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
 * @method integer getPort() Obtain The port used when adding an RO group. Value range: [0,65535).
 * @method void setPort(integer $Port) Set The port used when adding an RO group. Value range: [0,65535).
 * @method string getInstanceName() Obtain Instance name. String length range: [0,64).
 * @method void setInstanceName(string $InstanceName) Set Instance name. String length range: [0,64).
 * @method integer getAutoVoucher() Obtain <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
 * @method string getDbType() Obtain <p>Database type, value ranges from...to...: </p><li> MYSQL </li>
 * @method void setDbType(string $DbType) Set <p>Database type, value ranges from...to...: </p><li> MYSQL </li>
 * @method string getOrderSource() Obtain <p>Order source, string length range [0,64)</p>
 * @method void setOrderSource(string $OrderSource) Set <p>Order source, string length range [0,64)</p>
 * @method integer getDealMode() Obtain <p>Transaction mode. 0: place order and pay; 1: place order</p>
 * @method void setDealMode(integer $DealMode) Set <p>Transaction mode. 0: place order and pay; 1: place order</p>
 * @method integer getParamTemplateId() Obtain <p>Parameter template ID</p>
 * @method void setParamTemplateId(integer $ParamTemplateId) Set <p>Parameter template ID</p>
 * @method array getInstanceParams() Obtain <p>Parameter list. InstanceParams is valid only when ParamTemplateId is passed in.</p>
 * @method void setInstanceParams(array $InstanceParams) Set <p>Parameter list. InstanceParams is valid only when ParamTemplateId is passed in.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
 * @method UpgradeProxy getUpgradeProxy() Obtain <p>proxy sync upgrade</p>
 * @method void setUpgradeProxy(UpgradeProxy $UpgradeProxy) Set <p>proxy sync upgrade</p>
 */
class AddInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Cpu cores</p>
     */
    public $Cpu;

    /**
     * @var integer Memory in GB
     */
    public $Memory;

    /**
     * @var integer Number of added read-only instances. Value range: (0,16].
     */
    public $ReadOnlyCount;

    /**
     * @var string <p>Instance Machine Type. Supported values are as follows:</p><ul><li>common: indicates universal type</li><li>exclusive: indicates exclusive</li></ul>
     */
    public $DeviceType;

    /**
     * @var string <p>Instance group ID, used when adding new instances to an existing RO group. If not passed, a new RO group will be created. The current version does not recommend transmitting this value.</p>
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string <p>ID of the associated VPC network.</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
     */
    public $SubnetId;

    /**
     * @var integer The port used when adding an RO group. Value range: [0,65535).
     */
    public $Port;

    /**
     * @var string Instance name. String length range: [0,64).
     */
    public $InstanceName;

    /**
     * @var integer <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
     */
    public $AutoVoucher;

    /**
     * @var string <p>Database type, value ranges from...to...: </p><li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string <p>Order source, string length range [0,64)</p>
     */
    public $OrderSource;

    /**
     * @var integer <p>Transaction mode. 0: place order and pay; 1: place order</p>
     */
    public $DealMode;

    /**
     * @var integer <p>Parameter template ID</p>
     */
    public $ParamTemplateId;

    /**
     * @var array <p>Parameter list. InstanceParams is valid only when ParamTemplateId is passed in.</p>
     */
    public $InstanceParams;

    /**
     * @var array <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var UpgradeProxy <p>proxy sync upgrade</p>
     */
    public $UpgradeProxy;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $Cpu <p>Cpu cores</p>
     * @param integer $Memory Memory in GB
     * @param integer $ReadOnlyCount Number of added read-only instances. Value range: (0,16].
     * @param string $DeviceType <p>Instance Machine Type. Supported values are as follows:</p><ul><li>common: indicates universal type</li><li>exclusive: indicates exclusive</li></ul>
     * @param string $InstanceGrpId <p>Instance group ID, used when adding new instances to an existing RO group. If not passed, a new RO group will be created. The current version does not recommend transmitting this value.</p>
     * @param string $VpcId <p>ID of the associated VPC network.</p>
     * @param string $SubnetId <p>Subnet ID. If VpcId is set up, SubnetId is required.</p>
     * @param integer $Port The port used when adding an RO group. Value range: [0,65535).
     * @param string $InstanceName Instance name. String length range: [0,64).
     * @param integer $AutoVoucher <p>Whether to automatically select a voucher. 1: Yes; 0: No. Default is 0.</p>
     * @param string $DbType <p>Database type, value ranges from...to...: </p><li> MYSQL </li>
     * @param string $OrderSource <p>Order source, string length range [0,64)</p>
     * @param integer $DealMode <p>Transaction mode. 0: place order and pay; 1: place order</p>
     * @param integer $ParamTemplateId <p>Parameter template ID</p>
     * @param array $InstanceParams <p>Parameter list. InstanceParams is valid only when ParamTemplateId is passed in.</p>
     * @param array $SecurityGroupIds <p>Security group ID. You can specify security groups when creating a read-only instance.</p>
     * @param UpgradeProxy $UpgradeProxy <p>proxy sync upgrade</p>
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("ReadOnlyCount",$param) and $param["ReadOnlyCount"] !== null) {
            $this->ReadOnlyCount = $param["ReadOnlyCount"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("OrderSource",$param) and $param["OrderSource"] !== null) {
            $this->OrderSource = $param["OrderSource"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("InstanceParams",$param) and $param["InstanceParams"] !== null) {
            $this->InstanceParams = [];
            foreach ($param["InstanceParams"] as $key => $value){
                $obj = new ModifyParamItem();
                $obj->deserialize($value);
                array_push($this->InstanceParams, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("UpgradeProxy",$param) and $param["UpgradeProxy"] !== null) {
            $this->UpgradeProxy = new UpgradeProxy();
            $this->UpgradeProxy->deserialize($param["UpgradeProxy"]);
        }
    }
}
