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
 * Detailed information of an instance
 *
 * @method string getInstanceId() Obtain Unique Instance ID
 * @method void setInstanceId(string $InstanceId) Set Unique Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getResourceIds() Obtain Resource ID corresponding to the Instance, for billing usage
 * @method void setResourceIds(string $ResourceIds) Set Resource ID corresponding to the Instance, for billing usage
 * @method string getRegion() Obtain Instance region
 * @method void setRegion(string $Region) Set Instance region
 * @method integer getPayMode() Obtain Payment mode
 * @method void setPayMode(integer $PayMode) Set Payment mode
 * @method integer getRenewFlag() Obtain Auto-renewal flag.

0: disable

1: enable
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-renewal flag.

0: disable

1: enable
 * @method integer getMode() Obtain Elastic billing switch.
0: disable

1: enable
 * @method void setMode(integer $Mode) Set Elastic billing switch.
0: disable

1: enable
 * @method integer getLevel() Obtain Instance package version.
101: Small and Micro Edition.
102: Ultra-light Edition.
2: Advanced Edition.
3: Enterprise Edition.
4: Ultimate Edition.
6: Exclusive Edition
 * @method void setLevel(integer $Level) Set Instance package version.
101: Small and Micro Edition.
102: Ultra-light Edition.
2: Advanced Edition.
3: Enterprise Edition.
4: Ultimate Edition.
6: Exclusive Edition
 * @method string getValidTime() Obtain Instance expiration time
 * @method void setValidTime(string $ValidTime) Set Instance expiration time
 * @method string getBeginTime() Obtain Instance Start Time
 * @method void setBeginTime(string $BeginTime) Set Instance Start Time
 * @method integer getDomainCount() Obtain Configured Domain Count
 * @method void setDomainCount(integer $DomainCount) Set Configured Domain Count
 * @method integer getSubDomainLimit() Obtain Maximum Domain Count
 * @method void setSubDomainLimit(integer $SubDomainLimit) Set Maximum Domain Count
 * @method integer getMainDomainCount() Obtain Configured Primary Domain Count
 * @method void setMainDomainCount(integer $MainDomainCount) Set Configured Primary Domain Count
 * @method integer getMainDomainLimit() Obtain Maximum Number of Primary Domain Names
 * @method void setMainDomainLimit(integer $MainDomainLimit) Set Maximum Number of Primary Domain Names
 * @method integer getMaxQPS() Obtain Instance QPS Peak within 30 Days
 * @method void setMaxQPS(integer $MaxQPS) Set Instance QPS Peak within 30 Days
 * @method QPSPackageNew getQPS() Obtain QPS Expansion Package Information
 * @method void setQPS(QPSPackageNew $QPS) Set QPS Expansion Package Information
 * @method DomainPackageNew getDomainPkg() Obtain Domain Extension Package Information
 * @method void setDomainPkg(DomainPackageNew $DomainPkg) Set Domain Extension Package Information
 * @method integer getAppId() Obtain User appid.
 * @method void setAppId(integer $AppId) Set User appid.
 * @method string getEdition() Obtain CLB or SaaS
 * @method void setEdition(string $Edition) Set CLB or SaaS
 * @method FraudPkg getFraudPkg() Obtain Business Security Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFraudPkg(FraudPkg $FraudPkg) Set Business Security Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method BotPkg getBotPkg() Obtain Bot Resource Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotPkg(BotPkg $BotPkg) Set Bot Resource Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method BotQPS getBotQPS() Obtain Bot's QPS details

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotQPS(BotQPS $BotQPS) Set Bot's QPS details

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getElasticBilling() Obtain QPS Elastic Billing Cap

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setElasticBilling(integer $ElasticBilling) Set QPS Elastic Billing Cap

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAttackLogPost() Obtain Attack Log Shipping Switch

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAttackLogPost(integer $AttackLogPost) Set Attack Log Shipping Switch

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxBandwidth() Obtain Peak Bandwidth, in B/s (Bytes per Second)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxBandwidth(integer $MaxBandwidth) Set Peak Bandwidth, in B/s (Bytes per Second)

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAPISecurity() Obtain Whether API security is purchased
 * @method void setAPISecurity(integer $APISecurity) Set Whether API security is purchased
 * @method integer getQpsStandard() Obtain Purchased QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQpsStandard(integer $QpsStandard) Set Purchased QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBandwidthStandard() Obtain Purchased Bandwidth Specification

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthStandard(integer $BandwidthStandard) Set Purchased Bandwidth Specification

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Instance status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Instance status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSandboxQps() Obtain Instance Sandbox QPS Value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSandboxQps(integer $SandboxQps) Set Instance Sandbox QPS Value

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAPISecurityTrial() Obtain Whether API Security is on Trial

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAPISecurityTrial(integer $IsAPISecurityTrial) Set Whether API Security is on Trial

Note: This field may return null, indicating that no valid values can be obtained.
 * @method MajorEventsPkg getMajorEventsPkg() Obtain Premium Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMajorEventsPkg(MajorEventsPkg $MajorEventsPkg) Set Premium Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method HybridPkg getHybridPkg() Obtain Hybrid Cloud Sub-node Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHybridPkg(HybridPkg $HybridPkg) Set Hybrid Cloud Sub-node Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method ApiPkg getApiPkg() Obtain API security resource package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApiPkg(ApiPkg $ApiPkg) Set API security resource package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method MiniPkg getMiniPkg() Obtain MMPS Acceleration Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiniPkg(MiniPkg $MiniPkg) Set MMPS Acceleration Package

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMiniQpsStandard() Obtain Mini Program QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiniQpsStandard(integer $MiniQpsStandard) Set Mini Program QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMiniMaxQPS() Obtain Mini Program QPS Peak

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiniMaxQPS(integer $MiniMaxQPS) Set Mini Program QPS Peak

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastQpsExceedTime() Obtain Last overage time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastQpsExceedTime(string $LastQpsExceedTime) Set Last overage time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MiniExtendPkg getMiniExtendPkg() Obtain ID quantity expansion package for secure mini program access.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMiniExtendPkg(MiniExtendPkg $MiniExtendPkg) Set ID quantity expansion package for secure mini program access.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingItem() Obtain Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingItem(string $BillingItem) Set Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFreeDelayFlag() Obtain Flag for delay of instance deletion.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFreeDelayFlag(integer $FreeDelayFlag) Set Flag for delay of instance deletion.

Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string Unique Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Resource ID corresponding to the Instance, for billing usage
     */
    public $ResourceIds;

    /**
     * @var string Instance region
     */
    public $Region;

    /**
     * @var integer Payment mode
     */
    public $PayMode;

    /**
     * @var integer Auto-renewal flag.

0: disable

1: enable
     */
    public $RenewFlag;

    /**
     * @var integer Elastic billing switch.
0: disable

1: enable
     */
    public $Mode;

    /**
     * @var integer Instance package version.
101: Small and Micro Edition.
102: Ultra-light Edition.
2: Advanced Edition.
3: Enterprise Edition.
4: Ultimate Edition.
6: Exclusive Edition
     */
    public $Level;

    /**
     * @var string Instance expiration time
     */
    public $ValidTime;

    /**
     * @var string Instance Start Time
     */
    public $BeginTime;

    /**
     * @var integer Configured Domain Count
     */
    public $DomainCount;

    /**
     * @var integer Maximum Domain Count
     */
    public $SubDomainLimit;

    /**
     * @var integer Configured Primary Domain Count
     */
    public $MainDomainCount;

    /**
     * @var integer Maximum Number of Primary Domain Names
     */
    public $MainDomainLimit;

    /**
     * @var integer Instance QPS Peak within 30 Days
     */
    public $MaxQPS;

    /**
     * @var QPSPackageNew QPS Expansion Package Information
     */
    public $QPS;

    /**
     * @var DomainPackageNew Domain Extension Package Information
     */
    public $DomainPkg;

    /**
     * @var integer User appid.
     */
    public $AppId;

    /**
     * @var string CLB or SaaS
     */
    public $Edition;

    /**
     * @var FraudPkg Business Security Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FraudPkg;

    /**
     * @var BotPkg Bot Resource Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotPkg;

    /**
     * @var BotQPS Bot's QPS details

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotQPS;

    /**
     * @var integer QPS Elastic Billing Cap

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ElasticBilling;

    /**
     * @var integer Attack Log Shipping Switch

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AttackLogPost;

    /**
     * @var integer Peak Bandwidth, in B/s (Bytes per Second)

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxBandwidth;

    /**
     * @var integer Whether API security is purchased
     */
    public $APISecurity;

    /**
     * @var integer Purchased QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QpsStandard;

    /**
     * @var integer Purchased Bandwidth Specification

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthStandard;

    /**
     * @var integer Instance status

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Instance Sandbox QPS Value

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SandboxQps;

    /**
     * @var integer Whether API Security is on Trial

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAPISecurityTrial;

    /**
     * @var MajorEventsPkg Premium Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MajorEventsPkg;

    /**
     * @var HybridPkg Hybrid Cloud Sub-node Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HybridPkg;

    /**
     * @var ApiPkg API security resource package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApiPkg;

    /**
     * @var MiniPkg MMPS Acceleration Package

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiniPkg;

    /**
     * @var integer Mini Program QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiniQpsStandard;

    /**
     * @var integer Mini Program QPS Peak

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiniMaxQPS;

    /**
     * @var string Last overage time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastQpsExceedTime;

    /**
     * @var MiniExtendPkg ID quantity expansion package for secure mini program access.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MiniExtendPkg;

    /**
     * @var string Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingItem;

    /**
     * @var integer Flag for delay of instance deletion.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FreeDelayFlag;

    /**
     * @param string $InstanceId Unique Instance ID
     * @param string $InstanceName Instance name
     * @param string $ResourceIds Resource ID corresponding to the Instance, for billing usage
     * @param string $Region Instance region
     * @param integer $PayMode Payment mode
     * @param integer $RenewFlag Auto-renewal flag.

0: disable

1: enable
     * @param integer $Mode Elastic billing switch.
0: disable

1: enable
     * @param integer $Level Instance package version.
101: Small and Micro Edition.
102: Ultra-light Edition.
2: Advanced Edition.
3: Enterprise Edition.
4: Ultimate Edition.
6: Exclusive Edition
     * @param string $ValidTime Instance expiration time
     * @param string $BeginTime Instance Start Time
     * @param integer $DomainCount Configured Domain Count
     * @param integer $SubDomainLimit Maximum Domain Count
     * @param integer $MainDomainCount Configured Primary Domain Count
     * @param integer $MainDomainLimit Maximum Number of Primary Domain Names
     * @param integer $MaxQPS Instance QPS Peak within 30 Days
     * @param QPSPackageNew $QPS QPS Expansion Package Information
     * @param DomainPackageNew $DomainPkg Domain Extension Package Information
     * @param integer $AppId User appid.
     * @param string $Edition CLB or SaaS
     * @param FraudPkg $FraudPkg Business Security Package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param BotPkg $BotPkg Bot Resource Package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param BotQPS $BotQPS Bot's QPS details

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ElasticBilling QPS Elastic Billing Cap

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AttackLogPost Attack Log Shipping Switch

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxBandwidth Peak Bandwidth, in B/s (Bytes per Second)

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $APISecurity Whether API security is purchased
     * @param integer $QpsStandard Purchased QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BandwidthStandard Purchased Bandwidth Specification

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Instance status

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SandboxQps Instance Sandbox QPS Value

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAPISecurityTrial Whether API Security is on Trial

Note: This field may return null, indicating that no valid values can be obtained.
     * @param MajorEventsPkg $MajorEventsPkg Premium Package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param HybridPkg $HybridPkg Hybrid Cloud Sub-node Package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param ApiPkg $ApiPkg API security resource package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param MiniPkg $MiniPkg MMPS Acceleration Package

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MiniQpsStandard Mini Program QPS Specification

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MiniMaxQPS Mini Program QPS Peak

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastQpsExceedTime Last overage time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MiniExtendPkg $MiniExtendPkg ID quantity expansion package for secure mini program access.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillingItem Billing item.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FreeDelayFlag Flag for delay of instance deletion.

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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("SubDomainLimit",$param) and $param["SubDomainLimit"] !== null) {
            $this->SubDomainLimit = $param["SubDomainLimit"];
        }

        if (array_key_exists("MainDomainCount",$param) and $param["MainDomainCount"] !== null) {
            $this->MainDomainCount = $param["MainDomainCount"];
        }

        if (array_key_exists("MainDomainLimit",$param) and $param["MainDomainLimit"] !== null) {
            $this->MainDomainLimit = $param["MainDomainLimit"];
        }

        if (array_key_exists("MaxQPS",$param) and $param["MaxQPS"] !== null) {
            $this->MaxQPS = $param["MaxQPS"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = new QPSPackageNew();
            $this->QPS->deserialize($param["QPS"]);
        }

        if (array_key_exists("DomainPkg",$param) and $param["DomainPkg"] !== null) {
            $this->DomainPkg = new DomainPackageNew();
            $this->DomainPkg->deserialize($param["DomainPkg"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("FraudPkg",$param) and $param["FraudPkg"] !== null) {
            $this->FraudPkg = new FraudPkg();
            $this->FraudPkg->deserialize($param["FraudPkg"]);
        }

        if (array_key_exists("BotPkg",$param) and $param["BotPkg"] !== null) {
            $this->BotPkg = new BotPkg();
            $this->BotPkg->deserialize($param["BotPkg"]);
        }

        if (array_key_exists("BotQPS",$param) and $param["BotQPS"] !== null) {
            $this->BotQPS = new BotQPS();
            $this->BotQPS->deserialize($param["BotQPS"]);
        }

        if (array_key_exists("ElasticBilling",$param) and $param["ElasticBilling"] !== null) {
            $this->ElasticBilling = $param["ElasticBilling"];
        }

        if (array_key_exists("AttackLogPost",$param) and $param["AttackLogPost"] !== null) {
            $this->AttackLogPost = $param["AttackLogPost"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("APISecurity",$param) and $param["APISecurity"] !== null) {
            $this->APISecurity = $param["APISecurity"];
        }

        if (array_key_exists("QpsStandard",$param) and $param["QpsStandard"] !== null) {
            $this->QpsStandard = $param["QpsStandard"];
        }

        if (array_key_exists("BandwidthStandard",$param) and $param["BandwidthStandard"] !== null) {
            $this->BandwidthStandard = $param["BandwidthStandard"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SandboxQps",$param) and $param["SandboxQps"] !== null) {
            $this->SandboxQps = $param["SandboxQps"];
        }

        if (array_key_exists("IsAPISecurityTrial",$param) and $param["IsAPISecurityTrial"] !== null) {
            $this->IsAPISecurityTrial = $param["IsAPISecurityTrial"];
        }

        if (array_key_exists("MajorEventsPkg",$param) and $param["MajorEventsPkg"] !== null) {
            $this->MajorEventsPkg = new MajorEventsPkg();
            $this->MajorEventsPkg->deserialize($param["MajorEventsPkg"]);
        }

        if (array_key_exists("HybridPkg",$param) and $param["HybridPkg"] !== null) {
            $this->HybridPkg = new HybridPkg();
            $this->HybridPkg->deserialize($param["HybridPkg"]);
        }

        if (array_key_exists("ApiPkg",$param) and $param["ApiPkg"] !== null) {
            $this->ApiPkg = new ApiPkg();
            $this->ApiPkg->deserialize($param["ApiPkg"]);
        }

        if (array_key_exists("MiniPkg",$param) and $param["MiniPkg"] !== null) {
            $this->MiniPkg = new MiniPkg();
            $this->MiniPkg->deserialize($param["MiniPkg"]);
        }

        if (array_key_exists("MiniQpsStandard",$param) and $param["MiniQpsStandard"] !== null) {
            $this->MiniQpsStandard = $param["MiniQpsStandard"];
        }

        if (array_key_exists("MiniMaxQPS",$param) and $param["MiniMaxQPS"] !== null) {
            $this->MiniMaxQPS = $param["MiniMaxQPS"];
        }

        if (array_key_exists("LastQpsExceedTime",$param) and $param["LastQpsExceedTime"] !== null) {
            $this->LastQpsExceedTime = $param["LastQpsExceedTime"];
        }

        if (array_key_exists("MiniExtendPkg",$param) and $param["MiniExtendPkg"] !== null) {
            $this->MiniExtendPkg = new MiniExtendPkg();
            $this->MiniExtendPkg->deserialize($param["MiniExtendPkg"]);
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("FreeDelayFlag",$param) and $param["FreeDelayFlag"] !== null) {
            $this->FreeDelayFlag = $param["FreeDelayFlag"];
        }
    }
}
