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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProjectCustomDomains request structure.
 *
 * @method string getZoneId() Obtain <p>Makers site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Makers site ID</p>
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method array getCustomDomains() Obtain <p>Domain to unbind</p>
 * @method void setCustomDomains(array $CustomDomains) Set <p>Domain to unbind</p>
 */
class DeleteProjectCustomDomainsRequest extends AbstractModel
{
    /**
     * @var string <p>Makers site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>Domain to unbind</p>
     */
    public $CustomDomains;

    /**
     * @param string $ZoneId <p>Makers site ID</p>
     * @param string $ProjectId <p>Project ID</p>
     * @param array $CustomDomains <p>Domain to unbind</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CustomDomains",$param) and $param["CustomDomains"] !== null) {
            $this->CustomDomains = $param["CustomDomains"];
        }
    }
}
