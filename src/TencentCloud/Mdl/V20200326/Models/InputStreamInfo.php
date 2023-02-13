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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The input stream information.
 *
 * @method string getInputAddress() Obtain The input stream address.
 * @method void setInputAddress(string $InputAddress) Set The input stream address.
 * @method string getAppName() Obtain The input stream path.
 * @method void setAppName(string $AppName) Set The input stream path.
 * @method string getStreamName() Obtain The input stream name.
 * @method void setStreamName(string $StreamName) Set The input stream name.
 * @method integer getStatus() Obtain The input stream status. `1` indicates the stream is active.
 * @method void setStatus(integer $Status) Set The input stream status. `1` indicates the stream is active.
 */
class InputStreamInfo extends AbstractModel
{
    /**
     * @var string The input stream address.
     */
    public $InputAddress;

    /**
     * @var string The input stream path.
     */
    public $AppName;

    /**
     * @var string The input stream name.
     */
    public $StreamName;

    /**
     * @var integer The input stream status. `1` indicates the stream is active.
     */
    public $Status;

    /**
     * @param string $InputAddress The input stream address.
     * @param string $AppName The input stream path.
     * @param string $StreamName The input stream name.
     * @param integer $Status The input stream status. `1` indicates the stream is active.
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
        if (array_key_exists("InputAddress",$param) and $param["InputAddress"] !== null) {
            $this->InputAddress = $param["InputAddress"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
