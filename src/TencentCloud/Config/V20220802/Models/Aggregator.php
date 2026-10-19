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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User group list information.
 *
 * @method string getName() Obtain Account group name
 * @method void setName(string $Name) Set Account group name
 * @method string getDescription() Obtain Account group description
 * @method void setDescription(string $Description) Set Account group description
 * @method integer getOwnerUin() Obtain Creator user ID.
 * @method void setOwnerUin(integer $OwnerUin) Set Creator user ID.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getAccountCount() Obtain Number of account group members.
 * @method void setAccountCount(integer $AccountCount) Set Number of account group members.
 * @method string getType() Obtain RD: global account group.
 * @method void setType(string $Type) Set RD: global account group.
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method integer getAggregatorStatus() Obtain Account group status.
 * @method void setAggregatorStatus(integer $AggregatorStatus) Set Account group status.
 * @method string getMemberName() Obtain Account group name
 * @method void setMemberName(string $MemberName) Set Account group name
 */
class Aggregator extends AbstractModel
{
    /**
     * @var string Account group name
     */
    public $Name;

    /**
     * @var string Account group description
     */
    public $Description;

    /**
     * @var integer Creator user ID.
     */
    public $OwnerUin;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Number of account group members.
     */
    public $AccountCount;

    /**
     * @var string RD: global account group.
     */
    public $Type;

    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var integer Account group status.
     */
    public $AggregatorStatus;

    /**
     * @var string Account group name
     */
    public $MemberName;

    /**
     * @param string $Name Account group name
     * @param string $Description Account group description
     * @param integer $OwnerUin Creator user ID.
     * @param string $CreateTime Creation time.
     * @param integer $AccountCount Number of account group members.
     * @param string $Type RD: global account group.
     * @param string $AccountGroupId Account group ID.
     * @param integer $AggregatorStatus Account group status.
     * @param string $MemberName Account group name
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AccountCount",$param) and $param["AccountCount"] !== null) {
            $this->AccountCount = $param["AccountCount"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("AggregatorStatus",$param) and $param["AggregatorStatus"] !== null) {
            $this->AggregatorStatus = $param["AggregatorStatus"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }
    }
}
