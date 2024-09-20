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
 * DescribeActionLibraryList request structure.
 *
 * @method integer getLimit() Obtain 0-100
 * @method void setLimit(integer $Limit) Set 0-100
 * @method integer getOffset() Obtain Default value: 0
 * @method void setOffset(integer $Offset) Set Default value: 0
 * @method integer getObjectType() Obtain Object type ID
 * @method void setObjectType(integer $ObjectType) Set Object type ID
 * @method array getFilters() Obtain Keyword value {"action name": "a_title", "description": "a_desc", "action type": "a_type", "creation time": "a_create_time", "level-2 type": "a_resource_type"}
 * @method void setFilters(array $Filters) Set Keyword value {"action name": "a_title", "description": "a_desc", "action type": "a_type", "creation time": "a_create_time", "level-2 type": "a_resource_type"}
 * @method array getAttribute() Obtain Action type. 1: fault action; 2: recovery action.
 * @method void setAttribute(array $Attribute) Set Action type. 1: fault action; 2: recovery action.
 * @method array getActionIds() Obtain Filter item - action ID
 * @method void setActionIds(array $ActionIds) Set Filter item - action ID
 */
class DescribeActionLibraryListRequest extends AbstractModel
{
    /**
     * @var integer 0-100
     */
    public $Limit;

    /**
     * @var integer Default value: 0
     */
    public $Offset;

    /**
     * @var integer Object type ID
     */
    public $ObjectType;

    /**
     * @var array Keyword value {"action name": "a_title", "description": "a_desc", "action type": "a_type", "creation time": "a_create_time", "level-2 type": "a_resource_type"}
     */
    public $Filters;

    /**
     * @var array Action type. 1: fault action; 2: recovery action.
     */
    public $Attribute;

    /**
     * @var array Filter item - action ID
     */
    public $ActionIds;

    /**
     * @param integer $Limit 0-100
     * @param integer $Offset Default value: 0
     * @param integer $ObjectType Object type ID
     * @param array $Filters Keyword value {"action name": "a_title", "description": "a_desc", "action type": "a_type", "creation time": "a_create_time", "level-2 type": "a_resource_type"}
     * @param array $Attribute Action type. 1: fault action; 2: recovery action.
     * @param array $ActionIds Filter item - action ID
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ActionFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            $this->Attribute = $param["Attribute"];
        }

        if (array_key_exists("ActionIds",$param) and $param["ActionIds"] !== null) {
            $this->ActionIds = $param["ActionIds"];
        }
    }
}
