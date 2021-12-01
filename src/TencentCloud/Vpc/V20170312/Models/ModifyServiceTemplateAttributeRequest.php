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
 * ModifyServiceTemplateAttribute request structure.
 *
 * @method string getServiceTemplateId() Obtain Protocol port template instance ID, such as `ppm-529nwwj8`.
 * @method void setServiceTemplateId(string $ServiceTemplateId) Set Protocol port template instance ID, such as `ppm-529nwwj8`.
 * @method string getServiceTemplateName() Obtain Protocol port template name.
 * @method void setServiceTemplateName(string $ServiceTemplateName) Set Protocol port template name.
 * @method array getServices() Obtain It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
 * @method void setServices(array $Services) Set It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
 * @method array getServicesExtra() Obtain Protocol port information with remarks. Supported ports include single port, multiple ports, consecutive ports and other ports. Supported protocols include TCP, UDP, ICMP, and GRE.
 * @method void setServicesExtra(array $ServicesExtra) Set Protocol port information with remarks. Supported ports include single port, multiple ports, consecutive ports and other ports. Supported protocols include TCP, UDP, ICMP, and GRE.
 */
class ModifyServiceTemplateAttributeRequest extends AbstractModel
{
    /**
     * @var string Protocol port template instance ID, such as `ppm-529nwwj8`.
     */
    public $ServiceTemplateId;

    /**
     * @var string Protocol port template name.
     */
    public $ServiceTemplateName;

    /**
     * @var array It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
     */
    public $Services;

    /**
     * @var array Protocol port information with remarks. Supported ports include single port, multiple ports, consecutive ports and other ports. Supported protocols include TCP, UDP, ICMP, and GRE.
     */
    public $ServicesExtra;

    /**
     * @param string $ServiceTemplateId Protocol port template instance ID, such as `ppm-529nwwj8`.
     * @param string $ServiceTemplateName Protocol port template name.
     * @param array $Services It supports single port, multiple ports, consecutive ports and all ports. Supported protocols include TCP, UDP, ICMP, and GRE.
     * @param array $ServicesExtra Protocol port information with remarks. Supported ports include single port, multiple ports, consecutive ports and other ports. Supported protocols include TCP, UDP, ICMP, and GRE.
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
        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
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
