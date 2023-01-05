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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAccessKey request structure.
 *
 * @method string getAccessKeyId() Obtain ID of the specified access key that needs to be updated
 * @method void setAccessKeyId(string $AccessKeyId) Set ID of the specified access key that needs to be updated
 * @method string getStatus() Obtain Key status. Valid values: `Active` (activated), `Inactive` (not activated).
 * @method void setStatus(string $Status) Set Key status. Valid values: `Active` (activated), `Inactive` (not activated).
 * @method integer getTargetUin() Obtain UIN of the specified user. If this parameter is left empty, the access key will be updated for the current user by default.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the specified user. If this parameter is left empty, the access key will be updated for the current user by default.
 */
class UpdateAccessKeyRequest extends AbstractModel
{
    /**
     * @var string ID of the specified access key that needs to be updated
     */
    public $AccessKeyId;

    /**
     * @var string Key status. Valid values: `Active` (activated), `Inactive` (not activated).
     */
    public $Status;

    /**
     * @var integer UIN of the specified user. If this parameter is left empty, the access key will be updated for the current user by default.
     */
    public $TargetUin;

    /**
     * @param string $AccessKeyId ID of the specified access key that needs to be updated
     * @param string $Status Key status. Valid values: `Active` (activated), `Inactive` (not activated).
     * @param integer $TargetUin UIN of the specified user. If this parameter is left empty, the access key will be updated for the current user by default.
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }
    }
}
