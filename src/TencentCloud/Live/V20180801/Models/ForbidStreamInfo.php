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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of forbidden streams
 *
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method string getCreateTime() Obtain The creation time.
Note: Beijing time (UTC+8) is used.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
Note: Beijing time (UTC+8) is used.
 * @method string getExpireTime() Obtain The end time.
Note: Beijing time (UTC+8) is used.
 * @method void setExpireTime(string $ExpireTime) Set The end time.
Note: Beijing time (UTC+8) is used.
 * @method string getAppName() Obtain The push path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppName(string $AppName) Set The push path.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomainName() Obtain The push domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainName(string $DomainName) Set The push domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ForbidStreamInfo extends AbstractModel
{
    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var string The creation time.
Note: Beijing time (UTC+8) is used.
     */
    public $CreateTime;

    /**
     * @var string The end time.
Note: Beijing time (UTC+8) is used.
     */
    public $ExpireTime;

    /**
     * @var string The push path.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppName;

    /**
     * @var string The push domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainName;

    /**
     * @param string $StreamName Stream name.
     * @param string $CreateTime The creation time.
Note: Beijing time (UTC+8) is used.
     * @param string $ExpireTime The end time.
Note: Beijing time (UTC+8) is used.
     * @param string $AppName The push path.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DomainName The push domain name.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }
    }
}
