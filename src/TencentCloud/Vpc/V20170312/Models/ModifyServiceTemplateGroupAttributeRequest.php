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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceTemplateGroupAttribute request structure.
 *
 * @method string getServiceTemplateGroupId() Obtain The protocol port template group instance ID, such as `ppmg-ei8hfd9a`.
 * @method void setServiceTemplateGroupId(string $ServiceTemplateGroupId) Set The protocol port template group instance ID, such as `ppmg-ei8hfd9a`.
 * @method string getServiceTemplateGroupName() Obtain Protocol port template group name.
 * @method void setServiceTemplateGroupName(string $ServiceTemplateGroupName) Set Protocol port template group name.
 * @method array getServiceTemplateIds() Obtain Instance ID of the protocol port template, such as `ppm-4dw6agho`.
 * @method void setServiceTemplateIds(array $ServiceTemplateIds) Set Instance ID of the protocol port template, such as `ppm-4dw6agho`.
 */
class ModifyServiceTemplateGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string The protocol port template group instance ID, such as `ppmg-ei8hfd9a`.
     */
    public $ServiceTemplateGroupId;

    /**
     * @var string Protocol port template group name.
     */
    public $ServiceTemplateGroupName;

    /**
     * @var array Instance ID of the protocol port template, such as `ppm-4dw6agho`.
     */
    public $ServiceTemplateIds;

    /**
     * @param string $ServiceTemplateGroupId The protocol port template group instance ID, such as `ppmg-ei8hfd9a`.
     * @param string $ServiceTemplateGroupName Protocol port template group name.
     * @param array $ServiceTemplateIds Instance ID of the protocol port template, such as `ppm-4dw6agho`.
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
        if (array_key_exists("ServiceTemplateGroupId",$param) and $param["ServiceTemplateGroupId"] !== null) {
            $this->ServiceTemplateGroupId = $param["ServiceTemplateGroupId"];
        }

        if (array_key_exists("ServiceTemplateGroupName",$param) and $param["ServiceTemplateGroupName"] !== null) {
            $this->ServiceTemplateGroupName = $param["ServiceTemplateGroupName"];
        }

        if (array_key_exists("ServiceTemplateIds",$param) and $param["ServiceTemplateIds"] !== null) {
            $this->ServiceTemplateIds = $param["ServiceTemplateIds"];
        }
    }
}
