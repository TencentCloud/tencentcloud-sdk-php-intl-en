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
 * ModifyRocketMQEnvironmentRole request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getRoleName() Obtain Role name.
 * @method void setRoleName(string $RoleName) Set Role name.
 * @method array getPermissions() Obtain Authorization item, which can contain a non-empty character array of up to 2 items including produce and consume.
 * @method void setPermissions(array $Permissions) Set Authorization item, which can contain a non-empty character array of up to 2 items including produce and consume.
 * @method string getClusterId() Obtain Required field, cluster ID
 * @method void setClusterId(string $ClusterId) Set Required field, cluster ID
 * @method array getDetailedPerms() Obtain Permission configuration for topic and group dimensions.
 * @method void setDetailedPerms(array $DetailedPerms) Set Permission configuration for topic and group dimensions.
 */
class ModifyRocketMQEnvironmentRoleRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Role name.
     */
    public $RoleName;

    /**
     * @var array Authorization item, which can contain a non-empty character array of up to 2 items including produce and consume.
     */
    public $Permissions;

    /**
     * @var string Required field, cluster ID
     */
    public $ClusterId;

    /**
     * @var array Permission configuration for topic and group dimensions.
     */
    public $DetailedPerms;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $RoleName Role name.
     * @param array $Permissions Authorization item, which can contain a non-empty character array of up to 2 items including produce and consume.
     * @param string $ClusterId Required field, cluster ID
     * @param array $DetailedPerms Permission configuration for topic and group dimensions.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DetailedPerms",$param) and $param["DetailedPerms"] !== null) {
            $this->DetailedPerms = [];
            foreach ($param["DetailedPerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedPerms, $obj);
            }
        }
    }
}
