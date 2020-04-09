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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAddressTemplateGroup request structure.
 *
 * @method string getAddressTemplateGroupId() Obtain The IP address template group instance ID, such as `ipmg-90cex8mq`.
 * @method void setAddressTemplateGroupId(string $AddressTemplateGroupId) Set The IP address template group instance ID, such as `ipmg-90cex8mq`.
 */
class DeleteAddressTemplateGroupRequest extends AbstractModel
{
    /**
     * @var string The IP address template group instance ID, such as `ipmg-90cex8mq`.
     */
    public $AddressTemplateGroupId;

    /**
     * @param string $AddressTemplateGroupId The IP address template group instance ID, such as `ipmg-90cex8mq`.
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
        if (array_key_exists("AddressTemplateGroupId",$param) and $param["AddressTemplateGroupId"] !== null) {
            $this->AddressTemplateGroupId = $param["AddressTemplateGroupId"];
        }
    }
}
