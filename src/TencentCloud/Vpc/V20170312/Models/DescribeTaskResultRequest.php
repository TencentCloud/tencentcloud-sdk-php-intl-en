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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskResult request structure.
 *
 * @method integer getTaskId() Obtain The async job ID
 * @method void setTaskId(integer $TaskId) Set The async job ID
 * @method string getDealName() Obtain The billing order ID
 * @method void setDealName(string $DealName) Set The billing order ID
 */
class DescribeTaskResultRequest extends AbstractModel
{
    /**
     * @var integer The async job ID
     */
    public $TaskId;

    /**
     * @var string The billing order ID
     */
    public $DealName;

    /**
     * @param integer $TaskId The async job ID
     * @param string $DealName The billing order ID
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }
    }
}
