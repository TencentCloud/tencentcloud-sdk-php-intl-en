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
 * SearchDashboardSubscribe request structure.
 *
 * @method string getDashboardId() Obtain Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) API.
 * @method void setDashboardId(string $DashboardId) Set Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) API.
 * @method DashboardSubscribeData getSubscribeData() Obtain Dashboard subscription data.
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) Set Dashboard subscription data.
 * @method integer getId() Obtain Dashboard subscription Id. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
 * @method void setId(integer $Id) Set Dashboard subscription Id. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
 * @method string getName() Obtain Dashboard subscription Name. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
 * @method void setName(string $Name) Set Dashboard subscription Name. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
 */
class SearchDashboardSubscribeRequest extends AbstractModel
{
    /**
     * @var string Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) API.
     */
    public $DashboardId;

    /**
     * @var DashboardSubscribeData Dashboard subscription data.
     */
    public $SubscribeData;

    /**
     * @var integer Dashboard subscription Id. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
     */
    public $Id;

    /**
     * @var string Dashboard subscription Name. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
     */
    public $Name;

    /**
     * @param string $DashboardId Dashboard id. Obtain the DashboardId through the [Get Dashboard](https://www.tencentcloud.com/document/api/614/95636?from_cn_redirect=1) API.
     * @param DashboardSubscribeData $SubscribeData Dashboard subscription data.
     * @param integer $Id Dashboard subscription Id. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
     * @param string $Name Dashboard subscription Name. Obtain through the api [Dashboard subscription list](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1).
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
        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("SubscribeData",$param) and $param["SubscribeData"] !== null) {
            $this->SubscribeData = new DashboardSubscribeData();
            $this->SubscribeData->deserialize($param["SubscribeData"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
