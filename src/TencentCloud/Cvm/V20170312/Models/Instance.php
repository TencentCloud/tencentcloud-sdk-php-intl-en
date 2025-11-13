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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes information on an instance
 *
 * @method Placement getPlacement() Obtain Location of the instance
 * @method void setPlacement(Placement $Placement) Set Location of the instance
 * @method string getInstanceId() Obtain Instance `ID`
 * @method void setInstanceId(string $InstanceId) Set Instance `ID`
 * @method string getInstanceType() Obtain Instance model
 * @method void setInstanceType(string $InstanceType) Set Instance model
 * @method integer getCPU() Obtain Number of CPU cores of the instance; unit: core
 * @method void setCPU(integer $CPU) Set Number of CPU cores of the instance; unit: core
 * @method integer getMemory() Obtain Instance memory capacity. unit: GiB.
 * @method void setMemory(integer $Memory) Set Instance memory capacity. unit: GiB.
 * @method string getRestrictState() Obtain Instance business status. valid values:<br><li>NORMAL: indicates an instance in the NORMAL state</li><li>EXPIRED: indicates an EXPIRED instance</li><li>PROTECTIVELY_ISOLATED: PROTECTIVELY ISOLATED instance</li>.
 * @method void setRestrictState(string $RestrictState) Set Instance business status. valid values:<br><li>NORMAL: indicates an instance in the NORMAL state</li><li>EXPIRED: indicates an EXPIRED instance</li><li>PROTECTIVELY_ISOLATED: PROTECTIVELY ISOLATED instance</li>.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceChargeType() Obtain Instance billing plan. Valid values:<br><li>`POSTPAID_BY_HOUR`: pay after use. You are billed by the hour, by traffic.<br><li>`CDHPAID`: `CDH` billing plan. Applicable to `CDH` only, not the instances on the host.<br>
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing plan. Valid values:<br><li>`POSTPAID_BY_HOUR`: pay after use. You are billed by the hour, by traffic.<br><li>`CDHPAID`: `CDH` billing plan. Applicable to `CDH` only, not the instances on the host.<br>
 * @method SystemDisk getSystemDisk() Obtain Information on the system disk of the instance
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Information on the system disk of the instance
 * @method array getDataDisks() Obtain Information of the instance data disks.
 * @method void setDataDisks(array $DataDisks) Set Information of the instance data disks.
 * @method array getPrivateIpAddresses() Obtain List of private IPs of the instance's primary ENI.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set List of private IPs of the instance's primary ENI.
 * @method array getPublicIpAddresses() Obtain List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
 * @method InternetAccessible getInternetAccessible() Obtain Information on instance bandwidth.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Information on instance bandwidth.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain Information on the VPC where the instance resides.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set Information on the VPC where the instance resides.
 * @method string getImageId() Obtain `ID` of the image used to create the instance.
 * @method void setImageId(string $ImageId) Set `ID` of the image used to create the instance.
 * @method string getRenewFlag() Obtain AUTO-Renewal flag. valid values:<br><li>`NOTIFY_AND_MANUAL_RENEW`: indicates that a notification of impending expiration is made but AUTO-renewal is not performed</li><li>`NOTIFY_AND_AUTO_RENEW`: indicates that a notification of impending expiration is made AND AUTO-renewal is performed</li><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: indicates that notification that it is about to expire is not made AND AUTO-renewal is not performed.
Note: this field is null in postpaid mode.
 * @method void setRenewFlag(string $RenewFlag) Set AUTO-Renewal flag. valid values:<br><li>`NOTIFY_AND_MANUAL_RENEW`: indicates that a notification of impending expiration is made but AUTO-renewal is not performed</li><li>`NOTIFY_AND_AUTO_RENEW`: indicates that a notification of impending expiration is made AND AUTO-renewal is performed</li><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: indicates that notification that it is about to expire is not made AND AUTO-renewal is not performed.
Note: this field is null in postpaid mode.
 * @method string getCreatedTime() Obtain Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method string getExpiredTime() Obtain Expiration time in UTC format following the `ISO8601` standard: `YYYY-MM-DDThh:mm:ssZ`. Note: this parameter is `null` for postpaid instances.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time in UTC format following the `ISO8601` standard: `YYYY-MM-DDThh:mm:ssZ`. Note: this parameter is `null` for postpaid instances.
 * @method string getOsName() Obtain Operating system name.
 * @method void setOsName(string $OsName) Set Operating system name.
 * @method array getSecurityGroupIds() Obtain Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
 * @method LoginSettings getLoginSettings() Obtain Login settings of the instance. Currently only the key associated with the instance is returned.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Login settings of the instance. Currently only the key associated with the instance is returned.
 * @method string getInstanceState() Obtain Instance status. for specific status types, see the  [instance status table](https://www.tencentcloud.com/document/product/213/15753#instancestatus)
 * @method void setInstanceState(string $InstanceState) Set Instance status. for specific status types, see the  [instance status table](https://www.tencentcloud.com/document/product/213/15753#instancestatus)
 * @method array getTags() Obtain List of tags associated with the instance.
 * @method void setTags(array $Tags) Set List of tags associated with the instance.
 * @method string getStopChargingMode() Obtain Shutdown billing mode of an instance.

Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown</li><li>STOP_CHARGING: billing stops after shutdown</li><li>NOT_APPLICABLE: the instance is NOT shut down or stopping billing after shutdown is NOT APPLICABLE to the instance</li>.
 * @method void setStopChargingMode(string $StopChargingMode) Set Shutdown billing mode of an instance.

Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown</li><li>STOP_CHARGING: billing stops after shutdown</li><li>NOT_APPLICABLE: the instance is NOT shut down or stopping billing after shutdown is NOT APPLICABLE to the instance</li>.
 * @method string getUuid() Obtain Globally unique ID of the instance.
 * @method void setUuid(string $Uuid) Set Globally unique ID of the instance.
 * @method string getLatestOperation() Obtain Last operation of the instance, such as StopInstances or ResetInstance.
 * @method void setLatestOperation(string $LatestOperation) Set Last operation of the instance, such as StopInstances or ResetInstance.
 * @method string getLatestOperationState() Obtain The latest operation status of the instance. valid values:<br><li>SUCCESS: indicates that the operation succeeded</li><li>OPERATING: indicates that the operation is in progress</li><li>FAILED: indicates that the operation FAILED</li>.
Note: This field may return null, indicating that no valid value is found.
 * @method void setLatestOperationState(string $LatestOperationState) Set The latest operation status of the instance. valid values:<br><li>SUCCESS: indicates that the operation succeeded</li><li>OPERATING: indicates that the operation is in progress</li><li>FAILED: indicates that the operation FAILED</li>.
Note: This field may return null, indicating that no valid value is found.
 * @method string getLatestOperationRequestId() Obtain Unique request ID for the last operation of the instance.
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) Set Unique request ID for the last operation of the instance.
 * @method string getDisasterRecoverGroupId() Obtain Spread placement group ID.
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) Set Spread placement group ID.
 * @method array getIPv6Addresses() Obtain IPv6 address of the instance.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setIPv6Addresses(array $IPv6Addresses) Set IPv6 address of the instance.
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getCamRoleName() Obtain CAM role name.
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setCamRoleName(string $CamRoleName) Set CAM role name.
Note: this field may return null, indicating that no valid value is obtained.
 * @method string getHpcClusterId() Obtain High-performance computing cluster ID.
 * @method void setHpcClusterId(string $HpcClusterId) Set High-performance computing cluster ID.
 * @method array getRdmaIpAddresses() Obtain IP list of HPC cluster.
Note: this field may return null, indicating that no valid value was found.
 * @method void setRdmaIpAddresses(array $RdmaIpAddresses) Set IP list of HPC cluster.
Note: this field may return null, indicating that no valid value was found.
 * @method string getDedicatedClusterId() Obtain Dedicated cluster ID where the instance is located.
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Dedicated cluster ID where the instance is located.
 * @method string getIsolatedSource() Obtain Instance isolation type. valid values:<br><li>ARREAR: indicates arrears isolation<br></li><li>EXPIRE: indicates isolation upon expiration<br></li><li>MANMADE: indicates voluntarily refunded isolation<br></li><li>NOTISOLATED: indicates unisolated<br></li>.
 * @method void setIsolatedSource(string $IsolatedSource) Set Instance isolation type. valid values:<br><li>ARREAR: indicates arrears isolation<br></li><li>EXPIRE: indicates isolation upon expiration<br></li><li>MANMADE: indicates voluntarily refunded isolation<br></li><li>NOTISOLATED: indicates unisolated<br></li>.
 * @method GPUInfo getGPUInfo() Obtain GPU information. if it is a gpu type instance, this value will be returned. for other type instances, it does not return.
 * @method void setGPUInfo(GPUInfo $GPUInfo) Set GPU information. if it is a gpu type instance, this value will be returned. for other type instances, it does not return.
 * @method string getLicenseType() Obtain Instance OS license type. Default value: `TencentCloud`
 * @method void setLicenseType(string $LicenseType) Set Instance OS license type. Default value: `TencentCloud`
 * @method boolean getDisableApiTermination() Obtain Instance destruction protection flag indicates whether an instance is allowed to be deleted through an api. value ranges from:<br><li>true: indicates that instance protection is enabled, deletion through apis is not allowed</li><li>false: indicates that instance protection is disabled, allow passage</li><br>default value: false.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Instance destruction protection flag indicates whether an instance is allowed to be deleted through an api. value ranges from:<br><li>true: indicates that instance protection is enabled, deletion through apis is not allowed</li><li>false: indicates that instance protection is disabled, allow passage</li><br>default value: false.
 * @method string getDefaultLoginUser() Obtain Default login user
 * @method void setDefaultLoginUser(string $DefaultLoginUser) Set Default login user
 * @method integer getDefaultLoginPort() Obtain Default login port
 * @method void setDefaultLoginPort(integer $DefaultLoginPort) Set Default login port
 * @method string getLatestOperationErrorMsg() Obtain Latest operation errors of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLatestOperationErrorMsg(string $LatestOperationErrorMsg) Set Latest operation errors of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method Metadata getMetadata() Obtain Custom metadata. this parameter corresponds to the metadata information specified when creating a CVM. **note: in beta test**.
 * @method void setMetadata(Metadata $Metadata) Set Custom metadata. this parameter corresponds to the metadata information specified when creating a CVM. **note: in beta test**.
 * @method array getPublicIPv6Addresses() Obtain Specifies the public IPv6 address bound to the instance.
 * @method void setPublicIPv6Addresses(array $PublicIPv6Addresses) Set Specifies the public IPv6 address bound to the instance.
 */
class Instance extends AbstractModel
{
    /**
     * @var Placement Location of the instance
     */
    public $Placement;

    /**
     * @var string Instance `ID`
     */
    public $InstanceId;

    /**
     * @var string Instance model
     */
    public $InstanceType;

    /**
     * @var integer Number of CPU cores of the instance; unit: core
     */
    public $CPU;

    /**
     * @var integer Instance memory capacity. unit: GiB.
     */
    public $Memory;

    /**
     * @var string Instance business status. valid values:<br><li>NORMAL: indicates an instance in the NORMAL state</li><li>EXPIRED: indicates an EXPIRED instance</li><li>PROTECTIVELY_ISOLATED: PROTECTIVELY ISOLATED instance</li>.
     */
    public $RestrictState;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance billing plan. Valid values:<br><li>`POSTPAID_BY_HOUR`: pay after use. You are billed by the hour, by traffic.<br><li>`CDHPAID`: `CDH` billing plan. Applicable to `CDH` only, not the instances on the host.<br>
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk Information on the system disk of the instance
     */
    public $SystemDisk;

    /**
     * @var array Information of the instance data disks.
     */
    public $DataDisks;

    /**
     * @var array List of private IPs of the instance's primary ENI.
     */
    public $PrivateIpAddresses;

    /**
     * @var array List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
     */
    public $PublicIpAddresses;

    /**
     * @var InternetAccessible Information on instance bandwidth.
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud Information on the VPC where the instance resides.
     */
    public $VirtualPrivateCloud;

    /**
     * @var string `ID` of the image used to create the instance.
     */
    public $ImageId;

    /**
     * @var string AUTO-Renewal flag. valid values:<br><li>`NOTIFY_AND_MANUAL_RENEW`: indicates that a notification of impending expiration is made but AUTO-renewal is not performed</li><li>`NOTIFY_AND_AUTO_RENEW`: indicates that a notification of impending expiration is made AND AUTO-renewal is performed</li><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: indicates that notification that it is about to expire is not made AND AUTO-renewal is not performed.
Note: this field is null in postpaid mode.
     */
    public $RenewFlag;

    /**
     * @var string Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     */
    public $CreatedTime;

    /**
     * @var string Expiration time in UTC format following the `ISO8601` standard: `YYYY-MM-DDThh:mm:ssZ`. Note: this parameter is `null` for postpaid instances.
     */
    public $ExpiredTime;

    /**
     * @var string Operating system name.
     */
    public $OsName;

    /**
     * @var array Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings Login settings of the instance. Currently only the key associated with the instance is returned.
     */
    public $LoginSettings;

    /**
     * @var string Instance status. for specific status types, see the  [instance status table](https://www.tencentcloud.com/document/product/213/15753#instancestatus)
     */
    public $InstanceState;

    /**
     * @var array List of tags associated with the instance.
     */
    public $Tags;

    /**
     * @var string Shutdown billing mode of an instance.

Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown</li><li>STOP_CHARGING: billing stops after shutdown</li><li>NOT_APPLICABLE: the instance is NOT shut down or stopping billing after shutdown is NOT APPLICABLE to the instance</li>.
     */
    public $StopChargingMode;

    /**
     * @var string Globally unique ID of the instance.
     */
    public $Uuid;

    /**
     * @var string Last operation of the instance, such as StopInstances or ResetInstance.
     */
    public $LatestOperation;

    /**
     * @var string The latest operation status of the instance. valid values:<br><li>SUCCESS: indicates that the operation succeeded</li><li>OPERATING: indicates that the operation is in progress</li><li>FAILED: indicates that the operation FAILED</li>.
Note: This field may return null, indicating that no valid value is found.
     */
    public $LatestOperationState;

    /**
     * @var string Unique request ID for the last operation of the instance.
     */
    public $LatestOperationRequestId;

    /**
     * @var string Spread placement group ID.
     */
    public $DisasterRecoverGroupId;

    /**
     * @var array IPv6 address of the instance.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $IPv6Addresses;

    /**
     * @var string CAM role name.
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $CamRoleName;

    /**
     * @var string High-performance computing cluster ID.
     */
    public $HpcClusterId;

    /**
     * @var array IP list of HPC cluster.
Note: this field may return null, indicating that no valid value was found.
     */
    public $RdmaIpAddresses;

    /**
     * @var string Dedicated cluster ID where the instance is located.
     */
    public $DedicatedClusterId;

    /**
     * @var string Instance isolation type. valid values:<br><li>ARREAR: indicates arrears isolation<br></li><li>EXPIRE: indicates isolation upon expiration<br></li><li>MANMADE: indicates voluntarily refunded isolation<br></li><li>NOTISOLATED: indicates unisolated<br></li>.
     */
    public $IsolatedSource;

    /**
     * @var GPUInfo GPU information. if it is a gpu type instance, this value will be returned. for other type instances, it does not return.
     */
    public $GPUInfo;

    /**
     * @var string Instance OS license type. Default value: `TencentCloud`
     */
    public $LicenseType;

    /**
     * @var boolean Instance destruction protection flag indicates whether an instance is allowed to be deleted through an api. value ranges from:<br><li>true: indicates that instance protection is enabled, deletion through apis is not allowed</li><li>false: indicates that instance protection is disabled, allow passage</li><br>default value: false.
     */
    public $DisableApiTermination;

    /**
     * @var string Default login user
     */
    public $DefaultLoginUser;

    /**
     * @var integer Default login port
     */
    public $DefaultLoginPort;

    /**
     * @var string Latest operation errors of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LatestOperationErrorMsg;

    /**
     * @var Metadata Custom metadata. this parameter corresponds to the metadata information specified when creating a CVM. **note: in beta test**.
     */
    public $Metadata;

    /**
     * @var array Specifies the public IPv6 address bound to the instance.
     */
    public $PublicIPv6Addresses;

    /**
     * @param Placement $Placement Location of the instance
     * @param string $InstanceId Instance `ID`
     * @param string $InstanceType Instance model
     * @param integer $CPU Number of CPU cores of the instance; unit: core
     * @param integer $Memory Instance memory capacity. unit: GiB.
     * @param string $RestrictState Instance business status. valid values:<br><li>NORMAL: indicates an instance in the NORMAL state</li><li>EXPIRED: indicates an EXPIRED instance</li><li>PROTECTIVELY_ISOLATED: PROTECTIVELY ISOLATED instance</li>.
     * @param string $InstanceName Instance name
     * @param string $InstanceChargeType Instance billing plan. Valid values:<br><li>`POSTPAID_BY_HOUR`: pay after use. You are billed by the hour, by traffic.<br><li>`CDHPAID`: `CDH` billing plan. Applicable to `CDH` only, not the instances on the host.<br>
     * @param SystemDisk $SystemDisk Information on the system disk of the instance
     * @param array $DataDisks Information of the instance data disks.
     * @param array $PrivateIpAddresses List of private IPs of the instance's primary ENI.
     * @param array $PublicIpAddresses List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
     * @param InternetAccessible $InternetAccessible Information on instance bandwidth.
     * @param VirtualPrivateCloud $VirtualPrivateCloud Information on the VPC where the instance resides.
     * @param string $ImageId `ID` of the image used to create the instance.
     * @param string $RenewFlag AUTO-Renewal flag. valid values:<br><li>`NOTIFY_AND_MANUAL_RENEW`: indicates that a notification of impending expiration is made but AUTO-renewal is not performed</li><li>`NOTIFY_AND_AUTO_RENEW`: indicates that a notification of impending expiration is made AND AUTO-renewal is performed</li><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: indicates that notification that it is about to expire is not made AND AUTO-renewal is not performed.
Note: this field is null in postpaid mode.
     * @param string $CreatedTime Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $ExpiredTime Expiration time in UTC format following the `ISO8601` standard: `YYYY-MM-DDThh:mm:ssZ`. Note: this parameter is `null` for postpaid instances.
     * @param string $OsName Operating system name.
     * @param array $SecurityGroupIds Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
     * @param LoginSettings $LoginSettings Login settings of the instance. Currently only the key associated with the instance is returned.
     * @param string $InstanceState Instance status. for specific status types, see the  [instance status table](https://www.tencentcloud.com/document/product/213/15753#instancestatus)
     * @param array $Tags List of tags associated with the instance.
     * @param string $StopChargingMode Shutdown billing mode of an instance.

Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown</li><li>STOP_CHARGING: billing stops after shutdown</li><li>NOT_APPLICABLE: the instance is NOT shut down or stopping billing after shutdown is NOT APPLICABLE to the instance</li>.
     * @param string $Uuid Globally unique ID of the instance.
     * @param string $LatestOperation Last operation of the instance, such as StopInstances or ResetInstance.
     * @param string $LatestOperationState The latest operation status of the instance. valid values:<br><li>SUCCESS: indicates that the operation succeeded</li><li>OPERATING: indicates that the operation is in progress</li><li>FAILED: indicates that the operation FAILED</li>.
Note: This field may return null, indicating that no valid value is found.
     * @param string $LatestOperationRequestId Unique request ID for the last operation of the instance.
     * @param string $DisasterRecoverGroupId Spread placement group ID.
     * @param array $IPv6Addresses IPv6 address of the instance.
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $CamRoleName CAM role name.
Note: this field may return null, indicating that no valid value is obtained.
     * @param string $HpcClusterId High-performance computing cluster ID.
     * @param array $RdmaIpAddresses IP list of HPC cluster.
Note: this field may return null, indicating that no valid value was found.
     * @param string $DedicatedClusterId Dedicated cluster ID where the instance is located.
     * @param string $IsolatedSource Instance isolation type. valid values:<br><li>ARREAR: indicates arrears isolation<br></li><li>EXPIRE: indicates isolation upon expiration<br></li><li>MANMADE: indicates voluntarily refunded isolation<br></li><li>NOTISOLATED: indicates unisolated<br></li>.
     * @param GPUInfo $GPUInfo GPU information. if it is a gpu type instance, this value will be returned. for other type instances, it does not return.
     * @param string $LicenseType Instance OS license type. Default value: `TencentCloud`
     * @param boolean $DisableApiTermination Instance destruction protection flag indicates whether an instance is allowed to be deleted through an api. value ranges from:<br><li>true: indicates that instance protection is enabled, deletion through apis is not allowed</li><li>false: indicates that instance protection is disabled, allow passage</li><br>default value: false.
     * @param string $DefaultLoginUser Default login user
     * @param integer $DefaultLoginPort Default login port
     * @param string $LatestOperationErrorMsg Latest operation errors of the instance.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param Metadata $Metadata Custom metadata. this parameter corresponds to the metadata information specified when creating a CVM. **note: in beta test**.
     * @param array $PublicIPv6Addresses Specifies the public IPv6 address bound to the instance.
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
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

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("StopChargingMode",$param) and $param["StopChargingMode"] !== null) {
            $this->StopChargingMode = $param["StopChargingMode"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("IPv6Addresses",$param) and $param["IPv6Addresses"] !== null) {
            $this->IPv6Addresses = $param["IPv6Addresses"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("RdmaIpAddresses",$param) and $param["RdmaIpAddresses"] !== null) {
            $this->RdmaIpAddresses = $param["RdmaIpAddresses"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("IsolatedSource",$param) and $param["IsolatedSource"] !== null) {
            $this->IsolatedSource = $param["IsolatedSource"];
        }

        if (array_key_exists("GPUInfo",$param) and $param["GPUInfo"] !== null) {
            $this->GPUInfo = new GPUInfo();
            $this->GPUInfo->deserialize($param["GPUInfo"]);
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("DefaultLoginUser",$param) and $param["DefaultLoginUser"] !== null) {
            $this->DefaultLoginUser = $param["DefaultLoginUser"];
        }

        if (array_key_exists("DefaultLoginPort",$param) and $param["DefaultLoginPort"] !== null) {
            $this->DefaultLoginPort = $param["DefaultLoginPort"];
        }

        if (array_key_exists("LatestOperationErrorMsg",$param) and $param["LatestOperationErrorMsg"] !== null) {
            $this->LatestOperationErrorMsg = $param["LatestOperationErrorMsg"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("PublicIPv6Addresses",$param) and $param["PublicIPv6Addresses"] !== null) {
            $this->PublicIPv6Addresses = $param["PublicIPv6Addresses"];
        }
    }
}
