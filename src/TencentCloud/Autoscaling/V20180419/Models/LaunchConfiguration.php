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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information set of eligible launch configurations.
 *
 * @method integer getProjectId() Obtain <p>Project ID of the instance.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID of the instance.</p>
 * @method string getLaunchConfigurationId() Obtain <p>Launch configuration ID.</p>
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set <p>Launch configuration ID.</p>
 * @method string getLaunchConfigurationName() Obtain <p>Startup configuration name.</p>
 * @method void setLaunchConfigurationName(string $LaunchConfigurationName) Set <p>Startup configuration name.</p>
 * @method string getInstanceType() Obtain <p>Instance model.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Instance model.</p>
 * @method SystemDisk getSystemDisk() Obtain <p>Instance system disk configuration information.</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set <p>Instance system disk configuration information.</p>
 * @method array getDataDisks() Obtain <p>Instance data disk configuration information.</p>
 * @method void setDataDisks(array $DataDisks) Set <p>Instance data disk configuration information.</p>
 * @method LimitedLoginSettings getLoginSettings() Obtain <p>Instance login settings.</p>
 * @method void setLoginSettings(LimitedLoginSettings $LoginSettings) Set <p>Instance login settings.</p>
 * @method InternetAccessible getInternetAccessible() Obtain <p>Public network bandwidth-related information settings.</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set <p>Public network bandwidth-related information settings.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group to which an instance belongs.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group to which an instance belongs.</p>
 * @method array getAutoScalingGroupAbstractSet() Obtain <p>The scaling group bound to the launch configuration.</p>
 * @method void setAutoScalingGroupAbstractSet(array $AutoScalingGroupAbstractSet) Set <p>The scaling group bound to the launch configuration.</p>
 * @method string getUserData() Obtain <p>Custom data.</p>
 * @method void setUserData(string $UserData) Set <p>Custom data.</p>
 * @method string getCreatedTime() Obtain <p>Launch configuration creation time, in standard <code>UTC</code> time.</p>
 * @method void setCreatedTime(string $CreatedTime) Set <p>Launch configuration creation time, in standard <code>UTC</code> time.</p>
 * @method EnhancedService getEnhancedService() Obtain <p>Enhanced services enabling situation of the instance and its settings.</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) Set <p>Enhanced services enabling situation of the instance and its settings.</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getLaunchConfigurationStatus() Obtain <p>Current status of the launch configuration. Value range: <li>NORMAL: Normal</li><li>IMAGE_ABNORMAL: The launch configuration image is exceptional</li><li>CBS_SNAP_ABNORMAL: The launch configuration data disk snapshot is exceptional</li><li>SECURITY_GROUP_ABNORMAL: The launch configuration security group is exceptional</li></p>
 * @method void setLaunchConfigurationStatus(string $LaunchConfigurationStatus) Set <p>Current status of the launch configuration. Value range: <li>NORMAL: Normal</li><li>IMAGE_ABNORMAL: The launch configuration image is exceptional</li><li>CBS_SNAP_ABNORMAL: The launch configuration data disk snapshot is exceptional</li><li>SECURITY_GROUP_ABNORMAL: The launch configuration security group is exceptional</li></p>
 * @method string getInstanceChargeType() Obtain <p>Instance billing type. The value range is as follows:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, i.e. monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing type. The value range is as follows:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, i.e. monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
 * @method InstanceMarketOptionsRequest getInstanceMarketOptions() Obtain <p>Market-related options of the instance, such as spot instance parameters. If the payment mode of the specified instance is spot payment, this parameter is required.</p>
 * @method void setInstanceMarketOptions(InstanceMarketOptionsRequest $InstanceMarketOptions) Set <p>Market-related options of the instance, such as spot instance parameters. If the payment mode of the specified instance is spot payment, this parameter is required.</p>
 * @method array getInstanceTypes() Obtain <p>Instance model list.</p>
 * @method void setInstanceTypes(array $InstanceTypes) Set <p>Instance model list.</p>
 * @method array getInstanceTags() Obtain <p>Instance tag list. Instances scaled out will automatically come with tags, supporting up to 10 tags.</p>
 * @method void setInstanceTags(array $InstanceTags) Set <p>Instance tag list. Instances scaled out will automatically come with tags, supporting up to 10 tags.</p>
 * @method array getTags() Obtain <p>Tag list. The tags in this parameter are only used to bind launch configurations and will not be passed to CVM instances scaled out based on the launch configuration.</p>
 * @method void setTags(array $Tags) Set <p>Tag list. The tags in this parameter are only used to bind launch configurations and will not be passed to CVM instances scaled out based on the launch configuration.</p>
 * @method integer getVersionNumber() Obtain <p>Version number.</p>
 * @method void setVersionNumber(integer $VersionNumber) Set <p>Version number.</p>
 * @method string getUpdatedTime() Obtain <p>Update time in standard <code>UTC</code> format.</p>
 * @method void setUpdatedTime(string $UpdatedTime) Set <p>Update time in standard <code>UTC</code> format.</p>
 * @method string getCamRoleName() Obtain <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
 * @method void setCamRoleName(string $CamRoleName) Set <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
 * @method string getLastOperationInstanceTypesCheckPolicy() Obtain <p>The value of InstanceTypesCheckPolicy last time when operating.</p>
 * @method void setLastOperationInstanceTypesCheckPolicy(string $LastOperationInstanceTypesCheckPolicy) Set <p>The value of InstanceTypesCheckPolicy last time when operating.</p>
 * @method HostNameSettings getHostNameSettings() Obtain <p>Related settings for the CVM host name (HostName).</p>
 * @method void setHostNameSettings(HostNameSettings $HostNameSettings) Set <p>Related settings for the CVM host name (HostName).</p>
 * @method InstanceNameSettings getInstanceNameSettings() Obtain <p>Related settings for the cloud server instance name (InstanceName).</p>
 * @method void setInstanceNameSettings(InstanceNameSettings $InstanceNameSettings) Set <p>Related settings for the cloud server instance name (InstanceName).</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain <p>Prepaid mode, i.e., parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode for the specified instance is prepaid.</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set <p>Prepaid mode, i.e., parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode for the specified instance is prepaid.</p>
 * @method string getDiskTypePolicy() Obtain <p>Cloud disk type selection policy. Parameter value range: <li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select available cloud disk types in the current AZ</li></p>
 * @method void setDiskTypePolicy(string $DiskTypePolicy) Set <p>Cloud disk type selection policy. Parameter value range: <li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select available cloud disk types in the current AZ</li></p>
 * @method string getHpcClusterId() Obtain <p>Hyper Computing Cluster ID.<br><br>Note: This field is empty by default.</p>
 * @method void setHpcClusterId(string $HpcClusterId) Set <p>Hyper Computing Cluster ID.<br><br>Note: This field is empty by default.</p>
 * @method IPv6InternetAccessible getIPv6InternetAccessible() Obtain <p>IPv6 public network bandwidth-related information settings.</p>
 * @method void setIPv6InternetAccessible(IPv6InternetAccessible $IPv6InternetAccessible) Set <p>IPv6 public network bandwidth-related information settings.</p>
 * @method array getDisasterRecoverGroupIds() Obtain <p>Placement Group id. Only one can be specified.</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) Set <p>Placement Group id. Only one can be specified.</p>
 * @method string getImageFamily() Obtain <p>Image family name.</p>
 * @method void setImageFamily(string $ImageFamily) Set <p>Image family name.</p>
 * @method string getDedicatedClusterId() Obtain <p>Local dedicated cluster ID.</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set <p>Local dedicated cluster ID.</p>
 * @method array getNetworkInterfaces() Obtain <p>ENI configuration of the launch configuration.</p>
 * @method void setNetworkInterfaces(array $NetworkInterfaces) Set <p>ENI configuration of the launch configuration.</p>
 */
class LaunchConfiguration extends AbstractModel
{
    /**
     * @var integer <p>Project ID of the instance.</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Launch configuration ID.</p>
     */
    public $LaunchConfigurationId;

    /**
     * @var string <p>Startup configuration name.</p>
     */
    public $LaunchConfigurationName;

    /**
     * @var string <p>Instance model.</p>
     */
    public $InstanceType;

    /**
     * @var SystemDisk <p>Instance system disk configuration information.</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>Instance data disk configuration information.</p>
     */
    public $DataDisks;

    /**
     * @var LimitedLoginSettings <p>Instance login settings.</p>
     */
    public $LoginSettings;

    /**
     * @var InternetAccessible <p>Public network bandwidth-related information settings.</p>
     */
    public $InternetAccessible;

    /**
     * @var array <p>Security group to which an instance belongs.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>The scaling group bound to the launch configuration.</p>
     */
    public $AutoScalingGroupAbstractSet;

    /**
     * @var string <p>Custom data.</p>
     */
    public $UserData;

    /**
     * @var string <p>Launch configuration creation time, in standard <code>UTC</code> time.</p>
     */
    public $CreatedTime;

    /**
     * @var EnhancedService <p>Enhanced services enabling situation of the instance and its settings.</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Current status of the launch configuration. Value range: <li>NORMAL: Normal</li><li>IMAGE_ABNORMAL: The launch configuration image is exceptional</li><li>CBS_SNAP_ABNORMAL: The launch configuration data disk snapshot is exceptional</li><li>SECURITY_GROUP_ABNORMAL: The launch configuration security group is exceptional</li></p>
     */
    public $LaunchConfigurationStatus;

    /**
     * @var string <p>Instance billing type. The value range is as follows:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, i.e. monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
     */
    public $InstanceChargeType;

    /**
     * @var InstanceMarketOptionsRequest <p>Market-related options of the instance, such as spot instance parameters. If the payment mode of the specified instance is spot payment, this parameter is required.</p>
     */
    public $InstanceMarketOptions;

    /**
     * @var array <p>Instance model list.</p>
     */
    public $InstanceTypes;

    /**
     * @var array <p>Instance tag list. Instances scaled out will automatically come with tags, supporting up to 10 tags.</p>
     */
    public $InstanceTags;

    /**
     * @var array <p>Tag list. The tags in this parameter are only used to bind launch configurations and will not be passed to CVM instances scaled out based on the launch configuration.</p>
     */
    public $Tags;

    /**
     * @var integer <p>Version number.</p>
     */
    public $VersionNumber;

    /**
     * @var string <p>Update time in standard <code>UTC</code> format.</p>
     */
    public $UpdatedTime;

    /**
     * @var string <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
     */
    public $CamRoleName;

    /**
     * @var string <p>The value of InstanceTypesCheckPolicy last time when operating.</p>
     */
    public $LastOperationInstanceTypesCheckPolicy;

    /**
     * @var HostNameSettings <p>Related settings for the CVM host name (HostName).</p>
     */
    public $HostNameSettings;

    /**
     * @var InstanceNameSettings <p>Related settings for the cloud server instance name (InstanceName).</p>
     */
    public $InstanceNameSettings;

    /**
     * @var InstanceChargePrepaid <p>Prepaid mode, i.e., parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode for the specified instance is prepaid.</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>Cloud disk type selection policy. Parameter value range: <li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select available cloud disk types in the current AZ</li></p>
     */
    public $DiskTypePolicy;

    /**
     * @var string <p>Hyper Computing Cluster ID.<br><br>Note: This field is empty by default.</p>
     */
    public $HpcClusterId;

    /**
     * @var IPv6InternetAccessible <p>IPv6 public network bandwidth-related information settings.</p>
     */
    public $IPv6InternetAccessible;

    /**
     * @var array <p>Placement Group id. Only one can be specified.</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var string <p>Image family name.</p>
     */
    public $ImageFamily;

    /**
     * @var string <p>Local dedicated cluster ID.</p>
     */
    public $DedicatedClusterId;

    /**
     * @var array <p>ENI configuration of the launch configuration.</p>
     */
    public $NetworkInterfaces;

    /**
     * @param integer $ProjectId <p>Project ID of the instance.</p>
     * @param string $LaunchConfigurationId <p>Launch configuration ID.</p>
     * @param string $LaunchConfigurationName <p>Startup configuration name.</p>
     * @param string $InstanceType <p>Instance model.</p>
     * @param SystemDisk $SystemDisk <p>Instance system disk configuration information.</p>
     * @param array $DataDisks <p>Instance data disk configuration information.</p>
     * @param LimitedLoginSettings $LoginSettings <p>Instance login settings.</p>
     * @param InternetAccessible $InternetAccessible <p>Public network bandwidth-related information settings.</p>
     * @param array $SecurityGroupIds <p>Security group to which an instance belongs.</p>
     * @param array $AutoScalingGroupAbstractSet <p>The scaling group bound to the launch configuration.</p>
     * @param string $UserData <p>Custom data.</p>
     * @param string $CreatedTime <p>Launch configuration creation time, in standard <code>UTC</code> time.</p>
     * @param EnhancedService $EnhancedService <p>Enhanced services enabling situation of the instance and its settings.</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $LaunchConfigurationStatus <p>Current status of the launch configuration. Value range: <li>NORMAL: Normal</li><li>IMAGE_ABNORMAL: The launch configuration image is exceptional</li><li>CBS_SNAP_ABNORMAL: The launch configuration data disk snapshot is exceptional</li><li>SECURITY_GROUP_ABNORMAL: The launch configuration security group is exceptional</li></p>
     * @param string $InstanceChargeType <p>Instance billing type. The value range is as follows:</p><li>POSTPAID_BY_HOUR: hourly postpaid</li><li>SPOTPAID: spot payment</li><li>PREPAID: prepaid, i.e. monthly subscription</li><li>CDCPAID: dedicated cluster payment</li>
     * @param InstanceMarketOptionsRequest $InstanceMarketOptions <p>Market-related options of the instance, such as spot instance parameters. If the payment mode of the specified instance is spot payment, this parameter is required.</p>
     * @param array $InstanceTypes <p>Instance model list.</p>
     * @param array $InstanceTags <p>Instance tag list. Instances scaled out will automatically come with tags, supporting up to 10 tags.</p>
     * @param array $Tags <p>Tag list. The tags in this parameter are only used to bind launch configurations and will not be passed to CVM instances scaled out based on the launch configuration.</p>
     * @param integer $VersionNumber <p>Version number.</p>
     * @param string $UpdatedTime <p>Update time in standard <code>UTC</code> format.</p>
     * @param string $CamRoleName <p>CAM role name, which can be obtained from the roleName in the return value from the <a href="https://www.tencentcloud.com/document/product/598/36223?from_cn_redirect=1">DescribeRoleList</a> API.</p>
     * @param string $LastOperationInstanceTypesCheckPolicy <p>The value of InstanceTypesCheckPolicy last time when operating.</p>
     * @param HostNameSettings $HostNameSettings <p>Related settings for the CVM host name (HostName).</p>
     * @param InstanceNameSettings $InstanceNameSettings <p>Related settings for the cloud server instance name (InstanceName).</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>Prepaid mode, i.e., parameter settings related to monthly/annual subscription. By specifying this parameter, you can specify the purchase duration of annual and monthly subscription instances, whether to enable auto-renewal, and other attributes. This parameter is required if the billing mode for the specified instance is prepaid.</p>
     * @param string $DiskTypePolicy <p>Cloud disk type selection policy. Parameter value range: <li>ORIGINAL: use the set cloud disk type</li><li>AUTOMATIC: automatically select available cloud disk types in the current AZ</li></p>
     * @param string $HpcClusterId <p>Hyper Computing Cluster ID.<br><br>Note: This field is empty by default.</p>
     * @param IPv6InternetAccessible $IPv6InternetAccessible <p>IPv6 public network bandwidth-related information settings.</p>
     * @param array $DisasterRecoverGroupIds <p>Placement Group id. Only one can be specified.</p>
     * @param string $ImageFamily <p>Image family name.</p>
     * @param string $DedicatedClusterId <p>Local dedicated cluster ID.</p>
     * @param array $NetworkInterfaces <p>ENI configuration of the launch configuration.</p>
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

        if (array_key_exists("NetworkInterfaces",$param) and $param["NetworkInterfaces"] !== null) {
            $this->NetworkInterfaces = [];
            foreach ($param["NetworkInterfaces"] as $key => $value){
                $obj = new NetworkInterface();
                $obj->deserialize($value);
                array_push($this->NetworkInterfaces, $obj);
            }
        }
    }
}
