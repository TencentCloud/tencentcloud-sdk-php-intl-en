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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert monitoring data

 *
 * @method integer getOutNum() Obtain Compromised servers
 * @method void setOutNum(integer $OutNum) Set Compromised servers
 * @method integer getHandleNum() Obtain Unhandled alerts
 * @method void setHandleNum(integer $HandleNum) Set Unhandled alerts
 * @method integer getVulNum() Obtain Vulnerability attacks
 * @method void setVulNum(integer $VulNum) Set Vulnerability attacks
 * @method integer getNetworkNum() Obtain Detected networks
 * @method void setNetworkNum(integer $NetworkNum) Set Detected networks
 * @method integer getBanNum() Obtain Blocklist
 * @method void setBanNum(integer $BanNum) Set Blocklist
 * @method integer getBruteForceNum() Obtain Brute force attacks
 * @method void setBruteForceNum(integer $BruteForceNum) Set Brute force attacks
 */
class TLogInfo extends AbstractModel
{
    /**
     * @var integer Compromised servers
     */
    public $OutNum;

    /**
     * @var integer Unhandled alerts
     */
    public $HandleNum;

    /**
     * @var integer Vulnerability attacks
     */
    public $VulNum;

    /**
     * @var integer Detected networks
     */
    public $NetworkNum;

    /**
     * @var integer Blocklist
     */
    public $BanNum;

    /**
     * @var integer Brute force attacks
     */
    public $BruteForceNum;

    /**
     * @param integer $OutNum Compromised servers
     * @param integer $HandleNum Unhandled alerts
     * @param integer $VulNum Vulnerability attacks
     * @param integer $NetworkNum Detected networks
     * @param integer $BanNum Blocklist
     * @param integer $BruteForceNum Brute force attacks
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
        if (array_key_exists("OutNum",$param) and $param["OutNum"] !== null) {
            $this->OutNum = $param["OutNum"];
        }

        if (array_key_exists("HandleNum",$param) and $param["HandleNum"] !== null) {
            $this->HandleNum = $param["HandleNum"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("NetworkNum",$param) and $param["NetworkNum"] !== null) {
            $this->NetworkNum = $param["NetworkNum"];
        }

        if (array_key_exists("BanNum",$param) and $param["BanNum"] !== null) {
            $this->BanNum = $param["BanNum"];
        }

        if (array_key_exists("BruteForceNum",$param) and $param["BruteForceNum"] !== null) {
            $this->BruteForceNum = $param["BruteForceNum"];
        }
    }
}
