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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * APM agent information.
 *
 * @method string getAgentDownloadURL() Obtain Agent download address.
 * @method void setAgentDownloadURL(string $AgentDownloadURL) Set Agent download address.
 * @method string getCollectorURL() Obtain Collector reporting address.
 * @method void setCollectorURL(string $CollectorURL) Set Collector reporting address.
 * @method string getToken() Obtain Token information.
 * @method void setToken(string $Token) Set Token information.
 * @method string getPublicCollectorURL() Obtain Public network reporting address.
 * @method void setPublicCollectorURL(string $PublicCollectorURL) Set Public network reporting address.
 * @method string getInnerCollectorURL() Obtain Self-Developed vpc report address.
 * @method void setInnerCollectorURL(string $InnerCollectorURL) Set Self-Developed vpc report address.
 * @method string getPrivateLinkCollectorURL() Obtain Private link reporting address.
 * @method void setPrivateLinkCollectorURL(string $PrivateLinkCollectorURL) Set Private link reporting address.
 */
class ApmAgentInfo extends AbstractModel
{
    /**
     * @var string Agent download address.
     */
    public $AgentDownloadURL;

    /**
     * @var string Collector reporting address.
     */
    public $CollectorURL;

    /**
     * @var string Token information.
     */
    public $Token;

    /**
     * @var string Public network reporting address.
     */
    public $PublicCollectorURL;

    /**
     * @var string Self-Developed vpc report address.
     */
    public $InnerCollectorURL;

    /**
     * @var string Private link reporting address.
     */
    public $PrivateLinkCollectorURL;

    /**
     * @param string $AgentDownloadURL Agent download address.
     * @param string $CollectorURL Collector reporting address.
     * @param string $Token Token information.
     * @param string $PublicCollectorURL Public network reporting address.
     * @param string $InnerCollectorURL Self-Developed vpc report address.
     * @param string $PrivateLinkCollectorURL Private link reporting address.
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
        if (array_key_exists("AgentDownloadURL",$param) and $param["AgentDownloadURL"] !== null) {
            $this->AgentDownloadURL = $param["AgentDownloadURL"];
        }

        if (array_key_exists("CollectorURL",$param) and $param["CollectorURL"] !== null) {
            $this->CollectorURL = $param["CollectorURL"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("PublicCollectorURL",$param) and $param["PublicCollectorURL"] !== null) {
            $this->PublicCollectorURL = $param["PublicCollectorURL"];
        }

        if (array_key_exists("InnerCollectorURL",$param) and $param["InnerCollectorURL"] !== null) {
            $this->InnerCollectorURL = $param["InnerCollectorURL"];
        }

        if (array_key_exists("PrivateLinkCollectorURL",$param) and $param["PrivateLinkCollectorURL"] !== null) {
            $this->PrivateLinkCollectorURL = $param["PrivateLinkCollectorURL"];
        }
    }
}
