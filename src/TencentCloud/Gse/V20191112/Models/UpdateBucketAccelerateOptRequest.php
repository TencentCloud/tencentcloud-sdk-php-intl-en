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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateBucketAccelerateOpt request structure.
 *
 * @method boolean getAllowed() Obtain `true`: enable global acceleration; `false`: disable global acceleration
 * @method void setAllowed(boolean $Allowed) Set `true`: enable global acceleration; `false`: disable global acceleration
 */
class UpdateBucketAccelerateOptRequest extends AbstractModel
{
    /**
     * @var boolean `true`: enable global acceleration; `false`: disable global acceleration
     */
    public $Allowed;

    /**
     * @param boolean $Allowed `true`: enable global acceleration; `false`: disable global acceleration
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
        if (array_key_exists("Allowed",$param) and $param["Allowed"] !== null) {
            $this->Allowed = $param["Allowed"];
        }
    }
}
