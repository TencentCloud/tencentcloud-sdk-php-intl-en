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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed configuration parameters required for binding a KV namespace to an edge function, used to specify the source of the bound namespace. With this configuration, the edge function can operate the KV namespace under the specified site.
 *
 * @method string getZoneId() Obtain Site ID to which the KV namespace belongs. Specify the site where the KV namespace that should be bound is located. Cross-site binding is supported.
 * @method void setZoneId(string $ZoneId) Set Site ID to which the KV namespace belongs. Specify the site where the KV namespace that should be bound is located. Cross-site binding is supported.
 * @method string getNamespace() Obtain KV namespace name. Specify the specific namespace that should be bound. You can obtain the list of namespaces under a site through the DescribeKVNamespace API.
 * @method void setNamespace(string $Namespace) Set KV namespace name. Specify the specific namespace that should be bound. You can obtain the list of namespaces under a site through the DescribeKVNamespace API.
 */
class KVNamespaceParameters extends AbstractModel
{
    /**
     * @var string Site ID to which the KV namespace belongs. Specify the site where the KV namespace that should be bound is located. Cross-site binding is supported.
     */
    public $ZoneId;

    /**
     * @var string KV namespace name. Specify the specific namespace that should be bound. You can obtain the list of namespaces under a site through the DescribeKVNamespace API.
     */
    public $Namespace;

    /**
     * @param string $ZoneId Site ID to which the KV namespace belongs. Specify the site where the KV namespace that should be bound is located. Cross-site binding is supported.
     * @param string $Namespace KV namespace name. Specify the specific namespace that should be bound. You can obtain the list of namespaces under a site through the DescribeKVNamespace API.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
