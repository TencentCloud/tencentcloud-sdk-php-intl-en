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
 * The log of bulk domain purchase
 *
 * @method integer getLogId() Obtain The log ID.
 * @method void setLogId(integer $LogId) Set The log ID.
 * @method string getAction() Obtain The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
 * @method void setAction(string $Action) Set The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
 * @method integer getNumber() Obtain The quantity.
 * @method void setNumber(integer $Number) Set The quantity.
 * @method string getStatus() Obtain The execution status. Valid values: `doing`, `done`
 * @method void setStatus(string $Status) Set The execution status. Valid values: `doing`, `done`
 * @method string getCreatedOn() Obtain The submission time.
 * @method void setCreatedOn(string $CreatedOn) Set The submission time.
 */
class BatchDomainBuyLog extends AbstractModel
{
    /**
     * @var integer The log ID.
     */
    public $LogId;

    /**
     * @var string The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
     */
    public $Action;

    /**
     * @var integer The quantity.
     */
    public $Number;

    /**
     * @var string The execution status. Valid values: `doing`, `done`
     */
    public $Status;

    /**
     * @var string The submission time.
     */
    public $CreatedOn;

    /**
     * @param integer $LogId The log ID.
     * @param string $Action The bulk operation type. Valid values: `new` (register domains), `batch_transfer_prohibition_on` (enable transfer prohibition), `batch_transfer_prohibition_off` (disable transfer prohibition), `batch_update_prohibition_on` (enable update prohibition), `batch_update_prohibition_off` (disable update prohibition).
     * @param integer $Number The quantity.
     * @param string $Status The execution status. Valid values: `doing`, `done`
     * @param string $CreatedOn The submission time.
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
