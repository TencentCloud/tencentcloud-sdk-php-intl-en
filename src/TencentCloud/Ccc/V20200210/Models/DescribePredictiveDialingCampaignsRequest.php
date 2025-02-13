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
 * DescribePredictiveDialingCampaigns request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getPageSize() Obtain Page size, 100 maximum.
 * @method void setPageSize(integer $PageSize) Set Page size, 100 maximum.
 * @method integer getPageNumber() Obtain Page number starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number starting from 0.
 * @method string getName() Obtain Query the task list name keyword.
 * @method void setName(string $Name) Set Query the task list name keyword.
 * @method integer getSkillGroupId() Obtain Query task list skill group id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Query task list skill group id.
 */
class DescribePredictiveDialingCampaignsRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Page size, 100 maximum.
     */
    public $PageSize;

    /**
     * @var integer Page number starting from 0.
     */
    public $PageNumber;

    /**
     * @var string Query the task list name keyword.
     */
    public $Name;

    /**
     * @var integer Query task list skill group id.
     */
    public $SkillGroupId;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $PageSize Page size, 100 maximum.
     * @param integer $PageNumber Page number starting from 0.
     * @param string $Name Query the task list name keyword.
     * @param integer $SkillGroupId Query task list skill group id.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }
    }
}
