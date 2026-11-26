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
 * IdentifyZone request structure.
 *
 * @method string getZoneName() Obtain Site name.
 * @method void setZoneName(string $ZoneName) Set Site name.
 * @method string getDomain() Obtain Subdomain under the site. If verifying a subdomain under the Verification Site, pass this value; otherwise empty.

 * @method void setDomain(string $Domain) Set Subdomain under the site. If verifying a subdomain under the Verification Site, pass this value; otherwise empty.
 */
class IdentifyZoneRequest extends AbstractModel
{
    /**
     * @var string Site name.
     */
    public $ZoneName;

    /**
     * @var string Subdomain under the site. If verifying a subdomain under the Verification Site, pass this value; otherwise empty.

     */
    public $Domain;

    /**
     * @param string $ZoneName Site name.
     * @param string $Domain Subdomain under the site. If verifying a subdomain under the Verification Site, pass this value; otherwise empty.
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
