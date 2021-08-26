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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress rule configuration
 *
 * @method IngressRuleValue getHttp() Obtain ingress rule value
 * @method void setHttp(IngressRuleValue $Http) Set ingress rule value
 * @method string getHost() Obtain Host address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHost(string $Host) Set Host address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Protocol. Options include HTTP and HTTPS. The default option is HTTP.
 * @method void setProtocol(string $Protocol) Set Protocol. Options include HTTP and HTTPS. The default option is HTTP.
 */
class IngressRule extends AbstractModel
{
    /**
     * @var IngressRuleValue ingress rule value
     */
    public $Http;

    /**
     * @var string Host address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Host;

    /**
     * @var string Protocol. Options include HTTP and HTTPS. The default option is HTTP.
     */
    public $Protocol;

    /**
     * @param IngressRuleValue $Http ingress rule value
     * @param string $Host Host address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Protocol Protocol. Options include HTTP and HTTPS. The default option is HTTP.
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
        if (array_key_exists("Http",$param) and $param["Http"] !== null) {
            $this->Http = new IngressRuleValue();
            $this->Http->deserialize($param["Http"]);
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
