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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application identifier
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method string getAppName() Obtain <p>Application name.</p>
 * @method void setAppName(string $AppName) Set <p>Application name.</p>
 * @method integer getAppMode() Obtain <p>Application mode</p><p>Enumeration values:</p><ul><li>1: Standard mode</li><li>2: agent mode</li><li>3: Single workflow mode</li><li>4: ClawAgent mode</li></ul>
 * @method void setAppMode(integer $AppMode) Set <p>Application mode</p><p>Enumeration values:</p><ul><li>1: Standard mode</li><li>2: agent mode</li><li>3: Single workflow mode</li><li>4: ClawAgent mode</li></ul>
 */
class AppIdentity extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var string <p>Application name.</p>
     */
    public $AppName;

    /**
     * @var integer <p>Application mode</p><p>Enumeration values:</p><ul><li>1: Standard mode</li><li>2: agent mode</li><li>3: Single workflow mode</li><li>4: ClawAgent mode</li></ul>
     */
    public $AppMode;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param string $AppName <p>Application name.</p>
     * @param integer $AppMode <p>Application mode</p><p>Enumeration values:</p><ul><li>1: Standard mode</li><li>2: agent mode</li><li>3: Single workflow mode</li><li>4: ClawAgent mode</li></ul>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }
    }
}
