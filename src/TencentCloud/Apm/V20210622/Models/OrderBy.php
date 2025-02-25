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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sorting fields.
 *
 * @method string getKey() Obtain Sort field (starttime, endtime, duration are supported).
 * @method void setKey(string $Key) Set Sort field (starttime, endtime, duration are supported).
 * @method string getValue() Obtain ASC: sequential sorting / desc: reverse sorting.
 * @method void setValue(string $Value) Set ASC: sequential sorting / desc: reverse sorting.
 */
class OrderBy extends AbstractModel
{
    /**
     * @var string Sort field (starttime, endtime, duration are supported).
     */
    public $Key;

    /**
     * @var string ASC: sequential sorting / desc: reverse sorting.
     */
    public $Value;

    /**
     * @param string $Key Sort field (starttime, endtime, duration are supported).
     * @param string $Value ASC: sequential sorting / desc: reverse sorting.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
