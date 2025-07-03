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
 * EnableOriginACL request structure.
 *
 * @method string getZoneId() Obtain Specifies the site ID.
 * @method void setZoneId(string $ZoneId) Set Specifies the site ID.
 * @method string getL7EnableMode() Obtain The mode of configurating origin ACLs for L7 acceleration domains.
- all: configurate origin ACLs for all L7 acceleration domains under the site.
- specific: configurate origin ACLs for designated L7 acceleration domains under the site.
When the parameter is empty, it defaults to specific.

 * @method void setL7EnableMode(string $L7EnableMode) Set The mode of configurating origin ACLs for L7 acceleration domains.
- all: configurate origin ACLs for all L7 acceleration domains under the site.
- specific: configurate origin ACLs for designated L7 acceleration domains under the site.
When the parameter is empty, it defaults to specific.

 * @method array getL7Hosts() Obtain The list of L7 acceleration domains that require enabling the origin ACLs. This list must be empty when the request parameter L7EnableMode is set to 'all'. A maximum of 200 domains are supported at a time.
 * @method void setL7Hosts(array $L7Hosts) Set The list of L7 acceleration domains that require enabling the origin ACLs. This list must be empty when the request parameter L7EnableMode is set to 'all'. A maximum of 200 domains are supported at a time.
 * @method string getL4EnableMode() Obtain The mode of configurating origin ACLs for L4 proxy Instances.
- all: configurate origin ACLs for all L4 proxy Instances under the site.
- specific: configurate origin ACLs for designated  L4 proxy Instances under the site.
When the parameter is empty, it defaults to specific.
 * @method void setL4EnableMode(string $L4EnableMode) Set The mode of configurating origin ACLs for L4 proxy Instances.
- all: configurate origin ACLs for all L4 proxy Instances under the site.
- specific: configurate origin ACLs for designated  L4 proxy Instances under the site.
When the parameter is empty, it defaults to specific.
 * @method array getL4ProxyIds() Obtain The list of L4 proxy Instances that require enabling origin ACLs. This list must be empty when the request parameter L4EnableMode is set to 'all'. A maximum of 100 instances are supported at a time.
 * @method void setL4ProxyIds(array $L4ProxyIds) Set The list of L4 proxy Instances that require enabling origin ACLs. This list must be empty when the request parameter L4EnableMode is set to 'all'. A maximum of 100 instances are supported at a time.
 */
class EnableOriginACLRequest extends AbstractModel
{
    /**
     * @var string Specifies the site ID.
     */
    public $ZoneId;

    /**
     * @var string The mode of configurating origin ACLs for L7 acceleration domains.
- all: configurate origin ACLs for all L7 acceleration domains under the site.
- specific: configurate origin ACLs for designated L7 acceleration domains under the site.
When the parameter is empty, it defaults to specific.

     */
    public $L7EnableMode;

    /**
     * @var array The list of L7 acceleration domains that require enabling the origin ACLs. This list must be empty when the request parameter L7EnableMode is set to 'all'. A maximum of 200 domains are supported at a time.
     */
    public $L7Hosts;

    /**
     * @var string The mode of configurating origin ACLs for L4 proxy Instances.
- all: configurate origin ACLs for all L4 proxy Instances under the site.
- specific: configurate origin ACLs for designated  L4 proxy Instances under the site.
When the parameter is empty, it defaults to specific.
     */
    public $L4EnableMode;

    /**
     * @var array The list of L4 proxy Instances that require enabling origin ACLs. This list must be empty when the request parameter L4EnableMode is set to 'all'. A maximum of 100 instances are supported at a time.
     */
    public $L4ProxyIds;

    /**
     * @param string $ZoneId Specifies the site ID.
     * @param string $L7EnableMode The mode of configurating origin ACLs for L7 acceleration domains.
- all: configurate origin ACLs for all L7 acceleration domains under the site.
- specific: configurate origin ACLs for designated L7 acceleration domains under the site.
When the parameter is empty, it defaults to specific.

     * @param array $L7Hosts The list of L7 acceleration domains that require enabling the origin ACLs. This list must be empty when the request parameter L7EnableMode is set to 'all'. A maximum of 200 domains are supported at a time.
     * @param string $L4EnableMode The mode of configurating origin ACLs for L4 proxy Instances.
- all: configurate origin ACLs for all L4 proxy Instances under the site.
- specific: configurate origin ACLs for designated  L4 proxy Instances under the site.
When the parameter is empty, it defaults to specific.
     * @param array $L4ProxyIds The list of L4 proxy Instances that require enabling origin ACLs. This list must be empty when the request parameter L4EnableMode is set to 'all'. A maximum of 100 instances are supported at a time.
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

        if (array_key_exists("L7EnableMode",$param) and $param["L7EnableMode"] !== null) {
            $this->L7EnableMode = $param["L7EnableMode"];
        }

        if (array_key_exists("L7Hosts",$param) and $param["L7Hosts"] !== null) {
            $this->L7Hosts = $param["L7Hosts"];
        }

        if (array_key_exists("L4EnableMode",$param) and $param["L4EnableMode"] !== null) {
            $this->L4EnableMode = $param["L4EnableMode"];
        }

        if (array_key_exists("L4ProxyIds",$param) and $param["L4ProxyIds"] !== null) {
            $this->L4ProxyIds = $param["L4ProxyIds"];
        }
    }
}
