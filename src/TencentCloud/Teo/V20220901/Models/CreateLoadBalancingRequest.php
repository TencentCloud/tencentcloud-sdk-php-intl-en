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
 * CreateLoadBalancing request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getHost() Obtain The load balancing hostname.
 * @method void setHost(string $Host) Set The load balancing hostname.
 * @method string getType() Obtain The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method void setType(string $Type) Set The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
 * @method string getOriginGroupId() Obtain The ID of the primary origin group.
 * @method void setOriginGroupId(string $OriginGroupId) Set The ID of the primary origin group.
 * @method string getBackupOriginGroupId() Obtain The ID of the secondary origin group (only available when `Type=proxied`). If not specified, it indicates that secondary origins are not used.
 * @method void setBackupOriginGroupId(string $BackupOriginGroupId) Set The ID of the secondary origin group (only available when `Type=proxied`). If not specified, it indicates that secondary origins are not used.
 * @method integer getTTL() Obtain When `Type=dns_only`, it indicates the amount of time that DNS records remain in the cache of a DNS server.
Value range: 60-86400 (in seconds). If it's not specified, the default value 600 will be used.
 * @method void setTTL(integer $TTL) Set When `Type=dns_only`, it indicates the amount of time that DNS records remain in the cache of a DNS server.
Value range: 60-86400 (in seconds). If it's not specified, the default value 600 will be used.
 * @method string getOriginType() Obtain 
 * @method void setOriginType(string $OriginType) Set 
 * @method array getAdvancedOriginGroups() Obtain 
 * @method void setAdvancedOriginGroups(array $AdvancedOriginGroups) Set 
 */
class CreateLoadBalancingRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The load balancing hostname.
     */
    public $Host;

    /**
     * @var string The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     */
    public $Type;

    /**
     * @var string The ID of the primary origin group.
     */
    public $OriginGroupId;

    /**
     * @var string The ID of the secondary origin group (only available when `Type=proxied`). If not specified, it indicates that secondary origins are not used.
     */
    public $BackupOriginGroupId;

    /**
     * @var integer When `Type=dns_only`, it indicates the amount of time that DNS records remain in the cache of a DNS server.
Value range: 60-86400 (in seconds). If it's not specified, the default value 600 will be used.
     */
    public $TTL;

    /**
     * @var string 
     */
    public $OriginType;

    /**
     * @var array 
     */
    public $AdvancedOriginGroups;

    /**
     * @param string $ZoneId The site ID.
     * @param string $Host The load balancing hostname.
     * @param string $Type The proxy mode. Values:
<li>`dns_only`: Only DNS</li>
<li>`proxied`: Proxied</li>
     * @param string $OriginGroupId The ID of the primary origin group.
     * @param string $BackupOriginGroupId The ID of the secondary origin group (only available when `Type=proxied`). If not specified, it indicates that secondary origins are not used.
     * @param integer $TTL When `Type=dns_only`, it indicates the amount of time that DNS records remain in the cache of a DNS server.
Value range: 60-86400 (in seconds). If it's not specified, the default value 600 will be used.
     * @param string $OriginType 
     * @param array $AdvancedOriginGroups 
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

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("BackupOriginGroupId",$param) and $param["BackupOriginGroupId"] !== null) {
            $this->BackupOriginGroupId = $param["BackupOriginGroupId"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("AdvancedOriginGroups",$param) and $param["AdvancedOriginGroups"] !== null) {
            $this->AdvancedOriginGroups = [];
            foreach ($param["AdvancedOriginGroups"] as $key => $value){
                $obj = new AdvancedOriginGroup();
                $obj->deserialize($value);
                array_push($this->AdvancedOriginGroups, $obj);
            }
        }
    }
}
