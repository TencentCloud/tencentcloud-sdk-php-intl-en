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
 * edgeone package information
 *
 * @method string getCurrency() Obtain Settlement currency type. Valid values:
<li> CNY: settlement in RMB; </li>
<li> USD: Dollar settlement.</li>
 * @method void setCurrency(string $Currency) Set Settlement currency type. Valid values:
<li> CNY: settlement in RMB; </li>
<li> USD: Dollar settlement.</li>
 * @method integer getFlux() Obtain Total traffic included in the package. This value is the sum of security acceleration traffic, content acceleration traffic, and smart acceleration traffic (unit: byte).
 * @method void setFlux(integer $Flux) Set Total traffic included in the package. This value is the sum of security acceleration traffic, content acceleration traffic, and smart acceleration traffic (unit: byte).
 * @method string getFrequency() Obtain Billing cycle. Valid values:
<li> y: settle by year; </li>
<li> m: monthly settlement;</li>
<li> h: settled by hour; </li>
<li> M: settle by minute;</li>
<li> s: settle by second. </li>
 * @method void setFrequency(string $Frequency) Set Billing cycle. Valid values:
<li> y: settle by year; </li>
<li> m: monthly settlement;</li>
<li> h: settled by hour; </li>
<li> M: settle by minute;</li>
<li> s: settle by second. </li>
 * @method string getPlanType() Obtain Package type. Valid values:
<li> sta: Global content delivery network (excluding Chinese mainland) Standard Edition Plan; </li>
<li> sta_with_bot: Standard Edition Plan of the global content delivery network (excluding Chinese mainland) with bundled bot management;</li>
<li> sta_cm: CDN Standard Edition Plan for the Chinese mainland; </li>
<li> sta_cm_with_bot: CDN Standard Edition Plan for Chinese mainland with bundled bot management;</li>
<li> sta_global: Global content delivery network (including Chinese mainland) Standard Edition Plan; </li>
<li> sta_global_with_bot: Standard Edition Plan for global content delivery network (including Chinese mainland) with bundled bot management;</li>
<li> ent: Enterprise plan of the global content delivery network (excluding Chinese mainland); </li>
<li> ent_with_bot: Global content delivery network (excluding Chinese mainland) enterprise package with bundled bot management;</li>
<li> ent_cm: Enterprise edition package for CDN in Chinese mainland; </li>
<li> ent_cm_with_bot: CDN enterprise package with bundled bot management in the Chinese mainland;</li>
<li> ent_global: global content delivery network (including Chinese mainland) enterprise package; </li>
<li> ent_global_with_bot: Global content delivery network (including Chinese mainland) enterprise package with bundled bot management.</li>
 * @method void setPlanType(string $PlanType) Set Package type. Valid values:
<li> sta: Global content delivery network (excluding Chinese mainland) Standard Edition Plan; </li>
<li> sta_with_bot: Standard Edition Plan of the global content delivery network (excluding Chinese mainland) with bundled bot management;</li>
<li> sta_cm: CDN Standard Edition Plan for the Chinese mainland; </li>
<li> sta_cm_with_bot: CDN Standard Edition Plan for Chinese mainland with bundled bot management;</li>
<li> sta_global: Global content delivery network (including Chinese mainland) Standard Edition Plan; </li>
<li> sta_global_with_bot: Standard Edition Plan for global content delivery network (including Chinese mainland) with bundled bot management;</li>
<li> ent: Enterprise plan of the global content delivery network (excluding Chinese mainland); </li>
<li> ent_with_bot: Global content delivery network (excluding Chinese mainland) enterprise package with bundled bot management;</li>
<li> ent_cm: Enterprise edition package for CDN in Chinese mainland; </li>
<li> ent_cm_with_bot: CDN enterprise package with bundled bot management in the Chinese mainland;</li>
<li> ent_global: global content delivery network (including Chinese mainland) enterprise package; </li>
<li> ent_global_with_bot: Global content delivery network (including Chinese mainland) enterprise package with bundled bot management.</li>
 * @method float getPrice() Obtain Package pricing (unit: cent).
 * @method void setPrice(float $Price) Set Package pricing (unit: cent).
 * @method integer getRequest() Obtain Request count included in the package. This is the security acceleration request count. (Unit: count).
 * @method void setRequest(integer $Request) Set Request count included in the package. This is the security acceleration request count. (Unit: count).
 * @method integer getSiteNumber() Obtain Number of sites that can be bound to the package.
 * @method void setSiteNumber(integer $SiteNumber) Set Number of sites that can be bound to the package.
 * @method string getArea() Obtain Acceleration region type of the package. Valid values:
<li>mainland: Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland);</li>
<li> global: worldwide (including Chinese mainland). </li>
 * @method void setArea(string $Area) Set Acceleration region type of the package. Valid values:
<li>mainland: Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland);</li>
<li> global: worldwide (including Chinese mainland). </li>
 */
class PlanInfo extends AbstractModel
{
    /**
     * @var string Settlement currency type. Valid values:
<li> CNY: settlement in RMB; </li>
<li> USD: Dollar settlement.</li>
     */
    public $Currency;

    /**
     * @var integer Total traffic included in the package. This value is the sum of security acceleration traffic, content acceleration traffic, and smart acceleration traffic (unit: byte).
     */
    public $Flux;

    /**
     * @var string Billing cycle. Valid values:
<li> y: settle by year; </li>
<li> m: monthly settlement;</li>
<li> h: settled by hour; </li>
<li> M: settle by minute;</li>
<li> s: settle by second. </li>
     */
    public $Frequency;

    /**
     * @var string Package type. Valid values:
<li> sta: Global content delivery network (excluding Chinese mainland) Standard Edition Plan; </li>
<li> sta_with_bot: Standard Edition Plan of the global content delivery network (excluding Chinese mainland) with bundled bot management;</li>
<li> sta_cm: CDN Standard Edition Plan for the Chinese mainland; </li>
<li> sta_cm_with_bot: CDN Standard Edition Plan for Chinese mainland with bundled bot management;</li>
<li> sta_global: Global content delivery network (including Chinese mainland) Standard Edition Plan; </li>
<li> sta_global_with_bot: Standard Edition Plan for global content delivery network (including Chinese mainland) with bundled bot management;</li>
<li> ent: Enterprise plan of the global content delivery network (excluding Chinese mainland); </li>
<li> ent_with_bot: Global content delivery network (excluding Chinese mainland) enterprise package with bundled bot management;</li>
<li> ent_cm: Enterprise edition package for CDN in Chinese mainland; </li>
<li> ent_cm_with_bot: CDN enterprise package with bundled bot management in the Chinese mainland;</li>
<li> ent_global: global content delivery network (including Chinese mainland) enterprise package; </li>
<li> ent_global_with_bot: Global content delivery network (including Chinese mainland) enterprise package with bundled bot management.</li>
     */
    public $PlanType;

    /**
     * @var float Package pricing (unit: cent).
     */
    public $Price;

    /**
     * @var integer Request count included in the package. This is the security acceleration request count. (Unit: count).
     */
    public $Request;

    /**
     * @var integer Number of sites that can be bound to the package.
     */
    public $SiteNumber;

    /**
     * @var string Acceleration region type of the package. Valid values:
<li>mainland: Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland);</li>
<li> global: worldwide (including Chinese mainland). </li>
     */
    public $Area;

    /**
     * @param string $Currency Settlement currency type. Valid values:
<li> CNY: settlement in RMB; </li>
<li> USD: Dollar settlement.</li>
     * @param integer $Flux Total traffic included in the package. This value is the sum of security acceleration traffic, content acceleration traffic, and smart acceleration traffic (unit: byte).
     * @param string $Frequency Billing cycle. Valid values:
<li> y: settle by year; </li>
<li> m: monthly settlement;</li>
<li> h: settled by hour; </li>
<li> M: settle by minute;</li>
<li> s: settle by second. </li>
     * @param string $PlanType Package type. Valid values:
<li> sta: Global content delivery network (excluding Chinese mainland) Standard Edition Plan; </li>
<li> sta_with_bot: Standard Edition Plan of the global content delivery network (excluding Chinese mainland) with bundled bot management;</li>
<li> sta_cm: CDN Standard Edition Plan for the Chinese mainland; </li>
<li> sta_cm_with_bot: CDN Standard Edition Plan for Chinese mainland with bundled bot management;</li>
<li> sta_global: Global content delivery network (including Chinese mainland) Standard Edition Plan; </li>
<li> sta_global_with_bot: Standard Edition Plan for global content delivery network (including Chinese mainland) with bundled bot management;</li>
<li> ent: Enterprise plan of the global content delivery network (excluding Chinese mainland); </li>
<li> ent_with_bot: Global content delivery network (excluding Chinese mainland) enterprise package with bundled bot management;</li>
<li> ent_cm: Enterprise edition package for CDN in Chinese mainland; </li>
<li> ent_cm_with_bot: CDN enterprise package with bundled bot management in the Chinese mainland;</li>
<li> ent_global: global content delivery network (including Chinese mainland) enterprise package; </li>
<li> ent_global_with_bot: Global content delivery network (including Chinese mainland) enterprise package with bundled bot management.</li>
     * @param float $Price Package pricing (unit: cent).
     * @param integer $Request Request count included in the package. This is the security acceleration request count. (Unit: count).
     * @param integer $SiteNumber Number of sites that can be bound to the package.
     * @param string $Area Acceleration region type of the package. Valid values:
<li>mainland: Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland);</li>
<li> global: worldwide (including Chinese mainland). </li>
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
        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("SiteNumber",$param) and $param["SiteNumber"] !== null) {
            $this->SiteNumber = $param["SiteNumber"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
