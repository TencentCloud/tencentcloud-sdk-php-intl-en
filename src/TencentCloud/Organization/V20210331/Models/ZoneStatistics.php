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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CIC space statistics.
 *
 * @method integer getUserQuota() Obtain User quota.
 * @method void setUserQuota(integer $UserQuota) Set User quota.
 * @method integer getGroupQuota() Obtain User group quota.
 * @method void setGroupQuota(integer $GroupQuota) Set User group quota.
 * @method integer getRoleConfigurationQuota() Obtain Permission configuration quota.
 * @method void setRoleConfigurationQuota(integer $RoleConfigurationQuota) Set Permission configuration quota.
 * @method integer getSystemPolicyPerRoleConfigurationQuota() Obtain System policy quota bound to the permission configuration.
 * @method void setSystemPolicyPerRoleConfigurationQuota(integer $SystemPolicyPerRoleConfigurationQuota) Set System policy quota bound to the permission configuration.
 * @method integer getUserCount() Obtain Number of users.
 * @method void setUserCount(integer $UserCount) Set Number of users.
 * @method integer getGroupCount() Obtain Number of user groups.
 * @method void setGroupCount(integer $GroupCount) Set Number of user groups.
 * @method integer getRoleConfigurationCount() Obtain Number of permission configurations.
 * @method void setRoleConfigurationCount(integer $RoleConfigurationCount) Set Number of permission configurations.
 * @method integer getUserProvisioningCount() Obtain Number of synchronized users.
 * @method void setUserProvisioningCount(integer $UserProvisioningCount) Set Number of synchronized users.
 * @method integer getRoleConfigurationSyncCount() Obtain Number of synchronized roles.
 * @method void setRoleConfigurationSyncCount(integer $RoleConfigurationSyncCount) Set Number of synchronized roles.
 */
class ZoneStatistics extends AbstractModel
{
    /**
     * @var integer User quota.
     */
    public $UserQuota;

    /**
     * @var integer User group quota.
     */
    public $GroupQuota;

    /**
     * @var integer Permission configuration quota.
     */
    public $RoleConfigurationQuota;

    /**
     * @var integer System policy quota bound to the permission configuration.
     */
    public $SystemPolicyPerRoleConfigurationQuota;

    /**
     * @var integer Number of users.
     */
    public $UserCount;

    /**
     * @var integer Number of user groups.
     */
    public $GroupCount;

    /**
     * @var integer Number of permission configurations.
     */
    public $RoleConfigurationCount;

    /**
     * @var integer Number of synchronized users.
     */
    public $UserProvisioningCount;

    /**
     * @var integer Number of synchronized roles.
     */
    public $RoleConfigurationSyncCount;

    /**
     * @param integer $UserQuota User quota.
     * @param integer $GroupQuota User group quota.
     * @param integer $RoleConfigurationQuota Permission configuration quota.
     * @param integer $SystemPolicyPerRoleConfigurationQuota System policy quota bound to the permission configuration.
     * @param integer $UserCount Number of users.
     * @param integer $GroupCount Number of user groups.
     * @param integer $RoleConfigurationCount Number of permission configurations.
     * @param integer $UserProvisioningCount Number of synchronized users.
     * @param integer $RoleConfigurationSyncCount Number of synchronized roles.
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
        if (array_key_exists("UserQuota",$param) and $param["UserQuota"] !== null) {
            $this->UserQuota = $param["UserQuota"];
        }

        if (array_key_exists("GroupQuota",$param) and $param["GroupQuota"] !== null) {
            $this->GroupQuota = $param["GroupQuota"];
        }

        if (array_key_exists("RoleConfigurationQuota",$param) and $param["RoleConfigurationQuota"] !== null) {
            $this->RoleConfigurationQuota = $param["RoleConfigurationQuota"];
        }

        if (array_key_exists("SystemPolicyPerRoleConfigurationQuota",$param) and $param["SystemPolicyPerRoleConfigurationQuota"] !== null) {
            $this->SystemPolicyPerRoleConfigurationQuota = $param["SystemPolicyPerRoleConfigurationQuota"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("RoleConfigurationCount",$param) and $param["RoleConfigurationCount"] !== null) {
            $this->RoleConfigurationCount = $param["RoleConfigurationCount"];
        }

        if (array_key_exists("UserProvisioningCount",$param) and $param["UserProvisioningCount"] !== null) {
            $this->UserProvisioningCount = $param["UserProvisioningCount"];
        }

        if (array_key_exists("RoleConfigurationSyncCount",$param) and $param["RoleConfigurationSyncCount"] !== null) {
            $this->RoleConfigurationSyncCount = $param["RoleConfigurationSyncCount"];
        }
    }
}
