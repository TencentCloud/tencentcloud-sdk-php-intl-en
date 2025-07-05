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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The VOD parameters.
 *
 * @method TencentVod getTencentVod() Obtain The Tencent Cloud VOD parameters.
 * @method void setTencentVod(TencentVod $TencentVod) Set The Tencent Cloud VOD parameters.
 */
class CloudVod extends AbstractModel
{
    /**
     * @var TencentVod The Tencent Cloud VOD parameters.
     */
    public $TencentVod;

    /**
     * @param TencentVod $TencentVod The Tencent Cloud VOD parameters.
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
        if (array_key_exists("TencentVod",$param) and $param["TencentVod"] !== null) {
            $this->TencentVod = new TencentVod();
            $this->TencentVod->deserialize($param["TencentVod"]);
        }
    }
}
