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
 * The binding relationship between L7 acceleration domains/L4 proxy instances and origin IP ranges, as well as origin IP range details.
 *
 * @method array getL7Hosts() Obtain The list of L7 accelerated domains that enable the origin ACLs. This field is empty when origin protection is not enabled.
 * @method void setL7Hosts(array $L7Hosts) Set The list of L7 accelerated domains that enable the origin ACLs. This field is empty when origin protection is not enabled.
 * @method array getL4ProxyIds() Obtain The list of L4 proxy instances that enable the origin ACLs. This field is empty when origin protection is not enabled.
 * @method void setL4ProxyIds(array $L4ProxyIds) Set The list of L4 proxy instances that enable the origin ACLs. This field is empty when origin protection is not enabled.
 * @method CurrentOriginACL getCurrentOriginACL() Obtain Currently effective origin ACLs. This field is empty when origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setCurrentOriginACL(CurrentOriginACL $CurrentOriginACL) Set Currently effective origin ACLs. This field is empty when origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method NextOriginACL getNextOriginACL() Obtain When the origin ACLs are updated, this field will be returned with the next version's origin IP range to take effect, including a comparison with the current origin IP range. This field is empty if not updated or origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setNextOriginACL(NextOriginACL $NextOriginACL) Set When the origin ACLs are updated, this field will be returned with the next version's origin IP range to take effect, including a comparison with the current origin IP range. This field is empty if not updated or origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method string getStatus() Obtain Origin protection status. Vaild values:
- online: in effect;
- offline: disabled;
- updating: configuration deployment in progress.
 * @method void setStatus(string $Status) Set Origin protection status. Vaild values:
- online: in effect;
- offline: disabled;
- updating: configuration deployment in progress.
 */
class OriginACLInfo extends AbstractModel
{
    /**
     * @var array The list of L7 accelerated domains that enable the origin ACLs. This field is empty when origin protection is not enabled.
     */
    public $L7Hosts;

    /**
     * @var array The list of L4 proxy instances that enable the origin ACLs. This field is empty when origin protection is not enabled.
     */
    public $L4ProxyIds;

    /**
     * @var CurrentOriginACL Currently effective origin ACLs. This field is empty when origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $CurrentOriginACL;

    /**
     * @var NextOriginACL When the origin ACLs are updated, this field will be returned with the next version's origin IP range to take effect, including a comparison with the current origin IP range. This field is empty if not updated or origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $NextOriginACL;

    /**
     * @var string Origin protection status. Vaild values:
- online: in effect;
- offline: disabled;
- updating: configuration deployment in progress.
     */
    public $Status;

    /**
     * @param array $L7Hosts The list of L7 accelerated domains that enable the origin ACLs. This field is empty when origin protection is not enabled.
     * @param array $L4ProxyIds The list of L4 proxy instances that enable the origin ACLs. This field is empty when origin protection is not enabled.
     * @param CurrentOriginACL $CurrentOriginACL Currently effective origin ACLs. This field is empty when origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param NextOriginACL $NextOriginACL When the origin ACLs are updated, this field will be returned with the next version's origin IP range to take effect, including a comparison with the current origin IP range. This field is empty if not updated or origin protection is not enabled.
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param string $Status Origin protection status. Vaild values:
- online: in effect;
- offline: disabled;
- updating: configuration deployment in progress.
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
        if (array_key_exists("L7Hosts",$param) and $param["L7Hosts"] !== null) {
            $this->L7Hosts = $param["L7Hosts"];
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
    }
}
