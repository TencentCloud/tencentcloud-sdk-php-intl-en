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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterMachine request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID</p>
 * @method array getMachineNames() Obtain <p>Node name list.</p>
 * @method void setMachineNames(array $MachineNames) Set <p>Node name list.</p>
 * @method string getDisplayName() Obtain <p>display name of the machine</p>
 * @method void setDisplayName(string $DisplayName) Set <p>display name of the machine</p>
 * @method Disk getSystemDisk() Obtain <p>System disk C</p>
 * @method void setSystemDisk(Disk $SystemDisk) Set <p>System disk C</p>
 * @method array getSecurityGroupIDs() Obtain <p>Security group list</p>
 * @method void setSecurityGroupIDs(array $SecurityGroupIDs) Set <p>Security group list</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Node prepayment information.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Node prepayment information.</p>
 * @method string getInstanceChargeType() Obtain <p>Change node billing type</p><p>Enumeration value:</p><ul><li>POSTPAID_BY_HOUR: The targeted billing type is pay-as-you-go.</li><li>PREPAID: The targeted billing type is annual and monthly subscription.</li></ul>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Change node billing type</p><p>Enumeration value:</p><ul><li>POSTPAID_BY_HOUR: The targeted billing type is pay-as-you-go.</li><li>PREPAID: The targeted billing type is annual and monthly subscription.</li></ul>
 * @method boolean getModifyPortableDataDisk() Obtain <p>Whether to switch the billing mode of the elastic data cloud disk simultaneously. Value ranges from true to false: true indicates switching the billing mode of the elastic data cloud disk, false indicates not switching the billing mode of the elastic data cloud disk. Default value: true.</p><p>Default value: true</p>
 * @method void setModifyPortableDataDisk(boolean $ModifyPortableDataDisk) Set <p>Whether to switch the billing mode of the elastic data cloud disk simultaneously. Value ranges from true to false: true indicates switching the billing mode of the elastic data cloud disk, false indicates not switching the billing mode of the elastic data cloud disk. Default value: true.</p><p>Default value: true</p>
 */
class ModifyClusterMachineRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID</p>
     */
    public $ClusterId;

    /**
     * @var array <p>Node name list.</p>
     */
    public $MachineNames;

    /**
     * @var string <p>display name of the machine</p>
     */
    public $DisplayName;

    /**
     * @var Disk <p>System disk C</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>Security group list</p>
     */
    public $SecurityGroupIDs;

    /**
     * @var InstanceChargePrepaid <p>Node prepayment information.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>Change node billing type</p><p>Enumeration value:</p><ul><li>POSTPAID_BY_HOUR: The targeted billing type is pay-as-you-go.</li><li>PREPAID: The targeted billing type is annual and monthly subscription.</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var boolean <p>Whether to switch the billing mode of the elastic data cloud disk simultaneously. Value ranges from true to false: true indicates switching the billing mode of the elastic data cloud disk, false indicates not switching the billing mode of the elastic data cloud disk. Default value: true.</p><p>Default value: true</p>
     */
    public $ModifyPortableDataDisk;

    /**
     * @param string $ClusterId <p>Cluster ID</p>
     * @param array $MachineNames <p>Node name list.</p>
     * @param string $DisplayName <p>display name of the machine</p>
     * @param Disk $SystemDisk <p>System disk C</p>
     * @param array $SecurityGroupIDs <p>Security group list</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Node prepayment information.</p>
     * @param string $InstanceChargeType <p>Change node billing type</p><p>Enumeration value:</p><ul><li>POSTPAID_BY_HOUR: The targeted billing type is pay-as-you-go.</li><li>PREPAID: The targeted billing type is annual and monthly subscription.</li></ul>
     * @param boolean $ModifyPortableDataDisk <p>Whether to switch the billing mode of the elastic data cloud disk simultaneously. Value ranges from true to false: true indicates switching the billing mode of the elastic data cloud disk, false indicates not switching the billing mode of the elastic data cloud disk. Default value: true.</p><p>Default value: true</p>
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

        if (array_key_exists("MachineNames",$param) and $param["MachineNames"] !== null) {
            $this->MachineNames = $param["MachineNames"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("SecurityGroupIDs",$param) and $param["SecurityGroupIDs"] !== null) {
            $this->SecurityGroupIDs = $param["SecurityGroupIDs"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ModifyPortableDataDisk",$param) and $param["ModifyPortableDataDisk"] !== null) {
            $this->ModifyPortableDataDisk = $param["ModifyPortableDataDisk"];
        }
    }
}
