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
 * CreateOriginGroup request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method array getRecords() Obtain Origin server record information. This parameter is required.
 * @method void setRecords(array $Records) Set Origin server record information. This parameter is required.
 * @method string getName() Obtain Origin group name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).
 * @method void setName(string $Name) Set Origin group name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).
 * @method string getType() Obtain Origin server group type. This parameter is required. Valid values:
<li>GENERAL: general origin group, only supports adding IP/domain origin servers, and can be referenced by DNS, rule engine, Layer 4 proxy, general load balancer, and HTTP-specific load balancer;</li>
<li>HTTP: HTTP-specific origin server group. It supports adding IP/domain name and COS origin server as the origin server. It cannot be referenced by Layer-4 proxy. It can only be referenced by add acceleration domain name, rule engine - modify origin, and HTTP-specific load balancer.</li>
 * @method void setType(string $Type) Set Origin server group type. This parameter is required. Valid values:
<li>GENERAL: general origin group, only supports adding IP/domain origin servers, and can be referenced by DNS, rule engine, Layer 4 proxy, general load balancer, and HTTP-specific load balancer;</li>
<li>HTTP: HTTP-specific origin server group. It supports adding IP/domain name and COS origin server as the origin server. It cannot be referenced by Layer-4 proxy. It can only be referenced by add acceleration domain name, rule engine - modify origin, and HTTP-specific load balancer.</li>
 * @method string getHostHeader() Obtain Origin-pull Host Header. It takes effect only when it is input and Type is HTTP. The rule engine modification of the Host Header configuration has a higher priority than the Host Header of the origin server group.
 * @method void setHostHeader(string $HostHeader) Set Origin-pull Host Header. It takes effect only when it is input and Type is HTTP. The rule engine modification of the Host Header configuration has a higher priority than the Host Header of the origin server group.
 */
class CreateOriginGroupRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var array Origin server record information. This parameter is required.
     */
    public $Records;

    /**
     * @var string Origin group name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).
     */
    public $Name;

    /**
     * @var string Origin server group type. This parameter is required. Valid values:
<li>GENERAL: general origin group, only supports adding IP/domain origin servers, and can be referenced by DNS, rule engine, Layer 4 proxy, general load balancer, and HTTP-specific load balancer;</li>
<li>HTTP: HTTP-specific origin server group. It supports adding IP/domain name and COS origin server as the origin server. It cannot be referenced by Layer-4 proxy. It can only be referenced by add acceleration domain name, rule engine - modify origin, and HTTP-specific load balancer.</li>
     */
    public $Type;

    /**
     * @var string Origin-pull Host Header. It takes effect only when it is input and Type is HTTP. The rule engine modification of the Host Header configuration has a higher priority than the Host Header of the origin server group.
     */
    public $HostHeader;

    /**
     * @param string $ZoneId Zone ID.
     * @param array $Records Origin server record information. This parameter is required.
     * @param string $Name Origin group name, which can contain 1 to 200 characters, including a-z, A-Z, 0-9, underscores (_), and hyphens (-).
     * @param string $Type Origin server group type. This parameter is required. Valid values:
<li>GENERAL: general origin group, only supports adding IP/domain origin servers, and can be referenced by DNS, rule engine, Layer 4 proxy, general load balancer, and HTTP-specific load balancer;</li>
<li>HTTP: HTTP-specific origin server group. It supports adding IP/domain name and COS origin server as the origin server. It cannot be referenced by Layer-4 proxy. It can only be referenced by add acceleration domain name, rule engine - modify origin, and HTTP-specific load balancer.</li>
     * @param string $HostHeader Origin-pull Host Header. It takes effect only when it is input and Type is HTTP. The rule engine modification of the Host Header configuration has a higher priority than the Host Header of the origin server group.
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

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
