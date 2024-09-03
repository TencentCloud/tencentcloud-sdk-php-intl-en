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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application basic data.
 *
 * @method string getWindowUseType() Obtain Application window usage mode (ApplicationDesktop: Captures the entire desktop; ApplicationWindow: Captures only the application window).
 * @method void setWindowUseType(string $WindowUseType) Set Application window usage mode (ApplicationDesktop: Captures the entire desktop; ApplicationWindow: Captures only the application window).
 * @method string getWindowName() Obtain Application window name.
 * @method void setWindowName(string $WindowName) Set Application window name.
 * @method string getWindowClassName() Obtain Application window class name.
 * @method void setWindowClassName(string $WindowClassName) Set Application window class name.
 * @method string getWindowCaptureMode() Obtain Application window capture mode (HOOK: default mode; DDA_CUT: compatible mode).
 * @method void setWindowCaptureMode(string $WindowCaptureMode) Set Application window capture mode (HOOK: default mode; DDA_CUT: compatible mode).
 */
class ApplicationBaseInfo extends AbstractModel
{
    /**
     * @var string Application window usage mode (ApplicationDesktop: Captures the entire desktop; ApplicationWindow: Captures only the application window).
     */
    public $WindowUseType;

    /**
     * @var string Application window name.
     */
    public $WindowName;

    /**
     * @var string Application window class name.
     */
    public $WindowClassName;

    /**
     * @var string Application window capture mode (HOOK: default mode; DDA_CUT: compatible mode).
     */
    public $WindowCaptureMode;

    /**
     * @param string $WindowUseType Application window usage mode (ApplicationDesktop: Captures the entire desktop; ApplicationWindow: Captures only the application window).
     * @param string $WindowName Application window name.
     * @param string $WindowClassName Application window class name.
     * @param string $WindowCaptureMode Application window capture mode (HOOK: default mode; DDA_CUT: compatible mode).
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
        if (array_key_exists("WindowUseType",$param) and $param["WindowUseType"] !== null) {
            $this->WindowUseType = $param["WindowUseType"];
        }

        if (array_key_exists("WindowName",$param) and $param["WindowName"] !== null) {
            $this->WindowName = $param["WindowName"];
        }

        if (array_key_exists("WindowClassName",$param) and $param["WindowClassName"] !== null) {
            $this->WindowClassName = $param["WindowClassName"];
        }

        if (array_key_exists("WindowCaptureMode",$param) and $param["WindowCaptureMode"] !== null) {
            $this->WindowCaptureMode = $param["WindowCaptureMode"];
        }
    }
}
