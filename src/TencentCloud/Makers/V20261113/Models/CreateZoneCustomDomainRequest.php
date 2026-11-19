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
 * CreateZoneCustomDomain request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID</p>
 * @method string getProjectId() Obtain <p>Project ID</p>
 * @method void setProjectId(string $ProjectId) Set <p>Project ID</p>
 * @method string getDomain() Obtain <p>Custom domain name</p>
 * @method void setDomain(string $Domain) Set <p>Custom domain name</p>
 * @method string getEnv() Obtain <p>Environment slug. If not passed, it is determined by the backend.</p>
 * @method void setEnv(string $Env) Set <p>Environment slug. If not passed, it is determined by the backend.</p>
 */
class CreateZoneCustomDomainRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Project ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>Custom domain name</p>
     */
    public $Domain;

    /**
     * @var string <p>Environment slug. If not passed, it is determined by the backend.</p>
     */
    public $Env;

    /**
     * @param string $ZoneId <p>Site ID</p>
     * @param string $ProjectId <p>Project ID</p>
     * @param string $Domain <p>Custom domain name</p>
     * @param string $Env <p>Environment slug. If not passed, it is determined by the backend.</p>
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
