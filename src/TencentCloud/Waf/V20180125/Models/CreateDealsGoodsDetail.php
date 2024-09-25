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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product details
 *
 * @method integer getTimeSpan() Obtain Time interval
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Time interval
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Unit, support for purchasing d, m, y, i.e., (day, month, year)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Unit, support for purchasing d, m, y, i.e., (day, month, year)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubProductCode() Obtain Sub-product tag. It is mandatory for new purchase and renewal. For configuration change, it will be placed in oldConfig and newConfig.

SaaS Advanced Edition: sp_wsm_waf_premium
SaaS Enterprise Edition: sp_wsm_waf_enterprise
SaaS Ultimate Edition: sp_wsm_waf_ultimate
SaaS business expansion package: sp_wsm_waf_qpsep
SaaS domain name expansion package: sp_wsm_waf_domain

Advanced Edition - CLB: sp_wsm_waf_premium_clb
Enterprise Edition - CLB: sp_wsm_waf_enterprise_clb
Ultimate Edition - CLB: sp_wsm_waf_ultimate_clb
 business expansion package - CLB: sp_wsm_waf_qpsep_clb
Domain name expansion package - CLB: sp_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubProductCode(string $SubProductCode) Set Sub-product tag. It is mandatory for new purchase and renewal. For configuration change, it will be placed in oldConfig and newConfig.

SaaS Advanced Edition: sp_wsm_waf_premium
SaaS Enterprise Edition: sp_wsm_waf_enterprise
SaaS Ultimate Edition: sp_wsm_waf_ultimate
SaaS business expansion package: sp_wsm_waf_qpsep
SaaS domain name expansion package: sp_wsm_waf_domain

Advanced Edition - CLB: sp_wsm_waf_premium_clb
Enterprise Edition - CLB: sp_wsm_waf_enterprise_clb
Ultimate Edition - CLB: sp_wsm_waf_ultimate_clb
 business expansion package - CLB: sp_wsm_waf_qpsep_clb
Domain name expansion package - CLB: sp_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPid() Obtain PID applied for a business product (corresponding to a pricing formula). The pricing model can be found through PID billing.
Advanced Edition: 1000827
Enterprise Edition: 1000830
Ultimate Edition: 1000832
Domain name package: 1000834
Business expansion package: 1000481
Advanced Edition - CLB: 1001150
Enterprise Edition - CLB: 1001152
Ultimate Edition - CLB: 1001154
Domain name package - CLB: 1001156
Business expansion package - CLB: 1001160

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set PID applied for a business product (corresponding to a pricing formula). The pricing model can be found through PID billing.
Advanced Edition: 1000827
Enterprise Edition: 1000830
Ultimate Edition: 1000832
Domain name package: 1000834
Business expansion package: 1000481
Advanced Edition - CLB: 1001150
Enterprise Edition - CLB: 1001152
Ultimate Edition - CLB: 1001154
Domain name package - CLB: 1001156
Business expansion package - CLB: 1001160

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain WAF Instance Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set WAF Instance Name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain 1: Auto-renewal, 0: No Auto-renewal

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set 1: Auto-renewal, 0: No Auto-renewal

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRealRegion() Obtain Actual Geographic Information of WAF Purchase

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealRegion(integer $RealRegion) Set Actual Geographic Information of WAF Purchase

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabelTypes() Obtain Billing Detail Tag Array

SaaS Advanced Edition: sv_wsm_waf_package_premium
SaaS Enterprise Edition: sv_wsm_waf_package_enterprise
SaaS Ultimate Edition: sv_wsm_waf_package_ultimate
SaaS non-Chinese Mainland Advanced Edition: sv_wsm_waf_package_premium_intl
SaaS non-Chinese Mainland Enterprise Edition: sv_wsm_waf_package_enterprise_intl
SaaS non-Chinese Mainland Ultimate Edition: sv_wsm_waf_package_ultimate_intl
SaaS business expansion package: sv_wsm_waf_qps_ep
SaaS domain name expansion package: sv_wsm_waf_domain

Advanced Edition CLB: sv_wsm_waf_package_premium_clb
Enterprise Edition CLB: sv_wsm_waf_package_enterprise_clb
Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb
Non-Chinese Mainland Advanced Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Enterprise Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb_intl
Business expansion package CLB: sv_wsm_waf_qps_ep_clb
Domain name expansion package CLB: sv_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabelTypes(array $LabelTypes) Set Billing Detail Tag Array

SaaS Advanced Edition: sv_wsm_waf_package_premium
SaaS Enterprise Edition: sv_wsm_waf_package_enterprise
SaaS Ultimate Edition: sv_wsm_waf_package_ultimate
SaaS non-Chinese Mainland Advanced Edition: sv_wsm_waf_package_premium_intl
SaaS non-Chinese Mainland Enterprise Edition: sv_wsm_waf_package_enterprise_intl
SaaS non-Chinese Mainland Ultimate Edition: sv_wsm_waf_package_ultimate_intl
SaaS business expansion package: sv_wsm_waf_qps_ep
SaaS domain name expansion package: sv_wsm_waf_domain

Advanced Edition CLB: sv_wsm_waf_package_premium_clb
Enterprise Edition CLB: sv_wsm_waf_package_enterprise_clb
Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb
Non-Chinese Mainland Advanced Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Enterprise Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb_intl
Business expansion package CLB: sv_wsm_waf_qps_ep_clb
Domain name expansion package CLB: sv_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabelCounts() Obtain Number of Billing Detail Tags, Generally Corresponds One-to-One with SvLabelType

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabelCounts(array $LabelCounts) Set Number of Billing Detail Tags, Generally Corresponds One-to-One with SvLabelType

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurDeadline() Obtain Dynamic Configuration Usage, Instance Expiration Time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurDeadline(string $CurDeadline) Set Dynamic Configuration Usage, Instance Expiration Time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Purchasing Bot or API Security for Existing Instances

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Purchasing Bot or API Security for Existing Instances

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceId() Obtain Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateDealsGoodsDetail extends AbstractModel
{
    /**
     * @var integer Time interval
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeSpan;

    /**
     * @var string Unit, support for purchasing d, m, y, i.e., (day, month, year)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @var string Sub-product tag. It is mandatory for new purchase and renewal. For configuration change, it will be placed in oldConfig and newConfig.

SaaS Advanced Edition: sp_wsm_waf_premium
SaaS Enterprise Edition: sp_wsm_waf_enterprise
SaaS Ultimate Edition: sp_wsm_waf_ultimate
SaaS business expansion package: sp_wsm_waf_qpsep
SaaS domain name expansion package: sp_wsm_waf_domain

Advanced Edition - CLB: sp_wsm_waf_premium_clb
Enterprise Edition - CLB: sp_wsm_waf_enterprise_clb
Ultimate Edition - CLB: sp_wsm_waf_ultimate_clb
 business expansion package - CLB: sp_wsm_waf_qpsep_clb
Domain name expansion package - CLB: sp_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubProductCode;

    /**
     * @var integer PID applied for a business product (corresponding to a pricing formula). The pricing model can be found through PID billing.
Advanced Edition: 1000827
Enterprise Edition: 1000830
Ultimate Edition: 1000832
Domain name package: 1000834
Business expansion package: 1000481
Advanced Edition - CLB: 1001150
Enterprise Edition - CLB: 1001152
Ultimate Edition - CLB: 1001154
Domain name package - CLB: 1001156
Business expansion package - CLB: 1001160

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string WAF Instance Name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var integer 1: Auto-renewal, 0: No Auto-renewal

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Actual Geographic Information of WAF Purchase

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealRegion;

    /**
     * @var array Billing Detail Tag Array

SaaS Advanced Edition: sv_wsm_waf_package_premium
SaaS Enterprise Edition: sv_wsm_waf_package_enterprise
SaaS Ultimate Edition: sv_wsm_waf_package_ultimate
SaaS non-Chinese Mainland Advanced Edition: sv_wsm_waf_package_premium_intl
SaaS non-Chinese Mainland Enterprise Edition: sv_wsm_waf_package_enterprise_intl
SaaS non-Chinese Mainland Ultimate Edition: sv_wsm_waf_package_ultimate_intl
SaaS business expansion package: sv_wsm_waf_qps_ep
SaaS domain name expansion package: sv_wsm_waf_domain

Advanced Edition CLB: sv_wsm_waf_package_premium_clb
Enterprise Edition CLB: sv_wsm_waf_package_enterprise_clb
Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb
Non-Chinese Mainland Advanced Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Enterprise Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb_intl
Business expansion package CLB: sv_wsm_waf_qps_ep_clb
Domain name expansion package CLB: sv_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LabelTypes;

    /**
     * @var array Number of Billing Detail Tags, Generally Corresponds One-to-One with SvLabelType

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LabelCounts;

    /**
     * @var string Dynamic Configuration Usage, Instance Expiration Time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurDeadline;

    /**
     * @var string Purchasing Bot or API Security for Existing Instances

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @param integer $TimeSpan Time interval
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Unit, support for purchasing d, m, y, i.e., (day, month, year)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubProductCode Sub-product tag. It is mandatory for new purchase and renewal. For configuration change, it will be placed in oldConfig and newConfig.

SaaS Advanced Edition: sp_wsm_waf_premium
SaaS Enterprise Edition: sp_wsm_waf_enterprise
SaaS Ultimate Edition: sp_wsm_waf_ultimate
SaaS business expansion package: sp_wsm_waf_qpsep
SaaS domain name expansion package: sp_wsm_waf_domain

Advanced Edition - CLB: sp_wsm_waf_premium_clb
Enterprise Edition - CLB: sp_wsm_waf_enterprise_clb
Ultimate Edition - CLB: sp_wsm_waf_ultimate_clb
 business expansion package - CLB: sp_wsm_waf_qpsep_clb
Domain name expansion package - CLB: sp_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pid PID applied for a business product (corresponding to a pricing formula). The pricing model can be found through PID billing.
Advanced Edition: 1000827
Enterprise Edition: 1000830
Ultimate Edition: 1000832
Domain name package: 1000834
Business expansion package: 1000481
Advanced Edition - CLB: 1001150
Enterprise Edition - CLB: 1001152
Ultimate Edition - CLB: 1001154
Domain name package - CLB: 1001156
Business expansion package - CLB: 1001160

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName WAF Instance Name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag 1: Auto-renewal, 0: No Auto-renewal

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RealRegion Actual Geographic Information of WAF Purchase

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LabelTypes Billing Detail Tag Array

SaaS Advanced Edition: sv_wsm_waf_package_premium
SaaS Enterprise Edition: sv_wsm_waf_package_enterprise
SaaS Ultimate Edition: sv_wsm_waf_package_ultimate
SaaS non-Chinese Mainland Advanced Edition: sv_wsm_waf_package_premium_intl
SaaS non-Chinese Mainland Enterprise Edition: sv_wsm_waf_package_enterprise_intl
SaaS non-Chinese Mainland Ultimate Edition: sv_wsm_waf_package_ultimate_intl
SaaS business expansion package: sv_wsm_waf_qps_ep
SaaS domain name expansion package: sv_wsm_waf_domain

Advanced Edition CLB: sv_wsm_waf_package_premium_clb
Enterprise Edition CLB: sv_wsm_waf_package_enterprise_clb
Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb
Non-Chinese Mainland Advanced Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Enterprise Edition CLB: sv_wsm_waf_package_premium_clb_intl
Non-Chinese Mainland Ultimate Edition CLB: sv_wsm_waf_package_ultimate_clb_intl
Business expansion package CLB: sv_wsm_waf_qps_ep_clb
Domain name expansion package CLB: sv_wsm_waf_domain_clb

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LabelCounts Number of Billing Detail Tags, Generally Corresponds One-to-One with SvLabelType

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurDeadline Dynamic Configuration Usage, Instance Expiration Time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Purchasing Bot or API Security for Existing Instances

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceId Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("RealRegion",$param) and $param["RealRegion"] !== null) {
            $this->RealRegion = $param["RealRegion"];
        }

        if (array_key_exists("LabelTypes",$param) and $param["LabelTypes"] !== null) {
            $this->LabelTypes = $param["LabelTypes"];
        }

        if (array_key_exists("LabelCounts",$param) and $param["LabelCounts"] !== null) {
            $this->LabelCounts = $param["LabelCounts"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
