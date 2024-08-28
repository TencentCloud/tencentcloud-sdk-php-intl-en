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
 * ModifyFileTamperRule request structure.
 *
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method array getRules() Obtain Rule content
 * @method void setRules(array $Rules) Set Rule content
 * @method integer getIsGlobal() Obtain Whether the rule is global (not global by default). 0: no; 1: yes. If the value is 1, Uuids can be left blank.
 * @method void setIsGlobal(integer $IsGlobal) Set Whether the rule is global (not global by default). 0: no; 1: yes. If the value is 1, Uuids can be left blank.
 * @method integer getStatus() Obtain Enabling status. 0: enabled; 1: disabled.
 * @method void setStatus(integer $Status) Set Enabling status. 0: enabled; 1: disabled.
 * @method integer getId() Obtain Rule ID. If this parameter is left blank or set to 0, the rule is to be added.
 * @method void setId(integer $Id) Set Rule ID. If this parameter is left blank or set to 0, the rule is to be added.
 * @method array getUuids() Obtain UUID array of affected hosts
 * @method void setUuids(array $Uuids) Set UUID array of affected hosts
 * @method integer getLevel() Obtain Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method void setLevel(integer $Level) Set Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
 * @method string getAddWhiteType() Obtain Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all objects that meet the conditions to the allowlist</li>
 * @method void setAddWhiteType(string $AddWhiteType) Set Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all objects that meet the conditions to the allowlist</li>
 */
class ModifyFileTamperRuleRequest extends AbstractModel
{
    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var array Rule content
     */
    public $Rules;

    /**
     * @var integer Whether the rule is global (not global by default). 0: no; 1: yes. If the value is 1, Uuids can be left blank.
     */
    public $IsGlobal;

    /**
     * @var integer Enabling status. 0: enabled; 1: disabled.
     */
    public $Status;

    /**
     * @var integer Rule ID. If this parameter is left blank or set to 0, the rule is to be added.
     */
    public $Id;

    /**
     * @var array UUID array of affected hosts
     */
    public $Uuids;

    /**
     * @var integer Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     */
    public $Level;

    /**
     * @var string Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all objects that meet the conditions to the allowlist</li>
     */
    public $AddWhiteType;

    /**
     * @param string $Name Rule name
     * @param array $Rules Rule content
     * @param integer $IsGlobal Whether the rule is global (not global by default). 0: no; 1: yes. If the value is 1, Uuids can be left blank.
     * @param integer $Status Enabling status. 0: enabled; 1: disabled.
     * @param integer $Id Rule ID. If this parameter is left blank or set to 0, the rule is to be added.
     * @param array $Uuids UUID array of affected hosts
     * @param integer $Level Risk Level. 0: None; 1: High-Risk; 2: Medium-Risk; 3: Low-Risk
     * @param string $AddWhiteType Allowlisted processing type
<li>cur: add the current items to the allowlist</li>
<li>all: add all objects that meet the conditions to the allowlist</li>
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

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new FileTamperRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AddWhiteType",$param) and $param["AddWhiteType"] !== null) {
            $this->AddWhiteType = $param["AddWhiteType"];
        }
    }
}
