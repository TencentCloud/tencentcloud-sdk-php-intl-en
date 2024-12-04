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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information set of eligible launch configurations.
 *
 * @method integer getProjectId() Obtain Project ID of the instance.
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance.
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method string getLaunchConfigurationName() Obtain Launch configuration name.
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set Launch configuration name.
 * @method string getInstanceType() Obtain Instance model.
 * @method void setInstanceType(string $InstanceType) Set Instance model.
 * @method SystemDisk getSystemDisk() Obtain Information of the instance's system disk configuration.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Information of the instance's system disk configuration.
 * @method array getDataDisks() Obtain Information of the instance's data disk configuration.
 * @method void setDataDisks(array $DataDisks) Set Information of the instance's data disk configuration.
 * @method LimitedLoginSettings getLoginSettings() Obtain Instance login settings.
 * @method void setLoginSettings(LimitedLoginSettings $LoginSettings) Set Instance login settings.
 * @method InternetAccessible getInternetAccessible() Obtain Information of the public network bandwidth configuration.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Information of the public network bandwidth configuration.
 * @method array getSecurityGroupIds() Obtain Security group of the instance.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance.
 * @method array getAutoScalingGroupAbstractSet() Obtain Auto scaling group associated with the launch configuration.
 * @method void setAutoScalingGroupAbstractSet(array $AutoScalingGroupAbstractSet) Set Auto scaling group associated with the launch configuration.
 * @method string getUserData() Obtain Custom data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserData(string $UserData) Set Custom data.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time of the launch configuration.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time of the launch configuration.
 * @method EnhancedService getEnhancedService() Obtain Conditions of enhancement services for the instance and their settings.
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set Conditions of enhancement services for the instance and their settings.
 * @method string getImageId() Obtain Image ID.
 * @method void setImageId(string $ImageId) Set Image ID.
 * @method string getLaunchConfigurationStatus() Obtain Current status of the launch configuration. Valid values: <li>NORMAL: Normal.</li> <li>IMAGE_ABNORMAL: Image exception in the launch configuration.</li> <li>CBS_SNAP_ABNORMAL: Exception with data disk snapshot in the launch configuration.</li> <li>SECURITY_GROUP_ABNORMAL: Security group exception in the launch configuration.</li>
 * @method void setLaunchConfigurationStatus(string $LaunchConfigurationStatus) Set Current status of the launch configuration. Valid values: <li>NORMAL: Normal.</li> <li>IMAGE_ABNORMAL: Image exception in the launch configuration.</li> <li>CBS_SNAP_ABNORMAL: Exception with data disk snapshot in the launch configuration.</li> <li>SECURITY_GROUP_ABNORMAL: Security group exception in the launch configuration.</li>
 * @method string getInstanceChargeType() Obtain Instance billing type, with the CVM default value processed as POSTPAID_BY_HOUR. <li>POSTPAID_BY_HOUR: Hourly postpaid billing.</li> <li>SPOTPAID: Spot billing.</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type, with the CVM default value processed as POSTPAID_BY_HOUR. <li>POSTPAID_BY_HOUR: Hourly postpaid billing.</li> <li>SPOTPAID: Spot billing.</li>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceTypes() Obtain List of instance models.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance models.
 * @method array getInstanceTags() Obtain List of instance tags, which will be added to instances created by the scale-out activity. Up to 10 tags allowed.
 * @method void setInstanceTags(array $InstanceTags) Set List of instance tags, which will be added to instances created by the scale-out activity. Up to 10 tags allowed.
 * @method array getTags() Obtain Tag list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVersionNumber() Obtain Version
 * @method void setVersionNumber(integer $VersionNumber) Set Version
 * @method string getUpdatedTime() Obtain Update time
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time
 * @method string getCamRoleName() Obtain CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
 * @method string getLastOperationInstanceTypesCheckPolicy() Obtain Value of InstanceTypesCheckPolicy upon the last operation.
 * @method void setLastOperationInstanceTypesCheckPolicy(string $LastOperationInstanceTypesCheckPolicy) Set Value of InstanceTypesCheckPolicy upon the last operation.
 * @method HostNameSettings getHostNameSettings() Obtain CVM hostname settings.
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set CVM hostname settings.
 * @method InstanceNameSettings getInstanceNameSettings() Obtain Settings of CVM instance names
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set Settings of CVM instance names
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
 * @method string getDiskTypePolicy() Obtain Cloud disk type selection policy. Valid values: <li>ORIGINAL: Use the set cloud disk type.</li> <li>AUTOMATIC: Automatically select available cloud disk types in the current availability zone.</li>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set Cloud disk type selection policy. Valid values: <li>ORIGINAL: Use the set cloud disk type.</li> <li>AUTOMATIC: Automatically select available cloud disk types in the current availability zone.</li>
 * @method string getHpcClusterId() Obtain HPC ID<br>
Note: This field is default to empty
 * @method void setHpcClusterId(string $HpcClusterId) Set HPC ID<br>
Note: This field is default to empty
 * @method IPv6InternetAccessible getIPv6InternetAccessible() Obtain IPv6 public network bandwidth configuration.
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) Set IPv6 public network bandwidth configuration.
 * @method array getDisasterRecoverGroupIds() Obtain Placement group ID, supporting specification of only one.
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set Placement group ID, supporting specification of only one.
 * @method string getImageFamily() Obtain Image family name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageFamily(string $ImageFamily) Set Image family name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDedicatedClusterId() Obtain CDC ID.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set CDC ID.
 */
class LaunchConfiguration extends AbstractModel
{
    /**
     * @var integer Project ID of the instance.
     */
    public $ProjectId;

    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string Launch configuration name.
     */
    public $LaunchConfigurationName;

    /**
     * @var string Instance model.
     */
    public $InstanceType;

    /**
     * @var SystemDisk Information of the instance's system disk configuration.
     */
    public $SystemDisk;

    /**
     * @var array Information of the instance's data disk configuration.
     */
    public $DataDisks;

    /**
     * @var LimitedLoginSettings Instance login settings.
     */
    public $LoginSettings;

    /**
     * @var InternetAccessible Information of the public network bandwidth configuration.
     */
    public $InternetAccessible;

    /**
     * @var array Security group of the instance.
     */
    public $SecurityGroupIds;

    /**
     * @var array Auto scaling group associated with the launch configuration.
     */
    public $AutoScalingGroupAbstractSet;

    /**
     * @var string Custom data.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserData;

    /**
     * @var string Creation time of the launch configuration.
     */
    public $CreatedTime;

    /**
     * @var EnhancedService Conditions of enhancement services for the instance and their settings.
     */
    public $EnhancedService;

    /**
     * @var string Image ID.
     */
    public $ImageId;

    /**
     * @var string Current status of the launch configuration. Valid values: <li>NORMAL: Normal.</li> <li>IMAGE_ABNORMAL: Image exception in the launch configuration.</li> <li>CBS_SNAP_ABNORMAL: Exception with data disk snapshot in the launch configuration.</li> <li>SECURITY_GROUP_ABNORMAL: Security group exception in the launch configuration.</li>
     */
    public $LaunchConfigurationStatus;

    /**
     * @var string Instance billing type, with the CVM default value processed as POSTPAID_BY_HOUR. <li>POSTPAID_BY_HOUR: Hourly postpaid billing.</li> <li>SPOTPAID: Spot billing.</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceMarketOptions;

    /**
     * @var array List of instance models.
     */
    public $InstanceTypes;

    /**
     * @var array List of instance tags, which will be added to instances created by the scale-out activity. Up to 10 tags allowed.
     */
    public $InstanceTags;

    /**
     * @var array Tag list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Version
     */
    public $VersionNumber;

    /**
     * @var string Update time
     */
    public $UpdatedTime;

    /**
     * @var string CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
     */
    public $CamRoleName;

    /**
     * @var string Value of InstanceTypesCheckPolicy upon the last operation.
     */
    public $LastOperationInstanceTypesCheckPolicy;

    /**
     * @var HostNameSettings CVM hostname settings.
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings Settings of CVM instance names
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     */
    public $InstanceChargePrepaid;

    /**
     * @var string Cloud disk type selection policy. Valid values: <li>ORIGINAL: Use the set cloud disk type.</li> <li>AUTOMATIC: Automatically select available cloud disk types in the current availability zone.</li>
     */
    public $DiskTypePolicy;

    /**
     * @var string HPC ID<br>
Note: This field is default to empty
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible IPv6 public network bandwidth configuration.
     */
    public $IPv6InternetAccessible;

    /**
     * @var array Placement group ID, supporting specification of only one.
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string Image family name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageFamily;

    /**
     * @var string CDC ID.
     */
    public $DedicatedClusterId;

    /**
     * @param integer $ProjectId Project ID of the instance.
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $LaunchConfigurationName Launch configuration name.
     * @param string $InstanceType Instance model.
     * @param SystemDisk $SystemDisk Information of the instance's system disk configuration.
     * @param array $DataDisks Information of the instance's data disk configuration.
     * @param LimitedLoginSettings $LoginSettings Instance login settings.
     * @param InternetAccessible $InternetAccessible Information of the public network bandwidth configuration.
     * @param array $SecurityGroupIds Security group of the instance.
     * @param array $AutoScalingGroupAbstractSet Auto scaling group associated with the launch configuration.
     * @param string $UserData Custom data.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time of the launch configuration.
     * @param EnhancedService $EnhancedService Conditions of enhancement services for the instance and their settings.
     * @param string $ImageId Image ID.
     * @param string $LaunchConfigurationStatus Current status of the launch configuration. Valid values: <li>NORMAL: Normal.</li> <li>IMAGE_ABNORMAL: Image exception in the launch configuration.</li> <li>CBS_SNAP_ABNORMAL: Exception with data disk snapshot in the launch configuration.</li> <li>SECURITY_GROUP_ABNORMAL: Security group exception in the launch configuration.</li>
     * @param string $InstanceChargeType Instance billing type, with the CVM default value processed as POSTPAID_BY_HOUR. <li>POSTPAID_BY_HOUR: Hourly postpaid billing.</li> <li>SPOTPAID: Spot billing.</li>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market options of the instance, such as parameters related to spot instances. This parameter is required for spot instances.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceTypes List of instance models.
     * @param array $InstanceTags List of instance tags, which will be added to instances created by the scale-out activity. Up to 10 tags allowed.
     * @param array $Tags Tag list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VersionNumber Version
     * @param string $UpdatedTime Update time
     * @param string $CamRoleName CAM role name. This parameter can be obtained from the `roleName` field returned by DescribeRoleList API.
     * @param string $LastOperationInstanceTypesCheckPolicy Value of InstanceTypesCheckPolicy upon the last operation.
     * @param HostNameSettings $HostNameSettings CVM hostname settings.
     * @param InstanceNameSettings $InstanceNameSettings Settings of CVM instance names
     * @param InstanceChargePrepaid $InstanceChargePrepaid Details of the monthly subscription, including the purchase period, auto-renewal. It is required if the `InstanceChargeType` is `PREPAID`.
     * @param string $DiskTypePolicy Cloud disk type selection policy. Valid values: <li>ORIGINAL: Use the set cloud disk type.</li> <li>AUTOMATIC: Automatically select available cloud disk types in the current availability zone.</li>
     * @param string $HpcClusterId HPC ID<br>
Note: This field is default to empty
     * @param IPv6InternetAccessible $IPv6InternetAccessible IPv6 public network bandwidth configuration.
     * @param array $DisasterRecoverGroupIds Placement group ID, supporting specification of only one.
     * @param string $ImageFamily Image family name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DedicatedClusterId CDC ID.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("LaunchConfigurationName",$param) and $param["LaunchConfigurationName"] !== null) {
            $this->LaunchConfigurationName = $param["LaunchConfigurationName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
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

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LimitedLoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AutoScalingGroupAbstractSet",$param) and $param["AutoScalingGroupAbstractSet"] !== null) {
            $this->AutoScalingGroupAbstractSet = [];
            foreach ($param["AutoScalingGroupAbstractSet"] as $key => $value){
                $obj = new AutoScalingGroupAbstract();
                $obj->deserialize($value);
                array_push($this->AutoScalingGroupAbstractSet, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("LaunchConfigurationStatus",$param) and $param["LaunchConfigurationStatus"] !== null) {
            $this->LaunchConfigurationStatus = $param["LaunchConfigurationStatus"];
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

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTag();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("LastOperationInstanceTypesCheckPolicy",$param) and $param["LastOperationInstanceTypesCheckPolicy"] !== null) {
            $this->LastOperationInstanceTypesCheckPolicy = $param["LastOperationInstanceTypesCheckPolicy"];
        }

        if (array_key_exists("HostNameSettings",$param) and $param["HostNameSettings"] !== null) {
            $this->HostNameSettings = new HostNameSettings();
            $this->HostNameSettings->deserialize($param["HostNameSettings"]);
        }

        if (array_key_exists("InstanceNameSettings",$param) and $param["InstanceNameSettings"] !== null) {
            $this->InstanceNameSettings = new InstanceNameSettings();
            $this->InstanceNameSettings->deserialize($param["InstanceNameSettings"]);
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DiskTypePolicy",$param) and $param["DiskTypePolicy"] !== null) {
            $this->DiskTypePolicy = $param["DiskTypePolicy"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("IPv6InternetAccessible",$param) and $param["IPv6InternetAccessible"] !== null) {
            $this->IPv6InternetAccessible = new IPv6InternetAccessible();
            $this->IPv6InternetAccessible->deserialize($param["IPv6InternetAccessible"]);
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
