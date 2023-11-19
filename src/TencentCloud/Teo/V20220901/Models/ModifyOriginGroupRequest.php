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
 * ModifyOriginGroup request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getGroupId() Obtain (Required) Origin group ID
 * @method void setGroupId(string $GroupId) Set (Required) Origin group ID
 * @method string getName() Obtain Origin group name. It can contain 1 to 200 characters ([a-z], [A-Z], [0-9] and [_-]). The original configuration applies if this field is not specified.	
 * @method void setName(string $Name) Set Origin group name. It can contain 1 to 200 characters ([a-z], [A-Z], [0-9] and [_-]). The original configuration applies if this field is not specified.	
 * @method string getType() Obtain The origin grouptype. Values:
<li>`GENERAL`: General origin groups. It supports IPs and domain names. It can be referenced by DNS, Rule Engine, Layer 4 Proxy and General LoadBalancer.</li>
<li>`HTTP`: HTTP-specific origin groups. It supports IPs/domain names and object storage buckets. It can be referenced by acceleration domain names, rule engines and HTTP LoadBalancer. It cannot be referenced by L4 proxies. </li>The original configuration is used if it's not specified.
 * @method void setType(string $Type) Set The origin grouptype. Values:
<li>`GENERAL`: General origin groups. It supports IPs and domain names. It can be referenced by DNS, Rule Engine, Layer 4 Proxy and General LoadBalancer.</li>
<li>`HTTP`: HTTP-specific origin groups. It supports IPs/domain names and object storage buckets. It can be referenced by acceleration domain names, rule engines and HTTP LoadBalancer. It cannot be referenced by L4 proxies. </li>The original configuration is used if it's not specified.
 * @method array getRecords() Obtain Origin information. The original configuration is used if it's not specified.
 * @method void setRecords(array $Records) Set Origin information. The original configuration is used if it's not specified.
 * @method string getHostHeader() Obtain Host header used for origin-pull. It only works when `Type=HTTP`. If it's not specified, no specific Host header is configured. The `HostHeader` specified in `RuleEngine` takes a higher priority over this configuration. 
 * @method void setHostHeader(string $HostHeader) Set Host header used for origin-pull. It only works when `Type=HTTP`. If it's not specified, no specific Host header is configured. The `HostHeader` specified in `RuleEngine` takes a higher priority over this configuration. 
 */
class ModifyOriginGroupRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string (Required) Origin group ID
     */
    public $GroupId;

    /**
     * @var string Origin group name. It can contain 1 to 200 characters ([a-z], [A-Z], [0-9] and [_-]). The original configuration applies if this field is not specified.	
     */
    public $Name;

    /**
     * @var string The origin grouptype. Values:
<li>`GENERAL`: General origin groups. It supports IPs and domain names. It can be referenced by DNS, Rule Engine, Layer 4 Proxy and General LoadBalancer.</li>
<li>`HTTP`: HTTP-specific origin groups. It supports IPs/domain names and object storage buckets. It can be referenced by acceleration domain names, rule engines and HTTP LoadBalancer. It cannot be referenced by L4 proxies. </li>The original configuration is used if it's not specified.
     */
    public $Type;

    /**
     * @var array Origin information. The original configuration is used if it's not specified.
     */
    public $Records;

    /**
     * @var string Host header used for origin-pull. It only works when `Type=HTTP`. If it's not specified, no specific Host header is configured. The `HostHeader` specified in `RuleEngine` takes a higher priority over this configuration. 
     */
    public $HostHeader;

    /**
     * @param string $ZoneId Site ID
     * @param string $GroupId (Required) Origin group ID
     * @param string $Name Origin group name. It can contain 1 to 200 characters ([a-z], [A-Z], [0-9] and [_-]). The original configuration applies if this field is not specified.	
     * @param string $Type The origin grouptype. Values:
<li>`GENERAL`: General origin groups. It supports IPs and domain names. It can be referenced by DNS, Rule Engine, Layer 4 Proxy and General LoadBalancer.</li>
<li>`HTTP`: HTTP-specific origin groups. It supports IPs/domain names and object storage buckets. It can be referenced by acceleration domain names, rule engines and HTTP LoadBalancer. It cannot be referenced by L4 proxies. </li>The original configuration is used if it's not specified.
     * @param array $Records Origin information. The original configuration is used if it's not specified.
     * @param string $HostHeader Host header used for origin-pull. It only works when `Type=HTTP`. If it's not specified, no specific Host header is configured. The `HostHeader` specified in `RuleEngine` takes a higher priority over this configuration. 
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
