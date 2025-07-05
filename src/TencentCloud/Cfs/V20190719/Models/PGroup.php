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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of permission groups bound to a file system
 *
 * @method string getPGroupId() Obtain Permission group ID
 * @method void setPGroupId(string $PGroupId) Set Permission group ID
 * @method string getName() Obtain Permission group name
 * @method void setName(string $Name) Set Permission group name
 */
class PGroup extends AbstractModel
{
    /**
     * @var string Permission group ID
     */
    public $PGroupId;

    /**
     * @var string Permission group name
     */
    public $Name;

    /**
     * @param string $PGroupId Permission group ID
     * @param string $Name Permission group name
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
