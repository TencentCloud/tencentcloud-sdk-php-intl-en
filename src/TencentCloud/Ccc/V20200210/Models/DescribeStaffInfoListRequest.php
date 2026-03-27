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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStaffInfoList request structure.
 *
 * @method integer getSdkAppId() Obtain <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
 * @method void setSdkAppId(integer $SdkAppId) Set <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
 * @method integer getPageSize() Obtain <P>Pagination size. upper limit: 9999.</p>.
 * @method void setPageSize(integer $PageSize) Set <P>Pagination size. upper limit: 9999.</p>.
 * @method integer getPageNumber() Obtain <P>Page number, starting from 0.</p>.
 * @method void setPageNumber(integer $PageNumber) Set <P>Page number, starting from 0.</p>.
 * @method string getStaffMail() Obtain <P>Agent account, used when query single agent.</p>.
 * @method void setStaffMail(string $StaffMail) Set <P>Agent account, used when query single agent.</p>.
 * @method integer getModifiedTime() Obtain <p>Use when querying for agents with modified time equal to or greater than ModifiedTime</p>.
 * @method void setModifiedTime(integer $ModifiedTime) Set <p>Use when querying for agents with modified time equal to or greater than ModifiedTime</p>.
 * @method integer getSkillGroupId() Obtain <p>Skill group ID</p>.
 * @method void setSkillGroupId(integer $SkillGroupId) Set <p>Skill group ID</p>.
 */
class DescribeStaffInfoListRequest extends AbstractModel
{
    /**
     * @var integer <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
     */
    public $SdkAppId;

    /**
     * @var integer <P>Pagination size. upper limit: 9999.</p>.
     */
    public $PageSize;

    /**
     * @var integer <P>Page number, starting from 0.</p>.
     */
    public $PageNumber;

    /**
     * @var string <P>Agent account, used when query single agent.</p>.
     */
    public $StaffMail;

    /**
     * @var integer <p>Use when querying for agents with modified time equal to or greater than ModifiedTime</p>.
     */
    public $ModifiedTime;

    /**
     * @var integer <p>Skill group ID</p>.
     */
    public $SkillGroupId;

    /**
     * @param integer $SdkAppId <p>App ID (required). can check https://console.cloud.tencent.com/ccc</p>.
     * @param integer $PageSize <P>Pagination size. upper limit: 9999.</p>.
     * @param integer $PageNumber <P>Page number, starting from 0.</p>.
     * @param string $StaffMail <P>Agent account, used when query single agent.</p>.
     * @param integer $ModifiedTime <p>Use when querying for agents with modified time equal to or greater than ModifiedTime</p>.
     * @param integer $SkillGroupId <p>Skill group ID</p>.
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
