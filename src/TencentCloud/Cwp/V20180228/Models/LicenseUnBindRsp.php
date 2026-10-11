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
 * Authorization unbinding information.
 *
 * @method string getQuuid() Obtain QUUID CVM uuid, lightweight server uuid, edge computing uuid
 * @method void setQuuid(string $Quuid) Set QUUID CVM uuid, lightweight server uuid, edge computing uuid
 * @method string getErrMsg() Obtain Reason for failure
 * @method void setErrMsg(string $ErrMsg) Set Reason for failure
 */
class LicenseUnBindRsp extends AbstractModel
{
    /**
     * @var string QUUID CVM uuid, lightweight server uuid, edge computing uuid
     */
    public $Quuid;

    /**
     * @var string Reason for failure
     */
    public $ErrMsg;

    /**
     * @param string $Quuid QUUID CVM uuid, lightweight server uuid, edge computing uuid
     * @param string $ErrMsg Reason for failure
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
