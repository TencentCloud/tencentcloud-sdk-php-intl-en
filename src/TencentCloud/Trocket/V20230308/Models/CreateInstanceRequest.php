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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance request structure.
 *
 * @method string getInstanceType() Obtain Instance type. valid values are as follows:.

-EXPERIMENT: specifies the trial version.

- BASIC: BASIC edition.

-PRO edition.

-PLATINUM: platinum version.
 * @method void setInstanceType(string $InstanceType) Set Instance type. valid values are as follows:.

-EXPERIMENT: specifies the trial version.

- BASIC: BASIC edition.

-PRO edition.

-PLATINUM: platinum version.
 * @method string getName() Obtain Cluster name. values cannot be empty. 3-64 characters, only comprised of digits, letters, "-", and "_".
 * @method void setName(string $Name) Set Cluster name. values cannot be empty. 3-64 characters, only comprised of digits, letters, "-", and "_".
 * @method string getSkuCode() Obtain Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).
 * @method void setSkuCode(string $SkuCode) Set Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).
 * @method array getVpcList() Obtain Specifies the VPC information bound to the cluster.
 * @method void setVpcList(array $VpcList) Set Specifies the VPC information bound to the cluster.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method array getTagList() Obtain Tag list
 * @method void setTagList(array $TagList) Set Tag list
 * @method boolean getEnablePublic() Obtain Whether public network access is enabled. the default value of false means not enabled.
 * @method void setEnablePublic(boolean $EnablePublic) Set Whether public network access is enabled. the default value of false means not enabled.
 * @method boolean getBillingFlow() Obtain Whether the public network is billed by traffic. the default value is false, which indicates that the public network is not billed by traffic.
 * @method void setBillingFlow(boolean $BillingFlow) Set Whether the public network is billed by traffic. the default value is false, which indicates that the public network is not billed by traffic.
 * @method integer getBandwidth() Obtain Public network bandwidth (unit: mbps). the default value is 0. if public network access is enabled, this field must be a positive integer above 0.
 * @method void setBandwidth(integer $Bandwidth) Set Public network bandwidth (unit: mbps). the default value is 0. if public network access is enabled, this field must be a positive integer above 0.
 * @method array getIpRules() Obtain Public network access allowlist. if left blank, it means deny all IP access.
 * @method void setIpRules(array $IpRules) Set Public network access allowlist. if left blank, it means deny all IP access.
 * @method integer getMessageRetention() Obtain Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
 * @method void setMessageRetention(integer $MessageRetention) Set Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
 * @method integer getPayMode() Obtain Payment mode (0: postpaid; 1: prepaid). the default value is 0.
 * @method void setPayMode(integer $PayMode) Set Payment mode (0: postpaid; 1: prepaid). the default value is 0.
 * @method integer getRenewFlag() Obtain Whether the prepaid cluster is automatically renewed (0: no auto-renewal; 1: auto-renewal). default value: 0.
 * @method void setRenewFlag(integer $RenewFlag) Set Whether the prepaid cluster is automatically renewed (0: no auto-renewal; 1: auto-renewal). default value: 0.
 * @method integer getTimeSpan() Obtain Specifies the purchase duration (unit: month) for a prepaid cluster. value range: 1–60. default value: 1.
 * @method void setTimeSpan(integer $TimeSpan) Set Specifies the purchase duration (unit: month) for a prepaid cluster. value range: 1–60. default value: 1.
 * @method integer getMaxTopicNum() Obtain Specifies the maximum number of topics that can be created. obtained from the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Default value and minimum value: specifies the TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
 * @method void setMaxTopicNum(integer $MaxTopicNum) Set Specifies the maximum number of topics that can be created. obtained from the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Default value and minimum value: specifies the TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
 * @method array getZoneIds() Obtain Deployment AZ list. obtain from the [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) data structure returned by the api [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1).
 * @method void setZoneIds(array $ZoneIds) Set Deployment AZ list. obtain from the [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) data structure returned by the api [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1).
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance type. valid values are as follows:.

-EXPERIMENT: specifies the trial version.

- BASIC: BASIC edition.

-PRO edition.

-PLATINUM: platinum version.
     */
    public $InstanceType;

    /**
     * @var string Cluster name. values cannot be empty. 3-64 characters, only comprised of digits, letters, "-", and "_".
     */
    public $Name;

    /**
     * @var string Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).
     */
    public $SkuCode;

    /**
     * @var array Specifies the VPC information bound to the cluster.
     */
    public $VpcList;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var array Tag list
     */
    public $TagList;

    /**
     * @var boolean Whether public network access is enabled. the default value of false means not enabled.
     */
    public $EnablePublic;

    /**
     * @var boolean Whether the public network is billed by traffic. the default value is false, which indicates that the public network is not billed by traffic.
     */
    public $BillingFlow;

    /**
     * @var integer Public network bandwidth (unit: mbps). the default value is 0. if public network access is enabled, this field must be a positive integer above 0.
     */
    public $Bandwidth;

    /**
     * @var array Public network access allowlist. if left blank, it means deny all IP access.
     */
    public $IpRules;

    /**
     * @var integer Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
     */
    public $MessageRetention;

    /**
     * @var integer Payment mode (0: postpaid; 1: prepaid). the default value is 0.
     */
    public $PayMode;

    /**
     * @var integer Whether the prepaid cluster is automatically renewed (0: no auto-renewal; 1: auto-renewal). default value: 0.
     */
    public $RenewFlag;

    /**
     * @var integer Specifies the purchase duration (unit: month) for a prepaid cluster. value range: 1–60. default value: 1.
     */
    public $TimeSpan;

    /**
     * @var integer Specifies the maximum number of topics that can be created. obtained from the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Default value and minimum value: specifies the TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
     */
    public $MaxTopicNum;

    /**
     * @var array Deployment AZ list. obtain from the [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) data structure returned by the api [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1).
     */
    public $ZoneIds;

    /**
     * @param string $InstanceType Instance type. valid values are as follows:.

-EXPERIMENT: specifies the trial version.

- BASIC: BASIC edition.

-PRO edition.

-PLATINUM: platinum version.
     * @param string $Name Cluster name. values cannot be empty. 3-64 characters, only comprised of digits, letters, "-", and "_".
     * @param string $SkuCode Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).
     * @param array $VpcList Specifies the VPC information bound to the cluster.
     * @param string $Remark Remarks
     * @param array $TagList Tag list
     * @param boolean $EnablePublic Whether public network access is enabled. the default value of false means not enabled.
     * @param boolean $BillingFlow Whether the public network is billed by traffic. the default value is false, which indicates that the public network is not billed by traffic.
     * @param integer $Bandwidth Public network bandwidth (unit: mbps). the default value is 0. if public network access is enabled, this field must be a positive integer above 0.
     * @param array $IpRules Public network access allowlist. if left blank, it means deny all IP access.
     * @param integer $MessageRetention Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
     * @param integer $PayMode Payment mode (0: postpaid; 1: prepaid). the default value is 0.
     * @param integer $RenewFlag Whether the prepaid cluster is automatically renewed (0: no auto-renewal; 1: auto-renewal). default value: 0.
     * @param integer $TimeSpan Specifies the purchase duration (unit: month) for a prepaid cluster. value range: 1–60. default value: 1.
     * @param integer $MaxTopicNum Specifies the maximum number of topics that can be created. obtained from the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.com/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Default value and minimum value: specifies the TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
     * @param array $ZoneIds Deployment AZ list. obtain from the [ZoneInfo](https://www.tencentcloud.com/document/api/1596/77932?from_cn_redirect=1#ZoneInfo) data structure returned by the api [DescribeZones](https://www.tencentcloud.com/document/product/1596/77929?from_cn_redirect=1).
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
