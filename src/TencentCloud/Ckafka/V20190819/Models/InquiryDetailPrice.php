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
 * Prices of different purchased items
 *
 * @method InquiryBasePrice getBandwidthPrice() Obtain Price of additional private network bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidthPrice(InquiryBasePrice $BandwidthPrice) Set Price of additional private network bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InquiryBasePrice getDiskPrice() Obtain Disk price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskPrice(InquiryBasePrice $DiskPrice) Set Disk price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InquiryBasePrice getPartitionPrice() Obtain Price of additional partitions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionPrice(InquiryBasePrice $PartitionPrice) Set Price of additional partitions
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InquiryBasePrice getTopicPrice() Obtain Price of additional topics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicPrice(InquiryBasePrice $TopicPrice) Set Price of additional topics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InquiryBasePrice getInstanceTypePrice() Obtain Instance package price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceTypePrice(InquiryBasePrice $InstanceTypePrice) Set Instance package price
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InquiryDetailPrice extends AbstractModel
{
    /**
     * @var InquiryBasePrice Price of additional private network bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BandwidthPrice;

    /**
     * @var InquiryBasePrice Disk price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskPrice;

    /**
     * @var InquiryBasePrice Price of additional partitions
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionPrice;

    /**
     * @var InquiryBasePrice Price of additional topics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicPrice;

    /**
     * @var InquiryBasePrice Instance package price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceTypePrice;

    /**
     * @param InquiryBasePrice $BandwidthPrice Price of additional private network bandwidth
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InquiryBasePrice $DiskPrice Disk price
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InquiryBasePrice $PartitionPrice Price of additional partitions
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InquiryBasePrice $TopicPrice Price of additional topics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InquiryBasePrice $InstanceTypePrice Instance package price
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
        if (array_key_exists("BandwidthPrice",$param) and $param["BandwidthPrice"] !== null) {
            $this->BandwidthPrice = new InquiryBasePrice();
            $this->BandwidthPrice->deserialize($param["BandwidthPrice"]);
        }

        if (array_key_exists("DiskPrice",$param) and $param["DiskPrice"] !== null) {
            $this->DiskPrice = new InquiryBasePrice();
            $this->DiskPrice->deserialize($param["DiskPrice"]);
        }

        if (array_key_exists("PartitionPrice",$param) and $param["PartitionPrice"] !== null) {
            $this->PartitionPrice = new InquiryBasePrice();
            $this->PartitionPrice->deserialize($param["PartitionPrice"]);
        }

        if (array_key_exists("TopicPrice",$param) and $param["TopicPrice"] !== null) {
            $this->TopicPrice = new InquiryBasePrice();
            $this->TopicPrice->deserialize($param["TopicPrice"]);
        }

        if (array_key_exists("InstanceTypePrice",$param) and $param["InstanceTypePrice"] !== null) {
            $this->InstanceTypePrice = new InquiryBasePrice();
            $this->InstanceTypePrice->deserialize($param["InstanceTypePrice"]);
        }
    }
}
