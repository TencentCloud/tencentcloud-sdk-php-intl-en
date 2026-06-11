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
 * ModifyDashboardSubscribe request structure.
 *
 * @method integer getId() Obtain Dashboard subscription id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
 * @method void setId(integer $Id) Set Dashboard subscription id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
 * @method string getDashboardId() Obtain Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
 * @method void setDashboardId(string $DashboardId) Set Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
 * @method string getName() Obtain Dashboard subscription name. Supports a maximum of 128 characters and does not support the '|' character.
 * @method void setName(string $Name) Set Dashboard subscription name. Supports a maximum of 128 characters and does not support the '|' character.
 * @method string getCron() Obtain Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
 * @method void setCron(string $Cron) Set Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
 * @method DashboardSubscribeData getSubscribeData() Obtain Dashboard subscription data.
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) Set Dashboard subscription data.
 */
class ModifyDashboardSubscribeRequest extends AbstractModel
{
    /**
     * @var integer Dashboard subscription id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
     */
    public $Id;

    /**
     * @var string Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
     */
    public $DashboardId;

    /**
     * @var string Dashboard subscription name. Supports a maximum of 128 characters and does not support the '|' character.
     */
    public $Name;

    /**
     * @var string Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
     */
    public $Cron;

    /**
     * @var DashboardSubscribeData Dashboard subscription data.
     */
    public $SubscribeData;

    /**
     * @param integer $Id Dashboard subscription id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
     * @param string $DashboardId Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) api.
     * @param string $Name Dashboard subscription name. Supports a maximum of 128 characters and does not support the '|' character.
     * @param string $Cron Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
     * @param DashboardSubscribeData $SubscribeData Dashboard subscription data.
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

        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("SubscribeData",$param) and $param["SubscribeData"] !== null) {
            $this->SubscribeData = new DashboardSubscribeData();
            $this->SubscribeData->deserialize($param["SubscribeData"]);
        }
    }
}
