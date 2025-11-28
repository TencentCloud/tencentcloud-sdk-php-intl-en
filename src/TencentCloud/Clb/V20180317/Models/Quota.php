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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quota description. All quotas are in the current region.
 *
 * @method string getQuotaId() Obtain Quota name. value range:.
<Li>TOTAL_OPEN_CLB_QUOTA: specifies the public network clb quota in the current region for the user.</li>.
<Li>TOTAL_INTERNAL_CLB_QUOTA: specifies the private network clb quota in the current region for the user.</li>.
<li>TOTAL_LISTENER_QUOTA: specifies the LISTENER QUOTA under a CLB.</li>.
<Li>TOTAL_LISTENER_RULE_QUOTA: specifies the forwarding rule quota under a listener.</li>.
<Li>TOTAL_TARGET_BIND_QUOTA: specifies the quota of devices that can be bound to a forwarding rule.</li>.
<li> TOTAL_SNAT_IP_QUOTA: specifies the SNAT IP QUOTA for a cross-regional 2.0 CLB instance. </li>.
<Li>TOTAL_ISP_CLB_QUOTA: specifies the quota of triple-isp (cmcc/cucc/ctcc) clb instances in the current region for the user.</li>.
<li>TOTAL_FULL_PORT_RANGE_LISTENER_QUOTA: specifies the QUOTA of single-protocol FULL PORT RANGE listeners for a CLB instance.</li>.
 * @method void setQuotaId(string $QuotaId) Set Quota name. value range:.
<Li>TOTAL_OPEN_CLB_QUOTA: specifies the public network clb quota in the current region for the user.</li>.
<Li>TOTAL_INTERNAL_CLB_QUOTA: specifies the private network clb quota in the current region for the user.</li>.
<li>TOTAL_LISTENER_QUOTA: specifies the LISTENER QUOTA under a CLB.</li>.
<Li>TOTAL_LISTENER_RULE_QUOTA: specifies the forwarding rule quota under a listener.</li>.
<Li>TOTAL_TARGET_BIND_QUOTA: specifies the quota of devices that can be bound to a forwarding rule.</li>.
<li> TOTAL_SNAT_IP_QUOTA: specifies the SNAT IP QUOTA for a cross-regional 2.0 CLB instance. </li>.
<Li>TOTAL_ISP_CLB_QUOTA: specifies the quota of triple-isp (cmcc/cucc/ctcc) clb instances in the current region for the user.</li>.
<li>TOTAL_FULL_PORT_RANGE_LISTENER_QUOTA: specifies the QUOTA of single-protocol FULL PORT RANGE listeners for a CLB instance.</li>.
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
     * @var string Quota name. value range:.
<Li>TOTAL_OPEN_CLB_QUOTA: specifies the public network clb quota in the current region for the user.</li>.
<Li>TOTAL_INTERNAL_CLB_QUOTA: specifies the private network clb quota in the current region for the user.</li>.
<li>TOTAL_LISTENER_QUOTA: specifies the LISTENER QUOTA under a CLB.</li>.
<Li>TOTAL_LISTENER_RULE_QUOTA: specifies the forwarding rule quota under a listener.</li>.
<Li>TOTAL_TARGET_BIND_QUOTA: specifies the quota of devices that can be bound to a forwarding rule.</li>.
<li> TOTAL_SNAT_IP_QUOTA: specifies the SNAT IP QUOTA for a cross-regional 2.0 CLB instance. </li>.
<Li>TOTAL_ISP_CLB_QUOTA: specifies the quota of triple-isp (cmcc/cucc/ctcc) clb instances in the current region for the user.</li>.
<li>TOTAL_FULL_PORT_RANGE_LISTENER_QUOTA: specifies the QUOTA of single-protocol FULL PORT RANGE listeners for a CLB instance.</li>.
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
     * @param string $QuotaId Quota name. value range:.
<Li>TOTAL_OPEN_CLB_QUOTA: specifies the public network clb quota in the current region for the user.</li>.
<Li>TOTAL_INTERNAL_CLB_QUOTA: specifies the private network clb quota in the current region for the user.</li>.
<li>TOTAL_LISTENER_QUOTA: specifies the LISTENER QUOTA under a CLB.</li>.
<Li>TOTAL_LISTENER_RULE_QUOTA: specifies the forwarding rule quota under a listener.</li>.
<Li>TOTAL_TARGET_BIND_QUOTA: specifies the quota of devices that can be bound to a forwarding rule.</li>.
<li> TOTAL_SNAT_IP_QUOTA: specifies the SNAT IP QUOTA for a cross-regional 2.0 CLB instance. </li>.
<Li>TOTAL_ISP_CLB_QUOTA: specifies the quota of triple-isp (cmcc/cucc/ctcc) clb instances in the current region for the user.</li>.
<li>TOTAL_FULL_PORT_RANGE_LISTENER_QUOTA: specifies the QUOTA of single-protocol FULL PORT RANGE listeners for a CLB instance.</li>.
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
