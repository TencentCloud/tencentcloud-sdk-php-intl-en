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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration fields of CC frequency limit policies
 *
 * @method integer getPeriod() Obtain Sampling interval (in seconds). Valid values: `1`, `10`, `30`, and `60`.
 * @method void setPeriod(integer $Period) Set Sampling interval (in seconds). Valid values: `1`, `10`, `30`, and `60`.
 * @method integer getRequestNum() Obtain Number of requests. Value range: 1-2000.
 * @method void setRequestNum(integer $RequestNum) Set Number of requests. Value range: 1-2000.
 * @method string getAction() Obtain Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
 * @method void setAction(string $Action) Set Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
 * @method integer getExecuteDuration() Obtain Sets an interval of the frequency limit policy. Value range: 1-86400 (in seconds).
 * @method void setExecuteDuration(integer $ExecuteDuration) Set Sets an interval of the frequency limit policy. Value range: 1-86400 (in seconds).
 * @method string getMode() Obtain Filters values of configuration fields. `include`: The value is included. `equal`: The value matches the configuration field.
 * @method void setMode(string $Mode) Set Filters values of configuration fields. `include`: The value is included. `equal`: The value matches the configuration field.
 * @method string getUri() Obtain URI, which cannot be used together with `User-Agent` and `Cookie`.
 * @method void setUri(string $Uri) Set URI, which cannot be used together with `User-Agent` and `Cookie`.
 * @method string getUserAgent() Obtain User-Agent, which cannot be used together with `Uri` and `Cookie`.
 * @method void setUserAgent(string $UserAgent) Set User-Agent, which cannot be used together with `Uri` and `Cookie`.
 * @method string getCookie() Obtain Cookie, which cannot be used together with `Uri` and `User-Agent`.
 * @method void setCookie(string $Cookie) Set Cookie, which cannot be used together with `Uri` and `User-Agent`.
 */
class CCReqLimitPolicyRecord extends AbstractModel
{
    /**
     * @var integer Sampling interval (in seconds). Valid values: `1`, `10`, `30`, and `60`.
     */
    public $Period;

    /**
     * @var integer Number of requests. Value range: 1-2000.
     */
    public $RequestNum;

    /**
     * @var string Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
     */
    public $Action;

    /**
     * @var integer Sets an interval of the frequency limit policy. Value range: 1-86400 (in seconds).
     */
    public $ExecuteDuration;

    /**
     * @var string Filters values of configuration fields. `include`: The value is included. `equal`: The value matches the configuration field.
     */
    public $Mode;

    /**
     * @var string URI, which cannot be used together with `User-Agent` and `Cookie`.
     */
    public $Uri;

    /**
     * @var string User-Agent, which cannot be used together with `Uri` and `Cookie`.
     */
    public $UserAgent;

    /**
     * @var string Cookie, which cannot be used together with `Uri` and `User-Agent`.
     */
    public $Cookie;

    /**
     * @param integer $Period Sampling interval (in seconds). Valid values: `1`, `10`, `30`, and `60`.
     * @param integer $RequestNum Number of requests. Value range: 1-2000.
     * @param string $Action Action of limiting request frequency. Valid values: `alg` (limit request frequency via verification codes) and `drop`(drop requests).
     * @param integer $ExecuteDuration Sets an interval of the frequency limit policy. Value range: 1-86400 (in seconds).
     * @param string $Mode Filters values of configuration fields. `include`: The value is included. `equal`: The value matches the configuration field.
     * @param string $Uri URI, which cannot be used together with `User-Agent` and `Cookie`.
     * @param string $UserAgent User-Agent, which cannot be used together with `Uri` and `Cookie`.
     * @param string $Cookie Cookie, which cannot be used together with `Uri` and `User-Agent`.
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RequestNum",$param) and $param["RequestNum"] !== null) {
            $this->RequestNum = $param["RequestNum"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ExecuteDuration",$param) and $param["ExecuteDuration"] !== null) {
            $this->ExecuteDuration = $param["ExecuteDuration"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }
    }
}
