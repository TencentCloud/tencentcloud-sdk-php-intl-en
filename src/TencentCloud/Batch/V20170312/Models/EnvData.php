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
 * @method string getInstanceType() 获取CVM instance type, which cannot be present together with InstanceTypes or InstanceTypeOptions at the same time.
 * @method void setInstanceType(string $InstanceType) 设置CVM instance type, which cannot be present together with InstanceTypes or InstanceTypeOptions at the same time.
 * @method string getImageId() 获取CVM image ID
 * @method void setImageId(string $ImageId) 设置CVM image ID
 * @method SystemDisk getSystemDisk() 获取Information of the instance's system disk configuration
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置Information of the instance's system disk configuration
 * @method array getDataDisks() 获取Information of the instance's data disk configuration
 * @method void setDataDisks(array $DataDisks) 设置Information of the instance's data disk configuration
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取Information of the VPC configuration, which cannot be specified together with Zones and VirtualPrivateClouds.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置Information of the VPC configuration, which cannot be specified together with Zones and VirtualPrivateClouds.
 * @method InternetAccessible getInternetAccessible() 获取Information of the public network bandwidth configuration
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置Information of the public network bandwidth configuration
 * @method string getInstanceName() 获取CVM instance display name
 * @method void setInstanceName(string $InstanceName) 设置CVM instance display name
 * @method LoginSettings getLoginSettings() 获取Instance login settings
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置Instance login settings
 * @method array getSecurityGroupIds() 获取Security group of the instance
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置Security group of the instance
 * @method EnhancedService getEnhancedService() 获取Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
 * @method string getInstanceChargeType() 获取CVM instance billing method <br><li>POSTPAID_BY_HOUR: pay-as-you-go by the hour <br><li>SPOTPAID: bidding <br>Default value: POSTPAID_BY_HOUR.
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置CVM instance billing method <br><li>POSTPAID_BY_HOUR: pay-as-you-go by the hour <br><li>SPOTPAID: bidding <br>Default value: POSTPAID_BY_HOUR.
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() 获取Market-related options of the instance, such as parameters related to spot instance
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) 设置Market-related options of the instance, such as parameters related to spot instance
 * @method array getInstanceTypes() 获取List of CVM instance types, which cannot be present together with InstanceType or InstanceTypeOptions at the same time. After the field is specified, the system will try creating compute nodes in the order of the models until successful creation and then stop the traversal process. Up to 10 models are supported.
 * @method void setInstanceTypes(array $InstanceTypes) 设置List of CVM instance types, which cannot be present together with InstanceType or InstanceTypeOptions at the same time. After the field is specified, the system will try creating compute nodes in the order of the models until successful creation and then stop the traversal process. Up to 10 models are supported.
 * @method InstanceTypeOptions getInstanceTypeOptions() 获取CVM instance model configuration, which cannot be present together with InstanceType or InstanceTypes at the same time.
 * @method void setInstanceTypeOptions(InstanceTypeOptions $InstanceTypeOptions) 设置CVM instance model configuration, which cannot be present together with InstanceType or InstanceTypes at the same time.
 * @method array getZones() 获取List of availability zones (creation of CVM instances across availability zones is supported), which cannot be specified together with VirtualPrivateCloud or VirtualPrivateClouds at the same time.
 * @method void setZones(array $Zones) 设置List of availability zones (creation of CVM instances across availability zones is supported), which cannot be specified together with VirtualPrivateCloud or VirtualPrivateClouds at the same time.
 * @method array getVirtualPrivateClouds() 获取List of VPCs (creation of CVM instances across VPCs is supported), which cannot be specified together with VirtualPrivateCloud or Zones at the same time.
 * @method void setVirtualPrivateClouds(array $VirtualPrivateClouds) 设置List of VPCs (creation of CVM instances across VPCs is supported), which cannot be specified together with VirtualPrivateCloud or Zones at the same time.
 */

/**
 *Compute environment information
 */
class EnvData extends AbstractModel
{
    /**
     * @var string CVM instance type, which cannot be present together with InstanceTypes or InstanceTypeOptions at the same time.
     */
    public $InstanceType;

    /**
     * @var string CVM image ID
     */
    public $ImageId;

    /**
     * @var SystemDisk Information of the instance's system disk configuration
     */
    public $SystemDisk;

    /**
     * @var array Information of the instance's data disk configuration
     */
    public $DataDisks;

    /**
     * @var VirtualPrivateCloud Information of the VPC configuration, which cannot be specified together with Zones and VirtualPrivateClouds.
     */
    public $VirtualPrivateCloud;

    /**
     * @var InternetAccessible Information of the public network bandwidth configuration
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
     * @var array Security group of the instance
     */
    public $SecurityGroupIds;

    /**
     * @var EnhancedService Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
     */
    public $EnhancedService;

    /**
     * @var string CVM instance billing method <br><li>POSTPAID_BY_HOUR: pay-as-you-go by the hour <br><li>SPOTPAID: bidding <br>Default value: POSTPAID_BY_HOUR.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest Market-related options of the instance, such as parameters related to spot instance
     */
    public $InstanceMarketOptions;

    /**
     * @var array List of CVM instance types, which cannot be present together with InstanceType or InstanceTypeOptions at the same time. After the field is specified, the system will try creating compute nodes in the order of the models until successful creation and then stop the traversal process. Up to 10 models are supported.
     */
    public $InstanceTypes;

    /**
     * @var InstanceTypeOptions CVM instance model configuration, which cannot be present together with InstanceType or InstanceTypes at the same time.
     */
    public $InstanceTypeOptions;

    /**
     * @var array List of availability zones (creation of CVM instances across availability zones is supported), which cannot be specified together with VirtualPrivateCloud or VirtualPrivateClouds at the same time.
     */
    public $Zones;

    /**
     * @var array List of VPCs (creation of CVM instances across VPCs is supported), which cannot be specified together with VirtualPrivateCloud or Zones at the same time.
     */
    public $VirtualPrivateClouds;
    /**
     * @param string $InstanceType CVM instance type, which cannot be present together with InstanceTypes or InstanceTypeOptions at the same time.
     * @param string $ImageId CVM image ID
     * @param SystemDisk $SystemDisk Information of the instance's system disk configuration
     * @param array $DataDisks Information of the instance's data disk configuration
     * @param VirtualPrivateCloud $VirtualPrivateCloud Information of the VPC configuration, which cannot be specified together with Zones and VirtualPrivateClouds.
     * @param InternetAccessible $InternetAccessible Information of the public network bandwidth configuration
     * @param string $InstanceName CVM instance display name
     * @param LoginSettings $LoginSettings Instance login settings
     * @param array $SecurityGroupIds Security group of the instance
     * @param EnhancedService $EnhancedService Enhanced service. This parameter is used to specify whether to enable Cloud Security, Cloud Monitoring and other services. If this parameter is not specified, Cloud Monitoring and Cloud Security will be enabled by default.
     * @param string $InstanceChargeType CVM instance billing method <br><li>POSTPAID_BY_HOUR: pay-as-you-go by the hour <br><li>SPOTPAID: bidding <br>Default value: POSTPAID_BY_HOUR.
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-related options of the instance, such as parameters related to spot instance
     * @param array $InstanceTypes List of CVM instance types, which cannot be present together with InstanceType or InstanceTypeOptions at the same time. After the field is specified, the system will try creating compute nodes in the order of the models until successful creation and then stop the traversal process. Up to 10 models are supported.
     * @param InstanceTypeOptions $InstanceTypeOptions CVM instance model configuration, which cannot be present together with InstanceType or InstanceTypes at the same time.
     * @param array $Zones List of availability zones (creation of CVM instances across availability zones is supported), which cannot be specified together with VirtualPrivateCloud or VirtualPrivateClouds at the same time.
     * @param array $VirtualPrivateClouds List of VPCs (creation of CVM instances across VPCs is supported), which cannot be specified together with VirtualPrivateCloud or Zones at the same time.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
