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
 * ModifyNativeGatewayServerGroup request structure.
 *
 * @method string getGatewayId() Obtain Cloud Native API gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API gateway instance ID.
 * @method string getGroupId() Obtain gateway group id
 * @method void setGroupId(string $GroupId) Set gateway group id
 * @method string getName() Obtain Cloud native API gateway name supports up to 60 characters.
 * @method void setName(string $Name) Set Cloud native API gateway name supports up to 60 characters.
 * @method string getDescription() Obtain Cloud native API gateway description supports up to 120 characters.
 * @method void setDescription(string $Description) Set Cloud native API gateway description supports up to 120 characters.
 */
class ModifyNativeGatewayServerGroupRequest extends AbstractModel
{
    /**
     * @var string Cloud Native API gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var string gateway group id
     */
    public $GroupId;

    /**
     * @var string Cloud native API gateway name supports up to 60 characters.
     */
    public $Name;

    /**
     * @var string Cloud native API gateway description supports up to 120 characters.
     */
    public $Description;

    /**
     * @param string $GatewayId Cloud Native API gateway instance ID.
     * @param string $GroupId gateway group id
     * @param string $Name Cloud native API gateway name supports up to 60 characters.
     * @param string $Description Cloud native API gateway description supports up to 120 characters.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
