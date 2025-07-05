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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccessKey request structure.
 *
 * @method string getAccessKeyId() Obtain ID of the specified access key that needs to be deleted
 * @method void setAccessKeyId(string $AccessKeyId) Set ID of the specified access key that needs to be deleted
 * @method integer getTargetUin() Obtain UIN of the specified user. If this parameter is left empty, the access key will be deleted for the current user by default.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the specified user. If this parameter is left empty, the access key will be deleted for the current user by default.
 */
class DeleteAccessKeyRequest extends AbstractModel
{
    /**
     * @var string ID of the specified access key that needs to be deleted
     */
    public $AccessKeyId;

    /**
     * @var integer UIN of the specified user. If this parameter is left empty, the access key will be deleted for the current user by default.
     */
    public $TargetUin;

    /**
     * @param string $AccessKeyId ID of the specified access key that needs to be deleted
     * @param integer $TargetUin UIN of the specified user. If this parameter is left empty, the access key will be deleted for the current user by default.
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

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }
    }
}
