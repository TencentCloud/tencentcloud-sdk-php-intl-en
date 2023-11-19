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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access protocol forced redirect configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Access forced jump configuration switch, value: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set Access forced jump configuration switch, value: <li>on: on; </li> <li>off: off. </li>
 * @method string getRedirectType() Obtain Access forced jump type: <li>http: forced http jump</li> <li>https: forced https jump</li>
 * @method void setRedirectType(string $RedirectType) Set Access forced jump type: <li>http: forced http jump</li> <li>https: forced https jump</li>
 * @method integer getRedirectStatusCode() Obtain Status code returned for forced redirect Supports 301, 302.
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set Status code returned for forced redirect Supports 301, 302.
 * @method string getCarryHeaders() Obtain Whether to return the newly added header during force redirection.
 * @method void setCarryHeaders(string $CarryHeaders) Set Whether to return the newly added header during force redirection.
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string Access forced jump configuration switch, value: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var string Access forced jump type: <li>http: forced http jump</li> <li>https: forced https jump</li>
     */
    public $RedirectType;

    /**
     * @var integer Status code returned for forced redirect Supports 301, 302.
     */
    public $RedirectStatusCode;

    /**
     * @var string Whether to return the newly added header during force redirection.
     */
    public $CarryHeaders;

    /**
     * @param string $Switch Access forced jump configuration switch, value: <li>on: on; </li> <li>off: off. </li>
     * @param string $RedirectType Access forced jump type: <li>http: forced http jump</li> <li>https: forced https jump</li>
     * @param integer $RedirectStatusCode Status code returned for forced redirect Supports 301, 302.
     * @param string $CarryHeaders Whether to return the newly added header during force redirection.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RedirectType",$param) and $param["RedirectType"] !== null) {
            $this->RedirectType = $param["RedirectType"];
        }

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }

        if (array_key_exists("CarryHeaders",$param) and $param["CarryHeaders"] !== null) {
            $this->CarryHeaders = $param["CarryHeaders"];
        }
    }
}
