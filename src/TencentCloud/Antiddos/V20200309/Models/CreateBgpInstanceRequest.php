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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBgpInstance request structure.
 *
 * @method string getInstanceChargeType() Obtain Payment type: payment mode: PREPAID (prepayment) POSTPAID_BY_MONTH (pay-as-you-go).
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Payment type: payment mode: PREPAID (prepayment) POSTPAID_BY_MONTH (pay-as-you-go).
 * @method string getPackageType() Obtain High-Protection package type: specifies the high-protection package type. valid values: Enterprise (Enterprise edition), Standard (Standard version), StandardPlus (Standard version 2.0).
 * @method void setPackageType(string $PackageType) Set High-Protection package type: specifies the high-protection package type. valid values: Enterprise (Enterprise edition), Standard (Standard version), StandardPlus (Standard version 2.0).
 * @method integer getInstanceCount() Obtain Specifies the number of anti-ddos packages to purchase. valid values: one-time purchase of no more than 10.
 * @method void setInstanceCount(integer $InstanceCount) Set Specifies the number of anti-ddos packages to purchase. valid values: one-time purchase of no more than 10.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain { "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set { "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
 * @method EnterprisePackageConfig getEnterprisePackageConfig() Obtain { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method void setEnterprisePackageConfig(EnterprisePackageConfig $EnterprisePackageConfig) Set { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method StandardPackageConfig getStandardPackageConfig() Obtain { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method void setStandardPackageConfig(StandardPackageConfig $StandardPackageConfig) Set { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
 * @method StandardPlusPackageConfig getStandardPlusPackageConfig() Obtain { "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
 * @method void setStandardPlusPackageConfig(StandardPlusPackageConfig $StandardPlusPackageConfig) Set { "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
 * @method array getTagInfoList() Obtain [ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
 * @method void setTagInfoList(array $TagInfoList) Set [ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
 * @method boolean getDryRun() Obtain false by default. true indicates to perform parameter validation only without actual purchase.
 * @method void setDryRun(boolean $DryRun) Set false by default. true indicates to perform parameter validation only without actual purchase.
 */
class CreateBgpInstanceRequest extends AbstractModel
{
    /**
     * @var string Payment type: payment mode: PREPAID (prepayment) POSTPAID_BY_MONTH (pay-as-you-go).
     */
    public $InstanceChargeType;

    /**
     * @var string High-Protection package type: specifies the high-protection package type. valid values: Enterprise (Enterprise edition), Standard (Standard version), StandardPlus (Standard version 2.0).
     */
    public $PackageType;

    /**
     * @var integer Specifies the number of anti-ddos packages to purchase. valid values: one-time purchase of no more than 10.
     */
    public $InstanceCount;

    /**
     * @var InstanceChargePrepaid { "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
     */
    public $InstanceChargePrepaid;

    /**
     * @var EnterprisePackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     */
    public $EnterprisePackageConfig;

    /**
     * @var StandardPackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     */
    public $StandardPackageConfig;

    /**
     * @var StandardPlusPackageConfig { "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
     */
    public $StandardPlusPackageConfig;

    /**
     * @var array [ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
     */
    public $TagInfoList;

    /**
     * @var boolean false by default. true indicates to perform parameter validation only without actual purchase.
     */
    public $DryRun;

    /**
     * @param string $InstanceChargeType Payment type: payment mode: PREPAID (prepayment) POSTPAID_BY_MONTH (pay-as-you-go).
     * @param string $PackageType High-Protection package type: specifies the high-protection package type. valid values: Enterprise (Enterprise edition), Standard (Standard version), StandardPlus (Standard version 2.0).
     * @param integer $InstanceCount Specifies the number of anti-ddos packages to purchase. valid values: one-time purchase of no more than 10.
     * @param InstanceChargePrepaid $InstanceChargePrepaid { "Period": 3, "RenewFlag": "NOTIFY_AND_AUTO_RENEW" }
     * @param EnterprisePackageConfig $EnterprisePackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     * @param StandardPackageConfig $StandardPackageConfig { "Region": "ap-guangzhou", "ProtectIpCount": 1, "BasicProtectBandwidth": 300, "Bandwidth": 100, "ElasticProtectLimit": 0, "ElasticBandwidthFlag": true }
     * @param StandardPlusPackageConfig $StandardPlusPackageConfig { "Region": "ap-guangzhou", "ProtectCount": "TWO_TIMES", "ProtectIpCount": 1, "Bandwidth": 100, "ElasticBandwidthFlag": true }
     * @param array $TagInfoList [ { "TagKey": "beal-test",                 "TagValue": "beal-test"               }             ]
     * @param boolean $DryRun false by default. true indicates to perform parameter validation only without actual purchase.
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("EnterprisePackageConfig",$param) and $param["EnterprisePackageConfig"] !== null) {
            $this->EnterprisePackageConfig = new EnterprisePackageConfig();
            $this->EnterprisePackageConfig->deserialize($param["EnterprisePackageConfig"]);
        }

        if (array_key_exists("StandardPackageConfig",$param) and $param["StandardPackageConfig"] !== null) {
            $this->StandardPackageConfig = new StandardPackageConfig();
            $this->StandardPackageConfig->deserialize($param["StandardPackageConfig"]);
        }

        if (array_key_exists("StandardPlusPackageConfig",$param) and $param["StandardPlusPackageConfig"] !== null) {
            $this->StandardPlusPackageConfig = new StandardPlusPackageConfig();
            $this->StandardPlusPackageConfig->deserialize($param["StandardPlusPackageConfig"]);
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
