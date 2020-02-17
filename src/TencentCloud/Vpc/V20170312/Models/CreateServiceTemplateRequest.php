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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getServiceTemplateName() Obtain Template name of the protocol port
 * @method void setServiceTemplateName(string $ServiceTemplateName) Set Template name of the protocol port
 * @method array getServices() Obtain It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
 * @method void setServices(array $Services) Set It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
 */

/**
 *CreateServiceTemplate request structure.
 */
class CreateServiceTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name of the protocol port
     */
    public $ServiceTemplateName;

    /**
     * @var array It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
     */
    public $Services;
    /**
     * @param string $ServiceTemplateName Template name of the protocol port
     * @param array $Services It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
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
        if (array_key_exists("ServiceTemplateName",$param) and $param["ServiceTemplateName"] !== null) {
            $this->ServiceTemplateName = $param["ServiceTemplateName"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }
    }
}
