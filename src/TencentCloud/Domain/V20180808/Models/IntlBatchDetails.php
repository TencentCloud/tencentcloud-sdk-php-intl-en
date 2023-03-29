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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The details of the bulk task
 *
 * @method integer getId() Obtain The ID of the bulk task.
 * @method void setId(integer $Id) Set The ID of the bulk task.
 * @method string getStatus() Obtain The task status.
 * @method void setStatus(string $Status) Set The task status.
 * @method string getReason() Obtain The reason.
 * @method void setReason(string $Reason) Set The reason.
 * @method string getReasonZh() Obtain The reason, expressed in Chinese.
 * @method void setReasonZh(string $ReasonZh) Set The reason, expressed in Chinese.
 */
class IntlBatchDetails extends AbstractModel
{
    /**
     * @var integer The ID of the bulk task.
     */
    public $Id;

    /**
     * @var string The task status.
     */
    public $Status;

    /**
     * @var string The reason.
     */
    public $Reason;

    /**
     * @var string The reason, expressed in Chinese.
     */
    public $ReasonZh;

    /**
     * @param integer $Id The ID of the bulk task.
     * @param string $Status The task status.
     * @param string $Reason The reason.
     * @param string $ReasonZh The reason, expressed in Chinese.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ReasonZh",$param) and $param["ReasonZh"] !== null) {
            $this->ReasonZh = $param["ReasonZh"];
        }
    }
}
