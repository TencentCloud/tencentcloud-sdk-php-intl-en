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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloseWan request structure.
 *
 * @method string getInstanceGrpId() Obtain Instance Group ID
 * @method void setInstanceGrpId(string $InstanceGrpId) Set Instance Group ID
 * @method string getInstanceGroupId() Obtain Instance Group ID
 * @method void setInstanceGroupId(string $InstanceGroupId) Set Instance Group ID
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 */
class CloseWanRequest extends AbstractModel
{
    /**
     * @var string Instance Group ID
     * @deprecated
     */
    public $InstanceGrpId;

    /**
     * @var string Instance Group ID
     */
    public $InstanceGroupId;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @param string $InstanceGrpId Instance Group ID
     * @param string $InstanceGroupId Instance Group ID
     * @param string $InstanceId Instance ID.
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
        if (array_key_exists("InstanceGrpId",$param) and $param["InstanceGrpId"] !== null) {
            $this->InstanceGrpId = $param["InstanceGrpId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
