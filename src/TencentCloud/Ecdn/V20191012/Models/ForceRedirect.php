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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forced access protocol redirection configuration.
 *
 * @method string getSwitch() Obtain Forced access protocol redirection configuration switch. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Forced access protocol redirection configuration switch. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRedirectType() Obtain Access protocol type for forced redirection. Valid values: http (forced redirection to HTTP protocol), https (forced redirection to HTTPS protocol).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectType(string $RedirectType) Set Access protocol type for forced redirection. Valid values: http (forced redirection to HTTP protocol), https (forced redirection to HTTPS protocol).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRedirectStatusCode() Obtain HTTP status code returned when forced redirection is enabled. Valid values: 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) Set HTTP status code returned when forced redirection is enabled. Valid values: 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ForceRedirect extends AbstractModel
{
    /**
     * @var string Forced access protocol redirection configuration switch. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Access protocol type for forced redirection. Valid values: http (forced redirection to HTTP protocol), https (forced redirection to HTTPS protocol).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectType;

    /**
     * @var integer HTTP status code returned when forced redirection is enabled. Valid values: 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectStatusCode;

    /**
     * @param string $Switch Forced access protocol redirection configuration switch. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RedirectType Access protocol type for forced redirection. Valid values: http (forced redirection to HTTP protocol), https (forced redirection to HTTPS protocol).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RedirectStatusCode HTTP status code returned when forced redirection is enabled. Valid values: 301, 302.
Note: this field may return null, indicating that no valid values can be obtained.
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
    }
}
