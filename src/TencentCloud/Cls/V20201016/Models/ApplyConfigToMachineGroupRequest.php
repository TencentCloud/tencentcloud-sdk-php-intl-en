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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyConfigToMachineGroup request structure.
 *
 * @method string getConfigId() Obtain Collection configuration ID
 * @method void setConfigId(string $ConfigId) Set Collection configuration ID
 * @method string getGroupId() Obtain Machine group ID
 * @method void setGroupId(string $GroupId) Set Machine group ID
 */
class ApplyConfigToMachineGroupRequest extends AbstractModel
{
    /**
     * @var string Collection configuration ID
     */
    public $ConfigId;

    /**
     * @var string Machine group ID
     */
    public $GroupId;

    /**
     * @param string $ConfigId Collection configuration ID
     * @param string $GroupId Machine group ID
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
