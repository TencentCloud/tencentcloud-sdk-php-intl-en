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
 * Participant information.
 *
 * @method string getMail() Obtain Agent email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMail(string $Mail) Set Agent email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhone() Obtain Agent Telephone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhone(string $Phone) Set Agent Telephone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRingTimestamp() Obtain Ring timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ring timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAcceptTimestamp() Obtain Answer timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) Set Answer timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndedTimestamp() Obtain End timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndedTimestamp(integer $EndedTimestamp) Set End timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordId() Obtain Recording ID, which can be used to index the recording on the agent side
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordId(string $RecordId) Set Recording ID, which can be used to index the recording on the agent side
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Participant type: "staffSeat", "outboundSeat", "staffPhoneSeat".
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Participant type: "staffSeat", "outboundSeat", "staffPhoneSeat".
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferFrom() Obtain Transfer Source Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferFrom(string $TransferFrom) Set Transfer Source Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferFromType() Obtain Transfer source participant type is consistent with the Type value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferFromType(string $TransferFromType) Set Transfer source participant type is consistent with the Type value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferTo() Obtain Transfer Destination Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferTo(string $TransferTo) Set Transfer Destination Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferToType() Obtain Transfer destination participant type is consistent with Type values.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferToType(string $TransferToType) Set Transfer destination participant type is consistent with Type values.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSkillGroupId() Obtain Skill group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndStatusString() Obtain Ending status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndStatusString(string $EndStatusString) Set Ending status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordURL() Obtain Recording URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecordURL(string $RecordURL) Set Recording URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSequence() Obtain Participant sequence number, starting from 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSequence(integer $Sequence) Set Participant sequence number, starting from 0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTimestamp() Obtain Start timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTimestamp(integer $StartTimestamp) Set Start timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSkillGroupName() Obtain Skill Group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill Group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCustomRecordURL() Obtain Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomRecordURL(string $CustomRecordURL) Set Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServeParticipant extends AbstractModel
{
    /**
     * @var string Agent email.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mail;

    /**
     * @var string Agent Telephone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Phone;

    /**
     * @var integer Ring timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RingTimestamp;

    /**
     * @var integer Answer timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AcceptTimestamp;

    /**
     * @var integer End timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndedTimestamp;

    /**
     * @var string Recording ID, which can be used to index the recording on the agent side
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordId;

    /**
     * @var string Participant type: "staffSeat", "outboundSeat", "staffPhoneSeat".
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Transfer Source Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferFrom;

    /**
     * @var string Transfer source participant type is consistent with the Type value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferFromType;

    /**
     * @var string Transfer Destination Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferTo;

    /**
     * @var string Transfer destination participant type is consistent with Type values.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferToType;

    /**
     * @var integer Skill group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupId;

    /**
     * @var string Ending status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndStatusString;

    /**
     * @var string Recording URL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecordURL;

    /**
     * @var integer Participant sequence number, starting from 0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sequence;

    /**
     * @var integer Start timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTimestamp;

    /**
     * @var string Skill Group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SkillGroupName;

    /**
     * @var string Address of the third party COS for transferring recording.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomRecordURL;

    /**
     * @param string $Mail Agent email.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Phone Agent Telephone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RingTimestamp Ring timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AcceptTimestamp Answer timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndedTimestamp End timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordId Recording ID, which can be used to index the recording on the agent side
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Participant type: "staffSeat", "outboundSeat", "staffPhoneSeat".
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferFrom Transfer Source Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferFromType Transfer source participant type is consistent with the Type value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferTo Transfer Destination Agent Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferToType Transfer destination participant type is consistent with Type values.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SkillGroupId Skill group ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndStatusString Ending status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordURL Recording URL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Sequence Participant sequence number, starting from 0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTimestamp Start timestamp. Unix second-level timestamp.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SkillGroupName Skill Group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CustomRecordURL Address of the third party COS for transferring recording.
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
        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TransferFrom",$param) and $param["TransferFrom"] !== null) {
            $this->TransferFrom = $param["TransferFrom"];
        }

        if (array_key_exists("TransferFromType",$param) and $param["TransferFromType"] !== null) {
            $this->TransferFromType = $param["TransferFromType"];
        }

        if (array_key_exists("TransferTo",$param) and $param["TransferTo"] !== null) {
            $this->TransferTo = $param["TransferTo"];
        }

        if (array_key_exists("TransferToType",$param) and $param["TransferToType"] !== null) {
            $this->TransferToType = $param["TransferToType"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("EndStatusString",$param) and $param["EndStatusString"] !== null) {
            $this->EndStatusString = $param["EndStatusString"];
        }

        if (array_key_exists("RecordURL",$param) and $param["RecordURL"] !== null) {
            $this->RecordURL = $param["RecordURL"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("CustomRecordURL",$param) and $param["CustomRecordURL"] !== null) {
            $this->CustomRecordURL = $param["CustomRecordURL"];
        }
    }
}
