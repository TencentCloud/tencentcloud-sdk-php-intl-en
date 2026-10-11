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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConsoleGroup request structure.
 *
 * @method string getGroupName() Obtain <p>User group name</p>
 * @method void setGroupName(string $GroupName) Set <p>User group name</p>
 * @method string getGroupNickname() Obtain <p>User group alias</p>
 * @method void setGroupNickname(string $GroupNickname) Set <p>User group alias</p>
 * @method string getDescription() Obtain <p>User group description.</p>
 * @method void setDescription(string $Description) Set <p>User group description.</p>
 */
class CreateConsoleGroupRequest extends AbstractModel
{
    /**
     * @var string <p>User group name</p>
     */
    public $GroupName;

    /**
     * @var string <p>User group alias</p>
     */
    public $GroupNickname;

    /**
     * @var string <p>User group description.</p>
     */
    public $Description;

    /**
     * @param string $GroupName <p>User group name</p>
     * @param string $GroupNickname <p>User group alias</p>
     * @param string $Description <p>User group description.</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupNickname",$param) and $param["GroupNickname"] !== null) {
            $this->GroupNickname = $param["GroupNickname"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
