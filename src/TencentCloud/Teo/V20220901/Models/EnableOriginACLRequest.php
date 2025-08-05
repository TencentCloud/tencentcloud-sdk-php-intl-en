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
 * EnableOriginACL request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getL7EnableMode() Obtain L7 acceleration domain name activation in origin protection mode.
<li>`all`: enable layer-7 acceleration domain names for the site.</li>.
<Li>Specific: enable for the site's designated layer-7 acceleration domain name.</li>when no parameter is defined, the default is specific.
 * @method void setL7EnableMode(string $L7EnableMode) Set L7 acceleration domain name activation in origin protection mode.
<li>`all`: enable layer-7 acceleration domain names for the site.</li>.
<Li>Specific: enable for the site's designated layer-7 acceleration domain name.</li>when no parameter is defined, the default is specific.
 * @method array getL7Hosts() Obtain Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
 * @method void setL7Hosts(array $L7Hosts) Set Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
 * @method string getL4EnableMode() Obtain Specifies the origin protection mode of the l4 proxy instance.
<Li>ALL: enable for all l4 proxy instances under the site.</li>.
<Li>Specific: enable for the designated layer 4 proxy instance of the site.</li>when no parameter is defined, the default is specific.
 * @method void setL4EnableMode(string $L4EnableMode) Set Specifies the origin protection mode of the l4 proxy instance.
<Li>ALL: enable for all l4 proxy instances under the site.</li>.
<Li>Specific: enable for the designated layer 4 proxy instance of the site.</li>when no parameter is defined, the default is specific.
 * @method array getL4ProxyIds() Obtain The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
 * @method void setL4ProxyIds(array $L4ProxyIds) Set The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
 */
class EnableOriginACLRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string L7 acceleration domain name activation in origin protection mode.
<li>`all`: enable layer-7 acceleration domain names for the site.</li>.
<Li>Specific: enable for the site's designated layer-7 acceleration domain name.</li>when no parameter is defined, the default is specific.
     */
    public $L7EnableMode;

    /**
     * @var array Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
     */
    public $L7Hosts;

    /**
     * @var string Specifies the origin protection mode of the l4 proxy instance.
<Li>ALL: enable for all l4 proxy instances under the site.</li>.
<Li>Specific: enable for the designated layer 4 proxy instance of the site.</li>when no parameter is defined, the default is specific.
     */
    public $L4EnableMode;

    /**
     * @var array The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
     */
    public $L4ProxyIds;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $L7EnableMode L7 acceleration domain name activation in origin protection mode.
<li>`all`: enable layer-7 acceleration domain names for the site.</li>.
<Li>Specific: enable for the site's designated layer-7 acceleration domain name.</li>when no parameter is defined, the default is specific.
     * @param array $L7Hosts Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
     * @param string $L4EnableMode Specifies the origin protection mode of the l4 proxy instance.
<Li>ALL: enable for all l4 proxy instances under the site.</li>.
<Li>Specific: enable for the designated layer 4 proxy instance of the site.</li>when no parameter is defined, the default is specific.
     * @param array $L4ProxyIds The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
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
