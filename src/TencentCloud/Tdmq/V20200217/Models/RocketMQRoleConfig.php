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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ role configuration information.
 *
 * @method string getRoleName() Obtain Role name, corresponding to the secret key.
 * @method void setRoleName(string $RoleName) Set Role name, corresponding to the secret key.
 * @method string getRoleToken() Obtain accessKey
 * @method void setRoleToken(string $RoleToken) Set accessKey
 * @method string getEnvironmentId() Obtain Namespace
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace
 * @method array getPermissions() Obtain Role permission
 * @method void setPermissions(array $Permissions) Set Role permission
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getPermType() Obtain Permission type. Permissions are granted by cluster by default. Cluster: cluster level; TopicAndGroup: topic/consumer group level.
 * @method void setPermType(string $PermType) Set Permission type. Permissions are granted by cluster by default. Cluster: cluster level; TopicAndGroup: topic/consumer group level.
 * @method array getDetailedRolePerms() Obtain Permission configuration in the topic and group dimensions.
 * @method void setDetailedRolePerms(array $DetailedRolePerms) Set Permission configuration in the topic and group dimensions.
 */
class RocketMQRoleConfig extends AbstractModel
{
    /**
     * @var string Role name, corresponding to the secret key.
     */
    public $RoleName;

    /**
     * @var string accessKey
     */
    public $RoleToken;

    /**
     * @var string Namespace
     */
    public $EnvironmentId;

    /**
     * @var array Role permission
     */
    public $Permissions;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Permission type. Permissions are granted by cluster by default. Cluster: cluster level; TopicAndGroup: topic/consumer group level.
     */
    public $PermType;

    /**
     * @var array Permission configuration in the topic and group dimensions.
     */
    public $DetailedRolePerms;

    /**
     * @param string $RoleName Role name, corresponding to the secret key.
     * @param string $RoleToken accessKey
     * @param string $EnvironmentId Namespace
     * @param array $Permissions Role permission
     * @param string $Remark Remarks
     * @param string $PermType Permission type. Permissions are granted by cluster by default. Cluster: cluster level; TopicAndGroup: topic/consumer group level.
     * @param array $DetailedRolePerms Permission configuration in the topic and group dimensions.
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleToken",$param) and $param["RoleToken"] !== null) {
            $this->RoleToken = $param["RoleToken"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("DetailedRolePerms",$param) and $param["DetailedRolePerms"] !== null) {
            $this->DetailedRolePerms = [];
            foreach ($param["DetailedRolePerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedRolePerms, $obj);
            }
        }
    }
}
