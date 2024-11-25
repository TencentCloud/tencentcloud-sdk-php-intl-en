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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modify native node pool parameters
 *
 * @method MachineSetScaling getScaling() Obtain Scaling configuration
 * @method void setScaling(MachineSetScaling $Scaling) Set Scaling configuration
 * @method array getSubnetIds() Obtain Subnet list
 * @method void setSubnetIds(array $SubnetIds) Set Subnet list
 * @method array getSecurityGroupIds() Obtain Security group list
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group list
 * @method MachineUpgradeSettings getUpgradeSettings() Obtain Automatic upgrade configuration
 * @method void setUpgradeSettings(MachineUpgradeSettings $UpgradeSettings) Set Automatic upgrade configuration
 * @method boolean getAutoRepair() Obtain Whether to enable self-healing capability
 * @method void setAutoRepair(boolean $AutoRepair) Set Whether to enable self-healing capability
 * @method string getInstanceChargeType() Obtain Change the node billing type
Currently, only pay-as-you-go to monthly subscription is supported:
- PREPAID

 * @method void setInstanceChargeType(string $InstanceChargeType) Set Change the node billing type
Currently, only pay-as-you-go to monthly subscription is supported:
- PREPAID

 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Billing configuration of monthly subscription models
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Billing configuration of monthly subscription models
 * @method Disk getSystemDisk() Obtain System disk configuration
 * @method void setSystemDisk(Disk $SystemDisk) Set System disk configuration
 * @method ManagementConfig getManagement() Obtain Machine system configuration
 * @method void setManagement(ManagementConfig $Management) Set Machine system configuration
 * @method string getHealthCheckPolicyName() Obtain Fault self-healing rule name
 * @method void setHealthCheckPolicyName(string $HealthCheckPolicyName) Set Fault self-healing rule name
 * @method string getHostNamePattern() Obtain hostname pattern string of native node pools
 * @method void setHostNamePattern(string $HostNamePattern) Set hostname pattern string of native node pools
 * @method array getKubeletArgs() Obtain kubelet custom parameters
 * @method void setKubeletArgs(array $KubeletArgs) Set kubelet custom parameters
 * @method LifecycleConfig getLifecycle() Obtain Predefined script
 * @method void setLifecycle(LifecycleConfig $Lifecycle) Set Predefined script
 * @method string getRuntimeRootDir() Obtain Runtime root directory
 * @method void setRuntimeRootDir(string $RuntimeRootDir) Set Runtime root directory
 * @method boolean getEnableAutoscaling() Obtain Whether to enable Auto Scaling (AS)
 * @method void setEnableAutoscaling(boolean $EnableAutoscaling) Set Whether to enable Auto Scaling (AS)
 * @method array getInstanceTypes() Obtain List of models
 * @method void setInstanceTypes(array $InstanceTypes) Set List of models
 * @method integer getReplicas() Obtain Desired node count
 * @method void setReplicas(integer $Replicas) Set Desired node count
 * @method array getDataDisks() Obtain Data disk list
 * @method void setDataDisks(array $DataDisks) Set Data disk list
 * @method array getKeyIds() Obtain ssh public key ID array
 * @method void setKeyIds(array $KeyIds) Set ssh public key ID array
 */
class UpdateNativeNodePoolParam extends AbstractModel
{
    /**
     * @var MachineSetScaling Scaling configuration
     */
    public $Scaling;

    /**
     * @var array Subnet list
     */
    public $SubnetIds;

    /**
     * @var array Security group list
     */
    public $SecurityGroupIds;

    /**
     * @var MachineUpgradeSettings Automatic upgrade configuration
     */
    public $UpgradeSettings;

    /**
     * @var boolean Whether to enable self-healing capability
     */
    public $AutoRepair;

    /**
     * @var string Change the node billing type
Currently, only pay-as-you-go to monthly subscription is supported:
- PREPAID

     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Billing configuration of monthly subscription models
     */
    public $InstanceChargePrepaid;

    /**
     * @var Disk System disk configuration
     */
    public $SystemDisk;

    /**
     * @var ManagementConfig Machine system configuration
     */
    public $Management;

    /**
     * @var string Fault self-healing rule name
     */
    public $HealthCheckPolicyName;

    /**
     * @var string hostname pattern string of native node pools
     */
    public $HostNamePattern;

    /**
     * @var array kubelet custom parameters
     */
    public $KubeletArgs;

    /**
     * @var LifecycleConfig Predefined script
     */
    public $Lifecycle;

    /**
     * @var string Runtime root directory
     */
    public $RuntimeRootDir;

    /**
     * @var boolean Whether to enable Auto Scaling (AS)
     */
    public $EnableAutoscaling;

    /**
     * @var array List of models
     */
    public $InstanceTypes;

    /**
     * @var integer Desired node count
     */
    public $Replicas;

    /**
     * @var array Data disk list
     */
    public $DataDisks;

    /**
     * @var array ssh public key ID array
     */
    public $KeyIds;

    /**
     * @param MachineSetScaling $Scaling Scaling configuration
     * @param array $SubnetIds Subnet list
     * @param array $SecurityGroupIds Security group list
     * @param MachineUpgradeSettings $UpgradeSettings Automatic upgrade configuration
     * @param boolean $AutoRepair Whether to enable self-healing capability
     * @param string $InstanceChargeType Change the node billing type
Currently, only pay-as-you-go to monthly subscription is supported:
- PREPAID

     * @param InstanceChargePrepaid $InstanceChargePrepaid Billing configuration of monthly subscription models
     * @param Disk $SystemDisk System disk configuration
     * @param ManagementConfig $Management Machine system configuration
     * @param string $HealthCheckPolicyName Fault self-healing rule name
     * @param string $HostNamePattern hostname pattern string of native node pools
     * @param array $KubeletArgs kubelet custom parameters
     * @param LifecycleConfig $Lifecycle Predefined script
     * @param string $RuntimeRootDir Runtime root directory
     * @param boolean $EnableAutoscaling Whether to enable Auto Scaling (AS)
     * @param array $InstanceTypes List of models
     * @param integer $Replicas Desired node count
     * @param array $DataDisks Data disk list
     * @param array $KeyIds ssh public key ID array
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
        if (array_key_exists("Scaling",$param) and $param["Scaling"] !== null) {
            $this->Scaling = new MachineSetScaling();
            $this->Scaling->deserialize($param["Scaling"]);
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("UpgradeSettings",$param) and $param["UpgradeSettings"] !== null) {
            $this->UpgradeSettings = new MachineUpgradeSettings();
            $this->UpgradeSettings->deserialize($param["UpgradeSettings"]);
        }

        if (array_key_exists("AutoRepair",$param) and $param["AutoRepair"] !== null) {
            $this->AutoRepair = $param["AutoRepair"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("Management",$param) and $param["Management"] !== null) {
            $this->Management = new ManagementConfig();
            $this->Management->deserialize($param["Management"]);
        }

        if (array_key_exists("HealthCheckPolicyName",$param) and $param["HealthCheckPolicyName"] !== null) {
            $this->HealthCheckPolicyName = $param["HealthCheckPolicyName"];
        }

        if (array_key_exists("HostNamePattern",$param) and $param["HostNamePattern"] !== null) {
            $this->HostNamePattern = $param["HostNamePattern"];
        }

        if (array_key_exists("KubeletArgs",$param) and $param["KubeletArgs"] !== null) {
            $this->KubeletArgs = $param["KubeletArgs"];
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new LifecycleConfig();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("RuntimeRootDir",$param) and $param["RuntimeRootDir"] !== null) {
            $this->RuntimeRootDir = $param["RuntimeRootDir"];
        }

        if (array_key_exists("EnableAutoscaling",$param) and $param["EnableAutoscaling"] !== null) {
            $this->EnableAutoscaling = $param["EnableAutoscaling"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }
    }
}
