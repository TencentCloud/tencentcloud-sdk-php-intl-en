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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional container configuration.
 *
 * @method string getJobAccessProxyType() Obtain <p>Proxy access type for computing jobs, such as Spark jobs and the RayCluster UI. If not specified, Internal is used by default.</p><p>Enumeration values:</p><ul><li>Internal: access through the private network LB proxy.</li><li>Public: access through the public network LB proxy.</li><li>None: No LB proxy access is created.</li></ul>
 * @method void setJobAccessProxyType(string $JobAccessProxyType) Set <p>Proxy access type for computing jobs, such as Spark jobs and the RayCluster UI. If not specified, Internal is used by default.</p><p>Enumeration values:</p><ul><li>Internal: access through the private network LB proxy.</li><li>Public: access through the public network LB proxy.</li><li>None: No LB proxy access is created.</li></ul>
 */
class ContainerExtraConf extends AbstractModel
{
    /**
     * @var string <p>Proxy access type for computing jobs, such as Spark jobs and the RayCluster UI. If not specified, Internal is used by default.</p><p>Enumeration values:</p><ul><li>Internal: access through the private network LB proxy.</li><li>Public: access through the public network LB proxy.</li><li>None: No LB proxy access is created.</li></ul>
     */
    public $JobAccessProxyType;

    /**
     * @param string $JobAccessProxyType <p>Proxy access type for computing jobs, such as Spark jobs and the RayCluster UI. If not specified, Internal is used by default.</p><p>Enumeration values:</p><ul><li>Internal: access through the private network LB proxy.</li><li>Public: access through the public network LB proxy.</li><li>None: No LB proxy access is created.</li></ul>
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
        if (array_key_exists("JobAccessProxyType",$param) and $param["JobAccessProxyType"] !== null) {
            $this->JobAccessProxyType = $param["JobAccessProxyType"];
        }
    }
}
