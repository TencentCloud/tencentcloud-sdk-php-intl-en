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
 * Phone call information
 *
 * @method string getCaller() Obtain Caller number.
 * @method void setCaller(string $Caller) Set Caller number.
 * @method string getCallee() Obtain Called number.
 * @method void setCallee(string $Callee) Set Called number.
 * @method integer getTime() Obtain Call initiation timestamp, unix timestamp.
 * @method void setTime(integer $Time) Set Call initiation timestamp, unix timestamp.
 * @method integer getDirection() Obtain Call direction: 0 - inbound, 1 - outbound.
 * @method void setDirection(integer $Direction) Set Call direction: 0 - inbound, 1 - outbound.
 * @method integer getDuration() Obtain Call duration.
 * @method void setDuration(integer $Duration) Set Call duration.
 * @method string getRecordURL() Obtain Recording information.
 * @method void setRecordURL(string $RecordURL) Set Recording information.
 * @method string getRecordId() Obtain Recording id.
 * @method void setRecordId(string $RecordId) Set Recording id.
 * @method SeatUserInfo getSeatUser() Obtain Agent information.
 * @method void setSeatUser(SeatUserInfo $SeatUser) Set Agent information.
 * @method integer getEndStatus() Obtain EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
 * @method void setEndStatus(integer $EndStatus) Set EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
 * @method string getSkillGroup() Obtain Skill group name.
 * @method void setSkillGroup(string $SkillGroup) Set Skill group name.
 * @method string getCallerLocation() Obtain Caller'S location.
 * @method void setCallerLocation(string $CallerLocation) Set Caller'S location.
 * @method integer getIVRDuration() Obtain Time spent in ivr stage.
 * @method void setIVRDuration(integer $IVRDuration) Set Time spent in ivr stage.
 * @method integer getRingTimestamp() Obtain Ring timestamp. unix second-level timestamp.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ring timestamp. unix second-level timestamp.
 * @method integer getAcceptTimestamp() Obtain Answer timestamp. unix second-level timestamp.
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) Set Answer timestamp. unix second-level timestamp.
 * @method integer getEndedTimestamp() Obtain End timestamp. unix second-level timestamp.
 * @method void setEndedTimestamp(integer $EndedTimestamp) Set End timestamp. unix second-level timestamp.
 * @method array getIVRKeyPressed() Obtain IVR key information, e.g. ["1","2","3"].
 * @method void setIVRKeyPressed(array $IVRKeyPressed) Set IVR key information, e.g. ["1","2","3"].
 * @method string getHungUpSide() Obtain Hang-Up side, seat, user, system.
 * @method void setHungUpSide(string $HungUpSide) Set Hang-Up side, seat, user, system.
 * @method array getServeParticipants() Obtain Service participant list.
 * @method void setServeParticipants(array $ServeParticipants) Set Service participant list.
 * @method integer getSkillGroupId() Obtain Skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group id.
 * @method string getEndStatusString() Obtain EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
 * @method void setEndStatusString(string $EndStatusString) Set EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
 * @method integer getStartTimestamp() Obtain Session start timestamp. unix second-level timestamp.
 * @method void setStartTimestamp(integer $StartTimestamp) Set Session start timestamp. unix second-level timestamp.
 * @method integer getQueuedTimestamp() Obtain Queue entry time. unix second-level timestamp.
 * @method void setQueuedTimestamp(integer $QueuedTimestamp) Set Queue entry time. unix second-level timestamp.
 * @method array getPostIVRKeyPressed() Obtain Post-IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
 * @method void setPostIVRKeyPressed(array $PostIVRKeyPressed) Set Post-IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
 * @method integer getQueuedSkillGroupId() Obtain Queue skill group id.
 * @method void setQueuedSkillGroupId(integer $QueuedSkillGroupId) Set Queue skill group id.
 * @method string getSessionId() Obtain Session id.
 * @method void setSessionId(string $SessionId) Set Session id.
 * @method string getProtectedCaller() Obtain Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
 * @method void setProtectedCaller(string $ProtectedCaller) Set Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
 * @method string getProtectedCallee() Obtain Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
 * @method void setProtectedCallee(string $ProtectedCallee) Set Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
 * @method string getUui() Obtain Customer custom data. (user - to - user interface).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUui(string $Uui) Set Customer custom data. (user - to - user interface).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUUI() Obtain Customer custom data. (user - to - user interface).
 * @method void setUUI(string $UUI) Set Customer custom data. (user - to - user interface).
 * @method array getIVRKeyPressedEx() Obtain IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
 * @method void setIVRKeyPressedEx(array $IVRKeyPressedEx) Set IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
 * @method string getAsrUrl() Obtain Access to the asr text information address of the recording.
 * @method void setAsrUrl(string $AsrUrl) Set Access to the asr text information address of the recording.
 * @method string getAsrStatus() Obtain ASRUrl status: complete.
Completed;.
Processing.
Generating.
NotExists.
No record (offline asr generation is not enabled or no package is available).
 * @method void setAsrStatus(string $AsrStatus) Set ASRUrl status: complete.
Completed;.
Processing.
Generating.
NotExists.
No record (offline asr generation is not enabled or no package is available).
 * @method string getCustomRecordURL() Obtain Address of the third-party cos for transferring recording.
 * @method void setCustomRecordURL(string $CustomRecordURL) Set Address of the third-party cos for transferring recording.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method string getQueuedSkillGroupName() Obtain Queue skill group name.
 * @method void setQueuedSkillGroupName(string $QueuedSkillGroupName) Set Queue skill group name.
 * @method array getVoicemailRecordURL() Obtain Audio message recording url during call.
 * @method void setVoicemailRecordURL(array $VoicemailRecordURL) Set Audio message recording url during call.
 * @method array getVoicemailAsrURL() Obtain Text information address of asr audio message during a call.
 * @method void setVoicemailAsrURL(array $VoicemailAsrURL) Set Text information address of asr audio message during a call.
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
     * @var integer Call initiation timestamp, unix timestamp.
     */
    public $Time;

    /**
     * @var integer Call direction: 0 - inbound, 1 - outbound.
     */
    public $Direction;

    /**
     * @var integer Call duration.
     */
    public $Duration;

    /**
     * @var string Recording information.
     */
    public $RecordURL;

    /**
     * @var string Recording id.
     */
    public $RecordId;

    /**
     * @var SeatUserInfo Agent information.
     */
    public $SeatUser;

    /**
     * @var integer EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
     */
    public $EndStatus;

    /**
     * @var string Skill group name.
     */
    public $SkillGroup;

    /**
     * @var string Caller'S location.
     */
    public $CallerLocation;

    /**
     * @var integer Time spent in ivr stage.
     */
    public $IVRDuration;

    /**
     * @var integer Ring timestamp. unix second-level timestamp.
     */
    public $RingTimestamp;

    /**
     * @var integer Answer timestamp. unix second-level timestamp.
     */
    public $AcceptTimestamp;

    /**
     * @var integer End timestamp. unix second-level timestamp.
     */
    public $EndedTimestamp;

    /**
     * @var array IVR key information, e.g. ["1","2","3"].
     */
    public $IVRKeyPressed;

    /**
     * @var string Hang-Up side, seat, user, system.
     */
    public $HungUpSide;

    /**
     * @var array Service participant list.
     */
    public $ServeParticipants;

    /**
     * @var integer Skill group id.
     */
    public $SkillGroupId;

    /**
     * @var string EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
     */
    public $EndStatusString;

    /**
     * @var integer Session start timestamp. unix second-level timestamp.
     */
    public $StartTimestamp;

    /**
     * @var integer Queue entry time. unix second-level timestamp.
     */
    public $QueuedTimestamp;

    /**
     * @var array Post-IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
     */
    public $PostIVRKeyPressed;

    /**
     * @var integer Queue skill group id.
     */
    public $QueuedSkillGroupId;

    /**
     * @var string Session id.
     */
    public $SessionId;

    /**
     * @var string Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
     */
    public $ProtectedCaller;

    /**
     * @var string Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
     */
    public $ProtectedCallee;

    /**
     * @var string Customer custom data. (user - to - user interface).
Note: this field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Uui;

    /**
     * @var string Customer custom data. (user - to - user interface).
     */
    public $UUI;

    /**
     * @var array IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
     */
    public $IVRKeyPressedEx;

    /**
     * @var string Access to the asr text information address of the recording.
     */
    public $AsrUrl;

    /**
     * @var string ASRUrl status: complete.
Completed;.
Processing.
Generating.
NotExists.
No record (offline asr generation is not enabled or no package is available).
     */
    public $AsrStatus;

    /**
     * @var string Address of the third-party cos for transferring recording.
     */
    public $CustomRecordURL;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var string Queue skill group name.
     */
    public $QueuedSkillGroupName;

    /**
     * @var array Audio message recording url during call.
     */
    public $VoicemailRecordURL;

    /**
     * @var array Text information address of asr audio message during a call.
     */
    public $VoicemailAsrURL;

    /**
     * @param string $Caller Caller number.
     * @param string $Callee Called number.
     * @param integer $Time Call initiation timestamp, unix timestamp.
     * @param integer $Direction Call direction: 0 - inbound, 1 - outbound.
     * @param integer $Duration Call duration.
     * @param string $RecordURL Recording information.
     * @param string $RecordId Recording id.
     * @param SeatUserInfo $SeatUser Agent information.
     * @param integer $EndStatus EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
     * @param string $SkillGroup Skill group name.
     * @param string $CallerLocation Caller'S location.
     * @param integer $IVRDuration Time spent in ivr stage.
     * @param integer $RingTimestamp Ring timestamp. unix second-level timestamp.
     * @param integer $AcceptTimestamp Answer timestamp. unix second-level timestamp.
     * @param integer $EndedTimestamp End timestamp. unix second-level timestamp.
     * @param array $IVRKeyPressed IVR key information, e.g. ["1","2","3"].
     * @param string $HungUpSide Hang-Up side, seat, user, system.
     * @param array $ServeParticipants Service participant list.
     * @param integer $SkillGroupId Skill group id.
     * @param string $EndStatusString EndStatus corresponds one-to-one with endstatusstring, with specific enumerations as follows:.

**Scenario	EndStatus	EndStatusString	Status description**.

Inbound call & call	1	ok	end properly.

Inbound call & call | 0 | error | system error.

Inbound call | 102 | ivrgiveup | user gives up during ivr.

Inbound call | 103 | waitinggiveup | user gives up during session queue.

Inbound call | 104 | ringinggiveup | user gives up during session ringing.

Inbound call | 105 | noseatonline | no agent online.

Inbound call              106	       non - working hour      non - working hour.   

Inbound call              107	       ivrend                   end directly after ivr.

Inbound call              100	       blocklist call - in      call - in blocklist. 

Outgoing call            2                 unconnected            unconnected.

Outgoing call            108           restricted callee      callee restricted due to high - risk.

Outgoing call         109        toomanyrequest        overfrequency.

Outgoing call         110        restrictedarea        outbound blind area.

Outgoing call         111        restrictedtime        outbound time restriction.
                         
Outgoing call         201        unknown               unknown status.

Outgoing call         202        notanswer             unanswered.

Outgoing call - 203 - userreject: reject call.

Outgoing call - 204 - poweroff: power off.

Outgoing call - 205 - numbernotexist: nonexistent number.

Outgoing call - 206 - busy: call in progress.

Outgoing call - 207 - outofcredit: arrears.

Outgoing call - 208 - operatorerror - ISP line exception.

Outgoing call - 209 - callercancel - caller cancellation.

Outgoing call - 210 - notinservice - not in service area.

Inbound and outgoing call - 211 - clienterror - client error.
Outgoing call - 212 - carrierblocked - ISP blocking.
     * @param integer $StartTimestamp Session start timestamp. unix second-level timestamp.
     * @param integer $QueuedTimestamp Queue entry time. unix second-level timestamp.
     * @param array $PostIVRKeyPressed Post-IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
     * @param integer $QueuedSkillGroupId Queue skill group id.
     * @param string $SessionId Session id.
     * @param string $ProtectedCaller Caller number protection id. effective when the number protection map feature is activated, and the caller field is empty.
     * @param string $ProtectedCallee Called number protection id. effective when the number protection map feature is activated, and the callee field is empty.
     * @param string $Uui Customer custom data. (user - to - user interface).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UUI Customer custom data. (user - to - user interface).
     * @param array $IVRKeyPressedEx IVR key information (e.g. [{"key":"1","label":"very satisfied"}]).
     * @param string $AsrUrl Access to the asr text information address of the recording.
     * @param string $AsrStatus ASRUrl status: complete.
Completed;.
Processing.
Generating.
NotExists.
No record (offline asr generation is not enabled or no package is available).
     * @param string $CustomRecordURL Address of the third-party cos for transferring recording.
     * @param string $Remark Remarks.
     * @param string $QueuedSkillGroupName Queue skill group name.
     * @param array $VoicemailRecordURL Audio message recording url during call.
     * @param array $VoicemailAsrURL Text information address of asr audio message during a call.
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

        if (array_key_exists("AsrStatus",$param) and $param["AsrStatus"] !== null) {
            $this->AsrStatus = $param["AsrStatus"];
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
