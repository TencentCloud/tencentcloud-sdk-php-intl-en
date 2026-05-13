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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getWhiteList() Obtain Deprecated.
 * @method void setWhiteList(string $WhiteList) Set Deprecated.
 * @method string getPublicControlConsoleWhiteList() Obtain Public network console allowlist.
 * @method void setPublicControlConsoleWhiteList(string $PublicControlConsoleWhiteList) Set Public network console allowlist.
 * @method string getPublicDataStreamWhiteList() Obtain Public network data flow allowlist.
 * @method void setPublicDataStreamWhiteList(string $PublicDataStreamWhiteList) Set Public network data flow allowlist.
 * @method string getPublicControlConsoleWhiteListStatus() Obtain 
 * @method void setPublicControlConsoleWhiteListStatus(string $PublicControlConsoleWhiteListStatus) Set 
 * @method string getPublicDataStreamWhiteListStatus() Obtain 
 * @method void setPublicDataStreamWhiteListStatus(string $PublicDataStreamWhiteListStatus) Set 
 */
class RabbitMQClusterWhiteListInfo extends AbstractModel
{
    /**
     * @var string Deprecated.
     */
    public $WhiteList;

    /**
     * @var string Public network console allowlist.
     */
    public $PublicControlConsoleWhiteList;

    /**
     * @var string Public network data flow allowlist.
     */
    public $PublicDataStreamWhiteList;

    /**
     * @var string 
     */
    public $PublicControlConsoleWhiteListStatus;

    /**
     * @var string 
     */
    public $PublicDataStreamWhiteListStatus;

    /**
     * @param string $WhiteList Deprecated.
     * @param string $PublicControlConsoleWhiteList Public network console allowlist.
     * @param string $PublicDataStreamWhiteList Public network data flow allowlist.
     * @param string $PublicControlConsoleWhiteListStatus 
     * @param string $PublicDataStreamWhiteListStatus 
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
        if (array_key_exists("WhiteList",$param) and $param["WhiteList"] !== null) {
            $this->WhiteList = $param["WhiteList"];
        }

        if (array_key_exists("PublicControlConsoleWhiteList",$param) and $param["PublicControlConsoleWhiteList"] !== null) {
            $this->PublicControlConsoleWhiteList = $param["PublicControlConsoleWhiteList"];
        }

        if (array_key_exists("PublicDataStreamWhiteList",$param) and $param["PublicDataStreamWhiteList"] !== null) {
            $this->PublicDataStreamWhiteList = $param["PublicDataStreamWhiteList"];
        }

        if (array_key_exists("PublicControlConsoleWhiteListStatus",$param) and $param["PublicControlConsoleWhiteListStatus"] !== null) {
            $this->PublicControlConsoleWhiteListStatus = $param["PublicControlConsoleWhiteListStatus"];
        }

        if (array_key_exists("PublicDataStreamWhiteListStatus",$param) and $param["PublicDataStreamWhiteListStatus"] !== null) {
            $this->PublicDataStreamWhiteListStatus = $param["PublicDataStreamWhiteListStatus"];
        }
    }
}
