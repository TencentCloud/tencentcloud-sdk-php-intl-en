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
 * User behavior analysis custom policy structure
 *
 * @method string getRuleName() Obtain Policy name.
 * @method void setRuleName(string $RuleName) Set Policy name.
 * @method integer getUserType() Obtain 1: Cloud account
2: Custom user
 * @method void setUserType(integer $UserType) Set 1: Cloud account
2: Custom user
 * @method integer getTimeInterval() Obtain Occurrence time
1: 10 minutes
2: 1 hour
3: One day
4: One week
5: One month
 * @method void setTimeInterval(integer $TimeInterval) Set Occurrence time
1: 10 minutes
2: 1 hour
3: One day
4: One week
5: One month
 * @method UebaEventContent getEventContent() Obtain Event that occurred
 * @method void setEventContent(UebaEventContent $EventContent) Set Event that occurred
 * @method string getAlertName() Obtain Alarm name
 * @method void setAlertName(string $AlertName) Set Alarm name
 * @method integer getAlterLevel() Obtain Alarm type
0: Notification
1: Low risk
2: Medium risk
3: High risk
4: Critical
 * @method void setAlterLevel(integer $AlterLevel) Set Alarm type
0: Notification
1: Low risk
2: Medium risk
3: High risk
4: Critical
 * @method array getOperator() Obtain Operator.
 * @method void setOperator(array $Operator) Set Operator.
 * @method array getOperateObject() Obtain Operation object.
 * @method void setOperateObject(array $OperateObject) Set Operation object.
 * @method array getOperateMethod() Obtain Operation method.
 * @method void setOperateMethod(array $OperateMethod) Set Operation method.
 * @method string getLogType() Obtain Log type
 * @method void setLogType(string $LogType) Set Log type
 * @method string getLogTypeStr() Obtain Log Chinese name
 * @method void setLogTypeStr(string $LogTypeStr) Set Log Chinese name
 */
class UebaCustomRule extends AbstractModel
{
    /**
     * @var string Policy name.
     */
    public $RuleName;

    /**
     * @var integer 1: Cloud account
2: Custom user
     */
    public $UserType;

    /**
     * @var integer Occurrence time
1: 10 minutes
2: 1 hour
3: One day
4: One week
5: One month
     */
    public $TimeInterval;

    /**
     * @var UebaEventContent Event that occurred
     */
    public $EventContent;

    /**
     * @var string Alarm name
     */
    public $AlertName;

    /**
     * @var integer Alarm type
0: Notification
1: Low risk
2: Medium risk
3: High risk
4: Critical
     */
    public $AlterLevel;

    /**
     * @var array Operator.
     */
    public $Operator;

    /**
     * @var array Operation object.
     */
    public $OperateObject;

    /**
     * @var array Operation method.
     */
    public $OperateMethod;

    /**
     * @var string Log type
     */
    public $LogType;

    /**
     * @var string Log Chinese name
     */
    public $LogTypeStr;

    /**
     * @param string $RuleName Policy name.
     * @param integer $UserType 1: Cloud account
2: Custom user
     * @param integer $TimeInterval Occurrence time
1: 10 minutes
2: 1 hour
3: One day
4: One week
5: One month
     * @param UebaEventContent $EventContent Event that occurred
     * @param string $AlertName Alarm name
     * @param integer $AlterLevel Alarm type
0: Notification
1: Low risk
2: Medium risk
3: High risk
4: Critical
     * @param array $Operator Operator.
     * @param array $OperateObject Operation object.
     * @param array $OperateMethod Operation method.
     * @param string $LogType Log type
     * @param string $LogTypeStr Log Chinese name
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

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("TimeInterval",$param) and $param["TimeInterval"] !== null) {
            $this->TimeInterval = $param["TimeInterval"];
        }

        if (array_key_exists("EventContent",$param) and $param["EventContent"] !== null) {
            $this->EventContent = new UebaEventContent();
            $this->EventContent->deserialize($param["EventContent"]);
        }

        if (array_key_exists("AlertName",$param) and $param["AlertName"] !== null) {
            $this->AlertName = $param["AlertName"];
        }

        if (array_key_exists("AlterLevel",$param) and $param["AlterLevel"] !== null) {
            $this->AlterLevel = $param["AlterLevel"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperateObject",$param) and $param["OperateObject"] !== null) {
            $this->OperateObject = $param["OperateObject"];
        }

        if (array_key_exists("OperateMethod",$param) and $param["OperateMethod"] !== null) {
            $this->OperateMethod = $param["OperateMethod"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogTypeStr",$param) and $param["LogTypeStr"] !== null) {
            $this->LogTypeStr = $param["LogTypeStr"];
        }
    }
}
