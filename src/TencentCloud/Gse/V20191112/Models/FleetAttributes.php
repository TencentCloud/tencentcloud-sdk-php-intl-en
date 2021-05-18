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
 * Service deployment attributes
 *
 * @method string getAssetId() Obtain Asset package ID
 * @method void setAssetId(string $AssetId) Set Asset package ID
 * @method string getCreationTime() Obtain Server fleet creation time
 * @method void setCreationTime(string $CreationTime) Set Server fleet creation time
 * @method string getDescription() Obtain Description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setDescription(string $Description) Set Description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getFleetArn() Obtain Description of server fleet resource
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFleetArn(string $FleetArn) Set Description of server fleet resource
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getFleetId() Obtain Server fleet ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFleetId(string $FleetId) Set Server fleet ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getFleetType() Obtain Server fleet type, which only supports ON_DEMAND now.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setFleetType(string $FleetType) Set Server fleet type, which only supports ON_DEMAND now.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getInstanceType() Obtain Server type, such as S5.LARGE8
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setInstanceType(string $InstanceType) Set Server type, such as S5.LARGE8
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getName() Obtain Server fleet name
 * @method void setName(string $Name) Set Server fleet name
 * @method string getNewGameServerSessionProtectionPolicy() Obtain Game session protection policy
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setNewGameServerSessionProtectionPolicy(string $NewGameServerSessionProtectionPolicy) Set Game session protection policy
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getOperatingSystem() Obtain Operating system type
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOperatingSystem(string $OperatingSystem) Set Operating system type
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method ResourceCreationLimitPolicy getResourceCreationLimitPolicy() Obtain Limit policy of resource creation
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setResourceCreationLimitPolicy(ResourceCreationLimitPolicy $ResourceCreationLimitPolicy) Set Limit policy of resource creation
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getStatus() Obtain Statuses: “Create”, “Downloading”, “Verifying”, “Generating”, “Activating”, “Active”, “Exception”, “Deleting”, and “End”.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStatus(string $Status) Set Statuses: “Create”, “Downloading”, “Verifying”, “Generating”, “Activating”, “Active”, “Exception”, “Deleting”, and “End”.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getStoppedActions() Obtain The status of server fleet when it stopped. If this field is left empty, it means automatic scaling.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setStoppedActions(array $StoppedActions) Set The status of server fleet when it stopped. If this field is left empty, it means automatic scaling.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getTerminationTime() Obtain Server fleet termination time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTerminationTime(string $TerminationTime) Set Server fleet termination time
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getGameServerSessionProtectionTimeLimit() Obtain Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setGameServerSessionProtectionTimeLimit(integer $GameServerSessionProtectionTimeLimit) Set Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getBillingStatus() Obtain Billing status: Unactivated, Activated, Exception, Isolated due to arrears, Terminated, and Unfrozen.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setBillingStatus(string $BillingStatus) Set Billing status: Unactivated, Activated, Exception, Isolated due to arrears, Terminated, and Unfrozen.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getTags() Obtain Tag list. Up to 50 tags.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTags(array $Tags) Set Tag list. Up to 50 tags.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getDataDiskInfo() Obtain Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setDataDiskInfo(array $DataDiskInfo) Set Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method DiskInfo getSystemDiskInfo() Obtain System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setSystemDiskInfo(DiskInfo $SystemDiskInfo) Set System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getRelatedCcnInfos() Obtain CCN instance information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRelatedCcnInfos(array $RelatedCcnInfos) Set CCN instance information
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class FleetAttributes extends AbstractModel
{
    /**
     * @var string Asset package ID
     */
    public $AssetId;

    /**
     * @var string Server fleet creation time
     */
    public $CreationTime;

    /**
     * @var string Description
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Description;

    /**
     * @var string Description of server fleet resource
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FleetArn;

    /**
     * @var string Server fleet ID
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FleetId;

    /**
     * @var string Server fleet type, which only supports ON_DEMAND now.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $FleetType;

    /**
     * @var string Server type, such as S5.LARGE8
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $InstanceType;

    /**
     * @var string Server fleet name
     */
    public $Name;

    /**
     * @var string Game session protection policy
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $NewGameServerSessionProtectionPolicy;

    /**
     * @var string Operating system type
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $OperatingSystem;

    /**
     * @var ResourceCreationLimitPolicy Limit policy of resource creation
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ResourceCreationLimitPolicy;

    /**
     * @var string Statuses: “Create”, “Downloading”, “Verifying”, “Generating”, “Activating”, “Active”, “Exception”, “Deleting”, and “End”.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Status;

    /**
     * @var array The status of server fleet when it stopped. If this field is left empty, it means automatic scaling.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $StoppedActions;

    /**
     * @var string Server fleet termination time
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $TerminationTime;

    /**
     * @var integer Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $GameServerSessionProtectionTimeLimit;

    /**
     * @var string Billing status: Unactivated, Activated, Exception, Isolated due to arrears, Terminated, and Unfrozen.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $BillingStatus;

    /**
     * @var array Tag list. Up to 50 tags.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Tags;

    /**
     * @var array Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $DataDiskInfo;

    /**
     * @var DiskInfo System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $SystemDiskInfo;

    /**
     * @var array CCN instance information
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RelatedCcnInfos;

    /**
     * @var integer Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $AssetId Asset package ID
     * @param string $CreationTime Server fleet creation time
     * @param string $Description Description
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $FleetArn Description of server fleet resource
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $FleetId Server fleet ID
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $FleetType Server fleet type, which only supports ON_DEMAND now.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $InstanceType Server type, such as S5.LARGE8
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Name Server fleet name
     * @param string $NewGameServerSessionProtectionPolicy Game session protection policy
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $OperatingSystem Operating system type
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param ResourceCreationLimitPolicy $ResourceCreationLimitPolicy Limit policy of resource creation
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Status Statuses: “Create”, “Downloading”, “Verifying”, “Generating”, “Activating”, “Active”, “Exception”, “Deleting”, and “End”.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $StoppedActions The status of server fleet when it stopped. If this field is left empty, it means automatic scaling.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $TerminationTime Server fleet termination time
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $GameServerSessionProtectionTimeLimit Timeout period of time-limited protection. Value range: 5-1440 minutes. Default value: 60 minutes.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $BillingStatus Billing status: Unactivated, Activated, Exception, Isolated due to arrears, Terminated, and Unfrozen.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $Tags Tag list. Up to 50 tags.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $DataDiskInfo Data disk. It can be SSD disks (CLOUD_SSD) with 100-32000 GB capacity or Premium Cloud Storage disks (CLOUD_PREMIUM) with 10-32000 GB capacity. The increment is 10. 
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param DiskInfo $SystemDiskInfo System disk. It can be a SSD (CLOUD_SSD) with 100-500 GB capacity or a Premium Cloud Storage disk (CLOUD_PREMIUM) with 50-500 GB capacity. The increment is 1.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $RelatedCcnInfos CCN instance information
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $InternetMaxBandwidthOut Maximum outbound public network bandwidth of the server fleet. Value range: 1 - 200 Mbps. Default value: 100 Mbps.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FleetArn",$param) and $param["FleetArn"] !== null) {
            $this->FleetArn = $param["FleetArn"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("FleetType",$param) and $param["FleetType"] !== null) {
            $this->FleetType = $param["FleetType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NewGameServerSessionProtectionPolicy",$param) and $param["NewGameServerSessionProtectionPolicy"] !== null) {
            $this->NewGameServerSessionProtectionPolicy = $param["NewGameServerSessionProtectionPolicy"];
        }

        if (array_key_exists("OperatingSystem",$param) and $param["OperatingSystem"] !== null) {
            $this->OperatingSystem = $param["OperatingSystem"];
        }

        if (array_key_exists("ResourceCreationLimitPolicy",$param) and $param["ResourceCreationLimitPolicy"] !== null) {
            $this->ResourceCreationLimitPolicy = new ResourceCreationLimitPolicy();
            $this->ResourceCreationLimitPolicy->deserialize($param["ResourceCreationLimitPolicy"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StoppedActions",$param) and $param["StoppedActions"] !== null) {
            $this->StoppedActions = $param["StoppedActions"];
        }

        if (array_key_exists("TerminationTime",$param) and $param["TerminationTime"] !== null) {
            $this->TerminationTime = $param["TerminationTime"];
        }

        if (array_key_exists("GameServerSessionProtectionTimeLimit",$param) and $param["GameServerSessionProtectionTimeLimit"] !== null) {
            $this->GameServerSessionProtectionTimeLimit = $param["GameServerSessionProtectionTimeLimit"];
        }

        if (array_key_exists("BillingStatus",$param) and $param["BillingStatus"] !== null) {
            $this->BillingStatus = $param["BillingStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DataDiskInfo",$param) and $param["DataDiskInfo"] !== null) {
            $this->DataDiskInfo = [];
            foreach ($param["DataDiskInfo"] as $key => $value){
                $obj = new DiskInfo();
                $obj->deserialize($value);
                array_push($this->DataDiskInfo, $obj);
            }
        }

        if (array_key_exists("SystemDiskInfo",$param) and $param["SystemDiskInfo"] !== null) {
            $this->SystemDiskInfo = new DiskInfo();
            $this->SystemDiskInfo->deserialize($param["SystemDiskInfo"]);
        }

        if (array_key_exists("RelatedCcnInfos",$param) and $param["RelatedCcnInfos"] !== null) {
            $this->RelatedCcnInfos = [];
            foreach ($param["RelatedCcnInfos"] as $key => $value){
                $obj = new RelatedCcnInfo();
                $obj->deserialize($value);
                array_push($this->RelatedCcnInfos, $obj);
            }
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
