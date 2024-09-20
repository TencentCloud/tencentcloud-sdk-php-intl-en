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
 * Action library data list
 *
 * @method string getActionName() Obtain Action name
 * @method void setActionName(string $ActionName) Set Action name
 * @method string getDesc() Obtain Action description
 * @method void setDesc(string $Desc) Set Action description
 * @method string getActionType() Obtain Action type: ["platform" and "custom"]
 * @method void setActionType(string $ActionType) Set Action type: ["platform" and "custom"]
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getRiskDesc() Obtain Action risk description
 * @method void setRiskDesc(string $RiskDesc) Set Action risk description
 * @method integer getActionId() Obtain Action ID
 * @method void setActionId(integer $ActionId) Set Action ID
 * @method integer getAttributeId() Obtain Action attribute (1: fault; 2: recovery)
 * @method void setAttributeId(integer $AttributeId) Set Action attribute (1: fault; 2: recovery)
 * @method integer getRelationActionId() Obtain ID of the associated action
 * @method void setRelationActionId(integer $RelationActionId) Set ID of the associated action
 * @method string getActionCommand() Obtain Operation command
 * @method void setActionCommand(string $ActionCommand) Set Operation command
 * @method integer getActionCommandType() Obtain Action type (0: tat; 1: cloud API)
 * @method void setActionCommandType(integer $ActionCommandType) Set Action type (0: tat; 1: cloud API)
 * @method string getActionContent() Obtain Parameters of the custom action, in JSON string format
 * @method void setActionContent(string $ActionContent) Set Parameters of the custom action, in JSON string format
 * @method string getResourceType() Obtain Level-2 type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set Level-2 type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionDetail() Obtain Action description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionDetail(string $ActionDetail) Set Action description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsAllowed() Obtain Whether to allow usage by the current account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAllowed(boolean $IsAllowed) Set Whether to allow usage by the current account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionBestCase() Obtain Link to best practices
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionBestCase(string $ActionBestCase) Set Link to best practices
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getObjectType() Obtain Object type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectType(string $ObjectType) Set Object type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMetricIdList() Obtain Monitoring metric ID list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetricIdList(array $MetricIdList) Set Monitoring metric ID list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsNewAction() Obtain Whether the action is new
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsNewAction(boolean $IsNewAction) Set Whether the action is new
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ActionLibraryListResult extends AbstractModel
{
    /**
     * @var string Action name
     */
    public $ActionName;

    /**
     * @var string Action description
     */
    public $Desc;

    /**
     * @var string Action type: ["platform" and "custom"]
     */
    public $ActionType;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Creator
     */
    public $Creator;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Action risk description
     */
    public $RiskDesc;

    /**
     * @var integer Action ID
     */
    public $ActionId;

    /**
     * @var integer Action attribute (1: fault; 2: recovery)
     */
    public $AttributeId;

    /**
     * @var integer ID of the associated action
     */
    public $RelationActionId;

    /**
     * @var string Operation command
     */
    public $ActionCommand;

    /**
     * @var integer Action type (0: tat; 1: cloud API)
     */
    public $ActionCommandType;

    /**
     * @var string Parameters of the custom action, in JSON string format
     */
    public $ActionContent;

    /**
     * @var string Level-2 type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string Action description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionDetail;

    /**
     * @var boolean Whether to allow usage by the current account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAllowed;

    /**
     * @var string Link to best practices
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionBestCase;

    /**
     * @var string Object type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectType;

    /**
     * @var array Monitoring metric ID list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetricIdList;

    /**
     * @var boolean Whether the action is new
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsNewAction;

    /**
     * @param string $ActionName Action name
     * @param string $Desc Action description
     * @param string $ActionType Action type: ["platform" and "custom"]
     * @param string $CreateTime Creation time
     * @param string $Creator Creator
     * @param string $UpdateTime Update time
     * @param string $RiskDesc Action risk description
     * @param integer $ActionId Action ID
     * @param integer $AttributeId Action attribute (1: fault; 2: recovery)
     * @param integer $RelationActionId ID of the associated action
     * @param string $ActionCommand Operation command
     * @param integer $ActionCommandType Action type (0: tat; 1: cloud API)
     * @param string $ActionContent Parameters of the custom action, in JSON string format
     * @param string $ResourceType Level-2 type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionDetail Action description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsAllowed Whether to allow usage by the current account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionBestCase Link to best practices
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ObjectType Object type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MetricIdList Monitoring metric ID list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsNewAction Whether the action is new
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
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RiskDesc",$param) and $param["RiskDesc"] !== null) {
            $this->RiskDesc = $param["RiskDesc"];
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("AttributeId",$param) and $param["AttributeId"] !== null) {
            $this->AttributeId = $param["AttributeId"];
        }

        if (array_key_exists("RelationActionId",$param) and $param["RelationActionId"] !== null) {
            $this->RelationActionId = $param["RelationActionId"];
        }

        if (array_key_exists("ActionCommand",$param) and $param["ActionCommand"] !== null) {
            $this->ActionCommand = $param["ActionCommand"];
        }

        if (array_key_exists("ActionCommandType",$param) and $param["ActionCommandType"] !== null) {
            $this->ActionCommandType = $param["ActionCommandType"];
        }

        if (array_key_exists("ActionContent",$param) and $param["ActionContent"] !== null) {
            $this->ActionContent = $param["ActionContent"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ActionDetail",$param) and $param["ActionDetail"] !== null) {
            $this->ActionDetail = $param["ActionDetail"];
        }

        if (array_key_exists("IsAllowed",$param) and $param["IsAllowed"] !== null) {
            $this->IsAllowed = $param["IsAllowed"];
        }

        if (array_key_exists("ActionBestCase",$param) and $param["ActionBestCase"] !== null) {
            $this->ActionBestCase = $param["ActionBestCase"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("MetricIdList",$param) and $param["MetricIdList"] !== null) {
            $this->MetricIdList = $param["MetricIdList"];
        }

        if (array_key_exists("IsNewAction",$param) and $param["IsNewAction"] !== null) {
            $this->IsNewAction = $param["IsNewAction"];
        }
    }
}
