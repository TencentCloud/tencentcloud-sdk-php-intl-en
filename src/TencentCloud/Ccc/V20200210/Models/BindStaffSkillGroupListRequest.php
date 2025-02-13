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
 * BindStaffSkillGroupList request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getStaffEmail() Obtain Agent email.
 * @method void setStaffEmail(string $StaffEmail) Set Agent email.
 * @method array getSkillGroupList() Obtain Bound skill group list.
 * @method void setSkillGroupList(array $SkillGroupList) Set Bound skill group list.
 * @method array getStaffSkillGroupList() Obtain Bound skill group list (required).
 * @method void setStaffSkillGroupList(array $StaffSkillGroupList) Set Bound skill group list (required).
 */
class BindStaffSkillGroupListRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Agent email.
     */
    public $StaffEmail;

    /**
     * @var array Bound skill group list.
     * @deprecated
     */
    public $SkillGroupList;

    /**
     * @var array Bound skill group list (required).
     */
    public $StaffSkillGroupList;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $StaffEmail Agent email.
     * @param array $SkillGroupList Bound skill group list.
     * @param array $StaffSkillGroupList Bound skill group list (required).
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

        if (array_key_exists("StaffSkillGroupList",$param) and $param["StaffSkillGroupList"] !== null) {
            $this->StaffSkillGroupList = [];
            foreach ($param["StaffSkillGroupList"] as $key => $value){
                $obj = new StaffSkillGroupList();
                $obj->deserialize($value);
                array_push($this->StaffSkillGroupList, $obj);
            }
        }
    }
}
