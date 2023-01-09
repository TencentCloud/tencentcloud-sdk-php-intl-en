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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquireCkafkaPrice request structure.
 *
 * @method string getInstanceType() Obtain `standard`: Standard Edition; `profession`: Pro Edition
 * @method void setInstanceType(string $InstanceType) Set `standard`: Standard Edition; `profession`: Pro Edition
 * @method InstanceChargeParam getInstanceChargeParam() Obtain Billing mode for instance purchase/renewal. If this parameter is left empty when you purchase an instance, the fees for one month under the monthly subscription mode will be displayed by default.
 * @method void setInstanceChargeParam(InstanceChargeParam $InstanceChargeParam) Set Billing mode for instance purchase/renewal. If this parameter is left empty when you purchase an instance, the fees for one month under the monthly subscription mode will be displayed by default.
 * @method integer getInstanceNum() Obtain The number of instances to be purchased or renewed. If this parameter is left empty, the default value is `1`.
 * @method void setInstanceNum(integer $InstanceNum) Set The number of instances to be purchased or renewed. If this parameter is left empty, the default value is `1`.
 * @method integer getBandwidth() Obtain Private network bandwidth in MB/sec, which is required when you purchase an instance.
 * @method void setBandwidth(integer $Bandwidth) Set Private network bandwidth in MB/sec, which is required when you purchase an instance.
 * @method InquiryDiskParam getInquiryDiskParam() Obtain Disk type and size, which is required when you purchase an instance.
 * @method void setInquiryDiskParam(InquiryDiskParam $InquiryDiskParam) Set Disk type and size, which is required when you purchase an instance.
 * @method integer getMessageRetention() Obtain Message retention period in hours, which is required when you purchase an instance.
 * @method void setMessageRetention(integer $MessageRetention) Set Message retention period in hours, which is required when you purchase an instance.
 * @method integer getTopic() Obtain The number of instance topics to be purchased, which is required when you purchase an instance.
 * @method void setTopic(integer $Topic) Set The number of instance topics to be purchased, which is required when you purchase an instance.
 * @method integer getPartition() Obtain The number of instance partitions to be purchased, which is required when you purchase an instance.
 * @method void setPartition(integer $Partition) Set The number of instance partitions to be purchased, which is required when you purchase an instance.
 * @method array getZoneIds() Obtain The region for instance purchase, which can be obtained via the `DescribeCkafkaZone` API.
 * @method void setZoneIds(array $ZoneIds) Set The region for instance purchase, which can be obtained via the `DescribeCkafkaZone` API.
 * @method string getCategoryAction() Obtain Operation type flag. `purchase`: Making new purchases; `renew`: Renewing an instance. The default value is `purchase` if this parameter is left empty.
 * @method void setCategoryAction(string $CategoryAction) Set Operation type flag. `purchase`: Making new purchases; `renew`: Renewing an instance. The default value is `purchase` if this parameter is left empty.
 * @method string getBillType() Obtain This field is not required.
 * @method void setBillType(string $BillType) Set This field is not required.
 * @method InquiryPublicNetworkParam getPublicNetworkParam() Obtain Billing mode for public network bandwidth, which is required when you purchase public network bandwidth. Currently, public network bandwidth is only supported for Pro Edition.
 * @method void setPublicNetworkParam(InquiryPublicNetworkParam $PublicNetworkParam) Set Billing mode for public network bandwidth, which is required when you purchase public network bandwidth. Currently, public network bandwidth is only supported for Pro Edition.
 * @method string getInstanceId() Obtain ID of the instance to be renewed, which is required when you renew an instance.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be renewed, which is required when you renew an instance.
 */
class InquireCkafkaPriceRequest extends AbstractModel
{
    /**
     * @var string `standard`: Standard Edition; `profession`: Pro Edition
     */
    public $InstanceType;

    /**
     * @var InstanceChargeParam Billing mode for instance purchase/renewal. If this parameter is left empty when you purchase an instance, the fees for one month under the monthly subscription mode will be displayed by default.
     */
    public $InstanceChargeParam;

    /**
     * @var integer The number of instances to be purchased or renewed. If this parameter is left empty, the default value is `1`.
     */
    public $InstanceNum;

    /**
     * @var integer Private network bandwidth in MB/sec, which is required when you purchase an instance.
     */
    public $Bandwidth;

    /**
     * @var InquiryDiskParam Disk type and size, which is required when you purchase an instance.
     */
    public $InquiryDiskParam;

    /**
     * @var integer Message retention period in hours, which is required when you purchase an instance.
     */
    public $MessageRetention;

    /**
     * @var integer The number of instance topics to be purchased, which is required when you purchase an instance.
     */
    public $Topic;

    /**
     * @var integer The number of instance partitions to be purchased, which is required when you purchase an instance.
     */
    public $Partition;

    /**
     * @var array The region for instance purchase, which can be obtained via the `DescribeCkafkaZone` API.
     */
    public $ZoneIds;

    /**
     * @var string Operation type flag. `purchase`: Making new purchases; `renew`: Renewing an instance. The default value is `purchase` if this parameter is left empty.
     */
    public $CategoryAction;

    /**
     * @var string This field is not required.
     */
    public $BillType;

    /**
     * @var InquiryPublicNetworkParam Billing mode for public network bandwidth, which is required when you purchase public network bandwidth. Currently, public network bandwidth is only supported for Pro Edition.
     */
    public $PublicNetworkParam;

    /**
     * @var string ID of the instance to be renewed, which is required when you renew an instance.
     */
    public $InstanceId;

    /**
     * @param string $InstanceType `standard`: Standard Edition; `profession`: Pro Edition
     * @param InstanceChargeParam $InstanceChargeParam Billing mode for instance purchase/renewal. If this parameter is left empty when you purchase an instance, the fees for one month under the monthly subscription mode will be displayed by default.
     * @param integer $InstanceNum The number of instances to be purchased or renewed. If this parameter is left empty, the default value is `1`.
     * @param integer $Bandwidth Private network bandwidth in MB/sec, which is required when you purchase an instance.
     * @param InquiryDiskParam $InquiryDiskParam Disk type and size, which is required when you purchase an instance.
     * @param integer $MessageRetention Message retention period in hours, which is required when you purchase an instance.
     * @param integer $Topic The number of instance topics to be purchased, which is required when you purchase an instance.
     * @param integer $Partition The number of instance partitions to be purchased, which is required when you purchase an instance.
     * @param array $ZoneIds The region for instance purchase, which can be obtained via the `DescribeCkafkaZone` API.
     * @param string $CategoryAction Operation type flag. `purchase`: Making new purchases; `renew`: Renewing an instance. The default value is `purchase` if this parameter is left empty.
     * @param string $BillType This field is not required.
     * @param InquiryPublicNetworkParam $PublicNetworkParam Billing mode for public network bandwidth, which is required when you purchase public network bandwidth. Currently, public network bandwidth is only supported for Pro Edition.
     * @param string $InstanceId ID of the instance to be renewed, which is required when you renew an instance.
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

        if (array_key_exists("InstanceChargeParam",$param) and $param["InstanceChargeParam"] !== null) {
            $this->InstanceChargeParam = new InstanceChargeParam();
            $this->InstanceChargeParam->deserialize($param["InstanceChargeParam"]);
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("InquiryDiskParam",$param) and $param["InquiryDiskParam"] !== null) {
            $this->InquiryDiskParam = new InquiryDiskParam();
            $this->InquiryDiskParam->deserialize($param["InquiryDiskParam"]);
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("CategoryAction",$param) and $param["CategoryAction"] !== null) {
            $this->CategoryAction = $param["CategoryAction"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("PublicNetworkParam",$param) and $param["PublicNetworkParam"] !== null) {
            $this->PublicNetworkParam = new InquiryPublicNetworkParam();
            $this->PublicNetworkParam->deserialize($param["PublicNetworkParam"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
