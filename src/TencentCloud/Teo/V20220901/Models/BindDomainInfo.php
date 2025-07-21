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
 * Describes the domain names bound to the policy template.
 *
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method string getZoneId() Obtain Zone ID to which the domain belongs.
 * @method void setZoneId(string $ZoneId) Set Zone ID to which the domain belongs.
 * @method string getStatus() Obtain Binding status. valid values:. 
<li>`process`: binding in progress</li>
<li>`online`: binding succeeded.</li>
<Li>`fail`: binding failed.</li>
 * @method void setStatus(string $Status) Set Binding status. valid values:. 
<li>`process`: binding in progress</li>
<li>`online`: binding succeeded.</li>
<Li>`fail`: binding failed.</li>
 */
class BindDomainInfo extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var string Zone ID to which the domain belongs.
     */
    public $ZoneId;

    /**
     * @var string Binding status. valid values:. 
<li>`process`: binding in progress</li>
<li>`online`: binding succeeded.</li>
<Li>`fail`: binding failed.</li>
     */
    public $Status;

    /**
     * @param string $Domain Domain name.
     * @param string $ZoneId Zone ID to which the domain belongs.
     * @param string $Status Binding status. valid values:. 
<li>`process`: binding in progress</li>
<li>`online`: binding succeeded.</li>
<Li>`fail`: binding failed.</li>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
