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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesAttribute request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method string getInstanceName() Obtain The instance name, which can not exceed 60 characters
<dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they can not be both specified.</dx-alert>
 * @method void setInstanceName(string $InstanceName) Set The instance name, which can not exceed 60 characters
<dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they can not be both specified.</dx-alert>
 * @method string getUserData() Obtain User data provided to an instance, which needs to be encoded in Base64 format with a maximum size of 16 KB. For details on obtaining this parameter, refer to the startup commands for [Windows](https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and [Linux](https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
 * @method void setUserData(string $UserData) Set User data provided to an instance, which needs to be encoded in Base64 format with a maximum size of 16 KB. For details on obtaining this parameter, refer to the startup commands for [Windows](https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and [Linux](https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
 * @method array getSecurityGroups() Obtain IDs of security groups associated with the specified instance. You can associate with a security group by adding its ID, or cancel the association with a security group by removing its ID. <dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they cannot be both set.</dx-alert>
 * @method void setSecurityGroups(array $SecurityGroups) Set IDs of security groups associated with the specified instance. You can associate with a security group by adding its ID, or cancel the association with a security group by removing its ID. <dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they cannot be both set.</dx-alert>
 * @method string getCamRoleName() Obtain The role bound with the instance. If it is not specified, it indicates to unbind the current role of the CVM.
 * @method void setCamRoleName(string $CamRoleName) Set The role bound with the instance. If it is not specified, it indicates to unbind the current role of the CVM.
 * @method string getHostName() Obtain Modified hostname of an instance.<li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>Note: After the hostname is modified, the instance will restart immediately, and the new hostname will take effect after the restart.
 * @method void setHostName(string $HostName) Set Modified hostname of an instance.<li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>Note: After the hostname is modified, the instance will restart immediately, and the new hostname will take effect after the restart.
 * @method boolean getDisableApiTermination() Obtain Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li>Default value: false.
 * @method void setDisableApiTermination(boolean $DisableApiTermination) Set Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li>Default value: false.
 * @method string getCamRoleType() Obtain The role type, which is used in conjunction with `CamRoleName`. The value is obtained in `RoleType` field, returning by `CAM DescribeRoleList` and `GetRole` APIs. Valid value: `user`, `system` and `service_linked`.
For example, when `LinkedRoleIn` is contained in `CamRoleName` (such as `TKE_QCSLinkedRoleInPrometheusService`), the returned `RoleType` of `DescribeRoleList` and `GetRoleis` is `service_linked`, and the `CamRoleType` `service_linked`.
When the value obtained in `RoleType` is `user` (default) or `system`, `CamRoleType` can be left empty.
 * @method void setCamRoleType(string $CamRoleType) Set The role type, which is used in conjunction with `CamRoleName`. The value is obtained in `RoleType` field, returning by `CAM DescribeRoleList` and `GetRole` APIs. Valid value: `user`, `system` and `service_linked`.
For example, when `LinkedRoleIn` is contained in `CamRoleName` (such as `TKE_QCSLinkedRoleInPrometheusService`), the returned `RoleType` of `DescribeRoleList` and `GetRoleis` is `service_linked`, and the `CamRoleType` `service_linked`.
When the value obtained in `RoleType` is `user` (default) or `system`, `CamRoleType` can be left empty.
 * @method boolean getAutoReboot() Obtain Whether to automatically restart an instance when modifying a hostname. If not specified, the instance will automatically restart by default.
- true: Modify the hostname and automatically restart the instance.
- false: Modify the hostname without automatically restarting the instance. A manual restart is required for the new hostname to take effect.
Note: This parameter is valid only when a hostname is modified.
 * @method void setAutoReboot(boolean $AutoReboot) Set Whether to automatically restart an instance when modifying a hostname. If not specified, the instance will automatically restart by default.
- true: Modify the hostname and automatically restart the instance.
- false: Modify the hostname without automatically restarting the instance. A manual restart is required for the new hostname to take effect.
Note: This parameter is valid only when a hostname is modified.
 */
class ModifyInstancesAttributeRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var string The instance name, which can not exceed 60 characters
<dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they can not be both specified.</dx-alert>
     */
    public $InstanceName;

    /**
     * @var string User data provided to an instance, which needs to be encoded in Base64 format with a maximum size of 16 KB. For details on obtaining this parameter, refer to the startup commands for [Windows](https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and [Linux](https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
     */
    public $UserData;

    /**
     * @var array IDs of security groups associated with the specified instance. You can associate with a security group by adding its ID, or cancel the association with a security group by removing its ID. <dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they cannot be both set.</dx-alert>
     */
    public $SecurityGroups;

    /**
     * @var string The role bound with the instance. If it is not specified, it indicates to unbind the current role of the CVM.
     */
    public $CamRoleName;

    /**
     * @var string Modified hostname of an instance.<li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>Note: After the hostname is modified, the instance will restart immediately, and the new hostname will take effect after the restart.
     */
    public $HostName;

    /**
     * @var boolean Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li>Default value: false.
     */
    public $DisableApiTermination;

    /**
     * @var string The role type, which is used in conjunction with `CamRoleName`. The value is obtained in `RoleType` field, returning by `CAM DescribeRoleList` and `GetRole` APIs. Valid value: `user`, `system` and `service_linked`.
For example, when `LinkedRoleIn` is contained in `CamRoleName` (such as `TKE_QCSLinkedRoleInPrometheusService`), the returned `RoleType` of `DescribeRoleList` and `GetRoleis` is `service_linked`, and the `CamRoleType` `service_linked`.
When the value obtained in `RoleType` is `user` (default) or `system`, `CamRoleType` can be left empty.
     */
    public $CamRoleType;

    /**
     * @var boolean Whether to automatically restart an instance when modifying a hostname. If not specified, the instance will automatically restart by default.
- true: Modify the hostname and automatically restart the instance.
- false: Modify the hostname without automatically restarting the instance. A manual restart is required for the new hostname to take effect.
Note: This parameter is valid only when a hostname is modified.
     */
    public $AutoReboot;

    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     * @param string $InstanceName The instance name, which can not exceed 60 characters
<dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they can not be both specified.</dx-alert>
     * @param string $UserData User data provided to an instance, which needs to be encoded in Base64 format with a maximum size of 16 KB. For details on obtaining this parameter, refer to the startup commands for [Windows](https://intl.cloud.tencent.com/document/product/213/17526?from_cn_redirect=1) and [Linux](https://intl.cloud.tencent.com/document/product/213/17525?from_cn_redirect=1).
     * @param array $SecurityGroups IDs of security groups associated with the specified instance. You can associate with a security group by adding its ID, or cancel the association with a security group by removing its ID. <dx-alert infotype="explain" title="">Either `InstanceName` or `SecurityGroups` must be specified, but they cannot be both set.</dx-alert>
     * @param string $CamRoleName The role bound with the instance. If it is not specified, it indicates to unbind the current role of the CVM.
     * @param string $HostName Modified hostname of an instance.<li>Period (.) and hyphen (-) should not be used as the first or last character of the hostname, and should not be used consecutively.</li><li>Windows instances: The hostname should contain 2 to 15 characters, including letters (case insensitive), digits, and hyphens (-), does not support periods (.), and should not be all digits.</li><li>Instances of other types (such as Linux instances): The hostname should contain 2 to 60 characters, including multiple periods (.), with each segment between periods considered as one section. Each section can contain letters (case insensitive), digits, and hyphens (-).</li>Note: After the hostname is modified, the instance will restart immediately, and the new hostname will take effect after the restart.
     * @param boolean $DisableApiTermination Instance termination protection flag, indicating whether an instance is allowed to be deleted through an API. Valid values:<li>true: Instance protection is enabled, and the instance is not allowed to be deleted through the API.</li><li>false: Instance protection is disabled, and the instance is allowed to be deleted through the API.</li>Default value: false.
     * @param string $CamRoleType The role type, which is used in conjunction with `CamRoleName`. The value is obtained in `RoleType` field, returning by `CAM DescribeRoleList` and `GetRole` APIs. Valid value: `user`, `system` and `service_linked`.
For example, when `LinkedRoleIn` is contained in `CamRoleName` (such as `TKE_QCSLinkedRoleInPrometheusService`), the returned `RoleType` of `DescribeRoleList` and `GetRoleis` is `service_linked`, and the `CamRoleType` `service_linked`.
When the value obtained in `RoleType` is `user` (default) or `system`, `CamRoleType` can be left empty.
     * @param boolean $AutoReboot Whether to automatically restart an instance when modifying a hostname. If not specified, the instance will automatically restart by default.
- true: Modify the hostname and automatically restart the instance.
- false: Modify the hostname without automatically restarting the instance. A manual restart is required for the new hostname to take effect.
Note: This parameter is valid only when a hostname is modified.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("CamRoleType",$param) and $param["CamRoleType"] !== null) {
            $this->CamRoleType = $param["CamRoleType"];
        }

        if (array_key_exists("AutoReboot",$param) and $param["AutoReboot"] !== null) {
            $this->AutoReboot = $param["AutoReboot"];
        }
    }
}
