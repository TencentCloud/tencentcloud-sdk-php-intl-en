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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSessionDetail response structure.
 *
 * @method string getCaller() Obtain Calling number.
 * @method void setCaller(string $Caller) Set Calling number.
 * @method string getCallee() Obtain Called number.
 * @method void setCallee(string $Callee) Set Called number.
 * @method integer getCallType() Obtain Call type. valid values: 1 (outgoing call), 2 (incoming call), 3 (audio dial-in), 5 (predictive outbound call), 6 (internal call).
 * @method void setCallType(integer $CallType) Set Call type. valid values: 1 (outgoing call), 2 (incoming call), 3 (audio dial-in), 5 (predictive outbound call), 6 (internal call).
 * @method integer getStartTimeStamp() Obtain Start timestamp. Unix second-level timestamp.
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set Start timestamp. Unix second-level timestamp.
 * @method integer getRingTimestamp() Obtain Ring timestamp. UNIX second-level timestamp.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ring timestamp. UNIX second-level timestamp.
 * @method integer getAcceptTimestamp() Obtain Answer timestamp. UNIX second-level timestamp.
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) Set Answer timestamp. UNIX second-level timestamp.
 * @method integer getEndedTimestamp() Obtain End timestamp, UNIX second-level timestamp.
 * @method void setEndedTimestamp(integer $EndedTimestamp) Set End timestamp, UNIX second-level timestamp.
 * @method integer getQueuedTimestamp() Obtain Queue entry time. Unix second-level timestamp.
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) Set Queue entry time. Unix second-level timestamp.
 * @method string getStaffUserId() Obtain Agent account.
 * @method void setStaffUserId(string $StaffUserId) Set Agent account.
 * @method integer getEndStatus() Obtain Refers to the EndStatus field in the DescribeTelCdr api.
 * @method void setEndStatus(integer $EndStatus) Set Refers to the EndStatus field in the DescribeTelCdr api.
 * @method integer getQueuedSkillGroupId() Obtain Queue skill group ID.
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) Set Queue skill group ID.
 * @method string getQueuedSkillGroupName() Obtain Queue skill group name.
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) Set Queue skill group name.
 * @method string getRecordURL() Obtain Recording url with authentication and valid period. obtain and pull within a short time frame. do not persist this link.
 * @method void setRecordURL(string $RecordURL) Set Recording url with authentication and valid period. obtain and pull within a short time frame. do not persist this link.
 * @method string getCustomRecordURL() Obtain Specifies the COS link for recording transfer to a third party.
 * @method void setCustomRecordURL(string $CustomRecordURL) Set Specifies the COS link for recording transfer to a third party.
 * @method string getAsrURL() Obtain Recording text information link with authentication and valid period. retrieve it within a short time frame. do not persist this link.
 * @method void setAsrURL(string $AsrURL) Set Recording text information link with authentication and valid period. retrieve it within a short time frame. do not persist this link.
 * @method array getVoicemailRecordURL() Obtain Voicemail recording url.
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) Set Voicemail recording url.
 * @method array getVoicemailAsrURL() Obtain Voicemail recording text information url. purchase the offline speech recognition package through the console and enable the offline speech recognition switch.
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) Set Voicemail recording text information url. purchase the offline speech recognition package through the console and enable the offline speech recognition switch.
 * @method array getIVRKeyPressed() Obtain IVR key information.
 * @method void setIVRKeyPressed(array $IVRKeyPressed) Set IVR key information.
 * @method array getPostIVRKeyPressed() Obtain Satisfaction rate keystroke information.
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) Set Satisfaction rate keystroke information.
 * @method string getHungUpSide() Obtain Hang-Up side. valid values: seat, user, system.
 * @method void setHungUpSide(string $HungUpSide) Set Hang-Up side. valid values: seat, user, system.
 * @method string getUUI() Obtain Customer custom data (User-to-User Interface).
 * @method void setUUI(string $UUI) Set Customer custom data (User-to-User Interface).
 * @method array getEvents() Obtain List of events during a call.
 * @method void setEvents(array $Events) Set List of events during a call.
 * @method array getServeParticipants() Obtain List of service participants.
 * @method void setServeParticipants(array $ServeParticipants) Set List of service participants.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSessionDetailResponse extends AbstractModel
{
    /**
     * @var string Calling number.
     */
    public $Caller;

    /**
     * @var string Called number.
     */
    public $Callee;

    /**
     * @var integer Call type. valid values: 1 (outgoing call), 2 (incoming call), 3 (audio dial-in), 5 (predictive outbound call), 6 (internal call).
     */
    public $CallType;

    /**
     * @var integer Start timestamp. Unix second-level timestamp.
     */
    public $StartTimeStamp;

    /**
     * @var integer Ring timestamp. UNIX second-level timestamp.
     */
    public $RingTimestamp;

    /**
     * @var integer Answer timestamp. UNIX second-level timestamp.
     */
    public $AcceptTimestamp;

    /**
     * @var integer End timestamp, UNIX second-level timestamp.
     */
    public $EndedTimestamp;

    /**
     * @var integer Queue entry time. Unix second-level timestamp.
     */
    public $QueuedTimestamp;

    /**
     * @var string Agent account.
     */
    public $StaffUserId;

    /**
     * @var integer Refers to the EndStatus field in the DescribeTelCdr api.
     */
    public $EndStatus;

    /**
     * @var integer Queue skill group ID.
     */
    public $QueuedSkillGroupId;

    /**
     * @var string Queue skill group name.
     */
    public $QueuedSkillGroupName;

    /**
     * @var string Recording url with authentication and valid period. obtain and pull within a short time frame. do not persist this link.
     */
    public $RecordURL;

    /**
     * @var string Specifies the COS link for recording transfer to a third party.
     */
    public $CustomRecordURL;

    /**
     * @var string Recording text information link with authentication and valid period. retrieve it within a short time frame. do not persist this link.
     */
    public $AsrURL;

    /**
     * @var array Voicemail recording url.
     */
    public $VoicemailRecordURL;

    /**
     * @var array Voicemail recording text information url. purchase the offline speech recognition package through the console and enable the offline speech recognition switch.
     */
    public $VoicemailAsrURL;

    /**
     * @var array IVR key information.
     */
    public $IVRKeyPressed;

    /**
     * @var array Satisfaction rate keystroke information.
     */
    public $PostIVRKeyPressed;

    /**
     * @var string Hang-Up side. valid values: seat, user, system.
     */
    public $HungUpSide;

    /**
     * @var string Customer custom data (User-to-User Interface).
     */
    public $UUI;

    /**
     * @var array List of events during a call.
     */
    public $Events;

    /**
     * @var array List of service participants.
     */
    public $ServeParticipants;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Caller Calling number.
     * @param string $Callee Called number.
     * @param integer $CallType Call type. valid values: 1 (outgoing call), 2 (incoming call), 3 (audio dial-in), 5 (predictive outbound call), 6 (internal call).
     * @param integer $StartTimeStamp Start timestamp. Unix second-level timestamp.
     * @param integer $RingTimestamp Ring timestamp. UNIX second-level timestamp.
     * @param integer $AcceptTimestamp Answer timestamp. UNIX second-level timestamp.
     * @param integer $EndedTimestamp End timestamp, UNIX second-level timestamp.
     * @param integer $QueuedTimestamp Queue entry time. Unix second-level timestamp.
     * @param string $StaffUserId Agent account.
     * @param integer $EndStatus Refers to the EndStatus field in the DescribeTelCdr api.
     * @param integer $QueuedSkillGroupId Queue skill group ID.
     * @param string $QueuedSkillGroupName Queue skill group name.
     * @param string $RecordURL Recording url with authentication and valid period. obtain and pull within a short time frame. do not persist this link.
     * @param string $CustomRecordURL Specifies the COS link for recording transfer to a third party.
     * @param string $AsrURL Recording text information link with authentication and valid period. retrieve it within a short time frame. do not persist this link.
     * @param array $VoicemailRecordURL Voicemail recording url.
     * @param array $VoicemailAsrURL Voicemail recording text information url. purchase the offline speech recognition package through the console and enable the offline speech recognition switch.
     * @param array $IVRKeyPressed IVR key information.
     * @param array $PostIVRKeyPressed Satisfaction rate keystroke information.
     * @param string $HungUpSide Hang-Up side. valid values: seat, user, system.
     * @param string $UUI Customer custom data (User-to-User Interface).
     * @param array $Events List of events during a call.
     * @param array $ServeParticipants List of service participants.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = $param["Caller"];
        }

        if (array_key_exists("Callee",$param) and $param["Callee"] !== null) {
            $this->Callee = $param["Callee"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("RingTimestamp",$param) and $param["RingTimestamp"] !== null) {
            $this->RingTimestamp = $param["RingTimestamp"];
        }

        if (array_key_exists("AcceptTimestamp",$param) and $param["AcceptTimestamp"] !== null) {
            $this->AcceptTimestamp = $param["AcceptTimestamp"];
        }

        if (array_key_exists("EndedTimestamp",$param) and $param["EndedTimestamp"] !== null) {
            $this->EndedTimestamp = $param["EndedTimestamp"];
        }

        if (array_key_exists("QueuedTimestamp",$param) and $param["QueuedTimestamp"] !== null) {
            $this->QueuedTimestamp = $param["QueuedTimestamp"];
        }

        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("EndStatus",$param) and $param["EndStatus"] !== null) {
            $this->EndStatus = $param["EndStatus"];
        }

        if (array_key_exists("QueuedSkillGroupId",$param) and $param["QueuedSkillGroupId"] !== null) {
            $this->QueuedSkillGroupId = $param["QueuedSkillGroupId"];
        }

        if (array_key_exists("QueuedSkillGroupName",$param) and $param["QueuedSkillGroupName"] !== null) {
            $this->QueuedSkillGroupName = $param["QueuedSkillGroupName"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("CustomRecordURL",$param) and $param["CustomRecordURL"] !== null) {
            $this->CustomRecordURL = $param["CustomRecordURL"];
        }

        if (array_key_exists("AsrURL",$param) and $param["AsrURL"] !== null) {
            $this->AsrURL = $param["AsrURL"];
        }

        if (array_key_exists("VoicemailRecordURL",$param) and $param["VoicemailRecordURL"] !== null) {
            $this->VoicemailRecordURL = $param["VoicemailRecordURL"];
        }

        if (array_key_exists("VoicemailAsrURL",$param) and $param["VoicemailAsrURL"] !== null) {
            $this->VoicemailAsrURL = $param["VoicemailAsrURL"];
        }

        if (array_key_exists("IVRKeyPressed",$param) and $param["IVRKeyPressed"] !== null) {
            $this->IVRKeyPressed = [];
            foreach ($param["IVRKeyPressed"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->IVRKeyPressed, $obj);
            }
        }

        if (array_key_exists("PostIVRKeyPressed",$param) and $param["PostIVRKeyPressed"] !== null) {
            $this->PostIVRKeyPressed = [];
            foreach ($param["PostIVRKeyPressed"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->PostIVRKeyPressed, $obj);
            }
        }

        if (array_key_exists("HungUpSide",$param) and $param["HungUpSide"] !== null) {
            $this->HungUpSide = $param["HungUpSide"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new SessionEvent();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("ServeParticipants",$param) and $param["ServeParticipants"] !== null) {
            $this->ServeParticipants = [];
            foreach ($param["ServeParticipants"] as $key => $value){
                $obj = new ServeParticipant();
                $obj->deserialize($value);
                array_push($this->ServeParticipants, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
