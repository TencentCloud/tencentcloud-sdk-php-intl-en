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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress rule backend configuration
 *
 * @method string getServiceName() Obtain EKS service name
 * @method void setServiceName(string $ServiceName) Set EKS service name
 * @method integer getServicePort() Obtain EKS service port
 * @method void setServicePort(integer $ServicePort) Set EKS service port
 */
class IngressRuleBackend extends AbstractModel
{
    /**
     * @var string EKS service name
     */
    public $ServiceName;

    /**
     * @var integer EKS service port
     */
    public $ServicePort;

    /**
     * @param string $ServiceName EKS service name
     * @param integer $ServicePort EKS service port
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            $this->ServicePort = $param["ServicePort"];
        }
    }
}
