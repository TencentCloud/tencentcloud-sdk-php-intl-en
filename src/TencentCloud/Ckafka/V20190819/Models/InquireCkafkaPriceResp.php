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
 * Values returned by the `InquireCkafkaPrice` API
 *
 * @method InquiryPrice getInstancePrice() Obtain Instance price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstancePrice(InquiryPrice $InstancePrice) Set Instance price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InquiryPrice getPublicNetworkBandwidthPrice() Obtain Public network bandwidth price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicNetworkBandwidthPrice(InquiryPrice $PublicNetworkBandwidthPrice) Set Public network bandwidth price
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InquireCkafkaPriceResp extends AbstractModel
{
    /**
     * @var InquiryPrice Instance price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstancePrice;

    /**
     * @var InquiryPrice Public network bandwidth price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicNetworkBandwidthPrice;

    /**
     * @param InquiryPrice $InstancePrice Instance price
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InquiryPrice $PublicNetworkBandwidthPrice Public network bandwidth price
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
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new InquiryPrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("PublicNetworkBandwidthPrice",$param) and $param["PublicNetworkBandwidthPrice"] !== null) {
            $this->PublicNetworkBandwidthPrice = new InquiryPrice();
            $this->PublicNetworkBandwidthPrice->deserialize($param["PublicNetworkBandwidthPrice"]);
        }
    }
}
