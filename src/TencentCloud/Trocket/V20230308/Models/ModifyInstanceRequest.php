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
 * ModifyInstance request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getName() Obtain Instance name. It cannot be left blank. It can contain 3 to 64 characters consisting of only digits, letters, hyphens (-), and underscores (_).
 * @method void setName(string $Name) Set Instance name. It cannot be left blank. It can contain 3 to 64 characters consisting of only digits, letters, hyphens (-), and underscores (_).
 * @method string getRemark() Obtain Remarks. Up to 128 characters are allowed.
 * @method void setRemark(string $Remark) Set Remarks. Up to 128 characters are allowed.
 * @method float getSendReceiveRatio() Obtain Message sending and receiving ratio
 * @method void setSendReceiveRatio(float $SendReceiveRatio) Set Message sending and receiving ratio
 * @method string getSkuCode() Obtain Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
 * @method void setSkuCode(string $SkuCode) Set Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
 * @method integer getMessageRetention() Obtain Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
 * @method void setMessageRetention(integer $MessageRetention) Set Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
 * @method boolean getScaledTpsEnabled() Obtain Whether to enable elastic TPS.
 * @method void setScaledTpsEnabled(boolean $ScaledTpsEnabled) Set Whether to enable elastic TPS.
 * @method boolean getAclEnabled() Obtain Whether ACL is enabled.
 * @method void setAclEnabled(boolean $AclEnabled) Set Whether ACL is enabled.
 * @method integer getMaxTopicNum() Obtain The maximum number of topics that can be created. value ranges from...to... refer to the ProductSKU output parameter in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Minimum value and default value: TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
 * @method void setMaxTopicNum(integer $MaxTopicNum) Set The maximum number of topics that can be created. value ranges from...to... refer to the ProductSKU output parameter in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Minimum value and default value: TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
 * @method string getExtraTopicNum() Obtain Number of topics not included in the free quota. For the free quota, see the TopicNumLimit parameter in the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
 * @method void setExtraTopicNum(string $ExtraTopicNum) Set Number of topics not included in the free quota. For the free quota, see the TopicNumLimit parameter in the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
 * @method boolean getEnableDeletionProtection() Obtain Whether to enable deletion protection
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) Set Whether to enable deletion protection
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Instance name. It cannot be left blank. It can contain 3 to 64 characters consisting of only digits, letters, hyphens (-), and underscores (_).
     */
    public $Name;

    /**
     * @var string Remarks. Up to 128 characters are allowed.
     */
    public $Remark;

    /**
     * @var float Message sending and receiving ratio
     */
    public $SendReceiveRatio;

    /**
     * @var string Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
     */
    public $SkuCode;

    /**
     * @var integer Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
     */
    public $MessageRetention;

    /**
     * @var boolean Whether to enable elastic TPS.
     */
    public $ScaledTpsEnabled;

    /**
     * @var boolean Whether ACL is enabled.
     */
    public $AclEnabled;

    /**
     * @var integer The maximum number of topics that can be created. value ranges from...to... refer to the ProductSKU output parameter in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Minimum value and default value: TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
     */
    public $MaxTopicNum;

    /**
     * @var string Number of topics not included in the free quota. For the free quota, see the TopicNumLimit parameter in the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
     */
    public $ExtraTopicNum;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $EnableDeletionProtection;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $Name Instance name. It cannot be left blank. It can contain 3 to 64 characters consisting of only digits, letters, hyphens (-), and underscores (_).
     * @param string $Remark Remarks. Up to 128 characters are allowed.
     * @param float $SendReceiveRatio Message sending and receiving ratio
     * @param string $SkuCode Product specification. It can be obtained from the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
     * @param integer $MessageRetention Message retention time (unit: hr). value range refers to the ProductSKU response parameters structure in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).

-Default value: DefaultRetention parameter.
-Minimum value: specifies the RetentionLowerLimit parameter.
-Specifies the maximum value of the RetentionUpperLimit parameter.
     * @param boolean $ScaledTpsEnabled Whether to enable elastic TPS.
     * @param boolean $AclEnabled Whether ACL is enabled.
     * @param integer $MaxTopicNum The maximum number of topics that can be created. value ranges from...to... refer to the ProductSKU output parameter in the DescribeProductSKUs api (https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1) (https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU).

-Minimum value and default value: TopicNumLimit parameter.
-Maximum value of TopicNumUpperLimit parameter.
     * @param string $ExtraTopicNum Number of topics not included in the free quota. For the free quota, see the TopicNumLimit parameter in the output parameters of [ProductSKU](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ProductSKU) of the API [DescribeProductSKUs](https://www.tencentcloud.comom/document/api/1493/107676?from_cn_redirect=1).
     * @param boolean $EnableDeletionProtection Whether to enable deletion protection
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("ScaledTpsEnabled",$param) and $param["ScaledTpsEnabled"] !== null) {
            $this->ScaledTpsEnabled = $param["ScaledTpsEnabled"];
        }

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("ExtraTopicNum",$param) and $param["ExtraTopicNum"] !== null) {
            $this->ExtraTopicNum = $param["ExtraTopicNum"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
