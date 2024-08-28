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
 * Baseline detection information
 *
 * @method string getRuleName() Obtain Detection item name
 * @method void setRuleName(string $RuleName) Set Detection item name
 * @method string getDescription() Obtain Detection item description
 * @method void setDescription(string $Description) Set Detection item description
 * @method string getFixMessage() Obtain Fixing suggestion
 * @method void setFixMessage(string $FixMessage) Set Fixing suggestion
 * @method integer getLevel() Obtain Severity level
 * @method void setLevel(integer $Level) Set Severity level
 * @method integer getStatus() Obtain Status
 * @method void setStatus(integer $Status) Set Status
 * @method integer getRuleId() Obtain Detection Item ID
 * @method void setRuleId(integer $RuleId) Set Detection Item ID
 * @method string getLastScanAt() Obtain Last detection Time
 * @method void setLastScanAt(string $LastScanAt) Set Last detection Time
 * @method string getRuleRemark() Obtain Specific reason explanation
 * @method void setRuleRemark(string $RuleRemark) Set Specific reason explanation
 * @method string getUuid() Obtain Unique UUID
 * @method void setUuid(string $Uuid) Set Unique UUID
 * @method integer getEventId() Obtain Unique event ID
 * @method void setEventId(integer $EventId) Set Unique event ID
 */
class BaselineRuleInfo extends AbstractModel
{
    /**
     * @var string Detection item name
     */
    public $RuleName;

    /**
     * @var string Detection item description
     */
    public $Description;

    /**
     * @var string Fixing suggestion
     */
    public $FixMessage;

    /**
     * @var integer Severity level
     */
    public $Level;

    /**
     * @var integer Status
     */
    public $Status;

    /**
     * @var integer Detection Item ID
     */
    public $RuleId;

    /**
     * @var string Last detection Time
     */
    public $LastScanAt;

    /**
     * @var string Specific reason explanation
     */
    public $RuleRemark;

    /**
     * @var string Unique UUID
     */
    public $Uuid;

    /**
     * @var integer Unique event ID
     */
    public $EventId;

    /**
     * @param string $RuleName Detection item name
     * @param string $Description Detection item description
     * @param string $FixMessage Fixing suggestion
     * @param integer $Level Severity level
     * @param integer $Status Status
     * @param integer $RuleId Detection Item ID
     * @param string $LastScanAt Last detection Time
     * @param string $RuleRemark Specific reason explanation
     * @param string $Uuid Unique UUID
     * @param integer $EventId Unique event ID
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("LastScanAt",$param) and $param["LastScanAt"] !== null) {
            $this->LastScanAt = $param["LastScanAt"];
        }

        if (array_key_exists("RuleRemark",$param) and $param["RuleRemark"] !== null) {
            $this->RuleRemark = $param["RuleRemark"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
