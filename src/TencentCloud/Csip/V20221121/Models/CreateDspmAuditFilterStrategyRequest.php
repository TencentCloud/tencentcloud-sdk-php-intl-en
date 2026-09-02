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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDspmAuditFilterStrategy request structure.
 *
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getRule() Obtain <p>Rule content</p><p>Parameter format: json</p>
 * @method void setRule(string $Rule) Set <p>Rule content</p><p>Parameter format: json</p>
 * @method integer getIsEnabled() Obtain <p>Whether to enable</p><p>Enumeration values:</p><ul><li>1: enable</li><li>0: disable</li></ul>
 * @method void setIsEnabled(integer $IsEnabled) Set <p>Whether to enable</p><p>Enumeration values:</p><ul><li>1: enable</li><li>0: disable</li></ul>
 * @method string getDescription() Obtain <p>Policy description.</p>
 * @method void setDescription(string $Description) Set <p>Policy description.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class CreateDspmAuditFilterStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Rule content</p><p>Parameter format: json</p>
     */
    public $Rule;

    /**
     * @var integer <p>Whether to enable</p><p>Enumeration values:</p><ul><li>1: enable</li><li>0: disable</li></ul>
     */
    public $IsEnabled;

    /**
     * @var string <p>Policy description.</p>
     */
    public $Description;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param string $Name <p>Policy name.</p>
     * @param string $Rule <p>Rule content</p><p>Parameter format: json</p>
     * @param integer $IsEnabled <p>Whether to enable</p><p>Enumeration values:</p><ul><li>1: enable</li><li>0: disable</li></ul>
     * @param string $Description <p>Policy description.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
