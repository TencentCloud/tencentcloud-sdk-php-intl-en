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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanCSIPTaskAgain request structure.
 *
 * @method integer getTaskId() Obtain <p>Scan task ID.</p>
 * @method void setTaskId(integer $TaskId) Set <p>Scan task ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getInstanceIDList() Obtain <p>Limit the target host list for this rescan. If it is empty, all instance IDs in the sub-table corresponding to the primary table are used. Maximum length: 1000</p>
 * @method void setInstanceIDList(array $InstanceIDList) Set <p>Limit the target host list for this rescan. If it is empty, all instance IDs in the sub-table corresponding to the primary table are used. Maximum length: 1000</p>
 * @method integer getTimeoutPeriod() Obtain <p>Scan timeout duration (seconds). Optional. If it is not zero, update the one-click scan timeout configuration and synchronously update the timeout field in the sub-table. The cap is 7200 seconds (2 hours). If it is exceeded, InvalidParameter is returned.</p>
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) Set <p>Scan timeout duration (seconds). Optional. If it is not zero, update the one-click scan timeout configuration and synchronously update the timeout field in the sub-table. The cap is 7200 seconds (2 hours). If it is exceeded, InvalidParameter is returned.</p>
 */
class ScanCSIPTaskAgainRequest extends AbstractModel
{
    /**
     * @var integer <p>Scan task ID.</p>
     */
    public $TaskId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Limit the target host list for this rescan. If it is empty, all instance IDs in the sub-table corresponding to the primary table are used. Maximum length: 1000</p>
     */
    public $InstanceIDList;

    /**
     * @var integer <p>Scan timeout duration (seconds). Optional. If it is not zero, update the one-click scan timeout configuration and synchronously update the timeout field in the sub-table. The cap is 7200 seconds (2 hours). If it is exceeded, InvalidParameter is returned.</p>
     */
    public $TimeoutPeriod;

    /**
     * @param integer $TaskId <p>Scan task ID.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $InstanceIDList <p>Limit the target host list for this rescan. If it is empty, all instance IDs in the sub-table corresponding to the primary table are used. Maximum length: 1000</p>
     * @param integer $TimeoutPeriod <p>Scan timeout duration (seconds). Optional. If it is not zero, update the one-click scan timeout configuration and synchronously update the timeout field in the sub-table. The cap is 7200 seconds (2 hours). If it is exceeded, InvalidParameter is returned.</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("InstanceIDList",$param) and $param["InstanceIDList"] !== null) {
            $this->InstanceIDList = $param["InstanceIDList"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }
    }
}
