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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The site test configuration
 *
 * @method integer getTaskType() Obtain The task type. Values:
<li>`1`: Page performance</li>
<li>`2`: File uploads</li>
<li>`3`: File downloads</li>
<li>`4`: Port performance</li>
<li>`5`: Network quality</li>
<li>`6`: Audio/Video experience</li>
 * @method void setTaskType(integer $TaskType) Set The task type. Values:
<li>`1`: Page performance</li>
<li>`2`: File uploads</li>
<li>`3`: File downloads</li>
<li>`4`: Port performance</li>
<li>`5`: Network quality</li>
<li>`6`: Audio/Video experience</li>
 * @method string getUrl() Obtain The URL.
 * @method void setUrl(string $Url) Set The URL.
 * @method string getUA() Obtain The user agent.
 * @method void setUA(string $UA) Set The user agent.
 * @method string getConnectivity() Obtain The network type.
 * @method void setConnectivity(string $Connectivity) Set The network type.
 */
class SpeedTestingConfig extends AbstractModel
{
    /**
     * @var integer The task type. Values:
<li>`1`: Page performance</li>
<li>`2`: File uploads</li>
<li>`3`: File downloads</li>
<li>`4`: Port performance</li>
<li>`5`: Network quality</li>
<li>`6`: Audio/Video experience</li>
     */
    public $TaskType;

    /**
     * @var string The URL.
     */
    public $Url;

    /**
     * @var string The user agent.
     */
    public $UA;

    /**
     * @var string The network type.
     */
    public $Connectivity;

    /**
     * @param integer $TaskType The task type. Values:
<li>`1`: Page performance</li>
<li>`2`: File uploads</li>
<li>`3`: File downloads</li>
<li>`4`: Port performance</li>
<li>`5`: Network quality</li>
<li>`6`: Audio/Video experience</li>
     * @param string $Url The URL.
     * @param string $UA The user agent.
     * @param string $Connectivity The network type.
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UA",$param) and $param["UA"] !== null) {
            $this->UA = $param["UA"];
        }

        if (array_key_exists("Connectivity",$param) and $param["Connectivity"] !== null) {
            $this->Connectivity = $param["Connectivity"];
        }
    }
}
