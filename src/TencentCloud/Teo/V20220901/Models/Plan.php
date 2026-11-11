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
 * Plan information
 *
 * @method string getPlanType() Obtain <p>Plan type. Valid values:</p><li>plan-trial: Trial Edition plan;</li><li>plan-personal: Personal Edition plan;</li><li>plan-basic: Basic Edition plan;</li><li>plan-standard: Standard Edition plan;</li><li>plan-enterprise-v2: Enterprise Edition plan;</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan;</li><li>plan-enterprise: Legacy Enterprise Edition plan;</li><li>plan-makers-pro: Makers Pro Edition plan;</li><li>plan-makers-business: Makers Business Edition plan;</li><p>Valid values:</p><ul><li>plan-trial: Trial Edition plan</li><li>plan-personal: Personal Edition plan</li><li>plan-basic: Basic Edition plan</li><li>plan-standard: Standard Edition plan</li><li>plan-enterprise-v2: Enterprise Edition plan</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan</li><li>plan-enterprise: Legacy Enterprise Edition plan</li><li>plan-makers-pro: Makers Pro Edition plan</li><li>plan-makers-business: Makers Business Edition plan</li></ul>
 * @method void setPlanType(string $PlanType) Set <p>Plan type. Valid values:</p><li>plan-trial: Trial Edition plan;</li><li>plan-personal: Personal Edition plan;</li><li>plan-basic: Basic Edition plan;</li><li>plan-standard: Standard Edition plan;</li><li>plan-enterprise-v2: Enterprise Edition plan;</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan;</li><li>plan-enterprise: Legacy Enterprise Edition plan;</li><li>plan-makers-pro: Makers Pro Edition plan;</li><li>plan-makers-business: Makers Business Edition plan;</li><p>Valid values:</p><ul><li>plan-trial: Trial Edition plan</li><li>plan-personal: Personal Edition plan</li><li>plan-basic: Basic Edition plan</li><li>plan-standard: Standard Edition plan</li><li>plan-enterprise-v2: Enterprise Edition plan</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan</li><li>plan-enterprise: Legacy Enterprise Edition plan</li><li>plan-makers-pro: Makers Pro Edition plan</li><li>plan-makers-business: Makers Business Edition plan</li></ul>
 * @method string getPlanId() Obtain <p>Plan ID, in the format of edgeone-2y041pblwaxe.</p>
 * @method void setPlanId(string $PlanId) Set <p>Plan ID, in the format of edgeone-2y041pblwaxe.</p>
 * @method string getArea() Obtain <p>Service region. Valid values:</p><li>mainland: Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland);</li><li>global: Global (including the Chinese mainland).</li>
 * @method void setArea(string $Area) Set <p>Service region. Valid values:</p><li>mainland: Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland);</li><li>global: Global (including the Chinese mainland).</li>
 * @method boolean getAutoRenewal() Obtain <p>Auto-renewal switch. Valid values:</p><li>true: Auto-renewal enabled;</li><li>false: Auto-renewal disabled.</li>
 * @method void setAutoRenewal(boolean $AutoRenewal) Set <p>Auto-renewal switch. Valid values:</p><li>true: Auto-renewal enabled;</li><li>false: Auto-renewal disabled.</li>
 * @method string getStatus() Obtain <p>Plan status. Valid values:</p><li>normal: Normal;</li><li>expiring-soon: Expiring soon;</li><li>expired: Expired;</li><li>isolated: Isolated;</li><li>overdue-isolated: Isolated due to overdue payment.</li>
 * @method void setStatus(string $Status) Set <p>Plan status. Valid values:</p><li>normal: Normal;</li><li>expiring-soon: Expiring soon;</li><li>expired: Expired;</li><li>isolated: Isolated;</li><li>overdue-isolated: Isolated due to overdue payment.</li>
 * @method integer getPayMode() Obtain <p>Billing type. Valid values:</p><li>0: Postpaid;</li><li>1: Prepaid.</li>
 * @method void setPayMode(integer $PayMode) Set <p>Billing type. Valid values:</p><li>0: Postpaid;</li><li>1: Prepaid.</li>
 * @method array getZonesInfo() Obtain <p>Information of the sites bound to the plan, including site id, site name, and site status.</p>
 * @method void setZonesInfo(array $ZonesInfo) Set <p>Information of the sites bound to the plan, including site id, site name, and site status.</p>
 * @method integer getSmartRequestCapacity() Obtain <p>Quota of smart acceleration requests in the plan, in the unit of requests.</p>
 * @method void setSmartRequestCapacity(integer $SmartRequestCapacity) Set <p>Quota of smart acceleration requests in the plan, in the unit of requests.</p>
 * @method integer getVAUCapacity() Obtain <p>VAU quota in the plan, in the unit of VAUs.</p>
 * @method void setVAUCapacity(integer $VAUCapacity) Set <p>VAU quota in the plan, in the unit of VAUs.</p>
 * @method integer getAccTrafficCapacity() Obtain <p>Quota of content acceleration traffic in the plan, in the unit of bytes.</p>
 * @method void setAccTrafficCapacity(integer $AccTrafficCapacity) Set <p>Quota of content acceleration traffic in the plan, in the unit of bytes.</p>
 * @method integer getClientAuthTrafficCapacity() Obtain <p>Quota of client authentication traffic in the plan, in the unit of bytes.</p>
 * @method void setClientAuthTrafficCapacity(integer $ClientAuthTrafficCapacity) Set <p>Quota of client authentication traffic in the plan, in the unit of bytes.</p>
 * @method integer getSmartTrafficCapacity() Obtain <p>Quota of smart acceleration traffic in the plan, in the unit of bytes.</p>
 * @method void setSmartTrafficCapacity(integer $SmartTrafficCapacity) Set <p>Quota of smart acceleration traffic in the plan, in the unit of bytes.</p>
 * @method integer getDDoSTrafficCapacity() Obtain <p>Quota of DDoS protection traffic in the plan, in the unit of bytes.</p>
 * @method void setDDoSTrafficCapacity(integer $DDoSTrafficCapacity) Set <p>Quota of DDoS protection traffic in the plan, in the unit of bytes.</p>
 * @method integer getSecTrafficCapacity() Obtain <p>Quota of security traffic in the plan, in the unit of bytes.</p>
 * @method void setSecTrafficCapacity(integer $SecTrafficCapacity) Set <p>Quota of security traffic in the plan, in the unit of bytes.</p>
 * @method integer getSecRequestCapacity() Obtain <p>Quota of security requests in the plan, in the unit of requests.</p>
 * @method void setSecRequestCapacity(integer $SecRequestCapacity) Set <p>Quota of security requests in the plan, in the unit of requests.</p>
 * @method integer getL4TrafficCapacity() Obtain <p>Quota of L4 acceleration traffic in the plan, in the unit of bytes.</p>
 * @method void setL4TrafficCapacity(integer $L4TrafficCapacity) Set <p>Quota of L4 acceleration traffic in the plan, in the unit of bytes.</p>
 * @method integer getCrossMLCTrafficCapacity() Obtain <p>Quota of network optimization traffic for the Chinese mainland in the plan, in the unit of bytes.</p>
 * @method void setCrossMLCTrafficCapacity(integer $CrossMLCTrafficCapacity) Set <p>Quota of network optimization traffic for the Chinese mainland in the plan, in the unit of bytes.</p>
 * @method string getBindable() Obtain <p>Whether the plan allows binding new sites. Valid values:</p><li>true: Allows binding new sites;</li><li>false: Does not allow binding new sites.</li>
 * @method void setBindable(string $Bindable) Set <p>Whether the plan allows binding new sites. Valid values:</p><li>true: Allows binding new sites;</li><li>false: Does not allow binding new sites.</li>
 * @method string getEnabledTime() Obtain <p>Time when the plan takes effect.</p>
 * @method void setEnabledTime(string $EnabledTime) Set <p>Time when the plan takes effect.</p>
 * @method string getExpiredTime() Obtain <p>Expiration time of the plan.</p>
 * @method void setExpiredTime(string $ExpiredTime) Set <p>Expiration time of the plan.</p>
 * @method array getFeatures() Obtain <p>Features supported by the plan. Valid values: <li>ContentAcceleration: content acceleration;</li><li>SmartAcceleration: smart acceleration;</li><li>L4: L4 acceleration;</li><li>Waf: advanced Web protection;</li><li>QUIC: QUIC;</li><li>CrossMLC: network optimization for the Chinese mainland;</li><li>ProcessMedia: media processing;</li><li>L4DDoS: L4 DDoS protection.</li>Only one of the following L7DDoS specifications can appear: <li>L7DDoS.CM30G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM60G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM100G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.Anycast300G: L7 DDoS protection - 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.AnycastUnlimited: L7 DDoS protection - unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM30G_Anycast300G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM60G_Anycast300G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM100G_Anycast300G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM30G_AnycastUnlimited: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM60G_AnycastUnlimited: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM100G_AnycastUnlimited: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland.</li></p>
 * @method void setFeatures(array $Features) Set <p>Features supported by the plan. Valid values: <li>ContentAcceleration: content acceleration;</li><li>SmartAcceleration: smart acceleration;</li><li>L4: L4 acceleration;</li><li>Waf: advanced Web protection;</li><li>QUIC: QUIC;</li><li>CrossMLC: network optimization for the Chinese mainland;</li><li>ProcessMedia: media processing;</li><li>L4DDoS: L4 DDoS protection.</li>Only one of the following L7DDoS specifications can appear: <li>L7DDoS.CM30G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM60G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM100G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.Anycast300G: L7 DDoS protection - 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.AnycastUnlimited: L7 DDoS protection - unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM30G_Anycast300G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM60G_Anycast300G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM100G_Anycast300G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM30G_AnycastUnlimited: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM60G_AnycastUnlimited: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM100G_AnycastUnlimited: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland.</li></p>
 */
class Plan extends AbstractModel
{
    /**
     * @var string <p>Plan type. Valid values:</p><li>plan-trial: Trial Edition plan;</li><li>plan-personal: Personal Edition plan;</li><li>plan-basic: Basic Edition plan;</li><li>plan-standard: Standard Edition plan;</li><li>plan-enterprise-v2: Enterprise Edition plan;</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan;</li><li>plan-enterprise: Legacy Enterprise Edition plan;</li><li>plan-makers-pro: Makers Pro Edition plan;</li><li>plan-makers-business: Makers Business Edition plan;</li><p>Valid values:</p><ul><li>plan-trial: Trial Edition plan</li><li>plan-personal: Personal Edition plan</li><li>plan-basic: Basic Edition plan</li><li>plan-standard: Standard Edition plan</li><li>plan-enterprise-v2: Enterprise Edition plan</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan</li><li>plan-enterprise: Legacy Enterprise Edition plan</li><li>plan-makers-pro: Makers Pro Edition plan</li><li>plan-makers-business: Makers Business Edition plan</li></ul>
     */
    public $PlanType;

    /**
     * @var string <p>Plan ID, in the format of edgeone-2y041pblwaxe.</p>
     */
    public $PlanId;

    /**
     * @var string <p>Service region. Valid values:</p><li>mainland: Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland);</li><li>global: Global (including the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var boolean <p>Auto-renewal switch. Valid values:</p><li>true: Auto-renewal enabled;</li><li>false: Auto-renewal disabled.</li>
     */
    public $AutoRenewal;

    /**
     * @var string <p>Plan status. Valid values:</p><li>normal: Normal;</li><li>expiring-soon: Expiring soon;</li><li>expired: Expired;</li><li>isolated: Isolated;</li><li>overdue-isolated: Isolated due to overdue payment.</li>
     */
    public $Status;

    /**
     * @var integer <p>Billing type. Valid values:</p><li>0: Postpaid;</li><li>1: Prepaid.</li>
     */
    public $PayMode;

    /**
     * @var array <p>Information of the sites bound to the plan, including site id, site name, and site status.</p>
     */
    public $ZonesInfo;

    /**
     * @var integer <p>Quota of smart acceleration requests in the plan, in the unit of requests.</p>
     */
    public $SmartRequestCapacity;

    /**
     * @var integer <p>VAU quota in the plan, in the unit of VAUs.</p>
     */
    public $VAUCapacity;

    /**
     * @var integer <p>Quota of content acceleration traffic in the plan, in the unit of bytes.</p>
     */
    public $AccTrafficCapacity;

    /**
     * @var integer <p>Quota of client authentication traffic in the plan, in the unit of bytes.</p>
     */
    public $ClientAuthTrafficCapacity;

    /**
     * @var integer <p>Quota of smart acceleration traffic in the plan, in the unit of bytes.</p>
     */
    public $SmartTrafficCapacity;

    /**
     * @var integer <p>Quota of DDoS protection traffic in the plan, in the unit of bytes.</p>
     */
    public $DDoSTrafficCapacity;

    /**
     * @var integer <p>Quota of security traffic in the plan, in the unit of bytes.</p>
     */
    public $SecTrafficCapacity;

    /**
     * @var integer <p>Quota of security requests in the plan, in the unit of requests.</p>
     */
    public $SecRequestCapacity;

    /**
     * @var integer <p>Quota of L4 acceleration traffic in the plan, in the unit of bytes.</p>
     */
    public $L4TrafficCapacity;

    /**
     * @var integer <p>Quota of network optimization traffic for the Chinese mainland in the plan, in the unit of bytes.</p>
     */
    public $CrossMLCTrafficCapacity;

    /**
     * @var string <p>Whether the plan allows binding new sites. Valid values:</p><li>true: Allows binding new sites;</li><li>false: Does not allow binding new sites.</li>
     */
    public $Bindable;

    /**
     * @var string <p>Time when the plan takes effect.</p>
     */
    public $EnabledTime;

    /**
     * @var string <p>Expiration time of the plan.</p>
     */
    public $ExpiredTime;

    /**
     * @var array <p>Features supported by the plan. Valid values: <li>ContentAcceleration: content acceleration;</li><li>SmartAcceleration: smart acceleration;</li><li>L4: L4 acceleration;</li><li>Waf: advanced Web protection;</li><li>QUIC: QUIC;</li><li>CrossMLC: network optimization for the Chinese mainland;</li><li>ProcessMedia: media processing;</li><li>L4DDoS: L4 DDoS protection.</li>Only one of the following L7DDoS specifications can appear: <li>L7DDoS.CM30G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM60G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM100G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.Anycast300G: L7 DDoS protection - 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.AnycastUnlimited: L7 DDoS protection - unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM30G_Anycast300G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM60G_Anycast300G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM100G_Anycast300G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM30G_AnycastUnlimited: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM60G_AnycastUnlimited: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM100G_AnycastUnlimited: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland.</li></p>
     */
    public $Features;

    /**
     * @param string $PlanType <p>Plan type. Valid values:</p><li>plan-trial: Trial Edition plan;</li><li>plan-personal: Personal Edition plan;</li><li>plan-basic: Basic Edition plan;</li><li>plan-standard: Standard Edition plan;</li><li>plan-enterprise-v2: Enterprise Edition plan;</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan;</li><li>plan-enterprise: Legacy Enterprise Edition plan;</li><li>plan-makers-pro: Makers Pro Edition plan;</li><li>plan-makers-business: Makers Business Edition plan;</li><p>Valid values:</p><ul><li>plan-trial: Trial Edition plan</li><li>plan-personal: Personal Edition plan</li><li>plan-basic: Basic Edition plan</li><li>plan-standard: Standard Edition plan</li><li>plan-enterprise-v2: Enterprise Edition plan</li><li>plan-enterprise-model-a: Enterprise Edition Model A plan</li><li>plan-enterprise: Legacy Enterprise Edition plan</li><li>plan-makers-pro: Makers Pro Edition plan</li><li>plan-makers-business: Makers Business Edition plan</li></ul>
     * @param string $PlanId <p>Plan ID, in the format of edgeone-2y041pblwaxe.</p>
     * @param string $Area <p>Service region. Valid values:</p><li>mainland: Chinese mainland;</li><li>overseas: Global (excluding the Chinese mainland);</li><li>global: Global (including the Chinese mainland).</li>
     * @param boolean $AutoRenewal <p>Auto-renewal switch. Valid values:</p><li>true: Auto-renewal enabled;</li><li>false: Auto-renewal disabled.</li>
     * @param string $Status <p>Plan status. Valid values:</p><li>normal: Normal;</li><li>expiring-soon: Expiring soon;</li><li>expired: Expired;</li><li>isolated: Isolated;</li><li>overdue-isolated: Isolated due to overdue payment.</li>
     * @param integer $PayMode <p>Billing type. Valid values:</p><li>0: Postpaid;</li><li>1: Prepaid.</li>
     * @param array $ZonesInfo <p>Information of the sites bound to the plan, including site id, site name, and site status.</p>
     * @param integer $SmartRequestCapacity <p>Quota of smart acceleration requests in the plan, in the unit of requests.</p>
     * @param integer $VAUCapacity <p>VAU quota in the plan, in the unit of VAUs.</p>
     * @param integer $AccTrafficCapacity <p>Quota of content acceleration traffic in the plan, in the unit of bytes.</p>
     * @param integer $ClientAuthTrafficCapacity <p>Quota of client authentication traffic in the plan, in the unit of bytes.</p>
     * @param integer $SmartTrafficCapacity <p>Quota of smart acceleration traffic in the plan, in the unit of bytes.</p>
     * @param integer $DDoSTrafficCapacity <p>Quota of DDoS protection traffic in the plan, in the unit of bytes.</p>
     * @param integer $SecTrafficCapacity <p>Quota of security traffic in the plan, in the unit of bytes.</p>
     * @param integer $SecRequestCapacity <p>Quota of security requests in the plan, in the unit of requests.</p>
     * @param integer $L4TrafficCapacity <p>Quota of L4 acceleration traffic in the plan, in the unit of bytes.</p>
     * @param integer $CrossMLCTrafficCapacity <p>Quota of network optimization traffic for the Chinese mainland in the plan, in the unit of bytes.</p>
     * @param string $Bindable <p>Whether the plan allows binding new sites. Valid values:</p><li>true: Allows binding new sites;</li><li>false: Does not allow binding new sites.</li>
     * @param string $EnabledTime <p>Time when the plan takes effect.</p>
     * @param string $ExpiredTime <p>Expiration time of the plan.</p>
     * @param array $Features <p>Features supported by the plan. Valid values: <li>ContentAcceleration: content acceleration;</li><li>SmartAcceleration: smart acceleration;</li><li>L4: L4 acceleration;</li><li>Waf: advanced Web protection;</li><li>QUIC: QUIC;</li><li>CrossMLC: network optimization for the Chinese mainland;</li><li>ProcessMedia: media processing;</li><li>L4DDoS: L4 DDoS protection.</li>Only one of the following L7DDoS specifications can appear: <li>L7DDoS.CM30G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM60G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.CM100G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland;</li><li>L7DDoS.Anycast300G: L7 DDoS protection - 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.AnycastUnlimited: L7 DDoS protection - unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM30G_Anycast300G: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM60G_Anycast300G: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM100G_Anycast300G: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and 300 Gbps Anycast guaranteed bandwidth outside the Chinese mainland;</li><li>L7DDoS.CM30G_AnycastUnlimited: L7 DDoS protection - 30 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM60G_AnycastUnlimited: L7 DDoS protection - 60 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland;</li><li>L7DDoS.CM100G_AnycastUnlimited: L7 DDoS protection - 100 Gbps guaranteed bandwidth in the Chinese mainland and unlimited Anycast full protection outside the Chinese mainland.</li></p>
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
        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("AutoRenewal",$param) and $param["AutoRenewal"] !== null) {
            $this->AutoRenewal = $param["AutoRenewal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ZonesInfo",$param) and $param["ZonesInfo"] !== null) {
            $this->ZonesInfo = [];
            foreach ($param["ZonesInfo"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZonesInfo, $obj);
            }
        }

        if (array_key_exists("SmartRequestCapacity",$param) and $param["SmartRequestCapacity"] !== null) {
            $this->SmartRequestCapacity = $param["SmartRequestCapacity"];
        }

        if (array_key_exists("VAUCapacity",$param) and $param["VAUCapacity"] !== null) {
            $this->VAUCapacity = $param["VAUCapacity"];
        }

        if (array_key_exists("AccTrafficCapacity",$param) and $param["AccTrafficCapacity"] !== null) {
            $this->AccTrafficCapacity = $param["AccTrafficCapacity"];
        }

        if (array_key_exists("ClientAuthTrafficCapacity",$param) and $param["ClientAuthTrafficCapacity"] !== null) {
            $this->ClientAuthTrafficCapacity = $param["ClientAuthTrafficCapacity"];
        }

        if (array_key_exists("SmartTrafficCapacity",$param) and $param["SmartTrafficCapacity"] !== null) {
            $this->SmartTrafficCapacity = $param["SmartTrafficCapacity"];
        }

        if (array_key_exists("DDoSTrafficCapacity",$param) and $param["DDoSTrafficCapacity"] !== null) {
            $this->DDoSTrafficCapacity = $param["DDoSTrafficCapacity"];
        }

        if (array_key_exists("SecTrafficCapacity",$param) and $param["SecTrafficCapacity"] !== null) {
            $this->SecTrafficCapacity = $param["SecTrafficCapacity"];
        }

        if (array_key_exists("SecRequestCapacity",$param) and $param["SecRequestCapacity"] !== null) {
            $this->SecRequestCapacity = $param["SecRequestCapacity"];
        }

        if (array_key_exists("L4TrafficCapacity",$param) and $param["L4TrafficCapacity"] !== null) {
            $this->L4TrafficCapacity = $param["L4TrafficCapacity"];
        }

        if (array_key_exists("CrossMLCTrafficCapacity",$param) and $param["CrossMLCTrafficCapacity"] !== null) {
            $this->CrossMLCTrafficCapacity = $param["CrossMLCTrafficCapacity"];
        }

        if (array_key_exists("Bindable",$param) and $param["Bindable"] !== null) {
            $this->Bindable = $param["Bindable"];
        }

        if (array_key_exists("EnabledTime",$param) and $param["EnabledTime"] !== null) {
            $this->EnabledTime = $param["EnabledTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }
    }
}
