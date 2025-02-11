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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCustomerBillingQuota request structure.
 *
 * @method integer getEventId() Obtain Event id, used to tag the request event, usually a random number.
 * @method void setEventId(integer $EventId) Set Event id, used to tag the request event, usually a random number.
 * @method string getComponentName() Obtain Source of the request.
 * @method void setComponentName(string $ComponentName) Set Source of the request.
 */
class QueryCustomerBillingQuotaRequest extends AbstractModel
{
    /**
     * @var integer Event id, used to tag the request event, usually a random number.
     * @deprecated
     */
    public $EventId;

    /**
     * @var string Source of the request.
     * @deprecated
     */
    public $ComponentName;

    /**
     * @param integer $EventId Event id, used to tag the request event, usually a random number.
     * @param string $ComponentName Source of the request.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }
    }
}
