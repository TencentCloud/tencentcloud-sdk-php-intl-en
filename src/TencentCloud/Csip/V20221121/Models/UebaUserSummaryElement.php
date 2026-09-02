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
 * user behavior analysis user overview sum of elements
 *
 * @method string getMemberID() Obtain Attendee id
 * @method void setMemberID(string $MemberID) Set Attendee id
 * @method string getLogType() Obtain Log type
 * @method void setLogType(string $LogType) Set Log type
 * @method string getUserID() Obtain UID basis field
 * @method void setUserID(string $UserID) Set UID basis field
 * @method integer getCount() Obtain Quantity.
 * @method void setCount(integer $Count) Set Quantity.
 */
class UebaUserSummaryElement extends AbstractModel
{
    /**
     * @var string Attendee id
     */
    public $MemberID;

    /**
     * @var string Log type
     */
    public $LogType;

    /**
     * @var string UID basis field
     */
    public $UserID;

    /**
     * @var integer Quantity.
     */
    public $Count;

    /**
     * @param string $MemberID Attendee id
     * @param string $LogType Log type
     * @param string $UserID UID basis field
     * @param integer $Count Quantity.
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
        if (array_key_exists("MemberID",$param) and $param["MemberID"] !== null) {
            $this->MemberID = $param["MemberID"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
