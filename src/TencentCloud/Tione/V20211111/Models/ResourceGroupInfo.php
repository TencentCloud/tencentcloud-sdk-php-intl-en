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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Summarized information structure for the serviced resource group while an online service is provided.
 *
 * @method string getResourceGroupId() Obtain Resource group ID.
 * @method void setResourceGroupId(string $ResourceGroupId) Set Resource group ID.
 * @method string getResourceGroupName() Obtain Resource group name.
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name.
 */
class ResourceGroupInfo extends AbstractModel
{
    /**
     * @var string Resource group ID.
     */
    public $ResourceGroupId;

    /**
     * @var string Resource group name.
     */
    public $ResourceGroupName;

    /**
     * @param string $ResourceGroupId Resource group ID.
     * @param string $ResourceGroupName Resource group name.
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
