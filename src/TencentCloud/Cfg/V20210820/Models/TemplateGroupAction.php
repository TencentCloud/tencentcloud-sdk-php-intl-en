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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task group action
 *
 * @method integer getTemplateGroupActionId() Obtain Template library group action ID
 * @method void setTemplateGroupActionId(integer $TemplateGroupActionId) Set Template library group action ID
 * @method integer getActionId() Obtain Action ID
 * @method void setActionId(integer $ActionId) Set Action ID
 * @method integer getOrder() Obtain Order of actions in the group
 * @method void setOrder(integer $Order) Set Order of actions in the group
 * @method string getGeneralConfiguration() Obtain General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGeneralConfiguration(string $GeneralConfiguration) Set General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCustomConfiguration() Obtain Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCustomConfiguration(string $CustomConfiguration) Set Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Action group creation time
 * @method void setCreateTime(string $CreateTime) Set Action group creation time
 * @method string getUpdateTime() Obtain Action group update time
 * @method void setUpdateTime(string $UpdateTime) Set Action group update time
 * @method string getActionTitle() Obtain Action name
 * @method void setActionTitle(string $ActionTitle) Set Action name
 * @method integer getRandomId() Obtain Random ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRandomId(integer $RandomId) Set Random ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRecoverId() Obtain Recovery action ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecoverId(integer $RecoverId) Set Recovery action ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExecuteId() Obtain Executed action ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecuteId(integer $ExecuteId) Set Executed action ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getActionApiType() Obtain Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionApiType(integer $ActionApiType) Set Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getActionAttribute() Obtain 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionAttribute(integer $ActionAttribute) Set 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionType() Obtain Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionType(string $ActionType) Set Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionRisk() Obtain Action risk level. 1: low-risk; 2: medium-risk; 3: high-risk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionRisk(string $ActionRisk) Set Action risk level. 1: low-risk; 2: medium-risk; 3: high-risk.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TemplateGroupAction extends AbstractModel
{
    /**
     * @var integer Template library group action ID
     */
    public $TemplateGroupActionId;

    /**
     * @var integer Action ID
     */
    public $ActionId;

    /**
     * @var integer Order of actions in the group
     */
    public $Order;

    /**
     * @var string General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GeneralConfiguration;

    /**
     * @var string Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CustomConfiguration;

    /**
     * @var string Action group creation time
     */
    public $CreateTime;

    /**
     * @var string Action group update time
     */
    public $UpdateTime;

    /**
     * @var string Action name
     */
    public $ActionTitle;

    /**
     * @var integer Random ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RandomId;

    /**
     * @var integer Recovery action ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecoverId;

    /**
     * @var integer Executed action ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecuteId;

    /**
     * @var integer Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionApiType;

    /**
     * @var integer 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionAttribute;

    /**
     * @var string Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionType;

    /**
     * @var string Action risk level. 1: low-risk; 2: medium-risk; 3: high-risk.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionRisk;

    /**
     * @param integer $TemplateGroupActionId Template library group action ID
     * @param integer $ActionId Action ID
     * @param integer $Order Order of actions in the group
     * @param string $GeneralConfiguration General configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CustomConfiguration Custom configurations of actions in the group
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Action group creation time
     * @param string $UpdateTime Action group update time
     * @param string $ActionTitle Action name
     * @param integer $RandomId Random ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RecoverId Recovery action ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExecuteId Executed action ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ActionApiType Called API type. 0: tat; 1: cloud API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ActionAttribute 1: fault; 2: recovery.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionType Action type: platform and custom
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionRisk Action risk level. 1: low-risk; 2: medium-risk; 3: high-risk.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TemplateGroupActionId",$param) and $param["TemplateGroupActionId"] !== null) {
            $this->TemplateGroupActionId = $param["TemplateGroupActionId"];
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("GeneralConfiguration",$param) and $param["GeneralConfiguration"] !== null) {
            $this->GeneralConfiguration = $param["GeneralConfiguration"];
        }

        if (array_key_exists("CustomConfiguration",$param) and $param["CustomConfiguration"] !== null) {
            $this->CustomConfiguration = $param["CustomConfiguration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ActionTitle",$param) and $param["ActionTitle"] !== null) {
            $this->ActionTitle = $param["ActionTitle"];
        }

        if (array_key_exists("RandomId",$param) and $param["RandomId"] !== null) {
            $this->RandomId = $param["RandomId"];
        }

        if (array_key_exists("RecoverId",$param) and $param["RecoverId"] !== null) {
            $this->RecoverId = $param["RecoverId"];
        }

        if (array_key_exists("ExecuteId",$param) and $param["ExecuteId"] !== null) {
            $this->ExecuteId = $param["ExecuteId"];
        }

        if (array_key_exists("ActionApiType",$param) and $param["ActionApiType"] !== null) {
            $this->ActionApiType = $param["ActionApiType"];
        }

        if (array_key_exists("ActionAttribute",$param) and $param["ActionAttribute"] !== null) {
            $this->ActionAttribute = $param["ActionAttribute"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionRisk",$param) and $param["ActionRisk"] !== null) {
            $this->ActionRisk = $param["ActionRisk"];
        }
    }
}
