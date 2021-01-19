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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom description field of the group to be modified, which is a `key-value` pair.
 *
 * @method integer getGroupExDescriptionIndex() Obtain Custom group description field index, whose value starts from 0.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupExDescriptionIndex(integer $GroupExDescriptionIndex) Set Custom group description field index, whose value starts from 0.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getGroupExDescription() Obtain Content of the custom group description field to be updated
 * @method void setGroupExDescription(string $GroupExDescription) Set Content of the custom group description field to be updated
 */
class GroupExDescriptionInfo extends AbstractModel
{
    /**
     * @var integer Custom group description field index, whose value starts from 0.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupExDescriptionIndex;

    /**
     * @var string Content of the custom group description field to be updated
     */
    public $GroupExDescription;

    /**
     * @param integer $GroupExDescriptionIndex Custom group description field index, whose value starts from 0.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $GroupExDescription Content of the custom group description field to be updated
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
        if (array_key_exists("GroupExDescriptionIndex",$param) and $param["GroupExDescriptionIndex"] !== null) {
            $this->GroupExDescriptionIndex = $param["GroupExDescriptionIndex"];
        }

        if (array_key_exists("GroupExDescription",$param) and $param["GroupExDescription"] !== null) {
            $this->GroupExDescription = $param["GroupExDescription"];
        }
    }
}
