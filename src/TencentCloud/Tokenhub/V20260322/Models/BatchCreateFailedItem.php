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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Batch create failed items
 *
 * @method integer getIndex() Obtain Serial number of the failed item (starting from 1, corresponding to the suffix number).
 * @method void setIndex(integer $Index) Set Serial number of the failed item (starting from 1, corresponding to the suffix number).
 * @method string getName() Obtain Name of the failed item.
 * @method void setName(string $Name) Set Name of the failed item.
 * @method string getReason() Obtain Failure reason.
 * @method void setReason(string $Reason) Set Failure reason.
 */
class BatchCreateFailedItem extends AbstractModel
{
    /**
     * @var integer Serial number of the failed item (starting from 1, corresponding to the suffix number).
     */
    public $Index;

    /**
     * @var string Name of the failed item.
     */
    public $Name;

    /**
     * @var string Failure reason.
     */
    public $Reason;

    /**
     * @param integer $Index Serial number of the failed item (starting from 1, corresponding to the suffix number).
     * @param string $Name Name of the failed item.
     * @param string $Reason Failure reason.
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
