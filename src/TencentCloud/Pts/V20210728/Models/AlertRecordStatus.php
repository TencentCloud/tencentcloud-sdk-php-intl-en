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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Status of alert history record
 *
 * @method integer getAbortJob() Obtain Success or failure of stopping performance test job.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAbortJob(integer $AbortJob) Set Success or failure of stopping performance test job.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getSendNotice() Obtain Success or failure of sending alert notification.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSendNotice(integer $SendNotice) Set Success or failure of sending alert notification.

Note: This field may return null, indicating that no valid value is found.
 */
class AlertRecordStatus extends AbstractModel
{
    /**
     * @var integer Success or failure of stopping performance test job.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AbortJob;

    /**
     * @var integer Success or failure of sending alert notification.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SendNotice;

    /**
     * @param integer $AbortJob Success or failure of stopping performance test job.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $SendNotice Success or failure of sending alert notification.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("AbortJob",$param) and $param["AbortJob"] !== null) {
            $this->AbortJob = $param["AbortJob"];
        }

        if (array_key_exists("SendNotice",$param) and $param["SendNotice"] !== null) {
            $this->SendNotice = $param["SendNotice"];
        }
    }
}
