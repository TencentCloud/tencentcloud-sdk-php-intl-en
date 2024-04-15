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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReplicationGroup request structure.
 *
 * @method string getInstanceId() Obtain Specifies the ID of the primary instance in the replication group.
 * @method void setInstanceId(string $InstanceId) Set Specifies the ID of the primary instance in the replication group.
 * @method string getGroupName() Obtain Replication group name. It supports only Chinese characters, letters, digits, underscores (_), and hyphens (-), with a length of 2-64 characters.
 * @method void setGroupName(string $GroupName) Set Replication group name. It supports only Chinese characters, letters, digits, underscores (_), and hyphens (-), with a length of 2-64 characters.
 * @method string getRemark() Obtain Remark information.
 * @method void setRemark(string $Remark) Set Remark information.
 */
class CreateReplicationGroupRequest extends AbstractModel
{
    /**
     * @var string Specifies the ID of the primary instance in the replication group.
     */
    public $InstanceId;

    /**
     * @var string Replication group name. It supports only Chinese characters, letters, digits, underscores (_), and hyphens (-), with a length of 2-64 characters.
     */
    public $GroupName;

    /**
     * @var string Remark information.
     */
    public $Remark;

    /**
     * @param string $InstanceId Specifies the ID of the primary instance in the replication group.
     * @param string $GroupName Replication group name. It supports only Chinese characters, letters, digits, underscores (_), and hyphens (-), with a length of 2-64 characters.
     * @param string $Remark Remark information.
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
