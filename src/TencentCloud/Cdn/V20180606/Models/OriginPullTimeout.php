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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin-pull timeout configuration
 *
 * @method integer getConnectTimeout() Obtain The origin-pull connection timeout (in seconds). Valid range: 5-60.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set The origin-pull connection timeout (in seconds). Valid range: 5-60.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getReceiveTimeout() Obtain The origin-pull receipt timeout (in seconds). Valid range: 10-300.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setReceiveTimeout(integer $ReceiveTimeout) Set The origin-pull receipt timeout (in seconds). Valid range: 10-300.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class OriginPullTimeout extends AbstractModel
{
    /**
     * @var integer The origin-pull connection timeout (in seconds). Valid range: 5-60.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ConnectTimeout;

    /**
     * @var integer The origin-pull receipt timeout (in seconds). Valid range: 10-300.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ReceiveTimeout;

    /**
     * @param integer $ConnectTimeout The origin-pull connection timeout (in seconds). Valid range: 5-60.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ReceiveTimeout The origin-pull receipt timeout (in seconds). Valid range: 10-300.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("ReceiveTimeout",$param) and $param["ReceiveTimeout"] !== null) {
            $this->ReceiveTimeout = $param["ReceiveTimeout"];
        }
    }
}
