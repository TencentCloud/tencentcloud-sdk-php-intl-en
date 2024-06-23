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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event Consumption Record
 *
 * @method string getConsumeLogId() Obtain Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setConsumeLogId(string $ConsumeLogId) Set Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventCaseId() Obtain Event Case ID\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventCaseId(string $EventCaseId) Set Event Case ID\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getConsumerId() Obtain Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setConsumerId(string $ConsumerId) Set Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreationTimestamp() Obtain Consumption Timestamp\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreationTimestamp(string $CreationTimestamp) Set Consumption Timestamp\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method TaskOpsDto getConsumerDetail() Obtain Task DetailsNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setConsumerDetail(TaskOpsDto $ConsumerDetail) Set Task DetailsNote: This field may return null, indicating that no valid value can be obtained.
 */
class EventCaseConsumeLogOptDto extends AbstractModel
{
    /**
     * @var string Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConsumeLogId;

    /**
     * @var string Event Case ID\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventCaseId;

    /**
     * @var string Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConsumerId;

    /**
     * @var string Consumption Timestamp\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreationTimestamp;

    /**
     * @var TaskOpsDto Task DetailsNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ConsumerDetail;

    /**
     * @param string $ConsumeLogId Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventCaseId Event Case ID\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ConsumerId Consumer ID\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreationTimestamp Consumption Timestamp\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param TaskOpsDto $ConsumerDetail Task DetailsNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ConsumeLogId",$param) and $param["ConsumeLogId"] !== null) {
            $this->ConsumeLogId = $param["ConsumeLogId"];
        }

        if (array_key_exists("EventCaseId",$param) and $param["EventCaseId"] !== null) {
            $this->EventCaseId = $param["EventCaseId"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }

        if (array_key_exists("ConsumerDetail",$param) and $param["ConsumerDetail"] !== null) {
            $this->ConsumerDetail = new TaskOpsDto();
            $this->ConsumerDetail->deserialize($param["ConsumerDetail"]);
        }
    }
}
