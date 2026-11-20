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
 * Parameter configuration related to AI conversation visual understanding.
 *
 * @method boolean getEnable() Obtain <p>Whether to enable visual understanding.</p>
 * @method void setEnable(boolean $Enable) Set <p>Whether to enable visual understanding.</p>
 * @method integer getStorageType() Obtain <p>Storage type.</p><p>Enumeration values:</p><ul><li>0: Do not store.</li><li>1: Specify cloud storage. In such cases, the CloudStorage parameter is required.</li></ul><p>Default value: 0</p>
 * @method void setStorageType(integer $StorageType) Set <p>Storage type.</p><p>Enumeration values:</p><ul><li>0: Do not store.</li><li>1: Specify cloud storage. In such cases, the CloudStorage parameter is required.</li></ul><p>Default value: 0</p>
 * @method CloudStorage getCloudStorage() Obtain <p>Third-party Cloud Storage archive configuration. After configuration, the backend will automatically upload I-frames received from the SDK to the designated cloud bucket for persistent storage.</p>
 * @method void setCloudStorage(CloudStorage $CloudStorage) Set <p>Third-party Cloud Storage archive configuration. After configuration, the backend will automatically upload I-frames received from the SDK to the designated cloud bucket for persistent storage.</p>
 */
class VoiceConversationVisionConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable visual understanding.</p>
     */
    public $Enable;

    /**
     * @var integer <p>Storage type.</p><p>Enumeration values:</p><ul><li>0: Do not store.</li><li>1: Specify cloud storage. In such cases, the CloudStorage parameter is required.</li></ul><p>Default value: 0</p>
     */
    public $StorageType;

    /**
     * @var CloudStorage <p>Third-party Cloud Storage archive configuration. After configuration, the backend will automatically upload I-frames received from the SDK to the designated cloud bucket for persistent storage.</p>
     */
    public $CloudStorage;

    /**
     * @param boolean $Enable <p>Whether to enable visual understanding.</p>
     * @param integer $StorageType <p>Storage type.</p><p>Enumeration values:</p><ul><li>0: Do not store.</li><li>1: Specify cloud storage. In such cases, the CloudStorage parameter is required.</li></ul><p>Default value: 0</p>
     * @param CloudStorage $CloudStorage <p>Third-party Cloud Storage archive configuration. After configuration, the backend will automatically upload I-frames received from the SDK to the designated cloud bucket for persistent storage.</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("CloudStorage",$param) and $param["CloudStorage"] !== null) {
            $this->CloudStorage = new CloudStorage();
            $this->CloudStorage->deserialize($param["CloudStorage"]);
        }
    }
}
