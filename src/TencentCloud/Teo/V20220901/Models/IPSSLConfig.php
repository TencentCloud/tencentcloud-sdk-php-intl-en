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
 * @method string getAssociatedDomain() Obtain Domain name associated with IP SSL. If the Status value is unbound, this field is empty.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setAssociatedDomain(string $AssociatedDomain) Set Domain name associated with IP SSL. If the Status value is unbound, this field is empty.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getStatus() Obtain Association status. Values as follows:
<li>bound: The IP SSL configuration is bound</li>
<li>Binding: IP SSL configuration binding in progress</li>
<li>unbinding: IP SSL configuration is being unbound</li>
<li>unbound: IP SSL configuration not bound to</li>
 * @method void setStatus(string $Status) Set Association status. Values as follows:
<li>bound: The IP SSL configuration is bound</li>
<li>Binding: IP SSL configuration binding in progress</li>
<li>unbinding: IP SSL configuration is being unbound</li>
<li>unbound: IP SSL configuration not bound to</li>
 */
class IPSSLConfig extends AbstractModel
{
    /**
     * @var string Domain name associated with IP SSL. If the Status value is unbound, this field is empty.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $AssociatedDomain;

    /**
     * @var string Association status. Values as follows:
<li>bound: The IP SSL configuration is bound</li>
<li>Binding: IP SSL configuration binding in progress</li>
<li>unbinding: IP SSL configuration is being unbound</li>
<li>unbound: IP SSL configuration not bound to</li>
     */
    public $Status;

    /**
     * @param string $AssociatedDomain Domain name associated with IP SSL. If the Status value is unbound, this field is empty.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $Status Association status. Values as follows:
<li>bound: The IP SSL configuration is bound</li>
<li>Binding: IP SSL configuration binding in progress</li>
<li>unbinding: IP SSL configuration is being unbound</li>
<li>unbound: IP SSL configuration not bound to</li>
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
        if (array_key_exists("AssociatedDomain",$param) and $param["AssociatedDomain"] !== null) {
            $this->AssociatedDomain = $param["AssociatedDomain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
