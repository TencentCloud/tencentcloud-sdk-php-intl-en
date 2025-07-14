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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method CloudStorage getCloudStorage() Obtain Third-Party Cloud Storage Account Information
(Note: Storing files in Object Storage COS will incur recording file delivery fees. For details, see [Cloud Recording Billing]. Storing in VOD does not incur this fee.)
Example:{"Vendor":0,"Region":"ap-shanghai","Bucket":"*","AccessKey":"*","SecretKey":"***","FileNamePrefix":["mcu_record"]}
 * @method void setCloudStorage(CloudStorage $CloudStorage) Set Third-Party Cloud Storage Account Information
(Note: Storing files in Object Storage COS will incur recording file delivery fees. For details, see [Cloud Recording Billing]. Storing in VOD does not incur this fee.)
Example:{"Vendor":0,"Region":"ap-shanghai","Bucket":"*","AccessKey":"*","SecretKey":"***","FileNamePrefix":["mcu_record"]}
 * @method McuCloudVod getMcuCloudVod() Obtain Tencent Cloud VOD Account Information
Example:{"McuTencentVod":{"ExpireTime":86400}}
 * @method void setMcuCloudVod(McuCloudVod $McuCloudVod) Set Tencent Cloud VOD Account Information
Example:{"McuTencentVod":{"ExpireTime":86400}}
 */
class McuStorageParams extends AbstractModel
{
    /**
     * @var CloudStorage Third-Party Cloud Storage Account Information
(Note: Storing files in Object Storage COS will incur recording file delivery fees. For details, see [Cloud Recording Billing]. Storing in VOD does not incur this fee.)
Example:{"Vendor":0,"Region":"ap-shanghai","Bucket":"*","AccessKey":"*","SecretKey":"***","FileNamePrefix":["mcu_record"]}
     */
    public $CloudStorage;

    /**
     * @var McuCloudVod Tencent Cloud VOD Account Information
Example:{"McuTencentVod":{"ExpireTime":86400}}
     */
    public $McuCloudVod;

    /**
     * @param CloudStorage $CloudStorage Third-Party Cloud Storage Account Information
(Note: Storing files in Object Storage COS will incur recording file delivery fees. For details, see [Cloud Recording Billing]. Storing in VOD does not incur this fee.)
Example:{"Vendor":0,"Region":"ap-shanghai","Bucket":"*","AccessKey":"*","SecretKey":"***","FileNamePrefix":["mcu_record"]}
     * @param McuCloudVod $McuCloudVod Tencent Cloud VOD Account Information
Example:{"McuTencentVod":{"ExpireTime":86400}}
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
        if (array_key_exists("CloudStorage",$param) and $param["CloudStorage"] !== null) {
            $this->CloudStorage = new CloudStorage();
            $this->CloudStorage->deserialize($param["CloudStorage"]);
        }

        if (array_key_exists("McuCloudVod",$param) and $param["McuCloudVod"] !== null) {
            $this->McuCloudVod = new McuCloudVod();
            $this->McuCloudVod->deserialize($param["McuCloudVod"]);
        }
    }
}
