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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulOverview response structure.
 *
 * @method VulOverview getFollowVul() Obtain Statistics on focused vulnerabilities
 * @method void setFollowVul(VulOverview $FollowVul) Set Statistics on focused vulnerabilities
 * @method VulOverview getAllVul() Obtain Statistics on all vulnerabilities
 * @method void setAllVul(VulOverview $AllVul) Set Statistics on all vulnerabilities
 * @method VulOverview getEffectHost() Obtain Statistics on affected hosts
 * @method void setEffectHost(VulOverview $EffectHost) Set Statistics on affected hosts
 * @method VulOverview getVulAttackEvent() Obtain Statistics on vulnerability attack event (past 1 month)
 * @method void setVulAttackEvent(VulOverview $VulAttackEvent) Set Statistics on vulnerability attack event (past 1 month)
 * @method VulOverview getVulDefenceEvent() Obtain Statistics on defended attacks (past 1 month)
 * @method void setVulDefenceEvent(VulOverview $VulDefenceEvent) Set Statistics on defended attacks (past 1 month)
 * @method VulOverview getVulStore() Obtain Vulnerability database statistics
 * @method void setVulStore(VulOverview $VulStore) Set Vulnerability database statistics
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVulOverviewResponse extends AbstractModel
{
    /**
     * @var VulOverview Statistics on focused vulnerabilities
     */
    public $FollowVul;

    /**
     * @var VulOverview Statistics on all vulnerabilities
     */
    public $AllVul;

    /**
     * @var VulOverview Statistics on affected hosts
     */
    public $EffectHost;

    /**
     * @var VulOverview Statistics on vulnerability attack event (past 1 month)
     */
    public $VulAttackEvent;

    /**
     * @var VulOverview Statistics on defended attacks (past 1 month)
     */
    public $VulDefenceEvent;

    /**
     * @var VulOverview Vulnerability database statistics
     */
    public $VulStore;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param VulOverview $FollowVul Statistics on focused vulnerabilities
     * @param VulOverview $AllVul Statistics on all vulnerabilities
     * @param VulOverview $EffectHost Statistics on affected hosts
     * @param VulOverview $VulAttackEvent Statistics on vulnerability attack event (past 1 month)
     * @param VulOverview $VulDefenceEvent Statistics on defended attacks (past 1 month)
     * @param VulOverview $VulStore Vulnerability database statistics
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("FollowVul",$param) and $param["FollowVul"] !== null) {
            $this->FollowVul = new VulOverview();
            $this->FollowVul->deserialize($param["FollowVul"]);
        }

        if (array_key_exists("AllVul",$param) and $param["AllVul"] !== null) {
            $this->AllVul = new VulOverview();
            $this->AllVul->deserialize($param["AllVul"]);
        }

        if (array_key_exists("EffectHost",$param) and $param["EffectHost"] !== null) {
            $this->EffectHost = new VulOverview();
            $this->EffectHost->deserialize($param["EffectHost"]);
        }

        if (array_key_exists("VulAttackEvent",$param) and $param["VulAttackEvent"] !== null) {
            $this->VulAttackEvent = new VulOverview();
            $this->VulAttackEvent->deserialize($param["VulAttackEvent"]);
        }

        if (array_key_exists("VulDefenceEvent",$param) and $param["VulDefenceEvent"] !== null) {
            $this->VulDefenceEvent = new VulOverview();
            $this->VulDefenceEvent->deserialize($param["VulDefenceEvent"]);
        }

        if (array_key_exists("VulStore",$param) and $param["VulStore"] !== null) {
            $this->VulStore = new VulOverview();
            $this->VulStore->deserialize($param["VulStore"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}