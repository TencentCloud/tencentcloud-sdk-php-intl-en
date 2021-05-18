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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyFleet request structure.
 *
 * @method string getFleetId() Obtain Server fleet ID
 * @method void setFleetId(string $FleetId) Set Server fleet ID
 * @method integer getCopyNumber() Obtain Replica number. It should a value between 1 to the number of the remaining quota. It can be obtained through [Obtaining User Quota](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
 * @method void setCopyNumber(integer $CopyNumber) Set Replica number. It should a value between 1 to the number of the remaining quota. It can be obtained through [Obtaining User Quota](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
 * @method string getAssetId() Obtain Asset package ID
 * @method void setAssetId(string $AssetId) Set Asset package ID
 * @method string getDescription() Obtain Description. The length is 0-100 characters.
 * @method void setDescription(string $Description) Set Description. The length is 0-100 characters.
 * @method array getInboundPermissions() Obtain Network configuration
 * @method void setInboundPermissions(array $InboundPermissions) Set Network configuration
 * @method string getInstanceType() Obtain Server type. It can be obtained through [Obtaining Server Instance Type List](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
 * @method void setInstanceType(string $InstanceType) Set Server type. It can be obtained through [Obtaining Server Instance Type List](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
 * @method string getFleetType() Obtain Server fleet type, which only supports “ON_DEMAND” type now.
 * @method void setFleetType(string $FleetType) Set Server fleet type, which only supports “ON_DEMAND” type now.
 * @method string getName() Obtain Server fleet name. The length is 1-50 characters.
 * @method void setName(string $Name) Set Server fleet name. The length is 1-50 characters.
 * @method string getNewGameServerSessionProtectionPolicy() Obtain Protection policy. Valid values: NoProtection·(no protection), FullProtection (full protection), TimeLimitProtection (time-limited protection)
 * @method void setNewGameServerSessionProtectionPolicy(string $NewGameServerSessionProtectionPolicy) Set Protection policy. Valid values: NoProtection·(no protection), FullProtection (full protection), TimeLimitProtection (time-limited protection)
 * @method ResourceCreationLimitPolicy getResourceCreationLimitPolicy() Obtain Limit policy of resource creation
 * @method void setResourceCreationLimitPolicy(ResourceCreationLimitPolicy $ResourceCreationLimitPolicy) Set Limit policy of resource creation
 * @method RuntimeConfiguration getRuntimeConfiguration() Obtain Progress configuration
 * @method void setRuntimeConfiguration(RuntimeConfiguration $RuntimeConfiguration) Set Progress configuration
 * @method integer getGameServerSessionProtectionTimeLimit() Obtain Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes. This parameter is valid only when NewGameSessionProtectionPolicy is set as TimeLimitProtection.
 * @method void setGameServerSessionProtectionTimeLimit(integer $GameServerSessionProtectionTimeLimit) Set Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes. This parameter is valid only when NewGameSessionProtectionPolicy is set as TimeLimitProtection.
 * @method string getSelectedScalingType() Obtain Whether to select scaling. Valid values: SCALING_SELECTED, SCALING_UNSELECTED. Default value: SCALING_UNSELECTED.
 * @method void setSelectedScalingType(string $SelectedScalingType) Set Whether to select scaling. Valid values: SCALING_SELECTED, SCALING_UNSELECTED. Default value: SCALING_UNSELECTED.
 * @method string getSelectedCcnType() Obtain Whether to associate the fleet with a CCN instance: CCN_SELECTED_BEFORE_CREATE (associate before creation), CCN_SELECTED_AFTER_CREATE (associated after creation), or CCN_UNSELECTED (do not associate); CCN_UNSELECTED by default
 * @method void setSelectedCcnType(string $SelectedCcnType) Set Whether to associate the fleet with a CCN instance: CCN_SELECTED_BEFORE_CREATE (associate before creation), CCN_SELECTED_AFTER_CREATE (associated after creation), or CCN_UNSELECTED (do not associate); CCN_UNSELECTED by default
 * @method array getTags() Obtain Tag list. Up to 50 tags.
 * @method void setTags(array $Tags) Set Tag list. Up to 50 tags.
 * @method DiskInfo getSystemDiskInfo() Obtain System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
 * @method void setSystemDiskInfo(DiskInfo $SystemDiskInfo) Set System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
 * @method array getDataDiskInfo() Obtain Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
 * @method void setDataDiskInfo(array $DataDiskInfo) Set Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
 * @method string getSelectedTimerType() Obtain Whether to select to replicate the timer policy: TIMER_SELECTED or TIMER_UNSELECTED. The default value is TIMER_UNSELECTED.
 * @method void setSelectedTimerType(string $SelectedTimerType) Set Whether to select to replicate the timer policy: TIMER_SELECTED or TIMER_UNSELECTED. The default value is TIMER_UNSELECTED.
 * @method array getCcnInfos() Obtain Information of the CCN instance, including the owner account and the instance ID.
 * @method void setCcnInfos(array $CcnInfos) Set Information of the CCN instance, including the owner account and the instance ID.
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
 */
class CopyFleetRequest extends AbstractModel
{
    /**
     * @var string Server fleet ID
     */
    public $FleetId;

    /**
     * @var integer Replica number. It should a value between 1 to the number of the remaining quota. It can be obtained through [Obtaining User Quota](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
     */
    public $CopyNumber;

    /**
     * @var string Asset package ID
     */
    public $AssetId;

    /**
     * @var string Description. The length is 0-100 characters.
     */
    public $Description;

    /**
     * @var array Network configuration
     */
    public $InboundPermissions;

    /**
     * @var string Server type. It can be obtained through [Obtaining Server Instance Type List](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
     */
    public $InstanceType;

    /**
     * @var string Server fleet type, which only supports “ON_DEMAND” type now.
     */
    public $FleetType;

    /**
     * @var string Server fleet name. The length is 1-50 characters.
     */
    public $Name;

    /**
     * @var string Protection policy. Valid values: NoProtection·(no protection), FullProtection (full protection), TimeLimitProtection (time-limited protection)
     */
    public $NewGameServerSessionProtectionPolicy;

    /**
     * @var ResourceCreationLimitPolicy Limit policy of resource creation
     */
    public $ResourceCreationLimitPolicy;

    /**
     * @var RuntimeConfiguration Progress configuration
     */
    public $RuntimeConfiguration;

    /**
     * @var integer Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes. This parameter is valid only when NewGameSessionProtectionPolicy is set as TimeLimitProtection.
     */
    public $GameServerSessionProtectionTimeLimit;

    /**
     * @var string Whether to select scaling. Valid values: SCALING_SELECTED, SCALING_UNSELECTED. Default value: SCALING_UNSELECTED.
     */
    public $SelectedScalingType;

    /**
     * @var string Whether to associate the fleet with a CCN instance: CCN_SELECTED_BEFORE_CREATE (associate before creation), CCN_SELECTED_AFTER_CREATE (associated after creation), or CCN_UNSELECTED (do not associate); CCN_UNSELECTED by default
     */
    public $SelectedCcnType;

    /**
     * @var array Tag list. Up to 50 tags.
     */
    public $Tags;

    /**
     * @var DiskInfo System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
     */
    public $SystemDiskInfo;

    /**
     * @var array Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
     */
    public $DataDiskInfo;

    /**
     * @var string Whether to select to replicate the timer policy: TIMER_SELECTED or TIMER_UNSELECTED. The default value is TIMER_UNSELECTED.
     */
    public $SelectedTimerType;

    /**
     * @var array Information of the CCN instance, including the owner account and the instance ID.
     */
    public $CcnInfos;

    /**
     * @var integer Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $FleetId Server fleet ID
     * @param integer $CopyNumber Replica number. It should a value between 1 to the number of the remaining quota. It can be obtained through [Obtaining User Quota](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
     * @param string $AssetId Asset package ID
     * @param string $Description Description. The length is 0-100 characters.
     * @param array $InboundPermissions Network configuration
     * @param string $InstanceType Server type. It can be obtained through [Obtaining Server Instance Type List](https://intl.cloud.tencent.com/document/product/1165/48732?from_cn_redirect=1).
     * @param string $FleetType Server fleet type, which only supports “ON_DEMAND” type now.
     * @param string $Name Server fleet name. The length is 1-50 characters.
     * @param string $NewGameServerSessionProtectionPolicy Protection policy. Valid values: NoProtection·(no protection), FullProtection (full protection), TimeLimitProtection (time-limited protection)
     * @param ResourceCreationLimitPolicy $ResourceCreationLimitPolicy Limit policy of resource creation
     * @param RuntimeConfiguration $RuntimeConfiguration Progress configuration
     * @param integer $GameServerSessionProtectionTimeLimit Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes. This parameter is valid only when NewGameSessionProtectionPolicy is set as TimeLimitProtection.
     * @param string $SelectedScalingType Whether to select scaling. Valid values: SCALING_SELECTED, SCALING_UNSELECTED. Default value: SCALING_UNSELECTED.
     * @param string $SelectedCcnType Whether to associate the fleet with a CCN instance: CCN_SELECTED_BEFORE_CREATE (associate before creation), CCN_SELECTED_AFTER_CREATE (associated after creation), or CCN_UNSELECTED (do not associate); CCN_UNSELECTED by default
     * @param array $Tags Tag list. Up to 50 tags.
     * @param DiskInfo $SystemDiskInfo System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
     * @param array $DataDiskInfo Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
     * @param string $SelectedTimerType Whether to select to replicate the timer policy: TIMER_SELECTED or TIMER_UNSELECTED. The default value is TIMER_UNSELECTED.
     * @param array $CcnInfos Information of the CCN instance, including the owner account and the instance ID.
     * @param integer $InternetMaxBandwidthOut Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("CopyNumber",$param) and $param["CopyNumber"] !== null) {
            $this->CopyNumber = $param["CopyNumber"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InboundPermissions",$param) and $param["InboundPermissions"] !== null) {
            $this->InboundPermissions = [];
            foreach ($param["InboundPermissions"] as $key => $value){
                $obj = new InboundPermission();
                $obj->deserialize($value);
                array_push($this->InboundPermissions, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("FleetType",$param) and $param["FleetType"] !== null) {
            $this->FleetType = $param["FleetType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NewGameServerSessionProtectionPolicy",$param) and $param["NewGameServerSessionProtectionPolicy"] !== null) {
            $this->NewGameServerSessionProtectionPolicy = $param["NewGameServerSessionProtectionPolicy"];
        }

        if (array_key_exists("ResourceCreationLimitPolicy",$param) and $param["ResourceCreationLimitPolicy"] !== null) {
            $this->ResourceCreationLimitPolicy = new ResourceCreationLimitPolicy();
            $this->ResourceCreationLimitPolicy->deserialize($param["ResourceCreationLimitPolicy"]);
        }

        if (array_key_exists("RuntimeConfiguration",$param) and $param["RuntimeConfiguration"] !== null) {
            $this->RuntimeConfiguration = new RuntimeConfiguration();
            $this->RuntimeConfiguration->deserialize($param["RuntimeConfiguration"]);
        }

        if (array_key_exists("GameServerSessionProtectionTimeLimit",$param) and $param["GameServerSessionProtectionTimeLimit"] !== null) {
            $this->GameServerSessionProtectionTimeLimit = $param["GameServerSessionProtectionTimeLimit"];
        }

        if (array_key_exists("SelectedScalingType",$param) and $param["SelectedScalingType"] !== null) {
            $this->SelectedScalingType = $param["SelectedScalingType"];
        }

        if (array_key_exists("SelectedCcnType",$param) and $param["SelectedCcnType"] !== null) {
            $this->SelectedCcnType = $param["SelectedCcnType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SystemDiskInfo",$param) and $param["SystemDiskInfo"] !== null) {
            $this->SystemDiskInfo = new DiskInfo();
            $this->SystemDiskInfo->deserialize($param["SystemDiskInfo"]);
        }

        if (array_key_exists("DataDiskInfo",$param) and $param["DataDiskInfo"] !== null) {
            $this->DataDiskInfo = [];
            foreach ($param["DataDiskInfo"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DataDiskInfo, $obj);
            }
        }

        if (array_key_exists("SelectedTimerType",$param) and $param["SelectedTimerType"] !== null) {
            $this->SelectedTimerType = $param["SelectedTimerType"];
        }

        if (array_key_exists("CcnInfos",$param) and $param["CcnInfos"] !== null) {
            $this->CcnInfos = [];
            foreach ($param["CcnInfos"] as $key => $value){
                $obj = new CcnInfo();
                $obj->deserialize($value);
                array_push($this->CcnInfos, $obj);
            }
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
