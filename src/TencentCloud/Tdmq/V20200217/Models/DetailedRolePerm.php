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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Permission configuration in the topic/group dimension.
 *
 * @method string getResource() Obtain Resources corresponding to permissions.
 * @method void setResource(string $Resource) Set Resources corresponding to permissions.
 * @method boolean getPermWrite() Obtain Whether to enable production permission
 * @method void setPermWrite(boolean $PermWrite) Set Whether to enable production permission
 * @method boolean getPermRead() Obtain Whether to enable consumption permission
 * @method void setPermRead(boolean $PermRead) Set Whether to enable consumption permission
 * @method string getResourceType() Obtain Authorized resource type (Topic: topic; Group: consumer group).
 * @method void setResourceType(string $ResourceType) Set Authorized resource type (Topic: topic; Group: consumer group).
 * @method string getRemark() Obtain Resource remarks.
 * @method void setRemark(string $Remark) Set Resource remarks.
 */
class DetailedRolePerm extends AbstractModel
{
    /**
     * @var string Resources corresponding to permissions.
     */
    public $Resource;

    /**
     * @var boolean Whether to enable production permission
     */
    public $PermWrite;

    /**
     * @var boolean Whether to enable consumption permission
     */
    public $PermRead;

    /**
     * @var string Authorized resource type (Topic: topic; Group: consumer group).
     */
    public $ResourceType;

    /**
     * @var string Resource remarks.
     */
    public $Remark;

    /**
     * @param string $Resource Resources corresponding to permissions.
     * @param boolean $PermWrite Whether to enable production permission
     * @param boolean $PermRead Whether to enable consumption permission
     * @param string $ResourceType Authorized resource type (Topic: topic; Group: consumer group).
     * @param string $Remark Resource remarks.
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
