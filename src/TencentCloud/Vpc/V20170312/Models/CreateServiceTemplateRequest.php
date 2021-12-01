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
 * CreateServiceTemplate request structure.
 *
 * @method string getServiceTemplateName() Obtain Template name of the protocol port
 * @method void setServiceTemplateName(string $ServiceTemplateName) Set Template name of the protocol port
 * @method array getServices() Obtain Supported ports inlcude single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
 * @method void setServices(array $Services) Set Supported ports inlcude single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
 * @method array getServicesExtra() Obtain You can add remarks. Supported ports include single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
 * @method void setServicesExtra(array $ServicesExtra) Set You can add remarks. Supported ports include single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
 */
class CreateServiceTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name of the protocol port
     */
    public $ServiceTemplateName;

    /**
     * @var array Supported ports inlcude single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
     */
    public $Services;

    /**
     * @var array You can add remarks. Supported ports include single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
     */
    public $ServicesExtra;

    /**
     * @param string $ServiceTemplateName Template name of the protocol port
     * @param array $Services Supported ports inlcude single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
     * @param array $ServicesExtra You can add remarks. Supported ports include single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP and GRE. Either Services or ServicesExtra is required.
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

        if (array_key_exists("ServicesExtra",$param) and $param["ServicesExtra"] !== null) {
            $this->ServicesExtra = [];
            foreach ($param["ServicesExtra"] as $key => $value){
                $obj = new ServicesInfo();
                $obj->deserialize($value);
                array_push($this->ServicesExtra, $obj);
            }
        }
    }
}
