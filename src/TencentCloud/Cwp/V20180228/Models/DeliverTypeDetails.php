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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log shipping type details
 *
 * @method integer getSecurityType() Obtain Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint; 7: host list; 8: client reporting.
 * @method void setSecurityType(integer $SecurityType) Set Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint; 7: host list; 8: client reporting.
 * @method array getLogType() Obtain Type of logs of the security module
 * @method void setLogType(array $LogType) Set Type of logs of the security module
 * @method string getTopicId() Obtain Topic ID
 * @method void setTopicId(string $TopicId) Set Topic ID
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method integer getSwitch() Obtain Shipping enabling status. 0: disabled; 1: enabled.
 * @method void setSwitch(integer $Switch) Set Shipping enabling status. 0: disabled; 1: enabled.
 * @method integer getStatus() Obtain Shipping status. 0: disabled; 1: normal; 2: abnormal.
 * @method void setStatus(integer $Status) Set Shipping status. 0: disabled; 1: normal; 2: abnormal.
 * @method string getErrInfo() Obtain Error message
 * @method void setErrInfo(string $ErrInfo) Set Error message
 * @method integer getStatusTime() Obtain Timestamp of last status reporting
 * @method void setStatusTime(integer $StatusTime) Set Timestamp of last status reporting
 * @method string getLogName() Obtain Logset name
 * @method void setLogName(string $LogName) Set Logset name
 * @method string getLogSetId() Obtain Logset ID
 * @method void setLogSetId(string $LogSetId) Set Logset ID
 * @method string getRegion() Obtain Logset region
 * @method void setRegion(string $Region) Set Logset region
 */
class DeliverTypeDetails extends AbstractModel
{
    /**
     * @var integer Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint; 7: host list; 8: client reporting.
     */
    public $SecurityType;

    /**
     * @var array Type of logs of the security module
     */
    public $LogType;

    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var integer Shipping enabling status. 0: disabled; 1: enabled.
     */
    public $Switch;

    /**
     * @var integer Shipping status. 0: disabled; 1: normal; 2: abnormal.
     */
    public $Status;

    /**
     * @var string Error message
     */
    public $ErrInfo;

    /**
     * @var integer Timestamp of last status reporting
     */
    public $StatusTime;

    /**
     * @var string Logset name
     */
    public $LogName;

    /**
     * @var string Logset ID
     */
    public $LogSetId;

    /**
     * @var string Logset region
     */
    public $Region;

    /**
     * @param integer $SecurityType Security module type. 1: intrusion detection; 2: vulnerability management; 3: baseline management; 4: advanced defense; 5: client security; 6: asset fingerprint; 7: host list; 8: client reporting.
     * @param array $LogType Type of logs of the security module
     * @param string $TopicId Topic ID
     * @param string $TopicName Topic name
     * @param integer $Switch Shipping enabling status. 0: disabled; 1: enabled.
     * @param integer $Status Shipping status. 0: disabled; 1: normal; 2: abnormal.
     * @param string $ErrInfo Error message
     * @param integer $StatusTime Timestamp of last status reporting
     * @param string $LogName Logset name
     * @param string $LogSetId Logset ID
     * @param string $Region Logset region
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
        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("LogName",$param) and $param["LogName"] !== null) {
            $this->LogName = $param["LogName"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
