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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSkillShare request structure.
 *
 * @method string getApplyRemark() Obtain <p>Application remarks, required (pop-up "Application Remarks")</p>
 * @method void setApplyRemark(string $ApplyRemark) Set <p>Application remarks, required (pop-up "Application Remarks")</p>
 * @method string getSkillId() Obtain <p>Original Skill ID, required (frontend does not need to detect the _shared suffix)</p>
 * @method void setSkillId(string $SkillId) Set <p>Original Skill ID, required (frontend does not need to detect the _shared suffix)</p>
 * @method string getSpaceId() Obtain <p>Space ID, required</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID, required</p>
 * @method string getVersionId() Obtain <p>Original version ID, required (identical to the version_id passed when publishing via CreateSkillShare)</p>
 * @method void setVersionId(string $VersionId) Set <p>Original version ID, required (identical to the version_id passed when publishing via CreateSkillShare)</p>
 */
class DeleteSkillShareRequest extends AbstractModel
{
    /**
     * @var string <p>Application remarks, required (pop-up "Application Remarks")</p>
     */
    public $ApplyRemark;

    /**
     * @var string <p>Original Skill ID, required (frontend does not need to detect the _shared suffix)</p>
     */
    public $SkillId;

    /**
     * @var string <p>Space ID, required</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Original version ID, required (identical to the version_id passed when publishing via CreateSkillShare)</p>
     */
    public $VersionId;

    /**
     * @param string $ApplyRemark <p>Application remarks, required (pop-up "Application Remarks")</p>
     * @param string $SkillId <p>Original Skill ID, required (frontend does not need to detect the _shared suffix)</p>
     * @param string $SpaceId <p>Space ID, required</p>
     * @param string $VersionId <p>Original version ID, required (identical to the version_id passed when publishing via CreateSkillShare)</p>
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
        if (array_key_exists("ApplyRemark",$param) and $param["ApplyRemark"] !== null) {
            $this->ApplyRemark = $param["ApplyRemark"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
