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
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getL7EnableMode() Obtain <p>Origin protection mode for Layer 7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All Layer 7 accelerated domains in the site are automatically added to the origin protection list, including Layer 7 accelerated domains added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the Layer 7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty. When the number of Layer 7 accelerated domains in the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method void setL7EnableMode(string $L7EnableMode) Set <p>Origin protection mode for Layer 7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All Layer 7 accelerated domains in the site are automatically added to the origin protection list, including Layer 7 accelerated domains added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the Layer 7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty. When the number of Layer 7 accelerated domains in the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method array getL7Hosts() Obtain <p>List of Layer 7 accelerated domains for which origin protection is to be enabled. This parameter takes effect only when L7EnableMode is specific. A maximum of 200 Layer 7 accelerated domains can be enabled at a time. If you want to enable more than 200 domains, use the ModifyOriginACL API for sharded configuration.</p>
 * @method void setL7Hosts(array $L7Hosts) Set <p>List of Layer 7 accelerated domains for which origin protection is to be enabled. This parameter takes effect only when L7EnableMode is specific. A maximum of 200 Layer 7 accelerated domains can be enabled at a time. If you want to enable more than 200 domains, use the ModifyOriginACL API for sharded configuration.</p>
 * @method string getL4EnableMode() Obtain <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site are automatically added to the origin protection list, including layer-4 proxy instance resources added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty. When the number of layer-4 proxy instances in the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method void setL4EnableMode(string $L4EnableMode) Set <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site are automatically added to the origin protection list, including layer-4 proxy instance resources added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty. When the number of layer-4 proxy instances in the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method array getL4ProxyIds() Obtain <p>List of layer-4 proxy instances for which origin protection is to be enabled. This parameter takes effect only when L4EnableMode is specific. A maximum of 100 layer-4 proxy instances can be enabled at a time. If you want to enable more than 100 layer-4 proxy instances, use the ModifyOriginACL API for sharded configuration.</p>
 * @method void setL4ProxyIds(array $L4ProxyIds) Set <p>List of layer-4 proxy instances for which origin protection is to be enabled. This parameter takes effect only when L4EnableMode is specific. A maximum of 100 layer-4 proxy instances can be enabled at a time. If you want to enable more than 100 layer-4 proxy instances, use the ModifyOriginACL API for sharded configuration.</p>
 * @method string getOriginACLFamily() Obtain <p>Origin ACL control domain for origin protection. If not specified, the standard global control domain is used by default. Available control domains can be obtained through the DescribeAvailableOriginACLFamily API.<br>Valid values:</p><li>gaz: standard global AZ control domain;</li><li>mlc: standard Chinese mainland AZ control domain;</li><li>emc: standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: simplified global AZ control domain;</li><li>plat-mlc: simplified Chinese mainland AZ control domain;</li><li>plat-emc: simplified global (excluding Chinese mainland) AZ control domain;</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) Set <p>Origin ACL control domain for origin protection. If not specified, the standard global control domain is used by default. Available control domains can be obtained through the DescribeAvailableOriginACLFamily API.<br>Valid values:</p><li>gaz: standard global AZ control domain;</li><li>mlc: standard Chinese mainland AZ control domain;</li><li>emc: standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: simplified global AZ control domain;</li><li>plat-mlc: simplified Chinese mainland AZ control domain;</li><li>plat-emc: simplified global (excluding Chinese mainland) AZ control domain;</li>
 */
class EnableOriginACLRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Origin protection mode for Layer 7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All Layer 7 accelerated domains in the site are automatically added to the origin protection list, including Layer 7 accelerated domains added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the Layer 7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty. When the number of Layer 7 accelerated domains in the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     */
    public $L7EnableMode;

    /**
     * @var array <p>List of Layer 7 accelerated domains for which origin protection is to be enabled. This parameter takes effect only when L7EnableMode is specific. A maximum of 200 Layer 7 accelerated domains can be enabled at a time. If you want to enable more than 200 domains, use the ModifyOriginACL API for sharded configuration.</p>
     */
    public $L7Hosts;

    /**
     * @var string <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site are automatically added to the origin protection list, including layer-4 proxy instance resources added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty. When the number of layer-4 proxy instances in the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     */
    public $L4EnableMode;

    /**
     * @var array <p>List of layer-4 proxy instances for which origin protection is to be enabled. This parameter takes effect only when L4EnableMode is specific. A maximum of 100 layer-4 proxy instances can be enabled at a time. If you want to enable more than 100 layer-4 proxy instances, use the ModifyOriginACL API for sharded configuration.</p>
     */
    public $L4ProxyIds;

    /**
     * @var string <p>Origin ACL control domain for origin protection. If not specified, the standard global control domain is used by default. Available control domains can be obtained through the DescribeAvailableOriginACLFamily API.<br>Valid values:</p><li>gaz: standard global AZ control domain;</li><li>mlc: standard Chinese mainland AZ control domain;</li><li>emc: standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: simplified global AZ control domain;</li><li>plat-mlc: simplified Chinese mainland AZ control domain;</li><li>plat-emc: simplified global (excluding Chinese mainland) AZ control domain;</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $L7EnableMode <p>Origin protection mode for Layer 7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All Layer 7 accelerated domains in the site are automatically added to the origin protection list, including Layer 7 accelerated domains added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the Layer 7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty. When the number of Layer 7 accelerated domains in the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     * @param array $L7Hosts <p>List of Layer 7 accelerated domains for which origin protection is to be enabled. This parameter takes effect only when L7EnableMode is specific. A maximum of 200 Layer 7 accelerated domains can be enabled at a time. If you want to enable more than 200 domains, use the ModifyOriginACL API for sharded configuration.</p>
     * @param string $L4EnableMode <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site are automatically added to the origin protection list, including layer-4 proxy instance resources added later.</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified are not added to the origin protection list. You can adjust protected resources later through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty. When the number of layer-4 proxy instances in the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     * @param array $L4ProxyIds <p>List of layer-4 proxy instances for which origin protection is to be enabled. This parameter takes effect only when L4EnableMode is specific. A maximum of 100 layer-4 proxy instances can be enabled at a time. If you want to enable more than 100 layer-4 proxy instances, use the ModifyOriginACL API for sharded configuration.</p>
     * @param string $OriginACLFamily <p>Origin ACL control domain for origin protection. If not specified, the standard global control domain is used by default. Available control domains can be obtained through the DescribeAvailableOriginACLFamily API.<br>Valid values:</p><li>gaz: standard global AZ control domain;</li><li>mlc: standard Chinese mainland AZ control domain;</li><li>emc: standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: simplified global AZ control domain;</li><li>plat-mlc: simplified Chinese mainland AZ control domain;</li><li>plat-emc: simplified global (excluding Chinese mainland) AZ control domain;</li>
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

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
