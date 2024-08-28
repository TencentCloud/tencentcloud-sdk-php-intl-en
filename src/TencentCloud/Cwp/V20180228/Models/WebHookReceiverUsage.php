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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Usage information on associated policies of the alarm recipient
 *
 * @method integer getReceiverId() Obtain Recipient ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverId(integer $ReceiverId) Set Recipient ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReceiverName() Obtain Recipient name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverName(string $ReceiverName) Set Recipient name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyName() Obtain Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyName(string $PolicyName) Set Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WebHookReceiverUsage extends AbstractModel
{
    /**
     * @var integer Recipient ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverId;

    /**
     * @var string Recipient name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverName;

    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyName;

    /**
     * @param integer $ReceiverId Recipient ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReceiverName Recipient name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyName Policy name
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("ReceiverName",$param) and $param["ReceiverName"] !== null) {
            $this->ReceiverName = $param["ReceiverName"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }
    }
}
