<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateRiskRulePolicy request structure.
 *
 * @method string getOperateType() Obtain Enable or disable
 * @method void setOperateType(string $OperateType) Set Enable or disable
 * @method array getRuleIDs() Obtain Risk rule ID collection
 * @method void setRuleIDs(array $RuleIDs) Set Risk rule ID collection
 * @method boolean getCheckAll() Obtain Select all
 * @method void setCheckAll(boolean $CheckAll) Set Select all
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getUserAppID() Obtain User AppID
 * @method void setUserAppID(integer $UserAppID) Set User AppID
 */
class OperateRiskRulePolicyRequest extends AbstractModel
{
    /**
     * @var string Enable or disable
     */
    public $OperateType;

    /**
     * @var array Risk rule ID collection
     */
    public $RuleIDs;

    /**
     * @var boolean Select all
     */
    public $CheckAll;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer User AppID
     */
    public $UserAppID;

    /**
     * @param string $OperateType Enable or disable
     * @param array $RuleIDs Risk rule ID collection
     * @param boolean $CheckAll Select all
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $UserAppID User AppID
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
        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("CheckAll",$param) and $param["CheckAll"] !== null) {
            $this->CheckAll = $param["CheckAll"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("UserAppID",$param) and $param["UserAppID"] !== null) {
            $this->UserAppID = $param["UserAppID"];
        }
    }
}
