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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mapping between orders and CKafka instances for monthly subscribed and pay-as-you-go instance APIs.
 *
 * @method string getDealName() Obtain Order list.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealName(string $DealName) Set Order list.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceIdList() Obtain ID list of the purchased CKafka instances corresponding to the order list.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceIdList(array $InstanceIdList) Set ID list of the purchased CKafka instances corresponding to the order list.  Note: This field may return null, indicating that no valid values can be obtained.
 */
class DealInstanceDTO extends AbstractModel
{
    /**
     * @var string Order list.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealName;

    /**
     * @var array ID list of the purchased CKafka instances corresponding to the order list.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceIdList;

    /**
     * @param string $DealName Order list.  Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceIdList ID list of the purchased CKafka instances corresponding to the order list.  Note: This field may return null, indicating that no valid values can be obtained.
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
