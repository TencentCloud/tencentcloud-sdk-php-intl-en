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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNativeGatewayServerGroup request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance id.
Only supports postpaid instances
 * @method void setGatewayId(string $GatewayId) Set Gateway instance id.
Only supports postpaid instances
 * @method string getGroupId() Obtain gateway group id
 * @method void setGroupId(string $GroupId) Set gateway group id
 */
class DeleteNativeGatewayServerGroupRequest extends AbstractModel
{
    /**
     * @var string Gateway instance id.
Only supports postpaid instances
     */
    public $GatewayId;

    /**
     * @var string gateway group id
     */
    public $GroupId;

    /**
     * @param string $GatewayId Gateway instance id.
Only supports postpaid instances
     * @param string $GroupId gateway group id
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
