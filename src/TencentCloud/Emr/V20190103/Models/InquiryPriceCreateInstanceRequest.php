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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTimeUnit() Obtain Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
 * @method void setTimeUnit(string $TimeUnit) Set Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
 * @method integer getTimeSpan() Obtain Purchase duration of instance, which needs to be used together with `TimeUnit`.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration of instance, which needs to be used together with `TimeUnit`.
 * @method NewResourceSpec getResourceSpec() Obtain Node specification queried for price.
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) Set Node specification queried for price.
 * @method string getCurrency() Obtain Currency.
 * @method void setCurrency(string $Currency) Set Currency.
 * @method integer getPayMode() Obtain Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
 * @method integer getSupportHA() Obtain Whether to enable high availability of node. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
 * @method void setSupportHA(integer $SupportHA) Set Whether to enable high availability of node. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
 * @method array getSoftware() Obtain List of deployed components.
 * @method void setSoftware(array $Software) Set List of deployed components.
 * @method Placement getPlacement() Obtain Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method void setPlacement(Placement $Placement) Set Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method VPCSettings getVPCSettings() Obtain Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
 * @method string getMetaType() Obtain Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
 * @method void setMetaType(string $MetaType) Set Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
 * @method string getUnifyMetaInstanceId() Obtain EMR-MetaDB instance
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set EMR-MetaDB instance
 * @method CustomMetaInfo getMetaDBInfo() Obtain Custom MetaDB instance information
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) Set Custom MetaDB instance information
 * @method integer getProductId() Obtain Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
 * @method void setProductId(integer $ProductId) Set Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
 */

/**
 *InquiryPriceCreateInstance request structure.
 */
class InquiryPriceCreateInstanceRequest extends AbstractModel
{
    /**
     * @var string Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
     */
    public $TimeUnit;

    /**
     * @var integer Purchase duration of instance, which needs to be used together with `TimeUnit`.
     */
    public $TimeSpan;

    /**
     * @var NewResourceSpec Node specification queried for price.
     */
    public $ResourceSpec;

    /**
     * @var string Currency.
     */
    public $Currency;

    /**
     * @var integer Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
     */
    public $PayMode;

    /**
     * @var integer Whether to enable high availability of node. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
     */
    public $SupportHA;

    /**
     * @var array List of deployed components.
     */
    public $Software;

    /**
     * @var Placement Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
     */
    public $Placement;

    /**
     * @var VPCSettings Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
     */
    public $VPCSettings;

    /**
     * @var string Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
     */
    public $MetaType;

    /**
     * @var string EMR-MetaDB instance
     */
    public $UnifyMetaInstanceId;

    /**
     * @var CustomMetaInfo Custom MetaDB instance information
     */
    public $MetaDBInfo;

    /**
     * @var integer Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
     */
    public $ProductId;
    /**
     * @param string $TimeUnit Time unit of instance purchase duration. Valid values:
<li>s: seconds. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
     * @param integer $TimeSpan Purchase duration of instance, which needs to be used together with `TimeUnit`.
     * @param NewResourceSpec $ResourceSpec Node specification queried for price.
     * @param string $Currency Currency.
     * @param integer $PayMode Instance billing mode. Valid values:
<li>0: pay-as-you-go.</li>
     * @param integer $SupportHA Whether to enable high availability of node. Valid values:
<li>0: does not enable high availability of node.</li>
<li>1: enables high availability of node.</li>
     * @param array $Software List of deployed components.
     * @param Placement $Placement Instance location. This parameter is used to specify the AZ, project, and other attributes of the instance.
     * @param VPCSettings $VPCSettings Configuration information of VPC. This parameter is used to specify the VPC ID, subnet ID, etc.
     * @param string $MetaType Hive-shared metadatabase type. Valid values:
<li>EMR_DEFAULT_META: the cluster creates one by default.</li>
<li>EMR_EXIST_META: the cluster uses the specified EMR-MetaDB instance.</li>
<li>USER_CUSTOM_META: the cluster uses a custom MetaDB instance.</li>
     * @param string $UnifyMetaInstanceId EMR-MetaDB instance
     * @param CustomMetaInfo $MetaDBInfo Custom MetaDB instance information
     * @param integer $ProductId Product ID. Different product IDs represent different EMR product versions. Valid values:
<li>1: EMR v1.3.1.</li>
<li>2: EMR v2.0.1.</li>
<li>4: EMR v2.1.0.</li>
<li>7: EMR v3.0.0.</li>
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("Software",$param) and $param["Software"] !== null) {
            $this->Software = $param["Software"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
