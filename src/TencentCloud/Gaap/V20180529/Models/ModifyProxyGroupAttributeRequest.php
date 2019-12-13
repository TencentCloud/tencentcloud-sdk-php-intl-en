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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupId() 获取ID of the connection group to be modified.
 * @method void setGroupId(string $GroupId) 设置ID of the connection group to be modified.
 * @method string getGroupName() 获取New connection group name. Up to 30 characters. The extra characters will be truncated.
 * @method void setGroupName(string $GroupName) 设置New connection group name. Up to 30 characters. The extra characters will be truncated.
 */

/**
 *ModifyProxyGroupAttribute request structure.
 */
class ModifyProxyGroupAttributeRequest extends AbstractModel
{
    /**
     * @var string ID of the connection group to be modified.
     */
    public $GroupId;

    /**
     * @var string New connection group name. Up to 30 characters. The extra characters will be truncated.
     */
    public $GroupName;
    /**
     * @param string $GroupId ID of the connection group to be modified.
     * @param string $GroupName New connection group name. Up to 30 characters. The extra characters will be truncated.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
