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
 * ModifyAccelerationDomainStatuses request structure.
 *
 * @method string getZoneId() Obtain ID of the site related with the accelerated domain name.
 * @method void setZoneId(string $ZoneId) Set ID of the site related with the accelerated domain name.
 * @method array getDomainNames() Obtain List of accelerated domain names to be modified.
 * @method void setDomainNames(array $DomainNames) Set List of accelerated domain names to be modified.
 * @method string getStatus() Obtain Status of the accelerated domain name. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
 * @method void setStatus(string $Status) Set Status of the accelerated domain name. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
 * @method boolean getForce() Obtain Whether to force suspension when the domain name has associated resources (such as alias domain names and traffic scheduling policies). Values:
<li>`true`: Suspend the domain name and all associated resources.</li>
<li>`true`: Do not suspend the domain name and all associated resources.</li>Default value: `false`.
 * @method void setForce(boolean $Force) Set Whether to force suspension when the domain name has associated resources (such as alias domain names and traffic scheduling policies). Values:
<li>`true`: Suspend the domain name and all associated resources.</li>
<li>`true`: Do not suspend the domain name and all associated resources.</li>Default value: `false`.
 */
class ModifyAccelerationDomainStatusesRequest extends AbstractModel
{
    /**
     * @var string ID of the site related with the accelerated domain name.
     */
    public $ZoneId;

    /**
     * @var array List of accelerated domain names to be modified.
     */
    public $DomainNames;

    /**
     * @var string Status of the accelerated domain name. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
     */
    public $Status;

    /**
     * @var boolean Whether to force suspension when the domain name has associated resources (such as alias domain names and traffic scheduling policies). Values:
<li>`true`: Suspend the domain name and all associated resources.</li>
<li>`true`: Do not suspend the domain name and all associated resources.</li>Default value: `false`.
     */
    public $Force;

    /**
     * @param string $ZoneId ID of the site related with the accelerated domain name.
     * @param array $DomainNames List of accelerated domain names to be modified.
     * @param string $Status Status of the accelerated domain name. Values:
<li>`online`: Enabled</li>
<li>`offline`: Disabled</li>
     * @param boolean $Force Whether to force suspension when the domain name has associated resources (such as alias domain names and traffic scheduling policies). Values:
<li>`true`: Suspend the domain name and all associated resources.</li>
<li>`true`: Do not suspend the domain name and all associated resources.</li>Default value: `false`.
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

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
