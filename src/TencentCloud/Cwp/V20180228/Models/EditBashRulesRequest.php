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
 * EditBashRules request structure.
 *
 * @method integer getId() Obtain Rule ID (leave this parameter blank for addition)
 * @method void setId(integer $Id) Set Rule ID (leave this parameter blank for addition)
 * @method array getUuids() Obtain Client ID array
 * @method void setUuids(array $Uuids) Set Client ID array
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getName() Obtain Rule name, which cannot be modified during editing
 * @method void setName(string $Name) Set Rule name, which cannot be modified during editing
 * @method integer getLevel() Obtain Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
 * @method void setLevel(integer $Level) Set Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
 * @method string getRule() Obtain Regular expression, which cannot be modified during editing. Apply the QueryEscape function to the content and then perform Base64 encoding.
 * @method void setRule(string $Rule) Set Regular expression, which cannot be modified during editing. Apply the QueryEscape function to the content and then perform Base64 encoding.
 * @method integer getIsGlobal() Obtain Whether the rule is global. 1: global; 0: not global (default value).
 * @method void setIsGlobal(integer $IsGlobal) Set Whether the rule is global. 1: global; 0: not global (default value).
 * @method integer getWhite() Obtain 0: blocklist; 1: allowlist
 * @method void setWhite(integer $White) Set 0: blocklist; 1: allowlist
 * @method integer getEventId() Obtain When it is added to the allowlist, the event ID needs to be passed in.
 * @method void setEventId(integer $EventId) Set When it is added to the allowlist, the event ID needs to be passed in.
 * @method integer getDealOldEvents() Obtain Whether to add existing events to the allowlist. 0: no; 1: yes.
 * @method void setDealOldEvents(integer $DealOldEvents) Set Whether to add existing events to the allowlist. 0: no; 1: yes.
 */
class EditBashRulesRequest extends AbstractModel
{
    /**
     * @var integer Rule ID (leave this parameter blank for addition)
     */
    public $Id;

    /**
     * @var array Client ID array
     */
    public $Uuids;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string Rule name, which cannot be modified during editing
     */
    public $Name;

    /**
     * @var integer Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
     */
    public $Level;

    /**
     * @var string Regular expression, which cannot be modified during editing. Apply the QueryEscape function to the content and then perform Base64 encoding.
     */
    public $Rule;

    /**
     * @var integer Whether the rule is global. 1: global; 0: not global (default value).
     */
    public $IsGlobal;

    /**
     * @var integer 0: blocklist; 1: allowlist
     */
    public $White;

    /**
     * @var integer When it is added to the allowlist, the event ID needs to be passed in.
     */
    public $EventId;

    /**
     * @var integer Whether to add existing events to the allowlist. 0: no; 1: yes.
     */
    public $DealOldEvents;

    /**
     * @param integer $Id Rule ID (leave this parameter blank for addition)
     * @param array $Uuids Client ID array
     * @param string $HostIp Host IP address
     * @param string $Name Rule name, which cannot be modified during editing
     * @param integer $Level Risk level (0: none; 1: high-risk; 2: medium-risk; 3: low-risk)
     * @param string $Rule Regular expression, which cannot be modified during editing. Apply the QueryEscape function to the content and then perform Base64 encoding.
     * @param integer $IsGlobal Whether the rule is global. 1: global; 0: not global (default value).
     * @param integer $White 0: blocklist; 1: allowlist
     * @param integer $EventId When it is added to the allowlist, the event ID needs to be passed in.
     * @param integer $DealOldEvents Whether to add existing events to the allowlist. 0: no; 1: yes.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("White",$param) and $param["White"] !== null) {
            $this->White = $param["White"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }
    }
}
