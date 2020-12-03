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
 * UpdateDomainConfig request structure.
 *
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method Origin getOrigin() Obtain Origin server configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist configuration.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist configuration.
 * @method IpFreqLimit getIpFreqLimit() Obtain IP access limit configuration.
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP access limit configuration.
 * @method ResponseHeader getResponseHeader() Obtain Origin server response header configuration.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Origin server response header configuration.
 * @method CacheKey getCacheKey() Obtain Node caching configuration.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node caching configuration.
 * @method Cache getCache() Obtain Caching rule configuration.
 * @method void setCache(Cache $Cache) Set Caching rule configuration.
 * @method Https getHttps() Obtain HTTPS configuration.
 * @method void setHttps(Https $Https) Set HTTPS configuration.
 * @method ForceRedirect getForceRedirect() Obtain Forced access protocol redirection configuration.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Forced access protocol redirection configuration.
 * @method string getArea() Obtain Domain name acceleration region. Valid values: mainland (acceleration in Mainland China), overseas (acceleration outside Mainland China), global (global acceleration).
 * @method void setArea(string $Area) Set Domain name acceleration region. Valid values: mainland (acceleration in Mainland China), overseas (acceleration outside Mainland China), global (global acceleration).
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
 */
class UpdateDomainConfigRequest extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var Origin Origin server configuration.
     */
    public $Origin;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var IpFilter IP blocklist/allowlist configuration.
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP access limit configuration.
     */
    public $IpFreqLimit;

    /**
     * @var ResponseHeader Origin server response header configuration.
     */
    public $ResponseHeader;

    /**
     * @var CacheKey Node caching configuration.
     */
    public $CacheKey;

    /**
     * @var Cache Caching rule configuration.
     */
    public $Cache;

    /**
     * @var Https HTTPS configuration.
     */
    public $Https;

    /**
     * @var ForceRedirect Forced access protocol redirection configuration.
     */
    public $ForceRedirect;

    /**
     * @var string Domain name acceleration region. Valid values: mainland (acceleration in Mainland China), overseas (acceleration outside Mainland China), global (global acceleration).
     */
    public $Area;

    /**
     * @var WebSocket WebSocket configuration.
     */
    public $WebSocket;

    /**
     * @param string $Domain Domain name.
     * @param Origin $Origin Origin server configuration.
     * @param integer $ProjectId Project ID.
     * @param IpFilter $IpFilter IP blocklist/allowlist configuration.
     * @param IpFreqLimit $IpFreqLimit IP access limit configuration.
     * @param ResponseHeader $ResponseHeader Origin server response header configuration.
     * @param CacheKey $CacheKey Node caching configuration.
     * @param Cache $Cache Caching rule configuration.
     * @param Https $Https HTTPS configuration.
     * @param ForceRedirect $ForceRedirect Forced access protocol redirection configuration.
     * @param string $Area Domain name acceleration region. Valid values: mainland (acceleration in Mainland China), overseas (acceleration outside Mainland China), global (global acceleration).
     * @param WebSocket $WebSocket WebSocket configuration.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }
    }
}
