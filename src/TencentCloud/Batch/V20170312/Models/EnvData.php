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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compute environment information
 *
 * @method string getInstanceType() Obtain CVM instance type. It cannot be specified together with `InstanceTypes` or `InstanceTypeOptions`.
 * @method void setInstanceType(string $InstanceType) Set CVM instance type. It cannot be specified together with `InstanceTypes` or `InstanceTypeOptions`.
 * @method string getImageId() Obtain CVM image ID
 * @method void setImageId(string $ImageId) Set CVM image ID
 * @method SystemDisk getSystemDisk() Obtain System disk configuration of the instance
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set System disk configuration of the instance
 * @method array getDataDisks() Obtain Data disk configuration of the instance
 * @method void setDataDisks(array $DataDisks) Set Data disk configuration of the instance
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain Information of the VPC configuration. It cannot be specified together with `Zones` and `VirtualPrivateClouds`.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set Information of the VPC configuration. It cannot be specified together with `Zones` and `VirtualPrivateClouds`.
 * @method InternetAccessible getInternetAccessible() Obtain Public network bandwidth configuration
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Public network bandwidth configuration
 * @method string getInstanceName() Obtain CVM instance display name
 * @method void setInstanceName(string $InstanceName) Set CVM instance display name
 * @method LoginSettings getLoginSettings() Obtain Instance login settings
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login settings
 * @method array getSecurityGroupIds() Obtain Security groups associated with the instance
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups associated with the instance
 * @method EnhancedService getEnhancedService() Obtain Whether to activate CWPP agent and Cloud Monitor. CWPP agent and Cloud Monitor are activated by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Whether to activate CWPP agent and Cloud Monitor. CWPP agent and Cloud Monitor are activated by default.
 * @method string getInstanceChargeType() Obtain CVM instance billing method <br><li>`POSTPAID_BY_HOUR` (default): Hourly-billed pay-as-you-go <br><li>`SPOTPAID`: Spot instance <br>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set CVM instance billing method <br><li>`POSTPAID_BY_HOUR` (default): Hourly-billed pay-as-you-go <br><li>`SPOTPAID`: Spot instance <br>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market-related options for instances, such as parameters related to spot instances.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market-related options for instances, such as parameters related to spot instances.
 * @method array getInstanceTypes() Obtain Types of CVM instances to create (up to 10). The system creates compute nodes of types specified in this list from top to down till the creation is successful. It cannot be specified together with `InstanceType` or `InstanceTypeOptions`. 
 * @method void setInstanceTypes(array $InstanceTypes) Set Types of CVM instances to create (up to 10). The system creates compute nodes of types specified in this list from top to down till the creation is successful. It cannot be specified together with `InstanceType` or `InstanceTypeOptions`. 
 * @method InstanceTypeOptions getInstanceTypeOptions() Obtain CVM instance model configuration. It cannot be specified together with `InstanceType` or `InstanceTypes`.
 * @method void setInstanceTypeOptions(InstanceTypeOptions $InstanceTypeOptions) Set CVM instance model configuration. It cannot be specified together with `InstanceType` or `InstanceTypes`.
 * @method array getZones() Obtain List of availability zones. You can create CVM cross AZs in the same region. It cannot be specified together with `VirtualPrivateCloud` or `VirtualPrivateClouds`.
 * @method void setZones(array $Zones) Set List of availability zones. You can create CVM cross AZs in the same region. It cannot be specified together with `VirtualPrivateCloud` or `VirtualPrivateClouds`.
 * @method array getVirtualPrivateClouds() Obtain List of VPCs (creation of CVM instances across VPCs is supported). It cannot be specified together with `VirtualPrivateCloud` or `Zones`.
 * @method void setVirtualPrivateClouds(array $VirtualPrivateClouds) Set List of VPCs (creation of CVM instances across VPCs is supported). It cannot be specified together with `VirtualPrivateCloud` or `Zones`.
 */
class EnvData extends AbstractModel
{
    /**
     * @var string CVM instance type. It cannot be specified together with `InstanceTypes` or `InstanceTypeOptions`.
     */
    public $InstanceType;

    /**
     * @var string CVM image ID
     */
    public $ImageId;

    /**
     * @var SystemDisk System disk configuration of the instance
     */
    public $SystemDisk;

    /**
     * @var array Data disk configuration of the instance
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud Information of the VPC configuration. It cannot be specified together with `Zones` and `VirtualPrivateClouds`.
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible Public network bandwidth configuration
     */
    public $InternetAccessible;

    /**
     * @var string CVM instance display name
     */
    public $InstanceName;

    /**
     * @var LoginSettings Instance login settings
     */
    public $LoginSettings;

    /**
     * @var array Security groups associated with the instance
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Whether to activate CWPP agent and Cloud Monitor. CWPP agent and Cloud Monitor are activated by default.
     */
    public $EnhancedService;

    /**
     * @var string CVM instance billing method <br><li>`POSTPAID_BY_HOUR` (default): Hourly-billed pay-as-you-go <br><li>`SPOTPAID`: Spot instance <br>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest Market-related options for instances, such as parameters related to spot instances.
     */
    public $InstanceMarketOptions;

    /**
     * @var array Types of CVM instances to create (up to 10). The system creates compute nodes of types specified in this list from top to down till the creation is successful. It cannot be specified together with `InstanceType` or `InstanceTypeOptions`. 
     */
    public $InstanceTypes;

    /**
     * @var InstanceTypeOptions CVM instance model configuration. It cannot be specified together with `InstanceType` or `InstanceTypes`.
     */
    public $InstanceTypeOptions;

    /**
     * @var array List of availability zones. You can create CVM cross AZs in the same region. It cannot be specified together with `VirtualPrivateCloud` or `VirtualPrivateClouds`.
     */
    public $Zones;

    /**
     * @var array List of VPCs (creation of CVM instances across VPCs is supported). It cannot be specified together with `VirtualPrivateCloud` or `Zones`.
     */
    public $VirtualPrivateClouds;

    /**
     * @param string $InstanceType CVM instance type. It cannot be specified together with `InstanceTypes` or `InstanceTypeOptions`.
     * @param string $ImageId CVM image ID
     * @param SystemDisk $SystemDisk System disk configuration of the instance
     * @param array $DataDisks Data disk configuration of the instance
     * @param VirtualPrivateCloud $VirtualPrivateCloud Information of the VPC configuration. It cannot be specified together with `Zones` and `VirtualPrivateClouds`.
     * @param InternetAccessible $InternetAccessible Public network bandwidth configuration
     * @param string $InstanceName CVM instance display name
     * @param LoginSettings $LoginSettings Instance login settings
     * @param array $SecurityGroupIds Security groups associated with the instance
     * @param EnhancedService $EnhancedService Whether to activate CWPP agent and Cloud Monitor. CWPP agent and Cloud Monitor are activated by default.
     * @param string $InstanceChargeType CVM instance billing method <br><li>`POSTPAID_BY_HOUR` (default): Hourly-billed pay-as-you-go <br><li>`SPOTPAID`: Spot instance <br>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-related options for instances, such as parameters related to spot instances.
     * @param array $InstanceTypes Types of CVM instances to create (up to 10). The system creates compute nodes of types specified in this list from top to down till the creation is successful. It cannot be specified together with `InstanceType` or `InstanceTypeOptions`. 
     * @param InstanceTypeOptions $InstanceTypeOptions CVM instance model configuration. It cannot be specified together with `InstanceType` or `InstanceTypes`.
     * @param array $Zones List of availability zones. You can create CVM cross AZs in the same region. It cannot be specified together with `VirtualPrivateCloud` or `VirtualPrivateClouds`.
     * @param array $VirtualPrivateClouds List of VPCs (creation of CVM instances across VPCs is supported). It cannot be specified together with `VirtualPrivateCloud` or `Zones`.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceMarketOptions",$param) and $param["InstanceMarketOptions"] !== null) {
            $this->InstanceMarketOptions = new InstanceMarketOptionsRequest();
            $this->InstanceMarketOptions->deserialize($param["InstanceMarketOptions"]);
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("InstanceTypeOptions",$param) and $param["InstanceTypeOptions"] !== null) {
            $this->InstanceTypeOptions = new InstanceTypeOptions();
            $this->InstanceTypeOptions->deserialize($param["InstanceTypeOptions"]);
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("VirtualPrivateClouds",$param) and $param["VirtualPrivateClouds"] !== null) {
            $this->VirtualPrivateClouds = [];
            foreach ($param["VirtualPrivateClouds"] as $key => $value){
                $obj = new VirtualPrivateCloud();
                $obj->deserialize($value);
                array_push($this->VirtualPrivateClouds, $obj);
            }
        }
    }
}
