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
 * CreateAccessKeyCheckTask request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getRiskIDList() Obtain Risk list.
 * @method void setRiskIDList(array $RiskIDList) Set Risk list.
 * @method array getAccessKeyList() Obtain Access key list
 * @method void setAccessKeyList(array $AccessKeyList) Set Access key list
 * @method array getSubUinList() Obtain List of account uins
 * @method void setSubUinList(array $SubUinList) Set List of account uins
 * @method array getRiskRuleIDList() Obtain List of risk rule IDs
 * @method void setRiskRuleIDList(array $RiskRuleIDList) Set List of risk rule IDs
 */
class CreateAccessKeyCheckTaskRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Risk list.
     */
    public $RiskIDList;

    /**
     * @var array Access key list
     */
    public $AccessKeyList;

    /**
     * @var array List of account uins
     */
    public $SubUinList;

    /**
     * @var array List of risk rule IDs
     */
    public $RiskRuleIDList;

    /**
     * @param array $MemberId Group Account Member ID
     * @param array $RiskIDList Risk list.
     * @param array $AccessKeyList Access key list
     * @param array $SubUinList List of account uins
     * @param array $RiskRuleIDList List of risk rule IDs
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RiskIDList",$param) and $param["RiskIDList"] !== null) {
            $this->RiskIDList = $param["RiskIDList"];
        }

        if (array_key_exists("AccessKeyList",$param) and $param["AccessKeyList"] !== null) {
            $this->AccessKeyList = $param["AccessKeyList"];
        }

        if (array_key_exists("SubUinList",$param) and $param["SubUinList"] !== null) {
            $this->SubUinList = $param["SubUinList"];
        }

        if (array_key_exists("RiskRuleIDList",$param) and $param["RiskRuleIDList"] !== null) {
            $this->RiskRuleIDList = $param["RiskRuleIDList"];
        }
    }
}
