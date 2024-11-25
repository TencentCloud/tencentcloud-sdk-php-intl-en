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
 * Native node pool creation parameters
 *
 * @method MachineSetScaling getScaling() Obtain Node pool scaling configuration
 * @method void setScaling(MachineSetScaling $Scaling) Set Node pool scaling configuration
 * @method array getSubnetIds() Obtain Subnet list
 * @method void setSubnetIds(array $SubnetIds) Set Subnet list
 * @method string getInstanceChargeType() Obtain Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
 * @method Disk getSystemDisk() Obtain System disk configuration
 * @method void setSystemDisk(Disk $SystemDisk) Set System disk configuration
 * @method array getInstanceTypes() Obtain List of models
 * @method void setInstanceTypes(array $InstanceTypes) Set List of models
 * @method array getSecurityGroupIds() Obtain Security group list
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group list
 * @method MachineUpgradeSettings getUpgradeSettings() Obtain Automatic upgrade configuration
 * @method void setUpgradeSettings(MachineUpgradeSettings $UpgradeSettings) Set Automatic upgrade configuration
 * @method boolean getAutoRepair() Obtain Whether to enable self-healing capability
 * @method void setAutoRepair(boolean $AutoRepair) Set Whether to enable self-healing capability
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Billing configuration of monthly subscription models
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Billing configuration of monthly subscription models
 * @method ManagementConfig getManagement() Obtain Management parameter configuration of node pools
 * @method void setManagement(ManagementConfig $Management) Set Management parameter configuration of node pools
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
 * @method integer getReplicas() Obtain Desired node count
 * @method void setReplicas(integer $Replicas) Set Desired node count
 * @method InternetAccessible getInternetAccessible() Obtain Public network bandwidth configuration
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Public network bandwidth configuration
 * @method array getDataDisks() Obtain Data disk list of native node pools
 * @method void setDataDisks(array $DataDisks) Set Data disk list of native node pools
 * @method array getKeyIds() Obtain Node pool ssh public key ID array
 * @method void setKeyIds(array $KeyIds) Set Node pool ssh public key ID array
 * @method string getMachineType() Obtain Node pool type
 * @method void setMachineType(string $MachineType) Set Node pool type
 */
class CreateNativeNodePoolParam extends AbstractModel
{
    /**
     * @var MachineSetScaling Node pool scaling configuration
     */
    public $Scaling;

    /**
     * @var array Subnet list
     */
    public $SubnetIds;

    /**
     * @var string Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
     */
    public $InstanceChargeType;

    /**
     * @var Disk System disk configuration
     */
    public $SystemDisk;

    /**
     * @var array List of models
     */
    public $InstanceTypes;

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
     * @var InstanceChargePrepaid Billing configuration of monthly subscription models
     */
    public $InstanceChargePrepaid;

    /**
     * @var ManagementConfig Management parameter configuration of node pools
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
     * @var integer Desired node count
     */
    public $Replicas;

    /**
     * @var InternetAccessible Public network bandwidth configuration
     */
    public $InternetAccessible;

    /**
     * @var array Data disk list of native node pools
     */
    public $DataDisks;

    /**
     * @var array Node pool ssh public key ID array
     */
    public $KeyIds;

    /**
     * @var string Node pool type
     */
    public $MachineType;

    /**
     * @param MachineSetScaling $Scaling Node pool scaling configuration
     * @param array $SubnetIds Subnet list
     * @param string $InstanceChargeType Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
     * @param Disk $SystemDisk System disk configuration
     * @param array $InstanceTypes List of models
     * @param array $SecurityGroupIds Security group list
     * @param MachineUpgradeSettings $UpgradeSettings Automatic upgrade configuration
     * @param boolean $AutoRepair Whether to enable self-healing capability
     * @param InstanceChargePrepaid $InstanceChargePrepaid Billing configuration of monthly subscription models
     * @param ManagementConfig $Management Management parameter configuration of node pools
     * @param string $HealthCheckPolicyName Fault self-healing rule name
     * @param string $HostNamePattern hostname pattern string of native node pools
     * @param array $KubeletArgs kubelet custom parameters
     * @param LifecycleConfig $Lifecycle Predefined script
     * @param string $RuntimeRootDir Runtime root directory
     * @param boolean $EnableAutoscaling Whether to enable Auto Scaling (AS)
     * @param integer $Replicas Desired node count
     * @param InternetAccessible $InternetAccessible Public network bandwidth configuration
     * @param array $DataDisks Data disk list of native node pools
     * @param array $KeyIds Node pool ssh public key ID array
     * @param string $MachineType Node pool type
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
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

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
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

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
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

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
