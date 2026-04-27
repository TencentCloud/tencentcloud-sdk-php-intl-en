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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyPublicIps request structure.
 *
 * @method string getNetworkInstanceId() Obtain Public network instance ID (route publishing mode must be STATIC)
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set Public network instance ID (route publishing mode must be STATIC)
 * @method integer getCount() Obtain Apply for an Ip quantity, minimum is 1
 * @method void setCount(integer $Count) Set Apply for an Ip quantity, minimum is 1
 * @method string getType() Obtain Applied Ip type, enumeration value: ipv4, ipv6
 * @method void setType(string $Type) Set Applied Ip type, enumeration value: ipv4, ipv6
 */
class ApplyPublicIpsRequest extends AbstractModel
{
    /**
     * @var string Public network instance ID (route publishing mode must be STATIC)
     */
    public $NetworkInstanceId;

    /**
     * @var integer Apply for an Ip quantity, minimum is 1
     */
    public $Count;

    /**
     * @var string Applied Ip type, enumeration value: ipv4, ipv6
     */
    public $Type;

    /**
     * @param string $NetworkInstanceId Public network instance ID (route publishing mode must be STATIC)
     * @param integer $Count Apply for an Ip quantity, minimum is 1
     * @param string $Type Applied Ip type, enumeration value: ipv4, ipv6
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
