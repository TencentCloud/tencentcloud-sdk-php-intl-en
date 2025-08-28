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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupByFlowId request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format of mssql-3l3fgqn7.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format of mssql-3l3fgqn7.
 * @method string getFlowId() Obtain Backup creation process ID, which can be obtained through the [CreateBackup](https://cloud.tencent.com/document/product/238/19946) API.
 * @method void setFlowId(string $FlowId) Set Backup creation process ID, which can be obtained through the [CreateBackup](https://cloud.tencent.com/document/product/238/19946) API.
 */
class DescribeBackupByFlowIdRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format of mssql-3l3fgqn7.
     */
    public $InstanceId;

    /**
     * @var string Backup creation process ID, which can be obtained through the [CreateBackup](https://cloud.tencent.com/document/product/238/19946) API.
     */
    public $FlowId;

    /**
     * @param string $InstanceId Instance ID, in the format of mssql-3l3fgqn7.
     * @param string $FlowId Backup creation process ID, which can be obtained through the [CreateBackup](https://cloud.tencent.com/document/product/238/19946) API.
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
