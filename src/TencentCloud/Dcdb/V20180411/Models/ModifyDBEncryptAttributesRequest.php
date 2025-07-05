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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBEncryptAttributes request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `tdsqlshard-ow728lmc`
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `tdsqlshard-ow728lmc`
 * @method integer getEncryptEnabled() Obtain Whether to enable the data encryption (Once enabled, it can’t be disabled). Valid values: `1` (Yes), `0` (No. Default).
 * @method void setEncryptEnabled(integer $EncryptEnabled) Set Whether to enable the data encryption (Once enabled, it can’t be disabled). Valid values: `1` (Yes), `0` (No. Default).
 */
class ModifyDBEncryptAttributesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `tdsqlshard-ow728lmc`
     */
    public $InstanceId;

    /**
     * @var integer Whether to enable the data encryption (Once enabled, it can’t be disabled). Valid values: `1` (Yes), `0` (No. Default).
     */
    public $EncryptEnabled;

    /**
     * @param string $InstanceId Instance ID in the format of `tdsqlshard-ow728lmc`
     * @param integer $EncryptEnabled Whether to enable the data encryption (Once enabled, it can’t be disabled). Valid values: `1` (Yes), `0` (No. Default).
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EncryptEnabled",$param) and $param["EncryptEnabled"] !== null) {
            $this->EncryptEnabled = $param["EncryptEnabled"];
        }
    }
}
