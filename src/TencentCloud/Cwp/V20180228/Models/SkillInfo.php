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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skill info
 *
 * @method string getSkillName() Obtain Skill name
 * @method void setSkillName(string $SkillName) Set Skill name
 * @method string getSkillDesc() Obtain Skill description
 * @method void setSkillDesc(string $SkillDesc) Set Skill description
 * @method string getSkillSource() Obtain Skill source
 * @method void setSkillSource(string $SkillSource) Set Skill source
 * @method array getTags() Obtain Skill risk tag
 * @method void setTags(array $Tags) Set Skill risk tag
 * @method string getRiskDesc() Obtain skill risk description
 * @method void setRiskDesc(string $RiskDesc) Set skill risk description
 * @method string getEvidence() Obtain evidence chain
 * @method void setEvidence(string $Evidence) Set evidence chain
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 */
class SkillInfo extends AbstractModel
{
    /**
     * @var string Skill name
     */
    public $SkillName;

    /**
     * @var string Skill description
     */
    public $SkillDesc;

    /**
     * @var string Skill source
     */
    public $SkillSource;

    /**
     * @var array Skill risk tag
     */
    public $Tags;

    /**
     * @var string skill risk description
     */
    public $RiskDesc;

    /**
     * @var string evidence chain
     */
    public $Evidence;

    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @param string $SkillName Skill name
     * @param string $SkillDesc Skill description
     * @param string $SkillSource Skill source
     * @param array $Tags Skill risk tag
     * @param string $RiskDesc skill risk description
     * @param string $Evidence evidence chain
     * @param integer $Id Event ID
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
        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillDesc",$param) and $param["SkillDesc"] !== null) {
            $this->SkillDesc = $param["SkillDesc"];
        }

        if (array_key_exists("SkillSource",$param) and $param["SkillSource"] !== null) {
            $this->SkillSource = $param["SkillSource"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("Evidence",$param) and $param["Evidence"] !== null) {
            $this->Evidence = $param["Evidence"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
