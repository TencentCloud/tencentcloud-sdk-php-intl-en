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
 * CreateSkillShare request structure.
 *
 * @method string getApplyRemark() Obtain <p>Required. Application remarks (pop-up "Application Remarks")</p>
 * @method void setApplyRemark(string $ApplyRemark) Set <p>Required. Application remarks (pop-up "Application Remarks")</p>
 * @method string getSkillId() Obtain <p>Required. Original skill_id</p>
 * @method void setSkillId(string $SkillId) Set <p>Required. Original skill_id</p>
 * @method string getSpaceId() Obtain <p>Space ID, required</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID, required</p>
 * @method string getVersionId() Obtain <p>Required. id of the shared version (must exceed the shared version)</p>
 * @method void setVersionId(string $VersionId) Set <p>Required. id of the shared version (must exceed the shared version)</p>
 * @method SkillCorpShareConfig getCorpShareConfig() Obtain <p>Shared configuration</p>
 * @method void setCorpShareConfig(SkillCorpShareConfig $CorpShareConfig) Set <p>Shared configuration</p>
 */
class CreateSkillShareRequest extends AbstractModel
{
    /**
     * @var string <p>Required. Application remarks (pop-up "Application Remarks")</p>
     */
    public $ApplyRemark;

    /**
     * @var string <p>Required. Original skill_id</p>
     */
    public $SkillId;

    /**
     * @var string <p>Space ID, required</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Required. id of the shared version (must exceed the shared version)</p>
     */
    public $VersionId;

    /**
     * @var SkillCorpShareConfig <p>Shared configuration</p>
     */
    public $CorpShareConfig;

    /**
     * @param string $ApplyRemark <p>Required. Application remarks (pop-up "Application Remarks")</p>
     * @param string $SkillId <p>Required. Original skill_id</p>
     * @param string $SpaceId <p>Space ID, required</p>
     * @param string $VersionId <p>Required. id of the shared version (must exceed the shared version)</p>
     * @param SkillCorpShareConfig $CorpShareConfig <p>Shared configuration</p>
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

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new SkillCorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
        }
    }
}
