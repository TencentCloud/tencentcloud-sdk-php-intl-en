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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStaffInfoList request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getPageSize() Obtain Page size, upper limit 9,999.
 * @method void setPageSize(integer $PageSize) Set Page size, upper limit 9,999.
 * @method integer getPageNumber() Obtain Page number starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number starting from 0.
 * @method string getStaffMail() Obtain Agent account used when querying a single agent.
 * @method void setStaffMail(string $StaffMail) Set Agent account used when querying a single agent.
 * @method integer getModifiedTime() Obtain Use when querying for agents with a modification time greater or equal to modifiedtime.
 * @method void setModifiedTime(integer $ModifiedTime) Set Use when querying for agents with a modification time greater or equal to modifiedtime.
 * @method integer getSkillGroupId() Obtain Skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group id.
 */
class DescribeStaffInfoListRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page size, upper limit 9,999.
     */
    public $PageSize;

    /**
     * @var integer Page number starting from 0.
     */
    public $PageNumber;

    /**
     * @var string Agent account used when querying a single agent.
     */
    public $StaffMail;

    /**
     * @var integer Use when querying for agents with a modification time greater or equal to modifiedtime.
     */
    public $ModifiedTime;

    /**
     * @var integer Skill group id.
     */
    public $SkillGroupId;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $PageSize Page size, upper limit 9,999.
     * @param integer $PageNumber Page number starting from 0.
     * @param string $StaffMail Agent account used when querying a single agent.
     * @param integer $ModifiedTime Use when querying for agents with a modification time greater or equal to modifiedtime.
     * @param integer $SkillGroupId Skill group id.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("StaffMail",$param) and $param["StaffMail"] !== null) {
            $this->StaffMail = $param["StaffMail"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }
    }
}
