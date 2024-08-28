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
 * Core File Monitoring Rule Details
 *
 * @method string getName() Obtain Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Rule name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Update time
 * @method void setModifyTime(string $ModifyTime) Set Update time
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getStatus() Obtain Status. 0: Enabled; 1: Disabled
 * @method void setStatus(integer $Status) Set Status. 0: Enabled; 1: Disabled
 * @method array getRule() Obtain Rule
 * @method void setRule(array $Rule) Set Rule
 * @method array getUuids() Obtain Effective Host UUID. Empty means all hosts, and returned number of entries can be controlled through parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuids(array $Uuids) Set Effective Host UUID. Empty means all hosts, and returned number of entries can be controlled through parameters.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 * @method integer getIsGlobal() Obtain Global Rule or Not (No by Default). 0: No; 1: Yes
 * @method void setIsGlobal(integer $IsGlobal) Set Global Rule or Not (No by Default). 0: No; 1: Yes
 * @method integer getLevel() Obtain Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method void setLevel(integer $Level) Set Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method integer getUuidTotalCount() Obtain Total Number of Effective Hosts
 * @method void setUuidTotalCount(integer $UuidTotalCount) Set Total Number of Effective Hosts
 * @method string getAddWhiteType() Obtain Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddWhiteType(string $AddWhiteType) Set Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FileTamperRuleDetail extends AbstractModel
{
    /**
     * @var string Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Update time
     */
    public $ModifyTime;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Status. 0: Enabled; 1: Disabled
     */
    public $Status;

    /**
     * @var array Rule
     */
    public $Rule;

    /**
     * @var array Effective Host UUID. Empty means all hosts, and returned number of entries can be controlled through parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuids;

    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @var integer Global Rule or Not (No by Default). 0: No; 1: Yes
     */
    public $IsGlobal;

    /**
     * @var integer Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     */
    public $Level;

    /**
     * @var integer Total Number of Effective Hosts
     */
    public $UuidTotalCount;

    /**
     * @var string Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddWhiteType;

    /**
     * @param string $Name Rule name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Update time
     * @param string $CreateTime Creation time
     * @param integer $Status Status. 0: Enabled; 1: Disabled
     * @param array $Rule Rule
     * @param array $Uuids Effective Host UUID. Empty means all hosts, and returned number of entries can be controlled through parameters.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Rule ID
     * @param integer $IsGlobal Global Rule or Not (No by Default). 0: No; 1: Yes
     * @param integer $Level Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     * @param integer $UuidTotalCount Total Number of Effective Hosts
     * @param string $AddWhiteType Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all items that meet the conditions to the allowlist</li>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new FileTamperRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("UuidTotalCount",$param) and $param["UuidTotalCount"] !== null) {
            $this->UuidTotalCount = $param["UuidTotalCount"];
        }

        if (array_key_exists("AddWhiteType",$param) and $param["AddWhiteType"] !== null) {
            $this->AddWhiteType = $param["AddWhiteType"];
        }
    }
}
