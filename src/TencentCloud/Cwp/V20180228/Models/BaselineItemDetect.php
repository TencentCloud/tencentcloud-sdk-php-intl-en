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
 * Baseline detection item
 *
 * @method integer getItemId() Obtain Item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemId(integer $ItemId) Set Item ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getItemName() Obtain Item Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemName(string $ItemName) Set Item Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getItemDesc() Obtain Item Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemDesc(string $ItemDesc) Set Item Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFixMethod() Obtain Fixing Method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFixMethod(string $FixMethod) Set Fixing Method
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleName() Obtain Rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set Rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDetectStatus() Obtain 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectStatus(integer $DetectStatus) Set 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostCount() Obtain Number of affected servers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostCount(integer $HostCount) Set Number of affected servers
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstTime(string $FirstTime) Set First detection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastTime() Obtain Last Detection Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastTime(string $LastTime) Set Last Detection Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDetectResult() Obtain Detection result, JSON string
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectResult(string $DetectResult) Set Detection result, JSON string
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPassedHostCount() Obtain Number of servers passed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassedHostCount(integer $PassedHostCount) Set Number of servers passed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNotPassedHostCount() Obtain Number of servers failed
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotPassedHostCount(integer $NotPassedHostCount) Set Number of servers failed
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineItemDetect extends AbstractModel
{
    /**
     * @var integer Item ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemId;

    /**
     * @var string Item Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemName;

    /**
     * @var string Item Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemDesc;

    /**
     * @var string Fixing Method
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FixMethod;

    /**
     * @var string Rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var integer 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectStatus;

    /**
     * @var integer Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var integer Number of affected servers
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostCount;

    /**
     * @var string First detection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstTime;

    /**
     * @var string Last Detection Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastTime;

    /**
     * @var string Detection result, JSON string
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectResult;

    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var integer Number of servers passed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassedHostCount;

    /**
     * @var integer Number of servers failed
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NotPassedHostCount;

    /**
     * @param integer $ItemId Item ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ItemName Item Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ItemDesc Item Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FixMethod Fixing Method
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleName Rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DetectStatus 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostCount Number of affected servers
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First detection time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastTime Last Detection Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DetectResult Detection result, JSON string
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PassedHostCount Number of servers passed
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NotPassedHostCount Number of servers failed
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("ItemDesc",$param) and $param["ItemDesc"] !== null) {
            $this->ItemDesc = $param["ItemDesc"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("DetectResult",$param) and $param["DetectResult"] !== null) {
            $this->DetectResult = $param["DetectResult"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("PassedHostCount",$param) and $param["PassedHostCount"] !== null) {
            $this->PassedHostCount = $param["PassedHostCount"];
        }

        if (array_key_exists("NotPassedHostCount",$param) and $param["NotPassedHostCount"] !== null) {
            $this->NotPassedHostCount = $param["NotPassedHostCount"];
        }
    }
}
