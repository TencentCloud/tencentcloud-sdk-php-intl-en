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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserGroup request structure.
 *
 * @method string getDisplayName() Obtain User group nickname, which is unique and can contain up to 64 characters.
 * @method void setDisplayName(string $DisplayName) Set User group nickname, which is unique and can contain up to 64 characters.
 * @method string getDescription() Obtain User group remarks, which can contain up to 512 characters.
 * @method void setDescription(string $Description) Set User group remarks, which can contain up to 512 characters.
 */
class CreateUserGroupRequest extends AbstractModel
{
    /**
     * @var string User group nickname, which is unique and can contain up to 64 characters.
     */
    public $DisplayName;

    /**
     * @var string User group remarks, which can contain up to 512 characters.
     */
    public $Description;

    /**
     * @param string $DisplayName User group nickname, which is unique and can contain up to 64 characters.
     * @param string $Description User group remarks, which can contain up to 512 characters.
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
        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
