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
 * Mcu relay recording. third-party object storage parameters.
 *
 * @method CloudStorage getCloudStorage() Obtain Account information for third-party cloud storage (special note: if you select storage to cloud object storage (COS), there will be a charge for shipping recorded files to COS. for details, see cloud recording pricing information. storing to VOD will incur no charge for this item.).
 * @method void setCloudStorage(CloudStorage $CloudStorage) Set Account information for third-party cloud storage (special note: if you select storage to cloud object storage (COS), there will be a charge for shipping recorded files to COS. for details, see cloud recording pricing information. storing to VOD will incur no charge for this item.).
 * @method McuCloudVod getMcuCloudVod() Obtain Account information of tencent cloud vod.
 * @method void setMcuCloudVod(McuCloudVod $McuCloudVod) Set Account information of tencent cloud vod.
 */
class McuStorageParams extends AbstractModel
{
    /**
     * @var CloudStorage Account information for third-party cloud storage (special note: if you select storage to cloud object storage (COS), there will be a charge for shipping recorded files to COS. for details, see cloud recording pricing information. storing to VOD will incur no charge for this item.).
     */
    public $CloudStorage;

    /**
     * @var McuCloudVod Account information of tencent cloud vod.
     */
    public $McuCloudVod;

    /**
     * @param CloudStorage $CloudStorage Account information for third-party cloud storage (special note: if you select storage to cloud object storage (COS), there will be a charge for shipping recorded files to COS. for details, see cloud recording pricing information. storing to VOD will incur no charge for this item.).
     * @param McuCloudVod $McuCloudVod Account information of tencent cloud vod.
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
