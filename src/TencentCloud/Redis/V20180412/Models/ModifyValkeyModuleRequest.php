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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyValkeyModule request structure.
 *
 * @method string getInstanceId() Obtain <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method string getName() Obtain <p>Specify the extension module to be modified.</p><p>Enumeration values:</p><ul><li>ValkeyBloom: Refers to the Bloom module, which can efficiently judge whether an element exists in a collection.</li><li>ValkeyJSON: Refers to the JSON module, which allows Redis to natively support the JSON data format, facilitating the storage and manipulation of JSON Objects.</li><li>ValkeySearch: Refers to the Search module, which provides a full-text search feature, enabling efficient search operations on data stored in Redis.</li></ul>
 * @method void setName(string $Name) Set <p>Specify the extension module to be modified.</p><p>Enumeration values:</p><ul><li>ValkeyBloom: Refers to the Bloom module, which can efficiently judge whether an element exists in a collection.</li><li>ValkeyJSON: Refers to the JSON module, which allows Redis to natively support the JSON data format, facilitating the storage and manipulation of JSON Objects.</li><li>ValkeySearch: Refers to the Search module, which provides a full-text search feature, enabling efficient search operations on data stored in Redis.</li></ul>
 * @method string getStatus() Obtain <p>Set the enable status of the extension module. Only support setting to ON to enable the extension module.</p>
 * @method void setStatus(string $Status) Set <p>Set the enable status of the extension module. Only support setting to ON to enable the extension module.</p>
 */
class ModifyValkeyModuleRequest extends AbstractModel
{
    /**
     * @var string <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Specify the extension module to be modified.</p><p>Enumeration values:</p><ul><li>ValkeyBloom: Refers to the Bloom module, which can efficiently judge whether an element exists in a collection.</li><li>ValkeyJSON: Refers to the JSON module, which allows Redis to natively support the JSON data format, facilitating the storage and manipulation of JSON Objects.</li><li>ValkeySearch: Refers to the Search module, which provides a full-text search feature, enabling efficient search operations on data stored in Redis.</li></ul>
     */
    public $Name;

    /**
     * @var string <p>Set the enable status of the extension module. Only support setting to ON to enable the extension module.</p>
     */
    public $Status;

    /**
     * @param string $InstanceId <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param string $Name <p>Specify the extension module to be modified.</p><p>Enumeration values:</p><ul><li>ValkeyBloom: Refers to the Bloom module, which can efficiently judge whether an element exists in a collection.</li><li>ValkeyJSON: Refers to the JSON module, which allows Redis to natively support the JSON data format, facilitating the storage and manipulation of JSON Objects.</li><li>ValkeySearch: Refers to the Search module, which provides a full-text search feature, enabling efficient search operations on data stored in Redis.</li></ul>
     * @param string $Status <p>Set the enable status of the extension module. Only support setting to ON to enable the extension module.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
