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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Protocol port template
 *
 * @method string getServiceId() Obtain Protocol port ID, such as `eppm-f5n1f8da`.
 * @method void setServiceId(string $ServiceId) Set Protocol port ID, such as `eppm-f5n1f8da`.
 * @method string getServiceGroupId() Obtain Protocol port group ID, such as `eppmg-f5n1f8da`.
 * @method void setServiceGroupId(string $ServiceGroupId) Set Protocol port group ID, such as `eppmg-f5n1f8da`.
 */
class ServiceTemplateSpecification extends AbstractModel
{
    /**
     * @var string Protocol port ID, such as `eppm-f5n1f8da`.
     */
    public $ServiceId;

    /**
     * @var string Protocol port group ID, such as `eppmg-f5n1f8da`.
     */
    public $ServiceGroupId;

    /**
     * @param string $ServiceId Protocol port ID, such as `eppm-f5n1f8da`.
     * @param string $ServiceGroupId Protocol port group ID, such as `eppmg-f5n1f8da`.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }
    }
}
