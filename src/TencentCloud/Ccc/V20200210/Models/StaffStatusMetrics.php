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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent status-related information
 *
 * @method string getEmail() Obtain Agent email.
 * @method void setEmail(string $Email) Set Agent email.
 * @method string getStatus() Obtain Agent status free available | busy busy | rest on break | notready not ready | aftercallwork post-call adjustment | offline offline.
 * @method void setStatus(string $Status) Set Agent status free available | busy busy | rest on break | notready not ready | aftercallwork post-call adjustment | offline offline.
 * @method StaffStatusExtra getStatusExtra() Obtain Supplementary information on agent status.
 * @method void setStatusExtra(StaffStatusExtra $StatusExtra) Set Supplementary information on agent status.
 * @method integer getOnlineDuration() Obtain Total online duration of the day.
 * @method void setOnlineDuration(integer $OnlineDuration) Set Total online duration of the day.
 * @method integer getFreeDuration() Obtain Total available duration of the day.
 * @method void setFreeDuration(integer $FreeDuration) Set Total available duration of the day.
 * @method integer getBusyDuration() Obtain Total busy duration of the day.
 * @method void setBusyDuration(integer $BusyDuration) Set Total busy duration of the day.
 * @method integer getNotReadyDuration() Obtain Total not ready status duration of the day.
 * @method void setNotReadyDuration(integer $NotReadyDuration) Set Total not ready status duration of the day.
 * @method integer getRestDuration() Obtain Total break duration of the day.
 * @method void setRestDuration(integer $RestDuration) Set Total break duration of the day.
 * @method integer getAfterCallWorkDuration() Obtain Adjust the total duration of after-call work for the day.
 * @method void setAfterCallWorkDuration(integer $AfterCallWorkDuration) Set Adjust the total duration of after-call work for the day.
 * @method string getReason() Obtain Reason for break.
 * @method void setReason(string $Reason) Set Reason for break.
 * @method boolean getReserveRest() Obtain Whether to reserve break status.
 * @method void setReserveRest(boolean $ReserveRest) Set Whether to reserve break status.
 * @method boolean getReserveNotReady() Obtain Whether to reserve not ready status.
 * @method void setReserveNotReady(boolean $ReserveNotReady) Set Whether to reserve not ready status.
 * @method integer getUseMobileAccept() Obtain Cell phone answering pattern: 0 - off | 1 - only when offline | 2 - always.
 * @method void setUseMobileAccept(integer $UseMobileAccept) Set Cell phone answering pattern: 0 - off | 1 - only when offline | 2 - always.
 * @method boolean getUseMobileCallOut() Obtain Cell phone outbound call switch.
 * @method void setUseMobileCallOut(boolean $UseMobileCallOut) Set Cell phone outbound call switch.
 * @method integer getLastOnlineTimestamp() Obtain Last online timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastOnlineTimestamp(integer $LastOnlineTimestamp) Set Last online timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastStatusTimestamp() Obtain Last status timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastStatusTimestamp(integer $LastStatusTimestamp) Set Last status timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StaffStatusMetrics extends AbstractModel
{
    /**
     * @var string Agent email.
     */
    public $Email;

    /**
     * @var string Agent status free available | busy busy | rest on break | notready not ready | aftercallwork post-call adjustment | offline offline.
     */
    public $Status;

    /**
     * @var StaffStatusExtra Supplementary information on agent status.
     */
    public $StatusExtra;

    /**
     * @var integer Total online duration of the day.
     */
    public $OnlineDuration;

    /**
     * @var integer Total available duration of the day.
     */
    public $FreeDuration;

    /**
     * @var integer Total busy duration of the day.
     */
    public $BusyDuration;

    /**
     * @var integer Total not ready status duration of the day.
     */
    public $NotReadyDuration;

    /**
     * @var integer Total break duration of the day.
     */
    public $RestDuration;

    /**
     * @var integer Adjust the total duration of after-call work for the day.
     */
    public $AfterCallWorkDuration;

    /**
     * @var string Reason for break.
     */
    public $Reason;

    /**
     * @var boolean Whether to reserve break status.
     */
    public $ReserveRest;

    /**
     * @var boolean Whether to reserve not ready status.
     */
    public $ReserveNotReady;

    /**
     * @var integer Cell phone answering pattern: 0 - off | 1 - only when offline | 2 - always.
     */
    public $UseMobileAccept;

    /**
     * @var boolean Cell phone outbound call switch.
     */
    public $UseMobileCallOut;

    /**
     * @var integer Last online timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastOnlineTimestamp;

    /**
     * @var integer Last status timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastStatusTimestamp;

    /**
     * @param string $Email Agent email.
     * @param string $Status Agent status free available | busy busy | rest on break | notready not ready | aftercallwork post-call adjustment | offline offline.
     * @param StaffStatusExtra $StatusExtra Supplementary information on agent status.
     * @param integer $OnlineDuration Total online duration of the day.
     * @param integer $FreeDuration Total available duration of the day.
     * @param integer $BusyDuration Total busy duration of the day.
     * @param integer $NotReadyDuration Total not ready status duration of the day.
     * @param integer $RestDuration Total break duration of the day.
     * @param integer $AfterCallWorkDuration Adjust the total duration of after-call work for the day.
     * @param string $Reason Reason for break.
     * @param boolean $ReserveRest Whether to reserve break status.
     * @param boolean $ReserveNotReady Whether to reserve not ready status.
     * @param integer $UseMobileAccept Cell phone answering pattern: 0 - off | 1 - only when offline | 2 - always.
     * @param boolean $UseMobileCallOut Cell phone outbound call switch.
     * @param integer $LastOnlineTimestamp Last online timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastStatusTimestamp Last status timestamp.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusExtra",$param) and $param["StatusExtra"] !== null) {
            $this->StatusExtra = new StaffStatusExtra();
            $this->StatusExtra->deserialize($param["StatusExtra"]);
        }

        if (array_key_exists("OnlineDuration",$param) and $param["OnlineDuration"] !== null) {
            $this->OnlineDuration = $param["OnlineDuration"];
        }

        if (array_key_exists("FreeDuration",$param) and $param["FreeDuration"] !== null) {
            $this->FreeDuration = $param["FreeDuration"];
        }

        if (array_key_exists("BusyDuration",$param) and $param["BusyDuration"] !== null) {
            $this->BusyDuration = $param["BusyDuration"];
        }

        if (array_key_exists("NotReadyDuration",$param) and $param["NotReadyDuration"] !== null) {
            $this->NotReadyDuration = $param["NotReadyDuration"];
        }

        if (array_key_exists("RestDuration",$param) and $param["RestDuration"] !== null) {
            $this->RestDuration = $param["RestDuration"];
        }

        if (array_key_exists("AfterCallWorkDuration",$param) and $param["AfterCallWorkDuration"] !== null) {
            $this->AfterCallWorkDuration = $param["AfterCallWorkDuration"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ReserveRest",$param) and $param["ReserveRest"] !== null) {
            $this->ReserveRest = $param["ReserveRest"];
        }

        if (array_key_exists("ReserveNotReady",$param) and $param["ReserveNotReady"] !== null) {
            $this->ReserveNotReady = $param["ReserveNotReady"];
        }

        if (array_key_exists("UseMobileAccept",$param) and $param["UseMobileAccept"] !== null) {
            $this->UseMobileAccept = $param["UseMobileAccept"];
        }

        if (array_key_exists("UseMobileCallOut",$param) and $param["UseMobileCallOut"] !== null) {
            $this->UseMobileCallOut = $param["UseMobileCallOut"];
        }

        if (array_key_exists("LastOnlineTimestamp",$param) and $param["LastOnlineTimestamp"] !== null) {
            $this->LastOnlineTimestamp = $param["LastOnlineTimestamp"];
        }

        if (array_key_exists("LastStatusTimestamp",$param) and $param["LastStatusTimestamp"] !== null) {
            $this->LastStatusTimestamp = $param["LastStatusTimestamp"];
        }
    }
}
