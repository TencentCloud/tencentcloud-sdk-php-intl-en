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
 * DescribeConsumerClient request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getClientId() Obtain Client ID. It can be obtained from the output parameters of [ConsumerClient](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumerClient) of the API [DescribeConsumerClientList](https://www.tencentcloud.comom/document/api/1493/120140?from_cn_redirect=1).
 * @method void setClientId(string $ClientId) Set Client ID. It can be obtained from the output parameters of [ConsumerClient](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumerClient) of the API [DescribeConsumerClientList](https://www.tencentcloud.comom/document/api/1493/120140?from_cn_redirect=1).
 * @method array getFilters() Obtain Filtering condition list. See the description of the API using this parameter for the usage method.
 * @method void setFilters(array $Filters) Set Filtering condition list. See the description of the API using this parameter for the usage method.
 * @method integer getOffset() Obtain Starting position of the query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting position of the query. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of queried results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of queried results. Default value: 20.
 * @method string getConsumerGroup() Obtain Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
 * @method void setConsumerGroup(string $ConsumerGroup) Set Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
 */
class DescribeConsumerClientRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Client ID. It can be obtained from the output parameters of [ConsumerClient](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumerClient) of the API [DescribeConsumerClientList](https://www.tencentcloud.comom/document/api/1493/120140?from_cn_redirect=1).
     */
    public $ClientId;

    /**
     * @var array Filtering condition list. See the description of the API using this parameter for the usage method.
     */
    public $Filters;

    /**
     * @var integer Starting position of the query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of queried results. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
     */
    public $ConsumerGroup;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.comom/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $ClientId Client ID. It can be obtained from the output parameters of [ConsumerClient](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumerClient) of the API [DescribeConsumerClientList](https://www.tencentcloud.comom/document/api/1493/120140?from_cn_redirect=1).
     * @param array $Filters Filtering condition list. See the description of the API using this parameter for the usage method.
     * @param integer $Offset Starting position of the query. Default value: 0.
     * @param integer $Limit Maximum number of queried results. Default value: 20.
     * @param string $ConsumerGroup Consumer group name. It can be obtained from [ConsumeGroupItem](https://www.tencentcloud.comom/document/api/1493/96031?from_cn_redirect=1#ConsumeGroupItem) returned by the API [DescribeConsumerGroupList](https://www.tencentcloud.comom/document/api/1493/101535?from_cn_redirect=1) or from the console.
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

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }
    }
}
