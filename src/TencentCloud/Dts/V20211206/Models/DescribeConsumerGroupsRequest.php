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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerGroups request structure.
 *
 * @method string getSubscribeId() Obtain Subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Subscription instance ID
 * @method integer getOffset() Obtain Starting offset for returned results. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset for returned results. Default value: 0.
 * @method integer getLimit() Obtain Number of results to be returned at a time. Default value: 10.
 * @method void setLimit(integer $Limit) Set Number of results to be returned at a time. Default value: 10.
 */
class DescribeConsumerGroupsRequest extends AbstractModel
{
    /**
     * @var string Subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var integer Starting offset for returned results. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned at a time. Default value: 10.
     */
    public $Limit;

    /**
     * @param string $SubscribeId Subscription instance ID
     * @param integer $Offset Starting offset for returned results. Default value: 0.
     * @param integer $Limit Number of results to be returned at a time. Default value: 10.
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
