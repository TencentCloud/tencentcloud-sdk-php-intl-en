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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FixBaselineDetect request structure.
 *
 * @method string getHostId() Obtain Host ID
 * @method void setHostId(string $HostId) Set Host ID
 * @method integer getItemId() Obtain Item ID
 * @method void setItemId(integer $ItemId) Set Item ID
 * @method array getData() Obtain Repair content
 * @method void setData(array $Data) Set Repair content
 */
class FixBaselineDetectRequest extends AbstractModel
{
    /**
     * @var string Host ID
     */
    public $HostId;

    /**
     * @var integer Item ID
     */
    public $ItemId;

    /**
     * @var array Repair content
     */
    public $Data;

    /**
     * @param string $HostId Host ID
     * @param integer $ItemId Item ID
     * @param array $Data Repair content
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
