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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddInstances request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory in GB
 * @method void setMemory(integer $Memory) Set Memory in GB
 * @method integer getReadOnlyCount() Obtain Number of added read-only instances. Value range: (0,16].
 * @method void setReadOnlyCount(integer $ReadOnlyCount) Set Number of added read-only instances. Value range: (0,16].
 * @method string getInstanceGrpId() Obtain Instance group ID, which will be used when you add an instance in an existing RO group. If this parameter is left empty, an RO group will be created. But it is not recommended to pass in this parameter for the current version, as this version has been disused.
 * @method void setInstanceGrpId(string $InstanceGrpId) Set Instance group ID, which will be used when you add an instance in an existing RO group. If this parameter is left empty, an RO group will be created. But it is not recommended to pass in this parameter for the current version, as this version has been disused.
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID. If `VpcId` is set, `SubnetId` is required.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. If `VpcId` is set, `SubnetId` is required.
 * @method integer getPort() Obtain The port used when adding an RO group. Value range: [0,65535).
 * @method void setPort(integer $Port) Set The port used when adding an RO group. Value range: [0,65535).
 * @method string getInstanceName() Obtain Instance name. String length range: [0,64).
 * @method void setInstanceName(string $InstanceName) Set Instance name. String length range: [0,64).
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
 * @method string getOrderSource() Obtain Order source. String length range: [0,64).
 * @method void setOrderSource(string $OrderSource) Set Order source. String length range: [0,64).
 * @method integer getDealMode() Obtain Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
 * @method void setDealMode(integer $DealMode) Set Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
 * @method integer getParamTemplateId() Obtain Parameter template ID
 * @method void setParamTemplateId(integer $ParamTemplateId) Set Parameter template ID
 * @method array getInstanceParams() Obtain Parameter list, which is valid only if `InstanceParams` is passed in to `ParamTemplateId`.
 * @method void setInstanceParams(array $InstanceParams) Set Parameter list, which is valid only if `InstanceParams` is passed in to `ParamTemplateId`.
 * @method array getSecurityGroupIds() Obtain Security group ID. You can specify an security group when creating a read-only instance.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID. You can specify an security group when creating a read-only instance.
 */
class AddInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Number of CPU cores
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
     * @var string Instance group ID, which will be used when you add an instance in an existing RO group. If this parameter is left empty, an RO group will be created. But it is not recommended to pass in this parameter for the current version, as this version has been disused.
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID. If `VpcId` is set, `SubnetId` is required.
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
     * @var integer Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
     */
    public $DbType;

    /**
     * @var string Order source. String length range: [0,64).
     */
    public $OrderSource;

    /**
     * @var integer Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
     */
    public $DealMode;

    /**
     * @var integer Parameter template ID
     */
    public $ParamTemplateId;

    /**
     * @var array Parameter list, which is valid only if `InstanceParams` is passed in to `ParamTemplateId`.
     */
    public $InstanceParams;

    /**
     * @var array Security group ID. You can specify an security group when creating a read-only instance.
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Cpu Number of CPU cores
     * @param integer $Memory Memory in GB
     * @param integer $ReadOnlyCount Number of added read-only instances. Value range: (0,16].
     * @param string $InstanceGrpId Instance group ID, which will be used when you add an instance in an existing RO group. If this parameter is left empty, an RO group will be created. But it is not recommended to pass in this parameter for the current version, as this version has been disused.
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID. If `VpcId` is set, `SubnetId` is required.
     * @param integer $Port The port used when adding an RO group. Value range: [0,65535).
     * @param string $InstanceName Instance name. String length range: [0,64).
     * @param integer $AutoVoucher Whether to automatically select a voucher. 1: yes; 0: no. Default value: 0
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
     * @param string $OrderSource Order source. String length range: [0,64).
     * @param integer $DealMode Transaction mode. Valid values: `0` (place and pay for an order), `1` (place an order)
     * @param integer $ParamTemplateId Parameter template ID
     * @param array $InstanceParams Parameter list, which is valid only if `InstanceParams` is passed in to `ParamTemplateId`.
     * @param array $SecurityGroupIds Security group ID. You can specify an security group when creating a read-only instance.
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
    }
}
