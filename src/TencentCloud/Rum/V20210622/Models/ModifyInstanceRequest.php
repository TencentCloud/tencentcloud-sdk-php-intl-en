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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance request structure.
 *
 * @method string getInstanceId() Obtain ID of the instance to be modified
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be modified
 * @method string getInstanceName() Obtain New instance name (up to 255 characters)
 * @method void setInstanceName(string $InstanceName) Set New instance name (up to 255 characters)
 * @method string getInstanceDesc() Obtain New instance description (up to 1,024 characters)
 * @method void setInstanceDesc(string $InstanceDesc) Set New instance description (up to 1,024 characters)
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the instance to be modified
     */
    public $InstanceId;

    /**
     * @var string New instance name (up to 255 characters)
     */
    public $InstanceName;

    /**
     * @var string New instance description (up to 1,024 characters)
     */
    public $InstanceDesc;

    /**
     * @param string $InstanceId ID of the instance to be modified
     * @param string $InstanceName New instance name (up to 255 characters)
     * @param string $InstanceDesc New instance description (up to 1,024 characters)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }
    }
}
