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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregated data on the HTTP status codes of business traffic
 *
 * @method array getHttp2xx() Obtain HTTP 2xx Status code
 * @method void setHttp2xx(array $Http2xx) Set HTTP 2xx Status code
 * @method array getHttp3xx() Obtain HTTP 3xx Status code
 * @method void setHttp3xx(array $Http3xx) Set HTTP 3xx Status code
 * @method array getHttp404() Obtain HTTP 404 Status code
 * @method void setHttp404(array $Http404) Set HTTP 404 Status code
 * @method array getHttp4xx() Obtain HTTP 4xx Status code
 * @method void setHttp4xx(array $Http4xx) Set HTTP 4xx Status code
 * @method array getHttp5xx() Obtain HTTP 5xx Status code
 * @method void setHttp5xx(array $Http5xx) Set HTTP 5xx Status code
 * @method array getSourceHttp2xx() Obtain HTTP 2xx Forwarding status code
 * @method void setSourceHttp2xx(array $SourceHttp2xx) Set HTTP 2xx Forwarding status code
 * @method array getSourceHttp3xx() Obtain HTTP 3xx Forwarding status code
 * @method void setSourceHttp3xx(array $SourceHttp3xx) Set HTTP 3xx Forwarding status code
 * @method array getSourceHttp404() Obtain HTTP 404 Forwarding status code
 * @method void setSourceHttp404(array $SourceHttp404) Set HTTP 404 Forwarding status code
 * @method array getSourceHttp4xx() Obtain HTTP 4xx Forwarding status code
 * @method void setSourceHttp4xx(array $SourceHttp4xx) Set HTTP 4xx Forwarding status code
 * @method array getSourceHttp5xx() Obtain HTTP 5xx Forwarding status code
 * @method void setSourceHttp5xx(array $SourceHttp5xx) Set HTTP 5xx Forwarding status code
 */
class HttpStatusMap extends AbstractModel
{
    /**
     * @var array HTTP 2xx Status code
     */
    public $Http2xx;

    /**
     * @var array HTTP 3xx Status code
     */
    public $Http3xx;

    /**
     * @var array HTTP 404 Status code
     */
    public $Http404;

    /**
     * @var array HTTP 4xx Status code
     */
    public $Http4xx;

    /**
     * @var array HTTP 5xx Status code
     */
    public $Http5xx;

    /**
     * @var array HTTP 2xx Forwarding status code
     */
    public $SourceHttp2xx;

    /**
     * @var array HTTP 3xx Forwarding status code
     */
    public $SourceHttp3xx;

    /**
     * @var array HTTP 404 Forwarding status code
     */
    public $SourceHttp404;

    /**
     * @var array HTTP 4xx Forwarding status code
     */
    public $SourceHttp4xx;

    /**
     * @var array HTTP 5xx Forwarding status code
     */
    public $SourceHttp5xx;

    /**
     * @param array $Http2xx HTTP 2xx Status code
     * @param array $Http3xx HTTP 3xx Status code
     * @param array $Http404 HTTP 404 Status code
     * @param array $Http4xx HTTP 4xx Status code
     * @param array $Http5xx HTTP 5xx Status code
     * @param array $SourceHttp2xx HTTP 2xx Forwarding status code
     * @param array $SourceHttp3xx HTTP 3xx Forwarding status code
     * @param array $SourceHttp404 HTTP 404 Forwarding status code
     * @param array $SourceHttp4xx HTTP 4xx Forwarding status code
     * @param array $SourceHttp5xx HTTP 5xx Forwarding status code
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
        if (array_key_exists("Http2xx",$param) and $param["Http2xx"] !== null) {
            $this->Http2xx = $param["Http2xx"];
        }

        if (array_key_exists("Http3xx",$param) and $param["Http3xx"] !== null) {
            $this->Http3xx = $param["Http3xx"];
        }

        if (array_key_exists("Http404",$param) and $param["Http404"] !== null) {
            $this->Http404 = $param["Http404"];
        }

        if (array_key_exists("Http4xx",$param) and $param["Http4xx"] !== null) {
            $this->Http4xx = $param["Http4xx"];
        }

        if (array_key_exists("Http5xx",$param) and $param["Http5xx"] !== null) {
            $this->Http5xx = $param["Http5xx"];
        }

        if (array_key_exists("SourceHttp2xx",$param) and $param["SourceHttp2xx"] !== null) {
            $this->SourceHttp2xx = $param["SourceHttp2xx"];
        }

        if (array_key_exists("SourceHttp3xx",$param) and $param["SourceHttp3xx"] !== null) {
            $this->SourceHttp3xx = $param["SourceHttp3xx"];
        }

        if (array_key_exists("SourceHttp404",$param) and $param["SourceHttp404"] !== null) {
            $this->SourceHttp404 = $param["SourceHttp404"];
        }

        if (array_key_exists("SourceHttp4xx",$param) and $param["SourceHttp4xx"] !== null) {
            $this->SourceHttp4xx = $param["SourceHttp4xx"];
        }

        if (array_key_exists("SourceHttp5xx",$param) and $param["SourceHttp5xx"] !== null) {
            $this->SourceHttp5xx = $param["SourceHttp5xx"];
        }
    }
}
