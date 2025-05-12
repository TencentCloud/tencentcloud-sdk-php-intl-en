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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The proxy version information supported by TDSQL-C for MySQL.
 *
 * @method string getProxyVersion() Obtain proxy version number.
 * @method void setProxyVersion(string $ProxyVersion) Set proxy version number.
 * @method string getProxyVersionType() Obtain Version description: GA: stable version. BETA: BETA version. DEPRECATED: outdated.
 * @method void setProxyVersionType(string $ProxyVersionType) Set Version description: GA: stable version. BETA: BETA version. DEPRECATED: outdated.
 */
class ProxyVersionInfo extends AbstractModel
{
    /**
     * @var string proxy version number.
     */
    public $ProxyVersion;

    /**
     * @var string Version description: GA: stable version. BETA: BETA version. DEPRECATED: outdated.
     */
    public $ProxyVersionType;

    /**
     * @param string $ProxyVersion proxy version number.
     * @param string $ProxyVersionType Version description: GA: stable version. BETA: BETA version. DEPRECATED: outdated.
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
        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("ProxyVersionType",$param) and $param["ProxyVersionType"] !== null) {
            $this->ProxyVersionType = $param["ProxyVersionType"];
        }
    }
}
