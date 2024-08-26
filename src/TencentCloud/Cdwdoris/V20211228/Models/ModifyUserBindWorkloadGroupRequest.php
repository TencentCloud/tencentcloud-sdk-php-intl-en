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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserBindWorkloadGroup request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method array getBindUsers() Obtain The user information of the resource group needs to be bound. If an account has information of multiple hosts, all information needs to be uploaded.
 * @method void setBindUsers(array $BindUsers) Set The user information of the resource group needs to be bound. If an account has information of multiple hosts, all information needs to be uploaded.
 * @method string getOldWorkloadGroupName() Obtain Name of the resource group bound before modification
 * @method void setOldWorkloadGroupName(string $OldWorkloadGroupName) Set Name of the resource group bound before modification
 * @method string getNewWorkloadGroupName() Obtain Name of the resource group bound after modification
 * @method void setNewWorkloadGroupName(string $NewWorkloadGroupName) Set Name of the resource group bound after modification
 */
class ModifyUserBindWorkloadGroupRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var array The user information of the resource group needs to be bound. If an account has information of multiple hosts, all information needs to be uploaded.
     */
    public $BindUsers;

    /**
     * @var string Name of the resource group bound before modification
     */
    public $OldWorkloadGroupName;

    /**
     * @var string Name of the resource group bound after modification
     */
    public $NewWorkloadGroupName;

    /**
     * @param string $InstanceId Cluster ID
     * @param array $BindUsers The user information of the resource group needs to be bound. If an account has information of multiple hosts, all information needs to be uploaded.
     * @param string $OldWorkloadGroupName Name of the resource group bound before modification
     * @param string $NewWorkloadGroupName Name of the resource group bound after modification
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BindUsers",$param) and $param["BindUsers"] !== null) {
            $this->BindUsers = [];
            foreach ($param["BindUsers"] as $key => $value){
                $obj = new BindUser();
                $obj->deserialize($value);
                array_push($this->BindUsers, $obj);
            }
        }

        if (array_key_exists("OldWorkloadGroupName",$param) and $param["OldWorkloadGroupName"] !== null) {
            $this->OldWorkloadGroupName = $param["OldWorkloadGroupName"];
        }

        if (array_key_exists("NewWorkloadGroupName",$param) and $param["NewWorkloadGroupName"] !== null) {
            $this->NewWorkloadGroupName = $param["NewWorkloadGroupName"];
        }
    }
}
