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
 * 
 *
 * @method string getArea() Obtain 
 * @method void setArea(string $Area) Set 
 * @method Origin getOrigin() Obtain 
 * @method void setOrigin(Origin $Origin) Set 
 * @method IpFilter getIpFilter() Obtain 
 * @method void setIpFilter(IpFilter $IpFilter) Set 
 * @method UserAgentFilter getUserAgentFilter() Obtain 
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) Set 
 * @method FollowRedirect getFollowRedirect() Obtain 
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) Set 
 * @method RequestHeader getRequestHeader() Obtain 
 * @method void setRequestHeader(RequestHeader $RequestHeader) Set 
 * @method ResponseHeader getResponseHeader() Obtain 
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) Set 
 * @method Cache getCache() Obtain 
 * @method void setCache(Cache $Cache) Set 
 * @method Https getHttps() Obtain 
 * @method void setHttps(Https $Https) Set 
 * @method Authentication getAuthentication() Obtain 
 * @method void setAuthentication(Authentication $Authentication) Set 
 * @method ForceRedirect getForceRedirect() Obtain 
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) Set 
 * @method Referer getReferer() Obtain 
 * @method void setReferer(Referer $Referer) Set 
 * @method MaxAge getMaxAge() Obtain 
 * @method void setMaxAge(MaxAge $MaxAge) Set 
 * @method Ipv6Access getIpv6Access() Obtain 
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) Set 
 * @method Quic getQuic() Obtain 
 * @method void setQuic(Quic $Quic) Set 
 * @method AwsPrivateAccess getAwsPrivateAccess() Obtain 
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) Set 
 * @method OssPrivateAccess getOssPrivateAccess() Obtain 
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) Set 
 * @method HwPrivateAccess getHwPrivateAccess() Obtain 
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) Set 
 * @method OthersPrivateAccess getOthersPrivateAccess() Obtain 
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) Set 
 */
class CDNDomainConfigForUpdate extends AbstractModel
{
    /**
     * @var string 
     */
    public $Area;

    /**
     * @var Origin 
     */
    public $Origin;

    /**
     * @var IpFilter 
     */
    public $IpFilter;

    /**
     * @var UserAgentFilter 
     */
    public $UserAgentFilter;

    /**
     * @var FollowRedirect 
     */
    public $FollowRedirect;

    /**
     * @var RequestHeader 
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader 
     */
    public $ResponseHeader;

    /**
     * @var Cache 
     */
    public $Cache;

    /**
     * @var Https 
     */
    public $Https;

    /**
     * @var Authentication 
     */
    public $Authentication;

    /**
     * @var ForceRedirect 
     */
    public $ForceRedirect;

    /**
     * @var Referer 
     */
    public $Referer;

    /**
     * @var MaxAge 
     */
    public $MaxAge;

    /**
     * @var Ipv6Access 
     */
    public $Ipv6Access;

    /**
     * @var Quic 
     */
    public $Quic;

    /**
     * @var AwsPrivateAccess 
     */
    public $AwsPrivateAccess;

    /**
     * @var OssPrivateAccess 
     */
    public $OssPrivateAccess;

    /**
     * @var HwPrivateAccess 
     */
    public $HwPrivateAccess;

    /**
     * @var OthersPrivateAccess 
     */
    public $OthersPrivateAccess;

    /**
     * @param string $Area 
     * @param Origin $Origin 
     * @param IpFilter $IpFilter 
     * @param UserAgentFilter $UserAgentFilter 
     * @param FollowRedirect $FollowRedirect 
     * @param RequestHeader $RequestHeader 
     * @param ResponseHeader $ResponseHeader 
     * @param Cache $Cache 
     * @param Https $Https 
     * @param Authentication $Authentication 
     * @param ForceRedirect $ForceRedirect 
     * @param Referer $Referer 
     * @param MaxAge $MaxAge 
     * @param Ipv6Access $Ipv6Access 
     * @param Quic $Quic 
     * @param AwsPrivateAccess $AwsPrivateAccess 
     * @param OssPrivateAccess $OssPrivateAccess 
     * @param HwPrivateAccess $HwPrivateAccess 
     * @param OthersPrivateAccess $OthersPrivateAccess 
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = new Referer();
            $this->Referer->deserialize($param["Referer"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("Ipv6Access",$param) and $param["Ipv6Access"] !== null) {
            $this->Ipv6Access = new Ipv6Access();
            $this->Ipv6Access->deserialize($param["Ipv6Access"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("OssPrivateAccess",$param) and $param["OssPrivateAccess"] !== null) {
            $this->OssPrivateAccess = new OssPrivateAccess();
            $this->OssPrivateAccess->deserialize($param["OssPrivateAccess"]);
        }

        if (array_key_exists("HwPrivateAccess",$param) and $param["HwPrivateAccess"] !== null) {
            $this->HwPrivateAccess = new HwPrivateAccess();
            $this->HwPrivateAccess->deserialize($param["HwPrivateAccess"]);
        }

        if (array_key_exists("OthersPrivateAccess",$param) and $param["OthersPrivateAccess"] !== null) {
            $this->OthersPrivateAccess = new OthersPrivateAccess();
            $this->OthersPrivateAccess->deserialize($param["OthersPrivateAccess"]);
        }
    }
}
