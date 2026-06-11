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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dashboard subscription information
 *
 * @method integer getId() Obtain Dashboard subscription ID
 * @method void setId(integer $Id) Set Dashboard subscription ID
 * @method string getName() Obtain Dashboard subscription name.
 * @method void setName(string $Name) Set Dashboard subscription name.
 * @method string getDashboardId() Obtain Dashboard ID.
 * @method void setDashboardId(string $DashboardId) Set Dashboard ID.
 * @method string getCron() Obtain Dashboard subscription time.
 * @method void setCron(string $Cron) Set Dashboard subscription time.
 * @method DashboardSubscribeData getSubscribeData() Obtain Dashboard subscription data.
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) Set Dashboard subscription data.
 * @method string getCreateTime() Obtain Creation time of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
 * @method void setCreateTime(string $CreateTime) Set Creation time of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
 * @method string getUpdateTime() Obtain Dashboard subscription record update time. Format: `YYYY-MM-DD HH:MM:SS`
 * @method void setUpdateTime(string $UpdateTime) Set Dashboard subscription record update time. Format: `YYYY-MM-DD HH:MM:SS`
 * @method string getLastTime() Obtain Time sent successfully of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
 * @method void setLastTime(string $LastTime) Set Time sent successfully of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
 * @method integer getUin() Obtain Cloud primary account ID.
 * @method void setUin(integer $Uin) Set Cloud primary account ID.
 * @method integer getSubUin() Obtain Sub-account ID under coud main account.
 * @method void setSubUin(integer $SubUin) Set Sub-account ID under coud main account.
 * @method string getLastStatus() Obtain Last sending status of the dashboard subscription records. success: all sent successfully; fail: not sent; partialSuccess: partially sent successfully.
 * @method void setLastStatus(string $LastStatus) Set Last sending status of the dashboard subscription records. success: all sent successfully; fail: not sent; partialSuccess: partially sent successfully.
 */
class DashboardSubscribeInfo extends AbstractModel
{
    /**
     * @var integer Dashboard subscription ID
     */
    public $Id;

    /**
     * @var string Dashboard subscription name.
     */
    public $Name;

    /**
     * @var string Dashboard ID.
     */
    public $DashboardId;

    /**
     * @var string Dashboard subscription time.
     */
    public $Cron;

    /**
     * @var DashboardSubscribeData Dashboard subscription data.
     */
    public $SubscribeData;

    /**
     * @var string Creation time of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
     */
    public $CreateTime;

    /**
     * @var string Dashboard subscription record update time. Format: `YYYY-MM-DD HH:MM:SS`
     */
    public $UpdateTime;

    /**
     * @var string Time sent successfully of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
     */
    public $LastTime;

    /**
     * @var integer Cloud primary account ID.
     */
    public $Uin;

    /**
     * @var integer Sub-account ID under coud main account.
     */
    public $SubUin;

    /**
     * @var string Last sending status of the dashboard subscription records. success: all sent successfully; fail: not sent; partialSuccess: partially sent successfully.
     */
    public $LastStatus;

    /**
     * @param integer $Id Dashboard subscription ID
     * @param string $Name Dashboard subscription name.
     * @param string $DashboardId Dashboard ID.
     * @param string $Cron Dashboard subscription time.
     * @param DashboardSubscribeData $SubscribeData Dashboard subscription data.
     * @param string $CreateTime Creation time of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
     * @param string $UpdateTime Dashboard subscription record update time. Format: `YYYY-MM-DD HH:MM:SS`
     * @param string $LastTime Time sent successfully of dashboard subscription record. Format: `YYYY-MM-DD HH:MM:SS`
     * @param integer $Uin Cloud primary account ID.
     * @param integer $SubUin Sub-account ID under coud main account.
     * @param string $LastStatus Last sending status of the dashboard subscription records. success: all sent successfully; fail: not sent; partialSuccess: partially sent successfully.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("SubscribeData",$param) and $param["SubscribeData"] !== null) {
            $this->SubscribeData = new DashboardSubscribeData();
            $this->SubscribeData->deserialize($param["SubscribeData"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("LastStatus",$param) and $param["LastStatus"] !== null) {
            $this->LastStatus = $param["LastStatus"];
        }
    }
}
