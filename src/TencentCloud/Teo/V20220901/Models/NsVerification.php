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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information required for switching DNS servers. It's applicable to sites connected via NSs.
 *
 * @method array getNameServers() Obtain The DNS server address assigned to the user when connecting a site to EO via NS. You need to switch the NameServer of the domain name to this address.
 * @method void setNameServers(array $NameServers) Set The DNS server address assigned to the user when connecting a site to EO via NS. You need to switch the NameServer of the domain name to this address.
 */
class NsVerification extends AbstractModel
{
    /**
     * @var array The DNS server address assigned to the user when connecting a site to EO via NS. You need to switch the NameServer of the domain name to this address.
     */
    public $NameServers;

    /**
     * @param array $NameServers The DNS server address assigned to the user when connecting a site to EO via NS. You need to switch the NameServer of the domain name to this address.
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
        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }
    }
}
