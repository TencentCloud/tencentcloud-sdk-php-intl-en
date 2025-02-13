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
 * UpdateCCCSkillGroup request structure.
 *
 * @method integer getSdkAppId() Obtain Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set Application id (required) can be found at https://console.cloud.tencent.com/ccc.
 * @method integer getSkillGroupID() Obtain Skill group id.
 * @method void setSkillGroupID(integer $SkillGroupID) Set Skill group id.
 * @method string getSkillGroupName() Obtain Modified skill group name.
 * @method void setSkillGroupName(string $SkillGroupName) Set Modified skill group name.
 * @method integer getMaxConcurrency() Obtain Modified maximum concurrency, with the maximum synchronization being 2.
 * @method void setMaxConcurrency(integer $MaxConcurrency) Set Modified maximum concurrency, with the maximum synchronization being 2.
 * @method boolean getRingAll() Obtain True for simultaneous ringing, false for sequential ringing.
 * @method void setRingAll(boolean $RingAll) Set True for simultaneous ringing, false for sequential ringing.
 */
class UpdateCCCSkillGroupRequest extends AbstractModel
{
    /**
     * @var integer Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var integer Skill group id.
     */
    public $SkillGroupID;

    /**
     * @var string Modified skill group name.
     */
    public $SkillGroupName;

    /**
     * @var integer Modified maximum concurrency, with the maximum synchronization being 2.
     */
    public $MaxConcurrency;

    /**
     * @var boolean True for simultaneous ringing, false for sequential ringing.
     */
    public $RingAll;

    /**
     * @param integer $SdkAppId Application id (required) can be found at https://console.cloud.tencent.com/ccc.
     * @param integer $SkillGroupID Skill group id.
     * @param string $SkillGroupName Modified skill group name.
     * @param integer $MaxConcurrency Modified maximum concurrency, with the maximum synchronization being 2.
     * @param boolean $RingAll True for simultaneous ringing, false for sequential ringing.
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

        if (array_key_exists("SkillGroupID",$param) and $param["SkillGroupID"] !== null) {
            $this->SkillGroupID = $param["SkillGroupID"];
        }

        if (array_key_exists("SkillGroupName",$param) and $param["SkillGroupName"] !== null) {
            $this->SkillGroupName = $param["SkillGroupName"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("RingAll",$param) and $param["RingAll"] !== null) {
            $this->RingAll = $param["RingAll"];
        }
    }
}
