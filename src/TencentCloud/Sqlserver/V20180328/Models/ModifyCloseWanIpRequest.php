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
 * ModifyCloseWanIp request structure.
 *
 * @method string getInstanceId() Obtain Instance resource ID. 
 * @method void setInstanceId(string $InstanceId) Set Instance resource ID. 
 * @method string getRoGroupId() Obtain RO group ID.
 * @method void setRoGroupId(string $RoGroupId) Set RO group ID.
 */
class ModifyCloseWanIpRequest extends AbstractModel
{
    /**
     * @var string Instance resource ID. 
     */
    public $InstanceId;

    /**
     * @var string RO group ID.
     */
    public $RoGroupId;

    /**
     * @param string $InstanceId Instance resource ID. 
     * @param string $RoGroupId RO group ID.
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

        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }
    }
}
