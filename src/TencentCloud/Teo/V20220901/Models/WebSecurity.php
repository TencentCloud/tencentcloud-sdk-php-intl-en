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
 * Serialized security structure
 *
 * @method SecurityPolicy getZoneDefaultPolicy() Obtain <p>Configuration details of the site-level policy.</p>
 * @method void setZoneDefaultPolicy(SecurityPolicy $ZoneDefaultPolicy) Set <p>Configuration details of the site-level policy.</p>
 * @method array getHostPolicy() Obtain <p>Configuration details of the domain-level policy.</p>
 * @method void setHostPolicy(array $HostPolicy) Set <p>Configuration details of the domain-level policy.</p>
 * @method array getTemplates() Obtain <p>Configuration details of the policy template.</p>
 * @method void setTemplates(array $Templates) Set <p>Configuration details of the policy template.</p>
 */
class WebSecurity extends AbstractModel
{
    /**
     * @var SecurityPolicy <p>Configuration details of the site-level policy.</p>
     */
    public $ZoneDefaultPolicy;

    /**
     * @var array <p>Configuration details of the domain-level policy.</p>
     */
    public $HostPolicy;

    /**
     * @var array <p>Configuration details of the policy template.</p>
     */
    public $Templates;

    /**
     * @param SecurityPolicy $ZoneDefaultPolicy <p>Configuration details of the site-level policy.</p>
     * @param array $HostPolicy <p>Configuration details of the domain-level policy.</p>
     * @param array $Templates <p>Configuration details of the policy template.</p>
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
        if (array_key_exists("ZoneDefaultPolicy",$param) and $param["ZoneDefaultPolicy"] !== null) {
            $this->ZoneDefaultPolicy = new SecurityPolicy();
            $this->ZoneDefaultPolicy->deserialize($param["ZoneDefaultPolicy"]);
        }

        if (array_key_exists("HostPolicy",$param) and $param["HostPolicy"] !== null) {
            $this->HostPolicy = [];
            foreach ($param["HostPolicy"] as $key => $value){
                $obj = new HostPolicy();
                $obj->deserialize($value);
                array_push($this->HostPolicy, $obj);
            }
        }

        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = [];
            foreach ($param["Templates"] as $key => $value){
                $obj = new WebSecurityTemplates();
                $obj->deserialize($value);
                array_push($this->Templates, $obj);
            }
        }
    }
}
