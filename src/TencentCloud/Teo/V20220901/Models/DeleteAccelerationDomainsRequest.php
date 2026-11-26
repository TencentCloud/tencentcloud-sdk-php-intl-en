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
 * DeleteAccelerationDomains request structure.
 *
 * @method string getZoneId() Obtain Zone ID of the acceleration domain name.
 * @method void setZoneId(string $ZoneId) Set Zone ID of the acceleration domain name.
 * @method array getDomainNames() Obtain List of acceleration domain name IDs that need to be deleted.
 * @method void setDomainNames(array $DomainNames) Set List of acceleration domain name IDs that need to be deleted.
 * @method boolean getForce() Obtain Whether to force delete. When a domain name has associated resources (for example, alias domain names or traffic scheduling functions), whether to force delete that domain name. Valid values:
<li> true: delete that domain name and all associated resources;</li>
<li> false: When the acceleration domain name has associated resources, deletion is not allowed.</li>If not specified, the default value is false.
 * @method void setForce(boolean $Force) Set Whether to force delete. When a domain name has associated resources (for example, alias domain names or traffic scheduling functions), whether to force delete that domain name. Valid values:
<li> true: delete that domain name and all associated resources;</li>
<li> false: When the acceleration domain name has associated resources, deletion is not allowed.</li>If not specified, the default value is false.
 */
class DeleteAccelerationDomainsRequest extends AbstractModel
{
    /**
     * @var string Zone ID of the acceleration domain name.
     */
    public $ZoneId;

    /**
     * @var array List of acceleration domain name IDs that need to be deleted.
     */
    public $DomainNames;

    /**
     * @var boolean Whether to force delete. When a domain name has associated resources (for example, alias domain names or traffic scheduling functions), whether to force delete that domain name. Valid values:
<li> true: delete that domain name and all associated resources;</li>
<li> false: When the acceleration domain name has associated resources, deletion is not allowed.</li>If not specified, the default value is false.
     */
    public $Force;

    /**
     * @param string $ZoneId Zone ID of the acceleration domain name.
     * @param array $DomainNames List of acceleration domain name IDs that need to be deleted.
     * @param boolean $Force Whether to force delete. When a domain name has associated resources (for example, alias domain names or traffic scheduling functions), whether to force delete that domain name. Valid values:
<li> true: delete that domain name and all associated resources;</li>
<li> false: When the acceleration domain name has associated resources, deletion is not allowed.</li>If not specified, the default value is false.
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

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
