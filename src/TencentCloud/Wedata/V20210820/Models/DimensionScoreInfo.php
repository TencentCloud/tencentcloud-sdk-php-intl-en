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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dimension Scoring Information
 *
 * @method string getName() Obtain Dimension NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Dimension NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method float getWeight() Obtain WeightNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWeight(float $Weight) Set WeightNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUserId() Obtain Setter ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(integer $UserId) Set Setter ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserName() Obtain Setter Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserName(string $UserName) Set Setter Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUpdateTime() Obtain Update Time Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Update Time Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getJoinTableNumber() Obtain Number of Evaluation Forms Involved
 * @method void setJoinTableNumber(integer $JoinTableNumber) Set Number of Evaluation Forms Involved
 * @method float getScore() Obtain Scoring
 * @method void setScore(float $Score) Set Scoring
 * @method string getUserIdStr() Obtain Set by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserIdStr(string $UserIdStr) Set Set by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
 */
class DimensionScoreInfo extends AbstractModel
{
    /**
     * @var string Dimension NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var float WeightNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Weight;

    /**
     * @var integer Setter ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @var string Setter Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserName;

    /**
     * @var integer Update Time Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Number of Evaluation Forms Involved
     */
    public $JoinTableNumber;

    /**
     * @var float Scoring
     */
    public $Score;

    /**
     * @var string Set by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserIdStr;

    /**
     * @param string $Name Dimension NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param float $Weight WeightNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UserId Setter ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserName Setter Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UpdateTime Update Time Timestamp
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $JoinTableNumber Number of Evaluation Forms Involved
     * @param float $Score Scoring
     * @param string $UserIdStr Set by User ID Str
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("JoinTableNumber",$param) and $param["JoinTableNumber"] !== null) {
            $this->JoinTableNumber = $param["JoinTableNumber"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("UserIdStr",$param) and $param["UserIdStr"] !== null) {
            $this->UserIdStr = $param["UserIdStr"];
        }
    }
}
