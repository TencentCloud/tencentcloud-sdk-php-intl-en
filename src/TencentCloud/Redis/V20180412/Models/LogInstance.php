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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getStatus() Obtain <p>Log status, create: creating; normal: enabled; close: turning off.</p>
 * @method void setStatus(string $Status) Set <p>Log status, create: creating; normal: enabled; close: turning off.</p>
 * @method string getEnableQuery() Obtain <p>Is it possible to switch log query - Value: yes - allowed, no - not allowed. This parameter mainly controls migration of existing logs to the log platform for query usage. Only when the status is yes can you call the log API.</p>
 * @method void setEnableQuery(string $EnableQuery) Set <p>Is it possible to switch log query - Value: yes - allowed, no - not allowed. This parameter mainly controls migration of existing logs to the log platform for query usage. Only when the status is yes can you call the log API.</p>
 * @method string getCreateAt() Obtain <p>Start time</p>
 * @method void setCreateAt(string $CreateAt) Set <p>Start time</p>
 * @method integer getHighLogExpireDay() Obtain <p>High frequency storage days</p>
 * @method void setHighLogExpireDay(integer $HighLogExpireDay) Set <p>High frequency storage days</p>
 * @method integer getLowLogExpireDay() Obtain <p>Infrequent storage days</p>
 * @method void setLowLogExpireDay(integer $LowLogExpireDay) Set <p>Infrequent storage days</p>
 * @method integer getLogExpireDay() Obtain <p>Total storage duration</p>
 * @method void setLogExpireDay(integer $LogExpireDay) Set <p>Total storage duration</p>
 * @method float getHighStorage() Obtain <p>High-frequency storage volume (in MB)</p>
 * @method void setHighStorage(float $HighStorage) Set <p>High-frequency storage volume (in MB)</p>
 * @method float getLowStorage() Obtain <p>Infrequent access storage, unit: MB</p>
 * @method void setLowStorage(float $LowStorage) Set <p>Infrequent access storage, unit: MB</p>
 * @method float getLogStorage() Obtain <p>Total storage</p>
 * @method void setLogStorage(float $LogStorage) Set <p>Total storage</p>
 * @method string getDeliver() Obtain <p>Whether to enable delivery: ON, OFF</p>
 * @method void setDeliver(string $Deliver) Set <p>Whether to enable delivery: ON, OFF</p>
 * @method array getDeliverSummary() Obtain <p>Log shipping information</p>
 * @method void setDeliverSummary(array $DeliverSummary) Set <p>Log shipping information</p>
 * @method InstanceInfo getInstanceInfo() Obtain <p>Instance-related information on the business side varies according to business and returns different information.</p>
 * @method void setInstanceInfo(InstanceInfo $InstanceInfo) Set <p>Instance-related information on the business side varies according to business and returns different information.</p>
 * @method string getLogSubType() Obtain <p>Audit sub-type.</p>
 * @method void setLogSubType(string $LogSubType) Set <p>Audit sub-type.</p>
 */
class LogInstance extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Log status, create: creating; normal: enabled; close: turning off.</p>
     */
    public $Status;

    /**
     * @var string <p>Is it possible to switch log query - Value: yes - allowed, no - not allowed. This parameter mainly controls migration of existing logs to the log platform for query usage. Only when the status is yes can you call the log API.</p>
     */
    public $EnableQuery;

    /**
     * @var string <p>Start time</p>
     */
    public $CreateAt;

    /**
     * @var integer <p>High frequency storage days</p>
     */
    public $HighLogExpireDay;

    /**
     * @var integer <p>Infrequent storage days</p>
     */
    public $LowLogExpireDay;

    /**
     * @var integer <p>Total storage duration</p>
     */
    public $LogExpireDay;

    /**
     * @var float <p>High-frequency storage volume (in MB)</p>
     */
    public $HighStorage;

    /**
     * @var float <p>Infrequent access storage, unit: MB</p>
     */
    public $LowStorage;

    /**
     * @var float <p>Total storage</p>
     */
    public $LogStorage;

    /**
     * @var string <p>Whether to enable delivery: ON, OFF</p>
     */
    public $Deliver;

    /**
     * @var array <p>Log shipping information</p>
     */
    public $DeliverSummary;

    /**
     * @var InstanceInfo <p>Instance-related information on the business side varies according to business and returns different information.</p>
     */
    public $InstanceInfo;

    /**
     * @var string <p>Audit sub-type.</p>
     */
    public $LogSubType;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $Status <p>Log status, create: creating; normal: enabled; close: turning off.</p>
     * @param string $EnableQuery <p>Is it possible to switch log query - Value: yes - allowed, no - not allowed. This parameter mainly controls migration of existing logs to the log platform for query usage. Only when the status is yes can you call the log API.</p>
     * @param string $CreateAt <p>Start time</p>
     * @param integer $HighLogExpireDay <p>High frequency storage days</p>
     * @param integer $LowLogExpireDay <p>Infrequent storage days</p>
     * @param integer $LogExpireDay <p>Total storage duration</p>
     * @param float $HighStorage <p>High-frequency storage volume (in MB)</p>
     * @param float $LowStorage <p>Infrequent access storage, unit: MB</p>
     * @param float $LogStorage <p>Total storage</p>
     * @param string $Deliver <p>Whether to enable delivery: ON, OFF</p>
     * @param array $DeliverSummary <p>Log shipping information</p>
     * @param InstanceInfo $InstanceInfo <p>Instance-related information on the business side varies according to business and returns different information.</p>
     * @param string $LogSubType <p>Audit sub-type.</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EnableQuery",$param) and $param["EnableQuery"] !== null) {
            $this->EnableQuery = $param["EnableQuery"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("HighLogExpireDay",$param) and $param["HighLogExpireDay"] !== null) {
            $this->HighLogExpireDay = $param["HighLogExpireDay"];
        }

        if (array_key_exists("LowLogExpireDay",$param) and $param["LowLogExpireDay"] !== null) {
            $this->LowLogExpireDay = $param["LowLogExpireDay"];
        }

        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("HighStorage",$param) and $param["HighStorage"] !== null) {
            $this->HighStorage = $param["HighStorage"];
        }

        if (array_key_exists("LowStorage",$param) and $param["LowStorage"] !== null) {
            $this->LowStorage = $param["LowStorage"];
        }

        if (array_key_exists("LogStorage",$param) and $param["LogStorage"] !== null) {
            $this->LogStorage = $param["LogStorage"];
        }

        if (array_key_exists("Deliver",$param) and $param["Deliver"] !== null) {
            $this->Deliver = $param["Deliver"];
        }

        if (array_key_exists("DeliverSummary",$param) and $param["DeliverSummary"] !== null) {
            $this->DeliverSummary = [];
            foreach ($param["DeliverSummary"] as $key => $value){
                $obj = new DeliverSummary();
                $obj->deserialize($value);
                array_push($this->DeliverSummary, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceInfo();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("LogSubType",$param) and $param["LogSubType"] !== null) {
            $this->LogSubType = $param["LogSubType"];
        }
    }
}
