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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time segment structure
 *
 * @method integer getBegin() Obtain Fragment start time
 * @method void setBegin(integer $Begin) Set Fragment start time
 * @method integer getEnd() Obtain Shard end time
 * @method void setEnd(integer $End) Set Shard end time
 */
class Timeline extends AbstractModel
{
    /**
     * @var integer Fragment start time
     */
    public $Begin;

    /**
     * @var integer Shard end time
     */
    public $End;

    /**
     * @param integer $Begin Fragment start time
     * @param integer $End Shard end time
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
        if (array_key_exists("Begin",$param) and $param["Begin"] !== null) {
            $this->Begin = $param["Begin"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
