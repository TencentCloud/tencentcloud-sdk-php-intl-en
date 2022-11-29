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
 * ModifySecurityPolicy request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method SecurityConfig getSecurityConfig() Obtain Security configuration.
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) Set Security configuration.
 * @method string getEntity() Obtain The subdomain name/L4 proxy. You must specify either "Entity" or "TemplateId".
 * @method void setEntity(string $Entity) Set The subdomain name/L4 proxy. You must specify either "Entity" or "TemplateId".
 * @method string getTemplateId() Obtain The template ID. You must specify either this field or "Entity".
 * @method void setTemplateId(string $TemplateId) Set The template ID. You must specify either this field or "Entity".
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var SecurityConfig Security configuration.
     */
    public $SecurityConfig;

    /**
     * @var string The subdomain name/L4 proxy. You must specify either "Entity" or "TemplateId".
     */
    public $Entity;

    /**
     * @var string The template ID. You must specify either this field or "Entity".
     */
    public $TemplateId;

    /**
     * @param string $ZoneId The site ID.
     * @param SecurityConfig $SecurityConfig Security configuration.
     * @param string $Entity The subdomain name/L4 proxy. You must specify either "Entity" or "TemplateId".
     * @param string $TemplateId The template ID. You must specify either this field or "Entity".
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

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
