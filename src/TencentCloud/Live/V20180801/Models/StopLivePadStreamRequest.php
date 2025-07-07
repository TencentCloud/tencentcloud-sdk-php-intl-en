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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopLivePadStream request structure.
 *
 * @method string getAppName() Obtain Ensure the streaming path uses the same AppName as the push/play URLs (default: 'live')
 * @method void setAppName(string $AppName) Set Ensure the streaming path uses the same AppName as the push/play URLs (default: 'live')
 * @method string getPushDomainName() Obtain Your RTMP push domain.
 * @method void setPushDomainName(string $PushDomainName) Set Your RTMP push domain.
 * @method string getStreamName() Obtain Your stream name.
 * @method void setStreamName(string $StreamName) Set Your stream name.
 * @method string getOperator() Obtain Operator notes.
 * @method void setOperator(string $Operator) Set Operator notes.
 */
class StopLivePadStreamRequest extends AbstractModel
{
    /**
     * @var string Ensure the streaming path uses the same AppName as the push/play URLs (default: 'live')
     */
    public $AppName;

    /**
     * @var string Your RTMP push domain.
     */
    public $PushDomainName;

    /**
     * @var string Your stream name.
     */
    public $StreamName;

    /**
     * @var string Operator notes.
     */
    public $Operator;

    /**
     * @param string $AppName Ensure the streaming path uses the same AppName as the push/play URLs (default: 'live')
     * @param string $PushDomainName Your RTMP push domain.
     * @param string $StreamName Your stream name.
     * @param string $Operator Operator notes.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PushDomainName",$param) and $param["PushDomainName"] !== null) {
            $this->PushDomainName = $param["PushDomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
