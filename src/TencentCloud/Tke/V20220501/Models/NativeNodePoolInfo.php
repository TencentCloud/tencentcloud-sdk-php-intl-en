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
 * Native node pool information
 *
 * @method MachineSetScaling getScaling() Obtain Scaling configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setScaling(MachineSetScaling $Scaling) Set Scaling configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getSubnetIds() Obtain Subnet list
 * @method void setSubnetIds(array $SubnetIds) Set Subnet list
 * @method array getSecurityGroupIds() Obtain Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method MachineUpgradeSettings getUpgradeSettings() Obtain Automatic upgrade configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUpgradeSettings(MachineUpgradeSettings $UpgradeSettings) Set Automatic upgrade configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getAutoRepair() Obtain Whether to enable self-healing capability
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoRepair(boolean $AutoRepair) Set Whether to enable self-healing capability
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getInstanceChargeType() Obtain Node billing type
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Node billing type
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Billing configuration of monthly subscription models
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Billing configuration of monthly subscription models
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method Disk getSystemDisk() Obtain System disk configuration
 * @method void setSystemDisk(Disk $SystemDisk) Set System disk configuration
 * @method array getKeyIds() Obtain Key ID list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setKeyIds(array $KeyIds) Set Key ID list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method ManagementConfig getManagement() Obtain Machine system configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setManagement(ManagementConfig $Management) Set Machine system configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getHealthCheckPolicyName() Obtain Fault self-healing rule name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setHealthCheckPolicyName(string $HealthCheckPolicyName) Set Fault self-healing rule name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getHostNamePattern() Obtain hostname pattern string of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setHostNamePattern(string $HostNamePattern) Set hostname pattern string of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getKubeletArgs() Obtain kubelet custom parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setKubeletArgs(array $KubeletArgs) Set kubelet custom parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method LifecycleConfig getLifecycle() Obtain Predefined script
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setLifecycle(LifecycleConfig $Lifecycle) Set Predefined script
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getRuntimeRootDir() Obtain Runtime root directory
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRuntimeRootDir(string $RuntimeRootDir) Set Runtime root directory
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getEnableAutoscaling() Obtain Whether to enable Auto Scaling (AS)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setEnableAutoscaling(boolean $EnableAutoscaling) Set Whether to enable Auto Scaling (AS)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getInstanceTypes() Obtain List of models
 * @method void setInstanceTypes(array $InstanceTypes) Set List of models
 * @method integer getReplicas() Obtain Desired node count
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setReplicas(integer $Replicas) Set Desired node count
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getReadyReplicas() Obtain Number of ready machines
 * @method void setReadyReplicas(integer $ReadyReplicas) Set Number of ready machines
 * @method InternetAccessible getInternetAccessible() Obtain Public network bandwidth configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Public network bandwidth configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getDataDisks() Obtain Data disk of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDataDisks(array $DataDisks) Set Data disk of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getMachineType() Obtain Native node models: Native, NativeCVM
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMachineType(string $MachineType) Set Native node models: Native, NativeCVM
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class NativeNodePoolInfo extends AbstractModel
{
    /**
     * @var MachineSetScaling Scaling configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Scaling;

    /**
     * @var array Subnet list
     */
    public $SubnetIds;

    /**
     * @var array Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SecurityGroupIds;

    /**
     * @var MachineUpgradeSettings Automatic upgrade configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $UpgradeSettings;

    /**
     * @var boolean Whether to enable self-healing capability
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoRepair;

    /**
     * @var string Node billing type
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Billing configuration of monthly subscription models
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $InstanceChargePrepaid;

    /**
     * @var Disk System disk configuration
     */
    public $SystemDisk;

    /**
     * @var array Key ID list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $KeyIds;

    /**
     * @var ManagementConfig Machine system configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Management;

    /**
     * @var string Fault self-healing rule name
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $HealthCheckPolicyName;

    /**
     * @var string hostname pattern string of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $HostNamePattern;

    /**
     * @var array kubelet custom parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $KubeletArgs;

    /**
     * @var LifecycleConfig Predefined script
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Lifecycle;

    /**
     * @var string Runtime root directory
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $RuntimeRootDir;

    /**
     * @var boolean Whether to enable Auto Scaling (AS)
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $EnableAutoscaling;

    /**
     * @var array List of models
     */
    public $InstanceTypes;

    /**
     * @var integer Desired node count
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Replicas;

    /**
     * @var integer Number of ready machines
     */
    public $ReadyReplicas;

    /**
     * @var InternetAccessible Public network bandwidth configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $InternetAccessible;

    /**
     * @var array Data disk of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DataDisks;

    /**
     * @var string Native node models: Native, NativeCVM
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MachineType;

    /**
     * @param MachineSetScaling $Scaling Scaling configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $SubnetIds Subnet list
     * @param array $SecurityGroupIds Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param MachineUpgradeSettings $UpgradeSettings Automatic upgrade configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $AutoRepair Whether to enable self-healing capability
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $InstanceChargeType Node billing type
     * @param InstanceChargePrepaid $InstanceChargePrepaid Billing configuration of monthly subscription models
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param Disk $SystemDisk System disk configuration
     * @param array $KeyIds Key ID list
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param ManagementConfig $Management Machine system configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $HealthCheckPolicyName Fault self-healing rule name
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $HostNamePattern hostname pattern string of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $KubeletArgs kubelet custom parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param LifecycleConfig $Lifecycle Predefined script
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $RuntimeRootDir Runtime root directory
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $EnableAutoscaling Whether to enable Auto Scaling (AS)
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $InstanceTypes List of models
     * @param integer $Replicas Desired node count
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $ReadyReplicas Number of ready machines
     * @param InternetAccessible $InternetAccessible Public network bandwidth configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $DataDisks Data disk of native node pools
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $MachineType Native node models: Native, NativeCVM
Note: This field may return "null", indicating that no valid value can be obtained.
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

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
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

        if (array_key_exists("ReadyReplicas",$param) and $param["ReadyReplicas"] !== null) {
            $this->ReadyReplicas = $param["ReadyReplicas"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
