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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Flow log storage information
 *
 * @method string getStorageId() Obtain Storage instance ID, which is required when `StorageType` is `ckafka`.
 * @method void setStorageId(string $StorageId) Set Storage instance ID, which is required when `StorageType` is `ckafka`.
 * @method string getStorageTopic() Obtain Topic ID, which is required when `StorageType` is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setStorageTopic(string $StorageTopic) Set Topic ID, which is required when `StorageType` is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
 */
class FlowLogStorage extends AbstractModel
{
    /**
     * @var string Storage instance ID, which is required when `StorageType` is `ckafka`.
     */
    public $StorageId;

    /**
     * @var string Topic ID, which is required when `StorageType` is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $StorageTopic;

    /**
     * @param string $StorageId Storage instance ID, which is required when `StorageType` is `ckafka`.
     * @param string $StorageTopic Topic ID, which is required when `StorageType` is `ckafka`.
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StorageTopic",$param) and $param["StorageTopic"] !== null) {
            $this->StorageTopic = $param["StorageTopic"];
        }
    }
}
