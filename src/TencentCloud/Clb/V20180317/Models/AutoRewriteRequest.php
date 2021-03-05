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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AutoRewrite request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method string getListenerId() Obtain `HTTPS:443` listener ID
 * @method void setListenerId(string $ListenerId) Set `HTTPS:443` listener ID
 * @method array getDomains() Obtain The domain name to be redirected under the listener `HTTPS:443`. If it is left empty, all domain names under the listener `HTTPS:443` will be configured with redirects.
 * @method void setDomains(array $Domains) Set The domain name to be redirected under the listener `HTTPS:443`. If it is left empty, all domain names under the listener `HTTPS:443` will be configured with redirects.
 * @method array getRewriteCodes() Obtain Redirection status code. Valid values: 301, 302, and 307.
 * @method void setRewriteCodes(array $RewriteCodes) Set Redirection status code. Valid values: 301, 302, and 307.
 * @method array getTakeUrls() Obtain Whether the matched URL is carried in redirection.
 * @method void setTakeUrls(array $TakeUrls) Set Whether the matched URL is carried in redirection.
 */
class AutoRewriteRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var string `HTTPS:443` listener ID
     */
    public $ListenerId;

    /**
     * @var array The domain name to be redirected under the listener `HTTPS:443`. If it is left empty, all domain names under the listener `HTTPS:443` will be configured with redirects.
     */
    public $Domains;

    /**
     * @var array Redirection status code. Valid values: 301, 302, and 307.
     */
    public $RewriteCodes;

    /**
     * @var array Whether the matched URL is carried in redirection.
     */
    public $TakeUrls;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param string $ListenerId `HTTPS:443` listener ID
     * @param array $Domains The domain name to be redirected under the listener `HTTPS:443`. If it is left empty, all domain names under the listener `HTTPS:443` will be configured with redirects.
     * @param array $RewriteCodes Redirection status code. Valid values: 301, 302, and 307.
     * @param array $TakeUrls Whether the matched URL is carried in redirection.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("RewriteCodes",$param) and $param["RewriteCodes"] !== null) {
            $this->RewriteCodes = $param["RewriteCodes"];
        }

        if (array_key_exists("TakeUrls",$param) and $param["TakeUrls"] !== null) {
            $this->TakeUrls = $param["TakeUrls"];
        }
    }
}
