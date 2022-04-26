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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelInvocation request structure.
 *
 * @method string getInvocationId() Obtain Execution activity ID
 * @method void setInvocationId(string $InvocationId) Set Execution activity ID
 * @method array getInstanceIds() Obtain Instance ID list. A maximum of 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. A maximum of 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
 */
class CancelInvocationRequest extends AbstractModel
{
    /**
     * @var string Execution activity ID
     */
    public $InvocationId;

    /**
     * @var array Instance ID list. A maximum of 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
     */
    public $InstanceIds;

    /**
     * @param string $InvocationId Execution activity ID
     * @param array $InstanceIds Instance ID list. A maximum of 100 IDs are allowed. Supported instance types:
<li> `CVM`
<li> `LIGHTHOUSE`
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
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
