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
 * Remote authentication rule
 *
 * @method string getServer() Obtain Remote authentication server
The server configured in `RemoteAutherntication` is used by default.
 * @method void setServer(string $Server) Set Remote authentication server
The server configured in `RemoteAutherntication` is used by default.
 * @method string getAuthMethod() Obtain HTTP method used by the remote authentication server. Valid values: `get`, `post`, `head`, and `all`. 
`all`: the remote authentication server follows the client request method.
Default: `all`
 * @method void setAuthMethod(string $AuthMethod) Set HTTP method used by the remote authentication server. Valid values: `get`, `post`, `head`, and `all`. 
`all`: the remote authentication server follows the client request method.
Default: `all`
 * @method string getRuleType() Obtain Rule types:
`all`: apply to all files
`file`: apply to files with the specified suffixes
`directory`: apply to the specified directories
`path`: apply to the specified absolute paths
Default: `all`.
 * @method void setRuleType(string $RuleType) Set Rule types:
`all`: apply to all files
`file`: apply to files with the specified suffixes
`directory`: apply to the specified directories
`path`: apply to the specified absolute paths
Default: `all`.
 * @method array getRulePaths() Obtain Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a forward slash `/`.
Default: `*`
 * @method void setRulePaths(array $RulePaths) Set Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a forward slash `/`.
Default: `*`
 * @method integer getAuthTimeout() Obtain Timeout period of the remote authentication server. Unit: ms.
Value range: [1, 30,000]
Default: 20000
 * @method void setAuthTimeout(integer $AuthTimeout) Set Timeout period of the remote authentication server. Unit: ms.
Value range: [1, 30,000]
Default: 20000
 * @method string getAuthTimeoutAction() Obtain Whether to deny or allow the request when the remote authentication server is timed out:
`RETURN_200`: the request is allowed when the remote authentication server is timed out.
`RETURN_403`: the request is denied when the remote authentication server is timed out.
Default: `RETURN_200`
 * @method void setAuthTimeoutAction(string $AuthTimeoutAction) Set Whether to deny or allow the request when the remote authentication server is timed out:
`RETURN_200`: the request is allowed when the remote authentication server is timed out.
`RETURN_403`: the request is denied when the remote authentication server is timed out.
Default: `RETURN_200`
 */
class RemoteAuthenticationRule extends AbstractModel
{
    /**
     * @var string Remote authentication server
The server configured in `RemoteAutherntication` is used by default.
     */
    public $Server;

    /**
     * @var string HTTP method used by the remote authentication server. Valid values: `get`, `post`, `head`, and `all`. 
`all`: the remote authentication server follows the client request method.
Default: `all`
     */
    public $AuthMethod;

    /**
     * @var string Rule types:
`all`: apply to all files
`file`: apply to files with the specified suffixes
`directory`: apply to the specified directories
`path`: apply to the specified absolute paths
Default: `all`.
     */
    public $RuleType;

    /**
     * @var array Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a forward slash `/`.
Default: `*`
     */
    public $RulePaths;

    /**
     * @var integer Timeout period of the remote authentication server. Unit: ms.
Value range: [1, 30,000]
Default: 20000
     */
    public $AuthTimeout;

    /**
     * @var string Whether to deny or allow the request when the remote authentication server is timed out:
`RETURN_200`: the request is allowed when the remote authentication server is timed out.
`RETURN_403`: the request is denied when the remote authentication server is timed out.
Default: `RETURN_200`
     */
    public $AuthTimeoutAction;

    /**
     * @param string $Server Remote authentication server
The server configured in `RemoteAutherntication` is used by default.
     * @param string $AuthMethod HTTP method used by the remote authentication server. Valid values: `get`, `post`, `head`, and `all`. 
`all`: the remote authentication server follows the client request method.
Default: `all`
     * @param string $RuleType Rule types:
`all`: apply to all files
`file`: apply to files with the specified suffixes
`directory`: apply to the specified directories
`path`: apply to the specified absolute paths
Default: `all`.
     * @param array $RulePaths Content for each `RuleType`:
For `all`, enter a wildcard `*`.
For `file`, enter a suffix, e.g., `jpg` or `txt`.
For `directory`, enter a path, e.g., `/xxx/test/`.
For `path`, enter an absolute path, e.g., `/xxx/test.html`.
For `index`, enter a forward slash `/`.
Default: `*`
     * @param integer $AuthTimeout Timeout period of the remote authentication server. Unit: ms.
Value range: [1, 30,000]
Default: 20000
     * @param string $AuthTimeoutAction Whether to deny or allow the request when the remote authentication server is timed out:
`RETURN_200`: the request is allowed when the remote authentication server is timed out.
`RETURN_403`: the request is denied when the remote authentication server is timed out.
Default: `RETURN_200`
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
        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("AuthMethod",$param) and $param["AuthMethod"] !== null) {
            $this->AuthMethod = $param["AuthMethod"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("AuthTimeout",$param) and $param["AuthTimeout"] !== null) {
            $this->AuthTimeout = $param["AuthTimeout"];
        }

        if (array_key_exists("AuthTimeoutAction",$param) and $param["AuthTimeoutAction"] !== null) {
            $this->AuthTimeoutAction = $param["AuthTimeoutAction"];
        }
    }
}
