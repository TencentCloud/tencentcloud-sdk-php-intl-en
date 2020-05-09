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
 * Output parameter type of the DescribeAccidentEventList API
 *
 * @method string getBusinessTypeDesc() Obtain Event type.
Note: This field may return null, indicating that no valid value was found.
 * @method void setBusinessTypeDesc(string $BusinessTypeDesc) Set Event type.
Note: This field may return null, indicating that no valid value was found.
 * @method string getAccidentTypeDesc() Obtain Event type.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAccidentTypeDesc(string $AccidentTypeDesc) Set Event type.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getBusinessID() Obtain ID of the event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
Note: This field may return null, indicating that no valid value was found.
 * @method void setBusinessID(integer $BusinessID) Set ID of the event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getEventStatus() Obtain Event status ID. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
Note: This field may return null, indicating that no valid value was found.
 * @method void setEventStatus(integer $EventStatus) Set Event status ID. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
Note: This field may return null, indicating that no valid value was found.
 * @method string getAffectResource() Obtain Affected object.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAffectResource(string $AffectResource) Set Affected object.
Note: This field may return null, indicating that no valid value was found.
 * @method string getRegion() Obtain Region where the event occurs.
Note: This field may return null, indicating that no valid value was found.
 * @method void setRegion(string $Region) Set Region where the event occurs.
Note: This field may return null, indicating that no valid value was found.
 * @method string getOccurTime() Obtain Time when the event occurs.
Note: This field may return null, indicating that no valid value was found.
 * @method void setOccurTime(string $OccurTime) Set Time when the event occurs.
Note: This field may return null, indicating that no valid value was found.
 * @method string getUpdateTime() Obtain Update time.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribeAccidentEventListAlarms extends AbstractModel
{
    /**
     * @var string Event type.
Note: This field may return null, indicating that no valid value was found.
     */
    public $BusinessTypeDesc;

    /**
     * @var string Event type.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AccidentTypeDesc;

    /**
     * @var integer ID of the event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
Note: This field may return null, indicating that no valid value was found.
     */
    public $BusinessID;

    /**
     * @var integer Event status ID. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
Note: This field may return null, indicating that no valid value was found.
     */
    public $EventStatus;

    /**
     * @var string Affected object.
Note: This field may return null, indicating that no valid value was found.
     */
    public $AffectResource;

    /**
     * @var string Region where the event occurs.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Region;

    /**
     * @var string Time when the event occurs.
Note: This field may return null, indicating that no valid value was found.
     */
    public $OccurTime;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UpdateTime;

    /**
     * @param string $BusinessTypeDesc Event type.
Note: This field may return null, indicating that no valid value was found.
     * @param string $AccidentTypeDesc Event type.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $BusinessID ID of the event type. The value 1 indicates service issues. The value 2 indicates other subscriptions.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $EventStatus Event status ID. The value 0 indicates that the event has been recovered. The value 1 indicates that the event has not been recovered.
Note: This field may return null, indicating that no valid value was found.
     * @param string $AffectResource Affected object.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Region Region where the event occurs.
Note: This field may return null, indicating that no valid value was found.
     * @param string $OccurTime Time when the event occurs.
Note: This field may return null, indicating that no valid value was found.
     * @param string $UpdateTime Update time.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("BusinessTypeDesc",$param) and $param["BusinessTypeDesc"] !== null) {
            $this->BusinessTypeDesc = $param["BusinessTypeDesc"];
        }

        if (array_key_exists("AccidentTypeDesc",$param) and $param["AccidentTypeDesc"] !== null) {
            $this->AccidentTypeDesc = $param["AccidentTypeDesc"];
        }

        if (array_key_exists("BusinessID",$param) and $param["BusinessID"] !== null) {
            $this->BusinessID = $param["BusinessID"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("AffectResource",$param) and $param["AffectResource"] !== null) {
            $this->AffectResource = $param["AffectResource"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("OccurTime",$param) and $param["OccurTime"] !== null) {
            $this->OccurTime = $param["OccurTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
