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
 * DescribeSecurityPolicy request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getEntity() Obtain Security policy type. You can use the following parameter values for query: <li>ZoneDefaultPolicy: used to specify query for site-level policies;</li><li>Template: used to specify query for policy templates. The TemplateId parameter must be specified simultaneously;</li><li>Host: used to specify query for domain-level policies (Note: when using a domain name to specify a domain name service policy, only domain name services or policy templates that already have a domain-level policy applied are supported).</li>	
 * @method void setEntity(string $Entity) Set Security policy type. You can use the following parameter values for query: <li>ZoneDefaultPolicy: used to specify query for site-level policies;</li><li>Template: used to specify query for policy templates. The TemplateId parameter must be specified simultaneously;</li><li>Host: used to specify query for domain-level policies (Note: when using a domain name to specify a domain name service policy, only domain name services or policy templates that already have a domain-level policy applied are supported).</li>	
 * @method string getTemplateId() Obtain Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID to query template configurations.
 * @method void setTemplateId(string $TemplateId) Set Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID to query template configurations.
 * @method string getHost() Obtain Specify domain name. When the value of the Entity parameter is Host, use this parameter to specify the domain-level policy to query the domain configuration. For example, use www.example.com to configure the domain-level policy for this domain.
 * @method void setHost(string $Host) Set Specify domain name. When the value of the Entity parameter is Host, use this parameter to specify the domain-level policy to query the domain configuration. For example, use www.example.com to configure the domain-level policy for this domain.
 */
class DescribeSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Security policy type. You can use the following parameter values for query: <li>ZoneDefaultPolicy: used to specify query for site-level policies;</li><li>Template: used to specify query for policy templates. The TemplateId parameter must be specified simultaneously;</li><li>Host: used to specify query for domain-level policies (Note: when using a domain name to specify a domain name service policy, only domain name services or policy templates that already have a domain-level policy applied are supported).</li>	
     */
    public $Entity;

    /**
     * @var string Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID to query template configurations.
     */
    public $TemplateId;

    /**
     * @var string Specify domain name. When the value of the Entity parameter is Host, use this parameter to specify the domain-level policy to query the domain configuration. For example, use www.example.com to configure the domain-level policy for this domain.
     */
    public $Host;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $Entity Security policy type. You can use the following parameter values for query: <li>ZoneDefaultPolicy: used to specify query for site-level policies;</li><li>Template: used to specify query for policy templates. The TemplateId parameter must be specified simultaneously;</li><li>Host: used to specify query for domain-level policies (Note: when using a domain name to specify a domain name service policy, only domain name services or policy templates that already have a domain-level policy applied are supported).</li>	
     * @param string $TemplateId Specify the policy template ID. When the Entity parameter value is Template, use this parameter to specify the policy template ID to query template configurations.
     * @param string $Host Specify domain name. When the value of the Entity parameter is Host, use this parameter to specify the domain-level policy to query the domain configuration. For example, use www.example.com to configure the domain-level policy for this domain.
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
