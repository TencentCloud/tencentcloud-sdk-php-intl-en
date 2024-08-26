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
 * Permission configuration synchronization.
 *
 * @method string getDeploymentStatus() Obtain Deployed: Deployment succeeded; DeployedRequired: Redeployment required; DeployFailed: Deployment failed.
 * @method void setDeploymentStatus(string $DeploymentStatus) Set Deployed: Deployment succeeded; DeployedRequired: Redeployment required; DeployFailed: Deployment failed.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRoleConfigurationName() Obtain Permission configuration name.
 * @method void setRoleConfigurationName(string $RoleConfigurationName) Set Permission configuration name.
 * @method integer getTargetUin() Obtain UIN of the target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the target account of the Tencent Cloud Organization.
 * @method string getTargetName() Obtain Name of the target account of the Tencent Cloud Organization.
 * @method void setTargetName(string $TargetName) Set Name of the target account of the Tencent Cloud Organization.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Modification time.
 * @method void setUpdateTime(string $UpdateTime) Set Modification time.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 */
class RoleConfigurationProvisionings extends AbstractModel
{
    /**
     * @var string Deployed: Deployment succeeded; DeployedRequired: Redeployment required; DeployFailed: Deployment failed.
     */
    public $DeploymentStatus;

    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string Permission configuration name.
     */
    public $RoleConfigurationName;

    /**
     * @var integer UIN of the target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Name of the target account of the Tencent Cloud Organization.
     */
    public $TargetName;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $UpdateTime;

    /**
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @param string $DeploymentStatus Deployed: Deployment succeeded; DeployedRequired: Redeployment required; DeployFailed: Deployment failed.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RoleConfigurationName Permission configuration name.
     * @param integer $TargetUin UIN of the target account of the Tencent Cloud Organization.
     * @param string $TargetName Name of the target account of the Tencent Cloud Organization.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Modification time.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
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
        if (array_key_exists("DeploymentStatus",$param) and $param["DeploymentStatus"] !== null) {
            $this->DeploymentStatus = $param["DeploymentStatus"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }
    }
}
