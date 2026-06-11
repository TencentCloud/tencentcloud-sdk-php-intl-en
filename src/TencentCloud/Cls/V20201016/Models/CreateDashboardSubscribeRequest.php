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
 * CreateDashboardSubscribe request structure.
 *
 * @method string getName() Obtain Dashboard subscription name.
Input limit:
-Cannot be empty
-Length cannot exceed 128 bytes
-Cannot contain character '|'
 * @method void setName(string $Name) Set Dashboard subscription name.
Input limit:
-Cannot be empty
-Length cannot exceed 128 bytes
-Cannot contain character '|'
 * @method string getDashboardId() Obtain Dashboard Id.
-Get the dashboard Id by [searching for the dashboard](https://www.tencentcloud.com/document/product/614/95636?from_cn_redirect=1).
 * @method void setDashboardId(string $DashboardId) Set Dashboard Id.
-Get the dashboard Id by [searching for the dashboard](https://www.tencentcloud.com/document/product/614/95636?from_cn_redirect=1).
 * @method string getCron() Obtain Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
-{seconds} Value ranges from 0 to 59. 
-{Minutes} Value ranges from 0 to 59. 
-Hour. Value ranges from 0 to 23. 
-{Date} value ranges from 1 to 31 AND (last day of month: L) 
-{Month} value ranges from 1 to 12. 
-Week value ranges from 0 to 6 [0:Sunday, 6:Saturday]
 * @method void setCron(string $Cron) Set Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
-{seconds} Value ranges from 0 to 59. 
-{Minutes} Value ranges from 0 to 59. 
-Hour. Value ranges from 0 to 23. 
-{Date} value ranges from 1 to 31 AND (last day of month: L) 
-{Month} value ranges from 1 to 12. 
-Week value ranges from 0 to 6 [0:Sunday, 6:Saturday]
 * @method DashboardSubscribeData getSubscribeData() Obtain Dashboard subscription data.
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) Set Dashboard subscription data.
 */
class CreateDashboardSubscribeRequest extends AbstractModel
{
    /**
     * @var string Dashboard subscription name.
Input limit:
-Cannot be empty
-Length cannot exceed 128 bytes
-Cannot contain character '|'
     */
    public $Name;

    /**
     * @var string Dashboard Id.
-Get the dashboard Id by [searching for the dashboard](https://www.tencentcloud.com/document/product/614/95636?from_cn_redirect=1).
     */
    public $DashboardId;

    /**
     * @var string Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
-{seconds} Value ranges from 0 to 59. 
-{Minutes} Value ranges from 0 to 59. 
-Hour. Value ranges from 0 to 23. 
-{Date} value ranges from 1 to 31 AND (last day of month: L) 
-{Month} value ranges from 1 to 12. 
-Week value ranges from 0 to 6 [0:Sunday, 6:Saturday]
     */
    public $Cron;

    /**
     * @var DashboardSubscribeData Dashboard subscription data.
     */
    public $SubscribeData;

    /**
     * @param string $Name Dashboard subscription name.
Input limit:
-Cannot be empty
-Length cannot exceed 128 bytes
-Cannot contain character '|'
     * @param string $DashboardId Dashboard Id.
-Get the dashboard Id by [searching for the dashboard](https://www.tencentcloud.com/document/product/614/95636?from_cn_redirect=1).
     * @param string $Cron Subscription time cron expression, in format {seconds} {minutes} {hours} {date} {month} {weekday}; (valid data: {minutes} {hours} {date} {month} {weekday})
-{seconds} Value ranges from 0 to 59. 
-{Minutes} Value ranges from 0 to 59. 
-Hour. Value ranges from 0 to 23. 
-{Date} value ranges from 1 to 31 AND (last day of month: L) 
-{Month} value ranges from 1 to 12. 
-Week value ranges from 0 to 6 [0:Sunday, 6:Saturday]
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
    }
}
