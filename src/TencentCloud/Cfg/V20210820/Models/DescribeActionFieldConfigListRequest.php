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
 * DescribeActionFieldConfigList request structure.
 *
 * @method array getActionIds() Obtain Action ID list
 * @method void setActionIds(array $ActionIds) Set Action ID list
 * @method integer getObjectTypeId() Obtain Object type ID
 * @method void setObjectTypeId(integer $ObjectTypeId) Set Object type ID
 */
class DescribeActionFieldConfigListRequest extends AbstractModel
{
    /**
     * @var array Action ID list
     */
    public $ActionIds;

    /**
     * @var integer Object type ID
     */
    public $ObjectTypeId;

    /**
     * @param array $ActionIds Action ID list
     * @param integer $ObjectTypeId Object type ID
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
        if (array_key_exists("ActionIds",$param) and $param["ActionIds"] !== null) {
            $this->ActionIds = $param["ActionIds"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }
    }
}
