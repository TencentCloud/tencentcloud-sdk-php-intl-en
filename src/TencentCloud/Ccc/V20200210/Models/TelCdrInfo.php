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
 * Phone call information.
 *
 * @method string getCaller() Obtain Caller number.
 * @method void setCaller(string $Caller) Set Caller number.
 * @method string getCallee() Obtain Called number.
 * @method void setCallee(string $Callee) Set Called number.
 * @method integer getTime() Obtain Call initiation timestamp, Unix timestamp.
 * @method void setTime(integer $Time) Set Call initiation timestamp, Unix timestamp.
 * @method integer getDirection() Obtain Call direction: 0 - Inbound, 1 - Outbound.
 * @method void setDirection(integer $Direction) Set Call direction: 0 - Inbound, 1 - Outbound.
 * @method integer getDuration() Obtain Call duration.
 * @method void setDuration(integer $Duration) Set Call duration.
 * @method string getRecordURL() Obtain Recording Information.
 * @method void setRecordURL(string $RecordURL) Set Recording Information.
 * @method string getRecordId() Obtain Recording ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRecordId(string $RecordId) Set Recording ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SeatUserInfo getSeatUser() Obtain Agent Information
 * @method void setSeatUser(SeatUserInfo $SeatUser) Set Agent Information
 * @method integer getEndStatus() Obtain EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Outgoing Call	         206	           busy	During the call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Incoming & Outgoing Calls	211    clientError    Client Error

 * @method void setEndStatus(integer $EndStatus) Set EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Outgoing Call	         206	           busy	During the call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Incoming & Outgoing Calls	211    clientError    Client Error

 * @method string getSkillGroup() Obtain Skill group name.
 * @method void setSkillGroup(string $SkillGroup) Set Skill group name.
 * @method string getCallerLocation() Obtain Caller's location.
 * @method void setCallerLocation(string $CallerLocation) Set Caller's location.
 * @method integer getIVRDuration() Obtain Time spent in IVR stage.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIVRDuration(integer $IVRDuration) Set Time spent in IVR stage.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRingTimestamp() Obtain Ring timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ring timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getAcceptTimestamp() Obtain Answer timestamp. UNIX second-Level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) Set Answer timestamp. UNIX second-Level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getEndedTimestamp() Obtain End timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndedTimestamp(integer $EndedTimestamp) Set End timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getIVRKeyPressed() Obtain IVR key information, e.g. ["1","2","3"]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIVRKeyPressed(array $IVRKeyPressed) Set IVR key information, e.g. ["1","2","3"]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHungUpSide() Obtain Hanging Up Party seat Seat user Users system system
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHungUpSide(string $HungUpSide) Set Hanging Up Party seat Seat user Users system system
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getServeParticipants() Obtain List of Service Participants
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServeParticipants(array $ServeParticipants) Set List of Service Participants
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSkillGroupId() Obtain Skill group ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEndStatusString() Obtain EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Phone Call Out	         206	           busy	In Call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Phone Call In & Out	211    clientError    Client Error

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndStatusString(string $EndStatusString) Set EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Phone Call Out	         206	           busy	In Call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Phone Call In & Out	211    clientError    Client Error

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTimestamp() Obtain Session start timestamp. UNIX second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTimestamp(integer $StartTimestamp) Set Session start timestamp. UNIX second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getQueuedTimestamp() Obtain Queue entry time. Unix second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) Set Queue entry time. Unix second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getPostIVRKeyPressed() Obtain Post-IVR key information (e.g. [{"Key":"1","Label":"Very Satisfied"}])
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) Set Post-IVR key information (e.g. [{"Key":"1","Label":"Very Satisfied"}])
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getQueuedSkillGroupId() Obtain Queue Skill Group ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) Set Queue Skill Group ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSessionId() Obtain Session ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSessionId(string $SessionId) Set Session ID.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProtectedCaller() Obtain Caller number protection ID. (Effective when the number protection map feature is activated, and the Caller field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtectedCaller(string $ProtectedCaller) Set Caller number protection ID. (Effective when the number protection map feature is activated, and the Caller field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtectedCallee() Obtain Called number protection ID (Effective when the number protection map feature is activated, and the Callee field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtectedCallee(string $ProtectedCallee) Set Called number protection ID (Effective when the number protection map feature is activated, and the Callee field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUui() Obtain Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUui(string $Uui) Set Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUUI() Obtain Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUUI(string $UUI) Set Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIVRKeyPressedEx() Obtain IVR key information (e.g.?[{"Key":"1","Label":"highly satisfied"}])
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIVRKeyPressedEx(array $IVRKeyPressedEx) Set IVR key information (e.g.?[{"Key":"1","Label":"highly satisfied"}])
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAsrUrl() Obtain Access to the ASR text information address of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAsrUrl(string $AsrUrl) Set Access to the ASR text information address of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCustomRecordURL() Obtain Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomRecordURL(string $CustomRecordURL) Set Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getQueuedSkillGroupName() Obtain Queue skill group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) Set Queue skill group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVoicemailRecordURL() Obtain Audio message recording URL during call.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) Set Audio message recording URL during call.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVoicemailAsrURL() Obtain Text Information address of ASR audio message during a call.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) Set Text Information address of ASR audio message during a call.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TelCdrInfo extends AbstractModel
{
    /**
     * @var string Caller number.
     */
    public $Caller;

    /**
     * @var string Called number.
     */
    public $Callee;

    /**
     * @var integer Call initiation timestamp, Unix timestamp.
     */
    public $Time;

    /**
     * @var integer Call direction: 0 - Inbound, 1 - Outbound.
     */
    public $Direction;

    /**
     * @var integer Call duration.
     */
    public $Duration;

    /**
     * @var string Recording Information.
     */
    public $RecordURL;

    /**
     * @var string Recording ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RecordId;

    /**
     * @var SeatUserInfo Agent Information
     */
    public $SeatUser;

    /**
     * @var integer EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Outgoing Call	         206	           busy	During the call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Incoming & Outgoing Calls	211    clientError    Client Error

     */
    public $EndStatus;

    /**
     * @var string Skill group name.
     */
    public $SkillGroup;

    /**
     * @var string Caller's location.
     */
    public $CallerLocation;

    /**
     * @var integer Time spent in IVR stage.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IVRDuration;

    /**
     * @var integer Ring timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RingTimestamp;

    /**
     * @var integer Answer timestamp. UNIX second-Level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AcceptTimestamp;

    /**
     * @var integer End timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndedTimestamp;

    /**
     * @var array IVR key information, e.g. ["1","2","3"]
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IVRKeyPressed;

    /**
     * @var string Hanging Up Party seat Seat user Users system system
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HungUpSide;

    /**
     * @var array List of Service Participants
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServeParticipants;

    /**
     * @var integer Skill group ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupId;

    /**
     * @var string EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Phone Call Out	         206	           busy	In Call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Phone Call In & Out	211    clientError    Client Error

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndStatusString;

    /**
     * @var integer Session start timestamp. UNIX second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTimestamp;

    /**
     * @var integer Queue entry time. Unix second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QueuedTimestamp;

    /**
     * @var array Post-IVR key information (e.g. [{"Key":"1","Label":"Very Satisfied"}])
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PostIVRKeyPressed;

    /**
     * @var integer Queue Skill Group ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $QueuedSkillGroupId;

    /**
     * @var string Session ID.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SessionId;

    /**
     * @var string Caller number protection ID. (Effective when the number protection map feature is activated, and the Caller field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProtectedCaller;

    /**
     * @var string Called number protection ID (Effective when the number protection map feature is activated, and the Callee field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProtectedCallee;

    /**
     * @var string Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Uui;

    /**
     * @var string Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UUI;

    /**
     * @var array IVR key information (e.g.?[{"Key":"1","Label":"highly satisfied"}])
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IVRKeyPressedEx;

    /**
     * @var string Access to the ASR text information address of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AsrUrl;

    /**
     * @var string Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomRecordURL;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Queue skill group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $QueuedSkillGroupName;

    /**
     * @var array Audio message recording URL during call.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoicemailRecordURL;

    /**
     * @var array Text Information address of ASR audio message during a call.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoicemailAsrURL;

    /**
     * @param string $Caller Caller number.
     * @param string $Callee Called number.
     * @param integer $Time Call initiation timestamp, Unix timestamp.
     * @param integer $Direction Call direction: 0 - Inbound, 1 - Outbound.
     * @param integer $Duration Call duration.
     * @param string $RecordURL Recording Information.
     * @param string $RecordId Recording ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SeatUserInfo $SeatUser Agent Information
     * @param integer $EndStatus EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Outgoing Call	         206	           busy	During the call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Incoming & Outgoing Calls	211    clientError    Client Error

     * @param string $SkillGroup Skill group name.
     * @param string $CallerLocation Caller's location.
     * @param integer $IVRDuration Time spent in IVR stage.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RingTimestamp Ring timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $AcceptTimestamp Answer timestamp. UNIX second-Level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $EndedTimestamp End timestamp. UNIX second-level timestamp
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $IVRKeyPressed IVR key information, e.g. ["1","2","3"]
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HungUpSide Hanging Up Party seat Seat user Users system system
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ServeParticipants List of Service Participants
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SkillGroupId Skill group ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EndStatusString EndStatus corresponds one-to-one with EndStatusString, specific enumerations are as follows:

**Scenario	         EndStatus	EndStatusString	Status Description**

Incoming & Outgoing Calls	1	        ok	                        Normal End

Incoming & Outgoing Calls	0	        error	                System Error

Incoming Call	             102	        ivrGiveUp	        User Gave Up During IVR

Incoming Call	             103	        waitingGiveUp	       User Gave Up During Queue

Incoming Call	             104	        ringingGiveUp	       User Gave Up During Ringing

Incoming Call	             105	        noSeatOnline	       No Seat Online

Incoming Call              106	       notWorkTime	       Non-Working Hours   

Incoming Call	            107	       ivrEnd	               Ended Directly After IVR

Incoming Call	            100	      blackList Incoming blocklist  

Outgoing Call               2	              unconnected	Unconnected

Outgoing Call             108	        restrictedCallee	Callee restricted due to high risk

Outgoing Call             109	        tooManyRequest	    Frequency limit exceeded

Outgoing Call             110	        restrictedArea	    Call to restricted area

Outgoing Call             111	        restrictedTime	Call time restricted
                         
Outgoing Call             201            unknown	Unknown status

Outgoing Call             202            notAnswer	Missed call

Outgoing Call            203	    userReject	Reject/Hang Up

Outgoing Call	          204	    powerOff	Shutting down

Outgoing Call           205            numberNotExist	Disconnected Number

Phone Call Out	         206	           busy	In Call

Outgoing Call   	        207	           outOfCredit	Overdue Payment

Outgoing Call	         208	           operatorError	 ISP Carrier Line Anomaly

Outgoing Call         	209	           callerCancel	Caller Cancelled

Outgoing Call	        210	           notInService	Out of Service Area

Phone Call In & Out	211    clientError    Client Error

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTimestamp Session start timestamp. UNIX second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $QueuedTimestamp Queue entry time. Unix second-level timestamp.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $PostIVRKeyPressed Post-IVR key information (e.g. [{"Key":"1","Label":"Very Satisfied"}])
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $QueuedSkillGroupId Queue Skill Group ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SessionId Session ID.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProtectedCaller Caller number protection ID. (Effective when the number protection map feature is activated, and the Caller field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProtectedCallee Called number protection ID (Effective when the number protection map feature is activated, and the Callee field is empty).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uui Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UUI Customer custom data. (User-to-User Interface)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IVRKeyPressedEx IVR key information (e.g.?[{"Key":"1","Label":"highly satisfied"}])
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AsrUrl Access to the ASR text information address of the recording.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CustomRecordURL Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $QueuedSkillGroupName Queue skill group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VoicemailRecordURL Audio message recording URL during call.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VoicemailAsrURL Text Information address of ASR audio message during a call.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("SeatUser",$param) and $param["SeatUser"] !== null) {
            $this->SeatUser = new SeatUserInfo();
            $this->SeatUser->deserialize($param["SeatUser"]);
        }

        if (array_key_exists("EndStatus",$param) and $param["EndStatus"] !== null) {
            $this->EndStatus = $param["EndStatus"];
        }

        if (array_key_exists("SkillGroup",$param) and $param["SkillGroup"] !== null) {
            $this->SkillGroup = $param["SkillGroup"];
        }

        if (array_key_exists("CallerLocation",$param) and $param["CallerLocation"] !== null) {
            $this->CallerLocation = $param["CallerLocation"];
        }

        if (array_key_exists("IVRDuration",$param) and $param["IVRDuration"] !== null) {
            $this->IVRDuration = $param["IVRDuration"];
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

        if (array_key_exists("IVRKeyPressed",$param) and $param["IVRKeyPressed"] !== null) {
            $this->IVRKeyPressed = $param["IVRKeyPressed"];
        }

        if (array_key_exists("HungUpSide",$param) and $param["HungUpSide"] !== null) {
            $this->HungUpSide = $param["HungUpSide"];
        }

        if (array_key_exists("ServeParticipants",$param) and $param["ServeParticipants"] !== null) {
            $this->ServeParticipants = [];
            foreach ($param["ServeParticipants"] as $key => $value){
                $obj = new ServeParticipant();
                $obj->deserialize($value);
                array_push($this->ServeParticipants, $obj);
            }
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("EndStatusString",$param) and $param["EndStatusString"] !== null) {
            $this->EndStatusString = $param["EndStatusString"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("QueuedTimestamp",$param) and $param["QueuedTimestamp"] !== null) {
            $this->QueuedTimestamp = $param["QueuedTimestamp"];
        }

        if (array_key_exists("PostIVRKeyPressed",$param) and $param["PostIVRKeyPressed"] !== null) {
            $this->PostIVRKeyPressed = [];
            foreach ($param["PostIVRKeyPressed"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->PostIVRKeyPressed, $obj);
            }
        }

        if (array_key_exists("QueuedSkillGroupId",$param) and $param["QueuedSkillGroupId"] !== null) {
            $this->QueuedSkillGroupId = $param["QueuedSkillGroupId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ProtectedCaller",$param) and $param["ProtectedCaller"] !== null) {
            $this->ProtectedCaller = $param["ProtectedCaller"];
        }

        if (array_key_exists("ProtectedCallee",$param) and $param["ProtectedCallee"] !== null) {
            $this->ProtectedCallee = $param["ProtectedCallee"];
        }

        if (array_key_exists("Uui",$param) and $param["Uui"] !== null) {
            $this->Uui = $param["Uui"];
        }

        if (array_key_exists("UUI",$param) and $param["UUI"] !== null) {
            $this->UUI = $param["UUI"];
        }

        if (array_key_exists("IVRKeyPressedEx",$param) and $param["IVRKeyPressedEx"] !== null) {
            $this->IVRKeyPressedEx = [];
            foreach ($param["IVRKeyPressedEx"] as $key => $value){
                $obj = new IVRKeyPressedElement();
                $obj->deserialize($value);
                array_push($this->IVRKeyPressedEx, $obj);
            }
        }

        if (array_key_exists("AsrUrl",$param) and $param["AsrUrl"] !== null) {
            $this->AsrUrl = $param["AsrUrl"];
        }

        if (array_key_exists("CustomRecordURL",$param) and $param["CustomRecordURL"] !== null) {
            $this->CustomRecordURL = $param["CustomRecordURL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("QueuedSkillGroupName",$param) and $param["QueuedSkillGroupName"] !== null) {
            $this->QueuedSkillGroupName = $param["QueuedSkillGroupName"];
        }

        if (array_key_exists("VoicemailRecordURL",$param) and $param["VoicemailRecordURL"] !== null) {
            $this->VoicemailRecordURL = $param["VoicemailRecordURL"];
        }

        if (array_key_exists("VoicemailAsrURL",$param) and $param["VoicemailAsrURL"] !== null) {
            $this->VoicemailAsrURL = $param["VoicemailAsrURL"];
        }
    }
}
