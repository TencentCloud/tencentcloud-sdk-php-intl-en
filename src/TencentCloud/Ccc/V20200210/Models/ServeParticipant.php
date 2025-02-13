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
 * @method void setMail(string $Mail) Set Agent email.
 * @method string getPhone() Obtain Agent phone number.
 * @method void setPhone(string $Phone) Set Agent phone number.
 * @method integer getRingTimestamp() Obtain Ringing timestamp, unix second-level timestamp.
 * @method void setRingTimestamp(integer $RingTimestamp) Set Ringing timestamp, unix second-level timestamp.
 * @method integer getAcceptTimestamp() Obtain Answer timestamp. unix second-level timestamp.
 * @method void setAcceptTimestamp(integer $AcceptTimestamp) Set Answer timestamp. unix second-level timestamp.
 * @method integer getEndedTimestamp() Obtain End timestamp. unix second-level timestamp.
 * @method void setEndedTimestamp(integer $EndedTimestamp) Set End timestamp. unix second-level timestamp.
 * @method string getRecordId() Obtain Recording id can be indexed to the agent side recording.
 * @method void setRecordId(string $RecordId) Set Recording id can be indexed to the agent side recording.
 * @method string getType() Obtain Participant type: "staffseat", "outboundseat", "staffphoneseat".
 * @method void setType(string $Type) Set Participant type: "staffseat", "outboundseat", "staffphoneseat".
 * @method string getTransferFrom() Obtain Transfer source agent information.
 * @method void setTransferFrom(string $TransferFrom) Set Transfer source agent information.
 * @method string getTransferFromType() Obtain Transfer source participant type is consistent with the type value.
 * @method void setTransferFromType(string $TransferFromType) Set Transfer source participant type is consistent with the type value.
 * @method string getTransferTo() Obtain Transfer destination agent information.
 * @method void setTransferTo(string $TransferTo) Set Transfer destination agent information.
 * @method string getTransferToType() Obtain Transfer destination participant type, which is consistent with type values.
 * @method void setTransferToType(string $TransferToType) Set Transfer destination participant type, which is consistent with type values.
 * @method integer getSkillGroupId() Obtain Skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group id.
 * @method string getEndStatusString() Obtain Ending status.
 * @method void setEndStatusString(string $EndStatusString) Set Ending status.
 * @method string getRecordURL() Obtain Recording url.
 * @method void setRecordURL(string $RecordURL) Set Recording url.
 * @method integer getSequence() Obtain Participant sequence number, starting from 0.
 * @method void setSequence(integer $Sequence) Set Participant sequence number, starting from 0.
 * @method integer getStartTimestamp() Obtain Start timestamp. unix second-level timestamp.
 * @method void setStartTimestamp(integer $StartTimestamp) Set Start timestamp. unix second-level timestamp.
 * @method string getSkillGroupName() Obtain Skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill group name.
 * @method string getCustomRecordURL() Obtain Address of the third-party cos for transferring recording.
 * @method void setCustomRecordURL(string $CustomRecordURL) Set Address of the third-party cos for transferring recording.
 */
class ServeParticipant extends AbstractModel
{
    /**
     * @var string Agent email.
     */
    public $Mail;

    /**
     * @var string Agent phone number.
     */
    public $Phone;

    /**
     * @var integer Ringing timestamp, unix second-level timestamp.
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
     * @var string Recording id can be indexed to the agent side recording.
     */
    public $RecordId;

    /**
     * @var string Participant type: "staffseat", "outboundseat", "staffphoneseat".
     */
    public $Type;

    /**
     * @var string Transfer source agent information.
     */
    public $TransferFrom;

    /**
     * @var string Transfer source participant type is consistent with the type value.
     */
    public $TransferFromType;

    /**
     * @var string Transfer destination agent information.
     */
    public $TransferTo;

    /**
     * @var string Transfer destination participant type, which is consistent with type values.
     */
    public $TransferToType;

    /**
     * @var integer Skill group id.
     */
    public $SkillGroupId;

    /**
     * @var string Ending status.
     */
    public $EndStatusString;

    /**
     * @var string Recording url.
     */
    public $RecordURL;

    /**
     * @var integer Participant sequence number, starting from 0.
     */
    public $Sequence;

    /**
     * @var integer Start timestamp. unix second-level timestamp.
     */
    public $StartTimestamp;

    /**
     * @var string Skill group name.
     */
    public $SkillGroupName;

    /**
     * @var string Address of the third-party cos for transferring recording.
     */
    public $CustomRecordURL;

    /**
     * @param string $Mail Agent email.
     * @param string $Phone Agent phone number.
     * @param integer $RingTimestamp Ringing timestamp, unix second-level timestamp.
     * @param integer $AcceptTimestamp Answer timestamp. unix second-level timestamp.
     * @param integer $EndedTimestamp End timestamp. unix second-level timestamp.
     * @param string $RecordId Recording id can be indexed to the agent side recording.
     * @param string $Type Participant type: "staffseat", "outboundseat", "staffphoneseat".
     * @param string $TransferFrom Transfer source agent information.
     * @param string $TransferFromType Transfer source participant type is consistent with the type value.
     * @param string $TransferTo Transfer destination agent information.
     * @param string $TransferToType Transfer destination participant type, which is consistent with type values.
     * @param integer $SkillGroupId Skill group id.
     * @param string $EndStatusString Ending status.
     * @param string $RecordURL Recording url.
     * @param integer $Sequence Participant sequence number, starting from 0.
     * @param integer $StartTimestamp Start timestamp. unix second-level timestamp.
     * @param string $SkillGroupName Skill group name.
     * @param string $CustomRecordURL Address of the third-party cos for transferring recording.
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
