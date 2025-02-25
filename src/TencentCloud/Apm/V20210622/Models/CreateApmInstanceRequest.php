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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApmInstance request structure.
 *
 * @method string getName() Obtain Business system name.
 * @method void setName(string $Name) Set Business system name.
 * @method string getDescription() Obtain Business system description information.
 * @method void setDescription(string $Description) Set Business system description information.
 * @method integer getTraceDuration() Obtain Retention period of trace data (unit: days, the default storage duration is 3 days).
 * @method void setTraceDuration(integer $TraceDuration) Set Retention period of trace data (unit: days, the default storage duration is 3 days).
 * @method array getTags() Obtain Business system tag list.
 * @method void setTags(array $Tags) Set Business system tag list.
 * @method integer getSpanDailyCounters() Obtain The report quota value of the business system. the default value is 0, indicating no limit on the report quota. (obsolete).
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) Set The report quota value of the business system. the default value is 0, indicating no limit on the report quota. (obsolete).
 * @method integer getPayMode() Obtain Billing model of the business system (0: pay-as-you-go, 1: prepaid).
 * @method void setPayMode(integer $PayMode) Set Billing model of the business system (0: pay-as-you-go, 1: prepaid).
 * @method integer getFree() Obtain Whether it is a free edition business system (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition).
 * @method void setFree(integer $Free) Set Whether it is a free edition business system (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition).
 */
class CreateApmInstanceRequest extends AbstractModel
{
    /**
     * @var string Business system name.
     */
    public $Name;

    /**
     * @var string Business system description information.
     */
    public $Description;

    /**
     * @var integer Retention period of trace data (unit: days, the default storage duration is 3 days).
     */
    public $TraceDuration;

    /**
     * @var array Business system tag list.
     */
    public $Tags;

    /**
     * @var integer The report quota value of the business system. the default value is 0, indicating no limit on the report quota. (obsolete).
     */
    public $SpanDailyCounters;

    /**
     * @var integer Billing model of the business system (0: pay-as-you-go, 1: prepaid).
     */
    public $PayMode;

    /**
     * @var integer Whether it is a free edition business system (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition).
     */
    public $Free;

    /**
     * @param string $Name Business system name.
     * @param string $Description Business system description information.
     * @param integer $TraceDuration Retention period of trace data (unit: days, the default storage duration is 3 days).
     * @param array $Tags Business system tag list.
     * @param integer $SpanDailyCounters The report quota value of the business system. the default value is 0, indicating no limit on the report quota. (obsolete).
     * @param integer $PayMode Billing model of the business system (0: pay-as-you-go, 1: prepaid).
     * @param integer $Free Whether it is a free edition business system (0 = paid edition; 1 = tsf restricted free edition; 2 = free edition).
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }
    }
}
