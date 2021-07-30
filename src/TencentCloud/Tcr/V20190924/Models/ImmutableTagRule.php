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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag immutability rule
 *
 * @method string getRepositoryPattern() Obtain Repository matching rule
 * @method void setRepositoryPattern(string $RepositoryPattern) Set Repository matching rule
 * @method string getTagPattern() Obtain Tag matching rule
 * @method void setTagPattern(string $TagPattern) Set Tag matching rule
 * @method string getRepositoryDecoration() Obtain repoMatches or repoExcludes
 * @method void setRepositoryDecoration(string $RepositoryDecoration) Set repoMatches or repoExcludes
 * @method string getTagDecoration() Obtain matches or excludes
 * @method void setTagDecoration(string $TagDecoration) Set matches or excludes
 * @method boolean getDisabled() Obtain Disabling rule
 * @method void setDisabled(boolean $Disabled) Set Disabling rule
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getNsName() Obtain Namespace
 * @method void setNsName(string $NsName) Set Namespace
 */
class ImmutableTagRule extends AbstractModel
{
    /**
     * @var string Repository matching rule
     */
    public $RepositoryPattern;

    /**
     * @var string Tag matching rule
     */
    public $TagPattern;

    /**
     * @var string repoMatches or repoExcludes
     */
    public $RepositoryDecoration;

    /**
     * @var string matches or excludes
     */
    public $TagDecoration;

    /**
     * @var boolean Disabling rule
     */
    public $Disabled;

    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Namespace
     */
    public $NsName;

    /**
     * @param string $RepositoryPattern Repository matching rule
     * @param string $TagPattern Tag matching rule
     * @param string $RepositoryDecoration repoMatches or repoExcludes
     * @param string $TagDecoration matches or excludes
     * @param boolean $Disabled Disabling rule
     * @param integer $RuleId Rule ID
     * @param string $NsName Namespace
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
        if (array_key_exists("RepositoryPattern",$param) and $param["RepositoryPattern"] !== null) {
            $this->RepositoryPattern = $param["RepositoryPattern"];
        }

        if (array_key_exists("TagPattern",$param) and $param["TagPattern"] !== null) {
            $this->TagPattern = $param["TagPattern"];
        }

        if (array_key_exists("RepositoryDecoration",$param) and $param["RepositoryDecoration"] !== null) {
            $this->RepositoryDecoration = $param["RepositoryDecoration"];
        }

        if (array_key_exists("TagDecoration",$param) and $param["TagDecoration"] !== null) {
            $this->TagDecoration = $param["TagDecoration"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("NsName",$param) and $param["NsName"] !== null) {
            $this->NsName = $param["NsName"];
        }
    }
}
