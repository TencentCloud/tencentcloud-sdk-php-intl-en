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
 * IP SSL information
 *
 * @method string getZoneId() Obtain <p>ID of the site associated with the IP SSL domain name. If the Status value is unbound, this field is empty.</p>
 * @method void setZoneId(string $ZoneId) Set <p>ID of the site associated with the IP SSL domain name. If the Status value is unbound, this field is empty.</p>
 * @method string getAssociatedDomain() Obtain <p>The domain name associated with the IP SSL. If the Status value is unbound, this field is empty.</p>
 * @method void setAssociatedDomain(string $AssociatedDomain) Set <p>The domain name associated with the IP SSL. If the Status value is unbound, this field is empty.</p>
 * @method string getStatus() Obtain <p>Association status. Values as follows:</p><li>bound: IP SSL configuration bound</li><li>binding: IP SSL configuration binding</li><li>unbinding: IP SSL configuration unbinding</li><li>unbound: IP SSL configuration not bound</li>
 * @method void setStatus(string $Status) Set <p>Association status. Values as follows:</p><li>bound: IP SSL configuration bound</li><li>binding: IP SSL configuration binding</li><li>unbinding: IP SSL configuration unbinding</li><li>unbound: IP SSL configuration not bound</li>
 */
class IPSSLConfig extends AbstractModel
{
    /**
     * @var string <p>ID of the site associated with the IP SSL domain name. If the Status value is unbound, this field is empty.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>The domain name associated with the IP SSL. If the Status value is unbound, this field is empty.</p>
     */
    public $AssociatedDomain;

    /**
     * @var string <p>Association status. Values as follows:</p><li>bound: IP SSL configuration bound</li><li>binding: IP SSL configuration binding</li><li>unbinding: IP SSL configuration unbinding</li><li>unbound: IP SSL configuration not bound</li>
     */
    public $Status;

    /**
     * @param string $ZoneId <p>ID of the site associated with the IP SSL domain name. If the Status value is unbound, this field is empty.</p>
     * @param string $AssociatedDomain <p>The domain name associated with the IP SSL. If the Status value is unbound, this field is empty.</p>
     * @param string $Status <p>Association status. Values as follows:</p><li>bound: IP SSL configuration bound</li><li>binding: IP SSL configuration binding</li><li>unbinding: IP SSL configuration unbinding</li><li>unbound: IP SSL configuration not bound</li>
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

        if (array_key_exists("AssociatedDomain",$param) and $param["AssociatedDomain"] !== null) {
            $this->AssociatedDomain = $param["AssociatedDomain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
