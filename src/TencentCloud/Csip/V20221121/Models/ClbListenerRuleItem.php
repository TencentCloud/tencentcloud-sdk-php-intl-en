<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB Layer 7 forwarding rule
 *
 * @method string getListenerID() Obtain <p>Listener ID.</p>
 * @method void setListenerID(string $ListenerID) Set <p>Listener ID.</p>
 * @method string getLocationID() Obtain <p>Rule ID.</p>
 * @method void setLocationID(string $LocationID) Set <p>Rule ID.</p>
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method string getUrl() Obtain <p>URL</p>
 * @method void setUrl(string $Url) Set <p>URL</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 */
class ClbListenerRuleItem extends AbstractModel
{
    /**
     * @var string <p>Listener ID.</p>
     */
    public $ListenerID;

    /**
     * @var string <p>Rule ID.</p>
     */
    public $LocationID;

    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>URL</p>
     */
    public $Url;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @param string $ListenerID <p>Listener ID.</p>
     * @param string $LocationID <p>Rule ID.</p>
     * @param string $Domain <p>Domain name.</p>
     * @param string $Url <p>URL</p>
     * @param string $CreateTime <p>Creation time.</p>
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
        if (array_key_exists("ListenerID",$param) and $param["ListenerID"] !== null) {
            $this->ListenerID = $param["ListenerID"];
        }

        if (array_key_exists("LocationID",$param) and $param["LocationID"] !== null) {
            $this->LocationID = $param["LocationID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
