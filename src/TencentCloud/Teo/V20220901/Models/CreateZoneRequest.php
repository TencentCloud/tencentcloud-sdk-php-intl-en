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
 * CreateZone request structure.
 *
 * @method string getType() Obtain Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>
 * @method void setType(string $Type) Set Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>
 * @method string getZoneName() Obtain Site name. For sites connected via CNAME/NS, pass in the secondary domain name (example.com). Leave it blank if the site is connected without a domain name. 
 * @method void setZoneName(string $ZoneName) Set Site name. For sites connected via CNAME/NS, pass in the secondary domain name (example.com). Leave it blank if the site is connected without a domain name. 
 * @method string getArea() Obtain The acceleration area of the L7 domain name when `Type` is `partial` or `full`. When Type is `noDomainAccess`, please leave it blank.
<li>`global`: Global AZs</li>
<li>`mainland`: AZs in the Chinese mainland</li>
<li>`overseas`: (Default) AZs outside the Chinese mainland </li>
 * @method void setArea(string $Area) Set The acceleration area of the L7 domain name when `Type` is `partial` or `full`. When Type is `noDomainAccess`, please leave it blank.
<li>`global`: Global AZs</li>
<li>`mainland`: AZs in the Chinese mainland</li>
<li>`overseas`: (Default) AZs outside the Chinese mainland </li>
 * @method string getPlanId() Obtain Target package ID to bind. when a package already exists under your account, you can fill in this parameter to directly bind the site to the package. if there are currently no bindable packages, you can purchase a package via [CreatePlan](https://intl.cloud.tencent.com/document/product/1552/105771?from_cn_redirect=1).
Note: if this parameter is not specified, a site in "init" status will be created. the site is inactive and will not be displayed in the console. you can bind a package and activate the site through [BindZoneToPlan](https://intl.cloud.tencent.com/document/product/1552/83042?from_cn_redirect=1). after activation, the site can provide service properly.


 * @method void setPlanId(string $PlanId) Set Target package ID to bind. when a package already exists under your account, you can fill in this parameter to directly bind the site to the package. if there are currently no bindable packages, you can purchase a package via [CreatePlan](https://intl.cloud.tencent.com/document/product/1552/105771?from_cn_redirect=1).
Note: if this parameter is not specified, a site in "init" status will be created. the site is inactive and will not be displayed in the console. you can bind a package and activate the site through [BindZoneToPlan](https://intl.cloud.tencent.com/document/product/1552/83042?from_cn_redirect=1). after activation, the site can provide service properly.


 * @method string getAliasZoneName() Obtain Identical site identifier. limits input to numbers, english letters, ".", "-", and "_", with a character limit of 200 characters. for details, see identical site identifier (https://intl.cloud.tencent.com/document/product/1552/70202?from_cn_redirect=1). leave this field blank if this usage scenario does not apply.
 * @method void setAliasZoneName(string $AliasZoneName) Set Identical site identifier. limits input to numbers, english letters, ".", "-", and "_", with a character limit of 200 characters. for details, see identical site identifier (https://intl.cloud.tencent.com/document/product/1552/70202?from_cn_redirect=1). leave this field blank if this usage scenario does not apply.
 * @method array getTags() Obtain Tags of the site. To create tags, go to the [Tag Console](https://console.cloud.tencent.com/tag/taglist).
 * @method void setTags(array $Tags) Set Tags of the site. To create tags, go to the [Tag Console](https://console.cloud.tencent.com/tag/taglist).
 * @method boolean getAllowDuplicates() Obtain Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
 * @method void setAllowDuplicates(boolean $AllowDuplicates) Set Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
 * @method boolean getJumpStart() Obtain Whether to skip scanning the existing DNS records of the site. Default value: false.
 * @method void setJumpStart(boolean $JumpStart) Set Whether to skip scanning the existing DNS records of the site. Default value: false.
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>
     */
    public $Type;

    /**
     * @var string Site name. For sites connected via CNAME/NS, pass in the secondary domain name (example.com). Leave it blank if the site is connected without a domain name. 
     */
    public $ZoneName;

    /**
     * @var string The acceleration area of the L7 domain name when `Type` is `partial` or `full`. When Type is `noDomainAccess`, please leave it blank.
<li>`global`: Global AZs</li>
<li>`mainland`: AZs in the Chinese mainland</li>
<li>`overseas`: (Default) AZs outside the Chinese mainland </li>
     */
    public $Area;

    /**
     * @var string Target package ID to bind. when a package already exists under your account, you can fill in this parameter to directly bind the site to the package. if there are currently no bindable packages, you can purchase a package via [CreatePlan](https://intl.cloud.tencent.com/document/product/1552/105771?from_cn_redirect=1).
Note: if this parameter is not specified, a site in "init" status will be created. the site is inactive and will not be displayed in the console. you can bind a package and activate the site through [BindZoneToPlan](https://intl.cloud.tencent.com/document/product/1552/83042?from_cn_redirect=1). after activation, the site can provide service properly.


     */
    public $PlanId;

    /**
     * @var string Identical site identifier. limits input to numbers, english letters, ".", "-", and "_", with a character limit of 200 characters. for details, see identical site identifier (https://intl.cloud.tencent.com/document/product/1552/70202?from_cn_redirect=1). leave this field blank if this usage scenario does not apply.
     */
    public $AliasZoneName;

    /**
     * @var array Tags of the site. To create tags, go to the [Tag Console](https://console.cloud.tencent.com/tag/taglist).
     */
    public $Tags;

    /**
     * @var boolean Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
     * @deprecated
     */
    public $AllowDuplicates;

    /**
     * @var boolean Whether to skip scanning the existing DNS records of the site. Default value: false.
     * @deprecated
     */
    public $JumpStart;

    /**
     * @param string $Type Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod hosted access. To use this access mode, your domain name should have been hosted on DNSPod.</li>
     * @param string $ZoneName Site name. For sites connected via CNAME/NS, pass in the secondary domain name (example.com). Leave it blank if the site is connected without a domain name. 
     * @param string $Area The acceleration area of the L7 domain name when `Type` is `partial` or `full`. When Type is `noDomainAccess`, please leave it blank.
<li>`global`: Global AZs</li>
<li>`mainland`: AZs in the Chinese mainland</li>
<li>`overseas`: (Default) AZs outside the Chinese mainland </li>
     * @param string $PlanId Target package ID to bind. when a package already exists under your account, you can fill in this parameter to directly bind the site to the package. if there are currently no bindable packages, you can purchase a package via [CreatePlan](https://intl.cloud.tencent.com/document/product/1552/105771?from_cn_redirect=1).
Note: if this parameter is not specified, a site in "init" status will be created. the site is inactive and will not be displayed in the console. you can bind a package and activate the site through [BindZoneToPlan](https://intl.cloud.tencent.com/document/product/1552/83042?from_cn_redirect=1). after activation, the site can provide service properly.


     * @param string $AliasZoneName Identical site identifier. limits input to numbers, english letters, ".", "-", and "_", with a character limit of 200 characters. for details, see identical site identifier (https://intl.cloud.tencent.com/document/product/1552/70202?from_cn_redirect=1). leave this field blank if this usage scenario does not apply.
     * @param array $Tags Tags of the site. To create tags, go to the [Tag Console](https://console.cloud.tencent.com/tag/taglist).
     * @param boolean $AllowDuplicates Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
     * @param boolean $JumpStart Whether to skip scanning the existing DNS records of the site. Default value: false.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AllowDuplicates",$param) and $param["AllowDuplicates"] !== null) {
            $this->AllowDuplicates = $param["AllowDuplicates"];
        }

        if (array_key_exists("JumpStart",$param) and $param["JumpStart"] !== null) {
            $this->JumpStart = $param["JumpStart"];
        }
    }
}
