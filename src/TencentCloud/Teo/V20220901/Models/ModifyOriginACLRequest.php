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
 * ModifyOriginACL request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getL7EnableMode() Obtain <p>Origin protection mode for layer-7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-7 accelerated domains in the site will be automatically added to the origin protection list, including newly added layer-7 accelerated domains;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty; when the number of layer-7 accelerated domains under the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method void setL7EnableMode(string $L7EnableMode) Set <p>Origin protection mode for layer-7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-7 accelerated domains in the site will be automatically added to the origin protection list, including newly added layer-7 accelerated domains;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty; when the number of layer-7 accelerated domains under the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method string getL4EnableMode() Obtain <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site will be automatically added to the origin protection list, including newly added layer-4 proxy instance resources;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty; when the number of layer-4 proxy instances under the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method void setL4EnableMode(string $L4EnableMode) Set <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site will be automatically added to the origin protection list, including newly added layer-4 proxy instance resources;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty; when the number of layer-4 proxy instances under the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
 * @method array getOriginACLEntities() Obtain <p>Instances for which origin-pull from specific origin IP ranges needs to be enabled or disabled.<br>Note: This parameter is only applicable to resource adjustment in <strong>Manual protection mode</strong>; When the origin protection mode of the corresponding level is all, the resource list of this type is automatically maintained by the system. Do not include resources of this type in this parameter. For manual adjustment, switch the corresponding level to specific through L7EnableMode/L4EnableMode first.</p>
 * @method void setOriginACLEntities(array $OriginACLEntities) Set <p>Instances for which origin-pull from specific origin IP ranges needs to be enabled or disabled.<br>Note: This parameter is only applicable to resource adjustment in <strong>Manual protection mode</strong>; When the origin protection mode of the corresponding level is all, the resource list of this type is automatically maintained by the system. Do not include resources of this type in this parameter. For manual adjustment, switch the corresponding level to specific through L7EnableMode/L4EnableMode first.</p>
 * @method string getOriginACLFamily() Obtain <p>Origin protection origin-pull ACL control domain. If not filled in, it remains unchanged by default; Control domain information can be obtained through the DescribeAvailableOriginACLFamily API.<br>Specific values are described as follows:</p><li>gaz: Standard global AZ control domain;</li><li>mlc: Standard Chinese mainland AZ control domain;</li><li>emc: Standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: Simplified global AZ control domain;</li><li>plat-mlc: Simplified Chinese mainland AZ control domain;</li><li>plat-emc: Simplified global (excluding Chinese mainland) AZ control domain;</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) Set <p>Origin protection origin-pull ACL control domain. If not filled in, it remains unchanged by default; Control domain information can be obtained through the DescribeAvailableOriginACLFamily API.<br>Specific values are described as follows:</p><li>gaz: Standard global AZ control domain;</li><li>mlc: Standard Chinese mainland AZ control domain;</li><li>emc: Standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: Simplified global AZ control domain;</li><li>plat-mlc: Simplified Chinese mainland AZ control domain;</li><li>plat-emc: Simplified global (excluding Chinese mainland) AZ control domain;</li>
 */
class ModifyOriginACLRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Origin protection mode for layer-7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-7 accelerated domains in the site will be automatically added to the origin protection list, including newly added layer-7 accelerated domains;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty; when the number of layer-7 accelerated domains under the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     */
    public $L7EnableMode;

    /**
     * @var string <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site will be automatically added to the origin protection list, including newly added layer-4 proxy instance resources;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty; when the number of layer-4 proxy instances under the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     */
    public $L4EnableMode;

    /**
     * @var array <p>Instances for which origin-pull from specific origin IP ranges needs to be enabled or disabled.<br>Note: This parameter is only applicable to resource adjustment in <strong>Manual protection mode</strong>; When the origin protection mode of the corresponding level is all, the resource list of this type is automatically maintained by the system. Do not include resources of this type in this parameter. For manual adjustment, switch the corresponding level to specific through L7EnableMode/L4EnableMode first.</p>
     */
    public $OriginACLEntities;

    /**
     * @var string <p>Origin protection origin-pull ACL control domain. If not filled in, it remains unchanged by default; Control domain information can be obtained through the DescribeAvailableOriginACLFamily API.<br>Specific values are described as follows:</p><li>gaz: Standard global AZ control domain;</li><li>mlc: Standard Chinese mainland AZ control domain;</li><li>emc: Standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: Simplified global AZ control domain;</li><li>plat-mlc: Simplified Chinese mainland AZ control domain;</li><li>plat-emc: Simplified global (excluding Chinese mainland) AZ control domain;</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $L7EnableMode <p>Origin protection mode for layer-7 accelerated domains. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-7 accelerated domains in the site will be automatically added to the origin protection list, including newly added layer-7 accelerated domains;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-7 accelerated domains to be added to origin protection (specified by the L7Hosts parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L7Hosts empty; when the number of layer-7 accelerated domains under the site exceeds 200, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     * @param string $L4EnableMode <p>Origin protection mode for layer-4 proxy instances. Default value: specific.<li>all: <strong>Automatic protection mode</strong>. All layer-4 proxy instances in the site will be automatically added to the origin protection list, including newly added layer-4 proxy instance resources;</li><li>specific: <strong>Manual protection mode</strong>. You need to manually specify the layer-4 proxy instances to be added to origin protection (specified by the L4ProxyIds parameter). Resources not specified will not be added to the origin protection list. Subsequent protection resource adjustments can be made through the ModifyOriginACL API.</li>Note: When the value is all, leave L4ProxyIds empty; when the number of layer-4 proxy instances under the site exceeds 100, enable protection in specific mode first, enable the remaining resources through the ModifyOriginACL API, and then switch to all through the ModifyOriginACL API.</p>
     * @param array $OriginACLEntities <p>Instances for which origin-pull from specific origin IP ranges needs to be enabled or disabled.<br>Note: This parameter is only applicable to resource adjustment in <strong>Manual protection mode</strong>; When the origin protection mode of the corresponding level is all, the resource list of this type is automatically maintained by the system. Do not include resources of this type in this parameter. For manual adjustment, switch the corresponding level to specific through L7EnableMode/L4EnableMode first.</p>
     * @param string $OriginACLFamily <p>Origin protection origin-pull ACL control domain. If not filled in, it remains unchanged by default; Control domain information can be obtained through the DescribeAvailableOriginACLFamily API.<br>Specific values are described as follows:</p><li>gaz: Standard global AZ control domain;</li><li>mlc: Standard Chinese mainland AZ control domain;</li><li>emc: Standard global (excluding Chinese mainland) AZ control domain;</li><li>plat-gaz: Simplified global AZ control domain;</li><li>plat-mlc: Simplified Chinese mainland AZ control domain;</li><li>plat-emc: Simplified global (excluding Chinese mainland) AZ control domain;</li>
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

        if (array_key_exists("L4EnableMode",$param) and $param["L4EnableMode"] !== null) {
            $this->L4EnableMode = $param["L4EnableMode"];
        }

        if (array_key_exists("OriginACLEntities",$param) and $param["OriginACLEntities"] !== null) {
            $this->OriginACLEntities = [];
            foreach ($param["OriginACLEntities"] as $key => $value){
                $obj = new OriginACLEntity();
                $obj->deserialize($value);
                array_push($this->OriginACLEntities, $obj);
            }
        }

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
