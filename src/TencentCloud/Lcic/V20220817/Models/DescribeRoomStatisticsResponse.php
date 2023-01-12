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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoomStatistics response structure.
 *
 * @method integer getPeakMemberNumber() Obtain Peak number of online members
 * @method void setPeakMemberNumber(integer $PeakMemberNumber) Set Peak number of online members
 * @method integer getMemberNumber() Obtain Accumulated number of online members
 * @method void setMemberNumber(integer $MemberNumber) Set Accumulated number of online members
 * @method integer getTotal() Obtain Total number of records, including members who entered the room and members who should attend the class but did not
 * @method void setTotal(integer $Total) Set Total number of records, including members who entered the room and members who should attend the class but did not
 * @method array getMemberRecords() Obtain Member record list
 * @method void setMemberRecords(array $MemberRecords) Set Member record list
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRoomStatisticsResponse extends AbstractModel
{
    /**
     * @var integer Peak number of online members
     */
    public $PeakMemberNumber;

    /**
     * @var integer Accumulated number of online members
     */
    public $MemberNumber;

    /**
     * @var integer Total number of records, including members who entered the room and members who should attend the class but did not
     */
    public $Total;

    /**
     * @var array Member record list
     */
    public $MemberRecords;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $PeakMemberNumber Peak number of online members
     * @param integer $MemberNumber Accumulated number of online members
     * @param integer $Total Total number of records, including members who entered the room and members who should attend the class but did not
     * @param array $MemberRecords Member record list
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PeakMemberNumber",$param) and $param["PeakMemberNumber"] !== null) {
            $this->PeakMemberNumber = $param["PeakMemberNumber"];
        }

        if (array_key_exists("MemberNumber",$param) and $param["MemberNumber"] !== null) {
            $this->MemberNumber = $param["MemberNumber"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("MemberRecords",$param) and $param["MemberRecords"] !== null) {
            $this->MemberRecords = [];
            foreach ($param["MemberRecords"] as $key => $value){
                $obj = new MemberRecord();
                $obj->deserialize($value);
                array_push($this->MemberRecords, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
