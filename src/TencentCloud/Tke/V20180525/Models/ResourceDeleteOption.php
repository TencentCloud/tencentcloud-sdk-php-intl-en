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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The policy to deal with resources in the cluster when the cluster is deleted.
 *
 * @method string getResourceType() Obtain Resource type, such as CBS, CLB, CVM
 * @method void setResourceType(string $ResourceType) Set Resource type, such as CBS, CLB, CVM
 * @method string getDeleteMode() Obtain Deletion mode for CBS resources when the cluster is deleted: terminate, retain. Other resources are terminated by default.
 * @method void setDeleteMode(string $DeleteMode) Set Deletion mode for CBS resources when the cluster is deleted: terminate, retain. Other resources are terminated by default.
 * @method boolean getSkipDeletionProtection() Obtain Whether to skip the resources with deletion protection enabled. It is false by default. When set to true, the resources with deletion protection enabled are not cleaned up. CLB with terminal nodes also belongs to the resources with deletion protection enabled.
 * @method void setSkipDeletionProtection(boolean $SkipDeletionProtection) Set Whether to skip the resources with deletion protection enabled. It is false by default. When set to true, the resources with deletion protection enabled are not cleaned up. CLB with terminal nodes also belongs to the resources with deletion protection enabled.
 */
class ResourceDeleteOption extends AbstractModel
{
    /**
     * @var string Resource type, such as CBS, CLB, CVM
     */
    public $ResourceType;

    /**
     * @var string Deletion mode for CBS resources when the cluster is deleted: terminate, retain. Other resources are terminated by default.
     */
    public $DeleteMode;

    /**
     * @var boolean Whether to skip the resources with deletion protection enabled. It is false by default. When set to true, the resources with deletion protection enabled are not cleaned up. CLB with terminal nodes also belongs to the resources with deletion protection enabled.
     */
    public $SkipDeletionProtection;

    /**
     * @param string $ResourceType Resource type, such as CBS, CLB, CVM
     * @param string $DeleteMode Deletion mode for CBS resources when the cluster is deleted: terminate, retain. Other resources are terminated by default.
     * @param boolean $SkipDeletionProtection Whether to skip the resources with deletion protection enabled. It is false by default. When set to true, the resources with deletion protection enabled are not cleaned up. CLB with terminal nodes also belongs to the resources with deletion protection enabled.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }

        if (array_key_exists("SkipDeletionProtection",$param) and $param["SkipDeletionProtection"] !== null) {
            $this->SkipDeletionProtection = $param["SkipDeletionProtection"];
        }
    }
}
