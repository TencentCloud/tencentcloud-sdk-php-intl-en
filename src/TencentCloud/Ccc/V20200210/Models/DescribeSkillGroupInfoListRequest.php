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
 * DescribeSkillGroupInfoList request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getPageSize() Obtain Page size, upper limit 100.
 * @method void setPageSize(integer $PageSize) Set Page size, upper limit 100.
 * @method integer getPageNumber() Obtain <Page number starting from 0.>.
 * @method void setPageNumber(integer $PageNumber) Set <Page number starting from 0.>.
 * @method integer getSkillGroupId() Obtain Using skill group id when querying a single skill group.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Using skill group id when querying a single skill group.
 * @method integer getModifiedTime() Obtain Used when querying skill groups with a modified time greater or equal to modifiedtime.
 * @method void setModifiedTime(integer $ModifiedTime) Set Used when querying skill groups with a modified time greater or equal to modifiedtime.
 * @method string getSkillGroupName() Obtain Skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Skill group name.
 */
class DescribeSkillGroupInfoListRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page size, upper limit 100.
     */
    public $PageSize;

    /**
     * @var integer <Page number starting from 0.>.
     */
    public $PageNumber;

    /**
     * @var integer Using skill group id when querying a single skill group.
     */
    public $SkillGroupId;

    /**
     * @var integer Used when querying skill groups with a modified time greater or equal to modifiedtime.
     */
    public $ModifiedTime;

    /**
     * @var string Skill group name.
     */
    public $SkillGroupName;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $PageSize Page size, upper limit 100.
     * @param integer $PageNumber <Page number starting from 0.>.
     * @param integer $SkillGroupId Using skill group id when querying a single skill group.
     * @param integer $ModifiedTime Used when querying skill groups with a modified time greater or equal to modifiedtime.
     * @param string $SkillGroupName Skill group name.
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

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }
    }
}
