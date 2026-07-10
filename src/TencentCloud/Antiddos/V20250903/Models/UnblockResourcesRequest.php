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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnblockResources request structure.
 *
 * @method array getResources() Obtain <p>List of resources to apply for unblocking. Supports unblocking based on public IP. You can obtain detailed resource information of blocked resources through the DescribeDDoSBlockRecords API. Parameter example:</p><ul><li>Public IP: 117.175.94.230.</li></ul><p>Input parameter limit: Maximum list length is 10.</p>
 * @method void setResources(array $Resources) Set <p>List of resources to apply for unblocking. Supports unblocking based on public IP. You can obtain detailed resource information of blocked resources through the DescribeDDoSBlockRecords API. Parameter example:</p><ul><li>Public IP: 117.175.94.230.</li></ul><p>Input parameter limit: Maximum list length is 10.</p>
 */
class UnblockResourcesRequest extends AbstractModel
{
    /**
     * @var array <p>List of resources to apply for unblocking. Supports unblocking based on public IP. You can obtain detailed resource information of blocked resources through the DescribeDDoSBlockRecords API. Parameter example:</p><ul><li>Public IP: 117.175.94.230.</li></ul><p>Input parameter limit: Maximum list length is 10.</p>
     */
    public $Resources;

    /**
     * @param array $Resources <p>List of resources to apply for unblocking. Supports unblocking based on public IP. You can obtain detailed resource information of blocked resources through the DescribeDDoSBlockRecords API. Parameter example:</p><ul><li>Public IP: 117.175.94.230.</li></ul><p>Input parameter limit: Maximum list length is 10.</p>
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }
    }
}
