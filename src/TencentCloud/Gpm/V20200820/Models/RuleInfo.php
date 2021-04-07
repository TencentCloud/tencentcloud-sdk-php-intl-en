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
 * Rule information
 *
 * @method string getRuleName() Obtain Rule name. It supports [a-zA-Z0-9-\.]*.
 * @method void setRuleName(string $RuleName) Set Rule name. It supports [a-zA-Z0-9-\.]*.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getRuleDesc() Obtain Rule description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRuleDesc(string $RuleDesc) Set Rule description
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRuleScript() Obtain Rule script
 * @method void setRuleScript(string $RuleScript) Set Rule script
 * @method array getTags() Obtain Tag
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTags(array $Tags) Set Tag
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getMatchCodeList() Obtain The associated match
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMatchCodeList(array $MatchCodeList) Set The associated match
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getRuleCode() Obtain RuleCode
 * @method void setRuleCode(string $RuleCode) Set RuleCode
 * @method string getRegion() Obtain Region
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRegion(string $Region) Set Region
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getAppId() Obtain User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAppId(string $AppId) Set User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getUin() Obtain User UIN
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setUin(string $Uin) Set User UIN
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getCreateUin() Obtain User OwnerUin
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCreateUin(string $CreateUin) Set User OwnerUin
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var string Rule name. It supports [a-zA-Z0-9-\.]*.
     */
    public $RuleName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Rule description
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RuleDesc;

    /**
     * @var string Rule script
     */
    public $RuleScript;

    /**
     * @var array Tag
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Tags;

    /**
     * @var array The associated match
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MatchCodeList;

    /**
     * @var string RuleCode
     */
    public $RuleCode;

    /**
     * @var string Region
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Region;

    /**
     * @var string User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AppId;

    /**
     * @var string User UIN
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Uin;

    /**
     * @var string User OwnerUin
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CreateUin;

    /**
     * @param string $RuleName Rule name. It supports [a-zA-Z0-9-\.]*.
     * @param string $CreateTime Creation time
     * @param string $RuleDesc Rule description
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RuleScript Rule script
     * @param array $Tags Tag
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $MatchCodeList The associated match
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $RuleCode RuleCode
     * @param string $Region Region
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $AppId User AppId
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Uin User UIN
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $CreateUin User OwnerUin
Note: this field may return `null`, indicating that no valid value is obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("RuleScript",$param) and $param["RuleScript"] !== null) {
            $this->RuleScript = $param["RuleScript"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("MatchCodeList",$param) and $param["MatchCodeList"] !== null) {
            $this->MatchCodeList = [];
            foreach ($param["MatchCodeList"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->MatchCodeList, $obj);
            }
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }
    }
}
