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
<li>dnsPodAccess: DNSPod managed access. To use this access mode, your domain name should have been hosted on DNSPod;</li>
<li>ai: Edge reasoning integration.</li>
 * @method void setType(string $Type) Set Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod managed access. To use this access mode, your domain name should have been hosted on DNSPod;</li>
<li>ai: Edge reasoning integration.</li>
 * @method string getZoneName() Obtain Site name. For CNAME/NS access, pass in the second-level domain (example.com) as the site name. For domainless access, leave this value empty.
 * @method void setZoneName(string $ZoneName) Set Site name. For CNAME/NS access, pass in the second-level domain (example.com) as the site name. For domainless access, leave this value empty.
 * @method string getArea() Obtain Acceleration region of the layer-7 domain name when Type is partial/full. The following are the values for this parameter. If left empty, the default value is overseas. When Type is noDomainAccess, retain this value as empty:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Acceleration region of the layer-7 domain name when Type is partial/full. The following are the values for this parameter. If left empty, the default value is overseas. When Type is noDomainAccess, retain this value as empty:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
 * @method string getPlanId() Obtain ID of the target bundle to bind. If your account already has a bundle, you can fill in this parameter to bind the site to it directly. If you currently have no bindable bundle, you can purchase one through [CreatePlan](https://www.tencentcloud.com/document/product/1552/105771?from_cn_redirect=1).
Note: If this parameter is not specified, a site in the "init" state will be created. The site is inactive and will not be displayed in the console. You can access [BindZoneToPlan](https://www.tencentcloud.com/document/product/1552/83042?from_cn_redirect=1) to bind a package and activate the site. After activation, the site can provide services properly.


 * @method void setPlanId(string $PlanId) Set ID of the target bundle to bind. If your account already has a bundle, you can fill in this parameter to bind the site to it directly. If you currently have no bindable bundle, you can purchase one through [CreatePlan](https://www.tencentcloud.com/document/product/1552/105771?from_cn_redirect=1).
Note: If this parameter is not specified, a site in the "init" state will be created. The site is inactive and will not be displayed in the console. You can access [BindZoneToPlan](https://www.tencentcloud.com/document/product/1552/83042?from_cn_redirect=1) to bind a package and activate the site. After activation, the site can provide services properly.


 * @method string getAliasZoneName() Obtain Identical site identifier. Only numbers, English letters, ".", "-", and "_" are allowed, up to 200 characters. For details, see [Identical Site Identifier](https://www.tencentcloud.com/document/product/1552/70202?from_cn_redirect=1). If this usage scenario does not apply, just leave this field empty.
 * @method void setAliasZoneName(string $AliasZoneName) Set Identical site identifier. Only numbers, English letters, ".", "-", and "_" are allowed, up to 200 characters. For details, see [Identical Site Identifier](https://www.tencentcloud.com/document/product/1552/70202?from_cn_redirect=1). If this usage scenario does not apply, just leave this field empty.
 * @method array getTags() Obtain Tag. This parameter is used for authority control and cost allocation of the site. You need to go to the [tag console](https://console.cloud.tencent.com/tag/taglist) to create the corresponding tag before you can input the corresponding tag key and tag value here.
 * @method void setTags(array $Tags) Set Tag. This parameter is used for authority control and cost allocation of the site. You need to go to the [tag console](https://console.cloud.tencent.com/tag/taglist) to create the corresponding tag before you can input the corresponding tag key and tag value here.
 * @method boolean getAllowDuplicates() Obtain Whether repeated access is allowed.
<li> true: Allow repeated access;</li>
<li> false: Duplicate integration is not allowed.</li>If this field is not specified, the default value 'false' will be used.
 * @method void setAllowDuplicates(boolean $AllowDuplicates) Set Whether repeated access is allowed.
<li> true: Allow repeated access;</li>
<li> false: Duplicate integration is not allowed.</li>If this field is not specified, the default value 'false' will be used.
 * @method boolean getJumpStart() Obtain Whether to skip scanning existing DNS records of the site. Default value: false.
 * @method void setJumpStart(boolean $JumpStart) Set Whether to skip scanning existing DNS records of the site. Default value: false.
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod managed access. To use this access mode, your domain name should have been hosted on DNSPod;</li>
<li>ai: Edge reasoning integration.</li>
     */
    public $Type;

    /**
     * @var string Site name. For CNAME/NS access, pass in the second-level domain (example.com) as the site name. For domainless access, leave this value empty.
     */
    public $ZoneName;

    /**
     * @var string Acceleration region of the layer-7 domain name when Type is partial/full. The following are the values for this parameter. If left empty, the default value is overseas. When Type is noDomainAccess, retain this value as empty:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var string ID of the target bundle to bind. If your account already has a bundle, you can fill in this parameter to bind the site to it directly. If you currently have no bindable bundle, you can purchase one through [CreatePlan](https://www.tencentcloud.com/document/product/1552/105771?from_cn_redirect=1).
Note: If this parameter is not specified, a site in the "init" state will be created. The site is inactive and will not be displayed in the console. You can access [BindZoneToPlan](https://www.tencentcloud.com/document/product/1552/83042?from_cn_redirect=1) to bind a package and activate the site. After activation, the site can provide services properly.


     */
    public $PlanId;

    /**
     * @var string Identical site identifier. Only numbers, English letters, ".", "-", and "_" are allowed, up to 200 characters. For details, see [Identical Site Identifier](https://www.tencentcloud.com/document/product/1552/70202?from_cn_redirect=1). If this usage scenario does not apply, just leave this field empty.
     */
    public $AliasZoneName;

    /**
     * @var array Tag. This parameter is used for authority control and cost allocation of the site. You need to go to the [tag console](https://console.cloud.tencent.com/tag/taglist) to create the corresponding tag before you can input the corresponding tag key and tag value here.
     */
    public $Tags;

    /**
     * @var boolean Whether repeated access is allowed.
<li> true: Allow repeated access;</li>
<li> false: Duplicate integration is not allowed.</li>If this field is not specified, the default value 'false' will be used.
     * @deprecated
     */
    public $AllowDuplicates;

    /**
     * @var boolean Whether to skip scanning existing DNS records of the site. Default value: false.
     * @deprecated
     */
    public $JumpStart;

    /**
     * @param string $Type Site access type. If this parameter is not input, the default value `partial` is used. Valid values of this parameter are as follows:
<li>partial: CNAME access;</li>
<li>full: NS access;</li>
<li>noDomainAccess: access with no domain name.</li>
<li>dnsPodAccess: DNSPod managed access. To use this access mode, your domain name should have been hosted on DNSPod;</li>
<li>ai: Edge reasoning integration.</li>
     * @param string $ZoneName Site name. For CNAME/NS access, pass in the second-level domain (example.com) as the site name. For domainless access, leave this value empty.
     * @param string $Area Acceleration region of the layer-7 domain name when Type is partial/full. The following are the values for this parameter. If left empty, the default value is overseas. When Type is noDomainAccess, retain this value as empty:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
     * @param string $PlanId ID of the target bundle to bind. If your account already has a bundle, you can fill in this parameter to bind the site to it directly. If you currently have no bindable bundle, you can purchase one through [CreatePlan](https://www.tencentcloud.com/document/product/1552/105771?from_cn_redirect=1).
Note: If this parameter is not specified, a site in the "init" state will be created. The site is inactive and will not be displayed in the console. You can access [BindZoneToPlan](https://www.tencentcloud.com/document/product/1552/83042?from_cn_redirect=1) to bind a package and activate the site. After activation, the site can provide services properly.


     * @param string $AliasZoneName Identical site identifier. Only numbers, English letters, ".", "-", and "_" are allowed, up to 200 characters. For details, see [Identical Site Identifier](https://www.tencentcloud.com/document/product/1552/70202?from_cn_redirect=1). If this usage scenario does not apply, just leave this field empty.
     * @param array $Tags Tag. This parameter is used for authority control and cost allocation of the site. You need to go to the [tag console](https://console.cloud.tencent.com/tag/taglist) to create the corresponding tag before you can input the corresponding tag key and tag value here.
     * @param boolean $AllowDuplicates Whether repeated access is allowed.
<li> true: Allow repeated access;</li>
<li> false: Duplicate integration is not allowed.</li>If this field is not specified, the default value 'false' will be used.
     * @param boolean $JumpStart Whether to skip scanning existing DNS records of the site. Default value: false.
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
