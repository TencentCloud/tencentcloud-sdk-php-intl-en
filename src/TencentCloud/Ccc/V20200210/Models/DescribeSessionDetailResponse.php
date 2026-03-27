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
 * @method string getCaller() Obtain <P>Calling number</p>.
 * @method void setCaller(string $Caller) Set <P>Calling number</p>.
 * @method string getCallee() Obtain <P>Called number</p>.
 * @method void setCallee(string $Callee) Set <P>Called number</p>.
 * @method integer getCallType() Obtain <P>Call type 1 outgoing call 2 incoming call 3 audio dial-in 5 predictive outbound call 6 extension call</p>.
 * @method void setCallType(integer $CallType) Set <P>Call type 1 outgoing call 2 incoming call 3 audio dial-in 5 predictive outbound call 6 extension call</p>.
 * @method integer getStartTimeStamp() Obtain <p>Start timestamp, Unix second-level timestamp</p>.
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set <p>Start timestamp, Unix second-level timestamp</p>.
 * @method integer getRingTimestamp() Obtain <p>Ring timestamp, UNIX second-level timestamp</p>.
 * @method void setRingTimestamp(integer $RingTimestamp) Set <p>Ring timestamp, UNIX second-level timestamp</p>.
 * @method integer getAcceptTimestamp() Obtain <p>Answer timestamp, UNIX second-level timestamp</p>.
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) Set <p>Answer timestamp, UNIX second-level timestamp</p>.
 * @method integer getEndedTimestamp() Obtain <p>End timestamp, UNIX second-level timestamp</p>.
 * @method void setEndedTimestamp(integer $EndedTimestamp) Set <p>End timestamp, UNIX second-level timestamp</p>.
 * @method integer getQueuedTimestamp() Obtain <p>Queue entry time, Unix second-level timestamp</p>.
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) Set <p>Queue entry time, Unix second-level timestamp</p>.
 * @method string getStaffUserId() Obtain <P>Agent account</p>.
 * @method void setStaffUserId(string $StaffUserId) Set <P>Agent account</p>.
 * @method integer getEndStatus() Obtain <p>Refer to the EndStatus field in the DescribeTelCdr api.</p>.
 * @method void setEndStatus(integer $EndStatus) Set <p>Refer to the EndStatus field in the DescribeTelCdr api.</p>.
 * @method integer getQueuedSkillGroupId() Obtain <p>Queue skill group ID</p>.
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) Set <p>Queue skill group ID</p>.
 * @method string getQueuedSkillGroupName() Obtain <P>Queue skill group name</p>.
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) Set <P>Queue skill group name</p>.
 * @method string getRecordURL() Obtain <P>The recording link comes with authentication and a valid period. after obtaining it, please retrieve the content within 24 hours. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
 * @method void setRecordURL(string $RecordURL) Set <P>The recording link comes with authentication and a valid period. after obtaining it, please retrieve the content within 24 hours. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
 * @method string getCustomRecordURL() Obtain <p>Recording transfer to external COS link</p>.
 * @method void setCustomRecordURL(string $CustomRecordURL) Set <p>Recording transfer to external COS link</p>.
 * @method string getAsrURL() Obtain <P>Text information link of the voice recording, with authentication and valid period. please retrieve it within 24 hr after obtaining. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
 * @method void setAsrURL(string $AsrURL) Set <P>Text information link of the voice recording, with authentication and valid period. please retrieve it within 24 hr after obtaining. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
 * @method array getVoicemailRecordURL() Obtain <P>Voicemail recording link</p>.
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) Set <P>Voicemail recording link</p>.
 * @method array getVoicemailAsrURL() Obtain <P>Voicemail voice recording text information link. you need to purchase an offline speech recognition package through the console and enable the offline speech recognition switch.</p>.
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) Set <P>Voicemail voice recording text information link. you need to purchase an offline speech recognition package through the console and enable the offline speech recognition switch.</p>.
 * @method array getIVRKeyPressed() Obtain <P>IVR key information</p>.
 * @method void setIVRKeyPressed(array $IVRKeyPressed) Set <P>IVR key information</p>.
 * @method array getPostIVRKeyPressed() Obtain <P>Key information of satisfaction rate</p>.
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) Set <P>Key information of satisfaction rate</p>.
 * @method string getHungUpSide() Obtain <P>Hang-Up side seat agent user system</p>.
 * @method void setHungUpSide(string $HungUpSide) Set <P>Hang-Up side seat agent user system</p>.
 * @method string getUUI() Obtain <p>Customer custom data (User-to-User Interface)</p>.
 * @method void setUUI(string $UUI) Set <p>Customer custom data (User-to-User Interface)</p>.
 * @method array getEvents() Obtain <P>Event list for calls in progress</p>.
 * @method void setEvents(array $Events) Set <P>Event list for calls in progress</p>.
 * @method array getServeParticipants() Obtain <P>Service participant list</p>.
 * @method void setServeParticipants(array $ServeParticipants) Set <P>Service participant list</p>.
 * @method integer getSysHangupReason() Obtain <P>Status code for reason of system hang-up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
 * @method void setSysHangupReason(integer $SysHangupReason) Set <P>Status code for reason of system hang-up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
 * @method string getSysHangupReasonString() Obtain <P>Reason for system hang up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
 * @method void setSysHangupReasonString(string $SysHangupReasonString) Set <P>Reason for system hang up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeSessionDetailResponse extends AbstractModel
{
    /**
     * @var string <P>Calling number</p>.
     */
    public $Caller;

    /**
     * @var string <P>Called number</p>.
     */
    public $Callee;

    /**
     * @var integer <P>Call type 1 outgoing call 2 incoming call 3 audio dial-in 5 predictive outbound call 6 extension call</p>.
     */
    public $CallType;

    /**
     * @var integer <p>Start timestamp, Unix second-level timestamp</p>.
     */
    public $StartTimeStamp;

    /**
     * @var integer <p>Ring timestamp, UNIX second-level timestamp</p>.
     */
    public $RingTimestamp;

    /**
     * @var integer <p>Answer timestamp, UNIX second-level timestamp</p>.
     */
    public $AcceptTimestamp;

    /**
     * @var integer <p>End timestamp, UNIX second-level timestamp</p>.
     */
    public $EndedTimestamp;

    /**
     * @var integer <p>Queue entry time, Unix second-level timestamp</p>.
     */
    public $QueuedTimestamp;

    /**
     * @var string <P>Agent account</p>.
     */
    public $StaffUserId;

    /**
     * @var integer <p>Refer to the EndStatus field in the DescribeTelCdr api.</p>.
     */
    public $EndStatus;

    /**
     * @var integer <p>Queue skill group ID</p>.
     */
    public $QueuedSkillGroupId;

    /**
     * @var string <P>Queue skill group name</p>.
     */
    public $QueuedSkillGroupName;

    /**
     * @var string <P>The recording link comes with authentication and a valid period. after obtaining it, please retrieve the content within 24 hours. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
     */
    public $RecordURL;

    /**
     * @var string <p>Recording transfer to external COS link</p>.
     */
    public $CustomRecordURL;

    /**
     * @var string <P>Text information link of the voice recording, with authentication and valid period. please retrieve it within 24 hr after obtaining. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
     */
    public $AsrURL;

    /**
     * @var array <P>Voicemail recording link</p>.
     */
    public $VoicemailRecordURL;

    /**
     * @var array <P>Voicemail voice recording text information link. you need to purchase an offline speech recognition package through the console and enable the offline speech recognition switch.</p>.
     */
    public $VoicemailAsrURL;

    /**
     * @var array <P>IVR key information</p>.
     */
    public $IVRKeyPressed;

    /**
     * @var array <P>Key information of satisfaction rate</p>.
     */
    public $PostIVRKeyPressed;

    /**
     * @var string <P>Hang-Up side seat agent user system</p>.
     */
    public $HungUpSide;

    /**
     * @var string <p>Customer custom data (User-to-User Interface)</p>.
     */
    public $UUI;

    /**
     * @var array <P>Event list for calls in progress</p>.
     */
    public $Events;

    /**
     * @var array <P>Service participant list</p>.
     */
    public $ServeParticipants;

    /**
     * @var integer <P>Status code for reason of system hang-up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
     */
    public $SysHangupReason;

    /**
     * @var string <P>Reason for system hang up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
     */
    public $SysHangupReasonString;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Caller <P>Calling number</p>.
     * @param string $Callee <P>Called number</p>.
     * @param integer $CallType <P>Call type 1 outgoing call 2 incoming call 3 audio dial-in 5 predictive outbound call 6 extension call</p>.
     * @param integer $StartTimeStamp <p>Start timestamp, Unix second-level timestamp</p>.
     * @param integer $RingTimestamp <p>Ring timestamp, UNIX second-level timestamp</p>.
     * @param integer $AcceptTimestamp <p>Answer timestamp, UNIX second-level timestamp</p>.
     * @param integer $EndedTimestamp <p>End timestamp, UNIX second-level timestamp</p>.
     * @param integer $QueuedTimestamp <p>Queue entry time, Unix second-level timestamp</p>.
     * @param string $StaffUserId <P>Agent account</p>.
     * @param integer $EndStatus <p>Refer to the EndStatus field in the DescribeTelCdr api.</p>.
     * @param integer $QueuedSkillGroupId <p>Queue skill group ID</p>.
     * @param string $QueuedSkillGroupName <P>Queue skill group name</p>.
     * @param string $RecordURL <P>The recording link comes with authentication and a valid period. after obtaining it, please retrieve the content within 24 hours. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
     * @param string $CustomRecordURL <p>Recording transfer to external COS link</p>.
     * @param string $AsrURL <P>Text information link of the voice recording, with authentication and valid period. please retrieve it within 24 hr after obtaining. do not persist this link. if the link has expired, call this api again to get a new link.</p>.
     * @param array $VoicemailRecordURL <P>Voicemail recording link</p>.
     * @param array $VoicemailAsrURL <P>Voicemail voice recording text information link. you need to purchase an offline speech recognition package through the console and enable the offline speech recognition switch.</p>.
     * @param array $IVRKeyPressed <P>IVR key information</p>.
     * @param array $PostIVRKeyPressed <P>Key information of satisfaction rate</p>.
     * @param string $HungUpSide <P>Hang-Up side seat agent user system</p>.
     * @param string $UUI <p>Customer custom data (User-to-User Interface)</p>.
     * @param array $Events <P>Event list for calls in progress</p>.
     * @param array $ServeParticipants <P>Service participant list</p>.
     * @param integer $SysHangupReason <P>Status code for reason of system hang-up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
     * @param string $SysHangupReasonString <P>Reason for system hang up after connect.</p><p><a href="https://www.tencentcloud.com/document/product/679/123938?from_cn_redirect=1">details</a></p>.
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

        if (array_key_exists("SysHangupReason",$param) and $param["SysHangupReason"] !== null) {
            $this->SysHangupReason = $param["SysHangupReason"];
        }

        if (array_key_exists("SysHangupReasonString",$param) and $param["SysHangupReasonString"] !== null) {
            $this->SysHangupReasonString = $param["SysHangupReasonString"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
