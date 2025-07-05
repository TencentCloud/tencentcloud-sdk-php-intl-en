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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEscapeWhiteList request structure.
 *
 * @method array getIDSet() Obtain Array of allowed item IDs
 * @method void setIDSet(array $IDSet) Set Array of allowed item IDs
 */
class DeleteEscapeWhiteListRequest extends AbstractModel
{
    /**
     * @var array Array of allowed item IDs
     */
    public $IDSet;

    /**
     * @param array $IDSet Array of allowed item IDs
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
        if (array_key_exists("IDSet",$param) and $param["IDSet"] !== null) {
            $this->IDSet = $param["IDSet"];
        }
    }
}
