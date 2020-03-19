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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRoGroupId() Obtain RO group ID in the format of `cdbrg-c1nl9rpv`.
 * @method void setRoGroupId(string $RoGroupId) Set RO group ID in the format of `cdbrg-c1nl9rpv`.
 */

/**
 *BalanceRoGroupLoad request structure.
 */
class BalanceRoGroupLoadRequest extends AbstractModel
{
    /**
     * @var string RO group ID in the format of `cdbrg-c1nl9rpv`.
     */
    public $RoGroupId;
    /**
     * @param string $RoGroupId RO group ID in the format of `cdbrg-c1nl9rpv`.
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
        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }
    }
}
