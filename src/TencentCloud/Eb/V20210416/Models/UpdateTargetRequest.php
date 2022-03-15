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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateTarget request structure.
 *
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getRuleId() Obtain Event rule ID
 * @method void setRuleId(string $RuleId) Set Event rule ID
 * @method string getTargetId() Obtain Delivery target ID
 * @method void setTargetId(string $TargetId) Set Delivery target ID
 * @method boolean getEnableBatchDelivery() Obtain Enables batch delivery
 * @method void setEnableBatchDelivery(boolean $EnableBatchDelivery) Set Enables batch delivery
 * @method integer getBatchTimeout() Obtain Maximum waiting time for batch delivery
 * @method void setBatchTimeout(integer $BatchTimeout) Set Maximum waiting time for batch delivery
 * @method integer getBatchEventCount() Obtain Maximum number of events in batch delivery
 * @method void setBatchEventCount(integer $BatchEventCount) Set Maximum number of events in batch delivery
 */
class UpdateTargetRequest extends AbstractModel
{
    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Event rule ID
     */
    public $RuleId;

    /**
     * @var string Delivery target ID
     */
    public $TargetId;

    /**
     * @var boolean Enables batch delivery
     */
    public $EnableBatchDelivery;

    /**
     * @var integer Maximum waiting time for batch delivery
     */
    public $BatchTimeout;

    /**
     * @var integer Maximum number of events in batch delivery
     */
    public $BatchEventCount;

    /**
     * @param string $EventBusId Event bus ID
     * @param string $RuleId Event rule ID
     * @param string $TargetId Delivery target ID
     * @param boolean $EnableBatchDelivery Enables batch delivery
     * @param integer $BatchTimeout Maximum waiting time for batch delivery
     * @param integer $BatchEventCount Maximum number of events in batch delivery
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("EnableBatchDelivery",$param) and $param["EnableBatchDelivery"] !== null) {
            $this->EnableBatchDelivery = $param["EnableBatchDelivery"];
        }

        if (array_key_exists("BatchTimeout",$param) and $param["BatchTimeout"] !== null) {
            $this->BatchTimeout = $param["BatchTimeout"];
        }

        if (array_key_exists("BatchEventCount",$param) and $param["BatchEventCount"] !== null) {
            $this->BatchEventCount = $param["BatchEventCount"];
        }
    }
}
