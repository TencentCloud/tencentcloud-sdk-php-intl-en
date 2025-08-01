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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentInstallCommand response structure.
 *
 * @method string getLinuxCommand() Obtain Linux installation command
 * @method void setLinuxCommand(string $LinuxCommand) Set Linux installation command
 * @method string getWindowsCommand() Obtain Windows installation command (Windows 2008 or later)
 * @method void setWindowsCommand(string $WindowsCommand) Set Windows installation command (Windows 2008 or later)
 * @method string getWindowsStepOne() Obtain Step 1 of Window installation command (Windows 2003)
 * @method void setWindowsStepOne(string $WindowsStepOne) Set Step 1 of Window installation command (Windows 2003)
 * @method string getWindowsStepTwo() Obtain Step 2 of Window installation command (Windows 2003)
 * @method void setWindowsStepTwo(string $WindowsStepTwo) Set Step 2 of Window installation command (Windows 2003)
 * @method string getWindowsDownloadUrl() Obtain Download URL of the agent for Windows
 * @method void setWindowsDownloadUrl(string $WindowsDownloadUrl) Set Download URL of the agent for Windows
 * @method string getARMCommand() Obtain Arm installation command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setARMCommand(string $ARMCommand) Set Arm installation command
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeAgentInstallCommandResponse extends AbstractModel
{
    /**
     * @var string Linux installation command
     */
    public $LinuxCommand;

    /**
     * @var string Windows installation command (Windows 2008 or later)
     */
    public $WindowsCommand;

    /**
     * @var string Step 1 of Window installation command (Windows 2003)
     */
    public $WindowsStepOne;

    /**
     * @var string Step 2 of Window installation command (Windows 2003)
     */
    public $WindowsStepTwo;

    /**
     * @var string Download URL of the agent for Windows
     */
    public $WindowsDownloadUrl;

    /**
     * @var string Arm installation command
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ARMCommand;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $LinuxCommand Linux installation command
     * @param string $WindowsCommand Windows installation command (Windows 2008 or later)
     * @param string $WindowsStepOne Step 1 of Window installation command (Windows 2003)
     * @param string $WindowsStepTwo Step 2 of Window installation command (Windows 2003)
     * @param string $WindowsDownloadUrl Download URL of the agent for Windows
     * @param string $ARMCommand Arm installation command
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LinuxCommand",$param) and $param["LinuxCommand"] !== null) {
            $this->LinuxCommand = $param["LinuxCommand"];
        }

        if (array_key_exists("WindowsCommand",$param) and $param["WindowsCommand"] !== null) {
            $this->WindowsCommand = $param["WindowsCommand"];
        }

        if (array_key_exists("WindowsStepOne",$param) and $param["WindowsStepOne"] !== null) {
            $this->WindowsStepOne = $param["WindowsStepOne"];
        }

        if (array_key_exists("WindowsStepTwo",$param) and $param["WindowsStepTwo"] !== null) {
            $this->WindowsStepTwo = $param["WindowsStepTwo"];
        }

        if (array_key_exists("WindowsDownloadUrl",$param) and $param["WindowsDownloadUrl"] !== null) {
            $this->WindowsDownloadUrl = $param["WindowsDownloadUrl"];
        }

        if (array_key_exists("ARMCommand",$param) and $param["ARMCommand"] !== null) {
            $this->ARMCommand = $param["ARMCommand"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
