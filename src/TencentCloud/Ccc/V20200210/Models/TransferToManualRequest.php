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
 * TransferToManual request structure.
 *
 * @method integer getSdkAppId() Obtain App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method integer getSkillGroupId() Obtain Skill group Id.
 * @method void setSkillGroupId(integer $SkillGroupId) Set Skill group Id.
 */
class TransferToManualRequest extends AbstractModel
{
    /**
     * @var integer App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var integer Skill group Id.
     */
    public $SkillGroupId;

    /**
     * @param integer $SdkAppId App ID (required), which can be viewed at https://console.cloud.tencent.com/ccc.
     * @param string $SessionId Session ID.
     * @param integer $SkillGroupId Skill group Id.
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }
    }
}
