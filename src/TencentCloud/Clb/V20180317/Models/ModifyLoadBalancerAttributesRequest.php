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
 * ModifyLoadBalancerAttributes request structure.
 *
 * @method string getLoadBalancerId() Obtain Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
 * @method string getLoadBalancerName() Obtain Load balancing instance name. rule: 1-60 english letters, chinese characters, digits, hyphens "-", or underscores "_".
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Load balancing instance name. rule: 1-60 english letters, chinese characters, digits, hyphens "-", or underscores "_".
 * @method TargetRegionInfo getTargetRegionInfo() Obtain The backend service information of cross-region binding 1.0
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) Set The backend service information of cross-region binding 1.0
 * @method InternetAccessible getInternetChargeInfo() Obtain Network billing parameter
 * @method void setInternetChargeInfo(InternetAccessible $InternetChargeInfo) Set Network billing parameter
 * @method boolean getLoadBalancerPassToTarget() Obtain Specifies whether to allow CLB traffic to the Target.
Enable pass-through (true): verify security groups on CLB only.
Denies CLB traffic to the target (false): verify security groups on both CLB and backend instances.
Specifies no modification if left blank.
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set Specifies whether to allow CLB traffic to the Target.
Enable pass-through (true): verify security groups on CLB only.
Denies CLB traffic to the target (false): verify security groups on both CLB and backend instances.
Specifies no modification if left blank.
 * @method boolean getSnatPro() Obtain Specifies whether the cross-region binding 2.0 feature is enabled. leave blank for no modification.
 * @method void setSnatPro(boolean $SnatPro) Set Specifies whether the cross-region binding 2.0 feature is enabled. leave blank for no modification.
 * @method boolean getDeleteProtect() Obtain Specifies whether to enable deletion protection. leave it blank to keep the current setting.
 * @method void setDeleteProtect(boolean $DeleteProtect) Set Specifies whether to enable deletion protection. leave it blank to keep the current setting.
 * @method boolean getModifyClassicDomain() Obtain Modifies the second-level domain name of cloud load balancer from mycloud.com to tencentclb.com. the subdomain will be transformed, and the mycloud.com domain name will become invalid after modification. leave it blank if no modification is required.
 * @method void setModifyClassicDomain(boolean $ModifyClassicDomain) Set Modifies the second-level domain name of cloud load balancer from mycloud.com to tencentclb.com. the subdomain will be transformed, and the mycloud.com domain name will become invalid after modification. leave it blank if no modification is required.
 * @method string getAssociateEndpoint() Obtain The associated endpoint Id, which can be queried via the [DescribeVpcEndPoint](https://www.tencentcloud.comom/document/product/215/54679?from_cn_redirect=1) api. input an empty string to unbind.
 * @method void setAssociateEndpoint(string $AssociateEndpoint) Set The associated endpoint Id, which can be queried via the [DescribeVpcEndPoint](https://www.tencentcloud.comom/document/product/215/54679?from_cn_redirect=1) api. input an empty string to unbind.
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
     */
    public $LoadBalancerId;

    /**
     * @var string Load balancing instance name. rule: 1-60 english letters, chinese characters, digits, hyphens "-", or underscores "_".
     */
    public $LoadBalancerName;

    /**
     * @var TargetRegionInfo The backend service information of cross-region binding 1.0
     */
    public $TargetRegionInfo;

    /**
     * @var InternetAccessible Network billing parameter
     */
    public $InternetChargeInfo;

    /**
     * @var boolean Specifies whether to allow CLB traffic to the Target.
Enable pass-through (true): verify security groups on CLB only.
Denies CLB traffic to the target (false): verify security groups on both CLB and backend instances.
Specifies no modification if left blank.
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var boolean Specifies whether the cross-region binding 2.0 feature is enabled. leave blank for no modification.
     */
    public $SnatPro;

    /**
     * @var boolean Specifies whether to enable deletion protection. leave it blank to keep the current setting.
     */
    public $DeleteProtect;

    /**
     * @var boolean Modifies the second-level domain name of cloud load balancer from mycloud.com to tencentclb.com. the subdomain will be transformed, and the mycloud.com domain name will become invalid after modification. leave it blank if no modification is required.
     */
    public $ModifyClassicDomain;

    /**
     * @var string The associated endpoint Id, which can be queried via the [DescribeVpcEndPoint](https://www.tencentcloud.comom/document/product/215/54679?from_cn_redirect=1) api. input an empty string to unbind.
     */
    public $AssociateEndpoint;

    /**
     * @param string $LoadBalancerId Specifies the unique ID of the cloud load balancer. you can call the [DescribeLoadBalancers](https://www.tencentcloud.comom/document/product/214/30685?from_cn_redirect=1) API to obtain the ID.
     * @param string $LoadBalancerName Load balancing instance name. rule: 1-60 english letters, chinese characters, digits, hyphens "-", or underscores "_".
     * @param TargetRegionInfo $TargetRegionInfo The backend service information of cross-region binding 1.0
     * @param InternetAccessible $InternetChargeInfo Network billing parameter
     * @param boolean $LoadBalancerPassToTarget Specifies whether to allow CLB traffic to the Target.
Enable pass-through (true): verify security groups on CLB only.
Denies CLB traffic to the target (false): verify security groups on both CLB and backend instances.
Specifies no modification if left blank.
     * @param boolean $SnatPro Specifies whether the cross-region binding 2.0 feature is enabled. leave blank for no modification.
     * @param boolean $DeleteProtect Specifies whether to enable deletion protection. leave it blank to keep the current setting.
     * @param boolean $ModifyClassicDomain Modifies the second-level domain name of cloud load balancer from mycloud.com to tencentclb.com. the subdomain will be transformed, and the mycloud.com domain name will become invalid after modification. leave it blank if no modification is required.
     * @param string $AssociateEndpoint The associated endpoint Id, which can be queried via the [DescribeVpcEndPoint](https://www.tencentcloud.comom/document/product/215/54679?from_cn_redirect=1) api. input an empty string to unbind.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("TargetRegionInfo",$param) and $param["TargetRegionInfo"] !== null) {
            $this->TargetRegionInfo = new TargetRegionInfo();
            $this->TargetRegionInfo->deserialize($param["TargetRegionInfo"]);
        }

        if (array_key_exists("InternetChargeInfo",$param) and $param["InternetChargeInfo"] !== null) {
            $this->InternetChargeInfo = new InternetAccessible();
            $this->InternetChargeInfo->deserialize($param["InternetChargeInfo"]);
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }

        if (array_key_exists("SnatPro",$param) and $param["SnatPro"] !== null) {
            $this->SnatPro = $param["SnatPro"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("ModifyClassicDomain",$param) and $param["ModifyClassicDomain"] !== null) {
            $this->ModifyClassicDomain = $param["ModifyClassicDomain"];
        }

        if (array_key_exists("AssociateEndpoint",$param) and $param["AssociateEndpoint"] !== null) {
            $this->AssociateEndpoint = $param["AssociateEndpoint"];
        }
    }
}
