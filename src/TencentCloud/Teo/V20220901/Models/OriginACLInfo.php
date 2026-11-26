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
 * Binding relationship between the layer-7 acceleration domain name/layer-4 proxy instance and the origin IP range, including the origin IP range details and the list of switchable origin IP ranges.
 *
 * @method string getL7EnableMode() Obtain <p>Origin protection mode for layer-7 acceleration domain names. Valid values: <li>all: automatic protection mode. All layer-7 acceleration domain names in the site are included in the origin protection list, including newly added layer-7 acceleration domain names;</li><li>specific: specified protection mode. Only bound layer-7 acceleration domain names are protected.</li></p>
 * @method void setL7EnableMode(string $L7EnableMode) Set <p>Origin protection mode for layer-7 acceleration domain names. Valid values: <li>all: automatic protection mode. All layer-7 acceleration domain names in the site are included in the origin protection list, including newly added layer-7 acceleration domain names;</li><li>specific: specified protection mode. Only bound layer-7 acceleration domain names are protected.</li></p>
 * @method array getL7Hosts() Obtain <p>List of layer-7 acceleration domain names that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
 * @method void setL7Hosts(array $L7Hosts) Set <p>List of layer-7 acceleration domain names that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
 * @method string getL4EnableMode() Obtain <p>Origin protection mode for layer-4 proxy instances. Valid values: <li>all: automatic protection mode. All layer-4 proxy instances in the site are included in the origin protection list, including newly added layer-4 proxy instances;</li><li>specific: specified protection mode. Only bound layer-4 proxy instances are protected.</li></p>
 * @method void setL4EnableMode(string $L4EnableMode) Set <p>Origin protection mode for layer-4 proxy instances. Valid values: <li>all: automatic protection mode. All layer-4 proxy instances in the site are included in the origin protection list, including newly added layer-4 proxy instances;</li><li>specific: specified protection mode. Only bound layer-4 proxy instances are protected.</li></p>
 * @method array getL4ProxyIds() Obtain <p>List of layer-4 proxy instances that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
 * @method void setL4ProxyIds(array $L4ProxyIds) Set <p>List of layer-4 proxy instances that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
 * @method CurrentOriginACL getCurrentOriginACL() Obtain <p>Currently effective origin IP range. Empty when origin protection is not enabled.</p>
 * @method void setCurrentOriginACL(CurrentOriginACL $CurrentOriginACL) Set <p>Currently effective origin IP range. Empty when origin protection is not enabled.</p>
 * @method NextOriginACL getNextOriginACL() Obtain <p>When the origin IP range is updated, this field returns the origin IP range that will take effect in the next version, including a comparison with the current origin IP range. Empty when there is no update or origin protection is not enabled.</p>
 * @method void setNextOriginACL(NextOriginACL $NextOriginACL) Set <p>When the origin IP range is updated, this field returns the origin IP range that will take effect in the next version, including a comparison with the current origin IP range. Empty when there is no update or origin protection is not enabled.</p>
 * @method string getStatus() Obtain <p>Origin protection status. Valid values:</p><li>online: Effective;</li><li>offline: Disabled;</li><li>updating: Configuration being deployed.</li>
 * @method void setStatus(string $Status) Set <p>Origin protection status. Valid values:</p><li>online: Effective;</li><li>offline: Disabled;</li><li>updating: Configuration being deployed.</li>
 * @method string getOriginACLFamily() Obtain <p>Origin protection origin-pull ACL control domain.</p>
 * @method void setOriginACLFamily(string $OriginACLFamily) Set <p>Origin protection origin-pull ACL control domain.</p>
 */
class OriginACLInfo extends AbstractModel
{
    /**
     * @var string <p>Origin protection mode for layer-7 acceleration domain names. Valid values: <li>all: automatic protection mode. All layer-7 acceleration domain names in the site are included in the origin protection list, including newly added layer-7 acceleration domain names;</li><li>specific: specified protection mode. Only bound layer-7 acceleration domain names are protected.</li></p>
     */
    public $L7EnableMode;

    /**
     * @var array <p>List of layer-7 acceleration domain names that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
     */
    public $L7Hosts;

    /**
     * @var string <p>Origin protection mode for layer-4 proxy instances. Valid values: <li>all: automatic protection mode. All layer-4 proxy instances in the site are included in the origin protection list, including newly added layer-4 proxy instances;</li><li>specific: specified protection mode. Only bound layer-4 proxy instances are protected.</li></p>
     */
    public $L4EnableMode;

    /**
     * @var array <p>List of layer-4 proxy instances that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
     */
    public $L4ProxyIds;

    /**
     * @var CurrentOriginACL <p>Currently effective origin IP range. Empty when origin protection is not enabled.</p>
     */
    public $CurrentOriginACL;

    /**
     * @var NextOriginACL <p>When the origin IP range is updated, this field returns the origin IP range that will take effect in the next version, including a comparison with the current origin IP range. Empty when there is no update or origin protection is not enabled.</p>
     */
    public $NextOriginACL;

    /**
     * @var string <p>Origin protection status. Valid values:</p><li>online: Effective;</li><li>offline: Disabled;</li><li>updating: Configuration being deployed.</li>
     */
    public $Status;

    /**
     * @var string <p>Origin protection origin-pull ACL control domain.</p>
     */
    public $OriginACLFamily;

    /**
     * @param string $L7EnableMode <p>Origin protection mode for layer-7 acceleration domain names. Valid values: <li>all: automatic protection mode. All layer-7 acceleration domain names in the site are included in the origin protection list, including newly added layer-7 acceleration domain names;</li><li>specific: specified protection mode. Only bound layer-7 acceleration domain names are protected.</li></p>
     * @param array $L7Hosts <p>List of layer-7 acceleration domain names that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
     * @param string $L4EnableMode <p>Origin protection mode for layer-4 proxy instances. Valid values: <li>all: automatic protection mode. All layer-4 proxy instances in the site are included in the origin protection list, including newly added layer-4 proxy instances;</li><li>specific: specified protection mode. Only bound layer-4 proxy instances are protected.</li></p>
     * @param array $L4ProxyIds <p>List of layer-4 proxy instances that have origin-pull from specific origin IP ranges enabled. Empty when origin protection is not enabled.</p>
     * @param CurrentOriginACL $CurrentOriginACL <p>Currently effective origin IP range. Empty when origin protection is not enabled.</p>
     * @param NextOriginACL $NextOriginACL <p>When the origin IP range is updated, this field returns the origin IP range that will take effect in the next version, including a comparison with the current origin IP range. Empty when there is no update or origin protection is not enabled.</p>
     * @param string $Status <p>Origin protection status. Valid values:</p><li>online: Effective;</li><li>offline: Disabled;</li><li>updating: Configuration being deployed.</li>
     * @param string $OriginACLFamily <p>Origin protection origin-pull ACL control domain.</p>
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

        if (array_key_exists("CurrentOriginACL",$param) and $param["CurrentOriginACL"] !== null) {
            $this->CurrentOriginACL = new CurrentOriginACL();
            $this->CurrentOriginACL->deserialize($param["CurrentOriginACL"]);
        }

        if (array_key_exists("NextOriginACL",$param) and $param["NextOriginACL"] !== null) {
            $this->NextOriginACL = new NextOriginACL();
            $this->NextOriginACL->deserialize($param["NextOriginACL"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
