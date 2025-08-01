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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTagRetentionRule request structure.
 *
 * @method string getRegistryId() Obtain Primary instance ID
 * @method void setRegistryId(string $RegistryId) Set Primary instance ID
 * @method integer getNamespaceId() Obtain ID of the original namespace
 * @method void setNamespaceId(integer $NamespaceId) Set ID of the original namespace
 * @method RetentionRule getRetentionRule() Obtain Retention policy
 * @method void setRetentionRule(RetentionRule $RetentionRule) Set Retention policy
 * @method string getCronSetting() Obtain Original execution cycle
 * @method void setCronSetting(string $CronSetting) Set Original execution cycle
 * @method integer getRetentionId() Obtain Rule ID
 * @method void setRetentionId(integer $RetentionId) Set Rule ID
 * @method boolean getDisabled() Obtain Whether to disable the rule
 * @method void setDisabled(boolean $Disabled) Set Whether to disable the rule
 */
class ModifyTagRetentionRuleRequest extends AbstractModel
{
    /**
     * @var string Primary instance ID
     */
    public $RegistryId;

    /**
     * @var integer ID of the original namespace
     */
    public $NamespaceId;

    /**
     * @var RetentionRule Retention policy
     */
    public $RetentionRule;

    /**
     * @var string Original execution cycle
     */
    public $CronSetting;

    /**
     * @var integer Rule ID
     */
    public $RetentionId;

    /**
     * @var boolean Whether to disable the rule
     */
    public $Disabled;

    /**
     * @param string $RegistryId Primary instance ID
     * @param integer $NamespaceId ID of the original namespace
     * @param RetentionRule $RetentionRule Retention policy
     * @param string $CronSetting Original execution cycle
     * @param integer $RetentionId Rule ID
     * @param boolean $Disabled Whether to disable the rule
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("RetentionRule",$param) and $param["RetentionRule"] !== null) {
            $this->RetentionRule = new RetentionRule();
            $this->RetentionRule->deserialize($param["RetentionRule"]);
        }

        if (array_key_exists("CronSetting",$param) and $param["CronSetting"] !== null) {
            $this->CronSetting = $param["CronSetting"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }
    }
}
