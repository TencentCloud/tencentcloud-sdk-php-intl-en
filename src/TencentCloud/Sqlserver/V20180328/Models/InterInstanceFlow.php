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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance status after enabling or disabling the interworking group
 *
 * @method string getInstanceId() Obtain Instance ID, such as mssql-sdf32n1d.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as mssql-sdf32n1d.
 * @method integer getFlowId() Obtain Instance task ID for enabling or disabling the interworking group. When `FlowId` is less than 0, the interworking group will be enabled or disabled successfully; otherwise, the operation failed.
 * @method void setFlowId(integer $FlowId) Set Instance task ID for enabling or disabling the interworking group. When `FlowId` is less than 0, the interworking group will be enabled or disabled successfully; otherwise, the operation failed.
 */
class InterInstanceFlow extends AbstractModel
{
    /**
     * @var string Instance ID, such as mssql-sdf32n1d.
     */
    public $InstanceId;

    /**
     * @var integer Instance task ID for enabling or disabling the interworking group. When `FlowId` is less than 0, the interworking group will be enabled or disabled successfully; otherwise, the operation failed.
     */
    public $FlowId;

    /**
     * @param string $InstanceId Instance ID, such as mssql-sdf32n1d.
     * @param integer $FlowId Instance task ID for enabling or disabling the interworking group. When `FlowId` is less than 0, the interworking group will be enabled or disabled successfully; otherwise, the operation failed.
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
