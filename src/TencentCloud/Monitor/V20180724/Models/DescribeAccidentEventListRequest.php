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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccidentEventList request structure.
 *
 * @method string getModule() Obtain API component name. The value for the current API is monitor.
 * @method void setModule(string $Module) Set API component name. The value for the current API is monitor.
 * @method integer getStartTime() Obtain Start time, which is the timestamp one day prior by default.
 * @method void setStartTime(integer $StartTime) Set Start time, which is the timestamp one day prior by default.
 * @method integer getEndTime() Obtain End time, which is the current timestamp by default.
 * @method void setEndTime(integer $EndTime) Set End time, which is the current timestamp by default.
 * @method integer getLimit() Obtain Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
 * @method integer getOffset() Obtain Parameter offset on each page. The value starts from 0 and the default value is 0.
 * @method void setOffset(integer $Offset) Set Parameter offset on each page. The value starts from 0 and the default value is 0.
 * @method string getUpdateTimeOrder() Obtain Sorting rule by UpdateTime. Valid values: asc and desc.
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) Set Sorting rule by UpdateTime. Valid values: asc and desc.
 * @method string getOccurTimeOrder() Obtain Sorting rule by OccurTime. Valid values: asc or desc. Sorting by UpdateTimeOrder takes priority.
 * @method void setOccurTimeOrder(string $OccurTimeOrder) Set Sorting rule by OccurTime. Valid values: asc or desc. Sorting by UpdateTimeOrder takes priority.
 * @method array getAccidentType() Obtain Filter by event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
 * @method void setAccidentType(array $AccidentType) Set Filter by event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
 * @method array getAccidentEvent() Obtain Filter by event. The value 1 indicates CVM storage issues. The value 2 indicates CVM network connection issues. The value 3 indicates that the CVM has an exception. The value 202 indicates that an ISP network jitter occurs.
 * @method void setAccidentEvent(array $AccidentEvent) Set Filter by event. The value 1 indicates CVM storage issues. The value 2 indicates CVM network connection issues. The value 3 indicates that the CVM has an exception. The value 202 indicates that an ISP network jitter occurs.
 * @method array getAccidentStatus() Obtain Filter by event status. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
 * @method void setAccidentStatus(array $AccidentStatus) Set Filter by event status. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
 * @method array getAccidentRegion() Obtain Filter by region where the event occurs. The value gz indicates Guangzhou. The value sh indicates Shanghai.
 * @method void setAccidentRegion(array $AccidentRegion) Set Filter by region where the event occurs. The value gz indicates Guangzhou. The value sh indicates Shanghai.
 * @method string getAffectResource() Obtain Filter by affected resource, such as ins-19a06bka.
 * @method void setAffectResource(string $AffectResource) Set Filter by affected resource, such as ins-19a06bka.
 */
class DescribeAccidentEventListRequest extends AbstractModel
{
    /**
     * @var string API component name. The value for the current API is monitor.
     */
    public $Module;

    /**
     * @var integer Start time, which is the timestamp one day prior by default.
     */
    public $StartTime;

    /**
     * @var integer End time, which is the current timestamp by default.
     */
    public $EndTime;

    /**
     * @var integer Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
     */
    public $Limit;

    /**
     * @var integer Parameter offset on each page. The value starts from 0 and the default value is 0.
     */
    public $Offset;

    /**
     * @var string Sorting rule by UpdateTime. Valid values: asc and desc.
     */
    public $UpdateTimeOrder;

    /**
     * @var string Sorting rule by OccurTime. Valid values: asc or desc. Sorting by UpdateTimeOrder takes priority.
     */
    public $OccurTimeOrder;

    /**
     * @var array Filter by event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
     */
    public $AccidentType;

    /**
     * @var array Filter by event. The value 1 indicates CVM storage issues. The value 2 indicates CVM network connection issues. The value 3 indicates that the CVM has an exception. The value 202 indicates that an ISP network jitter occurs.
     */
    public $AccidentEvent;

    /**
     * @var array Filter by event status. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
     */
    public $AccidentStatus;

    /**
     * @var array Filter by region where the event occurs. The value gz indicates Guangzhou. The value sh indicates Shanghai.
     */
    public $AccidentRegion;

    /**
     * @var string Filter by affected resource, such as ins-19a06bka.
     */
    public $AffectResource;

    /**
     * @param string $Module API component name. The value for the current API is monitor.
     * @param integer $StartTime Start time, which is the timestamp one day prior by default.
     * @param integer $EndTime End time, which is the current timestamp by default.
     * @param integer $Limit Number of parameters that can be returned on each page. Value range: 1 - 100. Default value: 20.
     * @param integer $Offset Parameter offset on each page. The value starts from 0 and the default value is 0.
     * @param string $UpdateTimeOrder Sorting rule by UpdateTime. Valid values: asc and desc.
     * @param string $OccurTimeOrder Sorting rule by OccurTime. Valid values: asc or desc. Sorting by UpdateTimeOrder takes priority.
     * @param array $AccidentType Filter by event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
     * @param array $AccidentEvent Filter by event. The value 1 indicates CVM storage issues. The value 2 indicates CVM network connection issues. The value 3 indicates that the CVM has an exception. The value 202 indicates that an ISP network jitter occurs.
     * @param array $AccidentStatus Filter by event status. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
     * @param array $AccidentRegion Filter by region where the event occurs. The value gz indicates Guangzhou. The value sh indicates Shanghai.
     * @param string $AffectResource Filter by affected resource, such as ins-19a06bka.
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("OccurTimeOrder",$param) and $param["OccurTimeOrder"] !== null) {
            $this->OccurTimeOrder = $param["OccurTimeOrder"];
        }

        if (array_key_exists("AccidentType",$param) and $param["AccidentType"] !== null) {
            $this->AccidentType = $param["AccidentType"];
        }

        if (array_key_exists("AccidentEvent",$param) and $param["AccidentEvent"] !== null) {
            $this->AccidentEvent = $param["AccidentEvent"];
        }

        if (array_key_exists("AccidentStatus",$param) and $param["AccidentStatus"] !== null) {
            $this->AccidentStatus = $param["AccidentStatus"];
        }

        if (array_key_exists("AccidentRegion",$param) and $param["AccidentRegion"] !== null) {
            $this->AccidentRegion = $param["AccidentRegion"];
        }

        if (array_key_exists("AffectResource",$param) and $param["AffectResource"] !== null) {
            $this->AffectResource = $param["AffectResource"];
        }
    }
}
