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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The basic information of the IP environment
 *
 * @method IPLocation getLocation() Obtain <p>The geographical location of the IP address</p>
 * @method void setLocation(IPLocation $Location) Set <p>The geographical location of the IP address</p>
 * @method IPNetwork getNetwork() Obtain <p>The basic IP network information</p>
 * @method void setNetwork(IPNetwork $Network) Set <p>The basic IP network information</p>
 */
class Environment extends AbstractModel
{
    /**
     * @var IPLocation <p>The geographical location of the IP address</p>
     */
    public $Location;

    /**
     * @var IPNetwork <p>The basic IP network information</p>
     */
    public $Network;

    /**
     * @param IPLocation $Location <p>The geographical location of the IP address</p>
     * @param IPNetwork $Network <p>The basic IP network information</p>
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new IPLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = new IPNetwork();
            $this->Network->deserialize($param["Network"]);
        }
    }
}
