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
 * BindNumberCallOutSkillGroup request structure.
 *
 * @method integer getSdkAppId() Obtain Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method string getNumber() Obtain Number to be bound.
 * @method void setNumber(string $Number) Set Number to be bound.
 * @method array getSkillGroupIds() Obtain Skill group ID list to be bound.
 * @method void setSkillGroupIds(array $SkillGroupIds) Set Skill group ID list to be bound.
 */
class BindNumberCallOutSkillGroupRequest extends AbstractModel
{
    /**
     * @var integer Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Number to be bound.
     */
    public $Number;

    /**
     * @var array Skill group ID list to be bound.
     */
    public $SkillGroupIds;

    /**
     * @param integer $SdkAppId Application ID (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param string $Number Number to be bound.
     * @param array $SkillGroupIds Skill group ID list to be bound.
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("SkillGroupIds",$param) and $param["SkillGroupIds"] !== null) {
            $this->SkillGroupIds = $param["SkillGroupIds"];
        }
    }
}
