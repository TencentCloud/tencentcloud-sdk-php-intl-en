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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query listeners or rules-related origin server information, excluding `tag` information.
 *
 * @method string getRealServerIP() Obtain Origin server IP or domain name
 * @method void setRealServerIP(string $RealServerIP) Set Origin server IP or domain name
 * @method string getRealServerId() Obtain Origin server ID
 * @method void setRealServerId(string $RealServerId) Set Origin server ID
 * @method string getRealServerName() Obtain Origin server name
 * @method void setRealServerName(string $RealServerName) Set Origin server name
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getInBanBlacklist() Obtain Indicates whether the origin server IP or domain name is in the blocklist. Valid values: `0` (no) and `1` (yes).
 * @method void setInBanBlacklist(integer $InBanBlacklist) Set Indicates whether the origin server IP or domain name is in the blocklist. Valid values: `0` (no) and `1` (yes).
 */
class RealServer extends AbstractModel
{
    /**
     * @var string Origin server IP or domain name
     */
    public $RealServerIP;

    /**
     * @var string Origin server ID
     */
    public $RealServerId;

    /**
     * @var string Origin server name
     */
    public $RealServerName;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Indicates whether the origin server IP or domain name is in the blocklist. Valid values: `0` (no) and `1` (yes).
     */
    public $InBanBlacklist;

    /**
     * @param string $RealServerIP Origin server IP or domain name
     * @param string $RealServerId Origin server ID
     * @param string $RealServerName Origin server name
     * @param integer $ProjectId Project ID
     * @param integer $InBanBlacklist Indicates whether the origin server IP or domain name is in the blocklist. Valid values: `0` (no) and `1` (yes).
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
        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("RealServerName",$param) and $param["RealServerName"] !== null) {
            $this->RealServerName = $param["RealServerName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InBanBlacklist",$param) and $param["InBanBlacklist"] !== null) {
            $this->InBanBlacklist = $param["InBanBlacklist"];
        }
    }
}
