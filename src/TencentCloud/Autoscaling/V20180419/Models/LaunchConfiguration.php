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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information set of eligible launch configurations.
 *
 * @method integer getProjectId() Obtain Project ID of the instance.
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance.
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID.
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID.
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
 * @method string getLaunchConfigurationStatus() Obtain Current status of the launch configuration. Value range: <br><li>NORMAL: normal <br><li>IMAGE_ABNORMAL: Exception with the image of the launch configuration <br><li>CBS_SNAP_ABNORMAL: Exception with the data disk snapshot of the launch configuration <br><li>SECURITY_GROUP_ABNORMAL: Exception with the security group of the launch configuration<br>
 * @method void setLaunchConfigurationStatus(string $LaunchConfigurationStatus) Set Current status of the launch configuration. Value range: <br><li>NORMAL: normal <br><li>IMAGE_ABNORMAL: Exception with the image of the launch configuration <br><li>CBS_SNAP_ABNORMAL: Exception with the data disk snapshot of the launch configuration <br><li>SECURITY_GROUP_ABNORMAL: Exception with the security group of the launch configuration<br>
 * @method string getInstanceChargeType() Obtain Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceTypes() Obtain List of instance models.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance models.
 * @method array getInstanceTags() Obtain List of tags.
 * @method void setInstanceTags(array $InstanceTags) Set List of tags.
 * @method integer getVersionNumber() Obtain Version number.
 * @method void setVersionNumber(integer $VersionNumber) Set Version number.
 * @method string getUpdatedTime() Obtain Update time.
 * @method void setUpdatedTime(string $UpdatedTime) Set Update time.
 * @method string getCamRoleName() Obtain CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
 * @method string getLastOperationInstanceTypesCheckPolicy() Obtain Value of InstanceTypesCheckPolicy upon the last operation.
 * @method void setLastOperationInstanceTypesCheckPolicy(string $LastOperationInstanceTypesCheckPolicy) Set Value of InstanceTypesCheckPolicy upon the last operation.
 * @method HostNameSettings getHostNameSettings() Obtain CVM HostName settings.
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set CVM HostName settings.
 * @method InstanceNameSettings getInstanceNameSettings() Obtain Settings of CVM instance names.
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set Settings of CVM instance names.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Sets prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Sets prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
 * @method string getDiskTypePolicy() Obtain Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type in the current availability zone
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type in the current availability zone
 */
class LaunchConfiguration extends AbstractModel
{
    /**
     * @var integer Project ID of the instance.
     */
    public $ProjectId;

    /**
     * @var string Launch configuration ID.
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
     * @var string Current status of the launch configuration. Value range: <br><li>NORMAL: normal <br><li>IMAGE_ABNORMAL: Exception with the image of the launch configuration <br><li>CBS_SNAP_ABNORMAL: Exception with the data disk snapshot of the launch configuration <br><li>SECURITY_GROUP_ABNORMAL: Exception with the security group of the launch configuration<br>
     */
    public $LaunchConfigurationStatus;

    /**
     * @var string Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceMarketOptions;

    /**
     * @var array List of instance models.
     */
    public $InstanceTypes;

    /**
     * @var array List of tags.
     */
    public $InstanceTags;

    /**
     * @var integer Version number.
     */
    public $VersionNumber;

    /**
     * @var string Update time.
     */
    public $UpdatedTime;

    /**
     * @var string CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
     */
    public $CamRoleName;

    /**
     * @var string Value of InstanceTypesCheckPolicy upon the last operation.
     */
    public $LastOperationInstanceTypesCheckPolicy;

    /**
     * @var HostNameSettings CVM HostName settings.
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings Settings of CVM instance names.
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid Sets prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
     */
    public $InstanceChargePrepaid;

    /**
     * @var string Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type in the current availability zone
     */
    public $DiskTypePolicy;

    /**
     * @param integer $ProjectId Project ID of the instance.
     * @param string $LaunchConfigurationId Launch configuration ID.
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
     * @param string $LaunchConfigurationStatus Current status of the launch configuration. Value range: <br><li>NORMAL: normal <br><li>IMAGE_ABNORMAL: Exception with the image of the launch configuration <br><li>CBS_SNAP_ABNORMAL: Exception with the data disk snapshot of the launch configuration <br><li>SECURITY_GROUP_ABNORMAL: Exception with the security group of the launch configuration<br>
     * @param string $InstanceChargeType Instance billing type. CVM instances are POSTPAID_BY_HOUR by default.
<br><li>POSTPAID_BY_HOUR: Pay-as-you-go on an hourly basis
<br><li>SPOTPAID: Bidding
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions Market-related options of the instance, such as the parameters related to stop instances. If the billing method of instance is specified as bidding, this parameter must be passed in.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceTypes List of instance models.
     * @param array $InstanceTags List of tags.
     * @param integer $VersionNumber Version number.
     * @param string $UpdatedTime Update time.
     * @param string $CamRoleName CAM role name, which can be obtained from the roleName field in the return value of the DescribeRoleList API.
     * @param string $LastOperationInstanceTypesCheckPolicy Value of InstanceTypesCheckPolicy upon the last operation.
     * @param HostNameSettings $HostNameSettings CVM HostName settings.
     * @param InstanceNameSettings $InstanceNameSettings Settings of CVM instance names.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Sets prepaid billing mode, also known as monthly subscription. This parameter can specify the purchase period and other attributes such as auto-renewal. This parameter is mandatory for prepaid instances.
     * @param string $DiskTypePolicy Selection policy of cloud disks. Default value: ORIGINAL. Valid values:
<br><li>ORIGINAL: uses the configured cloud disk type
<br><li>AUTOMATIC: automatically chooses an available cloud disk type in the current availability zone
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
    }
}
