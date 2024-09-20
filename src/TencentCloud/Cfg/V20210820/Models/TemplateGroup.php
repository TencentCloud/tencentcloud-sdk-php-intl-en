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
 * Task group
 *
 * @method integer getTemplateGroupId() Obtain Template library action ID
 * @method void setTemplateGroupId(integer $TemplateGroupId) Set Template library action ID
 * @method array getTemplateGroupActions() Obtain List of actions in the template library action group
 * @method void setTemplateGroupActions(array $TemplateGroupActions) Set List of actions in the template library action group
 * @method string getTitle() Obtain Group name
 * @method void setTitle(string $Title) Set Group name
 * @method string getDescription() Obtain Group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOrder() Obtain Group order
 * @method void setOrder(integer $Order) Set Group order
 * @method integer getMode() Obtain Execution mode. 1: sequential execution; 2: execution by stage.
 * @method void setMode(integer $Mode) Set Execution mode. 1: sequential execution; 2: execution by stage.
 * @method integer getObjectTypeId() Obtain Object type ID
 * @method void setObjectTypeId(integer $ObjectTypeId) Set Object type ID
 * @method string getCreateTime() Obtain Group creation time
 * @method void setCreateTime(string $CreateTime) Set Group creation time
 * @method string getUpdateTime() Obtain Group update time
 * @method void setUpdateTime(string $UpdateTime) Set Group update time
 */
class TemplateGroup extends AbstractModel
{
    /**
     * @var integer Template library action ID
     */
    public $TemplateGroupId;

    /**
     * @var array List of actions in the template library action group
     */
    public $TemplateGroupActions;

    /**
     * @var string Group name
     */
    public $Title;

    /**
     * @var string Group description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var integer Group order
     */
    public $Order;

    /**
     * @var integer Execution mode. 1: sequential execution; 2: execution by stage.
     */
    public $Mode;

    /**
     * @var integer Object type ID
     */
    public $ObjectTypeId;

    /**
     * @var string Group creation time
     */
    public $CreateTime;

    /**
     * @var string Group update time
     */
    public $UpdateTime;

    /**
     * @param integer $TemplateGroupId Template library action ID
     * @param array $TemplateGroupActions List of actions in the template library action group
     * @param string $Title Group name
     * @param string $Description Group description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Order Group order
     * @param integer $Mode Execution mode. 1: sequential execution; 2: execution by stage.
     * @param integer $ObjectTypeId Object type ID
     * @param string $CreateTime Group creation time
     * @param string $UpdateTime Group update time
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
        if (array_key_exists("TemplateGroupId",$param) and $param["TemplateGroupId"] !== null) {
            $this->TemplateGroupId = $param["TemplateGroupId"];
        }

        if (array_key_exists("TemplateGroupActions",$param) and $param["TemplateGroupActions"] !== null) {
            $this->TemplateGroupActions = [];
            foreach ($param["TemplateGroupActions"] as $key => $value){
                $obj = new TemplateGroupAction();
                $obj->deserialize($value);
                array_push($this->TemplateGroupActions, $obj);
            }
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
