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
 * High-risk command rules
 *
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method string getUuid() Obtain Client ID
 * @method void setUuid(string $Uuid) Set Client ID
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method integer getLevel() Obtain Risk level (0: none, 1: high-risk, 2: medium-risk, 3: low-risk)
 * @method void setLevel(integer $Level) Set Risk level (0: none, 1: high-risk, 2: medium-risk, 3: low-risk)
 * @method string getRule() Obtain Regular expression
 * @method void setRule(string $Rule) Set Regular expression
 * @method string getDecription() Obtain Rule description
 * @method void setDecription(string $Decription) Set Rule description
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method integer getIsGlobal() Obtain Whether a global rule
 * @method void setIsGlobal(integer $IsGlobal) Set Whether a global rule
 * @method integer getStatus() Obtain Status (0: valid; 1: invalid)
 * @method void setStatus(integer $Status) Set Status (0: valid; 1: invalid)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 * @method string getHostip() Obtain Host IP
 * @method void setHostip(string $Hostip) Set Host IP
 * @method array getUuids() Obtain Arrays of UUIDs for servers to be effective
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuids(array $Uuids) Set Arrays of UUIDs for servers to be effective
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWhite() Obtain 0= blocklist; 1= allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWhite(integer $White) Set 0= blocklist; 1= allowlist
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDealOldEvents() Obtain Whether to process previous events: 0: do not process; 1: process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealOldEvents(integer $DealOldEvents) Set Whether to process previous events: 0: do not process; 1: process
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Rule description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Rule description
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BashRule extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var string Client ID
     */
    public $Uuid;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var integer Risk level (0: none, 1: high-risk, 2: medium-risk, 3: low-risk)
     */
    public $Level;

    /**
     * @var string Regular expression
     */
    public $Rule;

    /**
     * @var string Rule description
     * @deprecated
     */
    public $Decription;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var integer Whether a global rule
     */
    public $IsGlobal;

    /**
     * @var integer Status (0: valid; 1: invalid)
     */
    public $Status;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @var string Host IP
     */
    public $Hostip;

    /**
     * @var array Arrays of UUIDs for servers to be effective
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuids;

    /**
     * @var integer 0= blocklist; 1= allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $White;

    /**
     * @var integer Whether to process previous events: 0: do not process; 1: process
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealOldEvents;

    /**
     * @var string Rule description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param integer $Id Rule ID
     * @param string $Uuid Client ID
     * @param string $Name Rule name
     * @param integer $Level Risk level (0: none, 1: high-risk, 2: medium-risk, 3: low-risk)
     * @param string $Rule Regular expression
     * @param string $Decription Rule description
     * @param string $Operator Operator
     * @param integer $IsGlobal Whether a global rule
     * @param integer $Status Status (0: valid; 1: invalid)
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
     * @param string $Hostip Host IP
     * @param array $Uuids Arrays of UUIDs for servers to be effective
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $White 0= blocklist; 1= allowlist
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DealOldEvents Whether to process previous events: 0: do not process; 1: process
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Rule description
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("Decription",$param) and $param["Decription"] !== null) {
            $this->Decription = $param["Decription"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Hostip",$param) and $param["Hostip"] !== null) {
            $this->Hostip = $param["Hostip"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("White",$param) and $param["White"] !== null) {
            $this->White = $param["White"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
