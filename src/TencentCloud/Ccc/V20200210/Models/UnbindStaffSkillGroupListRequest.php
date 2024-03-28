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
 * UnbindStaffSkillGroupList request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getStaffEmail() Obtain Customer service email.
 * @method void setStaffEmail(string $StaffEmail) Set Customer service email.
 * @method array getSkillGroupList() Obtain Unbound skill group list.
 * @method void setSkillGroupList(array $SkillGroupList) Set Unbound skill group list.
 */
class UnbindStaffSkillGroupListRequest extends AbstractModel
{
    /**
     * @var integer Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Customer service email.
     */
    public $StaffEmail;

    /**
     * @var array Unbound skill group list.
     */
    public $SkillGroupList;

    /**
     * @param integer $SdkAppId Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $StaffEmail Customer service email.
     * @param array $SkillGroupList Unbound skill group list.
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

        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("SkillGroupList",$param) and $param["SkillGroupList"] !== null) {
            $this->SkillGroupList = $param["SkillGroupList"];
        }
    }
}
