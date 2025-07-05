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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetPolicyList request structure.
 *
 * @method integer getDisplayStart() Obtain The start.
 * @method void setDisplayStart(integer $DisplayStart) Set The start.
 * @method integer getDisplayLength() Obtain The maximum number of records to return.
 * @method void setDisplayLength(integer $DisplayLength) Set The maximum number of records to return.
 */
class GetPolicyListRequest extends AbstractModel
{
    /**
     * @var integer The start.
     */
    public $DisplayStart;

    /**
     * @var integer The maximum number of records to return.
     */
    public $DisplayLength;

    /**
     * @param integer $DisplayStart The start.
     * @param integer $DisplayLength The maximum number of records to return.
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
        if (array_key_exists("DisplayStart",$param) and $param["DisplayStart"] !== null) {
            $this->DisplayStart = $param["DisplayStart"];
        }

        if (array_key_exists("DisplayLength",$param) and $param["DisplayLength"] !== null) {
            $this->DisplayLength = $param["DisplayLength"];
        }
    }
}
