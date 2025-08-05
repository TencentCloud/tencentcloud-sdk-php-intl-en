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
 * Package information.
 *
 * @method string getPlanType() Obtain Package type. valid values:.
<Li>`Plan-Trial`: trial plan</li>.
<Li>`Plan-Personal`: personal plan</li>.
<Li>`Plan-Basic`: basic plan</li>.
<Li>`Plan-Standard`: standard edition plan</li>.
<li>plan-enterprise-v2: enterprise plan;</li>.
<li>plan-enterprise-model-a: enterprise edition model a package.</li>.
<Li>Plan-Enterprise: legacy enterprise plan.</li>.
 * @method void setPlanType(string $PlanType) Set Package type. valid values:.
<Li>`Plan-Trial`: trial plan</li>.
<Li>`Plan-Personal`: personal plan</li>.
<Li>`Plan-Basic`: basic plan</li>.
<Li>`Plan-Standard`: standard edition plan</li>.
<li>plan-enterprise-v2: enterprise plan;</li>.
<li>plan-enterprise-model-a: enterprise edition model a package.</li>.
<Li>Plan-Enterprise: legacy enterprise plan.</li>.
 * @method string getPlanId() Obtain Package ID. such as edgeone-2y041pblwaxe.
 * @method void setPlanId(string $PlanId) Set Package ID. such as edgeone-2y041pblwaxe.
 * @method string getArea() Obtain Service area. valid values:.
<Li>`Mainland`: chinese mainland</li>.
<li>`overseas`: global (chinese mainland not included)</li>.
<Li>`Global`: global (chinese mainland included)</li>.
 * @method void setArea(string $Area) Set Service area. valid values:.
<Li>`Mainland`: chinese mainland</li>.
<li>`overseas`: global (chinese mainland not included)</li>.
<Li>`Global`: global (chinese mainland included)</li>.
 * @method boolean getAutoRenewal() Obtain Auto-Renew switch. valid values:.
<li>true: automatic renewal is enabled.</li>.
<li>false: automatic renewal is not enabled.</li>.
 * @method void setAutoRenewal(boolean $AutoRenewal) Set Auto-Renew switch. valid values:.
<li>true: automatic renewal is enabled.</li>.
<li>false: automatic renewal is not enabled.</li>.
 * @method string getStatus() Obtain Package status. valid values:.
<Li>Normal: indicates the normal status.</li>.
<li>`expiring-soon`: will expire soon;</li>.
<li>`expired`: expiration status;</li>.
<Li>`Isolated`: isolated state</li>.
<li>`overdue-isolated`: arrears isolated state.</li>.
 * @method void setStatus(string $Status) Set Package status. valid values:.
<Li>Normal: indicates the normal status.</li>.
<li>`expiring-soon`: will expire soon;</li>.
<li>`expired`: expiration status;</li>.
<Li>`Isolated`: isolated state</li>.
<li>`overdue-isolated`: arrears isolated state.</li>.
 * @method integer getPayMode() Obtain Payment type. valid values:.
<Li>0: postpaid;</li>.
<Li>1: prepaid.</li>.
 * @method void setPayMode(integer $PayMode) Set Payment type. valid values:.
<Li>0: postpaid;</li>.
<Li>1: prepaid.</li>.
 * @method array getZonesInfo() Obtain Describes the site information bound to the package, including the site id, site name, and site status.
 * @method void setZonesInfo(array $ZonesInfo) Set Describes the site information bound to the package, including the site id, site name, and site status.
 * @method integer getSmartRequestCapacity() Obtain Smart acceleration request quantity in the package, unit: times.
 * @method void setSmartRequestCapacity(integer $SmartRequestCapacity) Set Smart acceleration request quantity in the package, unit: times.
 * @method integer getVAUCapacity() Obtain Specifies the VAU specification in the package. measurement unit: unit.
 * @method void setVAUCapacity(integer $VAUCapacity) Set Specifies the VAU specification in the package. measurement unit: unit.
 * @method integer getAccTrafficCapacity() Obtain Specifies the content acceleration traffic specification in the package, measurement unit: byte.
 * @method void setAccTrafficCapacity(integer $AccTrafficCapacity) Set Specifies the content acceleration traffic specification in the package, measurement unit: byte.
 * @method integer getSmartTrafficCapacity() Obtain Specifies the smart acceleration traffic specification in the package. measurement unit: byte.
 * @method void setSmartTrafficCapacity(integer $SmartTrafficCapacity) Set Specifies the smart acceleration traffic specification in the package. measurement unit: byte.
 * @method integer getDDoSTrafficCapacity() Obtain Specifies the DDoS protection traffic specification in the package, measurement unit: byte.
 * @method void setDDoSTrafficCapacity(integer $DDoSTrafficCapacity) Set Specifies the DDoS protection traffic specification in the package, measurement unit: byte.
 * @method integer getSecTrafficCapacity() Obtain Security traffic specification in the package. measurement unit: byte.
 * @method void setSecTrafficCapacity(integer $SecTrafficCapacity) Set Security traffic specification in the package. measurement unit: byte.
 * @method integer getSecRequestCapacity() Obtain Security requests in the package, unit: times.
 * @method void setSecRequestCapacity(integer $SecRequestCapacity) Set Security requests in the package, unit: times.
 * @method integer getL4TrafficCapacity() Obtain Specifies the layer 4 acceleration traffic specification in the package, measurement unit: byte.
 * @method void setL4TrafficCapacity(integer $L4TrafficCapacity) Set Specifies the layer 4 acceleration traffic specification in the package, measurement unit: byte.
 * @method integer getCrossMLCTrafficCapacity() Obtain Specifies the network optimization traffic specification in the package for the chinese mainland, measurement unit: byte.
 * @method void setCrossMLCTrafficCapacity(integer $CrossMLCTrafficCapacity) Set Specifies the network optimization traffic specification in the package for the chinese mainland, measurement unit: byte.
 * @method string getBindable() Obtain Specifies whether the package allows binding to new sites. valid values:.
<li>true: allows binding a new site.</li>.
<li>`false`: cannot bind new sites.</li>.
 * @method void setBindable(string $Bindable) Set Specifies whether the package allows binding to new sites. valid values:.
<li>true: allows binding a new site.</li>.
<li>`false`: cannot bind new sites.</li>.
 * @method string getEnabledTime() Obtain Package activation time.
 * @method void setEnabledTime(string $EnabledTime) Set Package activation time.
 * @method string getExpiredTime() Obtain Plan expiration time.
 * @method void setExpiredTime(string $ExpiredTime) Set Plan expiration time.
 * @method array getFeatures() Obtain Supported features of the package include: <li>ContentAcceleration: content acceleration feature;</li> <li>SmartAcceleration: intelligent acceleration feature;</li> <li>L4: L4 acceleration feature;</li> <li>Waf: advanced Web protection;</li> <li>QUIC: QUIC feature;</li> <li>CrossMLC: network optimization in the chinese mainland;</li> <li>ProcessMedia: media processing feature;</li> <li>L4DDoS: L4 DDoS protection feature;</li> L7DDoS feature will only appear in one of the following specifications: <li>L7DDoS.CM30G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM60G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM100G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.Anycast300G; layer-7 DDoS protection feature - 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.AnycastUnlimited; layer-7 DDoS protection feature - unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM30G_Anycast300G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM60G_Anycast300G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM100G_Anycast300G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM30G_AnycastUnlimited; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM60G_AnycastUnlimited; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM100G_AnycastUnlimited; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li>.
 * @method void setFeatures(array $Features) Set Supported features of the package include: <li>ContentAcceleration: content acceleration feature;</li> <li>SmartAcceleration: intelligent acceleration feature;</li> <li>L4: L4 acceleration feature;</li> <li>Waf: advanced Web protection;</li> <li>QUIC: QUIC feature;</li> <li>CrossMLC: network optimization in the chinese mainland;</li> <li>ProcessMedia: media processing feature;</li> <li>L4DDoS: L4 DDoS protection feature;</li> L7DDoS feature will only appear in one of the following specifications: <li>L7DDoS.CM30G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM60G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM100G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.Anycast300G; layer-7 DDoS protection feature - 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.AnycastUnlimited; layer-7 DDoS protection feature - unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM30G_Anycast300G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM60G_Anycast300G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM100G_Anycast300G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM30G_AnycastUnlimited; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM60G_AnycastUnlimited; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM100G_AnycastUnlimited; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li>.
 */
class Plan extends AbstractModel
{
    /**
     * @var string Package type. valid values:.
<Li>`Plan-Trial`: trial plan</li>.
<Li>`Plan-Personal`: personal plan</li>.
<Li>`Plan-Basic`: basic plan</li>.
<Li>`Plan-Standard`: standard edition plan</li>.
<li>plan-enterprise-v2: enterprise plan;</li>.
<li>plan-enterprise-model-a: enterprise edition model a package.</li>.
<Li>Plan-Enterprise: legacy enterprise plan.</li>.
     */
    public $PlanType;

    /**
     * @var string Package ID. such as edgeone-2y041pblwaxe.
     */
    public $PlanId;

    /**
     * @var string Service area. valid values:.
<Li>`Mainland`: chinese mainland</li>.
<li>`overseas`: global (chinese mainland not included)</li>.
<Li>`Global`: global (chinese mainland included)</li>.
     */
    public $Area;

    /**
     * @var boolean Auto-Renew switch. valid values:.
<li>true: automatic renewal is enabled.</li>.
<li>false: automatic renewal is not enabled.</li>.
     */
    public $AutoRenewal;

    /**
     * @var string Package status. valid values:.
<Li>Normal: indicates the normal status.</li>.
<li>`expiring-soon`: will expire soon;</li>.
<li>`expired`: expiration status;</li>.
<Li>`Isolated`: isolated state</li>.
<li>`overdue-isolated`: arrears isolated state.</li>.
     */
    public $Status;

    /**
     * @var integer Payment type. valid values:.
<Li>0: postpaid;</li>.
<Li>1: prepaid.</li>.
     */
    public $PayMode;

    /**
     * @var array Describes the site information bound to the package, including the site id, site name, and site status.
     */
    public $ZonesInfo;

    /**
     * @var integer Smart acceleration request quantity in the package, unit: times.
     */
    public $SmartRequestCapacity;

    /**
     * @var integer Specifies the VAU specification in the package. measurement unit: unit.
     */
    public $VAUCapacity;

    /**
     * @var integer Specifies the content acceleration traffic specification in the package, measurement unit: byte.
     */
    public $AccTrafficCapacity;

    /**
     * @var integer Specifies the smart acceleration traffic specification in the package. measurement unit: byte.
     */
    public $SmartTrafficCapacity;

    /**
     * @var integer Specifies the DDoS protection traffic specification in the package, measurement unit: byte.
     */
    public $DDoSTrafficCapacity;

    /**
     * @var integer Security traffic specification in the package. measurement unit: byte.
     */
    public $SecTrafficCapacity;

    /**
     * @var integer Security requests in the package, unit: times.
     */
    public $SecRequestCapacity;

    /**
     * @var integer Specifies the layer 4 acceleration traffic specification in the package, measurement unit: byte.
     */
    public $L4TrafficCapacity;

    /**
     * @var integer Specifies the network optimization traffic specification in the package for the chinese mainland, measurement unit: byte.
     */
    public $CrossMLCTrafficCapacity;

    /**
     * @var string Specifies whether the package allows binding to new sites. valid values:.
<li>true: allows binding a new site.</li>.
<li>`false`: cannot bind new sites.</li>.
     */
    public $Bindable;

    /**
     * @var string Package activation time.
     */
    public $EnabledTime;

    /**
     * @var string Plan expiration time.
     */
    public $ExpiredTime;

    /**
     * @var array Supported features of the package include: <li>ContentAcceleration: content acceleration feature;</li> <li>SmartAcceleration: intelligent acceleration feature;</li> <li>L4: L4 acceleration feature;</li> <li>Waf: advanced Web protection;</li> <li>QUIC: QUIC feature;</li> <li>CrossMLC: network optimization in the chinese mainland;</li> <li>ProcessMedia: media processing feature;</li> <li>L4DDoS: L4 DDoS protection feature;</li> L7DDoS feature will only appear in one of the following specifications: <li>L7DDoS.CM30G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM60G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM100G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.Anycast300G; layer-7 DDoS protection feature - 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.AnycastUnlimited; layer-7 DDoS protection feature - unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM30G_Anycast300G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM60G_Anycast300G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM100G_Anycast300G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM30G_AnycastUnlimited; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM60G_AnycastUnlimited; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM100G_AnycastUnlimited; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li>.
     */
    public $Features;

    /**
     * @param string $PlanType Package type. valid values:.
<Li>`Plan-Trial`: trial plan</li>.
<Li>`Plan-Personal`: personal plan</li>.
<Li>`Plan-Basic`: basic plan</li>.
<Li>`Plan-Standard`: standard edition plan</li>.
<li>plan-enterprise-v2: enterprise plan;</li>.
<li>plan-enterprise-model-a: enterprise edition model a package.</li>.
<Li>Plan-Enterprise: legacy enterprise plan.</li>.
     * @param string $PlanId Package ID. such as edgeone-2y041pblwaxe.
     * @param string $Area Service area. valid values:.
<Li>`Mainland`: chinese mainland</li>.
<li>`overseas`: global (chinese mainland not included)</li>.
<Li>`Global`: global (chinese mainland included)</li>.
     * @param boolean $AutoRenewal Auto-Renew switch. valid values:.
<li>true: automatic renewal is enabled.</li>.
<li>false: automatic renewal is not enabled.</li>.
     * @param string $Status Package status. valid values:.
<Li>Normal: indicates the normal status.</li>.
<li>`expiring-soon`: will expire soon;</li>.
<li>`expired`: expiration status;</li>.
<Li>`Isolated`: isolated state</li>.
<li>`overdue-isolated`: arrears isolated state.</li>.
     * @param integer $PayMode Payment type. valid values:.
<Li>0: postpaid;</li>.
<Li>1: prepaid.</li>.
     * @param array $ZonesInfo Describes the site information bound to the package, including the site id, site name, and site status.
     * @param integer $SmartRequestCapacity Smart acceleration request quantity in the package, unit: times.
     * @param integer $VAUCapacity Specifies the VAU specification in the package. measurement unit: unit.
     * @param integer $AccTrafficCapacity Specifies the content acceleration traffic specification in the package, measurement unit: byte.
     * @param integer $SmartTrafficCapacity Specifies the smart acceleration traffic specification in the package. measurement unit: byte.
     * @param integer $DDoSTrafficCapacity Specifies the DDoS protection traffic specification in the package, measurement unit: byte.
     * @param integer $SecTrafficCapacity Security traffic specification in the package. measurement unit: byte.
     * @param integer $SecRequestCapacity Security requests in the package, unit: times.
     * @param integer $L4TrafficCapacity Specifies the layer 4 acceleration traffic specification in the package, measurement unit: byte.
     * @param integer $CrossMLCTrafficCapacity Specifies the network optimization traffic specification in the package for the chinese mainland, measurement unit: byte.
     * @param string $Bindable Specifies whether the package allows binding to new sites. valid values:.
<li>true: allows binding a new site.</li>.
<li>`false`: cannot bind new sites.</li>.
     * @param string $EnabledTime Package activation time.
     * @param string $ExpiredTime Plan expiration time.
     * @param array $Features Supported features of the package include: <li>ContentAcceleration: content acceleration feature;</li> <li>SmartAcceleration: intelligent acceleration feature;</li> <li>L4: L4 acceleration feature;</li> <li>Waf: advanced Web protection;</li> <li>QUIC: QUIC feature;</li> <li>CrossMLC: network optimization in the chinese mainland;</li> <li>ProcessMedia: media processing feature;</li> <li>L4DDoS: L4 DDoS protection feature;</li> L7DDoS feature will only appear in one of the following specifications: <li>L7DDoS.CM30G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM60G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.CM100G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland;</li> <li>L7DDoS.Anycast300G; layer-7 DDoS protection feature - 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.AnycastUnlimited; layer-7 DDoS protection feature - unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM30G_Anycast300G; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM60G_Anycast300G; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM100G_Anycast300G; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and 300G guaranteed minimum bandwidth specification outside the chinese mainland with Anycast;</li> <li>L7DDoS.CM30G_AnycastUnlimited; layer-7 DDoS protection feature - 30G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM60G_AnycastUnlimited; layer-7 DDoS protection feature - 60G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li> <li>L7DDoS.CM100G_AnycastUnlimited; layer-7 DDoS protection feature - 100G guaranteed minimum bandwidth specification in the chinese mainland and unlimited Anycast full protection outside the chinese mainland;</li>.
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
