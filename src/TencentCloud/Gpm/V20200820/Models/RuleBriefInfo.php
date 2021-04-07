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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Brief rule information
 *
 * @method string getRuleName() Obtain Rule name. It supports [a-zA-Z\d-\.]*.
 * @method void setRuleName(string $RuleName) Set Rule name. It supports [a-zA-Z\d-\.]*.
 * @method array getMatchCodeList() Obtain The associated match
 * @method void setMatchCodeList(array $MatchCodeList) Set The associated match
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getRuleCode() Obtain RuleCode
 * @method void setRuleCode(string $RuleCode) Set RuleCode
 */
class RuleBriefInfo extends AbstractModel
{
    /**
     * @var string Rule name. It supports [a-zA-Z\d-\.]*.
     */
    public $RuleName;

    /**
     * @var array The associated match
     */
    public $MatchCodeList;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string RuleCode
     */
    public $RuleCode;

    /**
     * @param string $RuleName Rule name. It supports [a-zA-Z\d-\.]*.
     * @param array $MatchCodeList The associated match
     * @param string $CreateTime Creation time
     * @param string $RuleCode RuleCode
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

        if (array_key_exists("MatchCodeList",$param) and $param["MatchCodeList"] !== null) {
            $this->MatchCodeList = [];
            foreach ($param["MatchCodeList"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->MatchCodeList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }
    }
}
