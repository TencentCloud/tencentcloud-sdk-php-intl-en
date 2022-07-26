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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster creation process
 *
 * @method string getType() Obtain Process type
 * @method void setType(string $Type) Set Process type
 * @method string getStatus() Obtain Process status
 * @method void setStatus(string $Status) Set Process status
 * @method string getLastProbeTime() Obtain Last time when the status is probed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastProbeTime(string $LastProbeTime) Set Last time when the status is probed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLastTransitionTime() Obtain Last time when transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLastTransitionTime(string $LastTransitionTime) Set Last time when transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getReason() Obtain Reasons for transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setReason(string $Reason) Set Reasons for transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain More information on transition
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set More information on transition
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ClusterCondition extends AbstractModel
{
    /**
     * @var string Process type
     */
    public $Type;

    /**
     * @var string Process status
     */
    public $Status;

    /**
     * @var string Last time when the status is probed
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastProbeTime;

    /**
     * @var string Last time when transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LastTransitionTime;

    /**
     * @var string Reasons for transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Reason;

    /**
     * @var string More information on transition
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @param string $Type Process type
     * @param string $Status Process status
     * @param string $LastProbeTime Last time when the status is probed
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LastTransitionTime Last time when transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Reason Reasons for transiting to the process
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Message More information on transition
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastProbeTime",$param) and $param["LastProbeTime"] !== null) {
            $this->LastProbeTime = $param["LastProbeTime"];
        }

        if (array_key_exists("LastTransitionTime",$param) and $param["LastTransitionTime"] !== null) {
            $this->LastTransitionTime = $param["LastTransitionTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
