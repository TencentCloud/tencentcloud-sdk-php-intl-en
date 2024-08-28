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
 * ModifyRansomDefenseEventsStatus request structure.
 *
 * @method array getIds() Obtain An array of event IDs that need to be modified, and batch operation is supported.
 * @method void setIds(array $Ids) Set An array of event IDs that need to be modified, and batch operation is supported.
 * @method integer getStatus() Obtain Operations. 0: Pending; 1: Processed; 2: Trusted; 9: Delete Record
 * @method void setStatus(integer $Status) Set Operations. 0: Pending; 1: Processed; 2: Trusted; 9: Delete Record
 * @method boolean getAll() Obtain Whether to update all events with the same path.
 * @method void setAll(boolean $All) Set Whether to update all events with the same path.
 */
class ModifyRansomDefenseEventsStatusRequest extends AbstractModel
{
    /**
     * @var array An array of event IDs that need to be modified, and batch operation is supported.
     */
    public $Ids;

    /**
     * @var integer Operations. 0: Pending; 1: Processed; 2: Trusted; 9: Delete Record
     */
    public $Status;

    /**
     * @var boolean Whether to update all events with the same path.
     */
    public $All;

    /**
     * @param array $Ids An array of event IDs that need to be modified, and batch operation is supported.
     * @param integer $Status Operations. 0: Pending; 1: Processed; 2: Trusted; 9: Delete Record
     * @param boolean $All Whether to update all events with the same path.
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("All",$param) and $param["All"] !== null) {
            $this->All = $param["All"];
        }
    }
}
