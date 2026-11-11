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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSSLStatus request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
 * @method string getServiceType() Obtain <p>Certificate download format type. Defaults to nginx if not passed. Only applicable to custom certificates (CertSource=1)</p><p>Enumeration values:</p><ul><li>nginx: nginx available</li><li>apache: apache available</li><li>tomcat: tomcat available</li><li>iis: iis available</li></ul>
 * @method void setServiceType(string $ServiceType) Set <p>Certificate download format type. Defaults to nginx if not passed. Only applicable to custom certificates (CertSource=1)</p><p>Enumeration values:</p><ul><li>nginx: nginx available</li><li>apache: apache available</li><li>tomcat: tomcat available</li><li>iis: iis available</li></ul>
 */
class DescribeSSLStatusRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Certificate download format type. Defaults to nginx if not passed. Only applicable to custom certificates (CertSource=1)</p><p>Enumeration values:</p><ul><li>nginx: nginx available</li><li>apache: apache available</li><li>tomcat: tomcat available</li><li>iis: iis available</li></ul>
     */
    public $ServiceType;

    /**
     * @param string $InstanceId <p>Instance ID. Log in to the <a href="https://console.cloud.tencent.com/redis/instance/list">Redis console</a> and copy it from the instance list.</p>
     * @param string $ServiceType <p>Certificate download format type. Defaults to nginx if not passed. Only applicable to custom certificates (CertSource=1)</p><p>Enumeration values:</p><ul><li>nginx: nginx available</li><li>apache: apache available</li><li>tomcat: tomcat available</li><li>iis: iis available</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
