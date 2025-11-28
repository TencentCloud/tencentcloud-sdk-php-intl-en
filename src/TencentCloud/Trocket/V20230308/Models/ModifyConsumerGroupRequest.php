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
 * ModifyConsumerGroup request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getConsumerGroup() Obtain Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method boolean getConsumeEnable() Obtain Whether to enable consumption.
 * @method void setConsumeEnable(boolean $ConsumeEnable) Set Whether to enable consumption.
 * @method boolean getConsumeMessageOrderly() Obtain Specifies whether to use ordered delivery. valid values: true.
Concurrent delivery: false.
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) Set Specifies whether to use ordered delivery. valid values: true.
Concurrent delivery: false.
 * @method integer getMaxRetryTimes() Obtain Maximum number of retries. Value range: 0 to 1000.
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) Set Maximum number of retries. Value range: 0 to 1000.
 * @method string getRemark() Obtain Remarks. Up to 128 characters are allowed.
 * @method void setRemark(string $Remark) Set Remarks. Up to 128 characters are allowed.
 */
class ModifyConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
     */
    public $ConsumerGroup;

    /**
     * @var boolean Whether to enable consumption.
     */
    public $ConsumeEnable;

    /**
     * @var boolean Specifies whether to use ordered delivery. valid values: true.
Concurrent delivery: false.
     */
    public $ConsumeMessageOrderly;

    /**
     * @var integer Maximum number of retries. Value range: 0 to 1000.
     */
    public $MaxRetryTimes;

    /**
     * @var string Remarks. Up to 128 characters are allowed.
     */
    public $Remark;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $ConsumerGroup Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
     * @param boolean $ConsumeEnable Whether to enable consumption.
     * @param boolean $ConsumeMessageOrderly Specifies whether to use ordered delivery. valid values: true.
Concurrent delivery: false.
     * @param integer $MaxRetryTimes Maximum number of retries. Value range: 0 to 1000.
     * @param string $Remark Remarks. Up to 128 characters are allowed.
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

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
