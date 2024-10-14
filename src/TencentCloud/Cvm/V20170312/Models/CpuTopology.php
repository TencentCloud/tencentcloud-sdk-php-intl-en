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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the CPU topology of an instance.
 *
 * @method integer getCoreCount() Obtain Number of physical CPU cores to enable.
 * @method void setCoreCount(integer $CoreCount) Set Number of physical CPU cores to enable.
 * @method integer getThreadPerCore() Obtain Number of threads per core. This parameter determines whether to enable or disable hyper-threading.<br><li>1: Disable hyper-threading.</li><br><li>2: Enable hyper-threading.</li>
If not set, an instance uses the default hyper-threading policy. For how to enable or disable hyper-threading, refer to [Enabling and Disabling Hyper-Threading](https://intl.cloud.tencent.com/document/product/213/103798?from_cn_redirect=1).
 * @method void setThreadPerCore(integer $ThreadPerCore) Set Number of threads per core. This parameter determines whether to enable or disable hyper-threading.<br><li>1: Disable hyper-threading.</li><br><li>2: Enable hyper-threading.</li>
If not set, an instance uses the default hyper-threading policy. For how to enable or disable hyper-threading, refer to [Enabling and Disabling Hyper-Threading](https://intl.cloud.tencent.com/document/product/213/103798?from_cn_redirect=1).
 */
class CpuTopology extends AbstractModel
{
    /**
     * @var integer Number of physical CPU cores to enable.
     */
    public $CoreCount;

    /**
     * @var integer Number of threads per core. This parameter determines whether to enable or disable hyper-threading.<br><li>1: Disable hyper-threading.</li><br><li>2: Enable hyper-threading.</li>
If not set, an instance uses the default hyper-threading policy. For how to enable or disable hyper-threading, refer to [Enabling and Disabling Hyper-Threading](https://intl.cloud.tencent.com/document/product/213/103798?from_cn_redirect=1).
     */
    public $ThreadPerCore;

    /**
     * @param integer $CoreCount Number of physical CPU cores to enable.
     * @param integer $ThreadPerCore Number of threads per core. This parameter determines whether to enable or disable hyper-threading.<br><li>1: Disable hyper-threading.</li><br><li>2: Enable hyper-threading.</li>
If not set, an instance uses the default hyper-threading policy. For how to enable or disable hyper-threading, refer to [Enabling and Disabling Hyper-Threading](https://intl.cloud.tencent.com/document/product/213/103798?from_cn_redirect=1).
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
        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("ThreadPerCore",$param) and $param["ThreadPerCore"] !== null) {
            $this->ThreadPerCore = $param["ThreadPerCore"];
        }
    }
}
