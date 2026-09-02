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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Routing information
 *
 * @method string getVip() Obtain Access IP.
 * @method void setVip(string $Vip) Set Access IP.
 * @method string getVport() Obtain Access Port
 * @method void setVport(string $Vport) Set Access Port
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainPort() Obtain Access domain name port.
 * @method void setDomainPort(string $DomainPort) Set Access domain name port.
 */
class RouteInfo extends AbstractModel
{
    /**
     * @var string Access IP.
     */
    public $Vip;

    /**
     * @var string Access Port
     */
    public $Vport;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Access domain name port.
     */
    public $DomainPort;

    /**
     * @param string $Vip Access IP.
     * @param string $Vport Access Port
     * @param string $Domain Domain name
     * @param string $DomainPort Access domain name port.
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }
    }
}
