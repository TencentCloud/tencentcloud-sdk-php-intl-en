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
 * ModifyAccountGroup request structure.
 *
 * @method string getAccountGroupId() Obtain Account group ID.
 * @method void setAccountGroupId(string $AccountGroupId) Set Account group ID.
 * @method string getGroupName() Obtain Account group name. When this parameter is not specified, the name will not be modified.
 * @method void setGroupName(string $GroupName) Set Account group name. When this parameter is not specified, the name will not be modified.
 * @method string getDescription() Obtain Description. When this parameter is not specified, the description will not be modified.
 * @method void setDescription(string $Description) Set Description. When this parameter is not specified, the description will not be modified.
 */
class ModifyAccountGroupRequest extends AbstractModel
{
    /**
     * @var string Account group ID.
     */
    public $AccountGroupId;

    /**
     * @var string Account group name. When this parameter is not specified, the name will not be modified.
     */
    public $GroupName;

    /**
     * @var string Description. When this parameter is not specified, the description will not be modified.
     */
    public $Description;

    /**
     * @param string $AccountGroupId Account group ID.
     * @param string $GroupName Account group name. When this parameter is not specified, the name will not be modified.
     * @param string $Description Description. When this parameter is not specified, the description will not be modified.
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
