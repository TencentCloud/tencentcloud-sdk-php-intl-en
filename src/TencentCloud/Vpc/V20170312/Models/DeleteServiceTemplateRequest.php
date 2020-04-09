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
 * DeleteServiceTemplate request structure.
 *
 * @method string getServiceTemplateId() Obtain Protocol port template instance ID, such as `ppm-e6dy460g`.
 * @method void setServiceTemplateId(string $ServiceTemplateId) Set Protocol port template instance ID, such as `ppm-e6dy460g`.
 */
class DeleteServiceTemplateRequest extends AbstractModel
{
    /**
     * @var string Protocol port template instance ID, such as `ppm-e6dy460g`.
     */
    public $ServiceTemplateId;

    /**
     * @param string $ServiceTemplateId Protocol port template instance ID, such as `ppm-e6dy460g`.
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
        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }
    }
}
