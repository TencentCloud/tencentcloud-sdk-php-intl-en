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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTKEEdgeScript response structure.
 *
 * @method string getLink() Obtain Whether to download the link
 * @method void setLink(string $Link) Set Whether to download the link
 * @method string getToken() Obtain Whether to download the desired token
 * @method void setToken(string $Token) Set Whether to download the desired token
 * @method string getCommand() Obtain Whether to download the command
 * @method void setCommand(string $Command) Set Whether to download the command
 * @method string getScriptVersion() Obtain Version of edgectl script. The latest version is obtained by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setScriptVersion(string $ScriptVersion) Set Version of edgectl script. The latest version is obtained by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeTKEEdgeScriptResponse extends AbstractModel
{
    /**
     * @var string Whether to download the link
     */
    public $Link;

    /**
     * @var string Whether to download the desired token
     */
    public $Token;

    /**
     * @var string Whether to download the command
     */
    public $Command;

    /**
     * @var string Version of edgectl script. The latest version is obtained by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ScriptVersion;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Link Whether to download the link
     * @param string $Token Whether to download the desired token
     * @param string $Command Whether to download the command
     * @param string $ScriptVersion Version of edgectl script. The latest version is obtained by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Link",$param) and $param["Link"] !== null) {
            $this->Link = $param["Link"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("ScriptVersion",$param) and $param["ScriptVersion"] !== null) {
            $this->ScriptVersion = $param["ScriptVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
