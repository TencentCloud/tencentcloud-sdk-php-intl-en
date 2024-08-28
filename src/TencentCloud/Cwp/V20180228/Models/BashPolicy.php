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
 * High-risk command policy
 *
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method integer getEnable() Obtain 1: valid; 0: invalid
 * @method void setEnable(integer $Enable) Set 1: valid; 0: invalid
 * @method integer getWhite() Obtain 0: blocklist; 1: allowlist
 * @method void setWhite(integer $White) Set 0: blocklist; 1: allowlist
 * @method integer getBashAction() Obtain 0: alarm; 1: allowlist; 2: intercept
 * @method void setBashAction(integer $BashAction) Set 0: alarm; 1: allowlist; 2: intercept
 * @method string getRule() Obtain Regular expression
 * @method void setRule(string $Rule) Set Regular expression
 * @method integer getLevel() Obtain Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
 * @method void setLevel(integer $Level) Set Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
 * @method integer getScope() Obtain Effective scope (0: a group of QUUID; 1: all professional editions (including ultimate edition); 2: all ultimate editions; 3: all hosts)
 * @method void setScope(integer $Scope) Set Effective scope (0: a group of QUUID; 1: all professional editions (including ultimate edition); 2: all ultimate editions; 3: all hosts)
 * @method integer getId() Obtain Policy ID
 * @method void setId(integer $Id) Set Policy ID
 * @method string getDescript() Obtain Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescript(string $Descript) Set Policy description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEventId() Obtain When it is added to the allowlist, the EventId needs to be passed in.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventId(integer $EventId) Set When it is added to the allowlist, the EventId needs to be passed in.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDealOldEvents() Obtain Whether to process old events as allowlisted ones: 0 - no; 1 - yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealOldEvents(integer $DealOldEvents) Set Whether to process old events as allowlisted ones: 0 - no; 1 - yes
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getQuuids() Obtain A collection of QUUIDs for effective hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuids(array $Quuids) Set A collection of QUUIDs for effective hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCategory() Obtain Policy type: 0 - system; 1 - user
 * @method void setCategory(integer $Category) Set Policy type: 0 - system; 1 - user
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method array getUuids() Obtain Compatibility with older versions may be needed.
 * @method void setUuids(array $Uuids) Set Compatibility with older versions may be needed.
 */
class BashPolicy extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var integer 1: valid; 0: invalid
     */
    public $Enable;

    /**
     * @var integer 0: blocklist; 1: allowlist
     */
    public $White;

    /**
     * @var integer 0: alarm; 1: allowlist; 2: intercept
     */
    public $BashAction;

    /**
     * @var string Regular expression
     */
    public $Rule;

    /**
     * @var integer Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
     */
    public $Level;

    /**
     * @var integer Effective scope (0: a group of QUUID; 1: all professional editions (including ultimate edition); 2: all ultimate editions; 3: all hosts)
     */
    public $Scope;

    /**
     * @var integer Policy ID
     */
    public $Id;

    /**
     * @var string Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Descript;

    /**
     * @var integer When it is added to the allowlist, the EventId needs to be passed in.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventId;

    /**
     * @var integer Whether to process old events as allowlisted ones: 0 - no; 1 - yes
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealOldEvents;

    /**
     * @var array A collection of QUUIDs for effective hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuids;

    /**
     * @var integer Policy type: 0 - system; 1 - user
     */
    public $Category;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var array Compatibility with older versions may be needed.
     */
    public $Uuids;

    /**
     * @param string $Name Policy name
     * @param integer $Enable 1: valid; 0: invalid
     * @param integer $White 0: blocklist; 1: allowlist
     * @param integer $BashAction 0: alarm; 1: allowlist; 2: intercept
     * @param string $Rule Regular expression
     * @param integer $Level Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
     * @param integer $Scope Effective scope (0: a group of QUUID; 1: all professional editions (including ultimate edition); 2: all ultimate editions; 3: all hosts)
     * @param integer $Id Policy ID
     * @param string $Descript Policy description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EventId When it is added to the allowlist, the EventId needs to be passed in.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DealOldEvents Whether to process old events as allowlisted ones: 0 - no; 1 - yes
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Quuids A collection of QUUIDs for effective hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Category Policy type: 0 - system; 1 - user
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param array $Uuids Compatibility with older versions may be needed.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("White",$param) and $param["White"] !== null) {
            $this->White = $param["White"];
        }

        if (array_key_exists("BashAction",$param) and $param["BashAction"] !== null) {
            $this->BashAction = $param["BashAction"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }
    }
}
