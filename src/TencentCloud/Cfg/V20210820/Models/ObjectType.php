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
 * Object type
 *
 * @method integer getObjectTypeId() Obtain Object type ID
 * @method void setObjectTypeId(integer $ObjectTypeId) Set Object type ID
 * @method string getObjectTypeTitle() Obtain Object type name
 * @method void setObjectTypeTitle(string $ObjectTypeTitle) Set Object type name
 * @method string getObjectTypeLevelOne() Obtain Level-1 object type
 * @method void setObjectTypeLevelOne(string $ObjectTypeLevelOne) Set Level-1 object type
 * @method ObjectTypeConfig getObjectTypeParams() Obtain Object type parameters
 * @method void setObjectTypeParams(ObjectTypeConfig $ObjectTypeParams) Set Object type parameters
 * @method ObjectTypeJsonParse getObjectTypeJsonParse() Obtain JSON parsing rule for TKE APIs. If the value is null, no parsing is needed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectTypeJsonParse(ObjectTypeJsonParse $ObjectTypeJsonParse) Set JSON parsing rule for TKE APIs. If the value is null, no parsing is needed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getObjectHasNewAction() Obtain Whether new action is included
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectHasNewAction(boolean $ObjectHasNewAction) Set Whether new action is included
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ObjectType extends AbstractModel
{
    /**
     * @var integer Object type ID
     */
    public $ObjectTypeId;

    /**
     * @var string Object type name
     */
    public $ObjectTypeTitle;

    /**
     * @var string Level-1 object type
     */
    public $ObjectTypeLevelOne;

    /**
     * @var ObjectTypeConfig Object type parameters
     */
    public $ObjectTypeParams;

    /**
     * @var ObjectTypeJsonParse JSON parsing rule for TKE APIs. If the value is null, no parsing is needed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectTypeJsonParse;

    /**
     * @var boolean Whether new action is included
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectHasNewAction;

    /**
     * @param integer $ObjectTypeId Object type ID
     * @param string $ObjectTypeTitle Object type name
     * @param string $ObjectTypeLevelOne Level-1 object type
     * @param ObjectTypeConfig $ObjectTypeParams Object type parameters
     * @param ObjectTypeJsonParse $ObjectTypeJsonParse JSON parsing rule for TKE APIs. If the value is null, no parsing is needed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ObjectHasNewAction Whether new action is included
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
        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("ObjectTypeTitle",$param) and $param["ObjectTypeTitle"] !== null) {
            $this->ObjectTypeTitle = $param["ObjectTypeTitle"];
        }

        if (array_key_exists("ObjectTypeLevelOne",$param) and $param["ObjectTypeLevelOne"] !== null) {
            $this->ObjectTypeLevelOne = $param["ObjectTypeLevelOne"];
        }

        if (array_key_exists("ObjectTypeParams",$param) and $param["ObjectTypeParams"] !== null) {
            $this->ObjectTypeParams = new ObjectTypeConfig();
            $this->ObjectTypeParams->deserialize($param["ObjectTypeParams"]);
        }

        if (array_key_exists("ObjectTypeJsonParse",$param) and $param["ObjectTypeJsonParse"] !== null) {
            $this->ObjectTypeJsonParse = new ObjectTypeJsonParse();
            $this->ObjectTypeJsonParse->deserialize($param["ObjectTypeJsonParse"]);
        }

        if (array_key_exists("ObjectHasNewAction",$param) and $param["ObjectHasNewAction"] !== null) {
            $this->ObjectHasNewAction = $param["ObjectHasNewAction"];
        }
    }
}
