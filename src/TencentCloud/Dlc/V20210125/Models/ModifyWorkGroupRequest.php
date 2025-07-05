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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWorkGroup request structure.
 *
 * @method integer getWorkGroupId() Obtain Working group IDs
 * @method void setWorkGroupId(integer $WorkGroupId) Set Working group IDs
 * @method string getWorkGroupDescription() Obtain Working group description, and the upper limit of the number of its characters is 50.
 * @method void setWorkGroupDescription(string $WorkGroupDescription) Set Working group description, and the upper limit of the number of its characters is 50.
 */
class ModifyWorkGroupRequest extends AbstractModel
{
    /**
     * @var integer Working group IDs
     */
    public $WorkGroupId;

    /**
     * @var string Working group description, and the upper limit of the number of its characters is 50.
     */
    public $WorkGroupDescription;

    /**
     * @param integer $WorkGroupId Working group IDs
     * @param string $WorkGroupDescription Working group description, and the upper limit of the number of its characters is 50.
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }
    }
}
