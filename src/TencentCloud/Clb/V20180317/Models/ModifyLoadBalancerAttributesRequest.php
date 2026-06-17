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
 * @method string getLoadBalancerId() Obtain <p>Unique ID of the Cloud Load Balancer (CLB). You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) Set <p>Unique ID of the Cloud Load Balancer (CLB). You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
 * @method string getLoadBalancerName() Obtain <p>CLB instance name. Rules: 1-80 internationally compatible characters including letters, Chinese characters, digits, "-", "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden).</p>
 * @method void setLoadBalancerName(string $LoadBalancerName) Set <p>CLB instance name. Rules: 1-80 internationally compatible characters including letters, Chinese characters, digits, "-", "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden).</p>
 * @method TargetRegionInfo getTargetRegionInfo() Obtain <p>Set the backend service information for cross-region binding 1.0 of Cloud Load Balancer.</p>
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) Set <p>Set the backend service information for cross-region binding 1.0 of Cloud Load Balancer.</p>
 * @method InternetAccessible getInternetChargeInfo() Obtain <p>Network billing related parameters</p>
 * @method void setInternetChargeInfo(InternetAccessible $InternetChargeInfo) Set <p>Network billing related parameters</p>
 * @method boolean getLoadBalancerPassToTarget() Obtain <p>Allow CLB traffic to the Target.<br>Enable (true): verify security groups on CLB;<br>deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.<br>Leave blank for no modification.</p>
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) Set <p>Allow CLB traffic to the Target.<br>Enable (true): verify security groups on CLB;<br>deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.<br>Leave blank for no modification.</p>
 * @method integer getSwitchFlag() Obtain <p>Switchover between different billing modes: 0 means no switchover, 1 means switch between prepaid and postpaid, 2 means switch between postpaid modes. Default value: 0</p>
 * @method void setSwitchFlag(integer $SwitchFlag) Set <p>Switchover between different billing modes: 0 means no switchover, 1 means switch between prepaid and postpaid, 2 means switch between postpaid modes. Default value: 0</p>
 * @method boolean getSnatPro() Obtain <p>Whether cross-region binding 2.0 is enabled. Leave it blank for no modification.</p>
 * @method void setSnatPro(boolean $SnatPro) Set <p>Whether cross-region binding 2.0 is enabled. Leave it blank for no modification.</p>
 * @method boolean getDeleteProtect() Obtain <p>Whether to enable deletion protection. Leave it empty to skip modification.</p>
 * @method void setDeleteProtect(boolean $DeleteProtect) Set <p>Whether to enable deletion protection. Leave it empty to skip modification.</p>
 * @method boolean getModifyClassicDomain() Obtain <p>Change the second-level domain name of Cloud Load Balancer (CLB) from mycloud.com to tencentclb.com. The subdomain will also be transformed. After modification, the mycloud.com domain name will become invalid. Leave it blank if no modification is needed.</p>
 * @method void setModifyClassicDomain(boolean $ModifyClassicDomain) Set <p>Change the second-level domain name of Cloud Load Balancer (CLB) from mycloud.com to tencentclb.com. The subdomain will also be transformed. After modification, the mycloud.com domain name will become invalid. Leave it blank if no modification is needed.</p>
 * @method string getAssociateEndpoint() Obtain <p>Id of the associated endpoint, which can be queried via the <a href="https://www.tencentcloud.com/document/product/215/54679?from_cn_redirect=1">DescribeVpcEndPoint</a> api. Input an empty string to unbind.</p>
 * @method void setAssociateEndpoint(string $AssociateEndpoint) Set <p>Id of the associated endpoint, which can be queried via the <a href="https://www.tencentcloud.com/document/product/215/54679?from_cn_redirect=1">DescribeVpcEndPoint</a> api. Input an empty string to unbind.</p>
 */
class ModifyLoadBalancerAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>Unique ID of the Cloud Load Balancer (CLB). You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>CLB instance name. Rules: 1-80 internationally compatible characters including letters, Chinese characters, digits, "-", "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden).</p>
     */
    public $LoadBalancerName;

    /**
     * @var TargetRegionInfo <p>Set the backend service information for cross-region binding 1.0 of Cloud Load Balancer.</p>
     */
    public $TargetRegionInfo;

    /**
     * @var InternetAccessible <p>Network billing related parameters</p>
     */
    public $InternetChargeInfo;

    /**
     * @var boolean <p>Allow CLB traffic to the Target.<br>Enable (true): verify security groups on CLB;<br>deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.<br>Leave blank for no modification.</p>
     */
    public $LoadBalancerPassToTarget;

    /**
     * @var integer <p>Switchover between different billing modes: 0 means no switchover, 1 means switch between prepaid and postpaid, 2 means switch between postpaid modes. Default value: 0</p>
     */
    public $SwitchFlag;

    /**
     * @var boolean <p>Whether cross-region binding 2.0 is enabled. Leave it blank for no modification.</p>
     */
    public $SnatPro;

    /**
     * @var boolean <p>Whether to enable deletion protection. Leave it empty to skip modification.</p>
     */
    public $DeleteProtect;

    /**
     * @var boolean <p>Change the second-level domain name of Cloud Load Balancer (CLB) from mycloud.com to tencentclb.com. The subdomain will also be transformed. After modification, the mycloud.com domain name will become invalid. Leave it blank if no modification is needed.</p>
     */
    public $ModifyClassicDomain;

    /**
     * @var string <p>Id of the associated endpoint, which can be queried via the <a href="https://www.tencentcloud.com/document/product/215/54679?from_cn_redirect=1">DescribeVpcEndPoint</a> api. Input an empty string to unbind.</p>
     */
    public $AssociateEndpoint;

    /**
     * @param string $LoadBalancerId <p>Unique ID of the Cloud Load Balancer (CLB). You can call the <a href="https://www.tencentcloud.com/document/product/214/30685?from_cn_redirect=1">DescribeLoadBalancers</a> API to obtain the ID.</p>
     * @param string $LoadBalancerName <p>CLB instance name. Rules: 1-80 internationally compatible characters including letters, Chinese characters, digits, "-", "_", and other common characters (Unicode supplementary characters such as emojis and rare Chinese characters are forbidden).</p>
     * @param TargetRegionInfo $TargetRegionInfo <p>Set the backend service information for cross-region binding 1.0 of Cloud Load Balancer.</p>
     * @param InternetAccessible $InternetChargeInfo <p>Network billing related parameters</p>
     * @param boolean $LoadBalancerPassToTarget <p>Allow CLB traffic to the Target.<br>Enable (true): verify security groups on CLB;<br>deny CLB traffic to the Target (false): verify security groups on both CLB and backend instances.<br>Leave blank for no modification.</p>
     * @param integer $SwitchFlag <p>Switchover between different billing modes: 0 means no switchover, 1 means switch between prepaid and postpaid, 2 means switch between postpaid modes. Default value: 0</p>
     * @param boolean $SnatPro <p>Whether cross-region binding 2.0 is enabled. Leave it blank for no modification.</p>
     * @param boolean $DeleteProtect <p>Whether to enable deletion protection. Leave it empty to skip modification.</p>
     * @param boolean $ModifyClassicDomain <p>Change the second-level domain name of Cloud Load Balancer (CLB) from mycloud.com to tencentclb.com. The subdomain will also be transformed. After modification, the mycloud.com domain name will become invalid. Leave it blank if no modification is needed.</p>
     * @param string $AssociateEndpoint <p>Id of the associated endpoint, which can be queried via the <a href="https://www.tencentcloud.com/document/product/215/54679?from_cn_redirect=1">DescribeVpcEndPoint</a> api. Input an empty string to unbind.</p>
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

        if (array_key_exists("SwitchFlag",$param) and $param["SwitchFlag"] !== null) {
            $this->SwitchFlag = $param["SwitchFlag"];
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
