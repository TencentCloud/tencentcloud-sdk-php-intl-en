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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain resolution configuration of the pressure machine.
 *
 * @method array getHostAliases() Obtain Domain configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setHostAliases(array $HostAliases) Set Domain configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method DNSConfig getDNSConfig() Obtain DNS configuration.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDNSConfig(DNSConfig $DNSConfig) Set DNS configuration.

Note: This field may return null, indicating that no valid value is found.
 */
class DomainNameConfig extends AbstractModel
{
    /**
     * @var array Domain configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $HostAliases;

    /**
     * @var DNSConfig DNS configuration.

Note: This field may return null, indicating that no valid value is found.
     */
    public $DNSConfig;

    /**
     * @param array $HostAliases Domain configuration.

Note: This field may return null, indicating that no valid value is found.
     * @param DNSConfig $DNSConfig DNS configuration.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("HostAliases",$param) and $param["HostAliases"] !== null) {
            $this->HostAliases = [];
            foreach ($param["HostAliases"] as $key => $value){
                $obj = new HostAlias();
                $obj->deserialize($value);
                array_push($this->HostAliases, $obj);
            }
        }

        if (array_key_exists("DNSConfig",$param) and $param["DNSConfig"] !== null) {
            $this->DNSConfig = new DNSConfig();
            $this->DNSConfig->deserialize($param["DNSConfig"]);
        }
    }
}
