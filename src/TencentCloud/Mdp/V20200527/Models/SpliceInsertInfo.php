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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SpliceInsertInfo.
 *
 * @method string getEventID() Obtain EventID.
 * @method void setEventID(string $EventID) Set EventID.
 * @method string getAvailNum() Obtain AvailNum.
 * @method void setAvailNum(string $AvailNum) Set AvailNum.
 * @method string getAvailExpected() Obtain AvailExpected.
 * @method void setAvailExpected(string $AvailExpected) Set AvailExpected.
 * @method string getProgramID() Obtain ProgramID.
 * @method void setProgramID(string $ProgramID) Set ProgramID.
 */
class SpliceInsertInfo extends AbstractModel
{
    /**
     * @var string EventID.
     */
    public $EventID;

    /**
     * @var string AvailNum.
     */
    public $AvailNum;

    /**
     * @var string AvailExpected.
     */
    public $AvailExpected;

    /**
     * @var string ProgramID.
     */
    public $ProgramID;

    /**
     * @param string $EventID EventID.
     * @param string $AvailNum AvailNum.
     * @param string $AvailExpected AvailExpected.
     * @param string $ProgramID ProgramID.
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("AvailNum",$param) and $param["AvailNum"] !== null) {
            $this->AvailNum = $param["AvailNum"];
        }

        if (array_key_exists("AvailExpected",$param) and $param["AvailExpected"] !== null) {
            $this->AvailExpected = $param["AvailExpected"];
        }

        if (array_key_exists("ProgramID",$param) and $param["ProgramID"] !== null) {
            $this->ProgramID = $param["ProgramID"];
        }
    }
}
