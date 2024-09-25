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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserSignatureRule request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getMainClassID() Obtain Main class ID
 * @method void setMainClassID(string $MainClassID) Set Main class ID
 * @method integer getStatus() Obtain Main class switch 0=off, 1=on, 2=alarm only
 * @method void setStatus(integer $Status) Set Main class switch 0=off, 1=on, 2=alarm only
 * @method array getRuleID() Obtain List of rules issued for modification
 * @method void setRuleID(array $RuleID) Set List of rules issued for modification
 */
class ModifyUserSignatureRuleRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Main class ID
     */
    public $MainClassID;

    /**
     * @var integer Main class switch 0=off, 1=on, 2=alarm only
     */
    public $Status;

    /**
     * @var array List of rules issued for modification
     */
    public $RuleID;

    /**
     * @param string $Domain Domain name
     * @param string $MainClassID Main class ID
     * @param integer $Status Main class switch 0=off, 1=on, 2=alarm only
     * @param array $RuleID List of rules issued for modification
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("MainClassID",$param) and $param["MainClassID"] !== null) {
            $this->MainClassID = $param["MainClassID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = [];
            foreach ($param["RuleID"] as $key => $value){
                $obj = new ReqUserRule();
                $obj->deserialize($value);
                array_push($this->RuleID, $obj);
            }
        }
    }
}
