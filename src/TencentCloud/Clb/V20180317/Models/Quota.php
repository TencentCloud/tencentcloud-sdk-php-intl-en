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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quota description. All quotas are in the current region.
 *
 * @method string getQuotaId() Obtain Quota name. Valid values:
<li> `TOTAL_OPEN_CLB_QUOTA`: Quota of public network CLB instances in the current region</li>
<li> `TOTAL_INTERNAL_CLB_QUOTA`: Quota of private network CLB instances in the current region</li>
<li> `TOTAL_LISTENER_QUOTA`: Quota of listeners under one CLB instance</li>
<li> `TOTAL_LISTENER_RULE_QUOTA`: Quota of forwarding rules under one listener</li>
<li> `TOTAL_TARGET_BIND_QUOTA`: Quota of CVM instances can be bound under one forwarding rule</li>
<li> `TOTAL_SNAP_IP_QUOTA`: Quota of SNAT IPs for cross-region binding 2.0 under one CLB instance </li>
<li> `TOTAL_ISP_CLB_QUOTA`: Quota of triple-ISP (CMCC/CUCC/CTCC) CLB instances in the current region</li>
 * @method void setQuotaId(string $QuotaId) Set Quota name. Valid values:
<li> `TOTAL_OPEN_CLB_QUOTA`: Quota of public network CLB instances in the current region</li>
<li> `TOTAL_INTERNAL_CLB_QUOTA`: Quota of private network CLB instances in the current region</li>
<li> `TOTAL_LISTENER_QUOTA`: Quota of listeners under one CLB instance</li>
<li> `TOTAL_LISTENER_RULE_QUOTA`: Quota of forwarding rules under one listener</li>
<li> `TOTAL_TARGET_BIND_QUOTA`: Quota of CVM instances can be bound under one forwarding rule</li>
<li> `TOTAL_SNAP_IP_QUOTA`: Quota of SNAT IPs for cross-region binding 2.0 under one CLB instance </li>
<li> `TOTAL_ISP_CLB_QUOTA`: Quota of triple-ISP (CMCC/CUCC/CTCC) CLB instances in the current region</li>
 * @method integer getQuotaCurrent() Obtain Currently used quantity. If it is `null`, it is meaningless.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQuotaCurrent(integer $QuotaCurrent) Set Currently used quantity. If it is `null`, it is meaningless.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getQuotaLimit() Obtain Quota limit.
 * @method void setQuotaLimit(integer $QuotaLimit) Set Quota limit.
 */
class Quota extends AbstractModel
{
    /**
     * @var string Quota name. Valid values:
<li> `TOTAL_OPEN_CLB_QUOTA`: Quota of public network CLB instances in the current region</li>
<li> `TOTAL_INTERNAL_CLB_QUOTA`: Quota of private network CLB instances in the current region</li>
<li> `TOTAL_LISTENER_QUOTA`: Quota of listeners under one CLB instance</li>
<li> `TOTAL_LISTENER_RULE_QUOTA`: Quota of forwarding rules under one listener</li>
<li> `TOTAL_TARGET_BIND_QUOTA`: Quota of CVM instances can be bound under one forwarding rule</li>
<li> `TOTAL_SNAP_IP_QUOTA`: Quota of SNAT IPs for cross-region binding 2.0 under one CLB instance </li>
<li> `TOTAL_ISP_CLB_QUOTA`: Quota of triple-ISP (CMCC/CUCC/CTCC) CLB instances in the current region</li>
     */
    public $QuotaId;

    /**
     * @var integer Currently used quantity. If it is `null`, it is meaningless.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $QuotaCurrent;

    /**
     * @var integer Quota limit.
     */
    public $QuotaLimit;

    /**
     * @param string $QuotaId Quota name. Valid values:
<li> `TOTAL_OPEN_CLB_QUOTA`: Quota of public network CLB instances in the current region</li>
<li> `TOTAL_INTERNAL_CLB_QUOTA`: Quota of private network CLB instances in the current region</li>
<li> `TOTAL_LISTENER_QUOTA`: Quota of listeners under one CLB instance</li>
<li> `TOTAL_LISTENER_RULE_QUOTA`: Quota of forwarding rules under one listener</li>
<li> `TOTAL_TARGET_BIND_QUOTA`: Quota of CVM instances can be bound under one forwarding rule</li>
<li> `TOTAL_SNAP_IP_QUOTA`: Quota of SNAT IPs for cross-region binding 2.0 under one CLB instance </li>
<li> `TOTAL_ISP_CLB_QUOTA`: Quota of triple-ISP (CMCC/CUCC/CTCC) CLB instances in the current region</li>
     * @param integer $QuotaCurrent Currently used quantity. If it is `null`, it is meaningless.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $QuotaLimit Quota limit.
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
        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("QuotaCurrent",$param) and $param["QuotaCurrent"] !== null) {
            $this->QuotaCurrent = $param["QuotaCurrent"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }
    }
}
