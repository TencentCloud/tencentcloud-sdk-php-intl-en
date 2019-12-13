<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace TencentCloud\Common\Profile;

/**
 * Class HttpProfile
 * @package TencentCloud\Common\Profile
 */
class HttpProfile
{
    /**
     * @var string https
     */
    public static $REQ_HTTPS = "https://";

    /**
     * @var string http
     */
    public static $REQ_HTTP = "http://";

    /**
     * @var string post
     */
    public static $REQ_POST = "POST";

    /**
     * @var string get
     */
    public static $REQ_GET = "GET";

    /**
     * @var int Time for a minute.
     */
    public static $TM_MINUTE = 60;

    /**
     * @var string http method.
     */
    private $reqMethod;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * @var integer Unit second.
     */
    private $reqTimeout;

    /**
     * @var string
     */
    private $protocol;

    /**
     * HttpProfile constructor.
     * @param string $protocol
     * @param string $endpoint For i.e: (xx.[region.]tencentcloudapi.com)
     * @param string $reqMethod http request method, POST GET
     * @param integer $reqTimeout Timeout settings, unit second.
     */
    public function __construct($protocol = null, $endpoint = null, $reqMethod = null,  $reqTimeout = null)
    {
        $this->reqMethod = $reqMethod ? $reqMethod : HttpProfile::$REQ_POST;
        $this->endpoint = $endpoint;
        $this->reqTimeout = $reqTimeout ? $reqTimeout : HttpProfile::$TM_MINUTE;
        $this->protocol = $protocol ? $protocol : HttpProfile::$REQ_HTTPS;
    }

    /**
     * @param string $reqMethod http
     */
    public function setReqMethod($reqMethod)
    {
        $this->reqMethod = $reqMethod;
    }

    /**
     * @param string $protocol https://  http://
     */
    public function setProtocol($protocol) {
        $this->protocol = $protocol;
    }

    /**
     * @param string $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @param integer $reqTimeout Unit second.
     */
    public function setReqTimeout($reqTimeout)
    {
        $this->reqTimeout = $reqTimeout;
    }

    /**
     * @return null|string
     */
    public function getReqMethod()
    {
        return $this->reqMethod;
    }

    /**
     * @return null|string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @return int
     */
    public function getReqTimeout()
    {
        return $this->reqTimeout;
    }

    /**
     * @return null|string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }
}
