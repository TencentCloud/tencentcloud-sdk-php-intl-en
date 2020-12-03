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
 * Detailed configuration information of ECDN domain name.
 *
 * @method string getResourceId() Obtain Domain name ID.
 * @method void setResourceId(string $ResourceId) Set Domain name ID.
 * @method integer getAppId() Obtain Tencent Cloud account ID.
 * @method void setAppId(integer $AppId) Set Tencent Cloud account ID.
 * @method string getDomain() Obtain Acceleration domain name.
 * @method void setDomain(string $Domain) Set Acceleration domain name.
 * @method string getCname() Obtain Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCname(string $Cname) Set Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Domain name status. Valid values: pending (reviewing), rejected (rejected), processing (deploying after approval), online (enabled), offline (disabled), deleted (deleted).
 * @method void setStatus(string $Status) Set Domain name status. Valid values: pending (reviewing), rejected (rejected), processing (deploying after approval), online (enabled), offline (disabled), deleted (deleted).
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getCreateTime() Obtain Domain name creation time.
 * @method void setCreateTime(string $CreateTime) Set Domain name creation time.
 * @method string getUpdateTime() Obtain Domain name update time.
 * @method void setUpdateTime(string $UpdateTime) Set Domain name update time.
 * @method Origin getOrigin() Obtain Origin server configuration.
 * @method void setOrigin(Origin $Origin) Set Origin server configuration.
 * @method IpFilter getIpFilter() Obtain IP blocklist/allowlist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpFilter(IpFilter $IpFilter) Set IP blocklist/allowlist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method IpFreqLimit getIpFreqLimit() Obtain IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) Set IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ResponseHeader getResponseHeader() Obtain Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CacheKey getCacheKey() Obtain Node caching configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCacheKey(CacheKey $CacheKey) Set Node caching configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Cache getCache() Obtain Caching rule configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCache(Cache $Cache) Set Caching rule configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Https getHttps() Obtain HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHttps(Https $Https) Set HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDisable() Obtain Domain name blockage status. Valid values: normal (normal), overdue (service is suspended due to arrears), quota (trial traffic package is used up), malicious (malicious user), ddos (DDoS attack), idle (no traffic), unlicensed (no ICP filing), capping (bandwidth cap reached), readonly (read-only).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisable(string $Disable) Set Domain name blockage status. Valid values: normal (normal), overdue (service is suspended due to arrears), quota (trial traffic package is used up), malicious (malicious user), ddos (DDoS attack), idle (no traffic), unlicensed (no ICP filing), capping (bandwidth cap reached), readonly (read-only).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ForceRedirect getForceRedirect() Obtain Forced access protocol redirection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set Forced access protocol redirection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getArea() Obtain Acceleration region. Valid values: mainland, overseas, global.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setArea(string $Area) Set Acceleration region. Valid values: mainland, overseas, global.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReadonly() Obtain Domain name lock status. normal: not locked; global: globally locked.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReadonly(string $Readonly) Set Domain name lock status. normal: not locked; global: globally locked.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTag() Obtain Domain name tag
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTag(array $Tag) Set Domain name tag
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method WebSocket getWebSocket() Obtain WebSocket configuration.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setWebSocket(WebSocket $WebSocket) Set WebSocket configuration.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class DomainDetailInfo extends AbstractModel
{
    /**
     * @var string Domain name ID.
     */
    public $ResourceId;

    /**
     * @var integer Tencent Cloud account ID.
     */
    public $AppId;

    /**
     * @var string Acceleration domain name.
     */
    public $Domain;

    /**
     * @var string Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cname;

    /**
     * @var string Domain name status. Valid values: pending (reviewing), rejected (rejected), processing (deploying after approval), online (enabled), offline (disabled), deleted (deleted).
     */
    public $Status;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string Domain name creation time.
     */
    public $CreateTime;

    /**
     * @var string Domain name update time.
     */
    public $UpdateTime;

    /**
     * @var Origin Origin server configuration.
     */
    public $Origin;

    /**
     * @var IpFilter IP blocklist/allowlist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpFreqLimit;

    /**
     * @var ResponseHeader Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ResponseHeader;

    /**
     * @var CacheKey Node caching configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CacheKey;

    /**
     * @var Cache Caching rule configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cache;

    /**
     * @var Https HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Https;

    /**
     * @var string Domain name blockage status. Valid values: normal (normal), overdue (service is suspended due to arrears), quota (trial traffic package is used up), malicious (malicious user), ddos (DDoS attack), idle (no traffic), unlicensed (no ICP filing), capping (bandwidth cap reached), readonly (read-only).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Disable;

    /**
     * @var ForceRedirect Forced access protocol redirection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ForceRedirect;

    /**
     * @var string Acceleration region. Valid values: mainland, overseas, global.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Area;

    /**
     * @var string Domain name lock status. normal: not locked; global: globally locked.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Readonly;

    /**
     * @var array Domain name tag
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Tag;

    /**
     * @var WebSocket WebSocket configuration.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $WebSocket;

    /**
     * @param string $ResourceId Domain name ID.
     * @param integer $AppId Tencent Cloud account ID.
     * @param string $Domain Acceleration domain name.
     * @param string $Cname Domain name CNAME.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status Domain name status. Valid values: pending (reviewing), rejected (rejected), processing (deploying after approval), online (enabled), offline (disabled), deleted (deleted).
     * @param integer $ProjectId Project ID.
     * @param string $CreateTime Domain name creation time.
     * @param string $UpdateTime Domain name update time.
     * @param Origin $Origin Origin server configuration.
     * @param IpFilter $IpFilter IP blocklist/allowlist configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param IpFreqLimit $IpFreqLimit IP access limit configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ResponseHeader $ResponseHeader Origin server response header configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CacheKey $CacheKey Node caching configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Cache $Cache Caching rule configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Https $Https HTTPS configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Disable Domain name blockage status. Valid values: normal (normal), overdue (service is suspended due to arrears), quota (trial traffic package is used up), malicious (malicious user), ddos (DDoS attack), idle (no traffic), unlicensed (no ICP filing), capping (bandwidth cap reached), readonly (read-only).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ForceRedirect $ForceRedirect Forced access protocol redirection configuration.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Area Acceleration region. Valid values: mainland, overseas, global.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Readonly Domain name lock status. normal: not locked; global: globally locked.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tag Domain name tag
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param WebSocket $WebSocket WebSocket configuration.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
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

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }
    }
}
