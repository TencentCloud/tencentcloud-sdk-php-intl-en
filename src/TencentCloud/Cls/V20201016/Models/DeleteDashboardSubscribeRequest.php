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
 * DeleteDashboardSubscribe request structure.
 *
 * @method integer getId() Obtain Dashboard subscription record id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
 * @method void setId(integer $Id) Set Dashboard subscription record id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
 */
class DeleteDashboardSubscribeRequest extends AbstractModel
{
    /**
     * @var integer Dashboard subscription record id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
     */
    public $Id;

    /**
     * @param integer $Id Dashboard subscription record id. Obtain the id through the [Get Dashboard Subscription List](https://www.tencentcloud.com/document/api/614/105779?from_cn_redirect=1) api.
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
    }
}
