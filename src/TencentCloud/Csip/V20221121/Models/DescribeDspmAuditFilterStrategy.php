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
 * Filter rule
 *
 * @method integer getAuditFilterStrategyId() Obtain <p>Policy ID.</p>
 * @method void setAuditFilterStrategyId(integer $AuditFilterStrategyId) Set <p>Policy ID.</p>
 * @method string getName() Obtain <p>Policy name.</p>
 * @method void setName(string $Name) Set <p>Policy name.</p>
 * @method string getDescription() Obtain <p>Policy description.</p>
 * @method void setDescription(string $Description) Set <p>Policy description.</p>
 * @method string getRule() Obtain <p>Rule content</p>
 * @method void setRule(string $Rule) Set <p>Rule content</p>
 * @method integer getIsEnabled() Obtain <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disable</li><li>1: Enable</li></ul>
 * @method void setIsEnabled(integer $IsEnabled) Set <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disable</li><li>1: Enable</li></ul>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getCreateTime() Obtain <p>Creation time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
 * @method string getModifyTime() Obtain <p>Last update time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Last update time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
 * @method integer getAppId() Obtain <p>Cloud Account ID</p>
 * @method void setAppId(integer $AppId) Set <p>Cloud Account ID</p>
 * @method string getUin() Obtain <p>User identity</p>
 * @method void setUin(string $Uin) Set <p>User identity</p>
 * @method string getNickName() Obtain <p>Account nickname</p>
 * @method void setNickName(string $NickName) Set <p>Account nickname</p>
 */
class DescribeDspmAuditFilterStrategy extends AbstractModel
{
    /**
     * @var integer <p>Policy ID.</p>
     */
    public $AuditFilterStrategyId;

    /**
     * @var string <p>Policy name.</p>
     */
    public $Name;

    /**
     * @var string <p>Policy description.</p>
     */
    public $Description;

    /**
     * @var string <p>Rule content</p>
     */
    public $Rule;

    /**
     * @var integer <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disable</li><li>1: Enable</li></ul>
     */
    public $IsEnabled;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Creation time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Last update time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>Cloud Account ID</p>
     */
    public $AppId;

    /**
     * @var string <p>User identity</p>
     */
    public $Uin;

    /**
     * @var string <p>Account nickname</p>
     */
    public $NickName;

    /**
     * @param integer $AuditFilterStrategyId <p>Policy ID.</p>
     * @param string $Name <p>Policy name.</p>
     * @param string $Description <p>Policy description.</p>
     * @param string $Rule <p>Rule content</p>
     * @param integer $IsEnabled <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disable</li><li>1: Enable</li></ul>
     * @param string $Remark <p>Remarks.</p>
     * @param string $CreateTime <p>Creation time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
     * @param string $ModifyTime <p>Last update time</p><p>Parameter format: 2026-07-16T11:44:45+08</p>
     * @param integer $AppId <p>Cloud Account ID</p>
     * @param string $Uin <p>User identity</p>
     * @param string $NickName <p>Account nickname</p>
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
        if (array_key_exists("AuditFilterStrategyId",$param) and $param["AuditFilterStrategyId"] !== null) {
            $this->AuditFilterStrategyId = $param["AuditFilterStrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }
    }
}
