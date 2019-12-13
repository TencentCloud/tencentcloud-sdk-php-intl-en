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
 * @method string getInstanceId() 获取ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
 * @method void setInstanceId(string $InstanceId) 设置ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
 * @method string getRemark() 获取Backup remarks
 * @method void setRemark(string $Remark) 设置Backup remarks
 */

/**
 *ManualBackupInstance request structure.
 */
class ManualBackupInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
     */
    public $InstanceId;

    /**
     * @var string Backup remarks
     */
    public $Remark;
    /**
     * @param string $InstanceId ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
     * @param string $Remark Backup remarks
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
