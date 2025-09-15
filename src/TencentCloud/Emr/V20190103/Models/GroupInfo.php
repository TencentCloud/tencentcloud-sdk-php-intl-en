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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User group information.
 *
 * @method string getGroupName() Obtain Group name.
 * @method void setGroupName(string $GroupName) Set Group name.
 * @method string getDescription() Obtain Remarks.
 * @method void setDescription(string $Description) Set Remarks.
 * @method array getUsers() Obtain User list.
 * @method void setUsers(array $Users) Set User list.
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string Group name.
     */
    public $GroupName;

    /**
     * @var string Remarks.
     */
    public $Description;

    /**
     * @var array User list.
     */
    public $Users;

    /**
     * @param string $GroupName Group name.
     * @param string $Description Remarks.
     * @param array $Users User list.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }
    }
}
