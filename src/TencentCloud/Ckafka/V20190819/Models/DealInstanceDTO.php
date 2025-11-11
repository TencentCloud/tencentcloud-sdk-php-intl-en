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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mapping between orders and CKafka instances for monthly subscribed and pay-as-you-go instance APIs.
 *
 * @method string getDealName() Obtain Order transaction.
 * @method void setDealName(string $DealName) Set Order transaction.
 * @method array getInstanceIdList() Obtain Order transaction corresponds to the list of purchased CKafka instance ids.
 * @method void setInstanceIdList(array $InstanceIdList) Set Order transaction corresponds to the list of purchased CKafka instance ids.
 */
class DealInstanceDTO extends AbstractModel
{
    /**
     * @var string Order transaction.
     */
    public $DealName;

    /**
     * @var array Order transaction corresponds to the list of purchased CKafka instance ids.
     */
    public $InstanceIdList;

    /**
     * @param string $DealName Order transaction.
     * @param array $InstanceIdList Order transaction corresponds to the list of purchased CKafka instance ids.
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }
    }
}
